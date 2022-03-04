<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacto = [
            ['title'=>'Contacto #1'],
            ['title'=>'Contacto #2'],
            ['title'=>'Contacto #3'],
            ['title'=>'Contacto #4'],
        ];
        return view('contacto', compact('contacto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
}