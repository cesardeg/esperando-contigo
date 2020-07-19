<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use Carbon\Carbon;

class WelcomeController extends Controller
{
    public function index()
    {
        $price = Carbon::parse('2020-08-11', 'America/Mexico_City')->isFuture()
            ? 45
            : 50;
        $link = "https://www.paypal.me/zensvsadecv/{$price}USD";
        return view('welcome')->with('link', $link);
    }

    public function apply(Request $request)
    {
        Applicant::create($request->all());
        return redirect('/')->with('payment', 1);
    }
}
