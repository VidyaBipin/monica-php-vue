<?php

/**
 * ⚠️ Editing not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/master/docs/contribute/translate.md for translations.
 */

return [

    //index
    'people_not_found' => 'Kontakt nenalezen',
    'people_list_number_kids' => '1 dítě|:count děti',
    'people_list_last_updated' => 'Naposledy konzultováno:',
    'people_list_number_reminders' => '1 připomínka|:count připomínek',
    'people_list_blank_title' => 'Zatím jste do svého účtu nikoho nepřidali',
    'people_list_blank_cta' => 'Někoho přidat',
    'people_list_sort' => 'Řazení',
    'people_list_stats' => '1 kontakt|:count kontaktů',
    'people_list_firstnameAZ' => 'Řadit podle jména A → Z',
    'people_list_firstnameZA' => 'Řadit podle jména Z → A',
    'people_list_lastnameAZ' => 'Řadit podle příjmení A → Z',
    'people_list_lastnameZA' => 'Řadit podle příjmení Z → A',
    'people_list_lastactivitydateNewtoOld' => 'Seřadit podle posledního data aktivity od nejnovějšího k nejstaršímu',
    'people_list_lastactivitydateOldtoNew' => 'Seřadit podle posledního data aktivity od nejnovějšího k nejstaršímu',
    'people_list_filter_tag' => 'Zobrazeny všechny kontakty s tagem',
    'people_list_clear_filter' => 'Vyčistit filtr',
    'people_list_contacts_per_tags' => '1 kontakt|:count kontaktů',
    'people_list_show_dead' => 'Zobrazit zemřelé osoby (:count)',
    'people_list_hide_dead' => 'Skrýt zemřelé osoby (:count)',
    'people_search' => 'Prohledat kontakty...',
    'people_search_no_results' => 'Nenalezen žádný výsledek',
    'people_search_next' => 'Další',
    'people_search_prev' => 'Předchozí',
    'people_search_rows_per_page' => 'Řádků na stránku',
    'people_search_of' => 'z',
    'people_search_page' => 'Stránka',
    'people_search_all' => 'Vše ',
    'people_add_new' => 'Přidat novou osobu',
    'people_list_account_usage' => 'Využití vašeho účtu: :current/:limit kontaktů',
    'people_list_account_upgrade_title' => 'Upgradujte svůj účet a odemkněte jej na jeho plný potenciál.',
    'people_list_account_upgrade_cta' => 'Upgradovat nyní',
    'people_list_untagged' => 'Zobrazit neoznačené kontakty',
    'people_list_filter_untag' => 'Zobrazení všech neoznačených kontaktů',

    // people add
    'people_add_title' => 'Přidat novou osobu',
    'people_add_missing' => 'No Person Found Add New One Now',
    'people_add_firstname' => 'Jméno',
    'people_add_middlename' => 'Prostřední jméno (volitelné)',
    'people_add_lastname' => 'Příjmení (volitelné)',
    'people_add_nickname' => 'Přezdívka (volitelné)',
    'people_add_cta' => 'Přidat tuto osobu',
    'people_save_and_add_another_cta' => 'Odeslat a přidat někoho ďaľšího',
    'people_add_success' => ':name has been successfully created',
    'people_add_gender' => 'Pohlaví',
    'people_delete_success' => 'Kontakt byl smazán',
    'people_delete_message' => 'Delete contact',
    'people_delete_confirmation' => 'Opravdu chcete smazat tento kontakt? Smazání je trvalé.',
    'people_add_birthday_reminder' => 'Popřát k narozeninám :name',
    'people_add_birthday_reminder_deceased' => 'On this date, :name, would have celebrated his birthday',
    'people_add_import' => 'Chcete <a href=":url">importovat své kontakty</a>?',
    'people_edit_email_error' => 'There is already a contact in your account with this email address. Please choose another one.',
    'people_export' => 'Export as vCard',
    'people_add_reminder_for_birthday' => 'Create an annual reminder for the birthday',

    // show
    'section_contact_information' => 'Contact information',
    'section_personal_activities' => 'Aktivity',
    'section_personal_reminders' => 'Upozornění',
    'section_personal_tasks' => 'Úkoly',
    'section_personal_gifts' => 'Dárky',
    'section_personal_notes' => 'Notes',

    // archived contacts
    'list_link_to_active_contacts' => 'You are viewing archived contacts. See the <a href=":url">list of active contacts</a> instead.',
    'list_link_to_archived_contacts' => 'List of archived contacts',

    // Header
    'me' => 'This is you',
    'edit_contact_information' => 'Upravit informace kontaktu',
    'contact_archive' => 'Archive contact',
    'contact_unarchive' => 'Unarchive contact',
    'contact_archive_help' => 'Archived contacts will not be shown on the contact list, but still appear in search results.',
    'call_button' => 'Zaznamenat telefonát',
    'set_favorite' => 'Favorite contacts are placed at the top of the contact list',

    // Stay in touch
    'stay_in_touch' => 'Stay in touch',
    'stay_in_touch_frequency' => 'Stay in touch every day|Stay in touch every {count} days',
    'stay_in_touch_invalid' => 'The frequency must be a number greater than 0.',
    'stay_in_touch_premium' => 'You need to upgrade your account to make use of this feature',
    'stay_in_touch_modal_title' => 'Stay in touch',
    'stay_in_touch_modal_desc' => 'We can remind you by email to keep in touch with {firstname} at a regular interval.',
    'stay_in_touch_modal_label' => 'Send me an email every... {count} day|Send me an email every... {count} days',

    // Calls
    'modal_call_title' => 'Zaznamenat telefonát',
    'modal_call_comment' => 'O čem byla řeč? (volitelné)',
    'modal_call_exact_date' => 'Telefonovali jsme',
    'modal_call_who_called' => 'Who called?',
    'modal_call_emotion' => 'Do you want to log how you felt during this call? (optional)',
    'calls_add_success' => 'Údaje o telefonátu byly uloženy.',
    'call_delete_confirmation' => 'Opravdu chcete údaje o telefonátu vymazat?',
    'call_delete_success' => 'Údaje o telefonátu byly úspěšně smazány',
    'call_title' => 'Telefonáty',
    'call_empty_comment' => 'Bez detailů',
    'call_blank_title' => 'Keep track of the phone calls you’ve done with {name}',
    'call_blank_desc' => 'You called {name}',
    'call_you_called' => 'You called',
    'call_he_called' => '{name} called',
    'call_emotions' => 'Emotions:',

    // Conversation
    'conversation_blank' => 'Record conversations you have with :name on social media, SMS, ...',
    'conversation_delete_link' => 'Delete the conversation',
    'conversation_edit_title' => 'Edit conversation',
    'conversation_edit_delete' => 'Are you sure you want to delete this conversation? Deletion is permanent.',
    'conversation_add_success' => 'The conversation has been successfully added.',
    'conversation_edit_success' => 'The conversation has been successfully updated.',
    'conversation_delete_success' => 'The conversation has been successfully deleted.',
    'conversation_add_title' => 'Record a new conversation',
    'conversation_add_when' => 'When did you have this conversation?',
    'conversation_add_who_wrote' => 'Who said this message?',
    'conversation_add_how' => 'How did you communicate?',
    'conversation_add_you' => 'You',
    'conversation_add_content' => 'Write down what was said',
    'conversation_add_what_was_said' => 'What did you say?',
    'conversation_add_another' => 'Add another message',
    'conversation_add_error' => 'You must add at least one message.',
    'conversation_list_table_messages' => 'Messages',
    'conversation_list_table_content' => 'Partial content (last message)',
    'conversation_list_title' => 'Conversations',
    'conversation_list_cta' => 'Log conversation',

    // age - birthday
    'birthdate_not_set' => 'Datum narození není zadáno',
    'age_approximate_in_years' => 'věk okolo :age',
    'age_exact_in_years' => ':age let',
    'age_exact_birthdate' => 'narozeniny :date',

    // Last called
    'last_called' => 'Last called: :date',
    'last_called_empty' => 'Last called: unknown',
    'last_activity_date' => 'Last activity together: :date',
    'last_activity_date_empty' => 'Last activity together: unknown',

    // additional information
    'information_edit_success' => 'Profil byl úspěšně aktualizován',
    'information_edit_title' => 'Upravit osobní informace o :name',
    'information_edit_max_size' => 'Max :size Kb.',
    'information_edit_max_size2' => 'Max {size} Kb.',
    'information_edit_firstname' => 'Jméno',
    'information_edit_lastname' => 'Příjmení (volitelné)',
    'information_edit_description' => 'Description (Optional)',
    'information_edit_description_help' => 'Used on the contact list to add some context, if necessary.',
    'information_edit_unknown' => 'Neznám věk této osoby',
    'information_edit_probably' => 'Tato osoba je přibližně',
    'information_edit_not_year' => 'I know the day and month of the birthdate of this person, but not the year…',
    'information_edit_exact' => 'Vím přesné datum narození této osoby, které je',
    'information_edit_birthdate_label' => 'Birthdate',
    'information_no_work_defined' => 'Žádné informace o práci',
    'information_work_at' => 'v :company',
    'work_add_cta' => 'Aktualizovat informace o práci',
    'work_edit_success' => 'Work information updated',
    'work_edit_title' => 'Aktualizovat informace o práci pro :name',
    'work_edit_job' => 'Pracovní pozice (volitelné)',
    'work_edit_company' => 'Společnost (volitelné)',
    'work_information' => 'Work information',

    // food preferences
    'food_preferences_add_success' => 'Informace o oblíbených potravinách uloženy',
    'food_preferences_edit_description' => 'Možná má :firstname nebo někdo z rodiny :family alergii. Nebo nemusí nějaké specifické víno. Poznačte si to zde, abyste si vzpoměli před příštím pozváním na večeři',
    'food_preferences_edit_description_no_last_name' => 'Možná má :firstname alergii. Nebo nemusí nějaké specifické víno. Poznačte si to zde, abyste si vzpoměli před příštím pozváním na večeři',
    'food_preferences_edit_title' => 'Zapsat upřednostňované potraviny',
    'food_preferences_edit_cta' => 'Uložit informace o potravinách',
    'food_preferences_title' => 'Upřednostňované potraviny',
    'food_preferences_cta' => 'Přidat upřednostňované potraviny',

    // reminders
    'reminders_blank_title' => 'Je něco na co chcete být upozorňováni pro osobu :name?',
    'reminders_blank_add_activity' => 'Přidat upozornění',
    'reminders_add_title' => 'Na co chcete být upozorňováni pro osobu :name?',
    'reminders_add_description' => 'Prosím upozornit na...',
    'reminders_add_next_time' => 'Kdy budete chtít být na tuto skutečnost příště upozorněni?',
    'reminders_add_once' => 'Upozornit pouze jedenkrát',
    'reminders_add_recurrent' => 'Upozornit',
    'reminders_add_starting_from' => 'po datu zadaném výše',
    'reminders_add_cta' => 'Přidat upozornění',
    'reminders_edit_update_cta' => 'Update reminder',
    'reminders_add_error_custom_text' => 'Musíte zadat text tohoto upozornění',
    'reminders_create_success' => 'Upozornění bylo úspěšně přidáno',
    'reminders_delete_success' => 'Upozornění bylo úspěšně smazáno',
    'reminders_update_success' => 'The reminder has been updated successfully',
    'reminders_add_optional_comment' => 'Optional comment',

    'reminder_frequency_day' => 'every day|every :number days',
    'reminder_frequency_week' => 'každý týden|každé :number týdny',
    'reminder_frequency_month' => 'každý měsíc|každé :number měsíce',
    'reminder_frequency_year' => 'každý rok|každé :number roky',
    'reminder_frequency_one_time' => ':date',
    'reminders_delete_confirmation' => 'Opravdu chcete smazat toto upozornění?',
    'reminders_delete_cta' => 'Smazat',
    'reminders_next_expected_date' => 'v',
    'reminders_cta' => 'Přidat upozornění',
    'reminders_description' => 'Pro každé upozornění níže bude poslán email. Upozornění jsou rozesílána ráno v den události. Automatická upozornění pro zadaná data narození nelze smazat. Pokud chcete změnit tato data, upravte datum narození kontaktů.',
    'reminders_one_time' => 'Jedenkrát',
    'reminders_type_week' => 'týdně',
    'reminders_type_month' => 'měsíčně',
    'reminders_type_year' => 'ročně',
    'reminders_birthday' => 'Narozeniny má :name',
    'reminders_free_plan_warning' => 'You are on the Free plan. No emails are sent on this plan. To receive your reminders by email, upgrade your account.',

    // relationships
    'relationship_form_add' => 'Add a new relationship',
    'relationship_form_edit' => 'Edit an existing relationship',
    'relationship_form_is_with' => 'This person is...',
    'relationship_form_is_with_name' => ':name is...',
    'relationship_form_add_choice' => 'Who is the relationship with?',
    'relationship_form_create_contact' => 'Add a new person',
    'relationship_form_associate_contact' => 'An existing contact',
    'relationship_form_associate_dropdown' => 'Search and select an existing contact from the dropdown below',
    'relationship_form_associate_dropdown_placeholder' => 'Search and select an existing contact',
    'relationship_form_also_create_contact' => 'Create a Contact entry for this person.',
    'relationship_form_add_description' => 'This will let you treat this person like any other contact.',
    'relationship_form_add_no_existing_contact' => 'You don’t have any contacts who can be related to :name at the moment.',
    'relationship_delete_confirmation' => 'Are you sure you want to delete this relationship? Deletion is permanent.',
    'relationship_unlink_confirmation' => 'Are you sure you want to delete this relationship? This person will not be deleted – only the relationship between the two.',
    'relationship_form_add_success' => 'The relationship has been successfully set.',
    'relationship_form_deletion_success' => 'The relationship has been deleted.',

    // tasks
    'tasks_title' => 'Tasks',
    'tasks_blank_title' => 'You don’t have any tasks yet.',
    'tasks_form_title' => 'Title',
    'tasks_form_description' => 'Description (optional)',
    'tasks_add_task' => 'Přidat úkol',
    'tasks_delete_success' => 'Úkol byl úspěšně smazán',
    'tasks_complete_success' => 'Úkol úspěšně změnil svůj stav',

    // activities
    'activity_title' => 'Aktivity',
    'activity_type_category_simple_activities' => 'Simple activities',
    'activity_type_category_sport' => 'Sport',
    'activity_type_category_food' => 'Food',
    'activity_type_category_cultural_activities' => 'Cultural activities',
    'activity_type_just_hung_out' => 'společný čas',
    'activity_type_watched_movie_at_home' => 'sledování filmu doma',
    'activity_type_talked_at_home' => 'promluvili jsme si doma',
    'activity_type_did_sport_activities_together' => 'played a sport together',
    'activity_type_ate_at_his_place' => 'ate at their place',
    'activity_type_went_bar' => 'návštěva baru',
    'activity_type_ate_at_home' => 'jídlo doma',
    'activity_type_picnicked' => 'picnicked',
    'activity_type_ate_restaurant' => 'jídlo v restauraci',
    'activity_type_went_theater' => 'návštěva divadla',
    'activity_type_went_concert' => 'návštěva koncertu',
    'activity_type_went_play' => 'návštěva zápasu',
    'activity_type_went_museum' => 'návštěva muzea',
    'activities_add_activity' => 'Přidat aktivitu',
    'activities_add_more_details' => 'Add more details',
    'activities_add_emotions' => 'Add emotions',
    'activities_add_category' => 'Indicate a category',
    'activities_add_participants_cta' => 'Add participants',
    'activities_item_information' => ':Activity. Stalo se :date',
    'activities_add_title' => 'What did you do with {name}?',
    'activities_summary' => 'Popište co jste dělali',
    'activities_add_pick_activity' => '(Optional) Would you like to categorize this activity? You don’t have to, but it will give you statistics later on',
    'activities_add_date_occured' => 'The activity happened on...',
    'activities_add_participants' => 'Who, apart from {name}, participated in this activity? (optional)',
    'activities_add_emotions_title' => 'Do you want to log how you felt during this activity? (optional)',
    'activities_blank_title' => 'Keep track of what you’ve done with {name} in the past, and what you’ve talked about',
    'activities_blank_add_activity' => 'Přidat aktivitu',
    'activities_add_success' => 'Aktivita byla úspěšně přidána',
    'activities_add_error' => 'Error when adding the activity',
    'activities_update_success' => 'Aktivita byla úspěšně aktualizována',
    'activities_delete_success' => 'Aktivita byla úspěšně smazána',
    'activities_who_was_involved' => 'Kdo byl zapojen?',
    'activities_activity' => 'Activity Category',
    'activities_view_activities_report' => 'View activities report',
    'activities_profile_title' => 'Activities report between :name and you',
    'activities_profile_subtitle' => 'You’ve logged :total_activities activity with :name in total and :activities_last_twelve_months in the last 12 months so far.|You’ve logged :total_activities activities with :name in total and :activities_last_twelve_months in the last 12 months so far.',
    'activities_profile_year_summary_activity_types' => 'Here is a breakdown of the type of activities you’ve done together in :year',
    'activities_profile_year_summary' => 'Here is what you two have done in :year',
    'activities_profile_number_occurences' => ':value activity|:value activities',
    'activities_list_participants' => 'Participants:',
    'activities_list_emotions' => 'Emotions felt:',
    'activities_list_date' => 'Happened on',
    'activities_list_category' => 'Category:',

    // notes
    'notes_create_success' => 'Poznámka byla úspěšně vytvořena',
    'notes_update_success' => 'Poznámka byla úspěšně uložena',
    'notes_delete_success' => 'Poznámka byla úspěšně smazána',
    'notes_add_cta' => 'Přidat poznámku',
    'notes_favorite' => 'Add/remove from favorites',
    'notes_delete_title' => 'Delete a note',
    'notes_delete_confirmation' => 'Opravdu chcete smazat tuto poznámku? Smazání je trvalé.',

    // gifts
    'gifts_title' => 'Gifts',
    'gifts_add_success' => 'Dárek byl úspěšně přidán',
    'gifts_delete_success' => 'Dárek byl úspěšně smazán',
    'gifts_delete_confirmation' => 'Opravdu chcete smazat tento dárek?',
    'gifts_add_gift' => 'Přidat dárek',
    'gifts_link' => 'Odkaz',
    'gifts_for' => 'For: {name}',
    'gifts_delete_cta' => 'Smazat',
    'gifts_add_title' => 'Správa dárků pro :name',
    'gifts_add_gift_idea' => 'Nápad na dárek',
    'gifts_add_gift_already_offered' => 'Dárek již darován',
    'gifts_add_gift_received' => 'Gift received',
    'gifts_add_gift_title' => 'Co je tento dárek zač?',
    'gifts_add_gift_name' => 'Gift name',
    'gifts_add_link' => 'Odkaz na webovou stránku (volitelné)',
    'gifts_add_value' => 'Hodnota (volitelné)',
    'gifts_add_comment' => 'Komentář (volitelné)',
    'gifts_add_recipient' => 'Recipient (optional)',
    'gifts_add_recipient_field' => 'Recipient',
    'gifts_add_photo' => 'Photo (optional)',
    'gifts_add_photo_title' => 'Add a photo for this gift',
    'gifts_add_someone' => 'This gift is for someone in {name}’s family in particular',
    'gifts_delete_title' => 'Delete a gift',
    'gifts_ideas' => 'Gift ideas',
    'gifts_offered' => 'Darováno',
    'gifts_offered_as_an_idea' => 'Mark as an idea',
    'gifts_received' => 'Gifts received',
    'gifts_view_comment' => 'View comment',
    'gifts_mark_offered' => 'Mark as given',
    'gifts_update_success' => 'The gift has been updated successfully',
    'gifts_add_date' => 'Date (optional)',

    // debts
    'debt_delete_confirmation' => 'Opravdu chcete smazat tento dluh?',
    'debt_delete_success' => 'Dluh byl úspěšně smazán',
    'debt_add_success' => 'Dluh byl úspěšně přidán',
    'debt_title' => 'Dluhů',
    'debt_add_cta' => 'Přidat dluh',
    'debt_you_owe' => 'Dlužím :amount',
    'debt_they_owe' => ':name mi dluží :amount',
    'debt_add_title' => 'Správa dluhů',
    'debt_add_you_owe' => 'Dlužím :name',
    'debt_add_they_owe' => ':name mi dluží',
    'debt_add_amount' => 'celkem',
    'debt_add_reason' => 'z následujícího důvodu (volitelné)',
    'debt_add_add_cta' => 'Přidat dluh',
    'debt_edit_update_cta' => 'Aktualizovat dluh',
    'debt_edit_success' => 'Dluh byl úspěšně aktualizován',
    'debts_blank_title' => 'Spravovat dluh pro :name nebo :name dlužící mně',

    // tags
    'tag_edit' => 'Upravit tag',
    'tag_add' => 'Add tags',
    'tag_add_search' => 'Add or search tags',
    'tag_no_tags' => 'No tags yet',

    // Introductions
    'introductions_sidebar_title' => 'How you met',
    'introductions_blank_cta' => 'Indicate how you met :name',
    'introductions_title_edit' => 'How did you meet :name?',
    'introductions_additional_info' => 'Explain how and where you met',
    'introductions_edit_met_through' => 'Has someone introduced you to this person?',
    'introductions_no_met_through' => 'No one',
    'introductions_first_met_date' => 'Date you met',
    'introductions_no_first_met_date' => 'I don’t know the date we met',
    'introductions_first_met_date_known' => 'This is the date we met',
    'introductions_add_reminder' => 'Add a reminder to celebrate this encounter on the anniversary this event happened',
    'introductions_update_success' => 'You’ve successfully updated the information about how you met this person',
    'introductions_met_through' => 'Met through <a href=":url">:name</a>',
    'introductions_met_date' => 'Met on :date',
    'introductions_reminder_title' => 'Anniversary of the day you first met',

    // Deceased
    'deceased_reminder_title' => 'Anniversary of the death of :name',
    'deceased_mark_person_deceased' => 'Mark this person as deceased',
    'deceased_know_date' => 'I know the date this person died',
    'deceased_add_reminder' => 'Add a reminder for this date',
    'deceased_label' => 'Deceased',
    'deceased_date_label' => 'Deceased date',
    'deceased_label_with_date' => 'Deceased on :date',
    'deceased_age' => 'Age at death',

    // Contact information
    'contact_info_title' => 'Contact information',
    'contact_info_form_content' => 'Content',
    'contact_info_form_contact_type' => 'Contact type',
    'contact_info_form_personalize' => 'Personalize',
    'contact_info_address' => 'Lives in',

    // Addresses
    'contact_address_title' => 'Addresses',
    'contact_address_form_name' => 'Label (optional)',
    'contact_address_form_street' => 'Street (optional)',
    'contact_address_form_city' => 'City (optional)',
    'contact_address_form_province' => 'Province (optional)',
    'contact_address_form_postal_code' => 'Postal code (optional)',
    'contact_address_form_country' => 'Country (optional)',
    'contact_address_form_latitude' => 'Latitude (numbers only) (optional)',
    'contact_address_form_longitude' => 'Longitude (numbers only) (optional)',

    // Pets
    'pets_kind' => 'Kind of pet',
    'pets_name' => 'Name (optional)',
    'pets_create_success' => 'The pet has been successfully added',
    'pets_update_success' => 'The pet has been updated',
    'pets_delete_success' => 'The pet has been deleted',
    'pets_title' => 'Pets',
    'pets_reptile' => 'Reptile',
    'pets_bird' => 'Bird',
    'pets_cat' => 'Cat',
    'pets_dog' => 'Dog',
    'pets_fish' => 'Fish',
    'pets_hamster' => 'Hamster',
    'pets_horse' => 'Horse',
    'pets_rabbit' => 'Rabbit',
    'pets_rat' => 'Rat',
    'pets_small_animal' => 'Small animal',
    'pets_other' => 'Other',

    // life events
    'life_event_list_tab_life_events' => 'Life events',
    'life_event_list_tab_other' => 'Notes, reminders, ...',
    'life_event_list_title' => 'Life events',
    'life_event_blank' => 'Log what happens to the life of {name} for your future reference.',
    'life_event_list_cta' => 'Add life event',
    'life_event_create_category' => 'All categories',
    'life_event_create_life_event' => 'Add life event',
    'life_event_create_default_title' => 'Title (optional)',
    'life_event_create_default_story' => 'Story (optional)',
    'life_event_create_date' => 'You do not need to indicate a month or a day - only the year is mandatory.',
    'life_event_create_default_description' => 'Add information about what you know',
    'life_event_create_add_yearly_reminder' => 'Add a yearly reminder for this event',
    'life_event_create_success' => 'The life event has been added',
    'life_event_delete_title' => 'Delete a life event',
    'life_event_delete_description' => 'Are you sure you want to delete this life event? Deletion is permanent.',
    'life_event_delete_success' => 'The life event has been deleted',
    'life_event_date_it_happened' => 'Date it happened',
    'life_event_category_work_education' => 'Work & education',
    'life_event_category_family_relationships' => 'Family & relationships',
    'life_event_category_home_living' => 'Home & living',
    'life_event_category_health_wellness' => 'Health & wellness',
    'life_event_category_travel_experiences' => 'Travel & experiences',
    'life_event_sentence_new_job' => 'Started a new job',
    'life_event_sentence_retirement' => 'Retired',
    'life_event_sentence_new_school' => 'Started school',
    'life_event_sentence_study_abroad' => 'Studied abroad',
    'life_event_sentence_volunteer_work' => 'Started volunteering',
    'life_event_sentence_published_book_or_paper' => 'Published a paper',
    'life_event_sentence_military_service' => 'Started military service',
    'life_event_sentence_new_relationship' => 'Started a relationship',
    'life_event_sentence_engagement' => 'Got engaged',
    'life_event_sentence_marriage' => 'Got married',
    'life_event_sentence_anniversary' => 'Anniversary',
    'life_event_sentence_expecting_a_baby' => 'Expects a baby',
    'life_event_sentence_new_child' => 'Had a child',
    'life_event_sentence_new_family_member' => 'Added a family member',
    'life_event_sentence_new_pet' => 'Got a pet',
    'life_event_sentence_end_of_relationship' => 'Ended a relationship',
    'life_event_sentence_loss_of_a_loved_one' => 'Lost a loved one',
    'life_event_sentence_moved' => 'Moved',
    'life_event_sentence_bought_a_home' => 'Bought a home',
    'life_event_sentence_home_improvement' => 'Made a home improvement',
    'life_event_sentence_holidays' => 'Went on holidays',
    'life_event_sentence_new_vehicle' => 'Got a new vehicle',
    'life_event_sentence_new_roommate' => 'Got a roommate',
    'life_event_sentence_overcame_an_illness' => 'Overcame an illness',
    'life_event_sentence_quit_a_habit' => 'Quit a habit',
    'life_event_sentence_new_eating_habits' => 'Started new eating habits',
    'life_event_sentence_weight_loss' => 'Lost weight',
    'life_event_sentence_wear_glass_or_contact' => 'Started to wear glass or contact lenses',
    'life_event_sentence_broken_bone' => 'Broke a bone',
    'life_event_sentence_removed_braces' => 'Removed braces',
    'life_event_sentence_surgery' => 'Had surgery',
    'life_event_sentence_dentist' => 'Went to the dentist',
    'life_event_sentence_new_sport' => 'Started a sport',
    'life_event_sentence_new_hobby' => 'Started a hobby',
    'life_event_sentence_new_instrument' => 'Learned a new instrument',
    'life_event_sentence_new_language' => 'Learned a new language',
    'life_event_sentence_tattoo_or_piercing' => 'Got a tattoo or piercing',
    'life_event_sentence_new_license' => 'Got a license',
    'life_event_sentence_travel' => 'Traveled',
    'life_event_sentence_achievement_or_award' => 'Got an achievement or award',
    'life_event_sentence_changed_beliefs' => 'Changed beliefs',
    'life_event_sentence_first_word' => 'Spoke for the first time',
    'life_event_sentence_first_kiss' => 'Kissed for the first time',

    // documents
    'document_list_title' => 'Documents',
    'document_list_cta' => 'Upload document',
    'document_list_blank_desc' => 'Here you can store documents related to this person.',
    'document_upload_zone_cta' => 'Upload a file',
    'document_upload_zone_progress' => 'Uploading the document...',
    'document_upload_zone_error' => 'There was an error uploading the document. Please try again below.',

    // Photos
    'photo_title' => 'Photos',
    'photo_list_title' => 'Related photos',
    'photo_list_cta' => 'Upload photo',
    'photo_list_blank_desc' => 'You can store images about this contact. Upload one now!',
    'photo_upload_zone_cta' => 'Upload a photo',
    'photo_current_profile_pic' => 'Current profile picture',
    'photo_make_profile_pic' => 'Make profile picture',
    'photo_delete' => 'Delete photo',
    'photo_next' => 'Next photo ❯',
    'photo_previous' => '❮ Previous photo',

    // Avatars
    'avatar_change_title' => 'Change your avatar',
    'avatar_question' => 'Which avatar would you like to use?',
    'avatar_default_avatar' => 'The default avatar',
    'avatar_adorable_avatar' => 'The Adorable avatar',
    'avatar_gravatar' => 'The Gravatar associated with the email address of this person. <a href="https://gravatar.com/">Gravatar</a> is a global system that lets users associate email addresses with photos.',
    'avatar_current' => 'Keep the current avatar',
    'avatar_photo' => 'From a photo that you upload',
    'avatar_crop_new_avatar_photo' => 'Crop new avatar photo',

    // emotions
    'emotion_this_made_me_feel' => 'This made you feel…',

    // logs
    'auditlogs_link' => 'History',
    'auditlogs_title' => 'Everything that happened to :name',
    'auditlogs_breadcrumb' => 'History',
    'auditlogs_author' => 'By :name on :date',

    // contact field label
    'contact_field_label_home' => 'Home',
    'contact_field_label_work' => 'Work',
    'contact_field_label_cell' => 'Mobile',
    'contact_field_label_fax' => 'Fax',
    'contact_field_label_pager' => 'Pager',
    'contact_field_label_main' => 'Main',
    'contact_field_label_other' => 'Other',
    'contact_field_label_personal' => 'Personal',
];
