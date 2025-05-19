<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function insert(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:150',
            'code' => 'required|string|size:11',
            'type' => 'required|integer|in:1,2'
        ]);

        DB::table('video')->insert([
            'Video_Code' => $request->input('code'),
            'Title' => $request->input('title'),
            'Added_Date' => \Carbon\Carbon::today()->toDateString(),
            'ID_VidCat' => $request->input('VidCat'),
            'ID_VidType' => $request->input('type'),
            'ID_User' => 1
        ]);

        return back()->with('success', 'Video dodane pomyślnie');
    }
}

