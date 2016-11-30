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
 * @author      Robert Jaehne <robert.jaehne@itomig.de>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

Dict::Add('DE DE', 'German', 'Deutsch', array(
	// Dictionary entries go here
	'Menu:Ongoing approval' => 'Auf Freigabe wartende Anfragen',
	'Menu:Ongoing approval+' => 'Auf Freigabe wartende Anfragen',
	'Approbation:PublicObjectDetails' => '<p>Sehr geehrte/r $approver->html(friendlyname)$, bitte nehmen sie sich etwas Zeit, um Ticket $object->html(ref)$ zu bearbeiten</p>
		<h3>Titel : $object->html(title)$</h3>
		<p>Beschreibung:</p>
		$object->html(description)$
		<p>Ersteller: $object->html(caller_id_friendlyname)$</p>
		<p>Service: $object->html(service_name)$</p>
		<p>Servicekategorie: $object->html(servicesubcategory_name)$</p>
		<p>Details:</p>
		<div>$object->html(service_details)$</div>',
	'Approbation:FormBody' => '<p>Sehr geehrte/r $approver->html(friendlyname)$, bitte nehmen sie sich etwas Zeit, um das Ticket zu bearbeiten</p>',
	'Approbation:ApprovalRequested' => 'Ihre Freigabeanfrage wurde erstellt',
	'Approbation:Introduction' => '<p>Sehr geehrte/r $approver->html(friendlyname)$, bitte nehmen sie sich etwas Zeit, um $object->html(friendlyname)$ Ticket zu bearbeiten</p>',
));

//
// Class: ApprovalRule
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:ApprovalRule' => 'Freigaberegel',
	'Class:ApprovalRule+' => '',
	'Class:ApprovalRule/Attribute:name' => 'Name',
	'Class:ApprovalRule/Attribute:name+' => '',
	'Class:ApprovalRule/Attribute:description' => 'Beschreibung',
	'Class:ApprovalRule/Attribute:description+' => '',
	'Class:ApprovalRule/Attribute:level1_rule' => 'Freigabe Level 1',
	'Class:ApprovalRule/Attribute:level1_rule+' => '',
	'Class:ApprovalRule/Attribute:level1_default_approval' => 'Automatisch freigeben, wenn keine Antwort in Level 1',
	'Class:ApprovalRule/Attribute:level1_default_approval+' => '',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no' => 'nein',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no+' => 'nein',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes' => 'ja',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes+' => 'ja',
	'Class:ApprovalRule/Attribute:level1_timeout' => 'Level 1 Freigabeverzögerung (Stunden)',
	'Class:ApprovalRule/Attribute:level1_timeout+' => '',
	'Class:ApprovalRule/Attribute:level2_rule' => 'Freigabe Level 2',
	'Class:ApprovalRule/Attribute:level2_rule+' => '',
	'Class:ApprovalRule/Attribute:level2_default_approval' => 'Automatisch freigeben, wenn keine Antwort in Level 2',
	'Class:ApprovalRule/Attribute:level2_default_approval+' => '',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no' => 'nein',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no+' => 'nein',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes' => 'ja',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes+' => 'ja',
	'Class:ApprovalRule/Attribute:level2_timeout' => 'Level 2 Freigabeverzögerung (Stunden)',
	'Class:ApprovalRule/Attribute:level2_timeout+' => '',
	'Class:ApprovalRule/Attribute:servicesubcategory_list' => 'Service-Unterkategorie',
	'Class:ApprovalRule/Attribute:servicesubcategory_list+' => '',
	'Class:ApprovalRule/Attribute:coveragewindow_id' => 'Zeitfenster',
	'Class:ApprovalRule/Attribute:coveragewindow_id+' => '',
	'Class:ApprovalRule/Attribute:coveragewindow_name' => 'Zeitfenster Name',
	'Class:ApprovalRule/Attribute:coveragewindow_name+' => '',
));

//
// Class: ServiceSubcategory
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:ServiceSubcategory/Attribute:approvalrule_id' => 'Freigaberegel',
	'Class:ServiceSubcategory/Attribute:approvalrule_id+' => '',
	'Class:ServiceSubcategory/Attribute:approvalrule_name' => 'Freigaberegel Name',
	'Class:ServiceSubcategory/Attribute:approvalrule_name+' => '',
	'ApprovalRule:baseinfo' => 'Allgemeine Informationen',
	'ApprovalRule:Level1' => 'Freigabe Level 1',
	'ApprovalRule:Level2' => 'Freigabe Level 2',
	'Menu:ApprovalRule' => 'Freigaberegeln',
	'Menu:ApprovalRule+' => 'Alle Freigaberegeln',

));