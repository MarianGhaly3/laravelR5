<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\User;
use App\Mail\ContactClient;
use Illuminate\Support\Facades\Mail;

class Mycontroller extends Controller
{
    //
    public function my_data(){
        return view('test');
    }

    // Task 2 code ........
    // public function store(Request $request){   
    //     $user = new User;
    //     $user->fname = $request['fname'];
    //     $user->lname = $request['lname'];
    // return 'Data Recieved Successfully <br> 
    // First Name : '. $user->{'fname'} . ' <br> Last Name : ' . $user->{'lname'};
    // }
    
    public function receiveData(Request $request){
        $fname = $request->fname;
        $lname = $request->lname;
        return view('formdata', compact('fname', 'lname'));
    }
    // end of task 2 .......
    public function myVal(){
        //session()->put('test', 'First Laravel session');
        session()->flash('test1', 'First Laravel session');
        return 'Sessions Created Successfully';

    }
    public function restoreVal()
    {
        return 'My Session Value: ' . session('test1');
    }
    public function deleteVal()
    {
        // session()->forget('test');
        session()->flush();
        return 'Session Removed';
    }

    public function sendClientMail()
    {
        $data = Client::findOrFail(1)-> toArray();
        $data['theMessage'] = 'my message';
        Mail::to($data['email'])->send(
            new ContactClient($data)
        );
        return "mail sent successfully";
    }
}
