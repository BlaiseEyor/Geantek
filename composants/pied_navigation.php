<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant Vitalis, Restaurant Italien et Piscine">
    <meta name="keywords" content="Restaurant, Vitalis, Restaurant Vitalis">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Restaurant Vitalis</title>
    <link rel="shortcut icon" href="../static/images/logo/favicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.css" rel="stylesheet" />
    <!-- Pour Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Pour Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="static/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>


    <!-- Pied de navigation -->
    <section>
        <div class="fixed z-50 w-[95%] h-16 max-w-lg -translate-x-1/2 bg-white/80 backdrop-blur-md border border-gray-200 rounded-full bottom-6 left-1/2 shadow-lg">
            <div class="grid h-full grid-cols-5 mx-auto">
                <a href="#acceuil" onclick="location.reload()" data-aos="zoom-in" aria-label="Accueil"
                    class="inline-flex flex-col items-center justify-center px-5 rounded-s-full hover:bg-gray-50 group transition-colors">
                    <svg class="w-3 h-3 text-gray-500 group-hover:text-orange-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="text-[9px] font-medium text-gray-500 group-hover:text-orange-600 uppercase">Accueil</span>
                </a>
                <a href="zone-intervention.html" data-aos="zoom-in" aria-label="Zones d\'intervention"
                    class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group transition-colors">
                    <svg class="w-3 h-3 text-gray-500 group-hover:text-orange-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="text-[9px] font-medium text-gray-500 group-hover:text-orange-600 uppercase">Zones</span>
                </a>

                <div class="flex items-center justify-center">
                    <a href="tel:+2290169612436" data-aos="zoom-in" aria-label="Appeler"
                        class="flex items-center justify-center text-white bg-orange-600/80 hover:bg-orange-600 shadow-orange-600 shadow-lg rounded-full w-10 h-10 transition-transform hover:scale-110 active:scale-95">
                        <svg class="h-3 w-3 transition-colors group-hover:text-orange-600" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M3 5.5C3 14.0604 9.93959 21 18.5 21C18.8862 21 19.2691 20.9859 19.6483 20.9581C20.0834 20.9262 20.3009 20.9103 20.499 20.7963C20.663 20.7019 20.8185 20.5345 20.9007 20.364C21 20.1582 21 19.9181 21 19.438V16.6207C21 16.2169 21 16.015 20.9335 15.842C20.8749 15.6891 20.7795 15.553 20.6559 15.4456C20.516 15.324 20.3262 15.255 19.9468 15.117L16.74 13.9509C16.2985 13.7904 16.0777 13.7101 15.8683 13.7237C15.6836 13.7357 15.5059 13.7988 15.3549 13.9058C15.1837 14.0271 15.0629 14.2285 14.8212 14.6314L14 16C11.3501 14.7999 9.2019 12.6489 8 10L9.36863 9.17882C9.77145 8.93713 9.97286 8.81628 10.0942 8.64506C10.2012 8.49408 10.2643 8.31637 10.2763 8.1317C10.2899 7.92227 10.2096 7.70153 10.0491 7.26005L8.88299 4.05321C8.745 3.67376 8.67601 3.48403 8.55442 3.3441C8.44701 3.22049 8.31089 3.12515 8.15802 3.06645C7.98496 3 7.78308 3 7.37932 3H4.56201C4.08188 3 3.84181 3 3.63598 3.09925C3.4655 3.18146 3.29814 3.33701 3.2037 3.50103C3.08968 3.69907 3.07375 3.91662 3.04189 4.35173C3.01413 4.73086 3 5.11378 3 5.5Z" />
                        </svg>
                    </a>
                </div>

                <a href="index.html#services" data-aos="zoom-in"
                    class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group transition-colors">
                    <svg class="w-3 h-3 text-gray-500 group-hover:text-orange-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-[9px] font-medium text-gray-500 group-hover:text-orange-600 uppercase">Services</span>
                </a>

                <a href="contact.html" data-aos="zoom-in"
                    class="inline-flex flex-col items-center justify-center px-5 rounded-e-full hover:bg-gray-50 group transition-colors">
                    <svg class="w-3 h-3 text-gray-500 group-hover:text-orange-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span class="text-[9px] font-medium text-gray-500 group-hover:text-orange-600 uppercase">Contact</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Scrip de flowbide -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="static/js/aos.js"></script>
</body>

</html>