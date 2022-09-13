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
        return view('auth.home')->with('vulnerabilities', $vulnerabilities);
    }


    public function create()
    {
        
        return view('auth.create-vulnerability');
    }

    public function show(Request $r)
    {
        $vulnerability = Vulnerability::find($r->id);
        return view('single-vulnerability')->with('vulnerability', $vulnerability);
    }

    public function insert(Request $r)
    {
        $record = new Vulnerability;
        $record->title = $r->title;
        $record->description = $r->description;
        $record->prevention = $r->prevention;
        $record->save();
        return redirect()->route('dashboard')->with('status', 'Wow, you\'re good!');
    }

    public function vulnerabilityEdit(Request $r)
    {
        $vulnerability = Vulnerability::find($r->id);
        return view('auth.edit-vulnerability')->with('vulnerability', $vulnerability);
    }

    public function vulnerabilityUpdate(Request $r)
    {
        $vulnerability = Vulnerability::find($r->id);
        $vulnerability->title = $r->title;
        $vulnerability->description = $r->description;
        $vulnerability->prevention = $r->prevention;
        $vulnerability->save();
        return redirect()->route('dashboard')->with('status', 'Well done!');
    }

    public function vulnerabilityDelete(Request $r)
    {

        $vulnerability = Vulnerability::find($r->vulnerability_id)->delete();;

        return redirect()->back()->with('status', 'Good job!');
    }

}
