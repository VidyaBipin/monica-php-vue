<?php

return [
    'sidebar_settings' => '帐户设置',
    'sidebar_personalization' => '个性化',
    'sidebar_settings_export' => '导出数据',
    'sidebar_settings_users' => '用户',
    'sidebar_settings_subscriptions' => '订阅',
    'sidebar_settings_import' => '导入数据',
    'sidebar_settings_tags' => '标签管理',
    'sidebar_settings_api' => 'API',
    'sidebar_settings_security' => '安全',

    'export_title' => '导出帐户数据',
    'export_be_patient' => '单击按钮开始导出。处理导出可能需要几分钟时间，请耐心等待, 不要取消按钮。',
    'export_title_sql' => '导出到 SQL',
    'export_sql_explanation' => '以 SQL 格式导出数据使您可以将数据导入到自己的Monica实例中。这只在你有自己的服务器时有效。',
    'export_sql_cta' => '导出到 SQL',
    'export_sql_link_instructions' => '注意: <a href=":url">阅读说明</a>, 了解有关将此文件导入到您的实例的详细信息。',

    'firstname' => '名',
    'lastname' => '姓氏',
    'name_order' => '名称顺序',
    'name_order_firstname_lastname' => '<名> <姓> - 小明 王',
    'name_order_lastname_firstname' => '<姓> <名> - 王 小明',
    'name_order_firstname_lastname_nickname' => '<名> <姓> (<昵称>) - 小明 王 (狗蛋)',
    'name_order_firstname_nickname_lastname' => '<名> (<昵称>) <姓> - 小明 (狗蛋) 王',
    'name_order_lastname_firstname_nickname' => '<姓> <名> (<昵称>) - 王 小明 (狗蛋)',
    'name_order_lastname_nickname_firstname' => '<姓> (<昵称>) <名> - 王 (狗蛋) 小明',
    'name_order_nickname' => '<昵称> - 狗蛋',
    'currency' => '货币',
    'name' => '您的姓名: :name',
    'email' => '电子邮件地址',
    'email_placeholder' => '输入电子邮箱',
    'email_help' => '这是用于登录的电子邮件, 同时也用来接收您的提醒。',
    'timezone' => '时区',
    'layout' => '布局',
    'layout_small' => '最大1200像素宽',
    'layout_big' => '浏览器的全宽度',
    'save' => '更新偏好',
    'delete_title' => '删除您的帐户',
    'delete_desc' => '是否要删除您的帐户？警告: 删除是永久性的, 您的所有数据将永久的删除。',
    'reset_desc' => '您想重置您的帐户吗？这将删除所有联系人以及与之关联的数据。您的帐户将不会被删除。',
    'reset_title' => '删除您的帐户',
    'reset_cta' => '重置帐户',
    'reset_notice' => '您确定要重新设置帐户吗？此操作不能回退。',
    'reset_success' => '您的帐户已成功重置',
    'delete_notice' => '您确定要重新设置帐户吗？此操作不能回退。',
    'delete_cta' => '删除帐户',
    'settings_success' => '偏好设置已更新',
    'locale' => '应用程序中使用的语言',
    'locale_cs' => '捷克文',
    'locale_de' => '德文',
    'locale_en' => '英文',
    'locale_es' => '西班牙文',
    'locale_fr' => '法文',
    'locale_he' => '希伯来文',
    'locale_it' => '意大利文',
    'locale_nl' => '荷兰文',
    'locale_pt' => '葡萄牙文',
    'locale_ru' => '俄文',
    'locale_zh' => '简体中文',
    'locale_tr' => '土耳其文',

    'security_title' => '安全',
    'security_help' => '更改您的帐户的安全选项。',
    'password_change' => '更改密码',
    'password_current' => '当前密码',
    'password_current_placeholder' => '输入当前密码',
    'password_new1' => '新密码',
    'password_new1_placeholder' => '输入一个新密码',
    'password_new2' => '确认',
    'password_new2_placeholder' => '重新输入新密码',
    'password_btn' => '更改密码',
    '2fa_title' => '双重验证',
    '2fa_otp_title' => '用于二次验证的App',
    '2fa_enable_title' => '启用二次验证',
    '2fa_enable_description' => '启用双重身份验证以提高帐户的安全性。',
    '2fa_enable_otp' => '打开您的双重认证移动应用程序, 并扫描以下 QR 条码:',
    '2fa_enable_otp_help' => '如果您的双重认证移动应用程序不支持 QR 条码, 请在下面的代码中输入:',
    '2fa_enable_otp_validate' => '请验证您刚设置的新设备:',
    '2fa_enable_success' => '双重认证已激活',
    '2fa_enable_error' => '尝试激活双重身份验证时出错',
    '2fa_enable_error_already_set' => '二次验证已激活',
    '2fa_disable_title' => '关闭双重身份验证',
    '2fa_disable_description' => '为您的帐户禁用双重素身份验证。小心, 你的帐户将不再安全!',
    '2fa_disable_success' => '双重身份认证已禁用',
    '2fa_disable_error' => '尝试禁用双重身份验证时出错',
    'u2f_title' => 'U2F 安全密钥',
    'u2f_enable_description' => '添加新的 U2F 安全密钥',
    'u2f_buttonAdvise' => '如果您的安全密钥有一个按钮, 请按下它。',
    'u2f_noButtonAdvise' => '如果没有, 请将其拔出并再次插入。',
    'u2f_success' => '您的密钥已被检测到并验证完毕。',
    'u2f_insertKey' => '插入安全密钥。',
    'u2f_error_other_error' => '发生错误',
    'u2f_error_bad_request' => '您没有使用 HTTPS或访问的 URL 与应用程序 ID 不匹配',
    'u2f_error_configuration_unsupported' => '客户端配置不支持',
    'u2f_error_device_ineligible' => '当前设备不支持此请求。',
    'u2f_error_timeout' => '请求超时',

    'users_list_title' => '可以访问您的帐户的用户',
    'users_list_add_user' => '邀请新用户',
    'users_list_you' => '这是你',
    'users_list_invitations_title' => '待处理的邀请',
    'users_list_invitations_explanation' => '已邀请',
    'users_list_invitations_invited_by' => '被:name邀请',
    'users_list_invitations_sent_date' => '在:date发送',
    'users_blank_title' => '您是唯一可以访问此帐户的人。',
    'users_blank_add_title' => '你想邀请别人吗？',
    'users_blank_description' => '此人将具有您拥有的相同访问权限, 并且可以添加、编辑或删除联系人信息。',
    'users_blank_cta' => '邀请他人加入',
    'users_add_title' => '通过电子邮件邀请新用户到您的帐户',
    'users_add_description' => '此人将拥有与您相同的权利, 包括邀请其他用户并删除它们 (包括您)。因此, 请确保您信任此人。',
    'users_add_email_field' => '输入您要邀请的人的电子邮件',
    'users_add_confirmation' => '我确认我想邀请这个用户到我的帐户。此人将访问我的所有数据, 并与我所看到的一致。',
    'users_add_cta' => '通过电子邮件邀请用户',
    'users_accept_title' => '接受邀请并新建一个账号',
    'users_error_please_confirm' => '请您先确认您要邀请此用户',
    'users_error_email_already_taken' => '这个电子邮件已经存在，请另选一个！',
    'users_error_already_invited' => '您已经邀请了此用户。请选择其他电子邮件地址。',
    'users_error_email_not_similar' => '这不是邀请人的电子邮件。',
    'users_invitation_deleted_confirmation_message' => '已成功删除邀请',
    'users_invitations_delete_confirmation' => '确实要删除此邀请吗？',
    'users_list_delete_confirmation' => '是否确实要从您的帐户中删除此用户？',
    'users_invitation_need_subscription' => '您需要升级账户才能添加更多用户',

    'subscriptions_account_current_plan' => '您当前的订阅',
    'subscriptions_account_current_paid_plan' => '您当前的订阅是：:name，感谢您的订阅。',
    'subscriptions_account_next_billing' => '您的订阅将在 <strong>:date</strong>自动续订。您可以在任何时候 <a href=":url">取消订阅</a> 。',
    'subscriptions_account_free_plan' => '您正在使用免费版',
    'subscriptions_account_free_plan_upgrade' => '您可以将您的帐户升级为:name, 它的成本为每月$:price。您将享有以下特权:',
    'subscriptions_account_free_plan_benefits_users' => '不限数量的用户',
    'subscriptions_account_free_plan_benefits_reminders' => '电子邮件提醒',
    'subscriptions_account_free_plan_benefits_import_data_vcard' => '从 vCard 文件导入联系人',
    'subscriptions_account_free_plan_benefits_support' => '支持项目的长久运行, 使我们可以引入更多的功能。',
    'subscriptions_account_upgrade' => '更新您的账户',
    'subscriptions_account_upgrade_title' => '立即升级您的Monica账户吧！',
    'subscriptions_account_upgrade_choice' => '在下方选择一个订阅（已有 :customers 订阅了高级版）',
    'subscriptions_account_invoices' => '发票',
    'subscriptions_account_invoices_download' => '下载',
    'subscriptions_account_payment' => '哪个付费周期最适合您？',
    'subscriptions_downgrade_title' => '将您的帐户降级为免费版',
    'subscriptions_downgrade_limitations' => '免费版的功能有限制。如果您需要降级，请您确保完成以下检查：',
    'subscriptions_downgrade_rule_users' => '您的帐户中必须只有1个用户',
    'subscriptions_downgrade_rule_users_constraint' => '您的帐户中当前有 <a href=":url">1 个用户</a> 。|您的帐户中当前有 <a href=":url">:count 个用户</a>。',
    'subscriptions_downgrade_rule_invitations' => '您不能有未接受的邀请',
    'subscriptions_downgrade_rule_invitations_constraint' => '您的帐户中当前有 <a href=":url">1 个未确认邀请</a> |您的帐户中当前有 <a href=":url">:count 个未确认邀请</a>',
    'subscriptions_downgrade_cta' => '降级',
    'subscriptions_downgrade_success' => '您已降级到免费版！',
    'subscriptions_downgrade_thanks' => '非常感谢您尝试过高级版订阅。我们一直为Monica不断地增加新的功能-, 期待您的再次订阅。',
    'subscriptions_back' => '返回设置',
    'subscriptions_upgrade_title' => '升级您的帐户',
    'subscriptions_upgrade_choose' => '您选择了:plan',
    'subscriptions_upgrade_infos' => '请在下方输入您的付款信息：',
    'subscriptions_upgrade_name' => '持卡人姓名',
    'subscriptions_upgrade_zip' => '邮政编码',
    'subscriptions_upgrade_credit' => '信用卡或借记卡',
    'subscriptions_upgrade_submit' => '提交支付',
    'subscriptions_upgrade_charge' => '我们将立刻收取您 $:price 美元，下次收费时间：:date。如果您改变主意了，您可以随时取消订阅。',
    'subscriptions_upgrade_charge_handled' => '支付服务由第三方支付平台 <a href=":url">Stripe</a> 提供，我们无法接触到您的个人信息。',
    'subscriptions_upgrade_success' => '感谢您的订阅！',
    'subscriptions_upgrade_thanks' => '欢迎来到让世界变得更美好的社区。',

    'subscriptions_pdf_title' => '您的:name每月订阅',
    'subscriptions_plan_choose' => '选择此计划',
    'subscriptions_plan_year_title' => '按年度支付',
    'subscriptions_plan_year_cost' => '$45 美元/年',
    'subscriptions_plan_year_cost_save' => '您可以节省 25%',
    'subscriptions_plan_year_bonus' => '一整年的安心',
    'subscriptions_plan_month_title' => '按月支付',
    'subscriptions_plan_month_cost' => '$5 美元/月',
    'subscriptions_plan_month_bonus' => '随时取消',
    'subscriptions_plan_include1' => '您将享有以下特权：',
    'subscriptions_plan_include2' => '不限数量的用户·电子邮件提醒·导入 vCard ·个性化的联系人信息',
    'subscriptions_plan_include3' => '收入的100% 用于此项目的开发。',
    'subscriptions_help_title' => '您可能还关心',
    'subscriptions_help_opensource_title' => '什么是开源项目？',
    'subscriptions_help_opensource_desc' => 'Monica是一个开源项目。这意味着它是由社区建造的项目。开源意味着代码在 GitHub 上公开提供, 每个人都可以检查并修改它。我们筹集的所有资金都致力于建立更好的功能, 拥有更强大的服务器, 帮助支付账单。没有您的支持，我们将无法完成这一切。',
    'subscriptions_help_limits_title' => '你们对免费版的联系人有限制吗？',
    'subscriptions_help_limits_plan' => '当然没有。免费版并没有限制您的联系人数量。',
    'subscriptions_help_discounts_title' => '你们对非盈利机构和学生有优惠吗？',
    'subscriptions_help_discounts_desc' => '当然！Monica免费为学生，非盈利机构提供服务。您只需要提交一下材料给我们的 <a href=":support">支持人员</a>。',
    'subscriptions_help_change_title' => '如果我改变主意怎么办？',
    'subscriptions_help_change_desc' => '您可以随时取消您的订阅。但是，目前为止我们无法提供退款服务。',

    'import_title' => '在您的帐户中导入联系人',
    'import_cta' => '上载联系人',
    'import_stat' => '您目前为止导入了:number个文件。',
    'import_result_stat' => '上传了 vCard (:total_imported imported, :total_skipped skipped)|上传了包含 :total_contacts 个联系人的 vCard (:total_imported imported, :total_skipped skipped)',
    'import_view_report' => '查看报告',
    'import_in_progress' => '导入正在进行中。在一分钟内重新加载页面。',
    'import_upload_title' => '从 vCard 文件导入联系人',
    'import_upload_rules_desc' => '但是, 我们有一些规则:',
    'import_upload_rule_format' => '我们支持 <code>vcard</code> 和 <code>vcf</code> 文件。',
    'import_upload_rule_vcard' => '我们支持 vCard 3.0 格式, 这是Contacts.app (macOS) 和 Google Contacts的默认格式. 。',
    'import_upload_rule_instructions' => '导出 <a href="http://osxdaily.com/2015/07/14/export-contacts-mac-os-x/" target="_blank">Contacts.app (macOS)</a> 和 <a href="http://www.akruto.com/backup-phone-contacts-calendar/how-to-export-google-contacts-to-csv-or-vcard/" target="_blank">Google Contacts</a>的说明。',
    'import_upload_rule_multiple' => '现在, 如果您的联系人有多个电子邮件地址或电话号码, 则只会获取第一个条目。',
    'import_upload_rule_limit' => '文件限制为10MB。',
    'import_upload_rule_time' => '上传联系人和处理它们可能需要1分钟的时间。请耐心等待。',
    'import_upload_rule_cant_revert' => '请确认您上传的数据是正确的，一旦上传就无法撤销。',
    'import_upload_form_file' => '你的 <code>.vcf</code> 或 <code>. vCard</code> 文件:',
    'import_upload_behaviour' => '导入偏好:',
    'import_upload_behaviour_add' => '添加新条目, 跳过已有条目',
    'import_upload_behaviour_replace' => '替换现有条目',
    'import_upload_behaviour_help' => '提示: 替换会替换所有在 vCard 文件中获取的数据, 但是会保留未被替换的信息区域。',
    'import_report_title' => '导入报表',
    'import_report_date' => '导入日期',
    'import_report_type' => '导入类型',
    'import_report_number_contacts' => '文件中的联系人数',
    'import_report_number_contacts_imported' => '导入的联系人数量',
    'import_report_number_contacts_skipped' => '跳过的联系人数',
    'import_report_status_imported' => '导入',
    'import_report_status_skipped' => '跳过',
    'import_vcard_contact_exist' => '联系人已存在',
    'import_vcard_contact_no_firstname' => '无名字 (必填)',
    'import_vcard_file_not_found' => '文件不存在',
    'import_vcard_unknown_entry' => '未知的联系人姓名',
    'import_vcard_file_no_entries' => '文件不包含联系人',
    'import_blank_title' => '您暂无导入的联系人。',
    'import_blank_question' => '是否立即导入联系人？',
    'import_blank_description' => '我们可以从 Google Contacts 或您的Contact manager那里导入您的 vCard 文件。',
    'import_blank_cta' => '导入 vCard',
    'import_need_subscription' => '您需要订阅才能导入联系人',

    'tags_list_title' => '标签',
    'tags_list_description' => '您可以通过设置来标记联系人。标记的工作方式类似于文件夹, 但可以向联系人添加多个标记。若要添加新标记, 请在联系人中添加即可。',
    'tags_list_contact_number' => ':count 个联系人',
    'tags_list_delete_success' => '标签已成功删除',
    'tags_list_delete_confirmation' => '确实要删除该标签吗？不会删除任何联系人, 只有标签。',
    'tags_blank_title' => '标签是对您的联系人进行分类的一种很好的方式。',
    'tags_blank_description' => '标签的工作方式类似于文件夹, 但可以向联系人添加多个标签。转到联系人并在名字的下面标记一个朋友,。一旦联系人被标记, 请返回此处管理帐户中的所有标签。',

    'api_title' => 'API 访问',
    'api_description' => 'API 可以用来从外部应用程序操纵Monica的数据, 例如移动应用程序。',

    'api_personal_access_tokens' => '个人访问令牌',
    'api_pao_description' => '请确保将此token授予您信任的源-因为它们允许您访问所有数据。',
    'api_token_title' => '个人访问密钥',
    'api_token_create_new' => '创建密钥',
    'api_token_not_created' => '您没有已创建的访问密钥',
    'api_token_name' => '名称',
    'api_token_delete' => '删除',
    'api_token_create' => '创建密钥',
    'api_token_scopes' => '作用域',
    'api_token_help' => '这是您的个人访问密钥，我们只会展示一次，请妥善保管。您现在可以使用这个密钥进行API请求',

    'api_oauth_clients' => '您的 Oauth 客户端',
    'api_oauth_clients_desc' => '您可以注册自己的 OAuth 客户端。',
    'api_oauth_title' => 'Oauth客户端',
    'api_oauth_create_new' => '创建新的客户端',
    'api_oauth_not_created' => '您尚未创建Oauth客户端',
    'api_oauth_clientid' => '客户端 ID',
    'api_oauth_name' => '名称',
    'api_oauth_name_help' => '安全码',
    'api_oauth_secret' => '密钥',
    'api_oauth_create' => '创建客户端',
    'api_oauth_redirecturl' => '重定向URL',
    'api_oauth_redirecturl_help' => '应用程序的授权回调 URL。',

    'api_authorized_clients' => '授权客户端列表',
    'api_authorized_clients_desc' => '本节列出了您授权访问应用程序的所有客户端。您可以随时撤销此授权。',
    'api_authorized_clients_title' => '已授权的应用',
    'api_authorized_clients_name' => '名称',
    'api_authorized_clients_scopes' => '作用域',

    'personalization_tab_title' => '个性化您的帐户',

    'personalization_title' => '在这里您可以找到不同的设置来配置您的帐户。这些功能更多的是针对想最大化控制Monica "高级用户"所设置。',
    'personalization_contact_field_type_title' => '联系人字段类型',
    'personalization_contact_field_type_add' => '添加新字段类型',
    'personalization_contact_field_type_description' => '在这里您可以配置所有不同类型的联系人字段, 您可以关联到所有联系人。如果将来出现新的社交网络, 您将能够在这里添加这种新的联系方式。',
    'personalization_contact_field_type_table_name' => '名称',
    'personalization_contact_field_type_table_protocol' => '协议',
    'personalization_contact_field_type_table_actions' => '行动',
    'personalization_contact_field_type_modal_title' => '添加新的联系人字段类型',
    'personalization_contact_field_type_modal_edit_title' => '编辑现有联系人字段类型',
    'personalization_contact_field_type_modal_delete_title' => '删除现有联系人字段类型',
    'personalization_contact_field_type_modal_delete_description' => '确实要删除此联系人字段类型吗？删除此类型的联系人字段将删除所有联系人的此类型的所有数据。',
    'personalization_contact_field_type_modal_name' => '名称',
    'personalization_contact_field_type_modal_protocol' => '协议 (可选)',
    'personalization_contact_field_type_modal_protocol_help' => '每个新的联系人字段类型都可以选定。如果设置了协议, 我们将使用它来触发设置的操作。',
    'personalization_contact_field_type_modal_icon' => '图标 (可选)',
    'personalization_contact_field_type_modal_icon_help' => '您可以将图标与此联系人字段类型关联。您需要添加对Font Awesome图标的引用。',
    'personalization_contact_field_type_delete_success' => '联系人字段类型已成功删除。',
    'personalization_contact_field_type_add_success' => '已成功添加联系人字段类型。',
    'personalization_contact_field_type_edit_success' => '联系人字段类型已成功更新。',

    'personalization_genders_title' => '性别类型',
    'personalization_genders_add' => '添加新的性别类型',
    'personalization_genders_desc' => '你可以根据需要定义尽可能多的性别。您的帐户中至少需要一种性别类型。',
    'personalization_genders_modal_add' => '添加性别类型',
    'personalization_genders_modal_question' => '如何称呼这种新的性别？',
    'personalization_genders_modal_edit' => '更新性别类型',
    'personalization_genders_modal_edit_question' => '如何重新命名这种新的性别？',
    'personalization_genders_modal_delete' => '删除性别类型',
    'personalization_genders_modal_delete_desc' => '是否确实要删除{name}？',
    'personalization_genders_modal_delete_question' => '这个性别下有{count} 个联系人，请您为这个联系人分配新的性别：|这个性别下有{count} 个联系人，请您为这些联系人分配新的性别',
    'personalization_genders_modal_error' => '请从列表中选择一个有效的性别。',

    'personalization_reminder_rule_save' => '更改已保存',
    'personalization_reminder_rule_title' => '提醒规则',
    'personalization_reminder_rule_line' => '提前 {count} 天|提前 {count} 天',
    'personalization_reminder_rule_desc' => '对于您设置的每个提醒, 我们可以在事件发生前几天向您发送电子邮件。您可以在此处切换这些通知。请注意, 这些通知只适用于每月和每年的提醒。',

    'personalization_module_save' => '更改已被保存',
    'personalization_module_title' => '功能',
    'personalization_module_desc' => '有些人并不需要启用所有功能。因此您可以在此处隐藏不需要的功能，该改动对所有联系人生效。',

    'personalisation_paid_upgrade' => '这是一个高级版的功能. 在设置-订阅内进行高级版订阅。',

    'reminder_time_to_send' => '应发送每日提醒的时间',
    'reminder_time_to_send_help' => '基于您提供的信息, 您的下一次提醒将在 {dateTime} 送达。',

    'personalization_activity_type_category_title' => '活动分类',
    'personalization_activity_type_category_add' => '增加一个活动分类',
    'personalization_activity_type_category_table_name' => '名称',
    'personalization_activity_type_category_description' => '我们为您添加了一些默认活动及分类，您可以在此处修改它们。',
    'personalization_activity_type_category_table_actions' => '行动',
    'personalization_activity_type_category_modal_add' => '增加活动分类',
    'personalization_activity_type_category_modal_edit' => '编辑活动分类',
    'personalization_activity_type_category_modal_question' => '您想如何命名这个新的分类？',
    'personalization_activity_type_add_button' => '增加一个活动',
    'personalization_activity_type_modal_add' => '增加一个活动',
    'personalization_activity_type_modal_question' => '您想如何命名这个新的活动？',
    'personalization_activity_type_modal_edit' => '编辑活动',
    'personalization_activity_type_category_modal_delete' => '删除活动分类',
    'personalization_activity_type_category_modal_delete_desc' => '您真的要删除这个活动分类吗？',
    'personalization_activity_type_modal_delete' => '删除活动',
    'personalization_activity_type_modal_delete_desc' => '您真的要删除这个活动吗？',
    'personalization_activity_type_modal_delete_error' => '我们无法找到这个活动',
    'personalization_activity_type_category_modal_delete_error' => '我们无法找到这个活动分类',
];
