<?php
###############################
## ResourceSpace
## Local Configuration Script
###############################

# All custom settings should be entered in this file.
# Options may be copied from config.default.php and configured here.

# MySQL database settings
$mysql_server = 'localhost';
$mysql_username = 'admin';
$mysql_password = 'password';
$read_only_db_username = 'resourcespace_r';
$read_only_db_password = 'your_r_password';
$mysql_db = 'resourcespace';

$mysql_bin_path = '/usr/bin';

# Base URL of the installation
$baseurl = 'http://192.168.110.130/resourcespace';

// --- 啟用 PHPMailer 和 SMTP ---
$use_phpmailer = true;
$use_smtp = true;

// --- Gmail SMTP 設定 ---
$smtp_host = 'smtp.gmail.com';
$smtp_port = 587;
$smtp_auth = true;
$smtp_username = 'hsuannn.cs12@nycu.edu.tw'; // Gmail帳號
$smtp_password = 'nmsu swyr fszk uvpm'; // 需用App Password，不是一般密碼
$smtp_secure = 'tls'; // Gmail建議用TLS
$email_from_name = 'ResourceSpace'; // 寄件人名稱，可自訂
# Email settings
$email_notify = 'hsuannn.cs12@nycu.edu.tw';
$email_from = 'hsuannn.cs12@nycu.edu.tw';
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

