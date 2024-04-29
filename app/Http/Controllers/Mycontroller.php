<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    //
    public function my_data(){
        return view('test');
    }

    // Task 2 code ........

    public function store(Request $request)
    {   
        $user = new User;
        $user->fname = $request['fname'];
        $user->lname = $request['lname'];
       
    return 'Data Recieved Successfully <br> 
    First Name : '. $user->{'fname'} . ' <br> Last Name : ' . $user->{'lname'};

    }
    
    // end of task 2 .......

}
