<?php defined('BASEPATH') OR exit('No direct script access allowed.');

$config['protocol']         = 'mail';                   // 'mail', 'sendmail', or 'smtp'
$config['smtp_host']        = 'ssl://smtp.gmail.com';
$config['mailtype']			= 'html';
$config['smtp_port']        = 587;
$config['charset']			= 'utf-8';  // Default should be utf-8 (this should be a text field)
$config['newline']			= "\r\n"; //"\r\n" or "\n" or "\r". DEFAULT should be "\r\n"
$config['crlf'] 			= "\r\n"; //"\r\n" or "\n" or "\r" DEFAULT should be "\r\n"
