@extends('navigation')

@section('ganti')

    <link rel="stylesheet" href="{{ asset('css/tables.css') }}">

    <div class="form--wrapper">
        <div class="header--container">
            <h3>Edit Rental</h3>
        </div>

        <form action="{{ route('rentals.update', $rental->id_rentals) }}" method="POST">
            @csrf
            @method('PUT') <!-- Menggunakan metode PUT untuk mengupdate data -->
            
            <div class="form--group">
                <label for="nama_mobil">Nama Mobil</label>
                <input type="text" id="nama_mobil" name="nama_mobil" value="{{ old('nama_mobil', $rental->nama_mobil) }}" required>
            </div>

            <div class="form--group">
                <label for="plat">Plat Nomor</label>
                <input type="text" id="plat" name="plat" value="{{ old('plat', $rental->plat) }}" required>
            </div>

            <div class="form--group">
                <label for="tanggal_disewa">Tanggal Disewa</label>
                <input type="date" id="tanggal_disewa" name="tanggal_disewa" value="{{ old('tanggal_disewa', $rental->tanggal_disewa) }}" required>
            </div>

            <div class="form--group">
                <label for="tanggal_kembali">Tanggal Kembali</label>
                <input type="date" id="tanggal_kembali" name="tanggal_kembali" value="{{ old('tanggal_kembali', $rental->tanggal_kembali) }}" required>
            </div>

            <div class="form--group">
                <label for="nama_penyewa">Nama Penyewa</label>
                <input type="text" id="nama_penyewa" name="nama_penyewa" value="{{ old('nama_penyewa', $rental->nama_penyewa) }}" required>
            </div>

            <div class="form--group">
                <label for="harga">Harga</label>
                <input type="number" id="harga" name="harga" value="{{ old('harga', $rental->harga) }}" required>
            </div>

            <div class="form--group">
                <label for="status">Status</label>
                <select name="status" id="status" required>
                    <option value="Disewa" {{ $rental->status == 'Disewa' ? 'selected' : '' }}>Disewa</option>
                    <option value="Tersedia" {{ $rental->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                    <!-- Tambahkan status lainnya jika ada -->
                </select>
            </div>

            <button type="submit">Update Rental</button>
        </form>
    </div>

@endsection
