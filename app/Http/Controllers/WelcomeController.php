<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use Carbon\Carbon;

class WelcomeController extends Controller
{
    public function index()
    {
        $price = Carbon::parse('2020-08-01', 'America/Mexico_City')->isFuture()
            ? 800
            : 1000;
        $link = "https://www.paypal.me/zensvsadecv/{$price}MXN";
        return view('welcome')->with('link', $link);
    }

    public function apply(Request $request)
    {
        Applicant::create($request->all());
        return redirect('/')->with('payment', 1);
    }
}
