<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiny;

class TinyController extends Controller
{
    //
    public function register(Request $request) {
        $item = new Tiny;
        $item->complete_name = $request->complete_name;
        $item->email = $request->email;
        $item->password = $request->password;
        $item->save();
        return redirect('/');
    }
}
