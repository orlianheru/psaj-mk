<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sourdough Chocolate - DiaRi</title>

    @vite('resources/css/app.css')
</head>

<body class="font-serif m-0 p-0 h-screen overflow-hidden" style="background-color: #B18976;">

    <div class="flex h-screen">

        <!-- Content Section -->
        <div class="w-full md:w-1/2 flex items-center">
            <div class="px-10 md:px-16">

                <h1 class="text-6xl md:text-7xl font-bold text-white mb-6 leading-tight">
                    Sourdough Chocolate
                </h1>

                <h2 class="text-2xl md:text-3xl text-white mb-10 font-normal">
                    Manis legit dengan sentuhan asam khas sourdough
                </h2>

                <p class="text-white text-lg leading-relaxed mb-6 text-justify">
                    Sourdough Chocolate adalah roti sourdough yang dipadukan dengan chocolate chips atau potongan
                    cokelat di dalam adonannya.
                    Dibuat melalui fermentasi alami dengan starter, roti ini memiliki rasa asam khas yang lembut.
                </p>

                <p class="text-white text-lg leading-relaxed mb-10 text-justify">
                    Perpaduan rasa sedikit asam dengan manis dan legit cokelat menciptakan cita rasa yang unik dan
                    seimbang.
                    Teksturnya berongga di bagian dalam dengan kulit luar yang renyah, serta aroma cokelat yang semakin
                    menggoda saat dipanggang. 🍫🍞
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
            <img src="{{ asset('assets/img/CCC.png') }}" alt="Sourdough Chocolate" class="w-full h-full object-cover">
        </div>

    </div>

</body>

</html>
