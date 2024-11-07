@extends('navigation')

@section('ganti')

<link rel="stylesheet" href="{{ asset('css/tables.css') }}">

<div class="form--wrapper">
    <div class="form--container">
        <h3 class="form--title">Add New Rental</h3>
        
        <!-- Form untuk menambah data rental -->
        <form action="{{ route('rentals.store') }}" method="POST">
            @csrf

            <!-- Nama Mobil -->
            <div class="form-group">
                <label for="nama_mobil">Nama Mobil</label>
                <input type="text" name="nama_mobil" id="nama_mobil" value="{{ old('nama_mobil') }}" required>
                @error('nama_mobil')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Plat Nomor -->
            <div class="form-group">
                <label for="plat">Plat Nomor</label>
                <input type="text" name="plat" id="plat" value="{{ old('plat') }}" required>
                @error('plat')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tanggal Disewa -->
            <div class="form-group">
                <label for="tanggal_disewa">Tanggal Disewa</label>
                <input type="date" name="tanggal_disewa" id="tanggal_disewa" value="{{ old('tanggal_disewa') }}" required>
                @error('tanggal_disewa')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tanggal Kembali -->
            <div class="form-group">
                <label for="tanggal_kembali">Tanggal Kembali</label>
                <input type="date" name="tanggal_kembali" id="tanggal_kembali" value="{{ old('tanggal_kembali') }}" required>
                @error('tanggal_kembali')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Nama Penyewa -->
            <div class="form-group">
                <label for="nama_penyewa">Nama Penyewa</label>
                <input type="text" name="nama_penyewa" id="nama_penyewa" value="{{ old('nama_penyewa') }}" required>
                @error('nama_penyewa')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Harga -->
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" id="harga" value="{{ old('harga') }}" required>
                @error('harga')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Status -->
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" required>
                    <option value="available" {{ old('status') == 'available' ? 'selected' : '' }}>Available</option>
                    <option value="rented" {{ old('status') == 'rented' ? 'selected' : '' }}>Rented</option>
                </select>
                @error('status')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="submit--button">Save Rental</button>
            </div>
        </form>
    </div>
</div>

@endsection
