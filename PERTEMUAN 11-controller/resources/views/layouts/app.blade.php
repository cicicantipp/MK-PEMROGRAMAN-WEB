<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'KopiCan.id')</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Flowbite -->
    <link href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>

    <!-- CSS asli dari project kamu -->
    <style>
        .slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            transform: scale(1.05);
            transition: opacity 0.8s ease, transform 0.8s ease;
            z-index: 0;
            overflow-y: auto;
            height: 100vh;
            scroll-behavior: smooth;
        }

        .slide.active {
            opacity: 1;
            transform: scale(1);
            z-index: 10;
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
        }

        body {
            overflow: hidden;
        }

        .fade-in {
            animation: fadeInContent 1s ease forwards;
            opacity: 0;
        }

        @keyframes fadeInContent {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 overflow-hidden">

    @include('partials.navbar')

    @yield('content')

    <!-- JS asli kamu -->
    <script>
        const slides = document.querySelectorAll('.slide');

        function showSlide(id) {
            slides.forEach(slide => slide.classList.remove('active'));
            document.getElementById(id).classList.add('active');
        }
    </script>

</body>

</html>