<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Consulting;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
    public function index(){
        $contact = contact::orderBy('id','desc') ->paginate(10);
        $consulting = consulting::orderBy('id','desc') ->paginate(10);

        return view('SOHO.Main.index',compact('contact','consulting',));
    }
}