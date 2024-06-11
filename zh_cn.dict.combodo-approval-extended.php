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
Dict::Add('ZH CN', 'Chinese', '简体中文', [
	'Approbation:ApprovalRequested' => '需要您的审批',
	'Approbation:FormBody' => '<p>尊敬的$approver->html(friendlyname)$, 请您抽空批复工单</p>',
	'Approbation:Introduction' => '<p>尊敬的$approver->html(friendlyname)$, 请您抽空批复工单$object->html(friendlyname)$</p>',
	'Approbation:PublicObjectDetails' => '<p>尊敬的$approver->html(friendlyname)$, 请您抽空批复工单$object->html(ref)$</p>
				      <b>发起人</b>: $object->html(caller_id_friendlyname)$<br>
				      <b>标题</b>: $object->html(title)$<br>
				      <b>服务</b>: $object->html(service_name)$<br>
				      <b>服务子项</b>: $object->html(servicesubcategory_name)$<br>
				      <b>描述</b>:<br>			     
				      $object->html(description)$<br>
				      <b>附加信息</b>:<br>
				      <div>$object->html(service_details)$</div>',
	'ApprovalRule:Level1' => '一级审批级',
	'ApprovalRule:Level2' => '二级审批',
	'ApprovalRule:baseinfo' => '常规信息',
	'Class:ApprovalRule' => '审批规则',
	'Class:ApprovalRule+' => '~~',
	'Class:ApprovalRule/Attribute:coveragewindow_id' => '工作时间窗口',
	'Class:ApprovalRule/Attribute:coveragewindow_id+' => '~~',
	'Class:ApprovalRule/Attribute:coveragewindow_name' => '工作时间窗口名称',
	'Class:ApprovalRule/Attribute:coveragewindow_name+' => '~~',
	'Class:ApprovalRule/Attribute:description' => '描述',
	'Class:ApprovalRule/Attribute:description+' => '~~',
	'Class:ApprovalRule/Attribute:level1_default_approval' => '若一级审批没有批复则自动为已同意',
	'Class:ApprovalRule/Attribute:level1_default_approval+' => 'Automatically approved if no answer from neither approvers nor substitutes~~',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no' => '否',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no+' => '否',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes' => '是',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes+' => '是',
	'Class:ApprovalRule/Attribute:level1_exit_condition' => '结束一级审批',
	'Class:ApprovalRule/Attribute:level1_exit_condition+' => '此审批级别的结束条件',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_approve' => '结束于首个 "同意"',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_approve+' => '只需要一个人同意',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reject' => '结束于首个 "驳回"',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reject+' => '所有人必须同意',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reply' => '结束于首个批复',
	'Class:ApprovalRule/Attribute:level1_exit_condition/Value:first_reply+' => '首个批复决定了一级审批的批复结果',
	'Class:ApprovalRule/Attribute:level1_rule' => '一级审批',
	'Class:ApprovalRule/Attribute:level1_rule+' => 'OQL to retrieve the Approvers appropriate for the Ticket, using placeholder like `:this->caller_id`~~',
	'Class:ApprovalRule/Attribute:level1_substitute_query' => '一级审批代理人',
	'Class:ApprovalRule/Attribute:level1_substitute_query+' => '代理人依赖于审批人: 在查询中使用占位符 `:approver->...` 以获取相应的代理人',
	'Class:ApprovalRule/Attribute:level1_substitute_timeout' => '一级代理人通知时限',
	'Class:ApprovalRule/Attribute:level1_substitute_timeout+' => '若批准人在此定义的批准时限比例内没有审批则通知代理人',
	'Class:ApprovalRule/Attribute:level1_timeout' => '一级审批时限 (小时)',
	'Class:ApprovalRule/Attribute:level1_timeout+' => 'Expressed in hours~~',
	'Class:ApprovalRule/Attribute:level2_default_approval' => '若一级审批没有批复则自动为已同意',
	'Class:ApprovalRule/Attribute:level2_default_approval+' => 'Automatically approved if no answer from neither approvers nor substitutes~~',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no' => '否',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no+' => '否',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes' => '是',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes+' => '是',
	'Class:ApprovalRule/Attribute:level2_exit_condition' => '结束二级审批',
	'Class:ApprovalRule/Attribute:level2_exit_condition+' => 'Ending criteria for this approval level~~',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_approve' => '结束于首个 "同意"',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_approve+' => '仅需一个人同意',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reject' => '结束于首个 "驳回"',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reject+' => '所有审批人需同意',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reply' => '结束于首个批复',
	'Class:ApprovalRule/Attribute:level2_exit_condition/Value:first_reply+' => '首个批复决定了二级审批的审批结果',
	'Class:ApprovalRule/Attribute:level2_rule' => '二级审批',
	'Class:ApprovalRule/Attribute:level2_rule+' => 'OQL to retrieve the Approvers appropriate for the Ticket, using placeholder like `:this->caller_id`~~',
	'Class:ApprovalRule/Attribute:level2_substitute_query' => '二级审批代理人',
	'Class:ApprovalRule/Attribute:level2_substitute_query+' => '代理人依赖于审批人: 在查询中使用占位符 `:approver->...` 以获取相应的代理人',
	'Class:ApprovalRule/Attribute:level2_substitute_timeout' => '二级代理人通知时限',
	'Class:ApprovalRule/Attribute:level2_substitute_timeout+' => '若批准人在此定义的批准时限比例内没有审批则通知代理人',
	'Class:ApprovalRule/Attribute:level2_timeout' => '二级审批时限 (小时)',
	'Class:ApprovalRule/Attribute:level2_timeout+' => 'Expressed in hours~~',
	'Class:ApprovalRule/Attribute:name' => '名称',
	'Class:ApprovalRule/Attribute:name+' => '~~',
	'Class:ApprovalRule/Attribute:servicesubcategory_list' => '服务子项',
	'Class:ApprovalRule/Attribute:servicesubcategory_list+' => '~~',
	'Class:ExtendedApprovalScheme' => '扩展审批方案',
	'Class:ExtendedApprovalScheme+' => '~~',
	'Class:ServiceSubcategory/Attribute:approvalrule_id' => '审批规则',
	'Class:ServiceSubcategory/Attribute:approvalrule_id+' => '~~',
	'Class:ServiceSubcategory/Attribute:approvalrule_name' => '审批规则名称',
	'Class:ServiceSubcategory/Attribute:approvalrule_name+' => '~~',
	'Class:UserRequest/Attribute:approver_email' => '审批人邮箱',
	'Class:UserRequest/Attribute:approver_email+' => '~~',
	'Class:UserRequest/Attribute:approver_id' => '审批人',
	'Class:UserRequest/Attribute:approver_id+' => '~~',
	'Class:UserRequest/Stimulus:ev_approve' => '同意',
	'Class:UserRequest/Stimulus:ev_approve+' => '~~',
	'Class:UserRequest/Stimulus:ev_reject' => '驳回',
	'Class:UserRequest/Stimulus:ev_reject+' => '~~',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => '等待审批',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '~~',
	'Menu:ApprovalRule' => '审批规则',
	'Menu:ApprovalRule+' => '所有审批规则',
	'Menu:Ongoing approval' => '等待审批的需求',
	'Menu:Ongoing approval+' => '等待审批的需求',
]);
