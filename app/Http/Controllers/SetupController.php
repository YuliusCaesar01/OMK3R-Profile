<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use Illuminate\Support\Str;

class SetupController extends Controller
{
    public function viewinformation($id)
    {
        // Fetch the information based on the ID
        $information = Information::find($id);

        // Check if the information exists
        if (!$information) {
            return abort(404);
        }

        // Return a view with the information data
        return view('information.view', compact('information'));
    }
}
