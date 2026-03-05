<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sourdough Original - DiaRi</title>

    @vite('resources/css/app.css')
</head>

<body class="font-serif m-0 p-0 h-screen overflow-hidden bg-gradient-to-b from-pink-100 to-pink-50">

    <div class="flex h-screen">

        <!-- Content Section -->
        <div class="w-full md:w-1/2 flex items-center">
            <div class="px-10 md:px-16">

                <h1 class="text-6xl md:text-7xl font-bold text-amber-900 mb-6 leading-tight">
                    Sourdough Original
                </h1>

                <h2 class="text-2xl md:text-3xl text-amber-900 mb-10 font-normal">
                    Cita rasa klasik dengan asam yang khas
                </h2>

                <p class="text-amber-900 text-lg leading-relaxed mb-6 text-justify">
                    Sourdough Original adalah roti yang dibuat melalui fermentasi alami menggunakan starter tanpa ragi
                    instan.
                    Proses ini menghasilkan rasa sedikit asam yang khas serta aroma yang lebih alami.
                </p>

                <p class="text-amber-900 text-lg leading-relaxed mb-10 text-justify">
                    Teksturnya berongga dan lembut di bagian dalam dengan kulit luar yang renyah.
                    Karena fermentasinya alami, pembuatannya membutuhkan waktu lebih lama dan dipercaya lebih mudah
                    dicerna dibanding roti biasa. 🍞
                </p>

                <div class="flex flex-col sm:flex-row gap-6">
                    <a href="https://wa.me/6285642289659" target="_blank"
                        class="bg-amber-800 hover:bg-amber-900 text-white text-lg font-bold py-3 px-8 rounded-full transition-all">
                        Order Now
                    </a>

                    <a href="{{ url('/') }}"
                        class="border-2 border-amber-800 text-amber-800 hover:bg-amber-800 hover:text-white text-lg font-bold py-3 px-8 rounded-full transition-all">
                        See Other Breads
                    </a>
                </div>

            </div>
        </div>

        <!-- Image Section -->
        <div class="hidden md:block md:w-1/2 h-full">
            <img src="{{ asset('assets/img/OOO.png') }}" alt="Sourdough Original" class="w-full h-full object-cover">
        </div>

    </div>

</body>

</html>
