<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Bulanan Pembayaran Wifi</title>
    <style>
        html {
            font-size: 14px; /* Increased font size for better readability */
        }

        .table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px; /* Added margin for spacing */
        }

        .table-bordered th,
        .table-bordered td {
            padding: 10px; /* Increased padding for better spacing */
            border: 1px solid black;
            text-align: left; /* Ensured text alignment for better readability */
        }

        .table-bordered th {
            background-color: #f2f2f2; /* Added background color for table header */
        }

        .subtitle {
            font-weight: bold;
        }

        .date {
            font-style: italic;
        }

        h1 {
            text-align: center; /* Centered the header text */
        }

        .download-date {
            text-align: right;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1>Data Bulanan Pembayaran Wifi</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal Jatuh Tempo</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelanggans as $index => $pelanggan)
                <tr>
                    <td>{{ $index + 1 }}.</td>
                    <td>{{ $pelanggan->nama_pelanggan }}</td>
                    <td>{{ $pelanggan->jatuh_tempo }}</td>
                    <td>{{ $pelanggan->status }}</td>
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
