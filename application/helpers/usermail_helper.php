<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('getloancompleteemail')) {
    function getloancompleteemail($data)
    {
        $ci = &get_instance();
        $to_email = $data['email'];
        // $srm = $ci->crud->fetch_single_data_column('srm')
        $subject = $data['name'] ."- Welcome to Prologic Web Solutions";
        $message = $ci->load->view('mailer/getloancompleteprocessmail',$data,true);
        // $to_email = 'swapna.soni21@gmail.com';
        send_mail($to_email, $subject, $message);
        send_mail('ankurparasharprologic@gmail.com', $subject, $message);
    }
}
