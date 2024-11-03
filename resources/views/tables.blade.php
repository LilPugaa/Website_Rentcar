@extends('navigation')

@section('ganti')

<link rel="stylesheet" href="{{ asset('css/tables.css') }}">

        <div class="table--wrapper">
            <div class="header--container">
                <h3 class="main--title">Cars data</h3>
                <a href="#" class="create--button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-plus">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                        <path d="M9 12h6" />
                        <path d="M12 9v6" />
                    </svg>
                </a>
            </div>
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
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Avanza</td>
                                <td>B 1234 ABC</td>
                                <td>2024-10-01</td>
                                <td>2024-10-05</td>
                                <td>Gung Yuga</td>
                                <td>Rp 500.000</td>
                                <td>Disewa</td>
                                <td class="td--icon"><a href="#" class="edit--button"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  
                                    viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  
                                    stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path 
                                    stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" />
                                    </svg></a>
                                    <a href="#" class="delete--button"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  
                                    fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" 
                                    d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path 
                                    d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path 
                                    d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>CR-V</td>
                                <td>B 5678 DEF</td>
                                <td>2024-10-02</td>
                                <td>2024-10-07</td>
                                <td>Wayan Suta</td>
                                <td>Rp 750.000</td>
                                <td>Tersedia</td>
                                <td class="td--icon"><a href="#" class="edit--button"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  
                                    viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  
                                    stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path 
                                    stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" />
                                    </svg></a>
                                    <a href="#" class="delete--button"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  
                                    fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" 
                                    d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path 
                                    d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path 
                                    d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sigra</td>
                                <td>B 9101 GHI</td>
                                <td>2024-10-03</td>
                                <td>2024-10-08</td>
                                <td>Made Jaya</td>
                                <td>Rp 300.000</td>
                                <td>Disewa</td>
                                <td class="td--icon"><a href="#" class="edit--button"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  
                                    viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  
                                    stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path 
                                    stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" />
                                    </svg></a>
                                    <a href="#" class="delete--button"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  
                                    fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" 
                                    d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path 
                                    d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path 
                                    d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>X5</td>
                                <td>B 1234 JKL</td>
                                <td>2024-10-04</td>
                                <td>2024-10-10</td>
                                <td>Putri Ayu</td>
                                <td>Rp 1.500.000</td>
                                <td>Tersedia</td>
                                <td class="td--icon"><a href="#" class="edit--button"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  
                                    viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  
                                    stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path 
                                    stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" />
                                    </svg></a>
                                    <a href="#" class="delete--button"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  
                                    fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" 
                                    d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path 
                                    d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path 
                                    d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg></a>
                                </td>
                            </tr>
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>

@endsection