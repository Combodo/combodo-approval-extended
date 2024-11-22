<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * 
 */
/**
 * @author Miguel Turrubiates <miguel_tf@yahoo.com>
 *
 */
Dict::Add('ES CR', 'Spanish', 'Español, Castellano', [
	'Approbation:ApprovalRequested' => 'Su aprobación es requerida',
	'Approbation:FormBody' => '<p>Estimado(a) $approver->html(friendlyname)$, por favor tome un tiempo para aprobar o rechazar el ticket</p>',
	'Approbation:Introduction' => '<p>Estimado(a) $approver->html(friendlyname)$, por favor tome un tiempo para aprobar o rechazar el ticket $object->html(friendlyname)$</p>',
	'Approbation:PublicObjectDetails' => '<p>Estimado(a) $approver->html(friendlyname)$, por favor tome un tiempo para aprobar o rechazar el ticket $object->html(ref)$</p>
				      <b>Solicitante</b>: $object->html(caller_id_friendlyname)$<br>
				      <b>Asunto</b>: $object->html(title)$<br>
				      <b>Servicio</b>: $object->html(service_name)$<br>
				      <b>Subcategoria de Servicio</b>: $object->html(servicesubcategory_name)$<br>
				      <b>Descripción</b>:<br>			     
				      $object->html(description)$<br>
				      <b>Información Adicional</b>:<br>
				      <div>$object->html(service_details)$</div>',
	'ApprovalRule:Level1' => 'Aprobación Nivel 1',
	'ApprovalRule:Level2' => 'Aprobación Nivel 2',
	'ApprovalRule:baseinfo' => 'Información General',
	'Class:ApprovalRule' => 'Regla de Aprobación',
	'Class:ApprovalRule+' => '',
	'Class:ApprovalRule/Attribute:coveragewindow_id' => 'Ventana de Cobertura',
	'Class:ApprovalRule/Attribute:coveragewindow_id+' => '',
	'Class:ApprovalRule/Attribute:coveragewindow_name' => 'Nombre Ventana de Cobertura',
	'Class:ApprovalRule/Attribute:coveragewindow_name+' => '',
	'Class:ApprovalRule/Attribute:description' => 'Descripción',
	'Class:ApprovalRule/Attribute:description+' => '',
	'Class:ApprovalRule/Attribute:level1_default_approval' => 'Aprobar automaticamente si no hay respuesta en Nivel 1',
	'Class:ApprovalRule/Attribute:level1_default_approval+' => '',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no' => 'No',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no+' => 'No',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes' => 'Si',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes+' => 'Si',
	'Class:ApprovalRule/Attribute:level1_exit_condition' => 'Termino aprobación Nivel 1',
	'Class:ApprovalRule/Attribute:level1_exit_condition+' => '',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_approve' => 'termina con la primer "Aprobación"',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_approve+' => 'Solo una aprobación es requerida',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reject' => 'termina en el primer "Rechazo"',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reject+' => 'Todos deben aprobar',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reply' => 'termina en la primer respuesta',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reply+' => 'La primer respuesta determina el resultado en Nivel 1',
	'Class:ApprovalRule/Attribute:level1_rule' => 'Aprobación Nivel 1',
	'Class:ApprovalRule/Attribute:level1_rule+' => '',
	'Class:ApprovalRule/Attribute:level1_substitute_query' => 'Substitute L1~~',
	'Class:ApprovalRule/Attribute:level1_substitute_query+' => 'Substitutes are approver dependent : use `:approver->...` placeholder in the query to retrieve the corresponding substitutes~~',
	'Class:ApprovalRule/Attribute:level1_substitute_timeout' => 'Substitute notification delay L1~~',
	'Class:ApprovalRule/Attribute:level1_substitute_timeout+' => 'Substitutes will be notified if approver has not answered before this percentage of the approval delay~~',
	'Class:ApprovalRule/Attribute:level1_timeout' => 'Espera aprobación Nivel 1 (horas)',
	'Class:ApprovalRule/Attribute:level1_timeout+' => '',
	'Class:ApprovalRule/Attribute:level2_default_approval' => 'Aprobar automaticamente si no hay respuesta en Nivel 2',
	'Class:ApprovalRule/Attribute:level2_default_approval+' => '',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no' => 'No',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no+' => 'No',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes' => 'Si',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes+' => 'Si',
	'Class:ApprovalRule/Attribute:level2_exit_condition' => 'Termino aprobación Nivel 2',
	'Class:ApprovalRule/Attribute:level2_exit_condition+' => '',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_approve' => 'termina con la primer "Aprobación"',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_approve+' => 'Solo una aprobación es requerida',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reject' => 'termina en el primer "Rechazo"',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reject+' => 'Todos deben aprobar',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reply' => 'termina en la primer respuesta',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reply+' => 'La primer respuesta determina el resultado en Nivel 2',
	'Class:ApprovalRule/Attribute:level2_rule' => 'Aprobación Nivel 2',
	'Class:ApprovalRule/Attribute:level2_rule+' => '',
	'Class:ApprovalRule/Attribute:level2_substitute_query' => 'Substitute L2~~',
	'Class:ApprovalRule/Attribute:level2_substitute_query+' => 'Substitutes are approver dependent : use `:approver->...` placeholder in the query to retrieve the corresponding substitutes~~',
	'Class:ApprovalRule/Attribute:level2_substitute_timeout' => 'Substitute notification delay L2~~',
	'Class:ApprovalRule/Attribute:level2_substitute_timeout+' => 'Substitutes will be notified if approver has not answered before this percentage of the approval delay~~',
	'Class:ApprovalRule/Attribute:level2_timeout' => 'Espera aprobación Nivel 2 (horas)',
	'Class:ApprovalRule/Attribute:level2_timeout+' => '',
	'Class:ApprovalRule/Attribute:name' => 'Nombre',
	'Class:ApprovalRule/Attribute:name+' => '',
	'Class:ApprovalRule/Attribute:servicesubcategory_list' => 'Subcategoria de Servicio',
	'Class:ApprovalRule/Attribute:servicesubcategory_list+' => '',
	'Class:ExtendedApprovalScheme' => 'ExtendedApprovalScheme~~',
	'Class:ExtendedApprovalScheme+' => '~~',
	'Class:ServiceSubcategory/Attribute:approvalrule_id' => 'Regla de Aprobación',
	'Class:ServiceSubcategory/Attribute:approvalrule_id+' => '',
	'Class:ServiceSubcategory/Attribute:approvalrule_name' => 'Nombre Regla de Aprobación',
	'Class:ServiceSubcategory/Attribute:approvalrule_name+' => '',
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
	'Menu:ApprovalRule' => 'Reglas de Aprobación',
	'Menu:ApprovalRule+' => 'Todas las reglas de Aprobación',
	'Menu:Ongoing approval' => 'Requerimientos esperando Aprobación',
	'Menu:Ongoing approval+' => 'Requerimientos esperando Aprobación',
]);
