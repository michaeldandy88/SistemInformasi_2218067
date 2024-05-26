<!DOCTYPE html>
<html>
<head>
    <title>Data Pegawai</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Data Pegawai</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jabatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $pgw)
            <tr>
                <td>{{ $pgw->nama_pegawai }}</td>
                <td>{{ $pgw->alamat_pegawai }}</td>
                <td>{{ $pgw->jabatan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
