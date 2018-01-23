<?

$typeset_settings = new StdClass;

// Basic Info
$typeset_settings->site_title = "My Website";
$typeset_settings->content_folder = "content";
$typeset_settings->cookie = "typeset_h9889390J0kjr";
$typeset_settings->image_quality = 80;
$typeset_settings->upload_file_size = 10 * 1000000; // Convert megs to bytes
$typeset_settings->upload_image_resolution = 4800 * 4800;
$typeset_settings->timezone = "America/Los_Angeles";

// Database
$typeset_settings->database = new StdClass;
$typeset_settings->database->host = DB_HOST;
$typeset_settings->database->database = DB_NAME;
$typeset_settings->database->user = DB_USER;
$typeset_settings->database->password = DB_PASSWORD;

// Admin Accounts
$typeset_settings->admins = $ADMIN_CREDENTIALS;
