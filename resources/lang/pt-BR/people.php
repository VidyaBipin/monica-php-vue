<?php

/**
 * ⚠️ Editing not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/master/docs/contribute/translate.md for translations.
 */

return [

    //index
    'people_not_found' => 'Contato não encontrado',
    'people_list_number_kids' => ':count filho|:count filhos',
    'people_list_last_updated' => 'Últimas consultas:',
    'people_list_number_reminders' => ':count lembrete|:count lembretes',
    'people_list_blank_title' => 'Você ainda não adicionou ninguém',
    'people_list_blank_cta' => 'Adicionar contato',
    'people_list_sort' => 'Ordenar',
    'people_list_stats' => ':count contato|:count contatos',
    'people_list_firstnameAZ' => 'Ordenar por nome A → Z',
    'people_list_firstnameZA' => 'Ordenar por nome Z → A',
    'people_list_lastnameAZ' => 'Ordenar por sobrenome A → Z',
    'people_list_lastnameZA' => 'Ordenar por sobrenome Z → A',
    'people_list_lastactivitydateNewtoOld' => 'Ordenar pela última data de atividade, os mais recentes primeiro',
    'people_list_lastactivitydateOldtoNew' => 'Ordenar pela última data de atividade, os mais antigos primeiro',
    'people_list_filter_tag' => 'Exibindo todos os contatos etiquetados com',
    'people_list_clear_filter' => 'Limpar filtro',
    'people_list_contacts_per_tags' => ':count contatos|:count contatos',
    'people_list_show_dead' => 'Mostrar pessoas falecidas (:count)',
    'people_list_hide_dead' => 'Ocultar pessoas falecidas (:count)',
    'people_search' => 'Pesquisar seus contatos…',
    'people_search_no_results' => 'Nenhum resultado encontrado',
    'people_search_next' => 'Próximo',
    'people_search_prev' => 'Anterior',
    'people_search_rows_per_page' => 'Linhas por página',
    'people_search_of' => 'de',
    'people_search_page' => 'Página',
    'people_search_all' => 'Todos',
    'people_add_new' => 'Adicionar nova pessoa',
    'people_list_account_usage' => 'Uso da sua conta: :current/:limit contatos',
    'people_list_account_upgrade_title' => 'Assine para ter acesso a todos os recursos.',
    'people_list_account_upgrade_cta' => 'Assinar agora',
    'people_list_untagged' => 'Visualizar contatos sem etiqueta',
    'people_list_filter_untag' => 'Exibindo todos os contatos não etiquetados',

    // people add
    'people_add_title' => 'Adicionar novo contato',
    'people_add_missing' => 'Contato não encontrado. Adicione um novo.',
    'people_add_firstname' => 'Nome',
    'people_add_middlename' => 'Nome do meio (Opcional)',
    'people_add_lastname' => 'Sobrenome (Opcional)',
    'people_add_email' => 'Email (Opcional)',
    'people_add_nickname' => 'Apelido (Opcional)',
    'people_add_cta' => 'Adicionar',
    'people_save_and_add_another_cta' => 'Enviar e adicionar outra pessoa',
    'people_add_success' => ':nome foi criado com sucesso',
    'people_add_gender' => 'Gênero',
    'people_delete_success' => 'O contato foi excluído',
    'people_delete_message' => 'Excluir contato',
    'people_delete_confirmation' => 'Você tem certeza que quer remover o contato de :name? A remoção é imediata e permanente.',
    'people_add_birthday_reminder' => 'Deseje feliz aniversário para :name',
    'people_add_birthday_reminder_deceased' => 'Nessa data, :name, teria celebrado o aniversário deles',
    'people_add_import' => 'Você quer <a href=":url">importar seus contatos</a>?',
    'people_edit_email_error' => 'Já existe um contato em sua conta com esse e-mail. Por favor, escolha outro e-mail.',
    'people_export' => 'Exportar como vCard',
    'people_add_reminder_for_birthday' => 'Criar um lembrete anual para o aniversário',

    // show
    'section_contact_information' => 'Informações de contato',
    'section_personal_activities' => 'Atividades',
    'section_personal_reminders' => 'Lembretes',
    'section_personal_tasks' => 'Tarefas',
    'section_personal_gifts' => 'Presentes',
    'section_personal_notes' => 'Notas',

    // archived contacts
    'list_link_to_active_contacts' => 'Você está visualizando os contatos arquivados. Em vez disso, veja a <a href=":url">lista de contatos ativos</a>.',
    'list_link_to_archived_contacts' => 'Lista de contatos arquivados',

    // Header
    'me' => 'Este é você',
    'edit_contact_information' => 'Editar informações de contato',
    'contact_archive' => 'Arquivar contato',
    'contact_unarchive' => 'Desarquivar contato',
    'contact_archive_help' => 'Os contatos arquivados não são mostrados na lista de contatos, mas ainda aparecem nos resultados de busca.',
    'call_button' => 'Registrar ligação',
    'set_favorite' => 'Contatos favoritos são colocados no topo da lista de contatos',

    // Stay in touch
    'stay_in_touch' => 'Manter contato',
    'stay_in_touch_frequency' => 'Manter contato todos os dias|Manter contato a cada {count} dias',
    'stay_in_touch_invalid' => 'A frequência deve ser um número maior que 0.',
    'stay_in_touch_premium' => 'Você precisa de uma assinatura ativa para utilizar esse recurso',
    'stay_in_touch_modal_title' => 'Manter contato',
    'stay_in_touch_modal_desc' => 'Podemos lembrar você por e-mail para manter contato com {firstname} em um determinado intervalo.',
    'stay_in_touch_modal_label' => 'Envie-me um email a cada…{count} dia|Envie-me um email a cada… {count} dias',

    // Calls
    'modal_call_title' => 'Registrar ligação',
    'modal_call_comment' => 'Sobre o que falaram? (opcional)',
    'modal_call_exact_date' => 'O telefonema aconteceu em',
    'modal_call_who_called' => 'Quem ligou?',
    'modal_call_emotion' => 'Quer registrar como se sentiu durante esta chamada? (opcional)',
    'calls_add_success' => 'A chamada telefônica foi salva.',
    'call_delete_confirmation' => 'Tem certeza que deseja excluir esta ligação?',
    'call_delete_success' => 'A chamada telefônica foi excluída com sucesso',
    'call_title' => 'Ligações',
    'call_empty_comment' => 'Sem detalhes',
    'call_blank_title' => 'Registre todas as ligações realizadas com {name}',
    'call_blank_desc' => 'Você ligou para {name}',
    'call_you_called' => 'Você ligou',
    'call_he_called' => '{name} ligou',
    'call_emotions' => 'Emoções:',

    // Conversation
    'conversation_blank' => 'Grave conversas que você tem com :name em mídias sociais, SMS…',
    'conversation_delete_link' => 'Excluir conversa',
    'conversation_edit_title' => 'Editar conversa',
    'conversation_edit_delete' => 'Quer mesmo excluir esta conversa? Você não poderá voltar atrás.',
    'conversation_add_success' => 'Conversa registrada com sucesso!',
    'conversation_edit_success' => 'Conversa atualizada com sucesso!',
    'conversation_delete_success' => 'Conversa excluída com sucesso!',
    'conversation_add_title' => 'Registre uma nova conversa',
    'conversation_add_when' => 'Quando aconteceu essa conversa?',
    'conversation_add_who_wrote' => 'Quem enviou esta mensagem?',
    'conversation_add_how' => 'Como vocês se comunicaram?',
    'conversation_add_you' => 'Você',
    'conversation_add_content' => 'Escreva o que foi dito',
    'conversation_add_what_was_said' => 'O que você disse?',
    'conversation_add_another' => 'Adicionar outra mensagem',
    'conversation_add_error' => 'Você precisa adicionar pelo menos uma mensagem.',
    'conversation_list_table_messages' => 'Mensagens',
    'conversation_list_table_content' => 'Conteúdo parcial (última mensagem)',
    'conversation_list_title' => 'Conversas',
    'conversation_list_cta' => 'Registrar conversa',

    // age - birthday
    'birthdate_not_set' => 'Birth date is not set',
    'age_approximate_in_years' => 'cerca de :age anos',
    'age_exact_in_years' => ':age anos',
    'age_exact_birthdate' => 'nasceu em :date',

    // Last called
    'last_called' => 'Última ligação: :date',
    'last_called_empty' => 'Última ligação: desconhecido',
    'last_activity_date' => 'Última atividade juntos: :date',
    'last_activity_date_empty' => 'Última atividade juntos: desconhecido',

    // additional information
    'information_edit_success' => 'O perfil foi atualizado com sucesso',
    'information_edit_title' => 'Editar informações pessoais de :name',
    'information_edit_max_size' => 'Máx :size Kb.',
    'information_edit_max_size2' => 'Máx {size} Kb.',
    'information_edit_firstname' => 'Nome',
    'information_edit_lastname' => 'Sobrenome (Opcional)',
    'information_edit_description' => 'Descrição (Opcional)',
    'information_edit_description_help' => 'Usado na lista de contatos para adicionar algum contexto, se necessário.',
    'information_edit_unknown' => 'Não sei a idade desta pessoa',
    'information_edit_probably' => 'This person is probably…',
    'information_edit_not_year' => 'I know the day and month of this person’s birthday, but not the year…',
    'information_edit_exact' => 'I know the exact birthdate of this person…',
    'information_edit_birthdate_label' => 'Data de nascimento',
    'information_no_work_defined' => 'Sem informação profissional',
    'information_work_at' => 'na :company',
    'work_add_cta' => 'Atualizar informação profissional',
    'work_edit_success' => 'Work information updated',
    'work_edit_title' => 'Atualizar trabalho de :name',
    'work_edit_job' => 'Função (Opcional)',
    'work_edit_company' => 'Empresa (Opcional)',
    'work_information' => 'Informação de trabalho',

    // food preferences
    'food_preferences_add_success' => 'Preferências alimentares salvas com sucesso',
    'food_preferences_edit_description' => 'Talvez :firstname ou alguém na família :family tenha algum tipo de alergia ou não goste de algo específico. Coloque tudo aqui para que possa lembrar na próxima vez que os convidar para jantar',
    'food_preferences_edit_description_no_last_name' => 'Talvez :firstname tenha algum tipo de alergia ou não goste de algo específico. Coloque tudo aqui para que possa lembrar na próxima vez que estiverem juntos',
    'food_preferences_edit_title' => 'Registre suas preferências alimentares',
    'food_preferences_edit_cta' => 'Salvar preferências',
    'food_preferences_title' => 'Preferências alimentares',
    'food_preferences_cta' => 'Adicionar preferências alimentares',

    // reminders
    'reminders_blank_title' => 'Há alguma coisa que você gostaria de lembrar sobre :name?',
    'reminders_blank_add_activity' => 'Adicionar lembrete',
    'reminders_add_title' => 'O que você gostaria de ser lembrado sobre :name?',
    'reminders_add_description' => 'Please remind me to…',
    'reminders_add_next_time' => 'Quando você gostaria de ser lembrado sobre isso?',
    'reminders_add_once' => 'Lembre-me apenas uma vez',
    'reminders_add_recurrent' => 'Lembre-me a cada',
    'reminders_add_starting_from' => 'começando pela data selecionada acima',
    'reminders_add_cta' => 'Adicionar lembrete',
    'reminders_edit_update_cta' => 'Atualizar lembrete',
    'reminders_add_error_custom_text' => 'Você precisa indicar um texto para este lembrete',
    'reminders_create_success' => 'O lembrete foi adicionado com sucesso',
    'reminders_delete_success' => 'O lembrete foi excluído com sucesso',
    'reminders_update_success' => 'O lembrete foi atualizado com sucesso',
    'reminders_add_optional_comment' => 'Comentário opcional',

    'reminder_frequency_day' => 'todos os dias|a cada :number dias',
    'reminder_frequency_week' => 'toda semana|a cada :number semanas',
    'reminder_frequency_month' => 'todo mês|a cada :number meses',
    'reminder_frequency_year' => 'todo ano|a cada :number ano(s)',
    'reminder_frequency_one_time' => 'em :date',
    'reminders_delete_confirmation' => 'Você quer mesmo excluir este lembrete?',
    'reminders_delete_cta' => 'Excluir',
    'reminders_next_expected_date' => 'em',
    'reminders_cta' => 'Adicionar lembrete',
    'reminders_description' => 'Enviaremos um e-mail para cada um dos lembretes abaixo. Os lembretes são enviados na manhã do dia em que ocorrerão os eventos. Os lembretes adicionados automaticamente para aniversários não podem ser excluídos. Se você quiser alterar essas datas, edite a data de nascimento do contato em questão.',
    'reminders_one_time' => 'Uma vez',
    'reminders_type_week' => 'semana',
    'reminders_type_month' => 'mês',
    'reminders_type_year' => 'ano',
    'reminders_birthday' => 'Aniversário de :name',
    'reminders_free_plan_warning' => 'Você está utilizando o Plano Gratuito. E-mails não são enviados neste plano. Por favor, assine para receber seus lembretes por e-mail.',

    // relationships
    'relationship_form_add' => 'Adicionar novo relacionamento',
    'relationship_form_edit' => 'Editar relacionamento',
    'relationship_form_is_with' => 'Esta pessoa é...',
    'relationship_form_is_with_name' => ':name is…',
    'relationship_form_add_choice' => 'Com quem é esse relacionamento?',
    'relationship_form_create_contact' => 'Adicionar nova pessoa',
    'relationship_form_associate_contact' => 'Um contato existente',
    'relationship_form_associate_dropdown' => 'Pesquise e selecione um contato existente no menu abaixo',
    'relationship_form_associate_dropdown_placeholder' => 'Pesquise e selecione um contato existente',
    'relationship_form_also_create_contact' => 'Criar um perfil de contato para esta pessoa.',
    'relationship_form_add_description' => 'Isto permitirá que você gerencie esta pessoa como qualquer outro contato.',
    'relationship_form_add_no_existing_contact' => 'Você não tem nenhum contato que possa ser relacionado a :name no momento.',
    'relationship_delete_confirmation' => 'Quer mesmo excluir este relacionamento? Você não pode voltar atrás.',
    'relationship_unlink_confirmation' => 'Quer mesmo excluir este relacionamento? Esta pessoa não será excluída, somente o relacionamento entre as duas.',
    'relationship_form_add_success' => 'O relacionamento foi estabelecido com sucesso.',
    'relationship_form_deletion_success' => 'O relacionamento foi excluído.',

    // tasks
    'tasks_title' => 'Tarefas',
    'tasks_blank_title' => 'Você ainda não tem nenhuma tarefa.',
    'tasks_form_title' => 'Título',
    'tasks_form_description' => 'Descrição (Opcional)',
    'tasks_add_task' => 'Adicionar tarefa',
    'tasks_delete_success' => 'A tarefa foi excluída com sucesso',
    'tasks_complete_success' => 'O status da tarefa foi alterado com sucesso',

    // activities
    'activity_title' => 'Atividades',
    'activity_type_category_simple_activities' => 'Atividades simples',
    'activity_type_category_sport' => 'Esporte',
    'activity_type_category_food' => 'Comida',
    'activity_type_category_cultural_activities' => 'Atividades culturais',
    'activity_type_just_hung_out' => 'just hung out',
    'activity_type_watched_movie_at_home' => 'assistimos um filme em casa',
    'activity_type_talked_at_home' => 'só conversamos em casa',
    'activity_type_did_sport_activities_together' => 'praticamos um esporte juntos',
    'activity_type_ate_at_his_place' => 'como na casa deles',
    'activity_type_went_bar' => 'fui para um bar',
    'activity_type_ate_at_home' => 'comi em casa',
    'activity_type_picnicked' => 'fiz um piquenique',
    'activity_type_ate_restaurant' => 'comi em um restaurante',
    'activity_type_went_theater' => 'fui ao teatro',
    'activity_type_went_concert' => 'fui a um concerto',
    'activity_type_went_play' => 'fui a uma peça',
    'activity_type_went_museum' => 'fui ao museu',
    'activities_add_activity' => 'Acrescentar atividade',
    'activities_add_more_details' => 'Acrescentar mais detalhes',
    'activities_add_emotions' => 'Acrescentar emoções',
    'activities_add_category' => 'Indicar uma categoria',
    'activities_add_participants_cta' => 'Adicionar participantes',
    'activities_item_information' => ':Activity. Aconteceu em :date',
    'activities_add_title' => 'O que você fez com {name}?',
    'activities_summary' => 'Descreva o que fez',
    'activities_add_pick_activity' => '(Opcional) Você gostaria de categorizar esta atividade? Não é necessário, mas te fornecerá estatísticas mais tarde',
    'activities_add_date_occured' => 'The activity happened on…',
    'activities_add_participants' => 'Quem, além de {name}, participou desta atividade? (opcional)',
    'activities_add_emotions_title' => 'Você quer registrar como se sentiu durante esta atividade? (opcional)',
    'activities_blank_title' => 'Mantenha controle do que fez com {name} no passado, e sobre o que falaram',
    'activities_blank_add_activity' => 'Acrescentar uma atividade',
    'activities_add_success' => 'A atividade foi adicionada com sucesso',
    'activities_add_error' => 'Erro ao adicionar a atividade',
    'activities_update_success' => 'A atividade foi atualizada com sucesso',
    'activities_delete_success' => 'A atividade foi deletada com sucesso',
    'activities_who_was_involved' => 'Quem estava envolvido?',
    'activities_activity' => 'Categoria da Atividade',
    'activities_view_activities_report' => 'Ver relatório de atividades',
    'activities_profile_title' => 'Relatório de atividades entre :nome e você',
    'activities_profile_subtitle' => 'Você registrou :total_activities atividade com :name no total e :activities_last_twelve_months nos últimos 12 meses até o momento.|Você registrou :total_activities atividades com :name no total e :activities_last_twelve_months nos últimos 12 meses até agora.',
    'activities_profile_year_summary_activity_types' => 'Aqui está um detalhamento do tipo de atividades que vocês fizeram juntos no :ano',
    'activities_profile_year_summary' => 'Here is what you two have done in :year',
    'activities_profile_number_occurences' => ':value activity|:value activities',
    'activities_list_participants' => 'Participants:',
    'activities_list_emotions' => 'Emotions felt:',
    'activities_list_date' => 'Happened on',
    'activities_list_category' => 'Categoria:',

    // notes
    'notes_create_success' => 'A nota foi criada com sucesso',
    'notes_update_success' => 'A nota foi salva com sucesso',
    'notes_delete_success' => 'A nota foi excluída com sucesso',
    'notes_add_cta' => 'Adicionar nota',
    'notes_favorite' => 'Adicionar/remover dos favoritos',
    'notes_delete_title' => 'Deletar nota',
    'notes_delete_confirmation' => 'Você tem certeza de que deseja excluir esta nota? Você não poderá voltar atrás',

    // gifts
    'gifts_title' => 'Presentes',
    'gifts_add_success' => 'O presente foi adicionado com sucesso',
    'gifts_delete_success' => 'O presente foi excluído com sucesso',
    'gifts_delete_confirmation' => 'Tem certeza de que deseja deletar este presente?',
    'gifts_add_gift' => 'Adicionar um presente',
    'gifts_link' => 'Link',
    'gifts_for' => 'Para: {name}',
    'gifts_delete_cta' => 'Excluir',
    'gifts_add_title' => 'Gerenciar presentes para :name',
    'gifts_add_gift_idea' => 'Ideia de presente',
    'gifts_add_gift_already_offered' => 'Presente dado',
    'gifts_add_gift_received' => 'Presente recebido',
    'gifts_add_gift_title' => 'Que presente é esse?',
    'gifts_add_gift_name' => 'Nome do presente',
    'gifts_add_link' => 'Link para a página da web (opcional)',
    'gifts_add_value' => 'Valor (opcional)',
    'gifts_add_comment' => 'Comentário (opcional)',
    'gifts_add_recipient' => 'Destinatário (opcional)',
    'gifts_add_recipient_field' => 'Destinatário',
    'gifts_add_photo' => 'Foto (opcional)',
    'gifts_add_photo_title' => 'Adicione uma foto para este presente',
    'gifts_add_someone' => 'Este presente é para alguém da família de {name} ',
    'gifts_delete_title' => 'Excluir um presente',
    'gifts_ideas' => 'Ideias de presente',
    'gifts_offered' => 'Presentes dados',
    'gifts_offered_as_an_idea' => 'Marcar como uma ideia',
    'gifts_received' => 'Presentes recebidos',
    'gifts_view_comment' => 'Ver comentário',
    'gifts_mark_offered' => 'Marcar como entregue',
    'gifts_update_success' => 'O presente foi atualizado com sucesso',
    'gifts_add_date' => 'Data (opcional)',

    // debts
    'debt_delete_confirmation' => 'Tem certeza de que deseja deletar esta dívida?',
    'debt_delete_success' => 'A dívida foi excluída com sucesso',
    'debt_add_success' => 'A dívida foi acrescentada com sucesso',
    'debt_title' => 'Dívidas',
    'debt_add_cta' => 'Adicionar dívida',
    'debt_you_owe' => 'Você deve :amount',
    'debt_they_owe' => ':name lhe deve :amount',
    'debt_add_title' => 'Gerenciamento de dívidas',
    'debt_add_you_owe' => 'Você deve a :name',
    'debt_add_they_owe' => ':name deve a você',
    'debt_add_amount' => 'a soma de',
    'debt_add_reason' => 'for the following reason (optional)',
    'debt_add_add_cta' => 'Add debt',
    'debt_edit_update_cta' => 'Update debt',
    'debt_edit_success' => 'The debt has been updated successfully',
    'debts_blank_title' => 'Manage debts you owe to :name or :name owes you',

    // tags
    'tag_edit' => 'Edit tag',
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
    'pets_title' => 'Animais de Estimação',
    'pets_reptile' => 'Répteis',
    'pets_bird' => 'Pássaro',
    'pets_cat' => 'Gato',
    'pets_dog' => 'Cachorro',
    'pets_fish' => 'Peixe',
    'pets_hamster' => 'Hamster',
    'pets_horse' => 'Cavalo',
    'pets_rabbit' => 'Coelho',
    'pets_rat' => 'Rato',
    'pets_small_animal' => 'Animal pequeno',
    'pets_other' => 'Outros',

    // life events
    'life_event_list_tab_life_events' => 'Eventos da Vida',
    'life_event_list_tab_other' => 'Anotações, lembretes, ...',
    'life_event_list_title' => 'Eventos da Vida',
    'life_event_blank' => 'Registre o que acontece com a vida de {name} para sua referência futura.',
    'life_event_list_cta' => 'Acrescentar evento de vida',
    'life_event_create_category' => 'Todas as categorias',
    'life_event_create_life_event' => 'Adicionar evento de vida',
    'life_event_create_default_title' => 'Título (opcional)',
    'life_event_create_default_story' => 'História (opcional)',
    'life_event_create_date' => 'Não é necessário indicar um mês ou um dia - só o ano é obrigatório.',
    'life_event_create_default_description' => 'Adicione informações sobre o que você sabe',
    'life_event_create_add_yearly_reminder' => 'Adicione um lembrete anual para este evento',
    'life_event_create_success' => 'O evento de vida foi acrescentado',
    'life_event_delete_title' => 'Excluir um evento de vida',
    'life_event_delete_description' => 'Tem certeza de que deseja excluir este evento de vida? Não poderá voltar atrás.',
    'life_event_delete_success' => 'O evento de vida foi excluído',
    'life_event_date_it_happened' => 'Data em que aconteceu',
    'life_event_category_work_education' => 'Trabalho e Educação',
    'life_event_category_family_relationships' => 'Família e Relacionamentos',
    'life_event_category_home_living' => 'Casa e Vida',
    'life_event_category_health_wellness' => 'Saúde e Bem-Estar',
    'life_event_category_travel_experiences' => 'Viagens e Experiências',
    'life_event_sentence_new_job' => 'Começou um novo trabalho',
    'life_event_sentence_retirement' => 'Se aposentou',
    'life_event_sentence_new_school' => 'Começou a estudar',
    'life_event_sentence_study_abroad' => 'Estudou no exterior',
    'life_event_sentence_volunteer_work' => 'Começou o voluntariado',
    'life_event_sentence_published_book_or_paper' => 'Publicou um documento',
    'life_event_sentence_military_service' => 'Começou o serviço militar',
    'life_event_sentence_new_relationship' => 'Entrou em um relacionamento',
    'life_event_sentence_engagement' => 'Noivou',
    'life_event_sentence_marriage' => 'Casou-se',
    'life_event_sentence_anniversary' => 'Aniversário',
    'life_event_sentence_expecting_a_baby' => 'Engravidou',
    'life_event_sentence_new_child' => 'Teve um filho',
    'life_event_sentence_new_family_member' => 'Adicionou um membro à família',
    'life_event_sentence_new_pet' => 'Obteve um animal de estimação',
    'life_event_sentence_end_of_relationship' => 'Terminou um relacionamento',
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
    'document_upload_zone_progress' => 'Uploading the document…',
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
    'photo_next' => 'Próxima foto',
    'photo_previous' => 'Foto anterior',

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
    'auditlogs_link' => 'História',
    'auditlogs_title' => 'Tudo que aconteceu com :name',
    'auditlogs_breadcrumb' => 'História',
    'auditlogs_author' => 'Por :name em :date',

    // contact field label
    'contact_field_label_home' => 'Casa',
    'contact_field_label_work' => 'Trabalho',
    'contact_field_label_cell' => 'Celular',
    'contact_field_label_fax' => 'Fax',
    'contact_field_label_pager' => 'Pager',
    'contact_field_label_main' => 'Principal',
    'contact_field_label_other' => 'Outro',
    'contact_field_label_personal' => 'Pessoal',
];
