<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.googlemail.com';
$config['smtp_port'] = 465;
$config['smtp_timeout'] = 30;
$config['smtp_user'] = 'rodrigo54mix@gmail.com';
$config['smtp_pass'] = '';
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";
$config['mailtype'] = 'html';
$config['wordwrap'] = TRUE;

/* End of file email.php */
/* Location: ./application/config/email.php */