<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
/* 
| ------------------------------------------------------------------- 
| EMAIL CONFING 
| ------------------------------------------------------------------- 
| Configuration of outgoing mail server. 
| */   
$config['protocol']='smtp';  
$config['smtp_host']='ssl://smtp.googlemail.com';  
$config['smtp_port']='465';  
$config['smtp_timeout']='10';  
$config['smtp_user']='sbappmailer@gmail.com';  
$config['smtp_pass']='Decoy8801!';  
$config['charset']='utf-8'; 
$config['mailtype'] = 'html'; 
$config['newline']="\r\n";  
  
/* End of file email.php */  
/* Location: ./system/application/config/email.php */  
?>