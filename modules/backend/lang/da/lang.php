<?php

return [
    'auth' => [
        'title' => 'Administrationsområde'
    ],
    'field' => [
        'invalid_type' => 'Ugyldig felttype :type.',
        'options_method_not_exists' => "Model klassen :model skal implementere :method() som returnerer valgmuligheder for feltet ':field'."
    ],
    'widget' => [
        'not_registered' => "En widget klasse med navnet ':name' er ikke registreret",
        'not_bound' => "En widget klasse med navnet ':name' er ikke blevet bundet til controlleren"
    ],
    'page' => [
        'untitled' => 'Unavngivet',
        'access_denied' => [
            'label' => 'Adgang nægtet',
            'help' => "Du har ikke de fornødne rettigheder til at se denne side.",
            'cms_link' => 'Tilbage til backenden'
        ],
        'no_database' => [
            'label' => 'Databasen kan ikke findes',
            'help' => "En database er påkrævet for at kunne tilgå backenden. Kontroller om databasen er konfigureret og migreret, inden du prøver igen.",
            'cms_link' => 'Tilbage til hjemmesiden'
        ],
        'invalid_token' => [
            'label' => 'Ugyldig sikkerhedstoken'
        ]
    ],
    'partial' => [
        'not_found_name' => "Partialen ':name' kunne ikke findes."
    ],
    'account' => [
        'sign_out' => 'Log ud',
        'login' => 'Log ind',
        'reset' => 'Reset',
        'restore' => 'Genopret',
        'login_placeholder' => 'Log ind',
        'password_placeholder' => 'adgangskode',
        'forgot_password' => 'Glemt din adgangskode?',
        'enter_email' => 'Indtast din mail',
        'enter_login' => 'Indtast din login-info',
        'email_placeholder' => 'mail',
        'enter_new_password' => 'Skriv en ny adgangskode',
        'password_reset' => 'Nulstil adgangskode',
        'restore_success' => 'En besked med instruktioner, er blevet sendt til din mail adresse.',
        'restore_error' => "En bruger med login-infoen ':login', kunne ikke findes",
        'reset_success' => 'Adgangskoden er blevet nulstillet. Du kan nu logge ind.',
        'reset_error' => 'Ugyldig adgangskode-nulstillings-data angivet. Prøv venligst igen!',
        'reset_fail' => 'Kunne ikke nulstille din adgangskode!',
        'apply' => 'Accepter',
        'cancel' => 'Fortryd',
        'delete' => 'Slet',
        'ok' => 'OK'
    ],
    'dashboard' => [
        'menu_label' => 'Dashboard',
        'widget_label' => 'Widget',
        'widget_width' => 'Bredde',
        'full_width' => 'Fuld bredde',
        'manage_widgets' => 'Administrer widgets',
        'add_widget' => 'Tilføj widget',
        'widget_inspector_title' => 'Widget konfiguration',
        'widget_inspector_description' => 'Konfigurer widgeten',
        'widget_columns_label' => 'Bredde :columns',
        'widget_columns_description' => 'Widget bredden, et nummer mellem 1 og 10.',
        'widget_columns_error' => 'Indtast venligst widget bredden som et nummer mellem 1 og 10.',
        'columns' => '{1} kollone|[2,Inf] kolonner',
        'widget_new_row_label' => 'Tving ny række',
        'widget_new_row_description' => 'Læg widget på ny række.',
        'widget_title_label' => 'Widget titel',
        'widget_title_error' => 'Widget titlen er påkrævet.',
        'reset_layout' => 'Nulstil layout',
        'reset_layout_confirm' => 'Nulstil layout?',
        'reset_layout_success' => 'Layoutet er blevet nulstillet',
        'make_default' => 'Gør til standard',
        'make_default_confirm' => 'Sæt det nuværende layout som standardlayout',
        'make_default_success' => 'Nuværende layout er standardlayoutet',
        'status' => [
            'widget_title_default' => 'System status',
            'update_available' => '{0} opdateringer!|{1} opdatering!|[2,Inf] opdateringer!',
            'updates_pending' => 'Afventende softwareopdateringer',
            'updates_nil' => 'Softwaren er up-to-date',
            'updates_link' => 'Opdater',
            'warnings_pending' => 'Nogle problemer har brug for din opmærksomhed',
            'warnings_nil' => 'Ingen advarsler at vise',
            'warnings_link' => 'Vis',
            'core_build' => 'System build',
            'event_log' => 'Event log',
            'request_log' => 'Request log',
            'app_birthday' => 'Online siden',
        ],
        'welcome' => [
            'widget_title_default' => 'Velkommen',
            'welcome_back_name' => 'Velkommen tilbage til :app, :name.',
            'welcome_to_name' => 'Velkommen til :app, :name.',
            'first_sign_in' => 'Dette er første gang du er logget ind.',
            'last_sign_in' => 'Du var sidst logget ind',
            'view_access_logs' => 'Vis access logs',
            'nice_message' => 'Hav en god dag!',
        ]
    ],
    'user' => [
        'name' => 'Administrator',
        'menu_label' => 'Administratorer',
        'menu_description' => 'Administrer back-end administratorbrugere, grupper og rettigheder.',
        'list_title' => 'Administrer Administrators',
        'new' => 'Ny Administrator',
        'login' => 'Log ind',
        'first_name' => 'Fornavn',
        'last_name' => 'Efternavn',
        'full_name' => 'Fulde navn',
        'mail' => 'Email',
        'groups' => 'Grupper',
        'groups_comment' => 'Vælg hvilke grupper kontoen skal tilhøre. Grupper definerer brugerrettigheder, som kan overskrives på den enkelte bruger..',
        'avatar' => 'Avatar',
        'password' => 'Adgangskode',
        'password_confirmation' => 'Bekræft Adgangskode',
        'permissions' => 'Rettigheder',
        'account' => 'Konto',
        'superuser' => 'Superbruger',
        'superuser_comment' => 'Giver kontoen fuld adgang til hele systemet.',
        'send_invite' => 'Send invitation på mail',
        'send_invite_comment' => 'Sender en velkomstbesked med login informationer.',
        'delete_confirm' => 'Slet denne administrator?',
        'return' => 'Tilbage til administrator liste',
        'allow' => 'Tillad',
        'inherit' => 'Nedarv',
        'deny' => 'Tillad ikke',
        'group' => [
            'name' => 'Gruppe',
            'name_comment' => 'Navnet vises i gruppelisten på Opret/rediger Administrator formularen.',
            'name_field' => 'Navn',
            'description_field' => 'Beskrivelse',
            'is_new_user_default_field_label' => 'Standardgruppe',
            'is_new_user_default_field_comment' => 'Tilføj automatisk nye administratorer til denne gruppe',
            'code_field' => 'Kode',
            'code_comment' => 'Skriv en unik kode hvis du vil tilgå gruppe objektet, via API\'et.',
            'menu_label' => 'Administrer Grupper',
            'list_title' => 'Administrer Grupper',
            'new' => 'Ny Gruppe',
            'delete_confirm' => 'Slet denne administratorgruppe??',
            'return' => 'Tilbage til gruppelisten',
            'users_count' => 'Brugere'
        ],
        'preferences' => [
            'not_authenticated' => 'Der er ingen bruger at loade eller save preferencer for.'
        ]
    ],
    'list' => [
        'default_title' => 'Liste',
        'search_prompt' => 'Søg...',
        'no_records' => 'Der er ingen records i dette view.',
        'missing_model' => 'List behavioren brugt i :class har ikke defineret en model.',
        'missing_column' => 'Der er ingen kolonnedefinition for :columns.',
        'missing_columns' => 'Liste brugt i :class har ikke nogle listekolonner defineret.',
        'missing_definition' => "List behavioren har ikke en kolonne for ':field'.",
        'missing_parent_definition' => "List behavioren har ingen definition for ':definition'.",
        'behavior_not_ready' => 'List behavioren er ikke blevet initialiseret. Kontroller om du har kaldt makeLists() i controlleren.',
        'invalid_column_datetime' => "Kolonneværdien ':column' er ikke et DateTime objekt: Mangler du en \$dates reference i Modellen?",
        'pagination' => 'Viste records: :from-:to af :total',
        'prev_page' => 'Forrige side',
        'next_page' => 'Næste side',
        'refresh' => 'Opdater',
        'updating' => 'Opdaterer...',
        'loading' => 'Loader...',
        'setup_title' => 'Listeopsætning',
        'setup_help' => 'Brug afkrydsningsfelterne til at vælge de kolonner du vil se i listen. Du kan lndre position for kolonnerne ved at trække dem op og ned.',
        'records_per_page' => 'Records pr. side',
        'records_per_page_help' => 'Vælg det antal records der skal vises pr. side. Vær opmærksom på at et stort antal records på en enkelt side, kan gøre siden langsom.',
        'check' => 'Check',
        'delete_selected' => 'Slet valgte',
        'delete_selected_empty' => 'Der er ingen valgte records at slette.',
        'delete_selected_confirm' => 'Slet de valgte records?',
        'delete_selected_success' => 'Slet valgte records.',
        'column_switch_true' => 'Ja',
        'column_switch_false' => 'Nej'
    ],
    'fileupload' => [
        'attachment' => 'Vedhæftning',
        'help' => 'Tilføj en titel og beskrivelse til denne vedhæftning.',
        'title_label' => 'Titel',
        'description_label' => 'Beskrivelse',
        'default_prompt' => 'Tryk på %s eller træk en fil hertil, for at uploade',
        'attachment_url' => 'Vedhæftnings URL',
        'upload_file' => 'Upload fil',
        'upload_error' => 'Upload fejl',
        'remove_confirm' => 'Er du sikker?',
        'remove_file' => 'Fjern fil'
    ],
    'form' => [
        'create_title' => 'Ny :name',
        'update_title' => 'Rediger :name',
        'preview_title' => 'Forhåndsvisning :name',
        'create_success' => ':name oprettet',
        'update_success' => ':name opdateret',
        'delete_success' => ':name slettet',
        'reset_success' => 'Nulstilning færdig',
        'missing_id' => 'Formular record ID er ikke blevet angivet.',
        'missing_model' => 'Form behavior used in :class does not have a model defined.',
        'missing_definition' => "Form behavioren indeholder ikke et felt for ':field'.",
        'not_found' => 'Formular record med et ID\'et :id kunne ikke findes.',
        'action_confirm' => 'Er du sikker?',
        'create' => 'Opret',
        'create_and_close' => 'Opret og luk',
        'creating' => 'Opretter...',
        'creating_name' => 'Opretter :name...',
        'save' => 'Gem',
        'save_and_close' => 'Gem og luk',
        'saving' => 'Gem...',
        'saving_name' => 'Gemmer :name...',
        'delete' => 'Slet',
        'deleting' => 'Sletter...',
        'confirm_delete' => 'Slet record?',
        'confirm_delete_multiple' => 'Slet valgte records?',
        'deleting_name' => 'Sletter :name...',
        'reset_default' => 'Nulstil til standard',
        'resetting' => 'Nulstiller',
        'resetting_name' => 'Nulstiller :name',
        'undefined_tab' => 'Andet',
        'field_off' => 'Fra',
        'field_on' => 'Til',
        'add' => 'Tilføj',
        'apply' => 'Slå til',
        'cancel' => 'Fortryd',
        'close' => 'Luk',
        'confirm' => 'Bekræft',
        'reload' => 'Reload',
        'complete' => 'Færdig',
        'ok' => 'OK',
        'or' => 'eller',
        'confirm_tab_close' => 'Luk tab? Ændringer der ikke er gemt vil blive tabt.',
        'behavior_not_ready' => 'Form behavioren er ikke blevet initialiseret. Kontroller at du har kaldt initForm() in controlleren.',
        'preview_no_files_message' => 'Der er ikke uploadet nogle filer.',
        'preview_no_record_message' => 'Der er ikke valgt nogen record.',
        'select' => 'Vælg',
        'select_all' => 'alle',
        'select_none' => 'ingen',
        'select_placeholder' => 'Vælg venligst',
        'insert_row' => 'Indsæt Række',
        'insert_row_below' => 'Indsæt Række Nedeunder',
        'delete_row' => 'Slet Række',
        'concurrency_file_changed_title' => 'Fil er blevet ændret',
        'concurrency_file_changed_description' => "Den fil du redigerer er blevet ændret på disken, af en anden bruger. Du kan enten reloade filen og miste ændringer eller overskrive filen på disken.",
        'return_to_list' => 'Tilbage til listen'
    ],
    'recordfinder' => [
        'find_record' => 'Find Record'
    ],
    'relation' => [
        'missing_config' => "Relation behavioren har ingen konfiguration for ':config'.",
        'missing_definition' => "Relation behavioren har ingen definition for ':field'.",
        'missing_model' => 'Relation behavioren brugt :class har ikke defineret en model.',
        'invalid_action_single' => 'Denne handling kan ikke udføres på et "enligt" relationship.',
        'invalid_action_multi' => 'Denne handling kan ikke udføres på et "flere" relationship.',
        'help' => 'Tryk på en ting for at tilføje',
        'related_data' => 'Relateret :name data',
        'add' => 'Tilføj',
        'add_selected' => 'Tilføj valgte',
        'add_a_new' => 'Tilføj en ny :name',
        'link_selected' => 'Link valgte',
        'link_a_new' => 'Link en ny :name',
        'cancel' => 'Fortryd',
        'close' => 'Luk',
        'add_name' => 'Tilføj :name',
        'create' => 'Opret',
        'create_name' => 'Opret :name',
        'update' => 'Opdater',
        'update_name' => 'Opdater :name',
        'preview' => 'Forhåndsvisning',
        'preview_name' => 'Forhåndsvis :name',
        'remove' => 'Fjern',
        'remove_name' => 'Fjern :name',
        'delete' => 'Slet',
        'delete_name' => 'Slet :name',
        'delete_confirm' => 'Er du sikker?',
        'link' => 'Link',
        'link_name' => 'Link :name',
        'unlink' => 'Fjern link',
        'unlink_name' => 'Fjern link til :name',
        'unlink_confirm' => 'Er du sikker?'
    ],
    'reorder' => [
        'default_title' => 'Sorter records',
        'no_records' => 'Der er ikke nogle records at sortere.'
    ],
    'model' => [
        'name' => 'Model',
        'not_found' => "Model ':class' with an ID of :id could not be found",
        'missing_id' => 'Der er ikke angivet noget ID til model recorden.',
        'missing_relation' => "Model ':class' har ingen definition af ':relation'.",
        'missing_method' => "Model ':class' har ikke metoden ':method'.",
        'invalid_class' => "Model :model brugt i :class er ikke gyldig. Den skal nedarve fra \\Model Klassen.",
        'mass_assignment_failed' => "Mass assignment fejlede for Model attributen ':attribute'."
    ],
    'warnings' => [
        'tips' => 'Systemkonfigurations-tips',
        'tips_description' => 'Der er problemer du skal være opmærksom på for at konfigurre systemet ordenligt.',
        'permissions'  => 'Mappe :name eller dens undermapper, er ikke skrivbare for PHP. Konfigurer venligst webserverens rettigheder for denne mappe.',
        'extension' => 'PHP extensionen :name er ikke installeret. Installer og aktiver venligst denne extension.'
    ],
    'editor' => [
        'menu_label' => 'Indstillinger for redigeringsværktøj',
        'menu_description' => 'Tilpas de globale indstllinger for redigeringsværktøjet, som eksempelvis skriftstørrelse og farver.',
        'font_size' => 'Skriftstørrelse',
        'tab_size' => 'Tab størrelse',
        'use_hard_tabs' => 'Indryk med tabs',
        'code_folding' => 'Kode foldning',
        'code_folding_begin' => 'Marker begyndelse',
        'code_folding_begin_end' => 'Marker begyndelse og endelse',
        'autocompletion' => 'Autocompletion',
        'word_wrap' => 'Word wrap',
        'highlight_active_line' => 'Highlight den aktive linie',
        'auto_closing' => 'Luk automatisk tags',
        'show_invisibles' => 'Vis usynlige karakterer',
        'show_gutter' => 'Vis gutter',
        'basic_autocompletion'=> 'Basic Autocompletion (Ctrl + Space)',
        'live_autocompletion'=> 'Live Autocompletion',
        'enable_snippets'=> 'Aktiver kode snippets (Tab)',
        'display_indent_guides'=> 'Vis indrykningsguides',
        'show_print_margin'=> 'Vis print margin',
        'mode_off' => 'Fra',
        'mode_fluid' => 'Fluid',
        '40_characters' => '40 Karakterer',
        '80_characters' => '80 Karakterer',
        'theme' => 'Farveskema',
        'markup_styles' => 'Markup Styles',
        'custom_styles' => 'Custom stylesheet',
        'custom styles_comment' => 'Custom styles som skal inkluderes i HTML editoren.',
        'markup_classes' => 'Markup Classes',
        'paragraph' => 'Afsnit',
        'link' => 'Link',
        'table' => 'Tabel',
        'table_cell' => 'Tabel Celle',
        'image' => 'Billede',
        'label' => 'Label',
        'class_name' => 'Class navn',
        'markup_tags' => 'Markup Tags',
        'allowed_empty_tags' => 'Tilladte tomme tags',
        'allowed_empty_tags_comment' => 'Liste af tags der ikke bliver fjernet, når de ikke har noget indhold.',
        'allowed_tags' => 'Tilladte tags',
        'allowed_tags_comment' => 'Liste af tilladte tags.',
        'no_wrap' => 'Omgiv ikke tags',
        'no_wrap_comment' => 'Liste af tags der ikke skal omgives af block tags.',
        'remove_tags' => 'Fjern tags',
        'remove_tags_comment' => 'Liste af tags der bliver fjernet, inklusiv deres indhold.'
    ],
    'tooltips' => [
        'preview_website' => 'Forhåndsvis hjemmesiden'
    ],
    'mysettings' => [
        'menu_label' => 'Mine indstillinger',
        'menu_description' => 'Indstilling til din administrationsbruger'
    ],
    'myaccount' => [
        'menu_label' => 'Min konto',
        'menu_description' => 'Opdater dine kontodetaljer som eksempelvis navn, mail-adresse og adgangskode.',
        'menu_keywords' => 'Sikkerhedslogin'
    ],
    'branding' => [
        'menu_label' => 'Tilpas back-end',
        'menu_description' => 'Tilpas backendområdet med eksempelvis navn, farver og logo.',
        'brand' => 'Brand',
        'logo' => 'Logo',
        'logo_description' => 'Upload et custom logo, der skal bruges i backenden.',
        'app_name' => 'App Navn',
        'app_name_description' => 'Dette navn vises i titlen i backenden.',
        'app_tagline' => 'App Tagline',
        'app_tagline_description' => 'Dette bliver vist ved backendlogin-siden.',
        'colors' => 'Farver',
        'primary_color' => 'Primær farve',
        'secondary_color' => 'Sekundær farve',
        'accent_color' => 'Accent color',
        'styles' => 'Styles',
        'custom_stylesheet' => 'Custom stylesheet',
        'navigation' => 'Navigation',
        'menu_mode' => 'Menu style',
        'menu_mode_inline' => 'På linie',
        'menu_mode_tile' => 'Stablet',
        'menu_mode_collapsed' => 'Kollapset'
    ],
    'backend_preferences' => [
        'menu_label' => 'Backend indstillinger',
        'menu_description' => 'Administrer dine backend indstillinger som eksempelvis dit ønskede sprog.',
        'region' => 'Region',
        'code_editor' => 'Kode editor',
        'timezone' => 'Tidszone',
        'timezone_comment' => 'Juster viste datoer til denne tidszone.',
        'locale' => 'Locale',
        'locale_comment' => 'Vælg din ønskede locale.'
    ],
    'access_log' => [
        'hint' => 'Denne log viser en liste af successfulde administratorlogins. Records bliver gemt i :days dage.',
        'menu_label' => 'Access log',
        'menu_description' => 'Se en liste af successfulde backendbruger logins.',
        'created_at' => 'Dato & Tid',
        'login' => 'Login',
        'ip_address' => 'IP addresse',
        'first_name' => 'Fornavn',
        'last_name' => 'Efternavn',
        'mail' => 'Email'
    ],
    'filter' => [
        'all' => 'alle',
        'options_method_not_exists' => "Model klassen :model skal implementere metoden :method() som returnerer muligheder til ':filter' filteret.",
        'date_all' => 'altid'
    ],
    'import_export' => [
        'upload_csv_file' => '1. Upload en CSV fil',
        'import_file' => 'Importer fil',
        'first_row_contains_titles' => 'Første række indeholder kolonnetitler',
        'first_row_contains_titles_desc' => 'Lad denne være krydset hvis første række i CSV filen er brugt til kolonnetitler.',
        'match_columns' => '2. Match the filkolonnerne til databasekolonner',
        'file_columns' => 'Filkolonner',
        'database_fields' => 'Databasekolonner',
        'set_import_options' => '3. Sæt import indstillinger',
        'export_output_format' => '1. Eksporter output format',
        'file_format' => 'Filformat',
        'standard_format' => 'Standard format',
        'custom_format' => 'Custom format',
        'delimiter_char' => 'Adskillelseskarakter',
        'enclosure_char' => 'Indramningskarakter',
        'escape_char' => 'Escapekarakter',
        'select_columns' => '2. Vælg kolonner der skal eksporteres',
        'column' => 'Kolonne',
        'columns' => 'Kolonner',
        'set_export_options' => '3. Sæt eksport indstillinger',
        'show_ignored_columns' => 'Vis ignorerede kolonner',
        'auto_match_columns' => 'Automatch kolonner',
        'created' => 'Oprettet',
        'updated' => 'Opdateret',
        'skipped' => 'Skipped',
        'warnings' => 'Advarsler',
        'errors' => 'Fejl',
        'skipped_rows' => 'Skipped Rækker',
        'import_progress' => 'Import progress',
        'processing' => 'Arbejder',
        'import_error' => 'Import fejl',
        'upload_valid_csv' => 'Upload venligst en gyldig CSV fil.',
        'drop_column_here' => 'Slip kolonne her...',
        'ignore_this_column' => 'Ignorer denne kolonne',
        'processing_successful_line1' => 'Fileksportprocess færdig!',
        'processing_successful_line2' => 'Browseren vil nu viderestille dig til fildownload.',
        'export_progress' => 'Eksporteringprocess',
        'export_error' => 'Eksporteringsfejl',
        'column_preview' => 'Kolonne forhåndsvisning',
        'file_not_found_error' => 'Fil blev ikke fundet',
        'empty_error' => 'Der blev ikke leveret noget data til eksportering',
        'empty_import_columns_error' => 'Vælg venligst nogle kolonner at importere.',
        'match_some_column_error' => 'Match venligst nogle kolonner først.',
        'required_match_column_error' => 'Vælg venligst et match til det påkrævede felt :label.',
        'empty_export_columns_error' => 'Vælg venligst nogle kolonner at eksportere.',
        'behavior_missing_uselist_error' => 'Du skal implementere controller behavioren ListController med eksport "useList" mulighed aktiveret.',
        'missing_model_class_error' => 'Agiv venligst modelklasse muligheden for :type',
        'missing_column_id_error' => 'Mangler kolonne identifier',
        'unknown_column_error' => 'Ukendt kolonne',
        'encoding_not_supported_error' => 'Fil indkodning kan ikke genkendes. Vælg venligst filformat med den korrekte indkodning for at importere filen.',
        'encoding_format' => 'Filindkodning',
        'encodings' => [
            'utf_8' => 'UTF-8',
            'us_ascii' => 'US-ASCII',
            'iso_8859_1' => 'ISO-8859-1 (Latin-1, Vesteuropæisk)',
            'iso_8859_2' => 'ISO-8859-2 (Latin-2, Centralauropæisk)',
            'iso_8859_3' => 'ISO-8859-3 (Latin-3, Sydeuropæisk)',
            'iso_8859_4' => 'ISO-8859-4 (Latin-4, Nordeuropæisk)',
            'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrillic)',
            'iso_8859_6' => 'ISO-8859-6 (Latin, Arabisk)',
            'iso_8859_7' => 'ISO-8859-7 (Latin, Græsk)',
            'iso_8859_8' => 'ISO-8859-8 (Latin, Hebraisk)',
            'iso_8859_0' => 'ISO-8859-9 (Latin-5, Tyrkisk)',
            'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordisk)',
            'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
            'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
            'iso_8859_14' => 'ISO-8859-14 (Latin-8, Keltisk)',
            'iso_8859_15' => 'ISO-8859-15 (Latin-9, Vesteuropæisk med eurotegn)',
            'windows_1251' => 'Windows-1251 (CP1251)',
            'windows_1252' => 'Windows-1252 (CP1252)'
        ]
    ],
    'permissions' => [
        'manage_media' => 'Upload og administrer media indhold - billeder, video, lyd, dokumenter'
    ],
    'mediafinder' => [
        'label' => 'Media Finder',
        'default_prompt' => 'Tryk på %s knappen for at finde et mediaobjekt'
    ],
    'media' => [
        'menu_label' => 'Media',
        'upload' => 'Upload',
        'move' => 'Flyt',
        'delete' => 'Slet',
        'add_folder' => 'Tilføj mappe',
        'search' => 'Søg',
        'display' => 'Vis',
        'filter_everything' => 'Alt',
        'filter_images' => 'Billeder',
        'filter_video' => 'Video',
        'filter_audio' => 'Lyd',
        'filter_documents' => 'Dokumenter',
        'library' => 'Bibliotek',
        'size' => 'Størrelse',
        'title' => 'Titel',
        'last_modified' => 'Sidst redigeret',
        'public_url' => 'Offentlig URL',
        'click_here' => 'Tryk her',
        'thumbnail_error' => 'Fejl ved generering af thumbnail.',
        'return_to_parent' => 'Gå en mappe tilbage',
        'return_to_parent_label' => 'Gå op ..',
        'nothing_selected' => 'Intet er valgt.',
        'multiple_selected' => 'Flere ting valgt.',
        'uploading_file_num' => 'Uploader :number fil(er)...',
        'uploading_complete' => 'Upload færdig',
        'uploading_error' => 'Upload fejlede',
        'type_blocked' => 'Filtypen er blokeret af sikkerhedshensyn.',
        'order_by' => 'Sorter efter',
        'folder' => 'Mappe',
        'no_files_found' => 'Ingen filer fundet fra din forespørgsel.',
        'delete_empty' => 'Vælg venligst filer at slette.',
        'delete_confirm' => 'Slet de valgte ting?',
        'error_renaming_file' => 'Fejl ved omdøbning.',
        'new_folder_title' => 'Ny mappe',
        'folder_name' => 'Mappenavn',
        'error_creating_folder' => 'Fejl ved opretning af mappe',
        'folder_or_file_exist' => 'En mappe eller fil med det angivede navn, findes allerede.',
        'move_empty' => 'Vælg venligst nogle ting du vil flytte.',
        'move_popup_title' => 'Flyt filer eller mapper',
        'move_destination' => 'Destinationmappe',
        'please_select_move_dest' => 'Vælg venligst en destinationsmappe.',
        'move_dest_src_match' => 'Vælg venligst en anden destinationsmappe.',
        'empty_library' => 'Media biblioteket er tomt. Upload filer eller mapper for at starte.',
        'insert' => 'Indsæt',
        'crop_and_insert' => 'Beskær & Indsæt',
        'select_single_image' => 'Vælg venligst et enkelt billede.',
        'selection_not_image' => 'Det valgte objekt er ikke et billede.',
        'restore' => 'Fortryd alle ændringer',
        'resize' => 'Skaler...',
        'selection_mode_normal' => 'Normal',
        'selection_mode_fixed_ratio' => 'Fast størrelsesforhold',
        'selection_mode_fixed_size' => 'Fast størrelse',
        'height' => 'Højde',
        'width' => 'Bredde',
        'selection_mode' => 'Udvælgelsesmetode',
        'resize_image' => 'Skaler billede',
        'image_size' => 'Billedstørrelse:',
        'selected_size' => 'Valgt:'
    ]
];