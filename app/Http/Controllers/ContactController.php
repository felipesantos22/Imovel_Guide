<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function send(Request $request)
    {
        // Validação dos dados do formulário
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'mensage' => 'required',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $mensage = $request->input('mensage');

        Mail::to('felipevs2018@gmail.com', 'Felipe')->send(new Contact($name, $email, $mensage));

        return back()->with('success', 'Email enviado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
