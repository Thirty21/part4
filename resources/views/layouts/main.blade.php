<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventaris | Peminjaman</title>
    @vite('resources/css/app.css')
</head>
<body>

        @if (session('success'))
        <div
            class="mb-4 rounded-lg bg-green-300 px-6 py-5 w-64 text-base text-white float-right mx-8 my-3"
            role="alert">
            {{ session('success') }}
        </div>
        @endif
        @yield('content')

</body>
</html>
