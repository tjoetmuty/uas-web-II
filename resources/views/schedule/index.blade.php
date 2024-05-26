<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    @vite('resources/css/app.css')
    <title>Schedule</title>
</head>
<body>
<nav class="bg-yellow-500">
    <div class="container mx-auto flex justify-between items-center p-4">
        <div class="text-white font-semibold text-xl">Schedule</div>
        <button class="btn" onclick="my_modal_1.showModal()">Add Schedule</button>
    </div>
    <dialog id="my_modal_1" class="modal">
        <div class="modal-box">
            <form method="POST">
                @csrf
                <div class="mb-4">
                    <h3 class="text-xl font-bold mb-2">Add New Schedule</h3>
                </div>
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                    <input type="text" id="title" name="title" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('title') is-invalid @enderror" value="{{ old('title') }}">
                </div>
                {{--alert--}}
                @error('title')
                <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                    <p class="font-bold">{{ $message }}</p>
                </div>
                @enderror
                {{--end alert--}}
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                    <input type="text" id="description" name="description" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('description') is-invalid @enderror" value="{{ old('description') }}">
                </div>
                {{--alert--}}
                @error('description')
                <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                    <p class="font-bold">{{ $message }}</p>
                </div>
                @enderror
                {{--end alert--}}
                <div class="mb-4">
                    <label for="task" class="block text-gray-700 text-sm font-bold mb-2">Task:</label>
                    <input type="text" id="task" name="task" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('task') is-invalid @enderror" value="{{ old('task') }}">
                </div>
                {{--alert--}}
                @error('task')
                <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                    <p class="font-bold">{{ $message }}</p>
                </div>
                @enderror
                {{--end alert--}}
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="mb-4 w-full md:w-1/2 md:pr-2">
                        <label for="start_date" class="block text-gray-700 text-sm font-bold mb-2">Start:</label>
                        <input type="date" id="start_date" name="start_date" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('start_date') is-invalid @enderror" value="{{ old('start_date') }}">
                        {{--alert--}}
                        @error('start_date')
                        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                            <p class="font-bold">{{ $message }}</p>
                        </div>
                        @enderror
                        {{--end alert--}}
                    </div>
                    <div class="mb-4 w-full md:w-1/2 md:pl-2">
                        <label for="end_date" class="block text-gray-700 text-sm font-bold mb-2">End:</label>
                        <input type="date" id="end_date" name="end_date" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('end_date') is-invalid @enderror" value="{{ old('end_date') }}">
                        {{--alert--}}
                        @error('end_date')
                        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                            <p class="font-bold">{{ $message }}</p>
                        </div>
                        @enderror
                        {{--end alert--}}
                    </div>
                </div>
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="mb-4 w-full md:w-1/2 md:pr-2">
                        <label for="notes" class="block text-gray-700 text-sm font-bold mb-2">Notes:</label>
                        <input type="text" id="notes" name="notes" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('notes') is-invalid @enderror" value="{{ old('notes') }}">
                        {{--alert--}}
                        @error('notes')
                        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                            <p class="font-bold">{{ $message }}</p>
                        </div>
                        @enderror
                        {{--end alert--}}
                    </div>
                    <div class="mb-4 w-full md:w-1/2 md:pl-2">
                        <label for="priority" class="block text-gray-700 text-sm font-bold mb-2">Priority:</label>
                        <input type="number" id="priority" name="priority" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('priority') is-invalid @enderror" value="{{ old('priority') }}">
                        {{--alert--}}
                        @error('priority')
                        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                            <p class="font-bold">{{ $message }}</p>
                        </div>
                        @enderror
                        {{--end alert--}}
                    </div>
                </div>
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="mb-4 w-full md:w-1/2 md:pr-2">
                        <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
                        <input type="text" id="status" name="status" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('status') is-invalid @enderror" value="{{ old('status') }}">
                        {{--alert--}}
                        @error('status')
                        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                            <p class="font-bold">{{ $message }}</p>
                        </div>
                        @enderror
                        {{--end alert--}}
                    </div>
                    <div class="mb-4 w-full md:w-1/2 md:pl-2">
                        <label for="asignee" class="block text-gray-700 text-sm font-bold mb-2">Asignee:</label>
                        <input type="text" id="asignee" name="asignee" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('asignee') is-invalid @enderror" value="{{ old('asignee') }}">
                        {{--alert--}}
                        @error('asignee')
                        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                            <p class="font-bold">{{ $message }}</p>
                        </div>
                        @enderror
                        {{--end alert--}}
                    </div>
                </div>
                <div class="mb-4">
                    <label for="category_task" class="block text-gray-700 text-sm font-bold mb-2">Category Task:</label>
                    <input type="text" id="category_task" name="category_task" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('category_task') is-invalid @enderror" value="{{ old('category_task') }}">
                    {{--alert--}}
                    @error('category_task')
                    <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                        <p class="font-bold">{{ $message }}</p>
                    </div>
                    @enderror
                    {{--end alert--}}
                </div>
                <form method="dialog">
                    <button class="btn">Add</button>
                </form>
            </form>
        </div>
    </dialog>
</nav>

<div class="container mx-auto p-4">
    <div class="overflow-x-auto">
        <table class="table w-full" id="schedule-table">
            <thead>
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Task Title</th>
                    <th class="border px-4 py-2">Description</th>
                    <th class="border px-4 py-2">Task</th>
                    <th class="border px-4 py-2">Start</th>
                    <th class="border px-4 py-2">End</th>
                    <th class="border px-4 py-2">Notes</th>
                    <th class="border px-4 py-2">Priority</th>
                    <th class="border px-4 py-2">Status</th>
                    <th class="border px-4 py-2">Asignee</th>
                    <th class="border px-4 py-2">Category Task</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($schedule as $jadwal)
                <tr>
                    <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="border px-4 py-2">{{ $jadwal->title }}</td>
                    <td class="border px-4 py-2">{{ $jadwal->description }}</td>
                    <td class="border px-4 py-2">{{ $jadwal->task }}</td>
                    <td class="border px-4 py-2">{{ $jadwal->start_date }}</td>
                    <td class="border px-4 py-2">{{ $jadwal->end_date }}</td>
                    <td class="border px-4 py-2">{{ $jadwal->notes }}</td>
                    <td class="border px-4 py-2">{{ $jadwal->priority }}</td>
                    <td class="border px-4 py-2">{{ $jadwal->status }}</td>
                    <td class="border px-4 py-2">{{ $jadwal->asignee }}</td>
                    <td class="border px-4 py-2">{{ $jadwal->category_task }}</td>
                    <td class="border px-4 py-2 flex justify-around">
                        <a href="{{ route('schedule.edit', $jadwal->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block mb-1">Edit</a>
                        <form method="POST" onsubmit="return confirm('Are you sure?');" action="{{ route('schedule.destroy', $jadwal->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded inline-block mb-1">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="12" class="text-center p-4">No schedules found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
         $(document).ready(function() {
        $('#schedule-table').DataTable();
    });

        //message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "Success",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "Error!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
</body>
</html>