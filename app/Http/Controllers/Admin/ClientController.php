<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use App\Mail\ClientStoreMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ClientStoreUpdate;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Client::all();

        return view('client.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ClientStoreUpdate  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientStoreUpdate $request)
    {
        $data = $request->all();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            
            $imagePath = $request->file('image')->store('public');

            $data['image'] = $imagePath;
        }

        $client = Client::create($data);
        
        if ($request->email) {
            Mail::to($request->email)->send(new ClientStoreMail($client));
        }

        return redirect()->route('client.index')->with('success', 'Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Client::find($id);
        
        return view('client.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Client::find($id);
        
        return view('client.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\ClientStoreUpdate  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientStoreUpdate $request, $id)
    {
        $client = Client::find($id);
        $data = $request->all();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            
            if ($client->image && Storage::exists($client->image)) {
                Storage::delete($client->image);
            }

            $imagePath = $request->file('image')->store('public');

            $data['image'] = $imagePath;
        }

        $client->update($data);

        return redirect()->route('client.index')->with('success', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);

        if ($client->image && Storage::exists($client->image)) {
            Storage::delete($client->image);
        }

        $client->delete();

        return redirect()->route('client.index')->with('success', 'Deletado com sucesso!');
    }
}