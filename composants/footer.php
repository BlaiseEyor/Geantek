<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant Vitalis, Restaurant Italien et Piscine">
    <meta name="keywords" content="Restaurant, Vitalis, Restaurant Vitalis">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer | Geantek</title>
    <link rel="shortcut icon" href="../static/images/logo/favicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="static/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <!-- Footer -->
    <footer class="relative bg-purple-600/20 border-b shadow-sm border-gray-200 bg-white/65 backdrop-blur text-gray-700 py-20 overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-purple-600/20 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-purple-600/10 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>

        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <div class="border-t border-purple-600/10 pt-10 mt-10">
                <div class="flex flex-col md:flex-row justify-center items-center gap-6">
                    <p class="text-xs text-gray-900 uppercase tracking-widest font-medium">
                        <?= geantek_t('footer_copyright') ?>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script de flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="static/js/aos.js"></script>
</body>

</html>