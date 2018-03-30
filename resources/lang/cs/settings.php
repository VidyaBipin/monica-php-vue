<?php

return [
    'sidebar_settings' => 'Nastavení účtu',
    'sidebar_personalization' => 'Personalization',
    'sidebar_settings_export' => 'Exportovat data',
    'sidebar_settings_users' => 'Uživatelé',
    'sidebar_settings_subscriptions' => 'Odběry',
    'sidebar_settings_import' => 'Importovat data',
    'sidebar_settings_tags' => 'Správa tagů',
    'sidebar_settings_api' => 'API',
    'sidebar_settings_security' => 'Security',

    'export_title' => 'Exportovat data účtu',
    'export_be_patient' => 'Kliknout na tlačítko pro spuštění exportu. Zpracování exportu může zabrat až několik minut – buďte prosím trpěliví a neklikejte vícekrát.',
    'export_title_sql' => 'Exportovat jako SQL',
    'export_sql_explanation' => 'Export dat v SQL formátu je umožňuje převést a importovat do vlastní instance Monica. Toto se hodí hlavně pokud provozujete vlastní server.',
    'export_sql_cta' => 'Exportovat jako SQL',
    'export_sql_link_instructions' => 'Poznámka: <a href=":url">přečtěte si instrukce</a> abyste se dozvěděli více o importu tohoto souboru do vlastní instance.',

    'firstname' => 'Jméno',
    'lastname' => 'Last name',
    'name_order' => 'Řazení jmen',
    'name_order_firstname_first' => 'Jméno první (Josef Vomáčka)',
    'name_order_lastname_first' => 'Příjmení první (Vomáčka Josef)',
    'currency' => 'Měna',
    'name' => 'Vlastní jméno: :name',
    'email' => 'Emailová adresa',
    'email_placeholder' => 'Vložit email',
    'email_help' => 'Tento email bude použit pro přihlašování a budete na něj dostávat svá upozornění.',
    'timezone' => 'Časová zóna',
    'layout' => 'Vzhled',
    'layout_small' => 'Maximálně 1200 pixelů široký',
    'layout_big' => 'Plná šířka prohlížeče',
    'save' => 'Aktualizovat předvolby',
    'delete_title' => 'Smazat účet',
    'delete_desc' => 'Opravdu chcete smazat tento účet? Varování: smazání účtu je trvalé a všechna data účtu budou trvale vymazána.',
    'reset_desc' => 'Opravdu chcete resetovat svůj účet? Toto odstraní všechny kontakty a jejich související data. Účet nebude smazán.',
    'reset_title' => 'Resetovat vlastní účet',
    'reset_cta' => 'Resetovat účet',
    'reset_notice' => 'Opravdu chcete resetovat svůj účet? Poté nebude cesty zpět.',
    'reset_success' => 'Účet byl úspěšně zresetován',
    'delete_notice' => 'Opravdu chcete smazat svůj účet? Poté nebude cesty zpět.',
    'delete_cta' => 'Smazat účet',
    'settings_success' => 'Předvolby aktualizovány!',
    'locale' => 'Jazyk použitý v aplikaci',
    'locale_cs' => 'Czech',
    'locale_de' => 'Němčina',
    'locale_en' => 'Angličtina',
    'locale_es' => 'Spanish',
    'locale_fr' => 'Francouzština',
    'locale_he' => 'Hebrew',
    'locale_it' => 'Italian',
    'locale_nl' => 'Dutch',
    'locale_pt' => 'Portuguese',
    'locale_ru' => 'Ruština',
    'locale_zh' => 'Chinese Simplified',

    'security_title' => 'Security',
    'security_help' => 'Change security matters for your account.',
    'password_change' => 'Password change',
    'password_current' => 'Current password',
    'password_current_placeholder' => 'Enter your current password',
    'password_new1' => 'New password',
    'password_new1_placeholder' => 'Enter a new password',
    'password_new2' => 'Confirmation',
    'password_new2_placeholder' => 'Retype the new password',
    'password_btn' => 'Change password',
    '2fa_title' => 'Two Factor Authentication',
    '2fa_enable_title' => 'Enable Two Factor Authentication',
    '2fa_enable_description' => 'Enable Two Factor Authentication to increase security with your account.',
    '2fa_enable_otp' => 'Open up your two factor authentication mobile app and scan the following QR barcode:',
    '2fa_enable_otp_help' => 'If your two factor authentication mobile app does not support QR barcodes, enter in the following code:',
    '2fa_enable_otp_validate' => 'Please validate the new device you\'ve just set:',
    '2fa_enable_success' => 'Two Factor Authentication activated',
    '2fa_enable_error' => 'Error when trying to activate Two Factor Authentication',
    '2fa_disable_title' => 'Disable Two Factor Authentication',
    '2fa_disable_description' => 'Disable Two Factor Authentication for your account. Be careful, your account will not be secured anymore !',
    '2fa_disable_success' => 'Two Factor Authentication disabled',
    '2fa_disable_error' => 'Error when trying to disable Two Factor Authentication',

    'users_list_title' => 'Uživatelé s přístupem k tomuto účtu',
    'users_list_add_user' => 'Pozvat nového uživatele',
    'users_list_you' => 'Toto jsi ty',
    'users_list_invitations_title' => 'Čekající pozvánky',
    'users_list_invitations_explanation' => 'Níže jsou lidé, které jste přizvali ke spolupráci a  používání aplikace Monica.',
    'users_list_invitations_invited_by' => 'pozván uživatelem :name',
    'users_list_invitations_sent_date' => 'pozvání odesláno :date',
    'users_blank_title' => 'Jste zatím samotným uživatelem s přístupem k tomuto účtu.',
    'users_blank_add_title' => 'Chcete pozvat někoho dalšího?',
    'users_blank_description' => 'Tato osoba bude mít stejný přístup a bude schopna přidávat, upravovat a mazat informace kontaktů.',
    'users_blank_cta' => 'Někoho pozvat',
    'users_add_title' => 'Pozvat emailem nového uživatele k tomuto účtu',
    'users_add_description' => 'Tato osoba bude mít stejná oprávnění včetně možnosti zvát a mazat další uživatele (včetně vás). Proto si raději buďte jisti, že jí můžete věřit.',
    'users_add_email_field' => 'Zadejte email osoby, kterou chcete pozvat',
    'users_add_confirmation' => 'Potvrzuji, že chci pozvat tohoto uživatele do svého účtu. Tato osoba bude moci přistupovat ke VŠEM mým datům a uvidí přesně to co já.',
    'users_add_cta' => 'Pozvat uživatele emailem',
    'users_accept_title' => 'Accept invitation and create a new account',
    'users_error_please_confirm' => 'Potvrďte prosím, že chcete přizvat ?tuto osobu?, než bude pozvánka zpracována',
    'users_error_email_already_taken' => 'Email byl již použit. Vyberte prosím nějaký jiný',
    'users_error_already_invited' => 'Již jste tohoto uživatele pozvali. Vyberte prosím jinou emailovou adresu.',
    'users_error_email_not_similar' => 'Toto není email osoby, která vás pozvala.',
    'users_invitation_deleted_confirmation_message' => 'Pozvánka byla úspěšně smazána',
    'users_invitations_delete_confirmation' => 'Opravdu chcete smazat tuto pozvánku?',
    'users_list_delete_confirmation' => 'Opravdu chcete smazat tohoto uživatele z tohoto účtu?',
    'users_invitation_need_subscription' => 'Adding more users requires a subscription.',

    'subscriptions_account_current_plan' => 'Aktuální plán',
    'subscriptions_account_current_paid_plan' => 'You are on the :name plan. Thanks so much for being a subscriber.',
    'subscriptions_account_next_billing' => 'K automatickému obnovení dojde <strong>:date</strong>. Odběr můžete <a href=":url">zrušit</a> kdykoliv.',
    'subscriptions_account_free_plan' => 'Využíváte bezplatnou verzi.',
    'subscriptions_account_free_plan_upgrade' => 'Svůj účet můžete povýšit na verzi :name, která měsíčně stojí $:price. Zde jsou výhody:',
    'subscriptions_account_free_plan_benefits_users' => 'Neomezený počet uživatelů',
    'subscriptions_account_free_plan_benefits_reminders' => 'Reminders by email',
    'subscriptions_account_free_plan_benefits_import_data_vcard' => 'Import your contacts with vCard',
    'subscriptions_account_free_plan_benefits_support' => 'Dlouhodobá podpora projektu, která umožní zavedení dalších skvělých funkcí.',
    'subscriptions_account_upgrade' => 'Navýšit svůj účet',
    'subscriptions_account_upgrade_title' => 'Upgrade Monica today and have more meaningful relationships.',
    'subscriptions_account_upgrade_choice' => 'Pick a plan below and join over :customers persons who upgraded their Monica.',
    'subscriptions_account_invoices' => 'Faktury',
    'subscriptions_account_invoices_download' => 'Stáhnout',
    'subscriptions_account_payment' => 'Which payment option fits you best?',
    'subscriptions_downgrade_title' => 'Přejít na bezplatnou verzi',
    'subscriptions_downgrade_limitations' => 'Bezplatná verze má omezení. K přechodu na bezplatnou verzi musíte projít seznam níže:',
    'subscriptions_downgrade_rule_users' => 'Smíte mít pouze jednoho uživatele účtu',
    'subscriptions_downgrade_rule_users_constraint' => 'You currently have <a href=":url">1 user</a> in your account.|You currently have <a href=":url">:count users</a> in your account.',
    'subscriptions_downgrade_rule_invitations' => 'Nesmíte mít čekající pozvánky',
    'subscriptions_downgrade_rule_invitations_constraint' => 'You currently have <a href=":url">1 pending invitation</a> sent to people.|You currently have <a href=":url">:count pending invitations</a> sent to people.',
    'subscriptions_downgrade_cta' => 'Přejít',
    'subscriptions_downgrade_success' => 'You are back to the Free plan!',
    'subscriptions_downgrade_thanks' => 'Thanks so much for having tried the paid plan. We keep adding new features on Monica all the time – so you might want to come back in the future to see if you might be interested in taking a subscription again.',
    'subscriptions_back' => 'Back to settings',
    'subscriptions_upgrade_title' => 'Navýšit svůj účet',
    'subscriptions_upgrade_choose' => 'You picked the :plan plan.',
    'subscriptions_upgrade_thanks' => 'We couldn\'t be happier. Enter your payment info below.',
    'subscriptions_upgrade_name' => 'Name on card',
    'subscriptions_upgrade_zip' => 'ZIP or postal code',
    'subscriptions_upgrade_credit' => 'Kreditní nebo debetní karta',
    'subscriptions_upgrade_submit' => 'Submit Payment',
    'subscriptions_upgrade_charge' => 'We\'ll charge your card USD $:price now. The next charge will be on :date. If you ever change your mind, you can cancel anytime, no questions asked.',
    'subscriptions_upgrade_charge_handled' => 'The payment is handled by <a href=":url">Stripe</a>. No card information touches our server.',
    'subscriptions_upgrade_success' => 'Thank you! You are now subscribed.',
    'subscriptions_upgrade_thanks' => 'Welcome to the community of people who try to make the world a better place.',

    'subscriptions_pdf_title' => 'Váš měsíční plán :name',
    'subscriptions_plan_choose' => 'Choose this plan',
    'subscriptions_plan_year_title' => 'Pay annually',
    'subscriptions_plan_year_cost' => '$45/year',
    'subscriptions_plan_year_cost_save' => 'you\'ll save 25%',
    'subscriptions_plan_year_bonus' => 'Peace of mind for a whole year',
    'subscriptions_plan_month_title' => 'Pay monthly',
    'subscriptions_plan_month_cost' => '$5/month',
    'subscriptions_plan_month_bonus' => 'Cancel any time',
    'subscriptions_plan_include1' => 'Included with your upgrade:',
    'subscriptions_plan_include2' => 'Unlimited number of users • Reminders by email • Import with vCard',
    'subscriptions_plan_include3' => '100% of the profits go the development of this great open source project.',
    'subscriptions_help_title' => 'Additional details you may be curious about',
    'subscriptions_help_opensource_title' => 'What is an open source project?',
    'subscriptions_help_opensource_desc' => 'Monica is an open source project. This means it is built by an entirely benevolent community who just wants to provide a great tool for the greater good. Being open source means the code is publicly available on GitHub, and everyone can inspect it, modify it or enhance it. All the money we raise is dedicated to build better features, have more powerful servers, help pay the bills. Thanks for your help. We couldn\'t do it without you – litterally.',
    'subscriptions_help_limits_title' => 'Is there any limit to the number of contacts we can have on the free plan?',
    'subscriptions_help_limits_plan' => 'Absolutely not. Free plans do not have limitations on the number of contacts you can have.',
    'subscriptions_help_discounts_title' => 'Do you have discounts for non-profits and education?',
    'subscriptions_help_discounts_desc' => 'We do! Monica is free for students, and free for non-profits and charities. Just contact <a href=":support">the support</a> with a proof of your status and we\'ll apply this special status in your account.',
    'subscriptions_help_change_title' => 'What if I change my mind?',
    'subscriptions_help_change_desc' => 'You can cancel anytime, no questions asked, and all by yourself – no need to contact support or whatever. However, you will not be refunded for the current period.',

    'import_title' => 'Importovat kontakty do svého účtu',
    'import_cta' => 'Nahrát kontakty',
    'import_stat' => 'Zatím jste importovali :number souborů.',
    'import_result_stat' => 'Uploaded vCard with 1 contact (:total_imported imported, :total_skipped skipped)|Uploaded vCard with :total_contacts contacts (:total_imported imported, :total_skipped skipped)',
    'import_view_report' => 'Zobrazit report',
    'import_in_progress' => 'Probíhá import. Obnovit stránku za jednu minutu.',
    'import_upload_title' => 'Importovat kontakty z vCard souboru',
    'import_upload_rules_desc' => 'Máme ale několik pravidel:',
    'import_upload_rule_format' => 'Podporujeme <code>.vcard</code> a <code>.vcf</code> soubory.',
    'import_upload_rule_vcard' => 'Podporujeme formát vCard 3.0, který je výchozím formátem aplikací Contacts.app (macOS) a Google Contacts.',
    'import_upload_rule_instructions' => 'Instrukce pro export z <a href="http://osxdaily.com/2015/07/14/export-contacts-mac-os-x/" target="_blank">Contacts.app (macOS)</a> a <a href="http://www.akruto.com/backup-phone-contacts-calendar/how-to-export-google-contacts-to-csv-or-vcard/" target="_blank">Google Contacts</a>.',
    'import_upload_rule_multiple' => 'Pokud mají vaše kontakty vícero emailů nebo telefonních čísel, bude importován pouze první z těchto záznamů.',
    'import_upload_rule_limit' => 'Velikost souborů je limitována na 10MB.',
    'import_upload_rule_time' => 'Nahrání a zpracování kontaktů může zabrat až 1 minutu. Buďte trpěliví.',
    'import_upload_rule_cant_revert' => 'Ověřte správnost dat před jejich nahráním, nahrání nelze vzít zpět.',
    'import_upload_form_file' => 'Váš <code>.vcf</code> nebo <code>.vCard</code> soubor:',
    'import_report_title' => 'Report importu',
    'import_report_date' => 'Datum importu',
    'import_report_type' => 'Typ importu',
    'import_report_number_contacts' => 'Počet kontaktů v souboru',
    'import_report_number_contacts_imported' => 'Počet importovaných kontaktů',
    'import_report_number_contacts_skipped' => 'Počet přeskočených kontaktů',
    'import_report_status_imported' => 'Importováno',
    'import_report_status_skipped' => 'Přeskočeno',
    'import_vcard_contact_exist' => 'Kontakt již existuje',
    'import_vcard_contact_no_firstname' => 'Chybí jméno (vyžadováno)',
    'import_blank_title' => 'Zatím jste neimportovali žádné kontakty.',
    'import_blank_question' => 'Chcete nyní importovat kontakty?',
    'import_blank_description' => 'Umíme importovat soubory vCard, které můžete získat z Google Contacts nebo svého správce kontaktů.',
    'import_blank_cta' => 'Importovat vCard',
    'import_need_subscription' => 'Importing data requires a subscription.',

    'tags_list_title' => 'Tagy',
    'tags_list_description' => 'Své kontakty můžete organizovat pomocí tagů. Tagy fungují jako adresáře, kontaktům můžete ale přidat vícero tagů. Nový tag přidáte úpravou vlastního kontaktu.',
    'tags_list_contact_number' => '1 kontakt|:count kontaktů',
    'tags_list_delete_success' => 'Tag byl úspěšně smazán',
    'tags_list_delete_confirmation' => 'Opravdu chcete smazat tento tag? Bude smazán pouze vybraný tag, žádné kontakty.',
    'tags_blank_title' => 'Tagy jsou šikovné řešení kategorizace kontaktů.',
    'tags_blank_description' => 'Tagy fungují jako adresáře, kontaktům můžete ale přidat vícero tagů. Přejděte na kontakt a otagujte přítele hned pod jeho jménem. Jakmile je kontakt otagován, vraťte se zpět pro správu všech tagů v tomto účtu.',

    'api_title' => 'API access',
    'api_description' => 'The API can be used to manipulate Monica\'s data from an external application, like a mobile application for instance.',

    'api_personal_access_tokens' => 'Personal access tokens',
    'api_pao_description' => 'Make sure you give this token to a source you trust – as they allow you to access all your data.',
    'api_token_title' => 'Personal access token',
    'api_token_create_new' => 'Create New Token',
    'api_token_not_created' => 'You have not created any personal access tokens.',
    'api_token_name' => 'Name',
    'api_token_delete' => 'Smazat',
    'api_token_create' => 'Create Token',
    'api_token_scopes' => 'Scopes',
    'api_token_help' => 'Here is your new personal access token. This is the only time it will be shown so don’t lose it! You may now use this token to make API requests.',

    'api_oauth_clients' => 'Your Oauth clients',
    'api_oauth_clients_desc' => 'This section lets you register your own OAuth clients.',
    'api_oauth_title' => 'Oauth Clients',
    'api_oauth_create_new' => 'Create New Client',
    'api_oauth_not_created' => 'You have not created any OAuth clients.',
    'api_oauth_clientid' => 'Client ID',
    'api_oauth_name' => 'Name',
    'api_oauth_name_help' => 'Something your users will recognize and trust.',
    'api_oauth_secret' => 'Secret',
    'api_oauth_create' => 'Create Client',
    'api_oauth_redirecturl' => 'Redirect URL',
    'api_oauth_redirecturl_help' => 'Your application\'s authorization callback URL.',

    'api_authorized_clients' => 'List of authorized clients',
    'api_authorized_clients_desc' => 'This section lists all the clients you\'ve authorized to access your application. You can revoke this authorization at anytime.',
    'api_authorized_clients_title' => 'Authorized Applications',
    'api_authorized_clients_name' => 'Name',
    'api_authorized_clients_scopes' => 'Scopes',

    'personalization_tab_title' => 'Personalize your account',

    'personalization_title' => 'Here you can find different settings to configure your account. These features are more for "power users" who want maximum control over Monica.',
    'personalization_contact_field_type_title' => 'Contact field types',
    'personalization_contact_field_type_add' => 'Add new field type',
    'personalization_contact_field_type_description' => 'Here you can configure all the different types of contact fields that you can associate to all your contacts. If in the future, a new social network appears, you will be able to add this new type of ways of contacting your contacts right here.',
    'personalization_contact_field_type_table_name' => 'Name',
    'personalization_contact_field_type_table_protocol' => 'Protocol',
    'personalization_contact_field_type_table_actions' => 'Actions',
    'personalization_contact_field_type_modal_title' => 'Add a new contact field type',
    'personalization_contact_field_type_modal_edit_title' => 'Edit an existing contact field type',
    'personalization_contact_field_type_modal_delete_title' => 'Delete an existing contact field type',
    'personalization_contact_field_type_modal_delete_description' => 'Are you sure you want to delete this contact field type? Deleting this type of contact field will delete ALL the data with this type for all your contacts.',
    'personalization_contact_field_type_modal_name' => 'Name',
    'personalization_contact_field_type_modal_protocol' => 'Protocol (optional)',
    'personalization_contact_field_type_modal_protocol_help' => 'Each new contact field type can be clickable. If a protocol is set, we will use it to trigger the action that is set.',
    'personalization_contact_field_type_modal_icon' => 'Icon (optional)',
    'personalization_contact_field_type_modal_icon_help' => 'You can associate an icon with this contact field type. You need to add a reference to a Font Awesome icon.',
    'personalization_contact_field_type_delete_success' => 'The contact field type has been deleted with success.',
    'personalization_contact_field_type_add_success' => 'The contact field type has been successfully added.',
    'personalization_contact_field_type_edit_success' => 'The contact field type has been successfully updated.',

    'personalization_genders_title' => 'Gender types',
    'personalization_genders_add' => 'Add new gender type',
    'personalization_genders_desc' => 'You can define as many genders as you need to. You need at least one gender type in your account.',
    'personalization_genders_modal_add' => 'Add gender type',
    'personalization_genders_modal_question' => 'How should this new gender be called?',
    'personalization_genders_modal_edit' => 'Update gender type',
    'personalization_genders_modal_edit_question' => 'How should this new gender be renamed?',
    'personalization_genders_modal_delete' => 'Delete gender type',
    'personalization_genders_modal_delete_desc' => 'Are you sure you want to delete :name?',
    'personalization_genders_modal_delete_question' => 'You currently have 1 contact that has this gender. If you delete this gender, what gender should this contact have?|You currently have :count contacts that have this gender. If you delete this gender, what gender should these contacts have?',
    'personalization_genders_modal_error' => 'Please choose a valid gender from the list.',

    'personalization_reminder_rule_save' => 'The change has been saved',
    'personalization_reminder_rule_title' => 'Reminder rules',
    'personalization_reminder_rule_line' => '1 day before|:count days before',
    'personalization_reminder_rule_desc' => 'For every reminder that you set, we can send you an email some days before the event happens. You can toggle those notifications here. Note that those notifications only apply to monthly and yearly reminders.',

    'reminder_time_to_send' => 'Time of the day reminders should be sent',
];
