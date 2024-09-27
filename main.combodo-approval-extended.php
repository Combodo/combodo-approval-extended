<?php
// Copyright (C) 2013-2017 Combodo SARL
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
 * Module approval-extended
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */
class ApprovalConfiguration
{
	const DEFAULT_TARGET = [
		'UserRequest' =>   [
		    'target_states' => ['new'],
		    'bypass_profiles' => 'Service Manager',
		    'reuse_previous_answers' => true,
		  ]
	];
}
class ApprovalComputeWorkingHours implements iWorkingTimeComputer
{
	public static function GetDescription()
	{
		return "Compute working hours for Approval rule on UserRequest";
	}

	public function GetDeadline($oObject, $iDuration, DateTime $oStartDate)
	{
		$sCoverageOQL = 'SELECT CoverageWindow AS cw JOIN ApprovalRule AS ar ON ar.coveragewindow_id=cw.id JOIN ServiceSubcategory AS sc ON sc.approvalrule_id = ar.id WHERE sc.id =:this->servicesubcategory_id';

		return EnhancedSLAComputation::GetDeadline($oObject, $iDuration, $oStartDate, $sCoverageOQL);
	}
	
	public function GetOpenDuration($oObject, DateTime $oStartDate, DateTime $oEndDate)
	{
		$sCoverageOQL = 'SELECT CoverageWindow AS cw JOIN ApprovalRule AS ar ON ar.coveragewindow_id=cw.id JOIN ServiceSubcategory AS sc ON sc.approvalrule_id = ar.id WHERE sc.id =:this->servicesubcategory_id';

		return EnhancedSLAComputation::GetOpenDuration($oObject, $oStartDate, $oEndDate, $sCoverageOQL);
	}
}


class HideButtonsPlugin implements iApplicationUIExtension
{
	public function OnDisplayProperties($oObject, WebPage $oPage, $bEditMode = false)
	{
		$aAllowedClasses = MetaModel::GetConfig()->GetModuleSetting('combodo-approval-extended', 'targets',ApprovalConfiguration::DEFAULT_TARGET);
		if (array_key_exists(get_class($oObject), $aAllowedClasses) && MetaModel::HasLifecycle(get_class($oObject)))
		{
			$sStateAttCode = MetaModel::GetStateAttributeCode(get_class($oObject));
			$sTargetState = $oObject->Get($sStateAttCode);

			if (in_array($sTargetState, $aAllowedClasses[get_class($oObject)][ 'target_states']) )		{
				$sOQL = 'SELECT ApprovalRule AS ar JOIN ServiceSubcategory AS sc ON sc.approvalrule_id = ar.id WHERE ar.target_class = :target_class AND ar.target_class_state = :target_state';
				$oApprovalRuleSet = new DBObjectSet( DBObjectSearch::FromOQL($sOQL),	[],	['target_class' => get_class($oObject), 'target_state' => $sTargetState]);
				if ($oApprovalRuleSet->Count() > 0) {
					$oPage->add_ready_script(
<<<JS
	$('button.action[name="next_action"]').hide();
JS
					);
				}
			}
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
