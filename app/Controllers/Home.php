<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // test server email
        // $this->sendTestEmail();
        return view('home.php', ['title' => 'Home']);
        // return "hello, world!";
    }
// function to set server email
    // public function sendTestEmail(){
    //     $email = \Config\Services::email();
    //     $email->setFrom('baldwin.jnnfr@gmail.com');
    //     $email->setTo('jbldwn@iu.edu');
    //     $email->setSubject('413 Test Email');
    //     $email->setMessage('This is a <b>N413</b> test email');
        
    //     //check if email is sent
    //     if($email->send()){
    //         echo "Email sent successfully";
    //     } else {
    //         echo "Email not sent";
    //         $emailErrors = $email->printDebugger(['header']);
    //         print_r($emailErrors);
    //     }
    // }
}