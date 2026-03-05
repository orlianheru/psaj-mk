<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sourdough Cheese - DiaRi</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-[#EEDBD4] min-h-screen font-serif">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-0 items-stretch min-h-screen">

        <!-- Image Section -->
        <div class="flex flex-col order-1 md:order-1 relative">
            <img src="{{ asset('assets/img/backkeju.png') }}" alt="Sourdough Cheese"
                class="w-full h-full object-cover">
        </div>

        <!-- Content Section -->
        <div class="flex flex-col justify-center order-2 md:order-2 px-4 md:px-8 py-8 md:py-16">
            <div class="max-w-2xl">
                <h1 class="text-6xl md:text-7xl font-bold text-amber-900 mb-6 leading-tight">
                    Sourdough Cheese
                </h1>

                <h2 class="text-2xl md:text-3xl text-amber-900 mb-12 font-normal">
                    Perpadu gurih dan asam yang seimbang
                </h2>

                <p class="text-amber-900 text-lg leading-relaxed mb-8 text-justify">
                    Sourdough Cheese adalah roti sourdough yang dibuat melalui fermentasi alami dengan starter, sehingga memiliki rasa asam khas.
                    Adonan roti ini dipadukan dengan keju yang memberikan cita rasa gurih, creamy, dan sedikit asin, berpadu harmonis dengan rasa asamnya.
                </p>

                <p class="text-amber-900 text-lg leading-relaxed mb-12 text-justify">
                    Teksturnya lembut dan berongga di bagian dalam, dengan kulit luar yang renyah. Saat dipanggang, aroma keju yang meleleh membuat roti ini semakin menggugah selera. 🧀🍞
                </p>

                <div class="flex flex-col sm:flex-row gap-6">
                    <a href="https://wa.me/6285642289659" target="_blank"
                        class="bg-amber-800 hover:bg-amber-900 text-white text-lg font-bold py-3 px-8 rounded-full transition-all active:scale-95 inline-block text-center">
                        Order Now
                    </a>
                    <a href="{{ url('/') }}"
                        class="border-2 border-amber-800 text-amber-800 hover:bg-amber-800 hover:text-white text-lg font-bold py-3 px-8 rounded-full transition-all active:scale-95 inline-block text-center">
                        See Other Breads
                    </a>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
