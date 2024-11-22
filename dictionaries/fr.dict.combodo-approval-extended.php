<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * 
 */
/**
 * @author Erwan Taloc <erwan.taloc@combodo.com>
 * @author Romain Quetiez <romain.quetiez@combodo.com>
 * @author Denis Flaven <denis.flaven@combodo.com>
 *
 */
Dict::Add('FR FR', 'French', 'Français', [
	'Approbation:ApprovalRequested' => 'Votre approbation est attendue',
	'Approbation:FormBody' => '<p>Cher $approver->html(friendlyname)$, merci de prendre le temps d\'approuver le ticket</p>',
	'Approbation:Introduction' => '<p>Cher $approver->html(friendlyname)$, merci de prendre le temps d\'approuver le ticket $object->html(friendlyname)$</p>',
	'Approbation:PublicObjectDetails' => '<p>Cher $approver->html(friendlyname)$, merci de prendre le temps d\'approuver le ticket $object->html(ref)$</p>
				      <b>Demandeur</b>&nbsp;: $object->html(caller_id_friendlyname)$<br>
				      <b>Titre</b>&nbsp;: $object->html(title)$<br>
				      <b>Service</b>&nbsp;: $object->html(service_name)$<br>
				      <b>Sous catégorie de service</b>&nbsp;: $object->html(servicesubcategory_name)$<br>
				      <b>Description</b>&nbsp;:<br>
				      $object->html(description)$<br>
				      <b>Informations complémentaires</b>&nbsp;:<br>
				      <div>$object->html(service_details)$</div>',
	'ApprovalRule:Level1' => 'Approbation Niveau 1',
	'ApprovalRule:Level2' => 'Approbation Niveau 2',
	'ApprovalRule:baseinfo' => 'Informations générales',
	'Class:ApprovalRule' => 'Règle d\'approbation',
	'Class:ApprovalRule+' => '',
	'Class:ApprovalRule/Attribute:coveragewindow_id' => 'Heures ouvrées',
	'Class:ApprovalRule/Attribute:coveragewindow_id+' => '',
	'Class:ApprovalRule/Attribute:coveragewindow_name' => 'Nom heures ouvrées',
	'Class:ApprovalRule/Attribute:coveragewindow_name+' => '',
	'Class:ApprovalRule/Attribute:description' => 'Description',
	'Class:ApprovalRule/Attribute:description+' => '',
	'Class:ApprovalRule/Attribute:level1_default_approval' => 'Approbation si pas de réponse N1',
	'Class:ApprovalRule/Attribute:level1_default_approval+' => 'Approuvé automatiquement si pas de réponse ni des approbateurs ni des suppléants',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no' => 'non',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no+' => '',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes' => 'oui',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes+' => '',
	'Class:ApprovalRule/Attribute:level1_exit_condition' => 'Fin du N1',
	'Class:ApprovalRule/Attribute:level1_exit_condition+' => 'Critère de fin pour ce niveau d\'approbation',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_approve' => 'à la première réponse positive',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_approve+' => 'Une seule approbation est requise',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reject' => 'à la première réponse négative',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reject+' => 'Tous les gens interrogés doivent approuver',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reply' => 'à la première réponse',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reply+' => 'La première réponse détermine le résultat du niveau 1',
	'Class:ApprovalRule/Attribute:level1_rule' => 'Approbateurs N1',
	'Class:ApprovalRule/Attribute:level1_rule+' => 'OQL pour filtrer les approbateurs à utiliser pour le Ticket, avec des placeholders comme `:this->caller_id`',
	'Class:ApprovalRule/Attribute:level1_substitute_query' => 'Suppléants N1',
	'Class:ApprovalRule/Attribute:level1_substitute_query+' => 'Les suppléants sont liés à un approbateur : la requête devrait contenir un placeholder `:approver->...` pour lier le suppléant à l\'approbateur',
	'Class:ApprovalRule/Attribute:level1_substitute_timeout' => 'Notification des suppléants N1',
	'Class:ApprovalRule/Attribute:level1_substitute_timeout+' => 'Les suppléants seront notifiés si leur approbateur n\'a pas répondu dans le pourcentage du délai d\'approbation',
	'Class:ApprovalRule/Attribute:level1_timeout' => 'Délai d\'approbation N1',
	'Class:ApprovalRule/Attribute:level1_timeout+' => 'Exprimé en heures',
	'Class:ApprovalRule/Attribute:level2_default_approval' => 'Approbation si pas de réponse N2',
	'Class:ApprovalRule/Attribute:level2_default_approval+' => 'Approuvé automatiquement si pas de réponse ni des approbateurs ni des suppléants',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no' => 'non',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no+' => '',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes' => 'oui',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes+' => '',
	'Class:ApprovalRule/Attribute:level2_exit_condition' => 'Fin du N2',
	'Class:ApprovalRule/Attribute:level2_exit_condition+' => 'Critère de fin pour ce niveau d\'approbation',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_approve' => 'à la première réponse positive',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_approve+' => 'Une seule approbation est requise',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reject' => 'à la première réponse négative',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reject+' => 'Tous les gens interrogés doivent approuver',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reply' => 'à la première réponse',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reply+' => 'La première réponse détermine le résultat du niveau 1',
	'Class:ApprovalRule/Attribute:level2_rule' => 'Approbateurs N2',
	'Class:ApprovalRule/Attribute:level2_rule+' => 'OQL pour filtrer les approbateurs à utiliser pour le Ticket, avec des placeholders comme `:this->caller_id`',
	'Class:ApprovalRule/Attribute:level2_substitute_query' => 'Suppléants N2',
	'Class:ApprovalRule/Attribute:level2_substitute_query+' => 'Les suppléants sont liés à un approbateur : la requête devrait contenir un placeholder `:approver->...` pour lier le suppléant à l\'approbateur',
	'Class:ApprovalRule/Attribute:level2_substitute_timeout' => 'Notification des suppléants N2',
	'Class:ApprovalRule/Attribute:level2_substitute_timeout+' => 'Les suppléants seront notifiés si leur approbateur n\'a pas répondu dans le pourcentage du délai d\'approbation',
	'Class:ApprovalRule/Attribute:level2_timeout' => 'Délai d\'approbation N2',
	'Class:ApprovalRule/Attribute:level2_timeout+' => 'Exprimé en heures',
	'Class:ApprovalRule/Attribute:name' => 'Nom',
	'Class:ApprovalRule/Attribute:name+' => '',
	'Class:ApprovalRule/Attribute:servicesubcategory_list' => 'Sous-catégories de service',
	'Class:ApprovalRule/Attribute:servicesubcategory_list+' => '',
	'Class:ExtendedApprovalScheme' => 'Schéma d\'Approbation étendu',
	'Class:ExtendedApprovalScheme+' => '',
	'Class:ServiceSubcategory/Attribute:approvalrule_id' => 'Règle d\'approbation',
	'Class:ServiceSubcategory/Attribute:approvalrule_id+' => '',
	'Class:ServiceSubcategory/Attribute:approvalrule_name' => 'Nom règle d\'approbation',
	'Class:ServiceSubcategory/Attribute:approvalrule_name+' => '',
	'Class:UserRequest/Attribute:approver_email' => 'Email de l\'approbateur',
	'Class:UserRequest/Attribute:approver_email+' => '',
	'Class:UserRequest/Attribute:approver_id' => 'Approbateur',
	'Class:UserRequest/Attribute:approver_id+' => 'La personne qui approuve la demande',
	'Class:UserRequest/Stimulus:ev_approve' => 'Approuver',
	'Class:UserRequest/Stimulus:ev_approve+' => '',
	'Class:UserRequest/Stimulus:ev_reject' => 'Rejeter',
	'Class:UserRequest/Stimulus:ev_reject+' => '',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'En attente d\'approbation',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '',
	'Menu:ApprovalRule' => 'Règles d\'approbation',
	'Menu:ApprovalRule+' => 'Toutes les règles d\'approbation',
	'Menu:Ongoing approval' => 'Requêtes en attente d\'approbation',
	'Menu:Ongoing approval+' => 'Requêtes en attente d\'approbation',
]);
