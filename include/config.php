<?php
###############################
## ResourceSpace
## Local Configuration Script
###############################

# All custom settings should be entered in this file.
# Options may be copied from config.default.php and configured here.

// --- 載入 .env 環境變數 ---
$env_file = __DIR__ . '/../.env';
if (file_exists($env_file)) {
    $env_lines = file($env_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($env_lines as $line) {
        if (strpos($line, '#') === 0 || strpos($line, '=') === false) continue;
        list($key, $value) = explode('=', $line, 2);
        $key = trim($key);
        $value = trim($value);
        if ($value === 'true') $value = true;
        if ($value === 'false') $value = false;
        $_ENV[$key] = $value;
    }
}

# MySQL database settings - 從環境變數讀取
$mysql_server = $_ENV['MYSQL_SERVER'] ?? 'localhost';
$mysql_username = $_ENV['MYSQL_USERNAME'] ?? 'admin';
$mysql_password = $_ENV['MYSQL_PASSWORD'] ?? 'password';
$read_only_db_username = $_ENV['READ_ONLY_DB_USERNAME'] ?? 'resourcespace_r';
$read_only_db_password = $_ENV['READ_ONLY_DB_PASSWORD'] ?? 'your_r_password';
$mysql_db = $_ENV['MYSQL_DB'] ?? 'resourcespace';
$mysql_bin_path = $_ENV['MYSQL_BIN_PATH'] ?? '/usr/bin';

# Base URL of the installation - 從環境變數讀取
$baseurl = $_ENV['BASE_URL'] ?? 'http://localhost/resourcespace';

// --- Email 設定從環境變數讀取 ---
$use_phpmailer = $_ENV['USE_PHPMAILER'] ?? false;
$use_smtp = $_ENV['USE_SMTP'] ?? false;
$smtp_host = $_ENV['SMTP_HOST'] ?? '';
$smtp_port = $_ENV['SMTP_PORT'] ?? 587;
$smtp_auth = $_ENV['SMTP_AUTH'] ?? true;
$smtp_username = $_ENV['SMTP_USERNAME'] ?? '';
$smtp_password = $_ENV['SMTP_PASSWORD'] ?? '';
$smtp_secure = $_ENV['SMTP_SECURE'] ?? 'tls';
$email_from = $_ENV['EMAIL_FROM'] ?? '';
$email_from_name = $_ENV['EMAIL_FROM_NAME'] ?? 'ResourceSpace';
$email_notify = $_ENV['EMAIL_NOTIFY'] ?? '';
# Secure keys
$scramble_key = 'fc890d65e4eba081e73e45a56de318f7550aa6500b2dd72c4e951095452cf97b';
$api_scramble_key = '991c51f52c3d39b2c7c4d1a40cb80ee38a494e261defed627fcb614cba824e0b';

# Paths
$imagemagick_path = '/usr/bin';
$ghostscript_path = '/usr/bin';
$ffmpeg_path = '/usr/bin';
$exiftool_path = '/usr/bin';
$antiword_path = '/usr/bin';
$pdftotext_path = '/usr/bin';

$applicationname = 'ResourceSpace';
$defaultlanguage = 'zh-TW';
$homeanim_folder = 'filestore/system/slideshow_cff80bdc050baf2';

/*

New Installation Defaults
-------------------------

The following configuration options are set for new installations only.
This provides a mechanism for enabling new features for new installations without affecting existing installations (as would occur with changes to config.default.php)

*/
                                
// Set imagemagick default for new installs to expect the newer version with the sRGB bug fixed.
$imagemagick_colorspace = "sRGB";

$contact_link=false;
$themes_simple_view=true;

$stemming=true;
$case_insensitive_username=true;
$user_pref_user_management_notifications=true;
$themes_show_background_image = true;

$use_zip_extension=true;
$collection_download=true;

$ffmpeg_preview_force = true;
$ffmpeg_preview_extension = 'mp4';
$ffmpeg_preview_options = '-f mp4 -b:v 1200k -b:a 64k -ac 1 -c:v libx264 -pix_fmt yuv420p -profile:v baseline -level 3 -c:a aac -strict -2';

$daterange_search = true;
$upload_then_edit = true;

$purge_temp_folder_age=90;
$filestore_evenspread=true;

$comments_resource_enable=true;

$api_upload_urls = array();

$use_native_input_for_date_field = true;
$resource_view_use_pre = true;

$sort_tabs = false;
$maxyear_extends_current = 5;
$thumbs_display_archive_state = true;
$featured_collection_static_bg = true;
$file_checksums = true;
$hide_real_filepath = true;

$plugins[] = "brand_guidelines";

