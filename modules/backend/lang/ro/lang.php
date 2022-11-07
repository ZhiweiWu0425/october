<?php return [
  'field' => [
    'invalid_type' => 'Tipul campului folosit este invalid - :type.',
    'options_method_not_exists' => 'Clasa model :model trebuie sa defineasca o metoda :method() returnand optiuni pentru campul ":field".',
  ],
  'widget' => [
    'not_registered' => 'Un nume de clasa de widget \':name\' nu a fost inregistrat',
    'not_bound' => 'Un widget cu numele de clasa \':name\' nu a fost mapat la controller',
  ],
  'page' => [
    'untitled' => 'Fara titlu',
    'access_denied' => [
      'label' => 'Acces restrictionat',
      'help' => 'Nu aveti permisiuni pentru a vizualiza aceasta pagina.',
      'cms_link' => 'Inapoi in panoul de administrare',
    ],
  ],
  'partial' => [
    'not_found_name' => 'Partialul \':name\' nu a fost gasit.',
  ],
  'account' => [
    'sign_out' => 'Deconectare',
    'login_placeholder' => 'login',
    'password_placeholder' => 'password',
    'enter_email' => 'Introduceti email',
    'email_placeholder' => 'email',
    'apply' => 'Aplicare',
    'cancel' => 'Anulare',
    'delete' => 'Stergere',
    'ok' => 'OK',
  ],
  'dashboard' => [
    'menu_label' => 'Dashboard',
    'widget_label' => 'Widget',
    'widget_width' => 'Latime',
    'add_widget' => 'Adauga widget',
    'widget_inspector_title' => 'Configurare widget',
    'widget_inspector_description' => 'Configurare raport widget',
    'widget_columns_label' => 'Latime :columns',
    'widget_columns_description' => 'Latime widget, un numar intre 1 si 10.',
    'widget_columns_error' => 'Va rugam sa introduceti latimea widget-ului ca un numar intre 1 si 10.',
    'columns' => '{1} coloana|[2,Inf] coloane',
    'widget_new_row_label' => 'Forteaza rand nou',
    'widget_new_row_description' => 'Amplasare widget pe un rand nou.',
    'widget_title_label' => 'Titlu widget',
    'widget_title_error' => 'Titlul widget-ului este necesar.',
    'status' => [
      'widget_title_default' => 'Status sistem',
      'online' => 'online',
      'update_available' => '{0} actualizari disponibile!|{1} actualizare disponibila!|[2,Inf] actualizari disponibile!',
    ],
  ],
  'user' => [
    'name' => 'Administrator',
    'menu_label' => 'Administratori',
    'menu_description' => 'Gestionare administratori, grupuri si permisiuni.',
    'list_title' => 'Gestionare Administratori',
    'new' => 'Administrator nou',
    'login' => 'Login',
    'first_name' => 'Prenume',
    'last_name' => 'Nume',
    'full_name' => 'Nume complet',
    'email' => 'Email',
    'groups' => 'Grupuri',
    'groups_comment' => 'Specificati grupurile aferente acestei persoane.',
    'avatar' => 'Avatar',
    'password' => 'Parola',
    'password_confirmation' => 'Confirmare Parola',
    'superuser' => 'Super Utilizator',
    'superuser_comment' => 'Bifati aceasta bifa pentru a permite acestei persoane sa aiba acces deplin.',
    'send_invite' => 'Trimitere invitatie prin email',
    'send_invite_comment' => 'Folositi aceasta bifa pentru a trimite o invitatie prin email catre utilizator',
    'delete_confirm' => 'Sunteti sigur(a) ca vreti sa stergeti acest administrator?',
    'return' => 'Intoarcere la lista de administratori',
    'group' => [
      'name' => 'Grup',
      'name_field' => 'Nume',
      'menu_label' => 'Grupuri',
      'list_title' => 'Gestionare Grupuri',
      'new' => 'Grup Nou de Administratori',
      'delete_confirm' => 'Sunteti sigur(a) ca vreti sa stergeti acest grup de administratori?',
      'return' => 'Intoarcere la lista de grupuri',
    ],
    'preferences' => [
      'not_authenticated' => 'Nu exista niciun utilizator autentificat pentru care sa se incarce sau salveze preferinte.',
    ],
  ],
  'list' => [
    'default_title' => 'Lista',
    'search_prompt' => 'Cautare...',
    'no_records' => 'Nu exista inregistari pentru aceasta fereastra.',
    'missing_model' => 'Lista folosita in clasa :class nu are un model definit.',
    'missing_column' => 'Nu exista denifitii pentru coloana :columns.',
    'missing_columns' => 'Lista folosita in clasa :class nu are coloane definite.',
    'missing_definition' => 'Lista nu contine o coloana pentru campul \':field\'.',
    'behavior_not_ready' => 'Setarile initiale ale listei nu au fost definite, verificati existenta functiei makeLists() in controller.',
    'invalid_column_datetime' => 'Valoarea coloanei \':column\' nu este un obiect de tip DateTime, verificati existenta unei referinte $dates in Model?',
    'pagination' => 'Afisare inregistrari: :from-:to din :total',
    'setup_title' => 'Setare lista',
    'setup_help' => 'Folositi bife pentru a selecta coloanele pe care doriti sa le vedeti in lista. Puteti modifica pozitia coloanelor glisandu-le in sus sau in jos.',
    'records_per_page' => 'Inregistari pe pagina',
    'records_per_page_help' => 'Selectati numarul de inregistari care sa fie afisat pe pagina. Sa tineti cont de faptul ca un numar mare de inregistari pe o singura pagina poate sa reduca performanta.',
    'apply_changes' => 'Aplicare schimbari',
    'cancel' => 'Anulare',
  ],
  'form' => [
    'create_title' => 'Nou :name',
    'update_title' => 'Editare :name',
    'preview_title' => 'Previzualizare :name',
    'create_success' => ':name a fost creat cu succes',
    'update_success' => ':name a fost actualizat cu succes',
    'delete_success' => ':name a fost sters cu succes',
    'missing_id' => 'ID-ul inregistrarii formularului nu a fost specificat.',
    'missing_model' => 'Formularul folosit in clasa :class nu are un model definit.',
    'missing_definition' => 'Formularul nu contine un camp pentru campul \':field\'.',
    'not_found' => 'Inregistrarea formularului cu ID-ul :id nu a putut fi gasita.',
    'create' => 'Creare',
    'create_and_close' => 'Creare si inchidere',
    'creating' => 'Se creeaza...',
    'save' => 'Salvare',
    'save_and_close' => 'Salvare si inchidere',
    'saving' => 'Se salveaza...',
    'delete' => 'Stergere',
    'deleting' => 'Se sterge...',
    'undefined_tab' => 'Altele',
    'field_off' => 'Dezactivat',
    'field_on' => 'Activat',
    'add' => 'Adaugare',
    'apply' => 'Aplicare',
    'cancel' => 'Anulare',
    'close' => 'Inchidere',
    'ok' => 'OK',
    'or' => 'sau',
    'confirm_tab_close' => 'Sunteti sigur(a) ca doriti sa inchideti acest tab? Modificarile nesalvate vor fi pierdute.',
    'behavior_not_ready' => 'Setarile initiale ale formularului nu au fost definite, verificati existenta functiei initForm() in controller.',
    'preview_no_files_message' => 'Fisierele nu au fost incarcate',
    'select' => 'Selectare',
    'select_all' => 'Selectează tot',
    'select_none' => 'Selectați niciuna',
  ],
  'relation' => [
    'missing_definition' => 'Relatia nu contine definitii pentru campul \':field\'.',
    'missing_model' => 'Relatia folosita in clasa :class nu are un model definit.',
    'invalid_action_single' => 'Aceasta actiune nu poate fi realizata pentru o relatie singulara.',
    'invalid_action_multi' => 'Aceasta actiune nu poate fi realizata pentru o relatie multipla.',
    'add' => 'Adaugare',
    'add_name' => 'Adaugare :name',
    'create' => 'Creare',
    'create_name' => 'Creare :name',
    'update' => 'Actualizare',
    'update_name' => 'Actualizare :name',
    'remove' => 'Inlaturare',
    'remove_name' => 'Inlaturare :name',
    'delete' => 'Stergere',
    'delete_name' => 'Stergere :name',
  ],
  'model' => [
    'name' => 'Model',
    'not_found' => 'Modelul \':class\' cu ID-ul :id nu a putut fi gasit',
    'missing_id' => 'Nu exista niciun ID specificat pentru care sa se realizeze cautarea inregistrarii modelului.',
    'missing_relation' => 'Modelul \':class\' nu contine o definitie pentru relatia \':relation\'.',
    'invalid_class' => 'Modelul :model folosit in clasa :class nu este valid, trebuie sa mosteneasca clasa \\Model.',
    'mass_assignment_failed' => 'Atribuirea in masa a esuat pentru atributul modelului \':attribute\'.',
  ],
  'warnings' => [
    'tips' => 'Sfaturi pentru configurarea sistemului',
    'tips_description' => 'Exista anumite conditii care necesita atentie pentru a configura sistemul corect.',
    'permissions' => 'Directorul :name si subdirectoarele sale nu au permisiuni de scriere pentru PHP. Va rugam sa setati permisiunile corespunzatoare pentru acest director.',
    'extension' => 'Libraria PHP :name nu este instalata. Va rugam sa instalati aceasta librarie si apoi sa activati extensia.',
  ],
  'editor' => [
    'menu_label' => 'Preferinte Editor Cod',
    'menu_description' => 'Personalizati preferintele editorului de cod, preferinte precum dimensiunea fontului si culorile folosite.',
    'font_size' => 'Dimensiune font',
    'tab_size' => 'Lungime tab',
    'use_hard_tabs' => 'Indentare folosind tab-uri',
    'code_folding' => 'Code folding',
    'word_wrap' => 'Word wrap',
    'highlight_active_line' => 'Evidentiere linie activa',
    'auto_closing' => 'Inchide automat tag-uri si caractere speciale',
    'show_invisibles' => 'Arata caractere invizibile',
    'show_gutter' => 'Afiseaza panou',
    'theme' => 'Schema culori',
  ],
  'tooltips' => [
    'preview_website' => 'Previzualizare site',
  ],
  'mysettings' => [
    'menu_label' => 'Setarile mele',
    'menu_description' => 'Setarile in legatura cu contul de administrare',
  ],
  'myaccount' => [
    'menu_label' => 'Contul meu',
    'menu_description' => 'Actualizati datele contului, precum nume, adresa de email si parola.',
    'menu_keywords' => 'securitate login',
  ],
  'backend_preferences' => [
    'menu_label' => 'Preferinte administrare',
    'menu_description' => 'Gestionati preferinte limba si setari aspect panou de administrare.',
    'locale' => 'Limba',
    'locale_comment' => 'Selectati limba dorita.',
  ],
  'access_log' => [],
];
