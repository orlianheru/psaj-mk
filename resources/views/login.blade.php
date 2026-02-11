<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Diari</title>

    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Inter:wght@400;600&display=swap"
        rel="stylesheet">

    <style>
        .font-caveat {
            font-family: 'Caveat Brush', cursive;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #EBE3DC;
        }

        .fade-mask {
            mask-image: linear-gradient(to right, rgba(0, 0, 0, 1) 60%, rgba(0, 0, 0, 0) 100%);
            -webkit-mask-image: linear-gradient(to right, rgba(0, 0, 0, 1) 60%, rgba(0, 0, 0, 0) 100%);
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center p-0 m-0 overflow-hidden">

    <div class="flex w-full h-screen">

        <div class="hidden md:flex flex-1 relative items-start p-10">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="absolute top-10 left-10 h-12 z-20">
            <img src="{{ asset('assets/img/latar.jpg') }}" alt="Roti"
                class="absolute inset-0 w-full h-full object-cover fade-mask z-10">
        </div>

        <div class="flex-1 flex items-center justify-center z-20 px-6">
            <div class="bg-[#E9AD86] rounded-[40px] p-10 md:p-16 w-full max-w-lg shadow-2xl transition-all">

                <h2 class="text-4xl md:text-5xl text-center mb-12 text-gray-800 font-normal">Login</h2>

                <form id="loginForm" class="space-y-8">
                    <div class="space-y-2">
                        <label class="block text-xl font-medium text-gray-800 ml-2">Username</label>
                        <input type="text" id="username" placeholder="Username" required
                            class="w-full px-6 py-4 rounded-3xl border border-gray-800 bg-transparent focus:outline-none placeholder-gray-500 text-lg">
                    </div>

                    <div class="space-y-2">
                        <label class="block text-xl font-medium text-gray-800 ml-2">Password</label>
                        <input type="password" id="password" placeholder="***********" required
                            class="w-full px-6 py-4 rounded-3xl border border-gray-800 bg-transparent focus:outline-none placeholder-gray-500 text-lg">
                        <div class="text-right">
                            <a href="#" id="forgotBtn" class="text-lg font-medium text-gray-800 hover:underline">Forgot
                                password</a>
                        </div>
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                            class="w-full py-4 rounded-3xl border border-gray-800 text-2xl font-medium text-gray-800 hover:bg-black/10 transition shadow-sm active:scale-95">
                            Login
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function (e) {
            e.preventDefault(); // Mencegah reload halaman

            const userField = document.getElementById('username').value;
            const passField = document.getElementById('password').value;

            // Logika pengecekan
            if (userField === 'dinah' && passField === '123') {
                // Jika benar, pindah ke route admin (pastikan route ini sudah ada di web.php)
                window.location.href = "/admin";
            } else {
                alert('Username atau Password salah! Gunakan dinah & 123');
            }
        });

        document.getElementById('forgotBtn').addEventListener('click', function () {
            alert('Silakan hubungi admin IT untuk reset password.');
        });
    </script>

</body>

</html>
