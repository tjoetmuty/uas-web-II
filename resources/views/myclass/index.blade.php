<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Daftar Kelas</title>
</head>
<body>
    <nav class="bg-yellow-500">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white font-semibold text-lg"><a href="">Daftar Kelas</a></div>
            <div>
                <a href="" class="text-white hover:text-gray-200 px-4">Tambah Data</a>
            </div>
        </div>
    </nav>
    <div>
        <table>
            <thead>
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Nama Course</th>
                    <th class="border px-4 py-2">Deskripsi</th>
                    <th class="border px-4 py-2">Nama Kelas</th>
                    <th class="border px-4 py-2">Hari</th>
                    <th class="border px-4 py-2">Waktu Mulai</th>
                    <th class="border px-4 py-2">Waktu Selesai</th>
                    <th class="border px-4 py-2">Level</th>
                    <th class="border px-4 py-2">Topik</th>
                    <th class="border px-4 py-2">Pertemuan</th>
                    <th class="border px-4 py-2">Tahun Akademik</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($myclass as $kelas)
                <tr>
                    <td class="border px-4 py-2">{{$loop -> iteration}}</td>
                    <td class="border px-4 py-2">{{$kelas -> course}}</td>
                    <td class="border px-4 py-2">{{$kelas -> deskripsi}}</td>
                    <td class="border px-4 py-2">{{$kelas -> nama_kelas}}</td>
                    <td class="border px-4 py-2">{{$kelas -> hari}}</td>
                    <td class="border px-4 py-2">{{$kelas -> waktu_mulai}}</td>
                    <td class="border px-4 py-2">{{$kelas -> waktu_selesai}}</td>
                    <td class="border px-4 py-2">{{$kelas -> level}}</td>
                    <td class="border px-4 py-2">{{$kelas -> topik}}</td>
                    <td class="border px-4 py-2">{{$kelas -> pertemuan}}</td>
                    <td class="border px-4 py-2">{{$kelas -> tahun_akademik}}</td>
                    <td class="px-4 py-2 flex justify-around">
                        <form method="POST">
                        <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block mb-1">Edit</a>
                        </form>
                    </td>
                </tr>
                @empty
                <h3 class="text-xl font-bold mb-5">Kuota Kelas Full</h3>
                @endforelse
            </tbody>
        </table>
    </div>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
</body>
</html>