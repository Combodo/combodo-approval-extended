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

Dict::Add('FR FR', 'French', 'Français', array(
	// Dictionary entries go here
	'Menu:Ongoing approval' => 'Requêtes en attente d\'approbation',
	'Menu:Ongoing approval+' => 'Requêtes en attente d\'approbation',
	'Approbation:PublicObjectDetails' => '<p>Cher $approver->html(friendlyname)$, merci de prendre le temps d\'approuver le ticket $object->html(ref)$</p>
				      <b>Demandeur</b>&nbsp;: $object->html(caller_id_friendlyname)$<br>
				      <b>Titre</b>&nbsp;: $object->html(title)$<br>
				      <b>Service</b>&nbsp;: $object->html(service_name)$<br>
				      <b>Sous catégorie de service</b>&nbsp;: $object->html(servicesubcategory_name)$<br>
				      <b>Description</b>&nbsp;:<br>
				      $object->html(description)$<br>
				      <b>Informations complémentaires</b>&nbsp;:<br>
				      <div>$object->html(service_details)$</div>',
	'Approbation:FormBody' => '<p>Cher $approver->html(friendlyname)$, merci de prendre le temps d\'approuver le ticket</p>',
	'Approbation:ApprovalRequested' => 'Votre approbation est attendue',
	'Approbation:Introduction' => '<p>Cher $approver->html(friendlyname)$, merci de prendre le temps d\'approuver le ticket $object->html(friendlyname)$</p>',
));

//
// Class: ApprovalRule
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:ApprovalRule' => 'Règle d\'approbation',
	'Class:ApprovalRule+' => '',
	'Class:ApprovalRule/Attribute:name' => 'Nom',
	'Class:ApprovalRule/Attribute:name+' => '',
	'Class:ApprovalRule/Attribute:description' => 'Description',
	'Class:ApprovalRule/Attribute:description+' => '',
	'Class:ApprovalRule/Attribute:level1_rule' => 'Approbation Niveau 1',
	'Class:ApprovalRule/Attribute:level1_rule+' => '',
	'Class:ApprovalRule/Attribute:level1_default_approval' => 'Approbation si pas de réponse Niveau 1',
	'Class:ApprovalRule/Attribute:level1_default_approval+' => '',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no' => 'non',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no+' => 'non',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes' => 'oui',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes+' => 'oui',
	'Class:ApprovalRule/Attribute:level1_timeout' => 'Délai d\'approbation Niveau 1 (heures)',
	'Class:ApprovalRule/Attribute:level1_timeout+' => '',
	'Class:ApprovalRule/Attribute:level1_exit_condition' => 'Fin du Niveau 1',
	'Class:ApprovalRule/Attribute:level1_exit_condition+' => '',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reply' => 'à la première réponse',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reply+' => 'La première réponse détermine le résultat du niveau 1',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reject' => 'à la première réponse négative',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reject+' => 'Tous les gens interrogés doivent approuver',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_approve' => 'à la première réponse positive',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_approve+' => 'Une seule approbation est requise',
	'Class:ApprovalRule/Attribute:level2_rule' => 'Approbation Niveau 2',
	'Class:ApprovalRule/Attribute:level2_rule+' => '',
	'Class:ApprovalRule/Attribute:level2_default_approval' => 'Approbation si pas de réponse Niveau 2',
	'Class:ApprovalRule/Attribute:level2_default_approval+' => '',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no' => 'non',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no+' => 'non',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes' => 'oui',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes+' => 'oui',
	'Class:ApprovalRule/Attribute:level2_timeout' => 'Délai d\'approbation Niveau 2 (heures)',
	'Class:ApprovalRule/Attribute:level2_timeout+' => '',
	'Class:ApprovalRule/Attribute:level2_exit_condition' => 'Fin du Niveau 2',
	'Class:ApprovalRule/Attribute:level2_exit_condition+' => '',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reply' => 'à la première réponse',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reply+' => 'La première réponse détermine le résultat du niveau 1',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reject' => 'à la première réponse négative',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reject+' => 'Tous les gens interrogés doivent approuver',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_approve' => 'à la première réponse positive',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_approve+' => 'Une seule approbation est requise',
	'Class:ApprovalRule/Attribute:servicesubcategory_list' => 'Sous-catégories de service',
	'Class:ApprovalRule/Attribute:servicesubcategory_list+' => '',
	'Class:ApprovalRule/Attribute:coveragewindow_id' => 'Heures ouvrées',
	'Class:ApprovalRule/Attribute:coveragewindow_id+' => '',
	'Class:ApprovalRule/Attribute:coveragewindow_name' => 'Nom heures ouvrées',
	'Class:ApprovalRule/Attribute:coveragewindow_name+' => '',
));

//
// Class: ServiceSubcategory
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:ServiceSubcategory/Attribute:approvalrule_id' => 'Règle d\'approbation',
	'Class:ServiceSubcategory/Attribute:approvalrule_id+' => '',
	'Class:ServiceSubcategory/Attribute:approvalrule_name' => 'Nom règle d\'approbation',
	'Class:ServiceSubcategory/Attribute:approvalrule_name+' => '',
	'ApprovalRule:baseinfo' => 'Informations générales',
	'ApprovalRule:Level1' => 'Approbation Niveau 1',
	'ApprovalRule:Level2' => 'Approbation Niveau 2',
	'Menu:ApprovalRule' => 'Règles d\'approbation',
	'Menu:ApprovalRule+' => 'Toutes les règles d\'approbation',

));
