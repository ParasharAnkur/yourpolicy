<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('send_mail'))
{
    function send_mail($to_email, $subject, $message, $file = array(), $cc_email = array(), $bcc_email = array(), $replyto = '')
    {
    	$ci=& get_instance();
    	$config = array();
		// $config['protocol'] = 'smtp';
		// $config['smtp_host'] = 'email-smtp.us-west-2.amazonaws.com';
		// $config['smtp_user'] = 'AKIA3VUMJRVCK6TOSFLE';
		// $config['smtp_pass'] = 'BFmbb7e9d0E/aoj5lQCuzIuzEysItRUyRYZU4miHhiWY';
		// $config['smtp_crypto'] ='tls';
		// $config['smtp_port'] = 587;
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'mail.yourpolicy.in';
        $config['smtp_user'] = 'info@yourpolicy.in';
        $config['smtp_pass'] = '&%WHAqo@zOgt';
        $config['smtp_crypto'] ='tls';
        $config['smtp_port'] = 587;

		$ci->email->initialize($config);
		$ci->email->set_newline("\r\n");
        $ci->email->set_mailtype("html");

       	// $from_email = "info@gstsuvidhakendra.org.in";
        $from_email = "info@yourpolicy.in";
        //Load email library
        $ci->email->from($from_email, 'CRM - GST Suvidha Kendra Franchise');
        $ci->email->to($to_email);
        $ci->email->subject($subject);
        $ci->email->message($message);
        $ci->email->cc($cc_email);
        $ci->email->bcc($bcc_email);
        if ($replyto != '')
            $ci->email->reply_to($replyto);
        if ($file != NULL) {
            for ($i = 0; $i < count($file); $i++) {
                $ci->email->attach($file[$i]);
            }
        }
        if($ci->email->send()){
            return true;
        }
        else{
            return false;
        }
    }   
}