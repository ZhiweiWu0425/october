<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => 'Использован неверный тип поля: :type.',
    'options_method_invalid_model' => 'Атрибут \':field\' не соответствует действующей модели. Попробуйте указать options метод для модели :model явно.',
    'options_method_not_exists' => 'Класс модели :model должен содержать метод :method(), возвращающий опции для поля формы \':field\'.',
    'colors_method_not_exists' => 'Класс модели :model должен содержать метод :method(), возвращающий HTML цвет в HEX для поля формы \':field\'.',
  ],
  'widget' => [
    'not_registered' => 'Класс виджета \':name\' не зарегистрирован.',
    'not_bound' => 'Виджет с именем класса \':name\' не связан с контроллером.',
  ],
  'page' => [
    'untitled' => 'Без названия',
    'not_found' => [
      'label' => 'Страница не найдена',
      'help' => 'Запрашиваемая страница не найдена.',
      'back_link' => 'Вернутся к предыдущей странице',
    ],
    'access_denied' => [
      'label' => 'Доступ запрещен',
      'help' => 'У вас нет необходимых прав для просмотра этой страницы.',
      'cms_link' => 'Перейти к CMS',
    ],
    'no_database' => [
      'label' => 'Отсутствует база данных',
      'help' => 'Для доступа к серверу требуется база данных. Проверьте, что база данных настроена и перенесена, прежде чем повторять попытку.',
      'cms_link' => 'Вернуться на главную страницу',
    ],
  ],
  'partial' => [
    'not_found_name' => 'Не удалось найти шаблон (partial) с именем :name.',
    'invalid_name' => 'Неправильное название фрагмента: :name.',
  ],
  'ajax_handler' => [
    'invalid_name' => 'Неправильное название AJAX метода: :name.',
    'not_found' => 'AJAX метод \':name\' не найден.',
  ],
  'account' => [
    'impersonate' => 'Имперсонация пользователя',
    'impersonate_confirm' => 'Вы уверены что хотите авторизоваться этим пользователем? Вы можете вернутся к своему аккаунту выйдя из него.',
    'impersonate_success' => 'Вы имперсонируете этого пользователя',
    'impersonate_working' => 'Имперсонация...',
    'impersonating' => 'Имперсонированы как :full_name',
    'stop_impersonating' => 'Прекратить имперсонацию',
    'signed_in_as' => 'Выполнен вход как :full_name',
    'sign_out' => 'Выйти',
    'login_prompt' => 'Добро пожаловать! Пожалуйста введите логин и пароль для входа чтобы продолжить.',
    'login_placeholder' => 'Логин',
    'password_placeholder' => 'Пароль',
    'enter_email' => 'Введите свой email',
    'email_placeholder' => 'email',
    'apply' => 'Применить',
    'cancel' => 'Отменить',
    'delete' => 'Удалить',
    'ok' => 'OK',
  ],
  'dashboard' => [
    'menu_label' => 'Дашборд',
    'widget_label' => 'Виджет',
    'widget_width' => 'Ширина',
    'full_width' => 'полная ширина',
    'manage_widgets' => 'Управление виджетами',
    'add_widget' => 'Добавить виджет',
    'widget_inspector_title' => 'Конфигурации виджета',
    'widget_inspector_description' => 'Настройка отображения виджета',
    'widget_columns_label' => 'Ширина :columns',
    'widget_columns_description' => 'Ширина виджета может варьироваться от 1 до 10.',
    'widget_columns_error' => 'Пожалуйста, выберите ширину виджета.',
    'columns' => '{1} колонка|[2,4] колонки|[5,Inf] колонок',
    'widget_new_row_label' => 'Новая строка',
    'widget_new_row_description' => 'Поставить виджет с новой строки.',
    'widget_title_label' => 'Заголовок',
    'widget_title_error' => 'Заголовок виджета обязателен.',
    'reset_layout' => 'Сбросить расположение',
    'reset_layout_confirm' => 'Сбросить расположение к расположению по умолчанию?',
    'reset_layout_success' => 'Расположение было сброшено',
    'make_default' => 'Сохранить по умолчанию',
    'make_default_confirm' => 'Сделать текущее расположение расположением по умолчанию?',
    'make_default_success' => 'Текущее расположение сохранено как расположение по умолчанию',
    'collapse_all' => 'Свернуть всё',
    'expand_all' => 'Развернуть всё',
    'status' => [
      'widget_title_default' => 'Статус системы',
      'update_available' => '{0} нет новый обновлений!|{1} доступно новое обновление!|[2,Inf] доступны новые обновления!',
      'updates_pending' => 'Доступны обновления',
      'updates_nil' => 'Используется последняя версия',
      'updates_link' => 'Обновить',
      'warnings_pending' => 'Требуется ваше внимание',
      'warnings_nil' => 'Ошибок нет',
      'warnings_link' => 'Просмотр',
      'core_build' => 'Сборка',
      'event_log' => 'Лог событий',
      'request_log' => 'Лог запросов',
      'app_birthday' => 'Онлайн с',
    ],
    'welcome' => [
      'widget_title_default' => 'Добро пожаловать',
      'welcome_back_name' => 'С возвращением в :app, :name.',
      'welcome_to_name' => 'Добро пожаловать в :app, :name.',
      'first_sign_in' => 'Это первый раз, когда вы вошли в систему.',
      'last_sign_in' => 'Последний раз вы заходили',
      'view_access_logs' => 'Посмотреть лог доступа',
      'nice_message' => 'Хорошего дня!',
    ],
  ],
  'user' => [
    'name' => 'Администратора',
    'menu_label' => 'Администраторы',
    'menu_description' => 'Управление группой администраторов, создание групп и разрешений.',
    'list_title' => 'Управление администраторами',
    'new' => 'Добавить администратора',
    'login' => 'Логин',
    'first_name' => 'Имя',
    'last_name' => 'Фамилия',
    'full_name' => 'Полное имя',
    'email' => 'Почта',
    'role_field' => 'Роль',
    'role_comment' => 'Роли определяют уровни доступа пользователей, которые могут быть изменены на уровне пользователя, на вкладке "Разрешения".',
    'groups' => 'Группы',
    'groups_comment' => 'Укажите, к какой группе должен принадлежать этот аккаунт.',
    'avatar' => 'Аватар',
    'password' => 'Пароль',
    'password_confirmation' => 'Подтверждение пароля',
    'permissions' => 'Полномочия',
    'account' => 'Аккаунт',
    'superuser' => 'Суперпользователь',
    'superuser_comment' => 'Предоставляет этому аккаунту неограниченный доступ ко всем областям.',
    'send_invite' => 'Отправить приглашение по электронной почте',
    'send_invite_comment' => 'Отправляет приветственное сообщение, содержащее информацию о логине и пароле.',
    'delete_confirm' => 'Вы действительно хотите удалить этого администратора?',
    'return' => 'Вернуться к списку администраторов',
    'allow' => 'Разрешить',
    'inherit' => 'Наследовать',
    'deny' => 'Запретить',
    'activated' => 'Активирован',
    'last_login' => 'Последний вход',
    'created_at' => 'Создан',
    'updated_at' => 'Обновлен',
    'deleted_at' => 'Удален',
    'show_deleted' => 'Показать удаленных',
    'group' => [
      'name' => 'Группы',
      'menu_label' => 'Группы',
      'menu_description' => 'Добавьте администраторов в группы используемые для уведомлений и остальных функций.',
      'name_field' => 'Название',
      'name_comment' => 'Название отображается в списке групп в форме создания/редактирования администраторов.',
      'description_field' => 'Описание',
      'is_new_user_default_field_label' => 'Группа по умолчанию',
      'is_new_user_default_field_comment' => 'Добавлять новых администраторов в эту группу по умолчанию.',
      'code_field' => 'Уникальный код',
      'code_comment' => 'Введите уникальный код, если вы хотите открыть доступ к нему с помощью API.',
      'list_title' => 'Управление группами',
      'new' => 'Добавить группу',
      'delete_confirm' => 'Вы действительно хотите удалить эту группу администраторов?',
      'return' => 'Вернуться к списку групп',
      'users_count' => 'Пользователи',
    ],
    'role' => [
      'name' => 'Роль',
      'menu_label' => 'Управление ролями',
      'menu_description' => 'Настройте разрешения для администраторов в зависимости от их роли.',
      'name_field' => 'Название',
      'name_comment' => 'Название отображается в списке ролей в форме "Администратор".',
      'description_field' => 'Описание',
      'code_field' => 'Код',
      'code_comment' => 'Введите уникальный код, если вы хотите получить доступ к объекту роли при помощи API.',
      'list_title' => 'Управление ролями',
      'new' => 'Новая роль',
      'delete_confirm' => 'Удалить эту роль администратора?',
      'return' => 'Вернуться к списку ролей',
      'users_count' => 'Пользователи',
    ],
    'preferences' => [
      'not_authenticated' => 'Невозможно загрузить или сохранить настройки для неавторизованного пользователя.',
    ],
    'trashed_hint_title' => 'Этот аккаунт был удален',
    'trashed_hint_desc' => 'Этот аккаунт был удален и больше не имеет возможности авторизоваться. Чтобы восстановить этот аккаунт, нажмите на иконку восстановления в правом нижнем углу.',
  ],
  'list' => [
    'default_title' => 'Список',
    'search_prompt' => 'Поиск...',
    'no_records' => 'По вашему запросу ничего не найдено.',
    'missing_model' => 'Для списка используемого в :class не определена модель.',
    'missing_column' => 'Нет никаких определений столбца для :columns.',
    'missing_columns' => 'Список используемый в :class не имеет никаких столбцов.',
    'missing_definition' => 'Поведение списка не содержит столбец для \':field\'.',
    'missing_parent_definition' => 'Поведение списка не содержит определения для \':definition\'.',
    'behavior_not_ready' => 'Поведение списка не было инициализировано, проверьте вызов makeLists() в вашем контроллере.',
    'invalid_column_datetime' => 'Значение столбца \':column\' не является объектом DateTime. Отсутствует $dates ссылка в модели?',
    'pagination' => 'Отображено записей: :from-:to из :total',
    'first_page' => 'Первая страница',
    'last_page' => 'Последняя страница',
    'prev_page' => 'Предыдущая страница',
    'next_page' => 'Следующая страница',
    'refresh' => 'Обновить',
    'updating' => 'Обновление...',
    'loading' => 'Загрузка...',
    'setup_title' => 'Настройка списка',
    'setup_help' => 'Используйте флажки для выбора колонок, которые вы хотите видеть в списке. Вы можете изменить положение столбцов, перетаскивая их вверх или вниз.',
    'records_per_page' => 'Записей на странице',
    'records_per_page_help' => 'Выберите количество записей на странице для отображения. Обратите внимание, что большое количество записей на одной странице может привести к снижению производительности.',
    'check' => 'Проверить',
    'create_button' => 'Создать :name',
    'delete_selected' => 'Удалить выбранное',
    'delete_selected_empty' => 'Нет выбранных записей для удаления.',
    'delete_selected_confirm' => 'Удалить выбранные записи?',
    'delete_selected_success' => 'Выбранные записи успешно удалены.',
    'column_switch_true' => 'Да',
    'column_switch_false' => 'Нет',
  ],
  'object_list' => [
    'prop_cant_be_empty' => 'Свойство :property не может быть пустым',
    'key_value_exists' => 'Значение уже установлено: :property_value',
  ],
  'fileupload' => [
    'attachment' => 'Приложение',
    'help' => 'Добавьте заголовок и описание для этого вложения.',
    'title_label' => 'Название',
    'description_label' => 'Описание',
    'attachment_url' => 'URL',
    'upload_file' => 'Загрузить файл',
    'upload_error' => 'Ошибка загрузки',
    'remove_confirm' => 'Вы уверены?',
    'remove_file' => 'Удалить файл',
    'clear' => 'Удалить',
    'delete_selected' => 'Удалить выбранное',
    'upload' => 'Загрузить',
    'replace' => 'Заменить',
  ],
  'repeater' => [
    'add_new_item' => 'Добавить элемент',
    'min_items_failed' => ':name требует минимум :min объектов, было передано только :items',
    'max_items_failed' => ':name позволяет передать максимум :max объектов, было передано :items',
  ],
  'form' => [
    'create_title' => 'Создание :name',
    'update_title' => 'Редактирование :name',
    'preview_title' => 'Предпросмотр :name',
    'create_success' => ':name был успешно создан',
    'update_success' => ':name был успешно сохранен',
    'delete_success' => ':name был успешно удален',
    'restore_success' => ':name восстановлен',
    'reset_success' => 'Сброс завершен',
    'missing_id' => 'Идентификатор формы записи не указан.',
    'missing_tab' => 'Отсутствует определение вкладки.',
    'missing_model' => 'Для формы используемой в :class не определена модель.',
    'missing_definition' => 'Поведение формы не содержит поле для\':field\'.',
    'not_found' => 'Форма записи с идентификатором :ID не найдена.',
    'action_confirm' => 'Вы уверены, что хотите сделать это?',
    'create' => 'Создать',
    'create_and_close' => 'Создать и закрыть',
    'creating' => 'Создание...',
    'creating_name' => 'Создание :name...',
    'save' => 'Сохранить',
    'save_and_close' => 'Сохранить и закрыть',
    'saving' => 'Сохранение...',
    'saving_name' => 'Сохранение :name...',
    'delete' => 'Удалить',
    'deleting' => 'Удаление...',
    'confirm_delete' => 'Вы действительно хотите удалить эту запись?',
    'confirm_delete_multiple' => 'Вы действительно хотите удалить выбранные записи?',
    'deleting_name' => 'Удаление :name...',
    'restore' => 'Восстановить',
    'restoring' => 'Восстановление',
    'confirm_restore' => 'Вы уверены что хотите восстановить эту запись?',
    'reset_default' => 'Сбросить настройки',
    'resetting' => 'Сброс',
    'resetting_name' => 'Сброс :name',
    'undefined_tab' => 'Разное',
    'field_off' => 'Выкл',
    'field_on' => 'Вкл',
    'add' => 'Добавить',
    'apply' => 'Применить',
    'cancel' => 'Отмена',
    'close' => 'Закрыть',
    'confirm' => 'Подтвердить',
    'reload' => 'Обновить',
    'complete' => 'Завершить',
    'ok' => 'OK',
    'or' => 'или',
    'confirm_tab_close' => 'Закрыть вкладку? Несохраненные изменения будут потеряны.',
    'behavior_not_ready' => 'Поведение формы не было инициализировано, проверьте вызов initForm() в вашем контроллере.',
    'preview_no_files_message' => 'Нет загруженных файлов.',
    'preview_no_media_message' => 'Нет выбранного медиа.',
    'preview_no_record_message' => 'Нет выбранных записей.',
    'select' => 'Выбрать',
    'select_all' => 'Выбрать все',
    'select_none' => 'Отменить',
    'select_placeholder' => 'Пожалуйста, выберите',
    'insert_row' => 'Вставить строку',
    'insert_row_below' => 'Вставить строку ниже',
    'delete_row' => 'Удалить строку',
    'concurrency_file_changed_title' => 'Файл был изменен',
    'concurrency_file_changed_description' => 'Файл,редактируемый вами, был изменен другим пользователем. Вы можете перезагрузить файл и потерять ваши изменения или перезаписать его',
    'return_to_list' => 'Вернуться к списку',
    'no_options_found' => 'Опции не найдены',
    'error' => 'Ошибка',
    'toggle_full_screen' => 'Перейти в полноэкранный режим',
  ],
  'treeview' => [
    'expand' => 'Раскрыть',
    'collapse' => 'Скрыть',
    'reorder' => 'Сортировка',
    'clear_search' => 'Очистить поиск',
    'search' => 'Поиск',
    'command_or_document' => 'Команда или документ...',
    'quick_access' => 'Быстрый доступ',
    'open' => 'Открыть',
    'commands' => 'Команды',
  ],
  'tabs' => [
    'close' => 'Закрыть вкладку',
    'close_all' => 'Закрыть все вкладки',
    'close_others' => 'Закрыть остальные вкладки',
    'close_saved' => 'Закрыть сохраненные вкладки',
    'full_screen' => 'Переключить полноэкранный режим',
  ],
  'modal' => [
    'close' => 'Close',
  ],
  'dropdownmenu' => [
    'go_back' => 'Назад',
    'close_menu' => 'Закрыть меню',
  ],
  'recordfinder' => [
    'find_record' => 'Найти запись',
    'invalid_model_class' => 'Предоставленный класс модели ":modelClass" для recordfinder недействителен.',
    'cancel' => 'Отмена',
  ],
  'pagelist' => [
    'page_link' => 'Ссылка на страницу',
    'select_page' => 'Выберите страницу...',
  ],
  'relation' => [
    'add_success' => 'Объект ":name" добавлен',
    'link_success' => 'Объект ":name" связан',
    'remove_success' => 'Объект ":name" убран',
    'unlink_success' => 'Объект ":name" отвязан',
    'missing_config' => 'Поведение отношения не имеет конфигурации для \':config\'.',
    'missing_definition' => 'Поведение отношения не содержит определения для \':field\'.',
    'missing_model' => 'Для поведения отношения, используемого в :class не определена модель.',
    'invalid_action_single' => 'Это действие не может быть выполнено для особого отношения.',
    'invalid_action_multi' => 'Это действие не может быть выполнено для множественных отношений.',
    'help' => 'Нажмите на элемент, который нужно добавить',
    'related_data' => 'Связанные :name данные',
    'add' => 'Добавить',
    'add_selected' => 'Добавить выбранные',
    'add_a_new' => 'Добавить новый :name',
    'link_selected' => 'Связать выбранное',
    'link_a_new' => 'Новая ссылка :name',
    'cancel' => 'Отмена',
    'close' => 'Закрыть',
    'add_name' => 'Добавление :name',
    'create' => 'Создать',
    'create_name' => 'Создание :name',
    'update' => 'Обновить',
    'update_name' => 'Обновление :name',
    'preview' => 'Предпросмотр',
    'preview_name' => 'Предпросмотр :name',
    'remove' => 'Удалить',
    'remove_name' => 'Удаление :name',
    'delete' => 'Удалить',
    'delete_name' => 'Удаление :name',
    'delete_confirm' => 'Вы уверены?',
    'link' => 'Ссылка',
    'link_name' => 'Соединение :name',
    'unlink' => 'Отвязать',
    'unlink_name' => 'Разъединение :name',
    'unlink_confirm' => 'Вы уверены?',
  ],
  'reorder' => [
    'default_title' => 'Сортировать записи',
    'no_records' => 'Нет доступных записей для сортировки.',
  ],
  'model' => [
    'name' => 'Модель',
    'not_found' => 'Модель \':class\' с идентификатором :id не найдена',
    'missing_id' => 'Нет идентификатора для поиска модели записи.',
    'missing_relation' => 'Модель \':class\' не содержит определения для \':relation\'',
    'missing_method' => 'Модель \':class\' не содержит метод \':method\'.',
    'invalid_class' => 'Модель :model используемая в :class не допустима, она должна наследовать класс \\Model.',
    'mass_assignment_failed' => 'Массовое заполнение недоступно для атрибута модели \':attribute\'.',
  ],
  'warnings' => [
    'tips' => 'Подсказки по конфигурации системы',
    'tips_description' => 'Есть проблемы, на которые стоит обратить внимание, чтобы правильно настроить систему.',
    'permissions' => 'Каталог :name или его подкаталоги недоступны для записи. Укажите соответствующие разрешения для веб-сервера.',
    'extension' => 'Расширение PHP :name не установлено. Установите эту библиотеку и активируйте расширение.',
    'plugin_missing' => 'Плагин :name имеет зависимость. Установите этот плагин.',
    'debug' => 'Включен режим отладки. Не рекомендуется использовать режим отладки для сайта в продакшене.',
    'backend_uri' => 'Адрес ":name" панели управления слишком простой. Пожалуйста укажите что-нибудь более уникальное.',
    'backend_login' => 'Найден аккаунт с логином ":name". Пожалуйста переименуйте его.',
  ],
  'editor' => [
    'menu_label' => 'Настройки редактора',
    'menu_description' => 'Управление настройками редактора кода.',
    'font_size' => 'Размер шрифта',
    'tab_size' => 'Размер табуляции',
    'use_hard_tabs' => 'Использовать табуляцию для индентации',
    'code_folding' => 'Свертывание кода',
    'code_folding_begin' => 'Mark begin',
    'code_folding_begin_end' => 'Mark begin and end',
    'autocompletion' => 'Авто дополнение',
    'word_wrap' => 'Перенос слов',
    'highlight_active_line' => 'Подсвечивать активную строку',
    'auto_closing' => 'Автоматическое закрытие тегов и специальных символов',
    'show_invisibles' => 'Показывать невидимые символы',
    'show_gutter' => 'Показывать нумерацию строк',
    'basic_autocompletion' => 'Базовое авто дополнение (Ctrl + Space)',
    'live_autocompletion' => 'Живое авто дополнение',
    'enable_snippets' => 'Включить сниппеты (Tab)',
    'display_indent_guides' => 'Показывать символы перевода строки',
    'show_print_margin' => 'Показывать границу печати',
    'mode_off' => 'Выключено',
    'mode_fluid' => 'Адаптивный',
    '40_characters' => '40 символов',
    '80_characters' => '80 символов',
    'theme' => 'Цветовая схема',
    'markup_styles' => 'Стили разметки',
    'custom_styles' => 'Дополнительные CSS стили',
    'custom styles_comment' => 'Дополнительные стили для использования в HTML редакторе.',
    'markup_classes' => 'Классы разметки',
    'paragraph' => 'Параграф',
    'link' => 'Ссылка',
    'table' => 'Таблица',
    'table_cell' => 'Ячейка таблицы',
    'image' => 'Изображение',
    'label' => 'Название',
    'class_name' => 'Класс',
    'markup_tags' => 'Теги разметки',
    'allowed_empty_tags' => 'Разрешенные пустые теги',
    'allowed_empty_tags_comment' => 'Список тегов, которые не будут удаляться, если внутри них нет содержания.',
    'allowed_tags' => 'Разрешенные теги',
    'allowed_tags_comment' => 'Список разрешенных тегов.',
    'allowed_attrs' => 'Разрешенные атрибуты',
    'allowed_attrs_comment' => 'Список разрешенных HTML атрибутов, в дополнение к стандартным атрибутам.',
    'no_wrap' => 'Не оборачивать теги',
    'no_wrap_comment' => 'Список тегов, которые не должны быть обернуты в блочные элементы.',
    'remove_tags' => 'Удаляемые теги',
    'remove_tags_comment' => 'Список тегов, которые будут удалены вместе с их содержанием.',
    'line_breaker_tags' => 'Теги с переводом строки',
    'line_breaker_tags_comment' => 'Список тегов, в которых будет использоваться тег перевода строки',
    'toolbar_buttons' => 'Кнопки панели инструментов',
    'toolbar_buttons_comment' => 'Кнопки панели инструментов, которые будут отображаться в Rich Editor по умолчанию.',
    'toolbar_buttons_preset' => 'Выберите вариант конфигурации панели инструментов',
    'toolbar_buttons_presets' => [
      'default' => 'По умолчанию',
      'minimal' => 'Минимальный',
      'full' => 'Полный',
    ],
    'paragraph_formats' => 'Форматы абзацев',
    'paragraph_formats_comment' => 'Опции появляющиеся в выпадающем списке Форматы абзацев.',
  ],
  'tooltips' => [
    'preview_website' => 'Просмотр сайта',
  ],
  'mysettings' => [
    'menu_label' => 'Мои настройки',
    'menu_description' => 'Управление настройками учетной записи администратора.',
  ],
  'myaccount' => [
    'menu_label' => 'Мой аккаунт',
    'menu_description' => 'Управление личной информацией (имя, почта, пароль)',
    'menu_keywords' => 'безопасность логин',
  ],
  'branding' => [
    'menu_label' => 'Персонализация панели управления',
    'menu_description' => 'Управление внешним видом панели управления',
    'brand' => 'Брендирование',
    'logo' => 'Логотип',
    'logo_description' => 'Загрузите логотип для панели управления',
    'favicon' => 'Фавиконка',
    'favicon_description' => 'Загрузите фавиконку для панели управления',
    'app_name' => 'Название приложения',
    'app_name_description' => 'Это имя отображается в заголовке панели управления',
    'app_tagline' => 'Слоган приложения',
    'app_tagline_description' => 'Слоган будет отображаться на экране входа в панель управления.',
    'colors' => 'Цвета',
    'primary_color' => 'Основной цвет',
    'secondary_color' => 'Вторичный цвет',
    'accent_color' => 'Акцентный цвет',
    'login_background_type' => 'Тип фона',
    'background_flat_color' => 'Заливка цветом',
    'background_wallpaper' => 'Картинка',
    'login_page' => 'Окно входа',
    'login_image' => 'Картинка',
    'login_page_image' => 'Картинка над фоном',
    'login_image_random_autumn_images' => 'Рандомные осенние картинки',
    'login_image_custom' => 'Пользовательское изображение',
    'background_color' => 'Цвет фона',
    'background_wallpaper_image' => 'Фоновое изображение',
    'background_wallpaper_image_size' => 'Размер фона',
    'background_wallpaper_size_auto' => 'Авто',
    'background_wallpaper_size_cover' => 'Вместить в экран',
    'styles' => 'Стили',
    'custom_stylesheet' => 'Пользовательские стили',
    'navigation' => 'Навигация',
    'menu_mode' => 'Стиль меню',
    'menu_mode_inline' => 'Строчный',
    'menu_mode_text' => 'Текст',
    'menu_mode_tile' => 'Плитка',
    'menu_mode_icon' => 'Иконки',
    'menu_mode_collapsed' => 'Схлопнутый',
    'menu_mode_left' => 'Боковое',
  ],
  'backend_preferences' => [
    'menu_label' => 'Настройки панели управления',
    'menu_description' => 'Управление языком и внешним видом панели управления.',
    'region' => 'Регион',
    'code_editor' => 'Редактор кода',
    'timezone' => 'Часовой пояс',
    'timezone_comment' => 'Выводить даты в выбранном часовом поясе.',
    'locale' => 'Язык',
    'locale_comment' => 'Выберите желаемый язык панели управления.',
  ],
  'access_log' => [],
  'filter' => [
    'all' => 'все',
    'options_method_not_exists' => 'Модель класса :model должна определить метод :method() возвращающего варианты для фильтра \':filter\'.',
    'options_static_method_invalid_value' => 'Статичный метод \':method()\' в :class не возвращает правильный массив опций.',
    'date_all' => 'весь период',
    'number_all' => 'все номера',
  ],
  'import_export' => [
    'row' => 'Строка :row',
    'show_ignored_columns' => 'Показать пропущенные столбцы',
    'auto_match_columns' => 'Авто применение столбцов',
    'created' => 'Создано',
    'updated' => 'Обновлено',
    'skipped' => 'Пропущено',
    'warnings' => 'Предупреждения',
    'errors' => 'Ошибки',
    'skipped_rows' => 'Пропущенные строки',
    'upload_valid_csv' => 'Пожалуйста, загрузите валидный CSV-файл..',
    'drop_column_here' => 'Отпустите столбец здесь...',
    'ignore_this_column' => 'Игонорировать этот столбец',
    'processing_successful_line1' => 'Процесс экспорта файла завершился успешно!',
    'processing_successful_line2' => 'Теперь браузер автоматически должен начать загрузку файла.',
    'export_error' => 'Ошибка экспорта',
    'file_not_found_error' => 'Файл не найден',
    'empty_error' => 'Нет данных доступных для экспорта',
    'empty_import_columns_error' => 'Укажите некоторые столбцы для импорта.',
    'match_some_column_error' => 'Сначала сначала сопоставьте некоторые столбцы.',
    'required_match_column_error' => 'Укажите соответствующее поле :label.',
    'empty_export_columns_error' => 'Укажите некоторые столбцы для экспорта.',
    'behavior_missing_uselist_error' => 'Вы должны реализовать поведение контроллера ListController с включенной опцией \'useList\' экспорта.',
    'missing_model_class_error' => 'Укажите свойство modelClass для :type',
    'missing_column_id_error' => 'Отсутствует идентификатор столбца',
    'unknown_column_error' => 'Неизвестная колонка',
    'encoding_not_supported_error' => 'Кодировка исходного файла не распознается. Пожалуйста, выберите опцию пользовательского формата файла с правильной кодировкой для импорта файла.',
    'encodings' => [
      'utf_8' => 'UTF-8',
      'us_ascii' => 'US-ASCII',
      'iso_8859_1' => 'ISO-8859-1 (Latin-1, Western European)',
      'iso_8859_2' => 'ISO-8859-2 (Latin-2, Central European)',
      'iso_8859_3' => 'ISO-8859-3 (Latin-3, South European)',
      'iso_8859_4' => 'ISO-8859-4 (Latin-4, North European)',
      'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrillic)',
      'iso_8859_6' => 'ISO-8859-6 (Latin, Arabic)',
      'iso_8859_7' => 'ISO-8859-7 (Latin, Greek)',
      'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrew)',
      'iso_8859_0' => 'ISO-8859-9 (Latin-5, Turkish)',
      'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
      'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
      'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
      'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic)',
      'iso_8859_15' => 'ISO-8859-15 (Latin-9, Western European revision with euro sign)',
      'windows_1251' => 'Windows-1251 (CP1251)',
      'windows_1252' => 'Windows-1252 (CP1252)',
    ],
  ],
  'permissions' => [
    'manage_media' => 'Управление медиафайлами',
  ],
  'mediafinder' => [
    'label' => 'Поиск медиа',
    'no_image' => 'Невозможно найти изображение',
    'select' => 'Выбрать',
    'replace' => 'Заменить',
    'not_an_image' => 'Выбранный файл не изображение',
    'click_to_select_file' => 'Нажмите чтобы выбрать файл',
  ],
  'media' => [
    'menu_label' => 'Медиафайлы',
    'upload' => 'Загрузить',
    'move' => 'Переместить',
    'delete' => 'Удалить',
    'add_folder' => 'Создать папку',
    'search' => 'Поиск',
    'display' => 'Отобразить',
    'filter_everything' => 'Все файлы',
    'filter_images' => 'Изображения',
    'filter_video' => 'Видео',
    'filter_audio' => 'Музыка',
    'filter_documents' => 'Документы',
    'library' => 'Библиотека',
    'size' => 'Размер',
    'title' => 'Имя',
    'last_modified' => 'Последнее изменение',
    'public_url' => 'Публичный адрес',
    'click_here' => 'Нажмите здесь',
    'thumbnail_error' => 'Ошибка создания миниатюры.',
    'return_to_parent' => 'Вернуться в родительскую папку',
    'return_to_parent_label' => 'Подняться на уровень выше ..',
    'nothing_selected' => 'Ничего не выбрано.',
    'multiple_selected' => 'Выбрано несколько объектов.',
    'uploading_file_num' => 'Загрузка файлов: :number ...',
    'uploading_complete' => 'Загрузка файлов завершена!',
    'uploading_error' => 'Ошибка загрузки',
    'type_blocked' => 'Используемый тип файла блокируется по соображениям безопасности.',
    'order_by' => 'Сортировать по',
    'direction' => 'Направление сортировки',
    'direction_asc' => 'По возрастанию',
    'direction_desc' => 'По убыванию',
    'folder' => 'Папка',
    'no_files_found' => 'Ни один из файлов не удовлетворяет вашему запросу.',
    'delete_empty' => 'Пожалуйста, выберите объекты для удаления.',
    'delete_confirm' => 'Вы действительно хотите удалить выбранные объекты?',
    'error_renaming_file' => 'Ошибка изменения имени файла.',
    'new_folder_title' => 'Новая папка',
    'folder_name' => 'Название папки',
    'error_creating_folder' => 'Ошибка создания папки',
    'folder_or_file_exist' => 'Папка или файл с таким именем уже существует.',
    'move_empty' => 'Пожалуйста, выберите объекты для перемещения.',
    'move_popup_title' => 'Перемещение файлов или папок',
    'move_destination' => 'Папка назначения',
    'please_select_move_dest' => 'Пожалуйста, выберите папку назначения для перемещения.',
    'move_dest_src_match' => 'Пожалуйста, выберите другую папку.',
    'empty_library' => 'Библиотека медиафайлов пуста. Для начала загрузите файлы или создайте папки.',
    'insert' => 'Вставить',
    'crop_and_insert' => 'Обрезать и вставить',
    'select_single_image' => 'Пожалуйста, выберите одно изображение.',
    'selection_not_image' => 'Выбранный элемент не является изображением.',
    'restore' => 'Отменить все изменения',
    'resize' => 'Изменение размера...',
    'selection_mode_normal' => 'Нормальный',
    'selection_mode_fixed_ratio' => 'Фиксированное соотношение',
    'selection_mode_fixed_size' => 'Фиксированный размер',
    'height' => 'Высота',
    'width' => 'Ширина',
    'selection_mode' => 'Режим выделения',
    'resize_image' => 'Изменение размера изображения',
    'image_size' => 'Размер изображения:',
    'selected_size' => 'Выбрано:',
  ],
  'table' => [
    'add_item' => 'Добавить элемент',
  ],
  'dictionary' => [
    'key_required' => 'Ключ должен быть указан',
    'value_required' => 'Значение должно быть заполнено',
  ],
  'uploader' => [
    'uploading' => 'Загрузка файлов',
    'complete' => 'Загрузка завершена',
  ],
  'richeditor' => [
    'upload_from_computer' => 'Загрузить с компьютера',
    'embedding_code' => 'Вставить код',
    'url_required' => 'Адрес обязателен',
    'url_validation' => 'Адрес должен начинаться с http:// или https://',
    'add_image' => 'Вставить изображение',
    'add_video' => 'Вставить видео',
    'add_audio' => 'Вставить аудио',
    'add_file' => 'Вставить файл',
    'embedding_code_required' => 'Вставка кода обязательна',
    'embedding_code_invalid' => 'Пожалуйста укажите правильный HTML код',
    'embedding_code_invalid_title' => 'Неправильный код',
    'browse' => 'Просмотр медиафайлов',
    'by_url' => 'Ссылка на изображение',
  ],
];
