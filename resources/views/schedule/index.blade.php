<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Schedule</title>
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
                    <th class="border px-4 py-2">Task Title</th>
                    <th class="border px-4 py-2">Deskription</th>
                    <th class="border px-4 py-2">Task</th>
                    <th class="border px-4 py-2">Start</th>
                    <th class="border px-4 py-2">End</th>
                    <th class="border px-4 py-2">Notes</th>
                    <th class="border px-4 py-2">Priority</th>
                    <th class="border px-4 py-2">Status</th>
                    <th class="border px-4 py-2">Asignee</th>
                    <th class="border px-4 py-2">Category Task</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($schedule as $jadwal)
                <tr>
                    <td class="border px-4 py-2">{{$loop -> iteration}}</td>
                    <td class="border px-4 py-2">{{$jadwal -> title}}</td>
                    <td class="border px-4 py-2">{{$jadwal -> description}}</td>
                    <td class="border px-4 py-2">{{$jadwal -> task}}</td>
                    <td class="border px-4 py-2">{{$jadwal -> start_date}}</td>
                    <td class="border px-4 py-2">{{$jadwal -> end_date}}</td>
                    <td class="border px-4 py-2">{{$jadwal -> notes}}</td>
                    <td class="border px-4 py-2">{{$jadwal -> priority}}</td>
                    <td class="border px-4 py-2">{{$jadwal -> status}}</td>
                    <td class="border px-4 py-2">{{$jadwal -> asignee}}</td>
                    <td class="border px-4 py-2">{{$jadwal -> category_task}}</td>
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
</body>
</html>