<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil</title>
    <link rel="stylesheet" href="{{ asset('css/rent.css') }}" />
</head>
<body>
<div class="form-container">
    <h2>Form Pemesanan Rental Mobil</h2>
    <form id="rentalForm" onsubmit="return handleSubmit()">
        <div class="form-row">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-row">
            <label for="phone">No. Telepon:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-row">
            <label for="car">Mobil:</label>
            <select id="car" name="car" required onchange="calculateTotalPrice()">
                <option value="">Pilih Mobil</option>
                <option value="Toyota Avanza">Ferrari 599 GTB Fiorano</option>
                <option value="Toyota Avanza">Ferrari Portofino</option>
                <option value="Honda Brio">Lamborghini</option>
                <option value="Mitsubishi Pajero">Mitsubishi Pajero</option>
                <option value="Suzuki Ertiga">BMW X6</option>
            </select>
        </div>
        <div class="form-row">
            <label for="startDate">Tanggal Mulai:</label>
            <input type="date" id="startDate" name="startDate" required onchange="calculateTotalPrice()">
        </div>
        <div class="form-row">
            <label for="endDate">Tanggal Selesai:</label>
            <input type="date" id="endDate" name="endDate" required onchange="calculateTotalPrice()">
        </div>
        <div class="form-row">
            <label for="price">Harga Total:</label>
            <input type="text" id="price" name="price" readonly>
        </div>
        <div class="form-row">
            <label for="payment">Metode Pembayaran:</label>
            <select id="payment" name="payment" required>
                <option value="">Pilih Metode Pembayaran</option>
                <option value="Transfer Bank">Transfer Bank</option>
                <option value="Kartu Kredit">Kartu Kredit</option>
                <option value="Gopay">Gopay</option>
                <option value="Dana">Dana</option>
            </select>
        </div>
        <div class="submit-button">
            <button type="submit">Pesan Sekarang</button>
        </div>
    </form>
    <div class="notification" id="notification">Terima kasih! Pemesanan Anda berhasil.</div>
</div>
<script src="{{ asset('js/form.js') }}"></script>
</body>
</html>
