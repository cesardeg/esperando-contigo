<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $query = Applicant::latest();
        if ($request->search) {
            $search = $request->search;
            $query->where(function($qry) use($search) {
                $qry->orWhere('name', 'LIKE', '%' . $search . '%');
                $qry->orWhere('email', 'LIKE', '%' . $search . '%');
                $qry->orWhere('country', 'LIKE', '%' . $search . '%');
                $qry->orWhere('region', 'LIKE', '%' . $search . '%');
                $qry->orWhere('city', 'LIKE', '%' . $search . '%');
            });
        }
        $applicants = $query->paginate()->appends($request->all());
        return view('home')->with('applicants', $applicants);
    }
}
