<?php

namespace App\Classes;

use App\Http\Controllers\Controller;

class ContactForm extends Controller
{
    var $name;
    var $email;
    var $subject;
    var $message;
    var $mailTo = "florian.koning2004@gmail.com";
    var $headers;
    var $text;

    public function __construct($name, $email, $subject, $message) {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
        $this->headers = "Van: ".$email;
        $this->text = "Je hebt een e-mail gekregen van ".$name.". \n\n.".$message;
    }
}
