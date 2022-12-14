<?php

$config["app"] = "Flamarya";




$config['base_url'] = 'https://flamaryatest.herokuapp.com/';
//$config['base_url'] = 'https://flamarya.dev/';
$config["default_timezone"] = "Africa/Douala";




/** SUPPORT INFO **/

$config["support_call"] = "00237656115610";
$config["support_call2"] = "00237222233524";
$config["support_call3"] = "00237670505817";
$config["support_phone"] = "656 115 610";
$config["support_phone2"] = "222 233 524";
$config["support_phone3"] = "670 505 817";
$config["support_whatsapp"] = "237670505817";
$config["support_email"] = "info@maryfuneral.com";
$config["support_address"] = "Yaounde, Mvog ada, collège Montesquieu face station MRS";
$config["support_facebook"] = "https://www.facebook.com/MaryFuneralServices/";
$config["support_whatsapp"] = "https://wa.me/237670505817";




/* DATABASE INFOS */

$config["database"] = "sql8513258";
$config["host"] = "sql8.freesqldatabase.com";
$config["username"] = "sql8513258";
$config["password"] = "58niprmmN9";





/* THIRD PARTIES CONFIG */


$config["google-recaptcha-site-key"] = "";
$config["google-recaptcha-secret-key"] = "";







/** SESSIONS & COOKIES **/


$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'flamaryasecure';
$config['sess_expiration'] = 3600;
$config['sess_save_path'] = sys_get_temp_dir();
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;

$config['cookie_secure']	= TRUE;
$config['cookie_httponly'] 	= TRUE;