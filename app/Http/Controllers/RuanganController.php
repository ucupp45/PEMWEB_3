<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    /**
     * Show the dashboard with list of ruangan
     */
    public function dash_teknisi()
    {
        // Fetch all the ruangan
        $ruangan = Ruangan::paginate(10); // Optional: Adjust pagination as needed

        // Return the view with the ruangan data
        return view('teknisi.dash_teknisi', compact('ruangan'));
    }

    /**
     * Store a new ruangan
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'nama_ruangan' => 'required|string|max:255',
            'lokasi' => 'nullable|string|max:255',
        ]);

        // Create a new ruangan record
        Ruangan::create($validated);

        // Redirect back to the dashboard with a success message
        return redirect()->route('teknisi.dash_teknisi')->with('success', 'Ruangan successfully added.');
    }

    /**
     * Show the edit form for a ruangan
     */
    public function edit($id)
    {
        // Find the ruangan by its ID
        $ruangan = Ruangan::findOrFail($id);

        // Return the ruangan data as JSON for the modal to use
        return response()->json($ruangan);
    }

    /**
     * Update an existing ruangan
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validated = $request->validate([
            'nama_ruangan' => 'required|string|max:255',
            'lokasi' => 'nullable|string|max:255',
        ]);

        // Find the ruangan and update its details
        $ruangan = Ruangan::findOrFail($id);
        $ruangan->update($validated);

        // Redirect back to the dashboard with a success message
        return redirect()->route('teknisi.dash_teknisi')->with('success', 'Ruangan successfully updated.');
    }

    /**
     * Delete a ruangan
     */
    public function destroy($id)
    {
        // Find the ruangan and delete it
        $ruangan = Ruangan::findOrFail($id);
        $ruangan->delete();

        // Redirect back to the dashboard with a success message
        return redirect()->route('teknisi.dash_teknisi')->with('success', 'Ruangan successfully deleted.');
    }
}
