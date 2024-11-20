<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Penyewaan Mobil</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .receipt-container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            padding: 25px;
            color: #333;
            text-align: center;
            border: 1px solid #ddd;
        }
        .receipt-header {
            font-size: 26px;
            font-weight: bold;
            color: #333;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .receipt-details {
            text-align: left;
            font-size: 16px;
            color: #555;
            margin-bottom: 15px;
        }
        .receipt-details div {
            margin: 10px 0;
            display: flex;
            justify-content: space-between;
        }
        .receipt-details span.label {
            color: #133E87;
            font-weight: bold;
        }
        .receipt-total {
            font-size: 20px;
            font-weight: bold;
            color: #133E87;
            margin-top: 20px;
            padding: 10px;
            border-radius: 8px;
            background: #f0f4fa;
        }
        .receipt-footer {
            font-size: 14px;
            color: #888;
            margin-top: 25px;
            font-style: italic;
            border-top: 1px solid #ddd;
            padding-top: 15px;
        }
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            font-size: 16px;
            color: #ffffff;
            background-color: #133E87;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .back-button:hover {
            background-color: #0d2c63;
        }
    </style>
</head>
<body>

<div class="receipt-container">
    <div class="receipt-header">Struk Penyewaan Mobil</div>
    <div class="receipt-details">
        <div><span class="label">Nama:</span> <span id="receipt-name"></span></div>
        <div><span class="label">No Telepon:</span> <span id="receipt-phone"></span></div>
        <div><span class="label">Mobil:</span> <span id="receipt-car"></span></div>
        <div><span class="label">Tanggal Mulai:</span> <span id="receipt-startDate"></span></div>
        <div><span class="label">Tanggal Selesai:</span> <span id="receipt-endDate"></span></div>
        <div><span class="label">Metode Pembayaran:</span> <span id="receipt-payment"></span></div>
    </div>
    <div class="receipt-total">Total: <span id="receipt-price"></span></div>
    <div class="receipt-footer">Terima kasih telah menggunakan layanan kami</div>
    <a href="{{ route('user') }}" class="back-button">Kembali ke Halaman Utama</a>
</div>
<script src="{{ asset('js/struk.js') }}"></script>
</body>
</html>
