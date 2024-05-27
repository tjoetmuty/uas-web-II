<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Your Schedule</title>
</head>
<body>
<div class="hero min-h-screen bg-base-200">
<div class="hero min-h-screen bg-base-200">
  <div class="hero-content text-center">
    <div class="max-w-md">
      <h1 class="text-5xl font-bold">Hello there</h1>
      <p class="py-6">Set your schedule with us.</p>
      <button class="btn border-2 border-solid border-black rounded-md 
                    bg-black text-white hover:bg-gray-600 py-2 mt-2"><a href="{{route('user.index')}}">Get Started</a></button>
    </div>
  </div>
</div>
</body>
</html>