<?php

/**
 * ⚠️ Editing not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/main/docs/contribute/translate.md for translations.
 */

return [

    //index
    'people_not_found' => 'Kontakt hittades ej',
    'people_list_number_kids' => ':count barn<unk>:count barn',
    'people_list_last_updated' => 'Senast kontakt:',
    'people_list_number_reminders' => ':1 påminnelse|:count påminnelser',
    'people_list_blank_title' => 'Du har ingen på ditt konto ännu',
    'people_list_blank_cta' => 'Lägg till en person',
    'people_list_sort' => 'Sortera',
    'people_list_stats' => ':{count} kontakt|{count} kontakter',
    'people_list_firstnameAZ' => 'Sortera efter förnamn A → Ö',
    'people_list_firstnameZA' => 'Sortera efter förnamn Ö → A',
    'people_list_lastnameAZ' => 'Sortera efter efternamn A → Ö',
    'people_list_lastnameZA' => 'Sortera efter efternamn Ö → A',
    'people_list_lastactivitydateNewtoOld' => 'Sortera efter senaste aktivitetsdatum, nyaste till äldsta',
    'people_list_lastactivitydateOldtoNew' => 'Sortera efter senaste aktivitetsdatum, äldsta till nyaste',
    'people_list_filter_tag' => 'Visar alla kontakter taggade med',
    'people_list_clear_filter' => 'Töm filter',
    'people_list_contacts_per_tags' => ':{count} kontakt|{count} kontakter',
    'people_list_show_dead' => 'Visa avlidna personer (:count)',
    'people_list_hide_dead' => 'Dölj avlidna personer (:count)',
    'people_search' => 'Sök bland dina kontakter…',
    'people_search_no_results' => 'Inga resultat hittades',
    'people_search_next' => 'Nästa',
    'people_search_prev' => 'Tidigare',
    'people_search_rows_per_page' => 'Rader per sida',
    'people_search_of' => 'av',
    'people_search_page' => 'Sida',
    'people_search_all' => 'Alla',
    'people_add_new' => 'Lägg till ny person',
    'people_list_account_usage' => 'Din kontoanvändning: :current/:limit kontakter',
    'people_list_account_upgrade_title' => 'Uppgradera ditt konto för att låsa upp det till dess fulla potential.',
    'people_list_account_upgrade_cta' => 'Uppgradera nu',
    'people_list_untagged' => 'Visa ej taggade kontakter',
    'people_list_filter_untag' => 'Visar alla omarkerade kontakter',
    'archived_contact_readonly' => 'Den arkiverade kontakten kan inte redigeras, vänligen avarkivera den först.',

    // people add
    'people_add_title' => 'Lägg till en ny person',
    'people_add_missing' => 'Ingen person hittades – lägg till en ny nu',
    'people_add_firstname' => 'Förnamn',
    'people_add_middlename' => 'Mellannamn (valfritt)',
    'people_add_lastname' => 'Efternamn (frivilligt)',
    'people_add_email' => 'E-post (valfritt)',
    'people_add_nickname' => 'Smeknamn (frivilligt)',
    'people_add_cta' => 'Lägg till',
    'people_save_and_add_another_cta' => 'Skicka in och lägg till någon annan',
    'people_add_success' => ':name har skapats',
    'people_add_gender' => 'Kön',
    'people_delete_success' => 'Kontakten har tagits bort',
    'people_delete_message' => 'Ta bort kontakt',
    'people_delete_confirmation' => 'Är du säker på att du vill ta bort :name\'s kontakt? Radering är omedelbar och permanent.',
    'people_add_birthday_reminder' => 'Önska födelsedag till :name',
    'people_add_birthday_reminder_deceased' => 'På detta datum skulle :name ha firat sin födelsedag',
    'people_add_import' => 'Vill du <a href=":url">importera dina kontakter</a>?',
    'people_edit_email_error' => 'Det finns redan en kontakt på ditt konto med denna e-postadress. Välj en annan.',
    'people_export' => 'Exportera som vCard',
    'people_add_reminder_for_birthday' => 'Skapa en årlig födelsedagspåminnelse',

    // show
    'section_contact_information' => 'Kontaktuppgifter',
    'section_personal_activities' => 'Aktiviteter',
    'section_personal_reminders' => 'Påminnelser',
    'section_personal_tasks' => 'Uppgifter',
    'section_personal_gifts' => 'Gåvor',
    'section_personal_notes' => 'Anteckningar',

    // archived contacts
    'list_link_to_active_contacts' => 'Du visar arkiverade kontakter. Se <a href=":url">listan över aktiva kontakter</a> istället.',
    'list_link_to_archived_contacts' => 'Lista över arkiverade kontakter',

    // Header
    'me' => 'Detta är du',
    'edit_contact_information' => 'Redigera kontaktinformation',
    'contact_archive' => 'Arkivera kontakt',
    'contact_unarchive' => 'Avarkivera kontakt',
    'contact_archive_help' => 'Arkiverade kontakter visas inte på kontaktlistan, men visas fortfarande i sökresultaten.',
    'call_button' => 'Logga ett samtal',
    'set_favorite' => 'Favoritkontakter placeras högst upp i kontaktlistan',

    // Stay in touch
    'stay_in_touch' => 'Håll kontakten',
    'stay_in_touch_frequency' => 'Håll kontakten varje dag|Håll kontakten var {count} dag',
    'stay_in_touch_next_date' => 'Nästa tillfälle: {date}',
    'stay_in_touch_invalid' => 'Frekvensen måste vara större än 0.',
    'stay_in_touch_premium' => 'Du måste uppgradera ditt konto för att använda denna funktion',
    'stay_in_touch_modal_title' => 'Håll kontakten',
    'stay_in_touch_modal_desc' => 'Vi kan påminna dig via e-post om att hålla kontakten med {firstname} med ett regelbundet intervall.',
    'stay_in_touch_modal_label' => 'Skicka ett mail var… {count} dag|Skicka ett mail varje… {count} dagar',

    // Calls
    'modal_call_title' => 'Registrera samtal',
    'modal_call_comment' => 'Vad pratade ni om? (valfritt)',
    'modal_call_exact_date' => 'Samtalet skedde den',
    'modal_call_who_called' => 'Vem ringde?',
    'modal_call_emotion' => 'Vill du logga hur du kände dig under detta samtal? (valfritt)',
    'calls_add_success' => 'Samtalet har sparats.',
    'call_delete_confirmation' => 'Är du säker på att du vill ta bort detta samtal?',
    'call_delete_success' => 'Samtalet har tagits bort',
    'call_title' => 'Telefonsamtal',
    'call_empty_comment' => 'Inga detaljer',
    'call_blank_title' => 'Håll koll på de telefonsamtal du gjort med {name}',
    'call_blank_desc' => 'Du ringde {name}',
    'call_you_called' => 'Du ringde',
    'call_he_called' => '{name} ringde',
    'call_emotions' => 'Känslor:',

    // Conversation
    'conversation_blank' => 'Registrera samtal du har med :name på sociala media, SMS…',
    'conversation_delete_link' => 'Ta bort konversationen',
    'conversation_edit_title' => 'Redigera konversation',
    'conversation_edit_delete' => 'Är du säker på att du vill ta bort denna konversation? Borttagning är permanent.',
    'conversation_add_success' => 'Samtalet har lagts till.',
    'conversation_edit_success' => 'Samtalet har uppdaterats.',
    'conversation_delete_success' => 'Konversationen har tagits bort.',
    'conversation_add_title' => 'Spela in en ny konversation',
    'conversation_add_when' => 'När hade du den här konversationen?',
    'conversation_add_who_wrote' => 'Vem har skickat detta meddelande?',
    'conversation_add_how' => 'Hur kommunicerade du?',
    'conversation_add_you' => 'Du',
    'conversation_add_content' => 'Skriv ner vad som sades',
    'conversation_add_what_was_said' => 'Vad sade du?',
    'conversation_add_another' => 'Lägg till ett annat meddelande',
    'conversation_add_error' => 'Du måste lägga till minst ett meddelande.',
    'conversation_list_table_messages' => 'Meddelanden',
    'conversation_list_table_content' => 'Partiellt innehåll (senaste meddelande)',
    'conversation_list_title' => 'Konversationer',
    'conversation_list_cta' => 'Logga konversation',

    // age - birthday
    'birthdate_not_set' => 'Födelsedatum är inte satt',
    'age_approximate_in_years' => 'runt :age år gammal',
    'age_exact_in_years' => ':age år gammal',
    'age_exact_birthdate' => 'född :date',

    // Last called
    'last_called' => 'Senast anropad: :date',
    'last_talked_to' => 'Senast uppringd: {date}',
    'last_called_empty' => 'Senast anropad: okänd',
    'last_activity_date' => 'Senaste aktiviteten tillsammans: :date',
    'last_activity_date_empty' => 'Senaste aktiviteten tillsammans: okänd',

    // additional information
    'information_edit_success' => 'Profilen har uppdaterats',
    'information_edit_title' => 'Redigera :name\'s personliga information',
    'information_edit_max_size' => 'Max :size Kb.',
    'information_edit_max_size2' => 'Max {size} Kb.',
    'information_edit_firstname' => 'Förnamn',
    'information_edit_lastname' => 'Efternamn (valfritt)',
    'information_edit_description' => 'Description (optional)',
    'information_edit_description_help' => 'Används på kontaktlistan för att vid behov lägga till lite kontext.',
    'information_edit_unknown' => 'Jag känner inte till personens ålder',
    'information_edit_probably' => 'This person is probably…',
    'information_edit_not_year' => 'I know the day and month of this person’s birthday, but not the year…',
    'information_edit_exact' => 'I know this person’s exact birthday…',
    'information_edit_birthdate_label' => 'Birthday',
    'information_no_work_defined' => 'Ingen arbetsinformation angiven',
    'information_work_at' => 'vid :company',
    'work_add_cta' => 'Uppdatera arbetsinformation',
    'work_edit_success' => 'Work information updated',
    'work_edit_title' => 'Uppdatera :name\'s jobbinformation',
    'work_edit_job' => 'Jobbtitel (valfritt)',
    'work_edit_company' => 'Företag (valfritt)',
    'work_information' => 'Information om arbete',

    // food preferences
    'food_preferences_add_success' => 'Matinställningar har sparats',
    'food_preferences_edit_description' => 'Kanske :förnamn eller någon i familjen :family har en allergi. Eller inte gillar en viss flaska vin. Ange dem här så att du kommer ihåg det nästa gång du bjuder in dem till middag',
    'food_preferences_edit_description_no_last_name' => 'Kanske : förnamn har en allergi, eller inte gillar en viss flaska vin. Ange dem här så att du kommer ihåg det nästa gång du bjuder in dem till middag',
    'food_preferences_edit_title' => 'Ange matpreferenser',
    'food_preferences_edit_cta' => 'Spara matpreferenser',
    'food_preferences_title' => 'Inställningar för mat',
    'food_preferences_cta' => 'Lägg till matpreferenser',

    // reminders
    'reminders_blank_title' => 'Finns det något du vill bli påmind om :name?',
    'reminders_blank_add_activity' => 'Lägg till en påminnelse',
    'reminders_add_title' => 'Vad skulle du vilja bli påmind om :name?',
    'reminders_add_description' => 'Please remind me to…',
    'reminders_add_next_time' => 'När är nästa gång du vill bli påmind om detta?',
    'reminders_add_once' => 'Påminn mig om detta bara en gång',
    'reminders_add_recurrent' => 'Påminn mig om detta varje',
    'reminders_add_starting_from' => 'från och med det datum som anges ovan',
    'reminders_add_cta' => 'Lägg till påminnelse',
    'reminders_edit_update_cta' => 'Uppdatera påminnelse',
    'reminders_add_error_custom_text' => 'Du måste ange en text för denna påminnelse',
    'reminders_create_success' => 'Påminnelsen har lagts till',
    'reminders_delete_success' => 'Påminnelsen har tagits bort',
    'reminders_update_success' => 'Påminnelsen har uppdaterats',
    'reminders_add_optional_comment' => 'Valfri kommentar',

    'reminder_frequency_day' => 'varje dag|var :number dag',
    'reminder_frequency_week' => 'varje vecka|var :number vecka',
    'reminder_frequency_month' => 'varje månad|var :number månad',
    'reminder_frequency_year' => 'varje år|vart :number år',
    'reminder_frequency_one_time' => 'den :date',
    'reminders_delete_confirmation' => 'Är du säker på att du vill ta bort denna påminnelse?',
    'reminders_delete_cta' => 'Radera',
    'reminders_next_expected_date' => 'på',
    'reminders_cta' => 'Lägg till en påminnelse',
    'reminders_description' => 'We will send an email for each one of the reminders below. Reminders are sent every morning the day events will happen. Reminders automatically added for birthdays can not be deleted. If you want to change those dates, edit the birthday of the contacts.',
    'reminders_one_time' => 'En gång',
    'reminders_type_week' => 'vecka',
    'reminders_type_month' => 'månad',
    'reminders_type_year' => 'år',
    'reminders_birthday' => ':name\'s födelsedag',
    'reminders_free_plan_warning' => 'Du är på den fria planen. Inga e-postmeddelanden skickas på denna plan. För att få dina påminnelser via e-post, uppgradera ditt konto.',

    // relationships
    'relationship_form_add' => 'Lägg till ett nytt förhållande',
    'relationship_form_edit' => 'Redigera ett befintligt förhållande',
    'relationship_form_is_with' => 'This person is…',
    'relationship_form_is_with_name' => ':name is…',
    'relationship_form_add_choice' => 'Vem är relationen med?',
    'relationship_form_create_contact' => 'Lägg till en ny person',
    'relationship_form_associate_contact' => 'En befintlig kontakt',
    'relationship_form_associate_dropdown' => 'Sök och välj en befintlig kontakt i menyn nedan',
    'relationship_form_associate_dropdown_placeholder' => 'Sök och välj en befintlig kontakt',
    'relationship_form_also_create_contact' => 'Skapa en kontaktpost för denna person.',
    'relationship_form_add_description' => 'Detta kommer att låta dig behandla denna person som alla andra kontakter.',
    'relationship_form_add_no_existing_contact' => 'Du har inga kontakter som kan vara relaterade till :name just nu.',
    'relationship_delete_confirmation' => 'Är du säker på att du vill ta bort detta förhållande? Borttagning är permanent.',
    'relationship_unlink_confirmation' => 'Är du säker på att du vill ta bort detta förhållande? Denna person kommer inte att tas bort – bara förhållandet mellan de två.',
    'relationship_form_add_success' => 'Relationen har fastställts framgångsrikt.',
    'relationship_form_deletion_success' => 'Relationen har tagits bort.',

    // tasks
    'tasks_title' => 'Uppgifter',
    'tasks_blank_title' => 'Du har inga uppgifter ännu.',
    'tasks_form_title' => 'Titel',
    'tasks_form_description' => 'Beskrivning (valfritt)',
    'tasks_add_task' => 'Lägg till en uppgift',
    'tasks_delete_success' => 'Uppgiften har tagits bort',
    'tasks_complete_success' => 'Uppgiften har ändrat status',

    // activities
    'activity_title' => 'Aktiviteter',
    'activity_type_category_simple_activities' => 'Enkla aktiviteter',
    'activity_type_category_sport' => 'Sport',
    'activity_type_category_food' => 'Mat',
    'activity_type_category_cultural_activities' => 'Kulturella aktiviteter',
    'activity_type_just_hung_out' => 'hängde precis ut',
    'activity_type_watched_movie_at_home' => 'såg en film hemma',
    'activity_type_talked_at_home' => 'precis pratat hemma',
    'activity_type_did_sport_activities_together' => 'spelade en sport tillsammans',
    'activity_type_ate_at_his_place' => 'åt hemma hos sig',
    'activity_type_went_bar' => 'gick till en bar',
    'activity_type_ate_at_home' => 'åt hemma',
    'activity_type_picnicked' => 'utflykt',
    'activity_type_ate_restaurant' => 'åt på en restaurang',
    'activity_type_went_theater' => 'gick till teatern',
    'activity_type_went_concert' => 'gick till en konsert',
    'activity_type_went_play' => 'gick till en pjäs',
    'activity_type_went_museum' => 'gick till museet',
    'activities_add_activity' => 'Lägg till aktivitet',
    'activities_add_more_details' => 'Lägg till fler detaljer',
    'activities_add_emotions' => 'Lägg till känslor',
    'activities_add_category' => 'Ange en kategori',
    'activities_add_participants_cta' => 'Lägg till deltagare',
    'activities_item_information' => ':Activity. Hänt :date',
    'activities_add_title' => 'Vad gjorde du med {name}?',
    'activities_summary' => 'Beskriv vad du gjorde',
    'activities_add_pick_activity' => 'Would you like to categorize this activity? You don’t have to, but it will give you statistics later on (optional)',
    'activities_add_date_occured' => 'The activity happened on…',
    'activities_add_participants' => 'Vem deltog förutom {name} i denna aktivitet? (valfritt)',
    'activities_add_emotions_title' => 'Vill du logga hur du kände dig under detta samtal? (valfritt)',
    'activities_blank_title' => 'Håll koll på vad du har gjort med {name} tidigare och vad du har pratat om',
    'activities_blank_add_activity' => 'Lägg till en aktivitet',
    'activities_add_success' => 'Aktiviteten har lagts till',
    'activities_add_error' => 'Fel när aktiviteten lades till',
    'activities_update_success' => 'Aktiviteten har uppdaterats',
    'activities_delete_success' => 'Aktiviteten har tagits bort',
    'activities_who_was_involved' => 'Vem var inblandad?',
    'activities_activity' => 'Aktivitetskategori',
    'activities_view_activities_report' => 'Visa aktivitetsrapport',
    'activities_profile_title' => 'Aktiviteter rapport mellan :name och dig',
    'activities_profile_subtitle' => 'Du har loggat :total_activities aktivitet med :name totalt och :aktiviteter_last_tolve_months under de senaste 12 månaderna hittills.|Du har loggat :total_activities aktiviteter med :name totalt och :aktiviteter_last_tolve_months under de senaste 12 månaderna hittills.',
    'activities_profile_year_summary_activity_types' => 'Här är en uppdelning av den typ av aktiviteter du har gjort tillsammans :year',
    'activities_profile_year_summary' => 'Här är vad ni två har gjort :year',
    'activities_profile_number_occurences' => ':value aktivitet|:value aktiviteter',
    'activities_list_participants' => 'Participants ({total}):',
    'activities_list_emotions' => 'Känslor jag kände:',
    'activities_list_date' => 'Hänt på',
    'activities_list_category' => 'Kategori:',

    // notes
    'notes_create_success' => 'Anteckningen har skapats',
    'notes_update_success' => 'Anteckningen har sparats',
    'notes_delete_success' => 'Anteckningen har tagits bort',
    'notes_add_cta' => 'Lägg till anteckning',
    'notes_favorite' => 'Lägg till/ta bort från favoriter',
    'notes_delete_title' => 'Ta bort en anteckning',
    'notes_delete_confirmation' => 'Är du säker på att du vill ta bort denna anteckning? Radering är permanent',

    // gifts
    'gifts_title' => 'Gåvor',
    'gifts_add_success' => 'Gåvan har lagts till',
    'gifts_delete_success' => 'Gåvan har tagits bort',
    'gifts_delete_confirmation' => 'Är du säker på att du vill ta bort denna gåva?',
    'gifts_add_gift' => 'Lägg till en gåva',
    'gifts_link' => 'Länk',
    'gifts_for' => 'För: {name}',
    'gifts_delete_cta' => 'Radera',
    'gifts_add_title' => 'Gåvohantering för :name',
    'gifts_add_gift_idea' => 'Gåva idé',
    'gifts_add_gift_already_offered' => 'Erbjuden gåvan',
    'gifts_add_gift_received' => 'Gåva mottagen',
    'gifts_add_gift_title' => 'Vad är denna gåva?',
    'gifts_add_gift_name' => 'Gåvans namn',
    'gifts_add_link' => 'Länk till webbsidan (valfritt)',
    'gifts_add_value' => 'Värde (valfritt)',
    'gifts_add_comment' => 'Kommentar (valfritt)',
    'gifts_add_recipient' => 'Mottagare (valfritt)',
    'gifts_add_recipient_field' => 'Mottagare',
    'gifts_add_photo' => 'Foto (valfritt)',
    'gifts_add_photo_title' => 'Lägg till ett foto för denna gåva',
    'gifts_add_someone' => 'Denna gåva är till för någon i {name} familj i synnerhet',
    'gifts_delete_title' => 'Ta bort en gåva',
    'gifts_ideas' => 'Gåva idéer',
    'gifts_offered' => 'Erbjudna gåvor',
    'gifts_offered_as_an_idea' => 'Markera som en idé',
    'gifts_received' => 'Gåvor mottagna',
    'gifts_view_comment' => 'Visa kommentar',
    'gifts_mark_offered' => 'Markera som erbjuden',
    'gifts_update_success' => 'Gåvan har uppdaterats',
    'gifts_add_date' => 'Date (optional)',

    // debts
    'debt_delete_confirmation' => 'Är du säker på att du vill ta bort denna skuld?',
    'debt_delete_success' => 'Skulden har tagits bort',
    'debt_add_success' => 'Skulden har lagts till',
    'debt_title' => 'Skulder',
    'debt_add_cta' => 'Lägg till skuld',
    'debt_you_owe' => 'Du är skyldig :amount',
    'debt_they_owe' => ':name är skyldig dig :amount',
    'debt_add_title' => 'Skuldhantering',
    'debt_add_you_owe' => 'Du är skyldig :name',
    'debt_add_they_owe' => ':name är skyldig dig',
    'debt_add_amount' => 'summan av',
    'debt_add_reason' => 'av följande skäl (valfritt)',
    'debt_add_add_cta' => 'Lägg till skuld',
    'debt_edit_update_cta' => 'Uppdatera skuld',
    'debt_edit_success' => 'Skulden har uppdaterats',
    'debts_blank_title' => 'Hantera skulder du är skyldig :name eller :name är du skyldig',

    // tags
    'tag_edit' => 'Redigera tagg',
    'tag_add' => 'Lägg till taggar',
    'tag_add_search' => 'Lägg till eller sök taggar',
    'tag_no_tags' => 'Inga taggar ännu',

    // Introductions
    'introductions_sidebar_title' => 'Hur du träffades',
    'introductions_blank_cta' => 'Ange hur du träffade :name',
    'introductions_title_edit' => 'Hur träffade du :name?',
    'introductions_additional_info' => 'Förklara hur och var du träffades',
    'introductions_edit_met_through' => 'Har någon introducerat dig till den här personen?',
    'introductions_no_met_through' => 'Ingen',
    'introductions_first_met_date' => 'Datum som ni träffades',
    'introductions_no_first_met_date' => 'Jag vet inte vilket datum vi träffades',
    'introductions_first_met_date_known' => 'Detta är det datum vi möttes',
    'introductions_add_reminder' => 'Lägg till en påminnelse för att fira detta möte på årsdagen denna händelse hände',
    'introductions_update_success' => 'Du har uppdaterat informationen om hur du träffade den här personen',
    'introductions_met_through' => 'Möttes genom <a href=":url">:name</a>',
    'introductions_met_date' => 'Träffades den :date',
    'introductions_reminder_title' => 'Årsdagen av dagen du träffade första gången',

    // Deceased
    'deceased_reminder_title' => 'Årsdag av bortgång av :name',
    'deceased_mark_person_deceased' => 'Mark this as deceased',
    'deceased_know_date' => 'I know the date that this person died',
    'deceased_add_reminder' => 'Lägg till en påminnelse för detta datum',
    'deceased_label' => 'Avlidna',
    'deceased_date_label' => 'Datum av bortgång',
    'deceased_label_with_date' => 'Datum bortgång :date',
    'deceased_age' => 'Ålder vid avldining',

    // Contact information
    'contact_info_title' => 'Kontaktinformation',
    'contact_info_form_content' => 'Innehåll',
    'contact_info_form_contact_type' => 'Typ av kontakt',
    'contact_info_form_personalize' => 'Anpassa',
    'contact_info_address' => 'Bor i',

    // Addresses
    'contact_address_title' => 'Adresser',
    'contact_address_form_name' => 'Etikett (valfritt)',
    'contact_address_form_street' => 'Gatuadress (valfri)',
    'contact_address_form_city' => 'Stad (valfritt)',
    'contact_address_form_province' => 'Län (valfritt)',
    'contact_address_form_postal_code' => 'Postnummer (valfritt)',
    'contact_address_form_country' => 'Land (valfritt)',
    'contact_address_form_latitude' => 'Latitud (endast siffror) (valfritt)',
    'contact_address_form_longitude' => 'Longitud (endast nummer) (valfritt)',

    // Pets
    'pets_kind' => 'Typ av husdjur',
    'pets_name' => 'Namn (frivilligt)',
    'pets_create_success' => 'Husdjuret har lagts till',
    'pets_update_success' => 'Husdjuret har uppdaterats',
    'pets_delete_success' => 'Husdjuret har tagits bort',
    'pets_title' => 'Husdjur',
    'pets_reptile' => 'Reptil',
    'pets_bird' => 'Fågel',
    'pets_cat' => 'Katt',
    'pets_dog' => 'Hund',
    'pets_fish' => 'Fisk',
    'pets_hamster' => 'Hamster',
    'pets_horse' => 'Häst',
    'pets_rabbit' => 'Kanin',
    'pets_rat' => 'Råtta',
    'pets_small_animal' => 'Små djur',
    'pets_other' => 'Övriga',

    // life events
    'life_event_list_tab_life_events' => 'Livshändelser',
    'life_event_list_tab_other' => 'Notes, reminders, …',
    'life_event_list_title' => 'Livshändelser',
    'life_event_blank' => 'Logga vad som händer med livet för {name} för din framtida referens.',
    'life_event_list_cta' => 'Lägg till livshändelse',
    'life_event_create_category' => 'Alla kategorier',
    'life_event_create_life_event' => 'Lägg till livshändelse',
    'life_event_create_default_title' => 'Titel (valfritt)',
    'life_event_create_default_story' => 'Berättelse (valfritt)',
    'life_event_create_date' => 'You do not need to indicate a month or a day – only the year is mandatory.',
    'life_event_create_default_description' => 'Lägg till information om vad du vet',
    'life_event_create_add_yearly_reminder' => 'Lägg till en årlig påminnelse för denna händelse',
    'life_event_create_success' => 'Livshändelsen har lagts till',
    'life_event_delete_title' => 'Ta bort en livshändelse',
    'life_event_delete_description' => 'Är du säker på att du vill ta bort denna livshändelse? Borttagning är permanent.',
    'life_event_delete_success' => 'Livshändelsen har tagits bort',
    'life_event_date_it_happened' => 'Datum det hände',
    'life_event_category_work_education' => 'Arbete & utbildning',
    'life_event_category_family_relationships' => 'Familj & relationer',
    'life_event_category_home_living' => 'Hem & Boende',
    'life_event_category_health_wellness' => 'Hälsa & välmående',
    'life_event_category_travel_experiences' => 'Resor & upplevelser',
    'life_event_sentence_new_job' => 'Började på ett nytt jobb',
    'life_event_sentence_retirement' => 'Pensionerad',
    'life_event_sentence_new_school' => 'Började på skola',
    'life_event_sentence_study_abroad' => 'Studerade utomlands',
    'life_event_sentence_volunteer_work' => 'Började volontärarbeta',
    'life_event_sentence_published_book_or_paper' => 'Publicerat ett papper',
    'life_event_sentence_military_service' => 'Värnplikt',
    'life_event_sentence_new_relationship' => 'Började ett förhållande',
    'life_event_sentence_engagement' => 'Förlovade mig',
    'life_event_sentence_marriage' => 'Gifte mig',
    'life_event_sentence_anniversary' => 'Årsdag',
    'life_event_sentence_expecting_a_baby' => 'Förväntar sig ett barn',
    'life_event_sentence_new_child' => 'Fick barn',
    'life_event_sentence_new_family_member' => 'Lade till en familjemedlem',
    'life_event_sentence_new_pet' => 'Fick ett husdjur',
    'life_event_sentence_end_of_relationship' => 'Avslutade ett förhållande',
    'life_event_sentence_loss_of_a_loved_one' => 'Bortgång av närstående',
    'life_event_sentence_moved' => 'Flyttade',
    'life_event_sentence_bought_a_home' => 'Köpte ett hem',
    'life_event_sentence_home_improvement' => 'Förbättrade och renoverade hemmet',
    'life_event_sentence_holidays' => 'Åkte på semester',
    'life_event_sentence_new_vehicle' => 'Fick ett nytt fordon',
    'life_event_sentence_new_roommate' => 'Fick en rumskompis',
    'life_event_sentence_overcame_an_illness' => 'Övervann en sjukdom',
    'life_event_sentence_quit_a_habit' => 'Avslutade en vana',
    'life_event_sentence_new_eating_habits' => 'Började nya matvanor',
    'life_event_sentence_weight_loss' => '"Gå ner i vikt"',
    'life_event_sentence_wear_glass_or_contact' => 'Började bära glasögon eller kontaktlinser',
    'life_event_sentence_broken_bone' => 'Bröt ett ben',
    'life_event_sentence_removed_braces' => 'Tog bort tandställning',
    'life_event_sentence_surgery' => 'Hade operation',
    'life_event_sentence_dentist' => 'Gick till tandläkaren',
    'life_event_sentence_new_sport' => 'Började med sport',
    'life_event_sentence_new_hobby' => 'Började med en hobby',
    'life_event_sentence_new_instrument' => 'Lärde mig ett nytt instrument',
    'life_event_sentence_new_language' => 'Lärde sig ett nytt språk',
    'life_event_sentence_tattoo_or_piercing' => 'Fick en tatuering eller piercing',
    'life_event_sentence_new_license' => 'Fick license',
    'life_event_sentence_travel' => 'Reste',
    'life_event_sentence_achievement_or_award' => 'Fick en prestation eller belöning',
    'life_event_sentence_changed_beliefs' => 'Ändrad trosuppfattning',
    'life_event_sentence_first_word' => 'Talade för första gången',
    'life_event_sentence_first_kiss' => 'Första kyss',

    // documents
    'document_list_title' => 'Dokument',
    'document_list_cta' => 'Ladda upp dokument',
    'document_list_blank_desc' => 'Här kan du lagra dokument relaterade till denna person.',
    'document_upload_zone_cta' => 'Ladda upp en fil',
    'document_upload_zone_progress' => 'Uploading the document…',
    'document_upload_zone_error' => 'Det gick inte att ladda upp dokumentet. Försök igen nedan.',

    // Photos
    'photo_title' => 'Foton',
    'photo_list_title' => 'Relaterade foton',
    'photo_list_cta' => 'Ladda upp foto',
    'photo_list_blank_desc' => 'Du kan lagra bilder om denna kontakt. Ladda upp en nu!',
    'photo_upload_zone_cta' => 'Ladda upp ett foto',
    'photo_current_profile_pic' => 'Nuvarande profilbild',
    'photo_make_profile_pic' => 'Skapa profilbild',
    'photo_delete' => 'Ta bort foto',
    'photo_next' => 'Next photo ❯',
    'photo_previous' => '❮ Previous photo',

    // Avatars
    'avatar_change_title' => 'Ändra din avatar',
    'avatar_question' => 'Vilken avatar vill du använda?',
    'avatar_default_avatar' => 'Standardavatar',
    'avatar_adorable_avatar' => 'Den beundransvärda avatar',
    'avatar_gravatar' => 'Gravatar som associeras med den här personens e-postadress. <a href="https://gravatar.com/">Gravatar</a> är ett globalt system som låter användare associera e-postadresser med foton.',
    'avatar_current' => 'Behåll nuvarande avatar',
    'avatar_photo' => 'Från ett foto som du laddar upp',
    'avatar_crop_new_avatar_photo' => 'Beskär ny avatar foto',

    // emotions
    'emotion_this_made_me_feel' => 'Detta fick dig att känna…',

    // logs
    'auditlogs_link' => 'Historik',
    'auditlogs_title' => 'Allt som hände :name',
    'auditlogs_breadcrumb' => 'Historik',
    'auditlogs_author' => 'Av :name den :date',

    // contact field label
    'contact_field_label_home' => 'Hem',
    'contact_field_label_work' => 'Arbete',
    'contact_field_label_cell' => 'Mobil',
    'contact_field_label_fax' => 'Fax',
    'contact_field_label_pager' => 'Personsökare',
    'contact_field_label_main' => 'Primär',
    'contact_field_label_other' => 'Övriga',
    'contact_field_label_personal' => 'Personligt',
];
