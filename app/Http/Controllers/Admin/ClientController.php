<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Mail\ClientStoreMail;
use App\Services\LogMessageService;
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
        $data = Client::with('phones')->paginate(10);

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

        try {
            LogMessageService::log($request, 'info');
            return redirect()->route('client.index')->with('success', 'Cadastrado com sucesso!');
        } catch (\Exception $e) {
            LogMessageService::log($request, 'error', $e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Client::findOrFail($id);
        
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
        $data = Client::findOrFail($id);
        
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
        $client = Client::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            
            if ($client->image && Storage::exists($client->image)) {
                Storage::delete($client->image);
            }

            $imagePath = $request->file('image')->store('public');

            $data['image'] = $imagePath;
        }

        $client->update($data);

        try {
            LogMessageService::log($request, 'info');
             return redirect()->route('client.index')->with('success', 'Atualizado com sucesso!');
        } catch (\Exception $e) {
            LogMessageService::log($request, 'error', $e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        if ($client->image && Storage::exists($client->image)) {
            Storage::delete($client->image);
        }

        $client->delete();
        
        try {
            LogMessageService::log($request, 'info');
            return redirect()->route('client.index')->with('success', 'Deletado com sucesso!');
        } catch (\Exception $e) {
            LogMessageService::log($request, 'error', $e);
        }
    }
}