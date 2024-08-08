<!DOCTYPE html>
<html>
<head>
    <title>Cetak Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .print-area {
            padding: 10mm;
            border: 1px solid #ddd;
            width: 80mm;
            margin: 0 auto;
        }
        .header, .footer {
            text-align: center;
            margin-bottom: 10px;
        }
        .header h2, .header h4, .footer p {
            margin: 0;
        }
        .content {
            margin-bottom: 10px;
        }
        .content p {
            margin: 5px 0;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 5px;
            text-align: left;
        }
        .table th {
            background-color: #f2f2f2;
        }
        .summary-table {
            width: 100%;
            margin-top: 10px;
            border-collapse: collapse;
        }
        .summary-table td {
            padding: 5px;
            text-align: right; /* Align text to the right */
        }
        .summary-table td:first-child {
            text-align: left; /* Align the first column to the left for labels */
        }
        @media print {
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                visibility: hidden;
            }
            .print-area {
                visibility: visible;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                margin: 0;
            }
        }
    </style>
</head>
<body onload="window.print()">
    <div class="print-area">
        <div class="header">
            <h2>Cann Garage</h2>
            <h4>Banda Aceh</h4>
            <p>Telp: (021) 12345678</p>
        </div>
        <div class="content">
            <p><strong>Id Transaksi:</strong> {{ $pem->id ?? 'Data tidak tersedia' }}</p>
            <p><strong>Kode Servis:</strong> {{ $pem->servis->id ?? 'Data tidak tersedia' }}</p>
            <p><strong>Nama Customer:</strong> {{ $pem->servis->customers->nama_customer ?? 'Data tidak tersedia' }}</p>
            <p><strong>No Plat:</strong> {{ $pem->servis->no_polisi ?? 'Data tidak tersedia' }}</p>
            <p><strong>Customer Service:</strong> {{ $pem->servis->petugas->nama_petugas ?? 'Data tidak tersedia' }}</p>
            <p><strong>Montir:</strong> {{ $pem->servis->montir->nama_montir ?? 'Data tidak tersedia' }}</p>
            <p><strong>Tanggal Servis:</strong> {{ $pem->servis->tanggal_servis ?? 'Data tidak tersedia' }}</p>
            <p><strong>Tanggal Pembayaran:</strong> {{ $pem->tanggal_pembayaran ?? 'Data tidak tersedia' }}</p>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Keterangan</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <tr>                    
                    <td>{{ $pem->servis->perbaikan ?? 'Data tidak tersedia' }}</td>
                    <td>{{ number_format($pem->harga, 2) ?? 'Data tidak tersedia' }}</td>
                </tr>
            </tbody>
        </table>
        <table class="summary-table">
            <tr>
                <td><strong>Total</strong></td>
                <td>{{ number_format($pem->harga, 2) ?? 'Data tidak tersedia' }}</td>
            </tr>
            <tr>
                <td><strong>Bayar</strong></td>
                <td>{{ number_format($pem->bayar, 2) ?? 'Data tidak tersedia' }}</td>
            </tr>
            <tr>
                <td><strong>Kembalian</strong></td>
                <td><hr>{{ number_format($pem->kembalian, 2) ?? 'Data tidak tersedia' }}</td>
            </tr>
        </table>
        <div class="footer">
            <hr>
            <p>Terima kasih atas kunjungan Anda!</p>
            <p>Semoga hari Anda menyenangkan</p>
        </div>
    </div>
</body>
</html>
