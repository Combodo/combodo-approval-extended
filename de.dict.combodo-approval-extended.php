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
 * @author Robert Jaehne <robert.jaehne@itomig.de>
 * @author Lars Hippler <lars.hippler@itomig.de>
 *
 */
Dict::Add('DE DE', 'German', 'Deutsch', [
	'Approbation:ApprovalRequested' => 'Ihre Freigabeanfrage wurde erstellt',
	'Approbation:FormBody' => '<p>Sehr geehrte/r $approver->html(friendlyname)$, bitte nehmen sie sich etwas Zeit, um das Ticket zu bearbeiten</p>',
	'Approbation:Introduction' => '<p>Sehr geehrte/r $approver->html(friendlyname)$, bitte nehmen sie sich etwas Zeit, um $object->html(friendlyname)$ Ticket zu bearbeiten</p>',
	'Approbation:PublicObjectDetails' => '<p>Sehr geehrte/r $approver->html(friendlyname)$, bitte nehmen sie sich etwas Zeit, um Ticket $object->html(ref)$ zu bearbeiten</p>
		<h3>Titel : $object->html(title)$</h3>
		<p>Beschreibung:</p>
		$object->html(description)$
		<p>Ersteller: $object->html(caller_id_friendlyname)$</p>
		<p>Service: $object->html(service_name)$</p>
		<p>Servicekategorie: $object->html(servicesubcategory_name)$</p>
		<p>Details:</p>
		<div>$object->html(service_details)$</div>',
	'ApprovalRule:Level1' => 'Freigabe Level 1',
	'ApprovalRule:Level2' => 'Freigabe Level 2',
	'ApprovalRule:baseinfo' => 'Allgemeine Informationen',
	'Class:ApprovalRule' => 'Freigaberegel',
	'Class:ApprovalRule+' => '',
	'Class:ApprovalRule/Attribute:coveragewindow_id' => 'Zeitfenster',
	'Class:ApprovalRule/Attribute:coveragewindow_id+' => '',
	'Class:ApprovalRule/Attribute:coveragewindow_name' => 'Zeitfenster Name',
	'Class:ApprovalRule/Attribute:coveragewindow_name+' => '',
	'Class:ApprovalRule/Attribute:description' => 'Beschreibung',
	'Class:ApprovalRule/Attribute:description+' => '',
	'Class:ApprovalRule/Attribute:level1_default_approval' => 'Freigegeben wenn keine L1-Antwort',
	'Class:ApprovalRule/Attribute:level1_default_approval+' => 'Automatisch freigeben, wenn keine Rückmeldung durch Level 1 (Genehmiger oder Vertreter) erfolgt',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no' => 'nein',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no+' => '',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes' => 'ja',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes+' => '',
	'Class:ApprovalRule/Attribute:level1_exit_condition' => 'Abschlussbedingung Level 1',
	'Class:ApprovalRule/Attribute:level1_exit_condition+' => 'Bedingung wann Level 1 abgeschlossen wird.',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_approve' => 'Endet mit der ersten Genehmigung',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_approve+' => 'Nur eine Person muss die Genehmigung aussprechen',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reject' => 'Endet mit der ersten Ablehnung',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reject+' => 'Jeder einzelne muss die Genehmigung aussprechen',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reply' => 'Endet mit der ersten Rückmeldung',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reply+' => 'Die erste Rückmeldung bestimmt über die Freigabe in Level 1',
	'Class:ApprovalRule/Attribute:level1_rule' => 'Freigabe Level 1',
	'Class:ApprovalRule/Attribute:level1_rule+' => 'OQL-Abfrage um die Genehmiger für das Ticket zu ermitteln, wobei Platzhalter wie `:this->caller_id` verwendet werden können.',
	'Class:ApprovalRule/Attribute:level1_substitute_query' => 'Vertreter L1',
	'Class:ApprovalRule/Attribute:level1_substitute_query+' => 'Stellvertreter sind vom Genehmiger abhängig: Über den Platzhalter „:approver->...“ in der OQL-Abfrage, können Stellvertreter ermittelt werden.',
	'Class:ApprovalRule/Attribute:level1_substitute_timeout' => 'Verzögerung der Vertreter-Benachrichtigung (L1)',
	'Class:ApprovalRule/Attribute:level1_substitute_timeout+' => 'Vertreter werden benachrichtigt, wenn der Genehmiger nicht vor diesem Prozentsatz der Freigabeverzögerung geantwortet hat.',
	'Class:ApprovalRule/Attribute:level1_timeout' => 'Level 1 Freigabeverzögerung',
	'Class:ApprovalRule/Attribute:level1_timeout+' => 'Angegeben in Stunden',
	'Class:ApprovalRule/Attribute:level2_default_approval' => 'Automatisch freigeben, wenn keine Antwort in Level 2',
	'Class:ApprovalRule/Attribute:level2_default_approval+' => '',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no' => 'nein',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no+' => 'nein',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes' => 'ja',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes+' => 'ja',
	'Class:ApprovalRule/Attribute:level2_exit_condition' => 'Abschlussbedingung Level 2',
	'Class:ApprovalRule/Attribute:level2_exit_condition+' => 'Bedingung wann Level 2 abgeschlossen wird.',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_approve' => 'Endet mit der ersten Genehmigung',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_approve+' => 'Nur eine Person muss die Genehmigung aussprechen',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reject' => 'Endet mit der ersten Ablehnung',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reject+' => 'Jeder einzelne muss die Genehmigung aussprechen',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reply' => 'Endet mit der ersten Rückmeldung',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reply+' => 'Die erste Rückmeldung bestimmt über die Freigabe in Level 2',
	'Class:ApprovalRule/Attribute:level2_rule' => 'Freigabe Level 2',
	'Class:ApprovalRule/Attribute:level2_rule+' => '',
	'Class:ApprovalRule/Attribute:level2_substitute_query' => 'Vertreter L2',
	'Class:ApprovalRule/Attribute:level2_substitute_query+' => 'Stellvertreter sind vom Genehmiger abhängig: Über den Platzhalter „:approver->...“ in der OQL-Abfrage, können Stellvertreter ermittelt werden.',
	'Class:ApprovalRule/Attribute:level2_substitute_timeout' => 'Verzögerung der Vertreter-Benachrichtigung (L2)',
	'Class:ApprovalRule/Attribute:level2_substitute_timeout+' => 'Vertreter werden benachrichtigt, wenn der Genehmiger nicht vor diesem Prozentsatz der Freigabeverzögerung geantwortet hat.',
	'Class:ApprovalRule/Attribute:level2_timeout' => 'Level 2 Freigabeverzögerung (Stunden)',
	'Class:ApprovalRule/Attribute:level2_timeout+' => '',
	'Class:ApprovalRule/Attribute:name' => 'Name',
	'Class:ApprovalRule/Attribute:name+' => '',
	'Class:ApprovalRule/Attribute:servicesubcategory_list' => 'Service-Unterkategorien',
	'Class:ApprovalRule/Attribute:servicesubcategory_list+' => '',
	'Class:ExtendedApprovalScheme' => 'Erweiterte Freigaberegeln',
	'Class:ExtendedApprovalScheme+' => '',
	'Class:ServiceSubcategory/Attribute:approvalrule_id' => 'Freigaberegel',
	'Class:ServiceSubcategory/Attribute:approvalrule_id+' => '',
	'Class:ServiceSubcategory/Attribute:approvalrule_name' => 'Freigaberegel Name',
	'Class:ServiceSubcategory/Attribute:approvalrule_name+' => '',
	'Class:UserRequest/Attribute:approver_email' => 'E-Mailadresse Freigebender',
	'Class:UserRequest/Attribute:approver_email+' => 'E-Mailadressen Freigebender',
	'Class:UserRequest/Attribute:approver_id' => 'Freigebender',
	'Class:UserRequest/Attribute:approver_id+' => 'Freigebende',
	'Class:UserRequest/Stimulus:ev_approve' => 'Genehmigen',
	'Class:UserRequest/Stimulus:ev_approve+' => 'Genehmigen',
	'Class:UserRequest/Stimulus:ev_reject' => 'Ablehnen',
	'Class:UserRequest/Stimulus:ev_reject+' => 'Ablehnen',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'Auf Freigabe warten',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => 'Auf Freigabe warten',
	'Menu:ApprovalRule' => 'Freigaberegeln',
	'Menu:ApprovalRule+' => 'Alle Freigaberegeln',
	'Menu:Ongoing approval' => 'Auf Freigabe wartende Anfragen',
	'Menu:Ongoing approval+' => 'Auf Freigabe wartende Anfragen',
]);
