<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use Carbon\Carbon;

class WelcomeController extends Controller
{
    public function index()
    {
        $link = "https://www.paypal.me/vialactancia";
        return view('welcome')->with('link', $link);
    }

    public function apply(Request $request)
    {
        Applicant::create($request->all());
        return redirect('/')->with('payment', 1);
    }
}
