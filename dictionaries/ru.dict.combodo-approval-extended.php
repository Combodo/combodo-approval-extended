<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * 
 */
/**
 *
 */
Dict::Add('RU RU', 'Russian', 'Русский', [
	'Approbation:ApprovalRequested' => 'Your approval is requested~~',
	'Approbation:FormBody' => '<p>Dear $approver->html(friendlyname)$, please take some time to approve or reject the ticket</p>~~',
	'Approbation:Introduction' => '<p>Dear $approver->html(friendlyname)$, please take some time to approve or reject ticket $object->html(friendlyname)$</p>~~',
	'Approbation:PublicObjectDetails' => '<p>Dear $approver->html(friendlyname)$, please take some time to approve or reject ticket $object->html(ref)$</p>
				      <b>Caller</b>: $object->html(caller_id_friendlyname)$<br>
				      <b>Title</b>: $object->html(title)$<br>
				      <b>Service</b>: $object->html(service_name)$<br>
				      <b>Service subcategory</b>: $object->html(servicesubcategory_name)$<br>
				      <b>Description</b>:<br>			     
				      $object->html(description)$<br>
				      <b>Additional information</b>:<br>
				      <div>$object->html(service_details)$</div>~~',
	'ApprovalRule:Level1' => 'Approval Level 1~~',
	'ApprovalRule:Level2' => 'Approval Level 2~~',
	'ApprovalRule:baseinfo' => 'General information~~',
	'Class:ApprovalRule' => 'Approval rule~~',
	'Class:ApprovalRule+' => '~~',
	'Class:ApprovalRule/Attribute:coveragewindow_id' => 'Coverage window~~',
	'Class:ApprovalRule/Attribute:coveragewindow_id+' => '~~',
	'Class:ApprovalRule/Attribute:coveragewindow_name' => 'Coverage window name~~',
	'Class:ApprovalRule/Attribute:coveragewindow_name+' => '~~',
	'Class:ApprovalRule/Attribute:description' => 'Description~~',
	'Class:ApprovalRule/Attribute:description+' => '~~',
	'Class:ApprovalRule/Attribute:level1_default_approval' => 'Approved if no answer L1~~',
	'Class:ApprovalRule/Attribute:level1_default_approval+' => 'Automatically approved if no answer from neither approvers nor substitutes~~',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no' => 'no~~',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no+' => '',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes' => 'yes~~',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes+' => '',
	'Class:ApprovalRule/Attribute:level1_exit_condition' => 'Approval ending L1~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition+' => 'Ending criteria for this approval level~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_approve' => 'on first "Approve"~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_approve+' => 'Only one approval is requested~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reject' => 'on first "Reject"~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reject+' => 'Everyone must approve~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reply' => 'on first reply~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reply+' => 'The first reply determines the result at Level 1~~',
	'Class:ApprovalRule/Attribute:level1_rule' => 'Approvers L1~~',
	'Class:ApprovalRule/Attribute:level1_rule+' => 'OQL to retrieve the Approvers appropriate for the Ticket, using placeholder like `:this->caller_id`~~',
	'Class:ApprovalRule/Attribute:level1_substitute_query' => 'Substitute L1~~',
	'Class:ApprovalRule/Attribute:level1_substitute_query+' => 'Substitutes are approver dependent : use `:approver->...` placeholder in the query to retrieve the corresponding substitutes~~',
	'Class:ApprovalRule/Attribute:level1_substitute_timeout' => 'Substitute notification delay L1~~',
	'Class:ApprovalRule/Attribute:level1_substitute_timeout+' => 'Substitutes will be notified if approver has not answered before this percentage of the approval delay~~',
	'Class:ApprovalRule/Attribute:level1_timeout' => 'Approval delay L1~~',
	'Class:ApprovalRule/Attribute:level1_timeout+' => 'Expressed in hours~~',
	'Class:ApprovalRule/Attribute:level2_default_approval' => 'Approved if no answer L2~~',
	'Class:ApprovalRule/Attribute:level2_default_approval+' => 'Automatically approved if no answer from neither approvers nor substitutes~~',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no' => 'no~~',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no+' => '',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes' => 'yes~~',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes+' => '',
	'Class:ApprovalRule/Attribute:level2_exit_condition' => 'Approval ending L2~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition+' => 'Ending criteria for this approval level~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_approve' => 'on first "Approve"~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_approve+' => 'Only one approval is requested~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reject' => 'on first "Reject"~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reject+' => 'Everyone must approve~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reply' => 'on first reply~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reply+' => 'The first reply determines the result at Level 2~~',
	'Class:ApprovalRule/Attribute:level2_rule' => 'Approvers L2~~',
	'Class:ApprovalRule/Attribute:level2_rule+' => 'OQL to retrieve the Approvers appropriate for the Ticket, using placeholder like `:this->caller_id`~~',
	'Class:ApprovalRule/Attribute:level2_substitute_query' => 'Substitute L2~~',
	'Class:ApprovalRule/Attribute:level2_substitute_query+' => 'Substitutes are approver dependent : use `:approver->...` placeholder in the query to retrieve the corresponding substitutes~~',
	'Class:ApprovalRule/Attribute:level2_substitute_timeout' => 'Substitute notification delay L2~~',
	'Class:ApprovalRule/Attribute:level2_substitute_timeout+' => 'Substitutes will be notified if approver has not answered before this percentage of the approval delay~~',
	'Class:ApprovalRule/Attribute:level2_timeout' => 'Approval delay L2~~',
	'Class:ApprovalRule/Attribute:level2_timeout+' => 'Expressed in hours~~',
	'Class:ApprovalRule/Attribute:name' => 'Name~~',
	'Class:ApprovalRule/Attribute:name+' => '~~',
	'Class:ApprovalRule/Attribute:servicesubcategory_list' => 'Service subcategory~~',
	'Class:ApprovalRule/Attribute:servicesubcategory_list+' => '~~',
	'Class:ExtendedApprovalScheme' => 'ExtendedApprovalScheme~~',
	'Class:ExtendedApprovalScheme+' => '~~',
	'Class:ServiceSubcategory/Attribute:approvalrule_id' => 'Approval rule~~',
	'Class:ServiceSubcategory/Attribute:approvalrule_id+' => '~~',
	'Class:ServiceSubcategory/Attribute:approvalrule_name' => 'Approval rule name~~',
	'Class:ServiceSubcategory/Attribute:approvalrule_name+' => '~~',
	'Class:UserRequest/Attribute:approver_email' => 'Approver email~~',
	'Class:UserRequest/Attribute:approver_email+' => '~~',
	'Class:UserRequest/Attribute:approver_id' => 'Approver id~~',
	'Class:UserRequest/Attribute:approver_id+' => '~~',
	'Class:UserRequest/Stimulus:ev_approve' => 'Approve~~',
	'Class:UserRequest/Stimulus:ev_approve+' => '~~',
	'Class:UserRequest/Stimulus:ev_reject' => 'Reject~~',
	'Class:UserRequest/Stimulus:ev_reject+' => '~~',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'Wait for approval~~',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '~~',
	'Menu:ApprovalRule' => 'Approval rules~~',
	'Menu:ApprovalRule+' => 'All approval rules~~',
	'Menu:Ongoing approval' => 'Requests waiting for approval~~',
	'Menu:Ongoing approval+' => 'Requests waiting for approval~~',
]);
