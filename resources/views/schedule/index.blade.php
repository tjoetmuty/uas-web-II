<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
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
            <div>
            <button class="btn" onclick="my_modal_1.showModal()">open modal</button>
 <dialog id="my_modal_1" class="modal">
  <div class="modal-box">
  <form method="POST">
            @csrf
            <div class="mb-4">
                <h3 class="text-xl font-bold mb-2">Add New Schedule</h3>
            </div>
            <div class="mb-4">
                <label for="title" class="block text-gray-700  text-sm font-bold mb-2">Title:</label>
                <input type="text" id="title" name="title" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('title') is-invalid @enderror" value="{{old('title')}}">
            </div>
            {{--alert--}}
            @error('title')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">{{$message}}</p>
            </div>

            @enderror
            {{--end alert--}}

            <div class="mb-4">
                <label for="description" class="block text-gray-700  text-sm font-bold mb-2">Description:</label>
                <input type="text" id="description" name="description" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('description') is-invalid @enderror" value="{{old('description')}}">
            </div>
            {{--alert--}}
            @error('description')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">{{$message}}</p>
            </div>

            @enderror
            {{--end alert--}}

            <div class="mb-4">
                <label for="task" class="block text-gray-700  text-sm font-bold mb-2">Task:</label>
                <input type="text" id="task" name="task" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('task') is-invalid @enderror" value="{{old('task')}}">
            </div>
            {{--alert--}}
             @error('task')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">{{$message}}</p>
            </div>
            
            @enderror
            {{--end alert--}}


            <div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" name="tambah" href="">Tambah</button>
            </div>

            <!-- <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" name="tambah" href="">Tambah</button> -->
        </form>
       
        <button class="btn">Close</button>
      </form>
    </div>
  </div>
</dialog>
            </div>
        </div>
</nav>
    <div class="container mx-auto p-8">
    <div class="overflow-x-auto">
  <table class="table">
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
                @endforelse
    </tbody>
  </table>
</div>
</div> 

</body>
</html>