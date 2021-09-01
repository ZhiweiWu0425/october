<?php

return [
    'installer' => [
        'app_config_section' => '应用程序配置',
        'license_section' => '许可证密钥',
        'dependencies_section' => '安装依赖',
        'locale_select_label' => '选择语言',
        'locale_select_error' => '语言代码：代码无效，请重试',
        'app_url_label' => '应用程序 URL',
        'backend_uri_label' => '后端 URI',
        'backend_uri_comment' => '为了保护您的应用程序，请使用自定义地址来访问管理面板。',
        'license_key_label' => '许可证密钥',
        'license_key_comment' => '输入有效的许可证密钥以继续。',
        'license_thanks_comment' => '感谢您成为October CMS 的客户！',
        'license_expired_comment' => '许可证未支付或已过期。请访问 octobercms.com 获取许可证。',
        'too_many_failures_label' => '失败的尝试太多',
        'non_interactive_label' => '检测到非交互模式',
        'non_interactive_comment' => '如果您立即看到此错误，请改用这些非交互式命令。',
        'install_failed_label' => '安装失败',
        'install_failed_comment' => '请尝试手动运行这些命令。',
        'database_engine_label' => '数据库引擎',
        'database_host_label' => '数据库主机',
        'database_host_comment' => '数据库连接的主机名。',
        'database_port_label' => '数据库端口',
        'database_port_comment' => '（可选）连接端口。',
        'database_name_label' => '数据库名称',
        'database_name_comment' => '指定要使用的数据库名称。',
        'database_login_label' => '数据库登录',
        'database_login_comment' => '具有创建数据库权限的用户。',
        'database_pass_label' => '数据库密码',
        'database_pass_comment' => '指定用户的密码。',
        'database_path_label' => '数据库路径',
        'database_path_comment' => '对于基于文件的存储，输入相对于应用程序根目录的路径。',
        'migrate_database_comment' => '请使用以下命令迁移数据库',
        'visit_backend_comment' => '然后，在这个 URL 打开管理区域',
        'open_configurator_comment' => '在浏览器中打开这个应用程序',
    ],
    'app' => [
        'name' => 'October CMS',
        'tagline' => '欢迎使用October CMS！'
    ],
    'directory' => [
        'create_fail' => '不能创建目录: :name'
    ],
    'file' => [
        'create_fail' => '不能创建文件: :name'
    ],
    'combiner' => [
        'not_found' => "组合文件 ':name' 没找到."
    ],
    'resizer' => [
        'not_found' => "未找到调整器文件 ':name'。",
    ],
    'system' => [
        'name' => '系统',
        'menu_label' => '系统',
        'categories' => [
            'cms' => '内容管理',
            'misc' => '杂项',
            'logs' => '日志',
            'mail' => '邮件',
            'shop' => '商铺',
            'team' => '团队',
            'users' => '用户',
            'system' => '系统',
            'social' => '社交',
            'backend' => '后台',
            'events' => '事件',
            'customers' => '自定义',
            'my_settings' => '我的设置',
            'notifications' => '通知'
        ]
    ],
    'theme' => [
        'label' => '主题',
        'unnamed' => '未命名主题',
        'name' => [
            'label' => '主题名称',
            'help' => '主题的唯一名称，例如：RainLab.Vanilla'
        ],
    ],
    'packages' => [
        'install' => '安装包',
    ],
    'themes' => [
        'manage' => '管理主题',
        'install' => '安装主题',
        'search' => '搜索主题...',
        'installed' => '已安装主题',
        'no_themes' => '市场上没有已安装的主题。',
        'recommended' => '推荐',
        'remove_confirm' => '你确定要删除这些主题吗？',
    ],
    'plugin' => [
        'label' => '插件',
        'unnamed' => '未命名的插件',
        'name' => [
            'label' => '插件名称',
            'help' => '插件的唯一名称，例如：RainLab.Blog'
        ],
        'by_author' => '作者 :name'
    ],
    'plugins' => [
        'manage' => '管理插件',
        'install' => '安装插件',
        'install_products' => '安装产品',
        'search' => '搜索插件...',
        'installed' => '已安装插件',
        'no_plugins' => '市场中没有已安装的插件。',
        'recommended' => '推荐',
        'plugin_label' => '插件',
        'unknown_plugin' => '插件从文件系统中移除了',
        'select_label' => '选择操作...',
        'bulk_actions_label' => '批量操作',
        'check_yes' => '启用',
        'check_no' => '禁用',
        'unfrozen' => '更新已启用',
        'enabled' => '插件启用',
        'freeze' => '禁用更新',
        'unfreeze' => '启用更新',
        'enable' => '启用',
        'disable' => '禁用',
        'refresh' => '重置',
        'remove' => '移除',
        'freeze_label' => '禁用更新',
        'unfreeze_label' => '启用更新',
        'enable_label' => '启用插件',
        'disable_label' => '禁用插件',
        'refresh_label' => '重置插件数据',
        'action_confirm' => '您确定要：操作这些插件吗？',
        'freeze_success' => '已成功禁用所选插件的更新。',
        'unfreeze_success' => '为所选插件成功启用更新。',
        'enable_success' => '成功启用了这些插件',
        'disable_success' => '成功禁用了这些插件',
        'refresh_confirm' => '您确定要重置选定的插件吗？ 这将重置每个插件的数据，将其恢复到初始安装状态。',
        'refresh_success' => '成功刷新了系统中的插件',
        'remove_confirm' => '您确定要删除选定的插件吗？ 这也将删除所有相关数据。',
        'remove_success' => '已成功删除所选插件。',
    ],
    'project' => [
        'name' => '项目',
        'owner_label' => '拥有者',
        'attach' => '增加项目',
        'detach' => '删除项目',
        'none' => '没有',
        'id' => [
            'label' => '项目ID',
            'help' => '如何找到您的项目ID',
            'missing' => '请确认你想使用的项目ID。'
        ],
        'detach_confirm' => '你确定要删除这个项目吗?',
        'unbind_success' => '项目删除成功。'
    ],
    'settings' => [
        'menu_label' => '设置',
        'home_label' => '显示所有设置',
        'not_found' => '无法找到指定的设置。',
        'missing_model' => '设置页面缺少模型定义。',
        'update_success' => ':name 设置已更新',
        'return' => '返回系统设置',
        '搜索' => '搜索',
        'find_setting' => '查找设置...',
    ],
    'mail' => [
        'log_file' => '日志文件',
        'menu_label' => '邮件配置',
        'menu_description' => '管理电子邮件配置。',
        'general' => 'general',
        'method' => '邮件方法',
        'sender_name' => '发件人姓名',
        'sender_email' => '发件人电子邮件',
        'php_mail' => 'PHP 邮件',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP 地址',
        'smtp_authorization' => '需要 SMTP 授权',
        'smtp_authorization_comment' => '如果您的 SMTP 服务器需要授权，请使用此复选框。',
        'smtp_username' => '用户名',
        'smtp_password' => '密码',
        'smtp_port' => 'SMTP 端口',
        'smtp_ssl' => '需要 SSL 连接',
        'smtp_encryption' => 'SMTP 加密协议',
        'smtp_encryption_none' => '不加密',
        'smtp_encryption_tls' => 'TLS',
        'smtp_encryption_ssl' => 'SSL',
        'sendmail' => '发送邮件',
        'sendmail_path' => '邮件发送路径',
        'sendmail_path_comment' => '请指定邮件发送程序的路径。',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Mailgun 域',
        'mailgun_domain_comment' => '请指定Mailgun域名。',
        'mailgun_secret' => 'Mailgun 密钥',
        'mailgun_secret_comment' => '输入您的 Mailgun API 密钥。',
        'mandrill' => 'Mandrill',
        'mandrill_secret' => 'Mandrill 密钥',
        'mandrill_secret_comment' => '输入您的 Mandrill API 密钥。',
        'ses' => 'SES',
        'ses_key' => 'SES 密钥',
        'ses_key_comment' => '输入您的 SES API 密钥',
        'ses_secret' => 'SES 密钥',
        'ses_secret_comment' => '输入您的 SES API 密钥',
        'ses_region' => 'SES 区域',
        'ses_region_comment' => '输入您的 SES 区域（例如 us-east-1）',
        'sparkpost' => 'sparkpost',
        'sparkpost_secret' => 'SparkPost 秘密',
        'sparkpost_secret_comment' => '输入您的 SparkPost API 密钥',
        'drivers_hint_header' => '未安装驱动程序',
        'drivers_hint_content' => '此邮件方法需要安装插件 ":plugin" 才能发送邮件。',
    ],
    'mail_templates' => [
        'menu_label' => '邮件模板',
        'menu_description' => '修改发送给用户和管理员的邮件模板，管理电子邮件布局。',
        'new_template' => '新模板',
        'new_layout' => '新布局',
        'new_partial' => '新部件',
        'template' => '模板',
        'templates' => '模板',
        'partial' => '部件',
        'partials' => '部件',
        'menu_layouts_label' => '邮件布局',
        'menu_partials_label' => '邮件部件​​',
        'layout' => '布局',
        'layouts' => '布局',
        'no_layout' => '-- 无布局--',
        'name' => '名称',
        'name_comment' => '指向这个模板的唯一名称',
        'code' => '代码',
        'code_comment' => '指向这个模板的唯一代码',
        'subject' => '主题',
        'subject_comment' => '电子邮件主题',
        'description' => '描述',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => '纯文本',
        'test_send' => '发送测试消息',
        'test_success' => '测试消息已发送。',
        'test_confirm' => '向 :email 发送测试消息。继续吗？',
        'creating' => '正在创建模板...',
        'creating_layout' => '创建布局...',
        'saving' => '保存模板...',
        ' Saving_layout' => '保存布局...',
        'delete_confirm' => '删除这个模板？',
        'delete_layout_confirm' => '要删除这个布局吗？',
        'deleting' => '删除模板...',
        'deleting_layout' => '正在删除布局...',
        'sending' => '发送测试消息...',
        'return' => '返回模板列表',
        'options' => '选项',
        'disable_auto_inline_css' => '禁用自动内联 CSS',
    ],
    'mail_brand' => [
        'menu_label' => '自定义邮件模板',
        'menu_description' => '修改邮件模板的颜色和外观。',
        'page_title' => '自定义邮件外观',
        'sample_template' => [
            'heading' => '标题',
            'paragraph' => '鸿蒙，是中国古代汉族传说中的一个时代，传说在开天辟地之前，世界是一团混沌的元气，这种自然的元气叫做鸿蒙，因此把那个时代称作<a>鸿蒙时代</a>，后来此一词也常被用来泛指称远古时代',
            'table' => [
                'item' => '项目',
                'description' => '描述',
                'price' => '价格',
                'centered' => '居中',
                'right_aligned' => '右对齐',
            ],
            'buttons' => [
                'primary' => '主要按钮',
                'positive' => '正面按钮',
                'negative' => '否定按钮',
            ],
            'panel' => '这个面板有多棒?',
            'more' => '更多文字',
            'promotion' => '优惠券代码：我是武志伟',
            'subcopy' => '这是电子邮件的副本',
            'thanks' => '谢谢, October CMS',
        ],
        'fields' => [
            '_section_background' => '背景',
            'body_bg' => '主体 背景',
            'content_bg' => '内容背景',
            'content_inner_bg' => '内部内容背景',
            '_section_buttons' => '按钮',
            'button_text_color' => '按钮文本颜色',
            'button_primary_bg' => '主要 按钮背景色',
            'button_positive_bg' => '正面 按钮背景色',
            'button_negative_bg' => '否定 按钮背景色',
            '_section_type' => '排版',
            'header_color' => '顶部区域颜色',
            'heading_color' => '标题颜色',
            'text_color' => '文字颜色',
            'link_color' => '链接颜色',
            'footer_color' => '底部区域颜色',
            '_section_borders' => '边框',
            'body_border_color' => '主体 边框颜色',
            'subcopy_border_color' => '副本 边框颜色',
            'table_border_color' => '表格 边框颜色',
            '_section_components' => '组件',
            'panel_bg' => '面板 背景色',
            'promotion_bg' => '推广窗 背景色',
            'promotion_border_color' => '推广窗 边框颜色',
        ],
    ],
    'install' => [
        'project_label' => '加入项目',
         'plugin_label' => '安装插件',
         'theme_label' => '安装主题',
         'missing_plugin_name' => '请指定要安装的插件名称。',
         'missing_theme_name' => '请指定要安装的主题名称。',
         'install_completing' => '完成安装过程',
         'install_success' => '插件安装成功',
    ],
    'updates' => [
        'title' => '管理更新',
        'name' => '软件更新',
        'menu_label' => '系统更新',
        'menu_description' => '更新系统模块和插件。',
        'return_link' => '返回系统更新',
        'check_label' => '检查更新',
        'retry_label' => '重试',
        'plugin_name' => '名字',
        'plugin_code' => '代码',
        'plugin_description' => '描述',
        'plugin_version' => '版本',
        'plugin_latest' => '最新',
        'plugin_author' => '作者',
        'plugin_not_found' => '未找到插件',
        'plugin_version_not_found' => '未找到插件版本',
        'theme_not_found' => '找不到主题',
        'core_current_build' => '当前版本',
        'core_latest_build' => '最新版本',
        'core_view_changelog' => '查看变更日志',
        'core_build' => '版本 :build',
        'core_build_help' => '最新版本可用。',
        'core_downloading' => '下载应用程序文件',
        'core_extracting' => '解压应用程序文件',
        'core_set_build' => '设置版本号',
        'changelog' => '变更日志',
        'changelog_view_details' => '查看详情',
        'plugins' => '插件',
        'themes' => '主题',
        'disabled' => '禁用',
        'plugin_downloading' => '下载插件：:name',
        'plugin_removing' => '正在删除插件：:name',
        'plugin_extracting' => '解压插件：:name',
        'plugin_version_none' => '新插件',
        'plugin_current_version' => '当前版本',
        'theme_new_install' => '新主题安装。',
        'theme_downloading' => '下载主题：:name',
        'theme_removing' => '移除主题：:name',
        'theme_extracting' => '解压主题：:name',
        'update_label' => '更新软件',
        'update_completing' => '完成更新过程',
        'update_loading' => '正在加载可用更新...',
        'update_success' => '更新过程完成',
        'update_failed_label' => '更新失败',
        'force_label' => '强制更新',
        'found' => [
            'label' => '发现新的更新!',
            'help' => '单击更新软件开始更新过程.',
        ],
        'none' => [
            'label' => '没有更新',
            'help' => '没有发现新的更新',
        ],
        'important_action' => [
            'empty' => '选择操作',
            'confirm' => '确认更新',
            'skip' => '跳过这个插件（仅本次）',
            'ignore' => '跳过这个插件（总是）',
        ],
        'important_action_required' => '需要选择操作',
        'important_view_guide' => '查看升级指南',
        'important_view_release_notes' => '查看发行说明',
        'important_alert_text' => '有些更新需要您注意。',
        'details_title_plugin' => '插件详情',
        'details_title_theme' => '主题详情',
        'details_view_homepage' => '查看主页',
        'details_readme' => '文档',
        'details_readme_missing' => '没有提供文档。',
        'details_changelog' => '更新日志',
        'details_changelog_missing' => '没有提供更新日志。',
        'details_upgrades' => '升级指南',
        'details_upgrades_missing' => '没有提供升级指南。',
        'details_licence' => '许可证',
        'details_view_licence' => '查看许可证',
        'details_licence_missing' => '没有提供许可证。',
        'details_current_version' => '当前版本',
        'details_author' => '作者',
    ],
    'market' => [
        'menu_label' => '应用市场',
        'menu_description' => '管理和安装插件和主题',
        'content_loading' => '正在加载...',
    ],
    'server' => [
        'connect_error' => '连接到服务器时出错。',
         'response_not_found' => '找不到更新服务器。',
         'response_invalid' => '服务器返回异常。',
         'response_empty' => '服务器返回为空。',
         'file_error' => '服务器下载文件失败。',
         'file_corrupt' => '服务器下载文件校验失败。',
    ],
    'behavior' => [
        'missing_property' => '类 :class 必须定义 :behavior 行为使用的属性 $:property。',
    ],
    'config' => [
        'not_found' => '无法找到为 :location 定义的配置文件 :file。',
        'required' => ":location 中使用的配置必须提供一个值':property'",
    ],
    'zip' => [
        'extract_failed' => "不能解压文件 ':file'。",
    ],
    'event_log' => [
        'hint' => '此日志显示应用程序中发生的潜在错误列表，例如异常和调试信息。',
         'menu_label' => '事件日志',
         'menu_description' => '查看系统日志消息及其记录的时间和详细信息。',
         'empty_link' => '清空事件日志',
         'empty_loading' => '清空事件日志...',
         'empty_success' => '事件日志已清空',
         'return_link' => '返回事件日志',
         'id' => 'ID',
         'id_label' => '事件 ID',
         'created_at' => '日期和时间',
         'message' => '消息',
         'level' => '级别',
         'preview_title' => '事件',
    ],
    'request_log' => [
        'hint' => '这个日志显示了需要注意的浏览器请求. 比如如果一个访问者打开一个没有的CMS页面, 一条返回状态404的记录被创建。',
        'menu_label' => '请求日志',
        'menu_description' => '查看错误或重定向的请求，例如找不到页面 (404)。',
        'empty_link' => '清空请求日志',
        'empty_loading' => '清空请求日志...',
        'empty_success' => '成功清空请求日志',
        'return_link' => '返回请求日志',
        'id' => 'ID',
        'id_label' => '日志 ID',
        'count' => 'Counter',
        'referer' => '来源',
        'url' => 'URL',
        'status_code' => '状态',
        'preview_title' => '请求',
    ],
    'permissions' => [
        'name' => '系统',
        'manage_system_settings' => '管理系统设置',
        'manage_software_updates' => '管理软件更新',
        'access_logs' => '查看系统日志',
        'manage_mail_templates' => '管理邮件模板',
        'manage_mail_settings' => '管理邮件设置',
        'manage_other_administrators' => '管理其他管理员',
        'manage_preferences' => '管理后端首选项',
        'manage_editor' => '管理代码编辑器首选项',
        'view_the_dashboard' => '查看仪表板',
        'manage_default_dashboard' => '管理默认仪表板',
        'manage_branding' => '自定义后台',
    ],
    'log' => [
        'menu_label' => '日志设置',
        'menu_description' => '指定哪些区域应该使用日志记录。',
        'default_tab' => '日志',
        'log_events' => '系统日志',
        'log_events_comment' => '除了基于文件的日志之外，还将系统事件存储在数据库中。',
        'log_requests' => '异常请求日志',
        'log_requests_comment' => '保存需要注意的浏览器访问日志, 例如 404 错误等。',
        'log_theme' => '主题变更日志',
        'log_theme_comment' => '保存后台对主题文件的修改日志。',
    ],
    'media' => [
        'invalid_path' => "指定的文件路径无效: ':path'.",
        'folder_size_items' => '个数',
    ],
    'page' => [
        'custom_error' => [
            'label' => '页面错误',
            'help' => "抱歉，页面因为一些错误导致无法显示。",
        ],
        'invalid_token' => [
            'label' => '非法安全令牌',
        ],
        'maintenance' => [
            'label' => "我们马上回来！",
            'help' => "我们目前正在停机维护，请稍后回来查看！",
            'message' => '通知:',
            'available_at' => '稍后再试:',
        ],
    ],
    'pagination' => [
        'previous' => '上一页',
        'next' => '下一页'
    ],
];
