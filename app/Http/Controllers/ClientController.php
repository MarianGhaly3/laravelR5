<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Traits\UploadFile;

class ClientController extends Controller
{
    use UploadFile;
    private $columns = [
        'clientName',
        'phone',
        'email',
        'website',
        'city_id',
        'image',
        'active',
        'address',
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::get();
        return view('clients', compact('clients'));
    }

    //Show the form for creating a new resource.
    public function create()
    {
        return view('addClient');
    }

    //Store a newly created resource in storage.
    public function store(Request $request)
    { 
        $messages = $this ->errMsgs();
        $data = $request->validate([
            'clientName' => 'required|max:100|min:5',
            'phone' => 'required|min:11',
            'email' => 'required|email:rfc',
            'website' => 'required',
            'city' => 'required',
            'image' => 'required|image',
        ], $messages);
        
        $fileName = $this->upload($request->image, 'assets/images');

        $data['image'] = $fileName;

        $data['active'] = isset($request->active);

        Client::create($data);
        return redirect ('clients');
    }

    //Display the specified resource.
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
        return view('showClient', compact('client'));
    }

    //Show the form for editing the specified resource.
    public function edit(string $id)
    {
        $client = Client::findOrFail($id);
        return view('editClient', compact('client'));
    }

    //Update the specified resource in storage.
    public function update(Request $request, string $id)
    {
        $id = $request->id;

        $messages = $this ->errMsgs();
        $data = $request->validate([
            'clientName' => 'required|max:100|min:5',
            'phone' => 'required|min:11',
            'email' => 'required|email:rfc',
            'website' => 'required',
            'city' => 'required',
            'image' => 'sometimes|file:image', //nullable
        ], $messages);
        
        if ($request->hasFile('image')) {
            // storage - unlink
            // $imgExt = $request->image->getClientOriginalExtension();
            // $fileName = time().'.'.$imgExt;
            // $path = 'assets/images';
            // $request->image->move($path, $fileName);
            $fileName = $this->upload($request->image, 'assets/images');
            $data['image'] = $fileName;
        }
        $data['active'] = isset($request->active);

        Client::where('id', $id)->update($data);
        //Client::where('id', $id)->update($request->only($this-> columns ));
        return redirect('clients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Client::where('id', $id)->delete();
        return redirect('clients');
    }

    /**
     * show trashed records.
     */
    public function trash()
    {
        $trashed = Client::onlyTrashed()->get();
        return view('trashClient', compact('trashed'));
    }

    /**
     * Restore trashed record.
     */
    public function restore(string $id)
    {
        Client::where('id', $id)->restore();
        return redirect('clients');
    }

    /**
     * permenant delete.
     */
    public function forceDelete(Request $request)
    {
        $id = $request->id;
        Client::where('id', $id)->forceDelete();
        return redirect('trashClient');
    }

    // error custom msgs
    public function errMsgs()
    {
       return [
            'clientName.required' => 'برجاء ادخال الاسم',
            'phone.required' => ' برجاء ادخال رقم تليفون صحيح ' ,
        ];
    }
}
