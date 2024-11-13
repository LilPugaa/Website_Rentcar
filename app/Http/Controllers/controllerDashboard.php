<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;

class ControllerDashboard extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data dari model Rental
        $rentals = Rental::all();

        // Mengirim data ke view 'tables' (pastikan file tables.blade.php ada di resources/views/)
        return view('tables', compact('rentals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Tampilkan form untuk membuat data rental baru
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validated = $request->validate([
            'nama_mobil' => 'required|string|max:255',
            'plat' => 'required|string|max:50',
            'tanggal_disewa' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'name' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'status' => 'required|string',
        ]);

        // Simpan data rental baru
        Rental::create($validated);

        // Redirect ke halaman tabel dengan pesan sukses
        return redirect()->route('rentals.index')->with('success', 'Rental created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_rentals)
    {
        // Ambil data rental berdasarkan ID
        $rental = Rental::find($id_rentals);

        // Jika data tidak ditemukan, arahkan dengan pesan error
        if (!$rental) {
            return redirect()->route('rentals.index')->with('error', 'Rental not found');
        }

        // Kirim data rental ke view 'show' untuk menampilkan detail
        return view('show', compact('rental'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_rentals)
    {
        // Ambil data rental berdasarkan ID untuk diedit
        $rental = Rental::find($id_rentals);

        // Jika rental tidak ditemukan, tampilkan pesan error
        if (!$rental) {
            return redirect()->route('rentals.index')->with('error', 'Rental not found');
        }

        // Tampilkan form edit
        return view('edit', compact('rental'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_rentals)
    {
        // Mencari rental berdasarkan ID
        $rental = Rental::find($id_rentals);

        // Jika rental tidak ditemukan
        if (!$rental) {
            return redirect()->route('rentals.index')->with('error', 'Rental not found');
        }

        // Validasi input
        $validated = $request->validate([
            'nama_mobil' => 'required|string|max:255',
            'plat' => 'required|string|max:50',
            'tanggal_disewa' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'nama_penyewa' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'status' => 'required|string',
        ]);

        // Update data rental
        $rental->update($validated);

        // Redirect dengan pesan sukses
        return redirect()->route('rentals.index')->with('success', 'Rental updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_rentals)
    {
        // Cari dan hapus data rental berdasarkan ID
        $rental = Rental::find($id_rentals);

        // Jika rental tidak ditemukan, tampilkan pesan error
        if (!$rental) {
            return redirect()->route('rentals.index')->with('error', 'Rental not found');
        }

        // Hapus data rental
        $rental->delete();

        // Redirect setelah berhasil dihapus
        return redirect()->route('rentals.index')->with('success', 'Rental deleted successfully');
    }
}
