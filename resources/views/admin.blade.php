<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - DiaRi</title>

    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F8F9FA;
        }
    </style>
</head>

<body class="flex h-screen overflow-hidden">

    <aside class="w-64 bg-white border-r border-gray-200 flex flex-col items-center py-8 z-20">
        <div class="mb-10 px-6">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-50 w-auto object-contain">
        </div>

        <nav class="w-full px-4 space-y-2 flex-grow">
            <a href="#"
                class="flex items-center space-x-3 bg-orange-50 text-orange-600 px-4 py-3 rounded-xl font-semibold transition">
                <span class="text-xl">⊞</span>
                <span>Dashboard</span>
            </a>
            <a href="#"
                class="flex items-center space-x-3 text-gray-500 hover:bg-gray-50 px-4 py-3 rounded-xl transition">
                <span class="text-xl">≡</span>
                <span>List Produk</span>
            </a>
        </nav>

        <div class="mt-auto px-6">
            <img src="{{ asset('assets/img/ibu.png') }}" alt="Ilustrasi Ibu" class="w-48 object-contain">
        </div>
    </aside>

    <main class="flex-1 flex flex-col overflow-hidden">

        <header class="bg-white border-b border-gray-200 py-6 px-10 flex flex-col justify-center">
            <h1 class="text-2xl font-semibold text-gray-800">Hallo, Dinah!</h1>
            <p class="text-sm text-gray-400 italic">Awali pagimu dengan segelas kopi</p>
        </header>

        <div class="p-8 h-full overflow-y-auto">
            <div class="bg-white border border-pink-100 rounded-[40px] p-10 min-h-full shadow-sm">
                <h2 class="text-3xl font-normal text-gray-700 mb-10">Dashboard</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-[#D9D9E3] rounded-[30px] p-8 flex flex-col space-y-6 w-full max-w-sm shadow-sm">
                        <div class="flex items-center">
                            <img src="{{ asset('assets/img/pandan.png') }}" alt="Pandan Icon"
                                class="w-25 h-25 object-contain drop-shadow-md">
                        </div>
                        <div class="space-y-1">
                            <span class="text-2xl text-gray-500 font-light block leading-none">Total Produk</span>
                            <span class="text-5xl font-semibold text-gray-800">24</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

</body>

</html>
