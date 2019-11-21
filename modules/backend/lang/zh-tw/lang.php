<?php

return [
    'auth' => [
        'title' => '管理介面'
    ],
    'field' => [
        'invalid_type' => '錯誤的字串類型 :type',
        'options_method_not_exists' => "模型 :model 必須定義一個返回 ':field' 表單字串選項的方法 :method()。"
    ],
    'widget' => [
        'not_registered' => "元件 ':name' 還沒註冊",
        'not_bound' => "元件 ':name' 沒綁到控制器"
    ],
    'page' => [
        'untitled' => '未命名',
        'access_denied' => [
            'label' => '拒絕訪問',
            'help' => "您沒有訪問這個頁面需要的權限.",
            'cms_link' => '返回管理介面'
        ]
    ],
    'partial' => [
        'not_found_name' => "元件 ':name' 找不到."
    ],
    'account' => [
        'sign_out' => '登出',
        'login' => '登入',
        'reset' => '重置',
        'restore' => '還原',
        'login_placeholder' => '登入',
        'password_placeholder' => '密碼',
        'forgot_password' => '忘記您的密碼?',
        'enter_email' => '輸入您的email',
        'enter_login' => '輸入帳號',
        'email_placeholder' => 'mail',
        'enter_new_password' => '輸入新密碼',
        'password_reset' => '密碼重置',
        'restore_success' => '密碼重置的郵件已發送到您的電子信箱',
        'restore_error' => "找不到使用者 ':login'",
        'reset_success' => '您的密碼已經重置成功. 您現在可以登入了',
        'reset_error' => '密碼重置失敗. 請重試!',
        'reset_fail' => '不能重置您的密碼!',
        'apply' => '套用',
        'cancel' => '取消',
        'delete' => '刪除',
        'ok' => 'OK'
    ],
    'dashboard' => [
        'menu_label' => '儀表板',
        'widget_label' => '元件',
        'widget_width' => '寬度',
        'full_width' => '全部寬度',
        'add_widget' => '新增元件',
        'widget_inspector_title' => '元件設定',
        'widget_inspector_description' => '設定報表元件',
        'widget_columns_label' => '寬度 :columns',
        'widget_columns_description' => '元件寬度, 1 到 10',
        'widget_columns_error' => '請輸入元件寬度, 1 到 10',
        'columns' => '{1} 欄|[2,Inf] 欄',
        'widget_new_row_label' => '強制新列',
        'widget_new_row_description' => '把元件放到新列',
        'widget_title_label' => '元件標題',
        'widget_title_error' => '需要元件標題',
        'status' => [
            'widget_title_default' => '系統狀態',
            'update_available' => '{0} 更新可用!|{1} 更新可用!|[2,Inf] 更新可用!'
        ]
    ],
    'user' => [
        'name' => '管理員',
        'menu_label' => '管理員',
        'menu_description' => '管理管理介面管理員使用者, 群組和權限',
        'list_title' => '管理',
        'new' => '新管理員',
        'login' => '登入',
        'first_name' => '名',
        'last_name' => '姓',
        'full_name' => '全名',
        'mail' => '郵件',
        'groups' => '團隊',
        'groups_comment' => '指定這個人屬於哪個群組',
        'avatar' => '頭像',
        'password' => '密碼',
        'password_confirmation' => '確認密碼',
        'permissions' => '權限',
        'account' => '帳號',
        'superuser' => '超級使用者',
        'superuser_comment' => '選取並允許這個人訪問全部區域',
        'send_invite' => '發送邀請郵件',
        'send_invite_comment' => '發送一封包含使用者名和密碼的歡迎郵件',
        'delete_confirm' => '您真的想要刪除這個管理員?',
        'return' => '返回管理員列表',
        'allow' => '允許',
        'inherit' => '繼承',
        'deny' => '拒絕',
        'group' => [
            'name' => '群組',
            'name_field' => '名字',
            'description_field' => '描述',
            'is_new_user_default_field' => '預設增加新管理員到這個群組',
            'code_field' => '代碼',
            'code_comment' => '如果您想訪問 API, 請輸入唯一碼',
            'menu_label' => '群組',
            'list_title' => '管理群組',
            'new' => '新管理群組',
            'delete_confirm' => '您真的想要刪除這個管理群組?',
            'return' => '返回群組列表',
        ],
        'preferences' => [
            'not_authenticated' => '沒有認證使用者載入或儲存設定'
        ]
    ],
    'list' => [
        'default_title' => '列表',
        'search_prompt' => '搜尋...',
        'no_records' => '目前頁面中沒有記錄',
        'missing_model' => ':class 中的列表沒有定義好的模型。',
        'missing_column' => '沒有 :columns 的欄定義',
        'missing_columns' => ':class 中使用的列表沒有定義好的欄',
        'missing_definition' => "列表不包含 ':field' 欄.",
        'behavior_not_ready' => '列表沒有初始化, 確認您的控制器中調用了makeLists()',
        'invalid_column_datetime' => "欄值 ':column' 不是時間對象, 缺少了 \$dates 在模型中的引用嗎?",
        'pagination' => '顯示記錄: :from-:to :total',
        'prev_page' => '之前頁',
        'next_page' => '下一頁',
        'loading' => '載入中...',
        'setup_title' => '建立列表',
        'setup_help' => '使用多選框選擇您想在列表中看到的欄. 您可以通過拖拽調整欄的位置',
        'records_per_page' => '每頁的記錄',
        'records_per_page_help' => '選擇每頁想顯示的記錄數量. 請注意一頁中太多記錄可能會降低性能',
        'delete_selected' => '刪除選擇的',
        'delete_selected_empty' => '沒有需要刪除的記錄',
        'delete_selected_confirm' => '刪除選取的記錄?',
        'delete_selected_success' => '成功刪除選擇的記錄',
    ],
    'fileupload' => [
        'attachment' => '附件',
        'help' => '給附件新增標題和描述',
        'title_label' => '標題',
        'description_label' => '描述'
    ],
    'form' => [
        'create_title' => '新 :name',
        'update_title' => '編輯 :name',
        'preview_title' => '預覽 :name',
        'create_success' => ':name 建立成功',
        'update_success' => ':name 更新成功',
        'delete_success' => ':name 刪除成功',
        'missing_id' => '表單記錄ID沒有指定',
        'missing_model' => ':class 中使用的表單沒有定義的model',
        'missing_definition' => "表單不包含字串 ':field'.",
        'not_found' => '表單 ID :id 找不到',
        'action_confirm' => '您確定?',
        'create' => '建立',
        'create_and_close' => '建立和關閉',
        'creating' => '建立中...',
        'creating_name' => '建立 :name...',
        'save' => '儲存',
        'save_and_close' => '儲存和關閉',
        'saving' => '儲存...',
        'saving_name' => '儲存 :name...',
        'delete' => '刪除',
        'deleting' => '刪除中...',
        'deleting_name' => '刪除 :name...',
        'reset_default' => '重置到預設',
        'resetting' => '重置',
        'resetting_name' => '重置 :name',
        'undefined_tab' => '雜項',
        'field_off' => '關',
        'field_on' => '開',
        'add' => '增加',
        'apply' => '應用',
        'cancel' => '取消',
        'close' => '關閉',
        'confirm' => '確認',
        'reload' => '重新載入',
        'ok' => 'OK',
        'or' => '或',
        'confirm_tab_close' => '您真的想要關閉這個標籤嗎? 未儲存的改變會丟失',
        'behavior_not_ready' => '表單還沒初始化, 確保您調用了控制器中的 initForm()',
        'preview_no_files_message' => '檔案沒有上傳',
        'select' => '選擇',
        'select_all' => 'all',
        'select_none' => 'none',
        'select_placeholder' => '請選擇',
        'insert_row' => '插入行',
        'delete_row' => '刪除行',
        'concurrency_file_changed_title' => '檔案異動',
        'concurrency_file_changed_description' => "您正在編輯的檔案正在被其他使用者修改. 您可以重新載入或覆蓋硬碟上的檔案."
    ],
    'relation' => [
        'missing_config' => "關聯沒有':config'的設定檔案.",
        'missing_definition' => "關聯不包含 ':field' 的定義.",
        'missing_model' => "用於 :class 的關聯沒有定義好的model.",
        'invalid_action_single' => "這個操作不能在單一關聯上執行.",
        'invalid_action_multi' => "這個操作不能在多重關聯上執行.",
        'help' => "點選增加",
        'related_data' => "相關的 :name",
        'add' => "增加",
        'add_selected' => "增加選取的",
        'add_a_new' => "增加一個新的 :name",
        'link_selected' => "關聯選取",
        'link_a_new' => "關聯一個新的 :name",
        'cancel' => "取消",
        'close' => "關閉",
        'add_name' => "增加 :name",
        'create' => "建立",
        'create_name' => "建立 :name",
        'update' => "更新",
        'update_name' => "更新 :name",
        'preview' => "預覽",
        'preview_name' => "預覽 :name",
        'remove' => "移除",
        'remove_name' => "移除 :name",
        'delete' => "刪除",
        'delete_name' => "刪除 :name",
        'delete_confirm' => "您確定?",
        'link' => "關聯",
        'link_name' => "關聯 :name",
        'unlink' => "取消關聯",
        'unlink_name' => "取消關聯 :name",
        'unlink_confirm' => "您確定?",
    ],
    'model' => [
        'name' => 'Model',
        'not_found' => "Model ':class' ID :id 找不到",
        'missing_id' => '沒有指定的ID搜尋model記錄',
        'missing_relation' => "Model ':class' 不包含 ':relation'.",
        'missing_method' => "Model ':class' 不包含 ':method'.",
        'invalid_class' => "Model :model 在 :class 中是錯誤的, 必須繼承 \\Model class.",
        'mass_assignment_failed' => "針對Model屬性':attribute'的大量賦值失敗."
    ],
    'warnings' => [
        'tips' => '系統設定技巧',
        'tips_description' => '您需要注意那些issue, 以使系統設定正確',
        'permissions'  => '目錄 :name 或子目錄對PHP不可寫. 請對這個目錄上的webserver設定正確的權限',
        'extension' => 'PHP外掛 :name 沒安裝. 請安裝這個庫並且啟用外掛'
    ],
    'editor' => [
        'menu_label' => '代碼編輯器選項',
        'menu_description' => '自訂代碼編輯器選項, 例如字體大小和顏色主題',
        'font_size' => '字體大小',
        'tab_size' => '標籤大小',
        'use_hard_tabs' => '使用tabs縮進',
        'code_folding' => '代碼摺疊',
        'word_wrap' => '自動換行',
        'highlight_active_line' => '醒目顯示操作中的行',
        'show_invisibles' => '顯示隱藏字元',
        'show_gutter' => '顯示gutter',
        'theme' => '色彩主題'
    ],
    'tooltips' => [
        'preview_website' => '預覽網站'
    ],
    'mysettings' => [
        'menu_label' => '我的設定',
        'menu_description' => '設定涉及到您的管理帳號'
    ],
    'myaccount' => [
        'menu_label' => '我的帳號',
        'menu_description' => '更新您的帳號細節, 例如名字, 郵件地址和密碼',
        'menu_keywords' => '安全登入'
    ],
    'branding' => [
        'menu_label' => '自訂管理介面',
        'menu_description' => '自訂管理區域, 例如名字, 顏色和logo',
        'brand' => '品牌',
        'logo' => 'Logo',
        'logo_description' => '上傳自訂logo到管理介面',
        'app_name' => '網站名稱',
        'app_name_description' => '這個名稱顯示在管理介面的標題區域',
        'app_tagline' => '網站標語',
        'app_tagline_description' => '標語顯示在管理介面的登入介面',
        'colors' => '顏色',
        'primary_color' => '主要 color',
        'secondary_color' => '次要 color',
        'accent_color' => 'Accent color',
        'styles' => '樣式',
        'custom_stylesheet' => '自訂樣式'
    ],
    'backend_preferences' => [
        'menu_label' => '管理介面設定',
        'menu_description' => '管理您的管理介面設定, 例如希望使用的語言。',
        'locale' => '語言',
        'locale_comment' => '選擇您希望使用的本地語言。'
    ],
    'access_log' => [
        'hint' => '這個log顯示了管理員成功登入的訊息. 記錄保持:days天。',
        'menu_label' => '訪問日誌',
        'menu_description' => '查看成功登入管理介面使用者日誌。',
        'created_at' => '日期 & 時間',
        'login' => '登入',
        'ip_address' => 'IP地址',
        'first_name' => '名',
        'last_name' => '姓',
        'mail' => 'Email'
    ],
    'filter' => [
      'all' => '全部'
    ],
    'permissions' => [
        'manage_media' => 'Upload and manage media contents - images, videos, sounds, documents'
    ],
    'mediafinder' => [
        'label' => 'Media Finder',
        'default_prompt' => 'Click the %s button to find a media item'
    ],
    'media' => [
        'menu_label' => '媒體',
        'upload' => '上傳',
        'move' => '移動',
        'delete' => '刪除',
        'add_folder' => '增加檔案夾',
        'search' => '搜尋',
        'display' => '顯示',
        'filter_everything' => '所有',
        'filter_images' => '圖片',
        'filter_video' => '視頻',
        'filter_audio' => '音頻',
        'filter_documents' => '文檔',
        'library' => '庫',
        'size' => '大小',
        'title' => '標題',
        'last_modified' => '最近修改',
        'public_url' => '公開URL',
        'click_here' => '點選這裡',
        'thumbnail_error' => '生產縮略圖錯誤.',
        'return_to_parent' => '返回上層檔案夾',
        'return_to_parent_label' => '返回 ..',
        'nothing_selected' => '沒有選中.',
        'multiple_selected' => '多選.',
        'uploading_file_num' => '上傳 :number 檔案...',
        'uploading_complete' => '上傳完畢',
        'order_by' => '排序',
        'folder' => '檔案夾',
        'no_files_found' => '沒找到您請求的檔案.',
        'delete_empty' => '請選擇刪除項.',
        'delete_confirm' => '您是否想要刪除選中項?',
        'error_renaming_file' => '重命名錯誤.',
        'new_folder_title' => '新檔案',
        'folder_name' => '檔案夾名',
        'error_creating_folder' => '新建檔案夾錯誤',
        'folder_or_file_exist' => '檔案夾或檔案已經存在.',
        'move_empty' => '請選擇移動項.',
        'move_popup_title' => '移動檔案或檔案夾',
        'move_destination' => '目標檔案夾',
        'please_select_move_dest' => '請選擇目標檔案夾.',
        'move_dest_src_match' => '請選擇另一個目標檔案夾.',
        'empty_library' => '媒體庫是空的. 從上傳檔案或建立檔案夾開始.',
        'insert' => '插入',
        'crop_and_insert' => '裁剪並插入',
        'select_single_image' => '請選擇一張圖片.',
        'selection_not_image' => '選擇的不是一張圖片.',
        'restore' => '取消所有更改',
        'resize' => '調整大小...',
        'selection_mode_normal' => '正常',
        'selection_mode_fixed_ratio' => '固定比例',
        'selection_mode_fixed_size' => '固定大小',
        'height' => '高度',
        'width' => '寬度',
        'selection_mode' => '選擇模式',
        'resize_image' => '調整圖片',
        'image_size' => '圖片大小:',
        'selected_size' => '選中:'
    ]
];
