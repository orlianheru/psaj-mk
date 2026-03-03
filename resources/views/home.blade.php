<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diari - Toko Roti</title>

    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Playfair+Display:wght@700&display=swap"
        rel="stylesheet">

    <style>
        .font-caveat {
            font-family: 'Caveat Brush', cursive;
        }

        .font-serif-title {
            font-family: 'Playfair Display', serif;
        }

        .bg-cream {
            background-color: #FFF9E7;
        }

        .bg-tan-hero {
            background-color: #C6A683;
        }

        .bg-dark-brown {
            background-color: #6F4726;
        }

        .text-dark-brown {
            color: #5D4037;
        }

        .bread-mask {
            mask-image: linear-gradient(to left, rgba(0, 0, 0, 1) 75%, rgba(0, 0, 0, 0) 100%);
            -webkit-mask-image: linear-gradient(to left, rgba(0, 0, 0, 1) 75%, rgba(0, 0, 0, 0) 100%);
        }
    </style>
</head>

<body class="bg-cream">

    <header class="bg-cream px-8 md:px-14 py-4 flex justify-between items-center relative z-50 shadow-sm">
        <div class="relative">
            <img src="{{ asset('assets/img/logo.png') }}" alt="DiaRi Logo"
                class="h-24 md:h-32 absolute -top-8 left-0 max-w-none transform transition hover:scale-105">
            <div class="w-32 md:w-48 h-10"></div>
        </div>

        <nav class="space-x-8 text-dark-brown font-semibold text-sm md:text-base flex items-center">
            <a href="#home" class="hover:opacity-70 transition">Home</a>
            <a href="#story" class="hover:opacity-70 transition">The Story</a>
            <a href="#breads" class="hover:opacity-70 transition">Our Breads</a>
            <a href="#" class="hover:opacity-70 transition">Contact</a>
        </nav>
    </header>

    <section id="home" class="relative flex flex-col md:flex-row items-center bg-tan-hero min-h-[85vh] overflow-hidden">
        <div class="flex-1 px-8 md:pl-24 md:pr-10 py-16 z-20">
            <img src="{{ asset('assets/img/gandum1.png') }}" alt="Gandum" class="w-16 mb-4">
            <h2 class="font-serif-title text-5xl md:text-7xl text-dark-brown mb-6 leading-tight">Cerita Roti dari Ibu
            </h2>
            <div class="space-y-4 max-w-lg">
                <p class="text-dark-brown text-sm md:text-lg leading-relaxed font-medium">DIARI adalah toko roti rumahan
                    yang dibuat dengan penuh cinta oleh Dinah Kristanti.</p>
                <p class="text-dark-brown text-sm md:text-lg leading-relaxed font-medium">Setiap roti dibuat dari bahan
                    pilihan, proses alami, dan resep keluarga yang telah menemani banyak cerita di rumah.</p>
            </div>
            <div class="flex gap-4 pt-8">
                <button
                    class="bg-dark-brown text-white px-8 py-3 rounded-full font-semibold hover:opacity-90 transition shadow-md">View
                    Menu</button>
                <button
                    class="bg-dark-brown text-white px-8 py-3 rounded-full font-semibold hover:opacity-90 transition shadow-md">Order
                    Now</button>
            </div>
        </div>
        <div class="flex-1 h-full w-full md:w-auto flex justify-end relative">
            <img src="{{ asset('assets/img/rotiblur.png') }}" alt="Roti Hero"
                class="w-full h-full object-cover bread-mask min-h-[400px] md:min-h-[600px]">
        </div>
    </section>

    <section id="story" class="px-8 md:px-20 py-24 bg-cream">
        <div class="max-w-7xl mx-auto">
            <h2 class="font-serif-title text-4xl md:text-5xl text-center mb-16 text-dark-brown">The Story</h2>

            <div class="flex flex-col md:flex-row items-center justify-center gap-10">
                <div class="flex-1 flex justify-center w-full">
                    <img src="{{ asset('assets/img/latar.jpg') }}"
                        class="w-full h-auto max-w-xl rounded-[40px] shadow-lg object-cover block">
                </div>

                <div class="flex-1 relative w-full">
                    <div
                        class="bg-dark-brown rounded-[40px] p-10 md:p-14 text-white shadow-2xl relative min-h-[420px] flex flex-col justify-center">
                        <img src="{{ asset('assets/img/kutip.png') }}" alt="quote" class="w-12 md:w-16 mb-6">

                        <h3 class="font-serif-title text-3xl md:text-4xl mb-6 leading-tight">Cerita di Balik Setiap Roti
                        </h3>

                        <div class="space-y-4 text-sm md:text-base opacity-90 leading-relaxed font-light">
                            <p>Berawal dari dapur sederhana, DIARI hadir untuk membawa kehangatan, rasa, dan cerita ke
                                setiap meja keluarga.</p>
                            <p>Bagi kami, roti bukan hanya makanan, tetapi bagian dari cerita harian yang dibagikan
                                bersama orang-orang tercinta.</p>
                        </div>

                        <p class="mt-8 text-sm font-medium tracking-wide">- Ibu Pemilik DiaRi</p>

                        <img src="{{ asset('assets/img/gandum1.png') }}" alt="gandum"
                            class="absolute bottom-8 right-8 w-12 opacity-80 rotate-12">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="breads" class="px-8 md:px-20 py-24 bg-dark-brown">
    <h2 class="font-caveat text-6xl text-center mb-16 text-white">Our Breads</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">

        @forelse($produks as $product)
            <div class="flex justify-center group">
                <div
                    class="bg-[#D2B595] rounded-3xl p-6 w-full max-w-[280px] h-[380px] flex flex-col items-center justify-between shadow-lg transform transition hover:-translate-y-2">

                    {{-- Gambar --}}
                    <div class="flex-grow flex items-center justify-center">
                        @if($product->gambar)
    <img
        src="{{ asset('storage/' . $product->gambar) }}"
        alt="{{ $product->nama }}"
        class="w-56 h-56 object-contain drop-shadow-md"
    />
@endif
                    </div>

                    {{-- Nama --}}
                    <h3 class="font-caveat text-dark-brown text-2xl mt-2 tracking-wide">
                        {{ $product->nama }}
                    </h3>

                    {{-- Harga --}}
                    <p class="text-dark-brown font-semibold">
                        Rp {{ number_format($product->harga, 0, ',', '.') }}
                    </p>

                </div>
            </div>
        @empty
            <p class="text-white text-center col-span-4">
                Belum ada produk.
            </p>
        @endforelse

    </div>
</section>
    <footer class="bg-dark-brown px-6 py-6 md:px-14 md:py-8">
        <div
            class="border-2 border-dashed border-white/60 rounded-xl p-6 md:p-8 flex flex-col md:flex-row justify-between items-start md:items-end gap-8">
            <div class="flex flex-col space-y-2">
                <h4 class="font-caveat text-white text-3xl mb-4">Product</h4>
                <a href="#home" class="text-white hover:text-tan text-sm font-medium transition">Home</a>
                <a href="#story" class="text-white hover:text-tan text-sm font-medium transition">The Story</a>
                <a href="#breads" class="text-white hover:text-tan text-sm font-medium transition">Our Breads</a>
                <a href="#" class="text-white hover:text-tan text-sm font-medium transition">Contact</a>
            </div>
        </div>
    </footer>

</body>

</html>
