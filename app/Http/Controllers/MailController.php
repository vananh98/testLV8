<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\testMail;

class MailController extends Controller
{
    //
    public function sendMail()
    {
        $details = [
            'title' => 'Test mail',
            'content' => 'Bên dưới'
        ];
        Mail::to("thanhson.itnic@gmail.com")->send(new testMail($details));
    }
}
