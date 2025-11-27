<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('ajaxresmsg'))
{
    function ajaxresmsg($code){
        switch ($code) {
            case 'IR'://Invalid Request
                return array('status'=>1, 'message'=>'Invalid Request.');
                break;
            case 'IU'://Invalid User
                return array('status'=>1,'message'=>'Enter User Detail.');
                break;
            case 'IUI'://Invalid User
                return array('status'=>1,'message'=>'Invalid User.');
                break;
            case 'SUCC'://Success
                return array('status'=>0,'message'=>'Success.');
                break;
            case 'IL':// Invalid Login
                return array('status'=>1,'message'=>'Invalid Login Details.');
                break;
            case 'NRU':// Invalid Login
                return array('status'=>1,'message'=>'This Email ID is not registered with us.');
                break;
            case 'OS'://New OTP
                return array('status'=>0,'message'=>'New OTP Sent to Your Mobile.');
                break;
            case 'OR'://New Resent OTP
                return array('status'=>0,'message'=>'OTP Re-Sent to Your Mobile.');
                break;
            case 'IM'://Invalid Mobile
                return array('status'=>1,'message'=>'Invalid Mobile.');
                break;
            case 'IE'://Invalid Mobile
                return array('status'=>1,'message'=>'Invalid Email.');
                break;
            case 'IOTP'://Invalid OTP
                return array('status'=>1,'message'=>'Invalid OTP.');
                break;
            case 'IMOTP'://Invalid OTP
                return array('status'=>1,'message'=>'Invalid Mobile OR OTP.');
                break;
            case 'IEOTP'://Invalid OTP
                return array('status'=>1,'message'=>'Invalid Email OR OTP.');
                break;
            case 'PAB'://Invalid OTP
                return array('status'=>2,'message'=>'As per the NPCI update,you need to provide your Video KYC. Please send your Video kyc on the email <a href="mailto:support@gstsuvidhakendra.org">support@gstsuvidhakendra.org</a> ');
                break;
            case 'RAB'://Invalid OTP
                return array('status'=>2,'message'=>'Your Account is Disabled Due to security reasons, Please contact GST Suvidha Kendra for enabling your account or submit the google form. <a href="https://forms.gle/iXm7WMzFcAw8ZYp27">https://forms.gle/iXm7WMzFcAw8ZYp27</a>');
                break;
            case 'LS'://Login success
                return array('status'=>0, 'message'=>'Login Success');
                break;
            case 'EM'://Enter Mobile
                return array('status'=>1,'message'=>'Enter Mobile Number.');
                break;
            case 'PS'://Password Sent
                return array('status'=>0, 'message'=>'Your new password sent to your registered mobile.');
                break;
            case 'PC'://Password Changed
                return array('status'=>0, 'message'=>'Your Password has been changed successfully.');
                break;
            case 'IP'://Password Changed
                return array('status'=>1, 'message'=>'Invalid Password.');
                break;
            case 'IAB'://no balance
                return array('status'=>1, 'message'=>'Insufficient Balance.');
                break;
            case 'AERR'://Authentication
                return array('status'=>1,'message'=>'Authentication Error');
                break;
            case 'WH'://Wallet Hold
                return array('status'=>1,'message'=>'Wallet in on hold! please contact customer support.');
                break;
            case 'SUM'://Service Down
                return array('status'=>1, 'message'=>'Service Under Maintenance');
                break;
            case 'ITE'://Invalid Txn
                return array('status'=>1,'message'=>'Invalid Transaction');
                break;
            case 'TUP'://Txn Pending
                return array('status'=>3,'message'=>'Transaction Under Proccess');
                break;
            case 'TPE'://Txn Proceed
                return array('status'=>0, 'message'=>'Transaction processed please check transaction report');
                break;
            case 'TAE'://Try Again
                return array('status'=>1, 'message'=>'Transaction Timeout! Please wait for final updates.');
                break;
            case 'ITP'://Invalid Pin
                return array('status'=>1,'message'=>'Invalid Transaction Pin.');
                break;
            case 'TNA'://Txn not allowed
                return array('status'=>1, 'message'=>'Transaction not allowed from 11.30 PM to 12.30 AM');
                break;
            case 'SNA'://Scheme Not Assigned
                return array('status'=>1,'message'=>'Scheme not assigned! please contact customer support.');
                break;
            case 'DTX'://Duplicate Txn
                return array('status'=>1,'message'=>'Duplicate Transaction! Please try after 50seconds for same transaction.');
                break;
            case 'ITD'://Invalid Txn Detail
                return array('status'=>1, 'message'=>'Invalid Transaction Detail.');
                break;
            case 'AFR'://Invalid Txn Detail
                return array('status'=>1,'message'=>'Please complete all required fields');
                break;
            case 'OVA'://Invalid Txn Detail
                return array('status'=>1,'message'=>'You are using older version! Please update app.');
                break;
            case 'RSW'://Invalid Txn Detail
                return array('status'=>1,'message'=>'You are not allowed to use this service.');
                break;
            case 'FVE'://Form Validation Error
                $formerror = explode("\n",strip_tags(validation_errors()));
                return array('status'=>1,'message'=>$formerror[0]);
                break;
            default:
                return array();
                break;
        }
    }   
}