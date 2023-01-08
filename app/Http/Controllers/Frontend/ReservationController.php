<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use App\Models\reservation;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ReservationController extends Controller
{
    public function index()
    {
        return view('frontend.Reservation');
    }
    public function store(Request $request)
    {
        $reservation = new reservation;
        $reservation->firstname = $request['firstname'];
        $reservation->lastname = $request['lastname'];
        $reservation->email = $request['email'];
        $reservation->number = $request['number'];
        $reservation->save();

        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $email = $request->email;
        $number = $request->number;
        $gender = $request->gender;
farhad  
farhad  
farhad  
farhad  farhad  
farhad  
farhad  
farhad  
farhad  
farhad  
farhad  
farhad  
farhad  
farhad  
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
        $mail->Subject  = "Reservation has been performed!";
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
        $mail->Subject  = "Reservation has been performed!";
        $mail->Body   = "Hello, <br/> <br/>This is has been sent to confirm that your reservation has been successfully performed!<br/> Thanks and regards<br/> Z-Club";
        $dt = $mail->send();
        if ($dt) {
            // echo 'Email has been send successfully to z-club';
        } else {
            echo 'something went wrong';
        }
        return view('frontend.confirm');
    }
}
