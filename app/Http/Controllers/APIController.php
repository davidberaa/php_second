<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class APIController extends Controller
{
    function postFunction(Request $request) {
        if($request->isMethod('post')) {
            $userData = $request->input();
            $userName = $userData['name'];
            return response()->json(['message'=>'წარმატებით განახლდა']);
        }
    }

    function putFunction(Request $request) {
        if($request->isMethod('put')) {
            $userData = $request->input();
            $userName = $request['name'];
            return response()->json(['message'=>'წარმატებით დაემატა']);
        }
    }

    function delFunction(Request $request) {
        if($request->isMethod('delete')) {
            $userData = $request->input();
            $userName = $request['name'];
            return response()->json(['message'=>'წარმატებით წაიშალა']);
        }
    }
}
