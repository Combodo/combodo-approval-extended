<?php
// Copyright (C) 2012 Combodo SARL
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
 * Localized data
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	// Dictionary entries go here
	'Menu:Ongoing approval' => 'Solicitações aguardando aprovação',
	'Menu:Ongoing approval+' => 'Solicitações aguardando aprovação',
	'Approbation:PublicObjectDetails' => '<p>Caro $approver->html(friendlyname)$, por favor, dedique algum tempo para aprovar ou rejeitar a solicitação $object->html(ref)$</p>
				      <b>Solicitante</b>: $object->html(caller_id_friendlyname)$<br>
				      <b>Título</b>: $object->html(title)$<br>
				      <b>Serviço</b>: $object->html(service_name)$<br>
				      <b>Sub-categoria de serviço</b>: $object->html(servicesubcategory_name)$<br>
				      <b>Descrição</b>:<br>
				      $object->html(description)$<br>
				      <b>Informação adicional</b>:<br>
				      <div>$object->html(service_details)$</div>',
	'Approbation:FormBody' => '<p>Caro $approver->html(friendlyname)$, por favor, dedique algum tempo para aprovar ou rejeitar a solicitação</p>',
	'Approbation:ApprovalRequested' => 'Sua aprovação é solicitada',
	'Approbation:Introduction' => '<p>Caro $approver->html(friendlyname)$, por favor, dedique algum tempo para aprovar ou rejeitar a solicitação $object->html(friendlyname)$</p>',


));

//
// Class: ApprovalRule
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:ApprovalRule' => 'Regra de aprovação',
	'Class:ApprovalRule+' => '',
	'Class:ApprovalRule/Attribute:name' => 'Nome',
	'Class:ApprovalRule/Attribute:name+' => '',
	'Class:ApprovalRule/Attribute:description' => 'Descrição',
	'Class:ApprovalRule/Attribute:description+' => '',
	'Class:ApprovalRule/Attribute:level1_rule' => 'Nível 1 de aprovação',
	'Class:ApprovalRule/Attribute:level1_rule+' => '',
	'Class:ApprovalRule/Attribute:level1_default_approval' => 'Aprovado automaticamente se não houver resposta no nível 1',
	'Class:ApprovalRule/Attribute:level1_default_approval+' => '',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no' => 'não',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no+' => 'não',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes' => 'sim',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes+' => 'sim',
	'Class:ApprovalRule/Attribute:level1_timeout' => 'Atraso de aprovação de nível 1 (horas)',
	'Class:ApprovalRule/Attribute:level1_timeout+' => '',
	'Class:ApprovalRule/Attribute:level1_exit_condition' => 'Término da aprovação de nível 1',
	'Class:ApprovalRule/Attribute:level1_exit_condition+' => '',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reply' => 'Finaliza na primeira resposta',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reply+' => 'A primeira resposta determina o resultado no nível 1',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reject' => 'Finaliza na primeira "Rejeição"',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reject+' => 'Todos devem aprovar',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_approve' => 'Finaliza na primeira "Aprovação"',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_approve+' => 'Apenas uma aprovação é solicitada',
	'Class:ApprovalRule/Attribute:level2_rule' => 'Nível 2 de aprovação',
	'Class:ApprovalRule/Attribute:level2_rule+' => '',
	'Class:ApprovalRule/Attribute:level2_default_approval' => 'Aprovado automaticamente se não houver resposta no nível 2',
	'Class:ApprovalRule/Attribute:level2_default_approval+' => '',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no' => 'não',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no+' => 'não',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes' => 'sim',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes+' => 'sim',
	'Class:ApprovalRule/Attribute:level2_timeout' => 'Atraso de aprovação de nível 2 (horas)',
	'Class:ApprovalRule/Attribute:level2_timeout+' => '',
	'Class:ApprovalRule/Attribute:level2_exit_condition' => 'Término da aprovação de nível 2',
	'Class:ApprovalRule/Attribute:level2_exit_condition+' => '',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reply' => 'Finaliza na primeira resposta',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reply+' => 'A primeira resposta determina o resultado do nível 2',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reject' => 'Finaliza na primeira "Rejeição"',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reject+' => 'Todos devem aprovar',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_approve' => 'Finaliza na primeira "Aprovação"',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_approve+' => 'Apenas uma aprovação é solicitada',
	'Class:ApprovalRule/Attribute:servicesubcategory_list' => 'Sub-categoria de serviços',
	'Class:ApprovalRule/Attribute:servicesubcategory_list+' => '',
	'Class:ApprovalRule/Attribute:coveragewindow_id' => 'Janela de cobertura',
	'Class:ApprovalRule/Attribute:coveragewindow_id+' => '',
	'Class:ApprovalRule/Attribute:coveragewindow_name' => 'Nome da Janela de cobertura',
	'Class:ApprovalRule/Attribute:coveragewindow_name+' => '',
));

//
// Class: ServiceSubcategory
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:ServiceSubcategory/Attribute:approvalrule_id' => 'Regra de aprovação',
	'Class:ServiceSubcategory/Attribute:approvalrule_id+' => '',
	'Class:ServiceSubcategory/Attribute:approvalrule_name' => 'Nome da regra de aprovação',
	'Class:ServiceSubcategory/Attribute:approvalrule_name+' => '',
	'ApprovalRule:baseinfo' => 'Informação geral',
	'ApprovalRule:Level1' => 'Nível de aprovação 1',
	'ApprovalRule:Level2' => 'Nível de aprovação 2',
	'Menu:ApprovalRule' => 'Regras de aprovação',
	'Menu:ApprovalRule+' => 'Todas as regras de aprovação',

));

//
// Class: ExtendedApprovalScheme
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:ExtendedApprovalScheme' => 'ExtendedApprovalScheme~~',
	'Class:ExtendedApprovalScheme+' => '~~',
));

//
// Class: UserRequest
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
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
