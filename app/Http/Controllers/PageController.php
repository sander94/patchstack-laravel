<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vulnerability;

class PageController extends Controller
{


    public function homepage()
    {

        return view('welcome');
    }


    public function index()
    {

        $vulnerabilities = Vulnerability::all();

        return view('vulnerabilities')->with('vulnerabilities', $vulnerabilities);
    }

    

    public function dashboard()
    {
        $vulnerabilities = Vulnerability::all();
        return view('home')->with('vulnerabilities', $vulnerabilities);
    }


    public function create()
    {
        
        return view('create');
    }

    public function insert(Request $r)
    {
        $record = new Vulnerability;
        $record->title = $r->title;
        $record->description = $r->description;
        $record->prevention = $r->prevention;
        $record->save();
        return redirect()->back()->with('status', 'Well done!');
    }


}
