<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Bulanan Pembayaran Wifi</title>
    <style>
        html {
            font-size: 14px;
            /* Increased font size for better readability */
        }

        .table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            /* Added margin for spacing */
        }

        .table-bordered th,
        .table-bordered td {
            padding: 10px;
            /* Increased padding for better spacing */
            border: 1px solid black;
            text-align: left;
            /* Ensured text alignment for better readability */
        }

        .table-bordered th {
            background-color: #f2f2f2;
            /* Added background color for table header */
        }

        .subtitle {
            font-weight: bold;
        }

        .date {
            font-style: italic;
        }

        h1 {
            text-align: center;
            /* Centered the header text */
        }

        .download-date {
            text-align: right;
            margin-top: 20px;
        }

        .table-bordered th {
            text-align: center;
            /* Center text in table headers */
        }
    </style>
</head>

<body>
    <h1>Riwayat - Data Bulanan Pembayaran Wifi</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Pelanggan</th>
                <th>Nominal Bayar</th>
                <th>Tanggal bayar</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php
                function formatRupiah($number)
                {
                    return 'Rp ' . number_format($number, 0, ',', '.');
                }
            @endphp
            @foreach ($riwayats as $index => $riwayat)
                <tr>
                    <td style="text-align: center; width:5%">{{ $index + 1 }}.</td>
                    <td style="width: 25%">{{ $riwayat->nama_pelanggan }}</td>
                    <td style="text-align: center;width: 25%">{{ formatRupiah($riwayat->nominal_bayar) }}</td>
                    <td style="text-align: center;width: 25%">{{ $riwayat->tgl_bayar }}</td>
                    <td style="text-align: center;width: 20%">{{ $riwayat->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="download-date">
        <h5>
            <span class="subtitle">Diunduh pada,</span>
            <span class="date">{{ now()->format('d M Y') }}</span>
        </h5>
    </div>
</body>

</html>
