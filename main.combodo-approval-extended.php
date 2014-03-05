<?php
// Copyright (C) 2013 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA


/**
 * Module approval-demo
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

class ApprovalComputeWorkingHours implements iWorkingTimeComputer
{
	public static function GetDescription()
	{
		return "Compute working hours for Approval rule on UserRequest";
	}

	public function GetDeadline($oObject, $iDuration, DateTime $oStartDate)
	{
		$sCoverageOQL = 'SELECT CoverageWindow AS cw JOIN ApprovalRule AS ar ON ar.coveragewindow_id=cw.id JOIN ServiceSubcategory AS sc ON sc.approvalrule_id = ar.id WHERE sc.id =:this->servicesubcategory_id';
		$oCoverage = null;

		$sHolidaysOQL = MetaModel::GetModuleSetting('combodo-sla-computation', 'holidays_oql', '');
		if ($sHolidaysOQL != '')
		{
			$oHolidaysSet = new DBObjectSet(DBObjectSearch::FromOQL($sHolidaysOQL), array(), array('this' => $oObject));
		}
		else
		{
			$oHolidaysSet = DBObjectSet::FromScratch('Holiday'); // Build an empty set
		}

		if ($sCoverageOQL != '')
		{
			$oCoverageSet = new DBObjectSet(DBObjectSearch::FromOQL($sCoverageOQL), array(), array('this' => $oObject));
		}
		else
		{
			$oCoverageSet = DBObjectSet::FromScratch('CoverageWindow');
		}
		switch($oCoverageSet->Count())
		{
			case 0:
			// No coverage window: 24x7 computation
			$oDeadline = clone $oStartDate;
			$oDeadline->modify( '+'.$iDuration.' seconds');			
			break;
			
			case 1:
			$oCoverage = $oCoverageSet->Fetch();
			$oDeadline = EnhancedSLAComputation::GetDeadlineFromCoverage($oCoverage, $oHolidaysSet, $iDuration, $oStartDate);
			break;
			
			default:
			$oDeadline = null;
			// Several coverage windows found, use the one that gives the stricter deadline
			while($oCoverage = $oCoverageSet->Fetch())
			{
				$oTmpDeadline = EnhancedSLAComputation::GetDeadlineFromCoverage($oCoverage, $oHolidaysSet, $iDuration, $oStartDate);
				// Retain the nearer deadline
				// According to the PHP documentation, the plain comparison operator between DateTime objects
				// (i.e $oTmpDeadline < $oDeadline) is only implemented in PHP 5.2.2
				if ( ($oDeadline == null) || ($oTmpDeadline->format('U') < $oDeadline->format('U')))
				{
					$oDeadline = $oTmpDeadline;
				}			
			}
		}

		return $oDeadline;
	}
	
	public function GetOpenDuration($oObject, DateTime $oStartDate, DateTime $oEndDate)
	{
		$sCoverageOQL = 'SELECT CoverageWindow AS cw JOIN ApprovalRule AS ar ON ar.coveragewindow_id=cw.id JOIN ServiceSubcategory AS sc ON sc.approvalrule_id = ar.id WHERE sc.id =:this->servicesubcategory_id';
		$oCoverage = null;

		$sHolidaysOQL = MetaModel::GetModuleSetting('combodo-sla-computation', 'holidays_oql', '');
		if ($sHolidaysOQL != '')
		{
			$oHolidaysSet = new DBObjectSet(DBObjectSearch::FromOQL($sHolidaysOQL), array(), array('this' => $oObject));
		}
		else
		{
			$oHolidaysSet = DBObjectSet::FromScratch('Holiday'); // Build an empty set
		}

		if ($sCoverageOQL != '')
		{
			$oCoverageSet = new DBObjectSet(DBObjectSearch::FromOQL($sCoverageOQL), array(), array('this' => $oObject));
		}
		else
		{
			$oCoverageSet = DBObjectSet::FromScratch('CoverageWindow');
		}

		switch($oCoverageSet->Count())
		{
			case 0:
			// No coverage window: 24x7 computation.. what about holidays ??
			$iDuration = EnhancedSLAComputation::GetOpenDuration($oObject, $oStartDate, $oEndDate);			
			break;
			
			case 1:
			$oCoverage = $oCoverageSet->Fetch();
			$iDuration = EnhancedSLAComputation::GetOpenDurationFromCoverage($oCoverage, $oHolidaysSet, $oStartDate, $oEndDate);
 	
			break;
			
			default:
			$iDuration = null;
			// Several coverage windows found, use the one that gives the stricter deadline, thus the longer elasped duration
			while($oCoverage = $oCoverageSet->Fetch())
			{
				$iTmpDuration = EnhancedSLAComputation::GetOpenDurationFromCoverage($oCoverage, $oHolidaysSet, $oStartDate, $oEndDate);
				// Retain the longer duration
				if (($iDuration == null) || ($iTmpDuration > $iDuration))
				{
					$iDuration = $iTmpDuration;
				}			
			}
		}
		return $iDuration;
	}
}


class ExtendedApprovalScheme extends ApprovalScheme
{
	public static function Init()
	{
		$aParams = array
		(
			"category" => "",
			"key_type" => "autoincrement",
			"name_attcode" => array("obj_class", "obj_key"),
			"state_attcode" => "",
			"reconc_keys" => array(),
			"db_table" => "my_approval_scheme",
			"db_key_field" => "id",
			"db_finalclass_field" => "",
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
	}

	public static function GetApprovalScheme($oObject, $sReachingState)
	{
		if ((get_class($oObject) != 'UserRequest'))
		{
			return null;
		}
		$sTargetState = MetaModel::GetConfig()->GetModuleSetting('combodo-approval-extended', 'target_state', 'new');
		if ($sReachingState != $sTargetState)
		{
			return null;
		}
	
		$sOQL = 'SELECT ApprovalRule AS ar JOIN ServiceSubcategory AS sc ON sc.approvalrule_id = ar.id WHERE sc.id = :servicesubcategory';
		$oApprovalRuleSet = new DBObjectSet(
			DBObjectSearch::FromOQL($sOQL),
			array(),
			array('servicesubcategory' => $oObject->Get('servicesubcategory_id'))
		);

		// check for level1 rules
		if ($oApprovalRuleSet->count() == 0)
		{
			return null;
		}

		$oApprovalRule = $oApprovalRuleSet->fetch();
		$sApproverLevel1 = $oApprovalRule->Get('level1_rule');

		$oApproverLevel1Set = new DBObjectSet(DBObjectSearch::FromOQL($sApproverLevel1), array(), $oObject->ToArgs('this'));
		if ($oApproverLevel1Set->count() == 0)
		{
			return null;
		}

		$oObject->ApplyStimulus('ev_wait_for_approval');

		$oScheme = new ExtendedApprovalScheme();	
		$aContacts = array();	
		while ($oApproverLevel1 = $oApproverLevel1Set->Fetch())
		{
			$sType = get_class($oApproverLevel1);
			$aContacts[] = array(
				'class' => $sType,
				'id' => $oApproverLevel1->GetKey(),
			);
		}
		$bApproveOnTimeout = ($oApprovalRule->Get('level1_default_approval') == 'yes');
		$oScheme->AddStep($aContacts, $oApprovalRule->Get('level1_timeout')*3600 /*timeout (s)*/, $bApproveOnTimeout/* approve on timeout*/, self::EXIT_ON_FIRST_REPLY);	

		// check for level2 rules
		$sApproverLevel2 = $oApprovalRule->Get('level2_rule');
		if ($sApproverLevel2 != '')
		{
			$oApproverLevel2Set = new DBObjectSet(DBObjectSearch::FromOQL($sApproverLevel2), array(), $oObject->ToArgs('this'));
			if ($oApproverLevel2Set->count() != 0)
			{
				$aContacts = array();
				while ($oApproverLevel2 = $oApproverLevel2Set->Fetch())
				{
					$sType = get_class($oApproverLevel2);
					$aContacts[] = array(
						'class' => $sType,
						'id' => $oApproverLevel2->GetKey(),
					);
				}
				$bApproveOnTimeout = ($oApprovalRule->Get('level2_default_approval') == 'yes');
				$oScheme->AddStep($aContacts, $oApprovalRule->Get('level2_timeout')*3600 /*timeout (s)*/, $bApproveOnTimeout /* approve on timeout*/, self::EXIT_ON_FIRST_REPLY);	
			}
		}

		return $oScheme;
	}

	public function GetEmailSubject($sContactClass, $iContactId)
	{
		$sEmailSubject = Dict::S('Approbation:ApprovalSubject');
		return $sEmailSubject;
	}


	public function GetEmailBody($sContactClass, $iContactId)
	{
		$sBody = Dict::S('Approbation:ApprovalBody');
		return $sBody;

	}

	public function GetFormBody($sContactClass, $iContactId)
	{
		$sBody = Dict::S('Approbation:FormBody');
		return $sBody;

	}

	public function GetTitle($sContactClass, $iContactId)
	{
		$sValue = Dict::S('Approbation:ApprovalRequested');
		return $sValue;
	}

	public function GetIntroduction($sContactClass, $iContactId)
	{
		$sIntroduction = Dict::S('Approbation:Introduction');
		return $sIntroduction;
	}

	public function DoApprove(&$oObject)
	{
		$oObject->ApplyStimulus('ev_approve');
	}

	public function DoReject(&$oObject)
	{
		//$oObject->Set('reject_reason', "The change add been rejected");
		$oObject->ApplyStimulus('ev_reject');
	}

	protected function GetWorkingTimeComputer()
	{
		return 'ApprovalComputeWorkingHours';
	}

	public function IsAllowedToSeeObjectDetails($oApprover, $oObject)
	{
		if (is_null(UserRights::GetUserObject()))
		{
			// Not logged in
			return false;
		}
		return true;
	}

	/**
	 * Overridable to implement the abort feature
	 * @param oUser (implicitely the current user if null)	 
	 * Return true if the given user is allowed to abort	 
	 */	
	public function IsAllowedToAbort($oUser = null)
	{
		if (is_null($oUser))
		{
			$oUser = UserRights::GetUserObject();
		}
		if (is_null($oUser))
		{
			return false;
		}

		$sAllowedProfiles = MetaModel::GetConfig()->GetModuleSetting('combodo-approval-extended', 'bypass_profiles', 'Administrator, Service Manager');
		$aAllowed = array();
		foreach (explode(',', $sAllowedProfiles) as $sProfileRaw)
		{
			$aAllowed[] = trim($sProfileRaw);
		}

		$oProfileSet = $oUser->Get('profile_list');
		while ($oProfile = $oProfileSet->Fetch())
		{
			$sProfileName = $oProfile->Get('profile');
			if (in_array($sProfileName, $aAllowed))
			{
				return true;
			}
		}
		return false;
	}
}


