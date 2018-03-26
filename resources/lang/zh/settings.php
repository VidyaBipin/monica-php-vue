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
    'export_be_patient' => 'Click the button to start the export. It might take several minutes to process the export – please be patient and do not spam the button.',
    'export_title_sql' => '导出到 SQL',
    'export_sql_explanation' => '以 SQL 格式导出数据使您可以将数据导入到自己的Monica实例中。这只在你有自己的服务器时有效。',
    'export_sql_cta' => '导出到 SQL',
    'export_sql_link_instructions' => '注意: <a href=":url">阅读说明</a>, 了解有关将此文件导入到您的实例的详细信息。',

    'firstname' => 'First name',
    'lastname' => 'Last name',
    'name_order' => '名称顺序',
    'name_order_firstname_first' => '第一名 (John Doe)',
    'name_order_lastname_first' => '姓氏第一 (Doe John)',
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
    'locale_en' => '英文',
    'locale_fr' => '法文',
    'locale_pt' => '葡萄牙文',
    'locale_ru' => '俄文',
    'locale_cs' => '捷克文',
    'locale_it' => '意大利文',
    'locale_de' => '德文',
    'locale_zh' => 'Chinese Simplified',
    'locale_he' => 'Hebrew',
    'locale_es' => 'Spanish',

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
    '2fa_enable_title' => '启用双重验证',
    '2fa_enable_description' => '启用双重身份验证以提高帐户的安全性。',
    '2fa_enable_otp' => '打开您的双重认证移动应用程序, 并扫描以下 QR 条码:',
    '2fa_enable_otp_help' => '如果您的双重认证移动应用程序不支持 QR 条码, 请在下面的代码中输入:',
    '2fa_enable_otp_validate' => '请验证您刚设置的新设备:',
    '2fa_enable_success' => '双重认证已激活',
    '2fa_enable_error' => '尝试激活双重身份验证时出错',
    '2fa_disable_title' => '关闭双重身份验证',
    '2fa_disable_description' => '为您的帐户禁用双重素身份验证。小心, 你的帐户将不再安全!',
    '2fa_disable_success' => '双重身份认证已禁用',
    '2fa_disable_error' => '尝试禁用双重身份验证时出错',

    'users_list_title' => '用户可以访问您的帐户',
    'users_list_add_user' => '邀请新用户',
    'users_list_you' => '那是你',
    'users_list_invitations_title' => '待处理的邀请',
    'users_list_invitations_explanation' => '下面是你邀请他们加入Monica作为合作伙伴的人。',
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
    'users_accept_title' => 'Accept invitation and create a new account',
    'users_error_please_confirm' => '请确认您要邀请此用户, 然后再继续邀请',
    'users_error_email_already_taken' => '这个电子邮件已经存在，请另选一个！',
    'users_error_already_invited' => '您已经邀请了此用户。请选择其他电子邮件地址。',
    'users_error_email_not_similar' => '这不是邀请你的人的电子邮件。',
    'users_invitation_deleted_confirmation_message' => '已成功删除邀请',
    'users_invitations_delete_confirmation' => '确实要删除此邀请吗？',
    'users_list_delete_confirmation' => '是否确实要从您的帐户中删除此用户？',
    'users_invitation_need_subscription' => 'Adding more users requires a subscription.',

    'subscriptions_account_current_plan' => '您当前的计划',
    'subscriptions_account_current_paid_plan' => 'You are on the :name plan. Thanks so much for being a subscriber.',
    'subscriptions_account_next_billing' => '您的订阅将在 <strong>:date</strong>自动续订。您可以在任何时候 <a href=":url">取消订阅</a> 。',
    'subscriptions_account_free_plan' => '您正在使用免费计划',
    'subscriptions_account_free_plan_upgrade' => '您可以将您的帐户升级为:name计划, 它的成本为每月$:price。以下是优势:',
    'subscriptions_account_free_plan_benefits_users' => '不限数量的用户',
    'subscriptions_account_free_plan_benefits_reminders' => '电子邮件提醒',
    'subscriptions_account_free_plan_benefits_import_data_vcard' => '从 vCard 文件导入联系人',
    'subscriptions_account_free_plan_benefits_support' => '支持项目的长久运行, 使我们可以引入更多的功能。',
    'subscriptions_account_upgrade' => '更新您的账户',
    'subscriptions_account_upgrade_title' => 'Upgrade Monica today and have more meaningful relationships.',
    'subscriptions_account_upgrade_choice' => 'Pick a plan below and join over :customers persons who upgraded their Monica.',
    'subscriptions_account_invoices' => '发票',
    'subscriptions_account_invoices_download' => '下载',
    'subscriptions_account_payment' => 'Which payment option fits you best?',
    'subscriptions_downgrade_title' => '将您的帐户降级为免费计划',
    'subscriptions_downgrade_limitations' => '自由计划有限制。为了能够降级, 您需要通过以下清单:',
    'subscriptions_downgrade_rule_users' => '您的帐户中必须只有1个用户',
    'subscriptions_downgrade_rule_users_constraint' => 'You currently have <a href=":url">1 user</a> in your account.|You currently have <a href=":url">:count users</a> in your account.',
    'subscriptions_downgrade_rule_invitations' => '您不能有挂起的邀请',
    'subscriptions_downgrade_rule_invitations_constraint' => 'You currently have <a href="/settings/users/">1 pending invitation</a> sent to people.|You currently have <a href="/settings/users/">:count pending invitations</a> sent to people.',
    'subscriptions_downgrade_cta' => '降级',
    'subscriptions_downgrade_success' => 'You are back to the Free plan!',
    'subscriptions_downgrade_thanks' => 'Thanks so much for having tried the paid plan. We keep adding new features on Monica all the time – so you might want to come back in the future to see if you might be interested in taking a subscription again.',
    'subscriptions_back' => 'Back to settings',
    'subscriptions_upgrade_title' => '升级您的帐户',
    'subscriptions_upgrade_choose' => 'You picked the :plan plan.',
    'subscriptions_upgrade_thanks' => "We couldn't be happier. Enter your payment info below.",
    'subscriptions_upgrade_name' => 'Name on card',
    'subscriptions_upgrade_zip' => 'ZIP or postal code',
    'subscriptions_upgrade_credit' => '信用卡或借记卡',
    'subscriptions_upgrade_submit' => 'Submit Payment',
    'subscriptions_upgrade_charge' => "We'll charge your card USD $:price now. The next charge will be on :date. If you ever change your mind, you can cancel anytime, no questions asked.",
    'subscriptions_upgrade_charge_handled' => 'The payment is handled by <a href=":url">Stripe</a>. No card information touches our server.',
    'subscriptions_upgrade_success' => 'Thank you! You are now subscribed.',
    'subscriptions_upgrade_thanks' => 'Welcome to the community of people who try to make the world a better place.',

    'subscriptions_pdf_title' => '您的:name每月订阅',
    'subscriptions_plan_choose' => 'Choose this plan',
    'subscriptions_plan_year_title' => 'Pay annually',
    'subscriptions_plan_year_cost' => '$45/year',
    'subscriptions_plan_year_cost_save' => "you'll save 25%",
    'subscriptions_plan_year_bonus' => 'Peace of mind for a whole year',
    'subscriptions_plan_month_title' => 'Pay monthly',
    'subscriptions_plan_month_cost' => '$5/month',
    'subscriptions_plan_month_bonus' => 'Cancel any time',
    'subscriptions_plan_include1' => 'Included with your upgrade:',
    'subscriptions_plan_include2' => 'Unlimited number of users • Reminders by email • Import with vCard',
    'subscriptions_plan_include3' => '100% of the profits go the development of this great open source project.',
    'subscriptions_help_title' => 'Additional details you may be curious about',
    'subscriptions_help_opensource_title' => 'What is an open source project?',
    'subscriptions_help_opensource_desc' => "Monica is an open source project. This means it is built by an entirely benevolent community who just wants to provide a great tool for the greater good. Being open source means the code is publicly available on GitHub, and everyone can inspect it, modify it or enhance it. All the money we raise is dedicated to build better features, have more powerful servers, help pay the bills. Thanks for your help. We couldn't do it without you – litterally.",
    'subscriptions_help_limits_title' => 'Is there any limit to the number of contacts we can have on the free plan?',
    'subscriptions_help_limits_plan' => 'Absolutely not. Free plans do not have limitations on the number of contacts you can have.',
    'subscriptions_help_discounts_title' => 'Do you have discounts for non-profits and education?',
    'subscriptions_help_discounts_desc' => "We do! Monica is free for students, and free for non-profits and charities. Just contact <a href=':support'>the support</a> with a proof of your status and we'll apply this special status in your account.",
    'subscriptions_help_change_title' => 'What if I change my mind?',
    'subscriptions_help_change_desc' => 'You can cancel anytime, no questions asked, and all by yourself – no need to contact support or whatever. However, you will not be refunded for the current period.',

    'import_title' => '在您的帐户中导入联系人',
    'import_cta' => '上载联系人',
    'import_stat' => '您目前为止导入了:number个文件。',
    'import_result_stat' => 'Uploaded vCard with 1 contact (:total_imported imported, :total_skipped skipped)|Uploaded vCard with :total_contacts contacts (:total_imported imported, :total_skipped skipped)',
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
    'import_upload_rule_cant_revert' => '请确保在上传前数据是准确的, 因为您无法撤消上传。',
    'import_upload_form_file' => '你的 <code>.vcf</code> 或 <code>. vCard</code> 文件:',
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
    'import_blank_title' => '您尚未注册任何联系人。',
    'import_blank_question' => '是否立即导入联系人？',
    'import_blank_description' => '我们可以从 Google Contacts 或您的Contact manager那里导入您的 vCard 文件。',
    'import_blank_cta' => '导入 vCard',
    'import_need_subscription' => 'Importing data requires a subscription.',

    'tags_list_title' => '标签',
    'tags_list_description' => '您可以通过设置标记来组织联系人。标记的工作方式类似于文件夹, 但可以向联系人添加多个标记。若要添加新标记, 请在联系人中添加即可。',
    'tags_list_contact_number' => '1 contact|:count contacts',
    'tags_list_delete_success' => '标签已成功删除',
    'tags_list_delete_confirmation' => '确实要删除该标签吗？不会删除任何联系人, 只有标签。',
    'tags_blank_title' => '标签是对您的联系人进行分类的一种很好的方式。',
    'tags_blank_description' => '标签的工作方式类似于文件夹, 但可以向联系人添加多个标签。转到联系人并在名字的下面标记一个朋友,。一旦联系人被标记, 请返回此处管理帐户中的所有标签。',

    'api_title' => 'API 访问',
    'api_description' => 'API 可以用来从外部应用程序操纵Monica的数据, 例如移动应用程序。',

    'api_personal_access_tokens' => '个人访问令牌',
    'api_pao_description' => 'Make sure you give this token to a source you trust – as they allow you to access all your data.',
    'api_token_title' => 'Personal access token',
    'api_token_create_new' => 'Create New Token',
    'api_token_not_created' => 'You have not created any personal access tokens.',
    'api_token_name' => 'Name',
    'api_token_delete' => 'Delete',
    'api_token_create' => 'Create Token',
    'api_token_scopes' => 'Scopes',
    'api_token_help' => 'Here is your new personal access token. This is the only time it will be shown so don’t lose it! You may now use this token to make API requests.',

    'api_oauth_clients' => '您的 Oauth 客户端',
    'api_oauth_clients_desc' => '本节允许您注册自己的 OAuth 客户端。',
    'api_oauth_title' => 'Oauth Clients',
    'api_oauth_create_new' => 'Create New Client',
    'api_oauth_not_created' => 'You have not created any OAuth clients.',
    'api_oauth_clientid' => 'Client ID',
    'api_oauth_name' => 'Name',
    'api_oauth_name_help' => 'Something your users will recognize and trust.',
    'api_oauth_secret' => 'Secret',
    'api_oauth_create' => 'Create Client',
    'api_oauth_redirecturl' => 'Redirect URL',
    'api_oauth_redirecturl_help' => "Your application's authorization callback URL.",

    'api_authorized_clients' => '授权客户端列表',
    'api_authorized_clients_desc' => '本节列出了您授权访问应用程序的所有客户端。您可以随时撤销此授权。',
    'api_authorized_clients_title' => 'Authorized Applications',
    'api_authorized_clients_name' => 'Name',
    'api_authorized_clients_scopes' => 'Scopes',

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
    'personalization_genders_modal_delete_desc' => '是否确实要删除:name？',
    'personalization_genders_modal_delete_question' => '你目前有:numberOfContacts 与这种性别有关。如果您删除此性别, 这些联系人应该设置成什么性别？',
    'personalization_genders_modal_error' => '请从列表中选择一个有效的性别。',

    'personalization_reminder_rule_save' => '更改已保存',
    'personalization_reminder_rule_title' => '提醒规则',
    'personalization_reminder_rule_line' => '1 day before|:count days before',
    'personalization_reminder_rule_desc' => '对于您设置的每个提醒, 我们可以在事件发生前几天向您发送电子邮件。您可以在此处切换这些通知。请注意, 这些通知只适用于每月和每年的提醒。',

    'reminder_time_to_send' => '应发送每日提醒的时间',
    'test_for_crowdin' => 'Crowdin 测试',
];
