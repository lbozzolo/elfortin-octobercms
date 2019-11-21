<?php

return [
    'auth' => [
        'title' => 'Khu vực quản trị'
    ],
    'field' => [
        'invalid_type' => 'Loại Field không hợp lệ :type.',
        'options_method_invalid_model' => "Thuộc tính ':field' không đưa ra được model hợp lệ. Hãy thử chỉ định phương pháp tùy chọn cho model :model một cách rõ ràng.",
        'options_method_not_exists' => "Model class :model phải khai báo :method() trả về tùy chọn cho trường ':field'."
    ],
    'widget' => [
        'not_registered' => "Tên của widget class ':name' chưa được đăng ký",
        'not_bound' => "Widget với tên class ':name' đã không bị ràng buộc với controller"
    ],
    'page' => [
        'untitled' => 'Không có tiêu đề',
        'access_denied' => [
            'label' => 'Truy cập bị chặn',
            'help' => "Bạn không đủ quyền để xem trang này.",
            'cms_link' => 'Quay lại trang quản trị'
        ],
        'no_database' => [
            'label' => 'Không tìm thấy Database',
            'help' => "Bắt buộc phải có 1 database để truy cập vào trang quản trị. Kiểm tra lại cấu hình database và migrated trước khi thử lại.",
            'cms_link' => 'Quay lại trang chủ'
        ],
        'invalid_token' => [
            'label' => 'Security token không hợp lệ'
        ]
    ],
    'partial' => [
        'not_found_name' => "Không tìm thấy partial ':name'."
    ],
    'account' => [
        'signed_in_as' => 'Đã đăng nhập với :full_name',
        'sign_out' => 'Đăng xuất',
        'login' => 'Đăng nhập',
        'reset' => 'Reset',
        'restore' => 'Khôi phục',
        'login_placeholder' => 'đăng nhập',
        'password_placeholder' => 'mật khẩu',
        'remember_me' => 'Giữ trạng thái đăng nhập',
        'forgot_password' => 'Quên mật khẩu?',
        'enter_email' => 'Nhập mail của bạn',
        'enter_login' => 'Tên đăng nhập',
        'email_placeholder' => 'mail',
        'enter_new_password' => 'Nhập mật khẩu mới',
        'password_reset' => 'Lấy lại mật khẩu',
        'restore_success' => 'Một tin nhắn đã được gửi vào mail của bạn. Vui lòng làm theo hướng dẫn',
        'restore_error' => "Không tìm thấy người dùng có tên ':login'",
        'reset_success' => 'Đã đặt lại mật khẩu. Bạn có thể đăng nhập ngay bây giờ',
        'reset_error' => 'Dữ liệu khôi phục mật khẩu không hợp lệ. Vui lòng thử lại!',
        'reset_fail' => 'Không thể đặt lại mật khẩu của bạn!',
        'apply' => 'Áp dụng',
        'cancel' => 'Bỏ qua',
        'delete' => 'Xóa',
        'ok' => 'OK'
    ],
    'dashboard' => [
        'menu_label' => 'Bảng điều khiển chính',
        'widget_label' => 'Widget',
        'widget_width' => 'chiều rộng',
        'full_width' => 'rộng toàn màn hình',
        'manage_widgets' => 'Quản lý widgets',
        'add_widget' => 'Thêm mới widget',
        'widget_inspector_title' => 'Cấu hình widget',
        'widget_inspector_description' => 'Cấu hình widget',
        'widget_columns_label' => 'Độ rộng :columns',
        'widget_columns_description' => 'Độ rộng của widget, là một số nguyên trong khoảng 1 đến 10.',
        'widget_columns_error' => 'Vui lòng nhập vào độ rộng của widget là một số nguyên trong khoảng 1 đến 10.',
        'columns' => '{1} cột|[2,Inf] cột',
        'widget_new_row_label' => 'Một hàng mới',
        'widget_new_row_description' => 'Đẩy widget thành 1 hàng mới',
        'widget_title_label' => 'Tên Widget',
        'widget_title_error' => 'Tên của widget là bắt buộc',
        'reset_layout' => 'Reset layout',
        'reset_layout_confirm' => 'Reset  layout về mặc định?',
        'reset_layout_success' => 'Layout đã được reset',
        'make_default' => 'Đặt thành mặc định',
        'make_default_confirm' => 'Đặt layout hiện tại thành mặc định?',
        'make_default_success' => 'Layout hiện tại đã trở thành layout mặc định',
        'collapse_all' => 'Thu gọn tất cả',
        'expand_all' => 'Mở rộng tất cả',
        'status' => [
            'widget_title_default' => 'Tình trạng hệ thống',
            'update_available' => '{0} cập nhật có sãn!|{1} cập nhật có sẵn!|[2,Inf] cập nhật có sẵn!',
            'updates_pending' => 'Đang chờ cập nhật phần mềm',
            'updates_nil' => 'Phần mềm đã được cập nhật',
            'updates_link' => 'Cập nhật',
            'warnings_pending' => 'Một số vấn đề cần chú ý',
            'warnings_nil' => 'Không có cảnh báo nào',
            'warnings_link' => 'Chi tiết',
            'core_build' => 'Phiên bản hệ thống',
            'event_log' => 'Nhật ký các sự kiện',
            'request_log' => 'Nhật ký các request thất bại',
            'app_birthday' => 'Lần đăng nhập gần nhất',
        ],
        'welcome' => [
            'widget_title_default' => 'Xin chào',
            'welcome_back_name' => 'Chào mừng :name quay trở lại :app.',
            'welcome_to_name' => 'Chào mừng :name đến với :app.',
            'first_sign_in' => 'Đây là lần đầu tiên bạn đang nhập vào hệ thống.',
            'last_sign_in' => 'Lần cuối bạn đăng nhập vào lúc',
            'view_access_logs' => 'Xem nhật ký các lần đăng nhập',
            'nice_message' => 'Chúc bạn một ngày vui vẻ!',
        ]
    ],
    'user' => [
        'name' => 'Administrator',
        'menu_label' => 'Administrators',
        'menu_description' => 'Quản lý các administrator, nhóm quản trị và quyền truy cập.',
        'list_title' => 'Quản lý Administrators',
        'new' => 'Thêm mới Administrator',
        'login' => 'Tên đăng nhập',
        'first_name' => 'Họ',
        'last_name' => 'Tên',
        'full_name' => 'Tên đầy đủ',
        'mail' => 'Email',
        'role_field' => 'Role',
        'role_comment' => 'Các Role định nghĩa sẵn một số quyền của người dùng, nó có thể bị ghi đè bởi cấp độ của người dùng trong tab quyền hạn',
        'groups' => 'Nhóm quản trị',
        'groups_comment' => 'Chỉ định nhóm quản trị cho người dùng',
        'avatar' => 'Avatar',
        'password' => 'Mật khẩu',
        'password_confirmation' => 'Nhập lại mật khẩu',
        'permissions' => 'Các quyền truy cập',
        'account' => 'Tài khoản',
        'superuser' => 'Super User',
        'superuser_comment' => 'Super User có thể truy cập không giới hạn vào tất cả mọi nơi của hệ thống. Super User có thể quản lý, thêm mới các user khác ',
        'send_invite' => 'Gửi mail chào mừng đến user',
        'send_invite_comment' => 'Gửi một tin nhắn chào mừng đến user với thông tin đăng nhập và mật khẩu',
        'delete_confirm' => 'Xóa administrator này?',
        'return' => 'Quay lại danh sách admin',
        'allow' => 'Cho phép',
        'inherit' => 'Inherit',
        'deny' => 'Không cho phép',
        'activated' => 'Đã active',
        'last_login' => 'Lần cuối đăng nhập',
        'created_at' => 'Tạo lúc',
        'updated_at' => 'Chỉnh sửa vào lúc',
        'group' => [
            'name' => 'Nhóm quản trị',
            'name_field' => 'Tên',
            'name_comment' => 'Tên được hiển thị trong danh sách nhóm',
            'description_field' => 'Mô tả',
            'is_new_user_default_field_label' => 'Nhóm mặc định',
            'is_new_user_default_field_comment' => 'Khi thêm mới administrators mặc định sẽ vào nhóm này',
            'code_field' => 'Code',
            'code_comment' => 'Nhập mã code không được trùng lặp nếu bạn muốn truy cập group objectuop bằng API',
            'menu_label' => 'Quản lý các nhóm',
            'list_title' => 'Quản lý các nhóm',
            'new' => 'Nhóm mới',
            'delete_confirm' => 'Xóa nhóm này?',
            'return' => 'Quay lại danh sách nhóm',
            'users_count' => 'Số user'
        ],
        'role' => [
            'name' => 'Role',
            'name_field' => 'Tên Role',
            'name_comment' => 'Tên hiển thị trong danh sách Role.',
            'description_field' => 'Mô tả',
            'code_field' => 'Code',
            'code_comment' => 'Nhập mã code không được trùng lặp nếu bạn muốn truy cập group objectuop bằng API.',
            'menu_label' => 'Quản lý các Role',
            'list_title' => 'Quản lý các Role',
            'new' => 'Thêm mới Role',
            'delete_confirm' => 'Xóa role này?',
            'return' => 'Quay lại trang  danh sách role',
            'users_count' => 'Số user'
        ],
        'preferences' => [
            'not_authenticated' => 'Người dùng không xác định.'
        ]
    ],
    'list' => [
        'default_title' => 'Trang danh sách các bản ghi',
        'search_prompt' => 'Tìm kiếm...',
        'no_records' => 'Không có bản ghi nào.',
        'missing_model' => 'List behavior sử dụng trong :class không được định nghĩa trong model nào.',
        'missing_column' => 'Column chưa được định nghĩa :columns.',
        'missing_columns' => 'List đã dử dụng trong :class chưa được định nghĩa (list columns).',
        'missing_definition' => "List behavior không chứa cột ':field'.",
        'missing_parent_definition' => "List behavior không có định nghĩa cho ':definition'.",
        'behavior_not_ready' => 'List behavior chưa được khởi tạo,kiểm tra lại xem bạn đã gọi makeLists() trong controller chưa.',
        'invalid_column_datetime' => "Giá trị Column ':column' không phải là DateTime object, bạn đã thiếu \$dates trong model?",
        'pagination' => 'Hiển thị bản ghi: :from-:to của :total',
        'first_page' => 'Trang đầu tiên',
        'last_page' => 'Trang cuối cùng',
        'prev_page' => 'Trang trước',
        'next_page' => 'Trang tiếp theo',
        'refresh' => 'Làm mới',
        'updating' => 'Đang cập nhật...',
        'loading' => 'Đang tải...',
        'setup_title' => 'Cài đặt trang danh sách',
        'setup_help' => 'Chọn các cột bạn muốn hiển thị ở trang danh sách các bản ghi. Bạn có thể thay đổi vị trí của chúng bằng các kéo lên hoặc xuống.',
        'records_per_page' => 'Số bản ghi trên một trang',
        'records_per_page_help' => 'Điền vào số bản ghi bạn muốn hiển thị trên một trang. Chú ý quá nhiều bản ghi trên một trang sẽ khiến trang tải chậm',
        'check' => 'Kiểm tra',
        'delete_selected' => 'Xóa các mục đã chọn',
        'delete_selected_empty' => 'Không có bản ghi nào được chọn',
        'delete_selected_confirm' => 'Xóa các bản ghi đã chọn?',
        'delete_selected_success' => 'Xóa thành công các bản ghi.',
        'column_switch_true' => 'Có',
        'column_switch_false' => 'Không'
    ],
    'fileupload' => [
        'attachment' => 'Tệp đính kèm',
        'help' => 'Tên và mô tả cho tệp.',
        'title_label' => 'Tên',
        'description_label' => 'Mô tả',
        'default_prompt' => 'Bấm vào %s hoặc kéo thả file vào đây để upload',
        'attachment_url' => 'URL file',
        'upload_file' => 'Upload file',
        'upload_error' => 'Lỗi upload',
        'remove_confirm' => 'Bạn có chắc chắn muốn xóa?',
        'remove_file' => 'Xóa file'
    ],
    'form' => [
        'create_title' => 'Thêm mới :name',
        'update_title' => 'Chỉnh sửa :name',
        'preview_title' => 'Xem trước :name',
        'create_success' => ':name đã được tạo',
        'update_success' => 'Cập nhật thành công :name',
        'delete_success' => 'Xóa thành công :name',
        'reset_success' => 'Reset thành công',
        'missing_id' => 'Không xác định được ID của bản ghi.',
        'missing_model' => 'Form behavior sử dụng trong :class không có trong model nào.',
        'missing_definition' => "Form behavior không chứa ':field'.",
        'not_found' => 'Không tìm thấy bản ghi có id: :id.',
        'action_confirm' => 'Bạn chắc chắn không?',
        'create' => 'Thêm mới',
        'create_and_close' => 'Thêm và đóng lại',
        'creating' => 'Đang tạo...',
        'creating_name' => 'Đang tạo :name...',
        'save' => 'Lưu lại',
        'save_and_close' => 'Lưu và đóng',
        'saving' => 'Đang lưu...',
        'saving_name' => 'Đang lưu :name...',
        'delete' => 'Xóa',
        'deleting' => 'Đang xóa...',
        'confirm_delete' => 'Xóa bản ghi này?',
        'confirm_delete_multiple' => 'Xóa bản ghi đã chọn?',
        'deleting_name' => 'Đang xóa :name...',
        'reset_default' => 'Đặt về mặc định',
        'resetting' => 'Đang đặt lại',
        'resetting_name' => 'Đang đặt lại :name',
        'undefined_tab' => 'Misc',
        'field_off' => 'Tắt',
        'field_on' => 'Bật',
        'add' => 'Thêm',
        'apply' => 'Áp dụng',
        'cancel' => 'Bỏ qua',
        'close' => 'Đóng',
        'confirm' => 'Xác nhận',
        'reload' => 'Tại lại',
        'complete' => 'Hoàn thành',
        'ok' => 'OK',
        'or' => 'or',
        'confirm_tab_close' => 'Đóng tab? Các thay đổi của bạn sẽ không được lưu.',
        'behavior_not_ready' => 'Form behavior chưa được khởi tạo, kiểm tra lại đã gọi initForm() trong controller cửa bạn chưa.',
        'preview_no_files_message' => 'Chưa có file nào được upload lên.',
        'preview_no_media_message' => 'Không có file media nào được chọn.',
        'preview_no_record_message' => 'Không có bản ghi nào được chọn.',
        'select' => 'Select',
        'select_all' => 'Tất cả',
        'select_none' => 'none',
        'select_placeholder' => 'Vui lòng lựa chọn',
        'insert_row' => 'Thêm mới Row',
        'insert_row_below' => 'Thêm Row dưới đây',
        'delete_row' => 'Xóa Row',
        'concurrency_file_changed_title' => 'File đã được thay đổi',
        'concurrency_file_changed_description' => "File bạn đang chỉnh sửa đã bị thay đổi bởi người khác. Bạn có thể tải lại và các thay đổi của bạn không được lưu hoặc ghi đè lên file đó",
        'return_to_list' => 'Quay lại trang danh sách'
    ],
    'recordfinder' => [
        'find_record' => 'Tìm kiếm bản ghi',
        'cancel' => 'Cancel',
    ],
    'pagelist' => [
        'page_link' => 'Page link',
        'select_page' => 'Lựa chọn một trang...'
    ],
    'relation' => [
        'missing_config' => "Relation behavior không được cấu hình cho ':config'.",
        'missing_definition' => "Relation behavior không có định nghĩa cho ':field'.",
        'missing_model' => 'Relation behavior đã sử dụng trong :class chưa được định nghĩa trong model nào.',
        'invalid_action_single' => 'Hành động này không thể thực hiện trên một singular relationship.',
        'invalid_action_multi' => 'Hành động này không thể thực hiện trên một multiple relationship.',
        'help' => 'Bấm vào 1 item để thêm mới',
        'related_data' => 'Dữ liệu quan đến :name',
        'add' => 'Thêm mới',
        'add_selected' => 'Thêm các mục đã chọn',
        'add_a_new' => 'Thêm mới :name',
        'link_selected' => 'Link đã chọn',
        'link_a_new' => 'Link mới :name',
        'cancel' => 'Cancel',
        'close' => 'Đóng lại',
        'add_name' => 'Thêm :name',
        'create' => 'Thêm mới',
        'create_name' => 'Thêm mới :name',
        'update' => 'Cập nhật',
        'update_name' => 'Cập nhật :name',
        'preview' => 'Xem trước',
        'preview_name' => 'Xem trước :name',
        'remove' => 'Xóa',
        'remove_name' => 'Xóa :name',
        'delete' => 'Xóa',
        'delete_name' => 'Xóa :name',
        'delete_confirm' => 'Bạn có chắc muốn xóa?',
        'link' => 'Link',
        'link_name' => 'Link :name',
        'unlink' => 'Unlink',
        'unlink_name' => 'Unlink :name',
        'unlink_confirm' => 'Bạn có chắc muốn xóa?'
    ],
    'reorder' => [
        'default_title' => 'Xắp xếp các bản ghi',
        'no_records' => 'Không có bản ghi nào để sắp xếp.'
    ],
    'model' => [
        'name' => 'Model',
        'not_found' => "Không tìm thấy Model ':class' với id :id",
        'missing_id' => 'Không xác định được ID tìm kiếm.',
        'missing_relation' => "Model ':class' không được định nghĩa cho ':relation'.",
        'missing_method' => "Model ':class' không có phương thức ':method'.",
        'invalid_class' => "Model :model sử dụng trong :class không hợp lệ, nó phải được kế thừa từ \Model class.",
        'mass_assignment_failed' => "Có lỗi của Model attribute ':attribute'."
    ],
    'warnings' => [
        'tips' => 'Hướng dẫn cấu hình hệ thống',
        'tips_description' => 'Một số điều bạn cần chú ý để cấu hình hệ thống đúng cách.',
        'permissions'  => 'PHP không có quyền ghi trong thư mục :name hoặc các thư mục con của nó. Vui lòng kiểm tra lại quyền ghi cho thư mục này.',
        'extension' => 'PHP extension :name chưa được cài đặt. Vui lòng cài đặt extension này từ thư viện và kích hoạt nó.',
        'plugin_missing' => 'Plugin :name cần phải cài đặt. Vui lòng cài đặt plugin này.',
    ],
    'editor' => [
        'menu_label' => 'Cài đặt trình biên tập (Code editor)',
        'menu_description' => 'Tùy chỉnh trình biên tập (Code editor) cho toàn trang, ví dụ kích thước chữ,màu nền cho trình biên tập.',
        'font_size' => 'Kích thước chữ',
        'tab_size' => 'Kích thước Tab',
        'use_hard_tabs' => 'Sử dụng tabs để lùi dòng',
        'code_folding' => 'Thu gọn code',
        'code_folding_begin' => 'Đánh dấu điểm bắt đầu',
        'code_folding_begin_end' => 'Đánh dấu điểm bắt đầu và kết thúc',
        'autocompletion' => 'Autocompletion',
        'word_wrap' => 'Không bị xuống dòng(word wrap)',
        'highlight_active_line' => 'Hiện nổi bật dòng đang trỏ chuột',
        'auto_closing' => 'Tự động đóng thẻ',
        'show_invisibles' => 'Hiển thị các ký tự ẩn',
        'show_gutter' => 'Hiện lề bên trong',
        'basic_autocompletion'=> 'Basic Autocompletion (Ctrl + Space)',
        'live_autocompletion'=> 'Live Autocompletion',
        'enable_snippets'=> 'Kích hoạt snippets (Tab)',
        'display_indent_guides'=> 'Hiển thị hướng dẫn căn lề',
        'show_print_margin'=> 'Hiện lề in',
        'mode_off' => 'Off',
        'mode_fluid' => 'Fluid',
        '40_characters' => '40 ký tự',
        '80_characters' => '80 ký tự',
        'theme' => 'Color scheme',
        'markup_styles' => 'Markup Styles',
        'custom_styles' => 'Stylesheet tùy chỉnh',
        'custom styles_comment' => 'Styles tùy chỉnh được thêm vào HTML editor.',
        'markup_classes' => 'Markup Classes',
        'paragraph' => 'Paragraph',
        'link' => 'Link',
        'table' => 'Table',
        'table_cell' => 'Table Cell',
        'image' => 'Image',
        'label' => 'Label',
        'class_name' => 'Class name',
        'markup_tags' => 'Markup Tags',
        'allowed_empty_tags' => 'Cho phép tags trống',
        'allowed_empty_tags_comment' => 'Danh sách tag sẽ không bị xóa khi chúng không có nội dung bên trong.',
        'allowed_tags' => 'Các tag được phép sử dụng',
        'allowed_tags_comment' => 'Danh sách tag được phép sử dụng trong Markup.',
        'no_wrap' => 'Không thu gọn tag',
        'no_wrap_comment' => 'Danh sách các tag sẽ không bị thu gọn nội dung bên trong block tags.',
        'remove_tags' => 'Xóa các tag',
        'remove_tags_comment' => 'Danh sách tag bị xóa kể cả nội dung của chúng.',
        'toolbar_buttons' => 'Các nút trên thanh công cụ',
        'toolbar_buttons_comment' => 'Các nút mặc định ở trên thanh công cụ  của Rich Editor. [fullscreen, bold, italic, underline, strikeThrough, subscript, superscript, fontFamily, fontSize, |, color, emoticons, inlineStyle, paragraphStyle, |, paragraphFormat, align, formatOL, formatUL, outdent, indent, quote, insertHR, -, insertLink, insertImage, insertVideo, insertAudio, insertFile, insertTable, undo, redo, clearFormatting, selectAll, html]',
    ],
    'tooltips' => [
        'preview_website' => 'Xem trước website'
    ],
    'mysettings' => [
        'menu_label' => 'Những cài đặt của tôi',
        'menu_description' => 'Những cài đặt liên quan đến tài khoản quản trị của bạn'
    ],
    'myaccount' => [
        'menu_label' => 'Tài khoản của tôi',
        'menu_description' => 'Cập nhật thông tin tài khoản của bạn ví dụ như tên, mail hoặc mật khẩu.',
        'menu_keywords' => 'bảo mật đăng nhập'
    ],
    'branding' => [
        'menu_label' => 'Tùy chỉnh trang quản trị',
        'menu_description' => 'Tùy chỉnh trang quản trị, ví dụ như chỉnh sửa tên,màu sắc, logo.',
        'brand' => 'Nhãn',
        'logo' => 'Logo',
        'logo_description' => 'Tải lên logo sử dụng cho trang quản trị.',
        'app_name' => 'Tên ứng dụng',
        'app_name_description' => 'Tên này sẽ được làm tiêu đề cho trang quản trị.',
        'app_tagline' => 'App Tagline',
        'app_tagline_description' => 'Mục này hiển thị ở màn hình đăng nhập trang quản trị.',
        'colors' => 'Màu sắc',
        'primary_color' => 'Màu chủ đạo',
        'secondary_color' => 'Màu thứ hai',
        'accent_color' => 'Màu tạo các điểm nhấn',
        'styles' => 'Styles',
        'custom_stylesheet' => 'Stylesheet tùy chỉnh',
        'navigation' => 'Thanh menu',
        'menu_mode' => 'Kiểu menu',
        'menu_mode_inline' => 'Icon và tiêu đề cùng một dòng',
        'menu_mode_tile' => 'Icon và tiêu đề khác dòng',
        'menu_mode_collapsed' => 'Thu gọn icon và tiêu đề'
    ],
    'backend_preferences' => [
        'menu_label' => 'Tùy chỉnh cá nhân',
        'menu_description' => 'Cá nhân hóa trang quản trị với tài khoản của bạn, ví dụ chọn ngôn ngữ.',
        'region' => 'Khu vực',
        'code_editor' => 'Code editor',
        'timezone' => 'Múi giờ',
        'timezone_comment' => 'Điều chỉnh thời gian hiển thị cho múi giờ này.',
        'locale' => 'Ngôn ngữ địa phương',
        'locale_comment' => 'Chọn khu vực của bạn để sử dụng đúng ngôn ngữ.'
    ],
    'access_log' => [
        'hint' => 'Nhật ký những lần đăng nhập thành công của administrators. Số bản ghi được lưu trữ trong :days ngày.',
        'menu_label' => 'Nhật ký truy cập',
        'menu_description' => 'Danh sách các lần người quản trị đăng nhập thành công.',
        'created_at' => 'Thời gian',
        'login' => 'Tên đăng nhập',
        'ip_address' => 'Địa chỉ IP',
        'first_name' => 'First name',
        'last_name' => 'Last name',
        'mail' => 'Email'
    ],
    'filter' => [
        'all' => 'tất cả',
        'options_method_not_exists' => "Model class :model cần phải khai báo method :method() trả về các tùy chọn lọc ':filter'.",
        'date_all' => 'tất cả',
        'number_all' => 'tất cả',
    ],
    'import_export' => [
        'upload_csv_file' => '1. Tải lên tệp  CSV',
        'import_file' => 'Import file',
        'first_row_contains_titles' => 'Dòng đầu tiên là tiêu đề cột',
        'first_row_contains_titles_desc' => 'Bỏ check nếu dòng đầu tiên trong file CSV là tiêu đề của cột.',
        'match_columns' => '2. Các cột dữ liệu trùng với các cột dữ liệu của database',
        'file_columns' => 'Các cột của tệp CSV',
        'database_fields' => 'Các cột của database',
        'set_import_options' => '3. Set import options',
        'export_output_format' => '1. Định dạng dữ liệu xuất ra',
        'file_format' => 'Định dang file',
        'standard_format' => 'Định dạng chuẩn',
        'custom_format' => 'Định dạng khác',
        'delimiter_char' => 'Delimiter character',
        'enclosure_char' => 'Enclosure character',
        'escape_char' => 'Escape character',
        'select_columns' => '2. Chọn cột để xuất ra',
        'column' => 'Column',
        'columns' => 'Columns',
        'set_export_options' => '3. Các tùy chọn xuất file',
        'show_ignored_columns' => 'Hiển thị các cột bị bỏ qua',
        'auto_match_columns' => 'Tự động khớp các cột',
        'created' => 'Đã tạo',
        'updated' => 'Đã cập nhật',
        'skipped' => 'Đã bỏ qua',
        'warnings' => 'Cảnh báo',
        'errors' => 'Lỗi',
        'skipped_rows' => 'Các dòng đã bỏ qua',
        'import_progress' => 'Tiến độ nhập file',
        'processing' => 'Đang xử lý',
        'import_error' => 'Lỗi nhập file',
        'upload_valid_csv' => 'Vui lòng tải lên tệp CSV hợp lệ',
        'drop_column_here' => 'Kéo cột vào đây...',
        'ignore_this_column' => 'Bỏ qua cột này',
        'processing_successful_line1' => 'Xuất file thành công!',
        'processing_successful_line2' => 'Bạn sẽ được chuyển đến nơi tải file về ngay bây giờ.',
        'export_progress' => 'Tiến độ xuất file',
        'export_error' => 'Lỗi xuất file',
        'column_preview' => 'Xem trước cột',
        'file_not_found_error' => 'Không tìm thấy file',
        'empty_error' => 'Không có dữ liệu để xuất ra',
        'empty_import_columns_error' => 'Vui lòng chọn một số cột để nhập vào.',
        'match_some_column_error' => 'Các cột chưa khớp nhau.',
        'required_match_column_error' => 'Trường bắt buộc sau đây chưa khớp :label.',
        'empty_export_columns_error' => 'Vui lòng chọn các cột để xuất ra.',
        'behavior_missing_uselist_error' => 'Bạn cần phải implement cái controller behavior ListCotroller với tùy chọn "useList" được chọn',
        'missing_model_class_error' => 'Ghi rõ thuộc tính modelClass cho :type',
        'missing_column_id_error' => 'Không xác định được cột',
        'unknown_column_error' => 'Cột không xác định',
        'encoding_not_supported_error' => 'Kiểu mã hóa(encoding) của tập tin sai. Vui lòng chọn lại kiểu mã hóa phù hợp để import',
        'encoding_format' => 'Kiểu mã hóa(encoding)',
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
            'windows_1252' => 'Windows-1252 (CP1252)'
        ]
    ],
    'permissions' => [
        'manage_media' => 'Tải lên và quản lý các tập tin đa phương tiện - images, videos, sounds, documents'
    ],
    'mediafinder' => [
        'label' => 'Media Finder',
        'default_prompt' => 'Bấm vào nút %s để tìm kiếm medai file'
    ],
    'media' => [
        'menu_label' => 'Media',
        'upload' => 'Tải lên',
        'move' => 'Di chuyển',
        'delete' => 'Xóa',
        'add_folder' => 'Thêm folder',
        'search' => 'Tìm kiếm',
        'display' => 'Hiển thị',
        'filter_everything' => 'Mọi thứ',
        'filter_images' => 'Images',
        'filter_video' => 'Video',
        'filter_audio' => 'Audio',
        'filter_documents' => 'Documents',
        'library' => 'Thư viện',
        'size' => 'Kích thước',
        'title' => 'Tên ảnh',
        'last_modified' => 'Lần cuối chỉnh sửa',
        'public_url' => 'URL',
        'click_here' => 'Bấm vào đây',
        'thumbnail_error' => 'Lỗi tạo thumbnail.',
        'return_to_parent' => 'Trả về thư mục cha',
        'return_to_parent_label' => 'Lên trên ..',
        'nothing_selected' => 'Chưa chọn mục nào.',
        'multiple_selected' => 'Đã chọn nhiều mục.',
        'uploading_file_num' => 'Đang tải lên :number file...',
        'uploading_complete' => 'Tải lên hoàn tất',
        'uploading_error' => 'Lỗi tải lên',
        'type_blocked' => 'Loại file này bị khóa vì lý do bảo mật.',
        'order_by' => 'Xắp xếp theo',
        'direction' => 'Theo hướng',
        'direction_asc' => 'Tăng dần',
        'direction_desc' => 'Giảm dần',
        'folder' => 'Thư mục',
        'no_files_found' => 'Không tìm thấy file bạn yêu cầu.',
        'delete_empty' => 'Vui lòng chọn các mục để xóa.',
        'delete_confirm' => 'Xác nhận xóa các mục đã chọn?',
        'error_renaming_file' => 'Lỗi đổi tên file.',
        'new_folder_title' => 'Thư mục mới',
        'folder_name' => 'Tên thư mục',
        'error_creating_folder' => 'Lỗi khi tạo thư mục mới',
        'folder_or_file_exist' => 'Tên file hoặc thư mục đã tồn tại.',
        'move_empty' => 'Chọn một mục để di chuyển.',
        'move_popup_title' => 'Di chuyển file hoặc thư mục',
        'move_destination' => 'Chọn nơi đến',
        'please_select_move_dest' => 'Chọn nơi mà file hoặc thư mục cần chuyển đến.',
        'move_dest_src_match' => 'Chọn thư mục khác.',
        'empty_library' => 'Thư mục trống.Vui lòng tải tệp tin lên hoặc tạo thư mục mới để bắt đầu.',
        'insert' => 'Chàn vào',
        'crop_and_insert' => 'Cắt & Chèn vào',
        'select_single_image' => 'vui lòng chọn một hình ảnh.',
        'selection_not_image' => 'Mục đã chọn không phải là hình ảnh.',
        'restore' => 'Hoàn lại tất cả các thay đổi',
        'resize' => 'Đổi kích thước...',
        'selection_mode_normal' => 'Bình thường',
        'selection_mode_fixed_ratio' => 'Tỉ lệ cố định',
        'selection_mode_fixed_size' => 'Kích thước cố định',
        'height' => 'Chiều cao',
        'width' => 'Chiều rộng',
        'selection_mode' => 'Lựa chọn chế độ',
        'resize_image' => 'Đổi kích thước ảnh',
        'image_size' => 'Kích thước ảnh:',
        'selected_size' => 'Đã chọn:'
    ],
];
