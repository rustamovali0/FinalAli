<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function contactForm(Request $request){
    $data = $request->all();
    $lastsaved = Contact::create($data);
    return $lastsaved;  
    }
}
