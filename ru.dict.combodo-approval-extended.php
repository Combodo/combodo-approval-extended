<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2018 Combodo SARL
 * @license	http://opensource.org/licenses/AGPL-3.0
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with iTop. If not, see <http://www.gnu.org/licenses/>
 */
Dict::Add('RU RU', 'Russian', 'Русский', array(
	// Dictionary entries go here
	'Menu:Ongoing approval' => 'Requests waiting for approval~~',
	'Menu:Ongoing approval+' => 'Requests waiting for approval~~',
	'Approbation:PublicObjectDetails' => '<p>Dear $approver->html(friendlyname)$, please take some time to approve or reject ticket $object->html(ref)$</p>
				      <b>Caller</b>: $object->html(caller_id_friendlyname)$<br>
				      <b>Title</b>: $object->html(title)$<br>
				      <b>Service</b>: $object->html(service_name)$<br>
				      <b>Service subcategory</b>: $object->html(servicesubcategory_name)$<br>
				      <b>Description</b>:<br>			     
				      $object->html(description)$<br>
				      <b>Additional information</b>:<br>
				      <div>$object->html(service_details)$</div>~~',
	'Approbation:FormBody' => '<p>Dear $approver->html(friendlyname)$, please take some time to approve or reject the ticket</p>~~',
	'Approbation:ApprovalRequested' => 'Your approval is requested~~',
	'Approbation:Introduction' => '<p>Dear $approver->html(friendlyname)$, please take some time to approve or reject ticket $object->html(friendlyname)$</p>~~',


));

//
// Class: ApprovalRule
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:ApprovalRule' => 'Approval rule~~',
	'Class:ApprovalRule+' => '~~',
	'Class:ApprovalRule/Attribute:name' => 'Name~~',
	'Class:ApprovalRule/Attribute:name+' => '~~',
	'Class:ApprovalRule/Attribute:description' => 'Description~~',
	'Class:ApprovalRule/Attribute:description+' => '~~',
	'Class:ApprovalRule/Attribute:level1_rule' => 'Approval Level 1~~',
	'Class:ApprovalRule/Attribute:level1_rule+' => '~~',
	'Class:ApprovalRule/Attribute:level1_default_approval' => 'Automatically approved if no answer at Level 1~~',
	'Class:ApprovalRule/Attribute:level1_default_approval+' => '~~',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no' => 'no~~',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no+' => 'no~~',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes' => 'yes~~',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes+' => 'yes~~',
	'Class:ApprovalRule/Attribute:level1_timeout' => 'Level 1 approval delay (hours)~~',
	'Class:ApprovalRule/Attribute:level1_timeout+' => '~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition' => 'Level 1 approval ending~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition+' => '~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reply' => 'ends on the first reply~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reply+' => 'The first reply determines the result at Level 1~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reject' => 'ends on first "Reject"~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reject+' => 'Everyone must approve~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_approve' => 'ends on first "Approve"~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_approve+' => 'Only one approval is requested~~',
	'Class:ApprovalRule/Attribute:level2_rule' => 'Approval Level 2~~',
	'Class:ApprovalRule/Attribute:level2_rule+' => '~~',
	'Class:ApprovalRule/Attribute:level2_default_approval' => 'Automatically approved if no answer at Level 2~~',
	'Class:ApprovalRule/Attribute:level2_default_approval+' => '~~',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no' => 'no~~',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no+' => 'no~~',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes' => 'yes~~',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes+' => 'yes~~',
	'Class:ApprovalRule/Attribute:level2_timeout' => 'Level 2 approval delay (hours)~~',
	'Class:ApprovalRule/Attribute:level2_timeout+' => '~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition' => 'Level 2 approval ending~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition+' => '~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reply' => 'ends on the first reply~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reply+' => 'The first reply determines the result at Level 2~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reject' => 'ends on first "Reject"~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reject+' => 'Everyone must approve~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_approve' => 'ends on first "Approve"~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_approve+' => 'Only one approval is requested~~',
	'Class:ApprovalRule/Attribute:servicesubcategory_list' => 'Service subcategory~~',
	'Class:ApprovalRule/Attribute:servicesubcategory_list+' => '~~',
	'Class:ApprovalRule/Attribute:coveragewindow_id' => 'Coverage window~~',
	'Class:ApprovalRule/Attribute:coveragewindow_id+' => '~~',
	'Class:ApprovalRule/Attribute:coveragewindow_name' => 'Coverage window name~~',
	'Class:ApprovalRule/Attribute:coveragewindow_name+' => '~~',
));

//
// Class: ServiceSubcategory
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:ServiceSubcategory/Attribute:approvalrule_id' => 'Approval rule~~',
	'Class:ServiceSubcategory/Attribute:approvalrule_id+' => '~~',
	'Class:ServiceSubcategory/Attribute:approvalrule_name' => 'Approval rule name~~',
	'Class:ServiceSubcategory/Attribute:approvalrule_name+' => '~~',
	'ApprovalRule:baseinfo' => 'General information~~',
	'ApprovalRule:Level1' => 'Approval Level 1~~',
	'ApprovalRule:Level2' => 'Approval Level 2~~',
	'Menu:ApprovalRule' => 'Approval rules~~',
	'Menu:ApprovalRule+' => 'All approval rules~~',

));

//
// Class: ExtendedApprovalScheme
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:ExtendedApprovalScheme' => 'ExtendedApprovalScheme~~',
	'Class:ExtendedApprovalScheme+' => '~~',
));

//
// Class: UserRequest
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:UserRequest/Attribute:approver_id' => 'Approver id~~',
	'Class:UserRequest/Attribute:approver_id+' => '~~',
	'Class:UserRequest/Attribute:approver_email' => 'Approver email~~',
	'Class:UserRequest/Attribute:approver_email+' => '~~',
	'Class:UserRequest/Stimulus:ev_approve' => 'Approve~~',
	'Class:UserRequest/Stimulus:ev_approve+' => '~~',
	'Class:UserRequest/Stimulus:ev_reject' => 'Reject~~',
	'Class:UserRequest/Stimulus:ev_reject+' => '~~',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'Wait for approval~~',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '~~',
));
