<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;

class SampleController extends Controller
{
   public function sendMail()
   {
     $details=[
         "title"=>"Sample Mail",
         "body"=>"Sample body",
         "address"=>"Pragati Colony"
     ];
     Mail::to("nikitakatakwar165@gmail.com")->send(new MyTestMail($details));
     echo"<h3>Mail Send</h3>";

   }
}
