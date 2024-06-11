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
Dict::Add('CS CZ', 'Czech', 'Čeština', [
	'Approbation:ApprovalRequested' => 'Je požadováno Vaše rozhodnutí',
	'Approbation:FormBody' => '<p>Vážený(á) $approver->html(friendlyname)$, prosím o schválení/zamítnutí Tiketu</p>',
	'Approbation:Introduction' => '<p>Vážený(á) $approver->html(friendlyname)$, prosím o schválení nebo zamítnutí tiketu $object->html(friendlyname)$</p>',
	'Approbation:PublicObjectDetails' => '<p>Dear $approver->html(friendlyname)$, please take some time to approve or reject ticket $object->html(ref)$</p>
				      <b>Volající</b>: $object->html(caller_id_friendlyname)$<br>
				      <b>Title</b>: $object->html(title)$<br>
				      <b>Služba</b>: $object->html(service_name)$<br>
				      <b>Podkategorie služeb</b>: $object->html(servicesubcategory_name)$<br>
				      <b>Popis</b>:<br>			     
				      $object->html(description)$<br>
				      <b>Dodatečné informace</b>:<br>
				      <div>$object->html(service_details)$</div>',
	'ApprovalRule:Level1' => 'Schvalování úroveň 1',
	'ApprovalRule:Level2' => 'Schvalování úroveň 1',
	'ApprovalRule:baseinfo' => 'General information~~',
	'Class:ApprovalRule' => 'Approval rule~~',
	'Class:ApprovalRule+' => '~~',
	'Class:ApprovalRule/Attribute:coveragewindow_id' => 'Coverage window~~',
	'Class:ApprovalRule/Attribute:coveragewindow_id+' => '~~',
	'Class:ApprovalRule/Attribute:coveragewindow_name' => 'Coverage window name~~',
	'Class:ApprovalRule/Attribute:coveragewindow_name+' => '~~',
	'Class:ApprovalRule/Attribute:description' => 'Poznámka',
	'Class:ApprovalRule/Attribute:description+' => '~~',
	'Class:ApprovalRule/Attribute:level1_default_approval' => 'Automatické schválení, pokud schvalovatel na úrovni 1 neodpoví',
	'Class:ApprovalRule/Attribute:level1_default_approval+' => 'Automatically approved if no answer from neither approvers nor substitutes~~',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no' => 'ne',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no+' => 'ne',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes' => 'ano',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes+' => 'ano',
	'Class:ApprovalRule/Attribute:level1_exit_condition' => 'Approval ending L1~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition+' => 'Ending criteria for this approval level~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_approve' => 'on first "Approve"~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_approve+' => 'Only one approval is requested~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reject' => 'on first "Reject"~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reject+' => 'Everyone must approve~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reply' => 'on first reply~~',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reply+' => 'The first reply determines the result at Level 1~~',
	'Class:ApprovalRule/Attribute:level1_rule' => 'Úroveň schvalování 1',
	'Class:ApprovalRule/Attribute:level1_rule+' => 'OQL to retrieve the Approvers appropriate for the Ticket, using placeholder like `:this->caller_id`~~',
	'Class:ApprovalRule/Attribute:level1_substitute_query' => 'Substitute L1~~',
	'Class:ApprovalRule/Attribute:level1_substitute_query+' => 'Substitutes are approver dependent : use `:approver->...` placeholder in the query to retrieve the corresponding substitutes~~',
	'Class:ApprovalRule/Attribute:level1_substitute_timeout' => 'Substitute notification delay L1~~',
	'Class:ApprovalRule/Attribute:level1_substitute_timeout+' => 'Substitutes will be notified if approver has not answered before this percentage of the approval delay~~',
	'Class:ApprovalRule/Attribute:level1_timeout' => 'Approval delay L1~~',
	'Class:ApprovalRule/Attribute:level1_timeout+' => 'Expressed in hours~~',
	'Class:ApprovalRule/Attribute:level2_default_approval' => 'Automatické schválení, pokud schvalovatel na úrovni 2 neodpoví',
	'Class:ApprovalRule/Attribute:level2_default_approval+' => 'Automatically approved if no answer from neither approvers nor substitutes~~',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no' => 'ne',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no+' => 'ne',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes' => 'ano',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes+' => 'ano',
	'Class:ApprovalRule/Attribute:level2_exit_condition' => 'Approval ending L2~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition+' => 'Ending criteria for this approval level~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_approve' => 'on first "Approve"~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_approve+' => 'Only one approval is requested~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reject' => 'on first "Reject"~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reject+' => 'Everyone must approve~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reply' => 'on first reply~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reply+' => 'The first reply determines the result at Level 2~~',
	'Class:ApprovalRule/Attribute:level2_rule' => 'Úroveň schvalování 2',
	'Class:ApprovalRule/Attribute:level2_rule+' => 'OQL to retrieve the Approvers appropriate for the Ticket, using placeholder like `:this->caller_id`~~',
	'Class:ApprovalRule/Attribute:level2_substitute_query' => 'Substitute L2~~',
	'Class:ApprovalRule/Attribute:level2_substitute_query+' => 'Substitutes are approver dependent : use `:approver->...` placeholder in the query to retrieve the corresponding substitutes~~',
	'Class:ApprovalRule/Attribute:level2_substitute_timeout' => 'Substitute notification delay L2~~',
	'Class:ApprovalRule/Attribute:level2_substitute_timeout+' => 'Substitutes will be notified if approver has not answered before this percentage of the approval delay~~',
	'Class:ApprovalRule/Attribute:level2_timeout' => 'Approval delay L2~~',
	'Class:ApprovalRule/Attribute:level2_timeout+' => 'Expressed in hours~~',
	'Class:ApprovalRule/Attribute:name' => 'Jméno',
	'Class:ApprovalRule/Attribute:name+' => '~~',
	'Class:ApprovalRule/Attribute:servicesubcategory_list' => 'Podkategorie služeb',
	'Class:ApprovalRule/Attribute:servicesubcategory_list+' => '~~',
	'Class:ExtendedApprovalScheme' => 'ExtendedApprovalScheme~~',
	'Class:ExtendedApprovalScheme+' => '~~',
	'Class:ServiceSubcategory/Attribute:approvalrule_id' => 'Approval rule~~',
	'Class:ServiceSubcategory/Attribute:approvalrule_id+' => '~~',
	'Class:ServiceSubcategory/Attribute:approvalrule_name' => 'Approval rule name~~',
	'Class:ServiceSubcategory/Attribute:approvalrule_name+' => '~~',
	'Class:UserRequest/Attribute:approver_email' => 'Email schvalovatele',
	'Class:UserRequest/Attribute:approver_email+' => '~~',
	'Class:UserRequest/Attribute:approver_id' => 'Id schvalovatele',
	'Class:UserRequest/Attribute:approver_id+' => '~~',
	'Class:UserRequest/Stimulus:ev_approve' => 'Schváleno',
	'Class:UserRequest/Stimulus:ev_approve+' => '~~',
	'Class:UserRequest/Stimulus:ev_reject' => 'Zamítnuto',
	'Class:UserRequest/Stimulus:ev_reject+' => '~~',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'Čeká na schválení',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '~~',
	'Menu:ApprovalRule' => 'Pravidla schvalování',
	'Menu:ApprovalRule+' => 'Všechna pravidla schvalování',
	'Menu:Ongoing approval' => 'Požadavky čekající na schválení',
	'Menu:Ongoing approval+' => 'Požadavky čekající na schválení',
]);
