<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.Contact');
    }
    public function send(Request $request)
    {
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $email = $request->email;
        $subject = $request->subject;

        $mail = new PHPMailer(true);
        // $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->Mailer = "smtp";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = "clubzhoustan@gmail.com";
        $mail->Password = "kycsbsoihsbzbznx";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->setFrom($email, "Z-Club");
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->SMTPSecure = 'tls';
        $mail->Subject  = "Working on it thank you for mail!";
        $mail->Body   = "Hello, <br/> <br/>This is has been sent to confirm that your reservation has been successfully performed!<br/><br/>Thanks and regards<br/> Z-Club";
        $dt = $mail->send();
        if ($dt) {
            // echo 'Email has been send successfully sent to user';
        } else {
            echo 'something went wrong';
        }
        $mail->setFrom($email, "Z-Club");
        $mail->addAddress("clubzhoustan@gmail.com");
        $mail->isHTML(true);
        $mail->SMTPSecure = 'tls';
        $mail->Subject  = "Complain";
        $mail->Body   = $subject;
        $dt = $mail->send();
        if ($dt) {
            // echo 'Email has been send successfully to z-club';
        } else {
            echo 'something went wrong';
        }
        return view('frontend.Contact');
    }
}
