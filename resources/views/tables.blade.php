@extends('navigation')

@section('ganti')

<link rel="stylesheet" href="{{ asset('css/tables.css') }}">

<div class="table--wrapper">
    <div class="header--container">
        <h3 class="main--title">Cars Data</h3>
        <!-- Tombol untuk menuju halaman create -->
        <a href="{{ route('rentals.create') }}" class="create--button">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-plus">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                <path d="M9 12h6" />
                <path d="M12 9v6" />
            </svg>
        </a>
    </div>

    <!-- Pesan Success/Error -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="table--container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mobil</th>
                    <th>Plat Nomor</th>
                    <th>Tanggal Disewa</th>
                    <th>Tanggal Kembali</th>
                    <th>Nama Penyewa</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th class="th--action">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rentals as $index => $rental)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $rental->nama_mobil }}</td>
                    <td>{{ $rental->plat }}</td>
                    <td>{{ $rental->tanggal_disewa }}</td>
                    <td>{{ $rental->tanggal_kembali }}</td>
                    <td>{{ $rental->name }}</td>
                    <td>Rp {{ number_format($rental->harga, 0, ',', '.') }}</td>
                    <td>{{ $rental->status }}</td>
                    <td class="td--icon">
                        <!-- Tombol Edit -->
                        <a href="{{ route('rentals.edit', $rental->id_rentals) }}" class="edit--button" title="Edit Rental">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                <path d="M16 5l3 3" />
                            </svg>
                        </a>
                        <!-- Form untuk menghapus data -->
                        <form action="{{ route('rentals.destroy', $rental->id_rentals) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this rental?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete--button" title="Delete Rental">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
