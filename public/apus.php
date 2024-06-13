<?php
$companies = [
    ["name" => "Samsung", "logo" => "path/to/samsung-logo.png"],
    ["name" => "Microsoft", "logo" => "path/to/microsoft-logo.png"],
    ["name" => "Google", "logo" => "path/to/google-logo.png"],
    ["name" => "LG", "logo" => "path/to/lg-logo.png"],
    ["name" => "Sony", "logo" => "path/to/sony-logo.png"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trusted by Leading Companies</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- <style>
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }

        .marquee {
            display: flex;
            overflow: hidden;
            white-space: nowrap;
            box-sizing: border-box;
        }

        .marquee-content {
            display: flex;
            animation: marquee 20s linear infinite;
        }

        .marquee-content img {
            margin: 0 2rem;
            height: 3rem;
        }

        .marquee-content img:hover {
            transform: scale(1.1);
        }
    </style> -->
</head>
<body>
<div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-extrabold text-gray-900">Trusted by Leading Companies</h2>
            <p class="mt-4 text-lg text-gray-600">Our 4,000+ team has expertise in almost every programming language.</p>
            <div class="mt-8 flex justify-center space-x-8">
                <img src="path/to/samsung-logo.png" alt="Samsung" class="h-12">
                <img src="path/to/microsoft-logo.png" alt="Microsoft" class="h-12">
                <img src="path/to/google-logo.png" alt="Google" class="h-12">
                <img src="path/to/lg-logo.png" alt="LG" class="h-12">
                <img src="path/to/sony-logo.png" alt="Sony" class="h-12">
            </div>
            <button class="mt-8 bg-blue-600 text-white px-4 py-2 rounded">Our full repertoire</button>
        </div>
    </div>    
    <script>
    document.addEventListener('DOMContentLoaded', function () {
    const button = document.querySelector('button');

    button.addEventListener('mouseover', function () {
        button.classList.add('bg-blue-700');
    });

    button.addEventListener('mouseout', function () {
        button.classList.remove('bg-blue-700');
    });
    });
    </script>
</body>
</html>
