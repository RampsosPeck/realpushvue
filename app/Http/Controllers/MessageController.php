<?php

namespace Realpushvue\Http\Controllers;

use Realpushvue\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Realpushvue\Events\MessageSentEvent;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('chatea');
    }
    /* FECH DEVUELVE TODOS LOS MENSAJES CON LOS USUARIOS
        ASIGNADOS */
    public function fetch()
    {
        return Message::with('user')->get();
    }
    /*ALMACENA TODOS LOS MENSAJES*/
    public function sentMessage(Request $request)
    {
        $user = Auth::user();

        $message = Message::create([
            'message' => $request->message,
            'user_id' => Auth::user()->id,
        ]);

        broadcast(new MessageSentEvent($user, $message))->toOthers();
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Realpushvue\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Realpushvue\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Realpushvue\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Realpushvue\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
