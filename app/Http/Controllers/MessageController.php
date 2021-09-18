<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'content' => 'required|min:3',
            ],
            [
                'name.required' => __('I need your name'),
            ]
        );
        Mail::to('jcigarro@digital-works.com')->queue(new MessageRecived());
        return back()->with(
            'status',
            'Mensagem recebida, respondemos em menos de 24 horas.'
        );
    }
}
