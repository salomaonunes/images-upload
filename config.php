<?php 
// Database configuration    
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'raccoon'); 
define('DB_PASSWORD', '1zRL3YZ998$y'); 
define('DB_NAME', 'googleapi'); 
 
// Google API configuration 
define('GOOGLE_CLIENT_ID', '430613051012-b16f68n3ord6bksjqe4m9qk7l08trkmd.apps.googleusercontent.com'); 
define('GOOGLE_CLIENT_SECRET', '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'); 
define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/drive'); 
define('REDIRECT_URI', 'http://localhost/images-upload/google_drive_sync.php'); 
 
// Start session 
if(!session_id()) session_start(); 
 
// Google OAuth URL 
$googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode(GOOGLE_OAUTH_SCOPE) . '&redirect_uri=' . REDIRECT_URI . '&response_type=code&client_id=' . GOOGLE_CLIENT_ID . '&access_type=online'; 
 
?>