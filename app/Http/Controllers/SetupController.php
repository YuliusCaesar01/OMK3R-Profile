<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Information;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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

    public function createinformation()
    {
        return view('createinformation');
    }

    public function storeinformation(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_buat' => 'required|date',
            'info' => 'required|string|max:1000',
            'tanggal' => 'required|date',
        ]);

        Information::create([
            'judul' => $request->judul,
            'tanggal_buat' => Carbon::parse($request->tanggal_buat)->format('Y-m-d'),
            'info' => $request->info,
            'tanggal' => Carbon::parse($request->tanggal_buat)->format('Y-m-d'),
        ]);

        return redirect()->route('content')->with('success', 'Information added successfully');
    }

    public function editinformation($id)
    {
        $information = Information::find($id);

        if (!$information) {
            return abort(404);
        }

        return view('editinformation', compact('information'));
    }

    public function updateinformation(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_buat' => 'required|date',
            'info' => 'required|string|max:1000',
            'tanggal' => 'required|date'
        ]);

        $information = Information::find($id);

        if (!$information) {
            return abort(404);
        }

        $information->judul = $request->judul;
        $information->tanggal_buat = $request->tanggal_buat;
        $information->info = $request->info;
        $information->tanggal = $request->tanggal;
        $information->save();

        return redirect()->route('content')->with('success', 'Information updated successfully');
    }

    public function deleteinformation($id)
    {
        // Fetch the information based on the ID
        $information = Information::find($id);

        // Check if the information exists
        if (!$information) {
            return abort(404, 'Information not found');
        }

        // Delete the information
        $information->delete();

        return redirect()->route('content')->with('success', 'Information deleted successfully');
    }
}


