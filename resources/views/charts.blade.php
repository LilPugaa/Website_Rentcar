<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Charts Admin | Rentcar</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/charts.css') }}">
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active--dashboard">
                <a href="{{ url('admin') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="active--tables">
                <a href="{{ url('tables') }}">
                    <i class="fas fa-table"></i>
                    <span>Tables</span>
                </a>
            </li>
            <li class="active--charts">
                <a href="{{ url('charts') }}">
                    <i class="fas fa-chart-bar"></i>
                    <span>Charts</span>
                </a>
            </li>
            <li class="active--settings">
                <a href="{{ url('settings') }}">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li class="logout">
                <a href="#">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Rent Car</span>
                <h2>Charts</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="Search">
                </div>
                <h6>Gung Yuga</h6>
                <img src="{{ asset('images/profil.jpg') }}" alt="bg">
            </div>
        </div>

        <div class="card--container">
            <h3 class="main--title">Today's data</h3>
            <div class="card--wrapper">
                <div class="payment--card light-green">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Payment amount</span>
                            <span class="amount--value">$500.00</span>
                        </div>
                        <i class="fas fa-dollar-sign icon"></i>
                    </div>
                    <span class="card--detail">**** **** **** 1234</span>
                </div>

                <div class="payment--card light-purple">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Payment order</span>
                            <span class="amount--value">$200.00</span>
                        </div>
                        <i class="fas fa-list icon dark-purple"></i>
                    </div>
                    <span class="card--detail">**** **** **** 5678</span>
                </div>

                <div class="payment--card light-red">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Payment customer</span>
                            <span class="amount--value">$350.00</span>
                        </div>
                        <i class="fas fa-users icon dark-red"></i>
                    </div>
                    <span class="card--detail">**** **** **** 9101</span>
                </div>

                <div class="payment--card light-blue">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Payment proceed</span>
                            <span class="amount--value">$150.00</span>
                        </div>
                        <i class="fas fa-check icon dark-blue"></i>
                    </div>
                    <span class="card--detail">**** **** **** 1121</span>
                </div>
            </div>
        </div>

        <div class="table--wrapper">
            <h3 class="main--title">Car data</h3>
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
                            <th>Action</th>
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
                                <td class="td--icon"><a href="#" class="edit-button"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  
                                    viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  
                                    stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path 
                                    stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" />
                                    </svg></a>
                                    <a href="#" class="delete-button"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  
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
                                <td>Disewa</td>
                                <td class="td--icon"><a href="#" class="edit-button"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  
                                    viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  
                                    stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path 
                                    stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" />
                                    </svg></a>
                                    <a href="#" class="delete-button"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  
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
                                <td class="td--icon"><a href="#" class="edit-button"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  
                                    viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  
                                    stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path 
                                    stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" />
                                    </svg></a>
                                    <a href="#" class="delete-button"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  
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
                                <td>Disewa</td>
                                <td class="td--icon"><a href="#" class="edit-button"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  
                                    viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  
                                    stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path 
                                    stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" />
                                    </svg></a>
                                    <a href="#" class="delete-button"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  
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
</body>
</html>