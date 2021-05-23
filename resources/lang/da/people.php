<?php

/**
 * ⚠️ Editing not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/master/docs/contribute/translate.md for translations.
 */

return [

    //index
    'people_not_found' => 'Kontakt ikke fundet',
    'people_list_number_kids' => ':count child|:count children',
    'people_list_last_updated' => 'Sidste checket:',
    'people_list_number_reminders' => ':count reminder|:count reminders',
    'people_list_blank_title' => 'Du har endnu ikke nogen på din konto endnu',
    'people_list_blank_cta' => 'Tilføj en anden person',
    'people_list_sort' => 'Sortér',
    'people_list_stats' => ':count contact|:count contacts',
    'people_list_firstnameAZ' => 'Sortér på fornavn A → Z',
    'people_list_firstnameZA' => 'Sortér på fornavn Z → A',
    'people_list_lastnameAZ' => 'Sortér på efternavn A → Z',
    'people_list_lastnameZA' => 'Sortér på efternavn Z → A',
    'people_list_lastactivitydateNewtoOld' => 'Sort by last activity date, newest to oldest',
    'people_list_lastactivitydateOldtoNew' => 'Sort by last activity date, oldest to newest',
    'people_list_filter_tag' => 'Viser alle kontakter tagget med',
    'people_list_clear_filter' => 'Ryd filter',
    'people_list_contacts_per_tags' => ':count contact|:count contacts',
    'people_list_show_dead' => 'Vis afdøde (:count)',
    'people_list_hide_dead' => 'Skjul afdøde (:count)',
    'people_search' => 'Search your contacts…',
    'people_search_no_results' => 'Ingen resultater fundet',
    'people_search_next' => 'Næste',
    'people_search_prev' => 'Previous',
    'people_search_rows_per_page' => 'Rows per page',
    'people_search_of' => 'af',
    'people_search_page' => 'Side',
    'people_search_all' => 'Alle',
    'people_add_new' => 'Tilføj ny person',
    'people_list_account_usage' => 'Dit konto forbrug: :current/:limit contacts',
    'people_list_account_upgrade_title' => 'Opgrader din konto for at låse den op for dets fulde potentiale.',
    'people_list_account_upgrade_cta' => 'Opgradér nu',
    'people_list_untagged' => 'Vis ikke-taggede kontakter',
    'people_list_filter_untag' => 'Viser alle ikke-taggede kontakter',

    // people add
    'people_add_title' => 'Tilføj en ny person',
    'people_add_missing' => 'Ingen Person Fundet Tilføj Ny Nu',
    'people_add_firstname' => 'Fornavn',
    'people_add_middlename' => 'Mellemnavn (valgfrit)',
    'people_add_lastname' => 'Efternavn (valgfrit)',
    'people_add_email' => 'Email (Optional)',
    'people_add_nickname' => 'Kaldenavn (valgfrit)',
    'people_add_cta' => 'Tilføj',
    'people_save_and_add_another_cta' => 'Indsend og tilføj en anden',
    'people_add_success' => ':name er blevet oprettet',
    'people_add_gender' => 'Køn',
    'people_delete_success' => 'Kontakten er blevet slettet',
    'people_delete_message' => 'Slet kontakt',
    'people_delete_confirmation' => 'Are you sure you want to delete :name’s contact? Deletion is immediate and permanent.',
    'people_add_birthday_reminder' => 'Ønsk :name tillykke',
    'people_add_birthday_reminder_deceased' => 'On this date, :name, would have celebrated their birthday',
    'people_add_import' => 'Ønsker du at <a href=":url">importere dine kontakter</a>?',
    'people_edit_email_error' => 'Der findes allerede en kontakt på din konto med denne e-mailadresse. Vælg venligst en anden.',
    'people_export' => 'Eksportér som vCard',
    'people_add_reminder_for_birthday' => 'Opret en årlig påmindelse for fødselsdagen',

    // show
    'section_contact_information' => 'Kontaktoplysninger',
    'section_personal_activities' => 'Aktiviteter',
    'section_personal_reminders' => 'Påmindelser',
    'section_personal_tasks' => 'Opgaver',
    'section_personal_gifts' => 'Gaver',
    'section_personal_notes' => 'Noter',

    // archived contacts
    'list_link_to_active_contacts' => 'Du ser arkiverede kontakter. Se i stedet <a href=":url">listen over aktive kontakter</a>.',
    'list_link_to_archived_contacts' => 'Liste af arkiverede kontakter',

    // Header
    'me' => 'Dette er dig',
    'edit_contact_information' => 'Redigér kontaktoplysninger',
    'contact_archive' => 'Arkivér kontakt',
    'contact_unarchive' => 'Gendan kontakt fra arkiv',
    'contact_archive_help' => 'Archived contacts are not be shown on the contact list, but still appear in search results.',
    'call_button' => 'Log et opkald',
    'set_favorite' => 'Favoritkontakter er placeret øverst på kontaktlisten',

    // Stay in touch
    'stay_in_touch' => 'Hold kontakten',
    'stay_in_touch_frequency' => 'Hold kontakten hver dag|Hold kontakten hver {count}. dag',
    'stay_in_touch_invalid' => 'Frekvensen skal være et tal større end 0.',
    'stay_in_touch_premium' => 'Du skal opgradere din konto for at gøre brug af denne funktion',
    'stay_in_touch_modal_title' => 'Hold kontakten',
    'stay_in_touch_modal_desc' => 'Vi kan påminde dig via e-mail for at holde kontakten med {firstname} med jævne mellemrum.',
    'stay_in_touch_modal_label' => 'Send me an email every… {count} day|Send me an email every… {count} days',

    // Calls
    'modal_call_title' => 'Log et opkald',
    'modal_call_comment' => 'Hvad snakkede I om? (valgfrit)',
    'modal_call_exact_date' => 'Telefonopkaldet skete den',
    'modal_call_who_called' => 'Hvem ringede?',
    'modal_call_emotion' => 'Vil du logge hvordan du følte under dette opkald? (valgfrit)',
    'calls_add_success' => 'Opkaldet er blevet gemt.',
    'call_delete_confirmation' => 'Er du sikker på, at du vil slette dette opkald?',
    'call_delete_success' => 'Opkaldet er blevet slettet',
    'call_title' => 'Opkald',
    'call_empty_comment' => 'Ingen detaljer',
    'call_blank_title' => 'Hold styr på de telefonopkald, du har foretaget med {name}',
    'call_blank_desc' => 'Du ringede til {name}',
    'call_you_called' => 'Du ringede',
    'call_he_called' => '{name} ringede',
    'call_emotions' => 'Følelser:',

    // Conversation
    'conversation_blank' => 'Record conversations you have with :name on social media, SMS…',
    'conversation_delete_link' => 'Slet samtalen',
    'conversation_edit_title' => 'Redigér samtalen',
    'conversation_edit_delete' => 'Er du sikker på, at du ønsker at slette denne samtale? Denne handling er permanent.',
    'conversation_add_success' => 'Samtalen er blevet tilføjet.',
    'conversation_edit_success' => 'Samtalen er blevet opdateret.',
    'conversation_delete_success' => 'Samtalen er blevet slettet.',
    'conversation_add_title' => 'Opret en ny samtale',
    'conversation_add_when' => 'Hvornår havde du samtalen?',
    'conversation_add_who_wrote' => 'Who sent this message?',
    'conversation_add_how' => 'Hvordan kommunikerede du?',
    'conversation_add_you' => 'Dig',
    'conversation_add_content' => 'Skriv ned hvad der blev sagt',
    'conversation_add_what_was_said' => 'Hvad sagde du?',
    'conversation_add_another' => 'Tilføj en anden besked',
    'conversation_add_error' => 'Du skal angive mindst én besked.',
    'conversation_list_table_messages' => 'Beskeder',
    'conversation_list_table_content' => 'Delvis indhold (sidste meddelelse)',
    'conversation_list_title' => 'Samtaler',
    'conversation_list_cta' => 'Log samtalen',

    // age - birthday
    'birthdate_not_set' => 'Birth date is not set',
    'age_approximate_in_years' => 'omkring :age år',
    'age_exact_in_years' => ':age år',
    'age_exact_birthdate' => 'født :date',

    // Last called
    'last_called' => 'Sidste opkald: :date',
    'last_called_empty' => 'Sidste opkald: ukendt',
    'last_activity_date' => 'Sidste aktivitet sammen: :date',
    'last_activity_date_empty' => 'Sidste aktivitet sammen: ukendt',

    // additional information
    'information_edit_success' => 'Profilen er blevet opdateret',
    'information_edit_title' => 'Redigér :name’s personlige oplysninger',
    'information_edit_max_size' => 'Maks. :size Kb.',
    'information_edit_max_size2' => 'Maks. {size} Kb.',
    'information_edit_firstname' => 'Fornavn',
    'information_edit_lastname' => 'Efternavn (valgfrit)',
    'information_edit_description' => 'Beskrivelse (valgfrit)',
    'information_edit_description_help' => 'Bruges på kontaktlisten til at tilføje noget sammenhæng, hvis det er nødvendigt.',
    'information_edit_unknown' => 'Jeg kender ikke denne person’s alder',
    'information_edit_probably' => 'This person is probably…',
    'information_edit_not_year' => 'I know the day and month of this person’s birthday, but not the year…',
    'information_edit_exact' => 'I know the exact birthdate of this person…',
    'information_edit_birthdate_label' => 'Fødselsdag',
    'information_no_work_defined' => 'Ingen arbejdsinformation defineret',
    'information_work_at' => 'hos :company',
    'work_add_cta' => 'Opdatér arbejdsoplysninger',
    'work_edit_success' => 'Work information updated',
    'work_edit_title' => 'Opdater :names\' jobinformation',
    'work_edit_job' => 'Jobtitel (valgfri)',
    'work_edit_company' => 'Virksomhed (valgfri)',
    'work_information' => 'Arbejdsinformation',

    // food preferences
    'food_preferences_add_success' => 'Mad preferencer er gemt',
    'food_preferences_edit_description' => 'Måske :firstname eller nogen i :family familie har en allergi. Eller kan ikke lide en bestemt flaske vin. Angiv dem her, så du kan huske det næste gang du inviterer dem til middag',
    'food_preferences_edit_description_no_last_name' => 'Måske :firstname har en allergi. Eller kan ikke lide en bestemt flaske vin. Angiv dem her, så du kan huske det næste gang du inviterer dem til middag',
    'food_preferences_edit_title' => 'Indikér mad preferencer',
    'food_preferences_edit_cta' => 'Gem mad preferencer',
    'food_preferences_title' => 'Mad preferencer',
    'food_preferences_cta' => 'Tilføj mad preferencer',

    // reminders
    'reminders_blank_title' => 'Er der noget, du ønsker at blive mindet om, om :name?',
    'reminders_blank_add_activity' => 'Tilføj en påmindelse',
    'reminders_add_title' => 'Hvad ønsker du at blive mindet om, om :name?',
    'reminders_add_description' => 'Please remind me to…',
    'reminders_add_next_time' => 'Hvornår er den næste gang, du ønsket at blive mindet om dette?',
    'reminders_add_once' => 'Påmind mig om dette en gang',
    'reminders_add_recurrent' => 'Påmind mig om dette hver',
    'reminders_add_starting_from' => 'fra den dato, der er angivet ovenfor',
    'reminders_add_cta' => 'Tilføj påmindelse',
    'reminders_edit_update_cta' => 'Opdatér påmindelse',
    'reminders_add_error_custom_text' => 'Du skal angive en tekst til denne påmindelse',
    'reminders_create_success' => 'Påmindelsen er blevet tilføjet',
    'reminders_delete_success' => 'Påmindelsen er blevet slettet',
    'reminders_update_success' => 'Påmindelsen er blevet opdateret',
    'reminders_add_optional_comment' => 'Valgfri kommentar',

    'reminder_frequency_day' => 'hver dag|hver :number. dag',
    'reminder_frequency_week' => 'hver uge|hver :number. uge',
    'reminder_frequency_month' => 'hver måned|hver :number. måned',
    'reminder_frequency_year' => 'hvert år|hvert :number. år',
    'reminder_frequency_one_time' => 'den :date',
    'reminders_delete_confirmation' => 'Er du sikker på, at du vil slette denne påmindelse?',
    'reminders_delete_cta' => 'Slet',
    'reminders_next_expected_date' => 'den',
    'reminders_cta' => 'Tilføj en påmindelse',
    'reminders_description' => 'Vi vil sende en e-mail for hver enkelt af påmindelserne nedenfor. Påmindelser sendes hver morgen dagen begivenheder vil ske. Påmindelser tilføjet automatisk for fødselsdatoer kan ikke slettes. Hvis du ønsker at ændre disse datoer, skal du redigere fødselsdatoen for kontakterne.',
    'reminders_one_time' => 'En gang',
    'reminders_type_week' => 'uge',
    'reminders_type_month' => 'måned',
    'reminders_type_year' => 'år',
    'reminders_birthday' => 'Fødselsdag for :name',
    'reminders_free_plan_warning' => 'Du er på den gratis plan. Ingen e-mails sendes på denne plan. For at modtage dine påmindelser via e-mail, skal du opgradere din konto.',

    // relationships
    'relationship_form_add' => 'Tilføj et nyt forhold',
    'relationship_form_edit' => 'Tilføj et eksisterende forhold',
    'relationship_form_is_with' => 'This person is…',
    'relationship_form_is_with_name' => ':name is…',
    'relationship_form_add_choice' => 'Hvem er forholdet med?',
    'relationship_form_create_contact' => 'Tilføj en ny person',
    'relationship_form_associate_contact' => 'En eksisterende kontakt',
    'relationship_form_associate_dropdown' => 'Søg efter en eksisterende kontakt og vælg nedenfor',
    'relationship_form_associate_dropdown_placeholder' => 'Søg efter en eksisterende kontakt',
    'relationship_form_also_create_contact' => 'Opret en kontakt for denne person.',
    'relationship_form_add_description' => 'Dette vil lade dig behandle denne person som enhver anden kontakt.',
    'relationship_form_add_no_existing_contact' => 'Du har ikke nogen kontakter, der kan være relateret til :name i øjeblikket.',
    'relationship_delete_confirmation' => 'Er du sikker på, at du ønsker at slette dette forhold? Denne handling er permanent.',
    'relationship_unlink_confirmation' => 'Er du sikker på, at du vil slette dette forhold? Personen bliver ikke slettet – kun forholdet mellem de to.',
    'relationship_form_add_success' => 'Forholdet er blevet slettet.',
    'relationship_form_deletion_success' => 'Forholdet er blevet slettet.',

    // tasks
    'tasks_title' => 'Opgaver',
    'tasks_blank_title' => 'Du har ingen opgaver endnu.',
    'tasks_form_title' => 'Titel',
    'tasks_form_description' => 'Beskrivelse (valgfrit)',
    'tasks_add_task' => 'Tilføj en opgave',
    'tasks_delete_success' => 'Opgaven er blevet slettet',
    'tasks_complete_success' => 'Opgaven har fået ændret status',

    // activities
    'activity_title' => 'Aktiviteter',
    'activity_type_category_simple_activities' => 'Simple aktiviteter',
    'activity_type_category_sport' => 'Sport',
    'activity_type_category_food' => 'Mad',
    'activity_type_category_cultural_activities' => 'Kulturelle aktiviteter',
    'activity_type_just_hung_out' => 'hang bare ud',
    'activity_type_watched_movie_at_home' => 'så en film hjemme',
    'activity_type_talked_at_home' => 'snakkede bare hjemme',
    'activity_type_did_sport_activities_together' => 'spillede en sport sammen',
    'activity_type_ate_at_his_place' => 'spiste hos dem',
    'activity_type_went_bar' => 'gik på bar',
    'activity_type_ate_at_home' => 'spiste hjemme',
    'activity_type_picnicked' => 'picnicked',
    'activity_type_ate_restaurant' => 'spiste på restaurent',
    'activity_type_went_theater' => 'gik i teateret',
    'activity_type_went_concert' => 'gik til koncert',
    'activity_type_went_play' => 'gik til en forestilling',
    'activity_type_went_museum' => 'gik på museum',
    'activities_add_activity' => 'Tilføj aktivitet',
    'activities_add_more_details' => 'Tilføj flere detaljer',
    'activities_add_emotions' => 'Tilføj følelser',
    'activities_add_category' => 'Angiv en kategori',
    'activities_add_participants_cta' => 'Tilføj deltagere',
    'activities_item_information' => ':Acitivity. Skete den :date',
    'activities_add_title' => 'Hvad lavede du med {name}?',
    'activities_summary' => 'Beskriv hvad I gjorde',
    'activities_add_pick_activity' => '(Valgfrit) Vil du kategorisere denne aktivitet? Du behøver ikke, men det vil give dig statistik senere',
    'activities_add_date_occured' => 'The activity happened on…',
    'activities_add_participants' => 'Hvem, udover {name}, deltog i denne aktivitet? (valgfrit)',
    'activities_add_emotions_title' => 'Vil du logge hvordan du følte dig under denne aktivitet? (valgfrit)',
    'activities_blank_title' => 'Hold styr på, hvad du har lavet med {name} i fortiden, og hvad I har talt om',
    'activities_blank_add_activity' => 'Tilføj en aktivitet',
    'activities_add_success' => 'Aktiviteten er blevet tilføjet',
    'activities_add_error' => 'Fejl ved tilføjelse af aktiviteten',
    'activities_update_success' => 'Aktiviteten er blevet opdateret',
    'activities_delete_success' => 'Aktiviteten er blevet slettet',
    'activities_who_was_involved' => 'Hvem var med?',
    'activities_activity' => 'Aktivitetskategori',
    'activities_view_activities_report' => 'Vis aktivitetsoversigt',
    'activities_profile_title' => 'Aktivitetsrapport mellem :name og dig',
    'activities_profile_subtitle' => 'Du har logget :total_activities aktivitet med :name i alt og :activities_last_twelve_months i de sidste 12 måneder indtil nu.|Du har logget :total_activities aktiviteter med :name i alt og :activities_last_twelve_months i de sidste 12 måneder indtil nu.',
    'activities_profile_year_summary_activity_types' => 'Her er en opdeling af den type aktiviteter, I har lavet sammen i :year',
    'activities_profile_year_summary' => 'Her er hvad I to har lavet i :year',
    'activities_profile_number_occurences' => ':value aktivitet|:value aktiviteter',
    'activities_list_participants' => 'Deltagere:',
    'activities_list_emotions' => 'Følelser følt:',
    'activities_list_date' => 'Skete den',
    'activities_list_category' => 'Kategori:',

    // notes
    'notes_create_success' => 'Noten er blevet oprettet',
    'notes_update_success' => 'Noten er blevet gemt',
    'notes_delete_success' => 'Noten er blevet slettet',
    'notes_add_cta' => 'Tilføj note',
    'notes_favorite' => 'Tilføj/Fjern fra favoritter',
    'notes_delete_title' => 'Slet note',
    'notes_delete_confirmation' => 'Er du sikker på, at du ønsker at slette denne note? Denne handling er permanent',

    // gifts
    'gifts_title' => 'Gaver',
    'gifts_add_success' => 'Gaven er blevet tilføjet',
    'gifts_delete_success' => 'Gaven er blevet slettet',
    'gifts_delete_confirmation' => 'Er du sikker på at du vil slette denne gave?',
    'gifts_add_gift' => 'Tilføj en gave',
    'gifts_link' => 'Link',
    'gifts_for' => 'Til: {name}',
    'gifts_delete_cta' => 'Slet',
    'gifts_add_title' => 'Gavestyring for :name',
    'gifts_add_gift_idea' => 'Gave idé',
    'gifts_add_gift_already_offered' => 'Gave givet',
    'gifts_add_gift_received' => 'Gave modtaget',
    'gifts_add_gift_title' => 'Hvad er gaven?',
    'gifts_add_gift_name' => 'Gavenavn',
    'gifts_add_link' => 'Link til web side (valgfri)',
    'gifts_add_value' => 'Værdi (valgfri)',
    'gifts_add_comment' => 'Kommentar (valgfri)',
    'gifts_add_recipient' => 'Modtager (valgfrit)',
    'gifts_add_recipient_field' => 'Modtager',
    'gifts_add_photo' => 'Billede (valgfrit)',
    'gifts_add_photo_title' => 'Tilføj et billede til denne gave',
    'gifts_add_someone' => 'Denne gave er til nogen bestemt i {name}s familie',
    'gifts_delete_title' => 'Slet en gave',
    'gifts_ideas' => 'Gave idéer',
    'gifts_offered' => 'Gaver givet',
    'gifts_offered_as_an_idea' => 'Markér som idé',
    'gifts_received' => 'Gave modtaget',
    'gifts_view_comment' => 'Se kommentar',
    'gifts_mark_offered' => 'Marker som givet',
    'gifts_update_success' => 'Gaven er blevet opdateret',
    'gifts_add_date' => 'Date (optional)',

    // debts
    'debt_delete_confirmation' => 'Er du sikker på, at du vil slette denne gæld?',
    'debt_delete_success' => 'Gælden er blevet slettet',
    'debt_add_success' => 'Gælden er blevet tilføjet',
    'debt_title' => 'Gæld',
    'debt_add_cta' => 'Tilføj gæld',
    'debt_you_owe' => 'Du skylder :amount',
    'debt_they_owe' => ':name skylder dig :amount',
    'debt_add_title' => 'Gældstyring',
    'debt_add_you_owe' => 'Du skylder :name',
    'debt_add_they_owe' => ':name skylder dig',
    'debt_add_amount' => 'summen af',
    'debt_add_reason' => 'af følgende årsag (valgfri)',
    'debt_add_add_cta' => 'Tilføj gæld',
    'debt_edit_update_cta' => 'Opdatér gæld',
    'debt_edit_success' => 'Gælden er blevet opdateret',
    'debts_blank_title' => 'Administrer gæld du skylder :name eller :name skylder dig',

    // tags
    'tag_edit' => 'Redigér tag',
    'tag_add' => 'Tilføj tags',
    'tag_add_search' => 'Tilføj eller søg tags',
    'tag_no_tags' => 'Ingen tags endnu',

    // Introductions
    'introductions_sidebar_title' => 'Hvordan I mødtes',
    'introductions_blank_cta' => 'Beskriv hvordan du mødte :name',
    'introductions_title_edit' => 'Hvordan mødte du :name?',
    'introductions_additional_info' => 'Beskriv hvordan og hvor I mødtes',
    'introductions_edit_met_through' => 'Blev du introduceret til denne person af en anden?',
    'introductions_no_met_through' => 'Ingen',
    'introductions_first_met_date' => 'Dag I mødtes',
    'introductions_no_first_met_date' => 'Jeg kender ikke den dato, vi mødte',
    'introductions_first_met_date_known' => 'Dette er den dato, vi mødtes',
    'introductions_add_reminder' => 'Tilføj en påmindelse for at fejre dette møde på årsdagen denne begivenhed fandt sted',
    'introductions_update_success' => 'Du har opdateret oplysningerne om, hvordan du har mødt denne person',
    'introductions_met_through' => 'Mødtes gennem <a href=":url">:name</a>',
    'introductions_met_date' => 'Mødtes den :date',
    'introductions_reminder_title' => 'Årsdag for første gang i mødtes',

    // Deceased
    'deceased_reminder_title' => 'Dødsdag for :name',
    'deceased_mark_person_deceased' => 'Markér denne person som afdød',
    'deceased_know_date' => 'Jeg kender dagen, hvor denne person døde',
    'deceased_add_reminder' => 'Tilføj en påmindelse for denne dag',
    'deceased_label' => 'Afdød',
    'deceased_date_label' => 'Afdød dato',
    'deceased_label_with_date' => 'Døde den :date',
    'deceased_age' => 'Alder ved døden',

    // Contact information
    'contact_info_title' => 'Kontaktoplysninger',
    'contact_info_form_content' => 'Indhold',
    'contact_info_form_contact_type' => 'Kontaktype',
    'contact_info_form_personalize' => 'Tilpas',
    'contact_info_address' => 'Bor i',

    // Addresses
    'contact_address_title' => 'Adresser',
    'contact_address_form_name' => 'Etiket (valgfrit)',
    'contact_address_form_street' => 'Gadenavn (valgfri)',
    'contact_address_form_city' => 'By (valgfri)',
    'contact_address_form_province' => 'Provins (valgfrit)',
    'contact_address_form_postal_code' => 'Postnummer (valgfri)',
    'contact_address_form_country' => 'Land (valgfri)',
    'contact_address_form_latitude' => 'Breddegrad (kun tal) (valgfrit)',
    'contact_address_form_longitude' => 'Længdegrad (kun tal) (valgfrit)',

    // Pets
    'pets_kind' => 'Kæledyr',
    'pets_name' => 'Navn (valgfrit)',
    'pets_create_success' => 'Kæledyret er blevet tilføjet',
    'pets_update_success' => 'Kæledyret er blevet opdateret',
    'pets_delete_success' => 'Kæledyret er blevet slettet',
    'pets_title' => 'Kæledyr',
    'pets_reptile' => 'Krybdyr',
    'pets_bird' => 'Fugl',
    'pets_cat' => 'Kat',
    'pets_dog' => 'Hund',
    'pets_fish' => 'Fisk',
    'pets_hamster' => 'Hamster',
    'pets_horse' => 'Hest',
    'pets_rabbit' => 'Kanin',
    'pets_rat' => 'Rotte',
    'pets_small_animal' => 'Lille dyr',
    'pets_other' => 'Andet',

    // life events
    'life_event_list_tab_life_events' => 'Livsbegivenheder',
    'life_event_list_tab_other' => 'Notes, reminders, …',
    'life_event_list_title' => 'Livsbegivenheder',
    'life_event_blank' => 'Log hvad der sker i livet for {name} til din fremtidige reference.',
    'life_event_list_cta' => 'Tilføj livsbegivenhed',
    'life_event_create_category' => 'Alle kategorier',
    'life_event_create_life_event' => 'Tilføj livsbegivenhed',
    'life_event_create_default_title' => 'Titel (valgfrit)',
    'life_event_create_default_story' => 'Historie (valgfrit)',
    'life_event_create_date' => 'Du behøver ikke at angive en måned eller en dag - kun året er obligatorisk.',
    'life_event_create_default_description' => 'Tilføj information om hvad du ved',
    'life_event_create_add_yearly_reminder' => 'Tilføj en årlig påmindelse for denne begivenhed',
    'life_event_create_success' => 'Livsbegivenheden er blevet tilføjet',
    'life_event_delete_title' => 'Slet en livsbegivenhed',
    'life_event_delete_description' => 'Er du sikker på, at du vil slette denne livsbegivenhed? Sletning er permanent.',
    'life_event_delete_success' => 'Livsbegivenheden er blevet slettet',
    'life_event_date_it_happened' => 'Datoen hvor det skete',
    'life_event_category_work_education' => 'Arbejde & uddannelse',
    'life_event_category_family_relationships' => 'Familie & relationer',
    'life_event_category_home_living' => 'Hjem & liv',
    'life_event_category_health_wellness' => 'Sundhed & velvære',
    'life_event_category_travel_experiences' => 'Rejser & oplevelser',
    'life_event_sentence_new_job' => 'Startede på nyt arbejde',
    'life_event_sentence_retirement' => 'Pensioneret',
    'life_event_sentence_new_school' => 'Startede i skole',
    'life_event_sentence_study_abroad' => 'Studerede i udlandet',
    'life_event_sentence_volunteer_work' => 'Begyndt frivilligt arbejde',
    'life_event_sentence_published_book_or_paper' => 'Udgav en artikel',
    'life_event_sentence_military_service' => 'Startede i militæret',
    'life_event_sentence_new_relationship' => 'Startede et forhold',
    'life_event_sentence_engagement' => 'Blev forlovet',
    'life_event_sentence_marriage' => 'Blev gift',
    'life_event_sentence_anniversary' => 'Årsdag',
    'life_event_sentence_expecting_a_baby' => 'Forventer et barn',
    'life_event_sentence_new_child' => 'Fik et barn',
    'life_event_sentence_new_family_member' => 'Fik et familie medlem',
    'life_event_sentence_new_pet' => 'Fik et kæledyr',
    'life_event_sentence_end_of_relationship' => 'Afsluttede et forhold',
    'life_event_sentence_loss_of_a_loved_one' => 'Mistede en elsket',
    'life_event_sentence_moved' => 'Flyttede',
    'life_event_sentence_bought_a_home' => 'Købte et hjem',
    'life_event_sentence_home_improvement' => 'Lavede en forbedring af hjemmet',
    'life_event_sentence_holidays' => 'Tog på ferie',
    'life_event_sentence_new_vehicle' => 'Fik et nyt køretøj',
    'life_event_sentence_new_roommate' => 'Fik en roommate',
    'life_event_sentence_overcame_an_illness' => 'Overvandt en sygdom',
    'life_event_sentence_quit_a_habit' => 'Stoppede en dårlig vane',
    'life_event_sentence_new_eating_habits' => 'Fik nye spisevaner',
    'life_event_sentence_weight_loss' => 'Tabte sig',
    'life_event_sentence_wear_glass_or_contact' => 'Begynde at gå med briller eller linser',
    'life_event_sentence_broken_bone' => 'Brækkede en knogle',
    'life_event_sentence_removed_braces' => 'Fjernede bøjler',
    'life_event_sentence_surgery' => 'Undergik en operation',
    'life_event_sentence_dentist' => 'Gik til tandlægen',
    'life_event_sentence_new_sport' => 'Startede til sport',
    'life_event_sentence_new_hobby' => 'Startede en hobby',
    'life_event_sentence_new_instrument' => 'Lærte at spille et instrument',
    'life_event_sentence_new_language' => 'Lærte et ny sprog',
    'life_event_sentence_tattoo_or_piercing' => 'Fik en tatovering eller piercing',
    'life_event_sentence_new_license' => 'Fik et kørekort',
    'life_event_sentence_travel' => 'Rejste',
    'life_event_sentence_achievement_or_award' => 'Got an achievement or award',
    'life_event_sentence_changed_beliefs' => 'Skiftede tro',
    'life_event_sentence_first_word' => 'Snakkede for første gang',
    'life_event_sentence_first_kiss' => 'Kyssede for første gang',

    // documents
    'document_list_title' => 'Dokumenter',
    'document_list_cta' => 'Overfør dokument',
    'document_list_blank_desc' => 'Her kan du opbevare dokumenter relateret til denne person.',
    'document_upload_zone_cta' => 'Overfør en fil',
    'document_upload_zone_progress' => 'Uploading the document…',
    'document_upload_zone_error' => 'Der opstod en fejl under overførslen af dokumentet. Prøv venligst igen.',

    // Photos
    'photo_title' => 'Billeder',
    'photo_list_title' => 'Relaterede billeder',
    'photo_list_cta' => 'Upload billede',
    'photo_list_blank_desc' => 'Du kan gemme billeder om denne kontakt. Upload et nu!',
    'photo_upload_zone_cta' => 'Tilføj et billede',
    'photo_current_profile_pic' => 'Nuværende profilbillede',
    'photo_make_profile_pic' => 'Brug som profilbillede',
    'photo_delete' => 'Slet billede',
    'photo_next' => 'Next photo ❯',
    'photo_previous' => '❮ Previous photo',

    // Avatars
    'avatar_change_title' => 'Skift profilbillede',
    'avatar_question' => 'Hvilket profilbillede ønsker du at bruge?',
    'avatar_default_avatar' => 'Standard profilbilledet',
    'avatar_adorable_avatar' => 'Det bedårende profilbillede',
    'avatar_gravatar' => 'Det Gravatar forbundet med e-mailadressen for denne person. <a href="https://gravatar.com/">Gravatar</a> er et globalt system der gør det muligt for brugere at tilknytte e-mailadresser med billeder.',
    'avatar_current' => 'Behold det nuværende profilbillede',
    'avatar_photo' => 'Fra et billede, du uploader',
    'avatar_crop_new_avatar_photo' => 'Beskær nyt profilbillede',

    // emotions
    'emotion_this_made_me_feel' => 'Dette fik dig til at føle…',

    // logs
    'auditlogs_link' => 'Historik',
    'auditlogs_title' => 'Alt, hvad der skete :name',
    'auditlogs_breadcrumb' => 'Historik',
    'auditlogs_author' => 'Efter :name på :date',

    // contact field label
    'contact_field_label_home' => 'Hjem',
    'contact_field_label_work' => 'Arbejde',
    'contact_field_label_cell' => 'Mobil',
    'contact_field_label_fax' => 'Fax',
    'contact_field_label_pager' => 'Personsøger',
    'contact_field_label_main' => 'Primær',
    'contact_field_label_other' => 'Andet',
    'contact_field_label_personal' => 'Personlig',
];
