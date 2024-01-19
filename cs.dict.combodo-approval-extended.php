<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SARL
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
Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	// Dictionary entries go here
	'Menu:Ongoing approval' => 'Požadavky čekající na schválení',
	'Menu:Ongoing approval+' => 'Požadavky čekající na schválení',
	'Approbation:PublicObjectDetails' => '<p>Dear $approver->html(friendlyname)$, please take some time to approve or reject ticket $object->html(ref)$</p>
				      <b>Volající</b>: $object->html(caller_id_friendlyname)$<br>
				      <b>Title</b>: $object->html(title)$<br>
				      <b>Služba</b>: $object->html(service_name)$<br>
				      <b>Podkategorie služeb</b>: $object->html(servicesubcategory_name)$<br>
				      <b>Popis</b>:<br>			     
				      $object->html(description)$<br>
				      <b>Dodatečné informace</b>:<br>
				      <div>$object->html(service_details)$</div>',
	'Approbation:FormBody' => '<p>Vážený(á) $approver->html(friendlyname)$, prosím o schválení/zamítnutí Tiketu</p>',
	'Approbation:ApprovalRequested' => 'Je požadováno Vaše rozhodnutí',
	'Approbation:Introduction' => '<p>Vážený(á) $approver->html(friendlyname)$, prosím o schválení nebo zamítnutí tiketu $object->html(friendlyname)$</p>',


));

//
// Class: ApprovalRule
//

Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Class:ApprovalRule' => 'Approval rule~~',
	'Class:ApprovalRule+' => '~~',
	'Class:ApprovalRule/Attribute:name' => 'Jméno',
	'Class:ApprovalRule/Attribute:name+' => '~~',
	'Class:ApprovalRule/Attribute:description' => 'Poznámka',
	'Class:ApprovalRule/Attribute:description+' => '~~',
	'Class:ApprovalRule/Attribute:level1_rule' => 'Úroveň schvalování 1',
	'Class:ApprovalRule/Attribute:level1_rule+' => '~~',
	'Class:ApprovalRule/Attribute:level1_default_approval' => 'Automatické schválení, pokud schvalovatel na úrovni 1 neodpoví',
	'Class:ApprovalRule/Attribute:level1_default_approval+' => '~~',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no' => 'ne',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no+' => 'ne',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes' => 'ano',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes+' => 'ano',
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
	'Class:ApprovalRule/Attribute:level1_substitute_query' => 'Substitute L1~~',
	'Class:ApprovalRule/Attribute:level1_substitute_query+' => 'Substitutes are approver dependent : use `:approver->...` placeholder in the query to retrieve the corresponding substitutes~~',
	'Class:ApprovalRule/Attribute:level1_substitute_timeout' => 'Substitute notification delay L1~~',
	'Class:ApprovalRule/Attribute:level1_substitute_timeout+' => 'Substitutes will be notified if approver has not answered before this percentage of the approval delay~~',
	'Class:ApprovalRule/Attribute:level2_rule' => 'Úroveň schvalování 2',
	'Class:ApprovalRule/Attribute:level2_rule+' => '~~',
	'Class:ApprovalRule/Attribute:level2_default_approval' => 'Automatické schválení, pokud schvalovatel na úrovni 2 neodpoví',
	'Class:ApprovalRule/Attribute:level2_default_approval+' => '~~',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no' => 'ne',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no+' => 'ne',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes' => 'ano',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes+' => 'ano',
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
	'Class:ApprovalRule/Attribute:level2_substitute_query' => 'Substitute L2~~',
	'Class:ApprovalRule/Attribute:level2_substitute_query+' => 'Substitutes are approver dependent : use `:approver->...` placeholder in the query to retrieve the corresponding substitutes~~',
	'Class:ApprovalRule/Attribute:level2_substitute_timeout' => 'Substitute notification delay L2~~',
	'Class:ApprovalRule/Attribute:level2_substitute_timeout+' => 'Substitutes will be notified if approver has not answered before this percentage of the approval delay~~',
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

Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Class:ServiceSubcategory/Attribute:approvalrule_id' => 'Approval rule~~',
	'Class:ServiceSubcategory/Attribute:approvalrule_id+' => '~~',
	'Class:ServiceSubcategory/Attribute:approvalrule_name' => 'Approval rule name~~',
	'Class:ServiceSubcategory/Attribute:approvalrule_name+' => '~~',
	'ApprovalRule:baseinfo' => 'General information~~',
	'ApprovalRule:Level1' => 'Schvalování úroveň 1',
	'ApprovalRule:Level2' => 'Schvalování úroveň 1',
	'Menu:ApprovalRule' => 'Pravidla schvalování',
	'Menu:ApprovalRule+' => 'Všechna pravidla schvalování',

));

//
// Class: ExtendedApprovalScheme
//

Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Class:ExtendedApprovalScheme' => 'ExtendedApprovalScheme~~',
	'Class:ExtendedApprovalScheme+' => '~~',
));

//
// Class: UserRequest
//

Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Class:UserRequest/Attribute:approver_id' => 'Id schvalovatele',
	'Class:UserRequest/Attribute:approver_id+' => '~~',
	'Class:UserRequest/Attribute:approver_email' => 'Email schvalovatele',
	'Class:UserRequest/Attribute:approver_email+' => '~~',
	'Class:UserRequest/Stimulus:ev_approve' => 'Schváleno',
	'Class:UserRequest/Stimulus:ev_approve+' => '~~',
	'Class:UserRequest/Stimulus:ev_reject' => 'Zamítnuto',
	'Class:UserRequest/Stimulus:ev_reject+' => '~~',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'Čeká na schválení',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '~~',
));