class HideButtonsPlugin implements iApplicationUIExtension
{
	public function OnDisplayProperties($oObject, WebPage $oPage, $bEditMode = false)
	{
		if ( (get_class($oObject) == 'UserRequest' ) && ( $oObject->IsNew()) )
		{
			$oPage->add_ready_script(

<<<EOF
$('button.action[name="next_action"]').hide();
EOF
			);
		}
	}


	public function OnDisplayRelations($oObject, WebPage $oPage, $bEditMode = false)
	{

	}

	public function OnFormSubmit($oObject, $sFormPrefix = '')
	{

	}

	public function OnFormCancel($sTempId)
	{

	}

	public function EnumUsedAttributes($oObject)
	{
		return array();
	}


	public function GetIcon($oObject)
	{
		return '';
	}

	public function GetHilightClass($oObject)
	{
		// Possible return values are:
		// HILIGHT_CLASS_CRITICAL, HILIGHT_CLASS_WARNING, HILIGHT_CLASS_OK, HILIGHT_CLASS_NONE
		return HILIGHT_CLASS_NONE;
	}

	public function EnumAllowedActions(DBObjectSet $oSet)

	{
		// No action
		return array();
	}
}

class ApprovalFromUI implements iPopupMenuExtension
{
	/**
	 * Get the list of items to be added to a menu.
	 *
	 * This method is called by the framework for each menu.
	 * The items will be inserted in the menu in the order of the returned array.
	 * @param int $iMenuId The identifier of the type of menu, as listed by the constants MENU_xxx
	 * @param mixed $param Depends on $iMenuId, see the constants defined above
	 * @return object[] An array of ApplicationPopupMenuItem or an empty array if no action is to be added to the menu
	 */
	public static function EnumItems($iMenuId, $param)
	{
		return ApprovalScheme::GetPopMenuItems($iMenuId, $param);
	}
}

$oMyMenuGroup = new MenuGroup('RequestManagement', 30 /* fRank */);
new WebPageMenuNode('Ongoing approval', utils::GetAbsoluteUrlModulePage('approval-base', 'report.php', array('class' => 'UserRequest', 'do_filter_my_approvals' => 'on')), $oMyMenuGroup->GetIndex(), 6);
