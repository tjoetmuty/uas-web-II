<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Edit Schedule</title>
</head>
<body>
    <nav class="bg-yellow-500">
        <div class="container mx-auto flex justify-between items-center p-4">
            <div class="text-white font-semibold text-xl">Edit Your Schedule</div>
        </div>
    </nav>
    <main class="container mx-auto p-8">
        <form action="POST" action="{{route('schedule.update', $schedule->id)}}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <h2 class="text-2xl font-bold mb-2">Edit Schedule</h2>
            </div>

            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                <input type="text" id="title" name="title" 
                class="border border-gray-300 rounded-md py-2 px-3 w-full @error('title') is-invalid @enderror"
                value="{{old('title', $schedule->title)}}">
            </div>

            
            @error('title')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">{{$message}}</p>
            </div>
            @enderror
            
            
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                <input type="text" id="description" name="description" 
                class="border border-gray-300 rounded-md py-2 px-3 w-full @error('description') is-invalid @enderror"
                value="{{old('description', $schedule->description)}}">
            </div>

            
            @error('description')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">{{$message}}</p>
            </div>
            @enderror
            


            <div class="mb-4">
                <label for="task" class="block text-gray-700 text-sm font-bold mb-2">Task:</label>
                <input type="text" id="task" name="task" 
                class="border border-gray-300 rounded-md py-2 px-3 w-full @error('task') is-invalid @enderror"
                value="{{old('task', $schedule->task)}}">
            </div>

        
            @error('task')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">{{$message}}</p>
            </div>
            @enderror
            


            <div class="mb-4">
                <label for="start_date" class="block text-gray-700 text-sm font-bold mb-2">Start Date:</label>
                <input type="date" id="start_date" name="start_date" 
                class="border border-gray-300 rounded-md py-2 px-3 w-full @error('start_date') is-invalid @enderror"
                value="{{old('start_date', $schedule->start_date)}}">
            </div>

            @error('start_date')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">{{$message}}</p>
            </div>
            @enderror

            <div class="mb-4">
                <label for="end_date" class="block text-gray-700 text-sm font-bold mb-2">End Date:</label>
                <input type="date" id="end_date" name="end_date" 
                class="border border-gray-300 rounded-md py-2 px-3 w-full @error('end_date') is-invalid @enderror"
                value="{{old('end_date', $schedule->end_date)}}">
            </div>

            
            @error('end_date')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">{{$message}}</p>
            </div>
            @enderror

            <div class="mb-4">
                <label for="notes" class="block text-gray-700 text-sm font-bold mb-2">Notes:</label>
                <input type="text" id="notes" name="notes" 
                class="border border-gray-300 rounded-md py-2 px-3 w-full @error('notes') is-invalid @enderror"
                value="{{old('notes', $schedule->notes)}}">
            </div>

            
            @error('notes')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">{{$message}}</p>
            </div>
            @enderror

            <div class="mb-4">
                <label for="priority" class="block text-gray-700 text-sm font-bold mb-2">Priority:</label>
                <input type="number" id="priority" name="priority" 
                class="border border-gray-300 rounded-md py-2 px-3 w-full @error('priority') is-invalid @enderror"
                value="{{old('priority', $schedule->priority)}}">
            </div>

            
            @error('priority')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">{{$message}}</p>
            </div>
            @enderror

            <div class="mb-4">
                <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
                <input type="text" id="status" name="status" 
                class="border border-gray-300 rounded-md py-2 px-3 w-full @error('status') is-invalid @enderror"
                value="{{old('status', $schedule->status)}}">
            </div>

            
            @error('status')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">{{$message}}</p>
            </div>
            @enderror

            <div class="mb-4">
                <label for="asignee" class="block text-gray-700 text-sm font-bold mb-2">Asignee:</label>
                <input type="text" id="asignee" name="asignee" 
                class="border border-gray-300 rounded-md py-2 px-3 w-full @error('asignee') is-invalid @enderror"
                value="{{old('asignee', $schedule->asignee)}}">
            </div>

            
            @error('asignee')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">{{$message}}</p>
            </div>
            @enderror

            <div class="mb-4">
                <label for="category_task" class="block text-gray-700 text-sm font-bold mb-2">Category task:</label>
                <input type="text" id="category_task" name="category_task" 
                class="border border-gray-300 rounded-md py-2 px-3 w-full @error('category_task') is-invalid @enderror"
                value="{{old('category_task', $schedule->category_task)}}">
            </div>

            
            @error('category_task')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">{{$message}}</p>
            </div>
            @enderror

            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
            </div>
        </form>
    </main>
</body>
</html>