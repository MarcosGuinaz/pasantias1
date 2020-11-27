<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class uploadController extends Controller
{
   public function home(){
    	return view('upload.home');
    }
 
    public function uploading(Request $request)
    {
        $request->validate([
            'archivo' => ['required','mimes:sqlite, sql, db, DB, sqlitedb, sdb']
        ]);
        $request = request('archivo');
        $request->move('uploads', $request->getClientOriginalName());
        return redirect()->back()->with('alert', 'Procesando información espere un momento');


    }
}
