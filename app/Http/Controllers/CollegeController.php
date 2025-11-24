<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CollegeController extends Controller
{
    public function showColleges()
    {
        $koleje = College::all();

        return view('colleges', ['koleje' =>  $koleje]);
    }

    public function upravKolej(Request $request, int $id)
    {
        $zkontrolovano = $request->validate([
            'nazev' => 'required|min:5|max:15',
            'body' => 'required|int|min:0|max:350',
            'barva' => 'required|hex_color',
        ]);

        //College::where('id', $id)->first(); //->get();
        $kolej = College::find($id);

        $kolej->nazev = $request->input('nazev');
        $kolej->body = $zkontrolovano['body'];
        $kolej->barva = $zkontrolovano['barva'];
        $kolej->save();

        return back();
    }
}
