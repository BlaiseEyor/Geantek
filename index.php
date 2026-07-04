<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GEANTEK - Entreprise de développement de solutions web et mobiles">
    <title>Accueil - GEANTEK</title>
    <link rel="shortcut icon" href="static/images/logo/favicon.png">
    <!-- Tailwind CSS & Flowbite -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- AOS (Animation On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        #typewriter::after {
            content: "|";
            margin-left: 5px;
            color: #9333ea;
            animation: blink .7s infinite;
        }
        @keyframes blink {

            50% {
                opacity: 0;
            }
        }
    </style>
</head>

<body id="top" class="font-['Montserrat',sans-serif]">

    <!-- Inclusion de l'en tête de la plateforme -->
    <section>
        <?php include("composants/nav.php"); ?>
    </section>
    <div class="h-24 md:h-24"></div>
    <main class="overflow-x-hidden">
        <section id="caroussel">
            <div class="px-4 pt-12 pb-20 sticky mx-auto max-w-7xl grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <!-- <div class="absolute -top-10 -left-10 w-64 h-64 bg-purple-600 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob"></div>
                <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-purple-600 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div> -->
                <div class="flex flex-col justify-center">
                    <h1 data-aos="zoom-in-right" class="mb-6 text-4xl font-extrabold text-gray-900 md:text-5xl lg:text-6xl leading-tight">
                        Transformez <br>
                        <span id="typewriter" class="text-purple-600"></span>
                    </h1>
                    <p data-aos="zoom-in-right" class="mb-6 text-gray-600 text-lg">
                        Expert en développement web et progiciels de gestion
                        sur mesure. Nous concrétisons vos idées avec des solutions
                        technologiques innovantes et performantes.
                    </p>
                    <!-- boutons -->
                    <div class="flex flex-wrap gap-4">
                        <a data-aos="zoom-in-right" href="#services" class="flex items-center gap-2 rounded-full bg-purple-600 px-5 py-3 text-sm font-semibold text-white hover:bg-purple-700 shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                                <rect width="20" height="14" x="2" y="6" rx="2" />
                            </svg>
                            Voir nos services
                        </a>
                        <a data-aos="zoom-in" href="https://wa.me/0169612436" class="flex items-center gap-2 rounded-full bg-white text-purple-600 border border-purple-600 hover:bg-[#9333EA] opacity-80 hover:text-white shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-105 px-5 py-2.5 text-sm font-semibold">
                            <svg class="h-5 w-5" viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <g id="Shopicon">
                                    <path d="M36.802,19.497C38.161,18.063,39,16.131,39,14c0-4.418-3.582-8-8-8s-8,3.582-8,8c0,2.131,0.839,4.063,2.198,5.497
                                    c-0.962,0.532-1.842,1.192-2.619,1.957C21.515,18.286,18.527,16,15,16c-4.418,0-8,3.582-8,8c0,2.131,0.839,4.063,2.198,5.497
                                    C5.503,31.542,3,35.476,3,40h24c0-4.177-2.134-7.851-5.37-10H43C43,25.476,40.497,21.542,36.802,19.497z M27,14
                                    c0-2.206,1.794-4,4-4c2.206,0,4,1.794,4,4s-1.794,4-4,4C28.794,18,27,16.206,27,14z M11,24c0-2.206,1.794-4,4-4s4,1.794,4,4
                                    s-1.794,4-4,4S11,26.206,11,24z M8.074,36c1.385-2.39,3.971-4,6.926-4s5.541,1.61,6.926,4H8.074z M24.074,26
                                    c1.385-2.39,3.971-4,6.926-4c2.955,0,5.541,1.61,6.926,4H24.074z" />
                                </g>
                            </svg>
                            <span>Devenir partenaire</span>
                        </a>
                    </div>
                </div>
                <div class="relative group">
                    <div class="absolute -top-10 -left-10 w-64 h-64 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
                    <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
                    <div data-aos="zoom-in-left" class="overflow-hidden rounded-2xl border border-white">
                        <img src="static/images/caroussel/car1.png" alt="Plats Vitalis" loading="lazy" class="object-cover w-full h-[400px] md:h-[500px] transition-transform duration-500 group-hover:scale-105">
                    </div>
                </div>
            </div>
        </section>
        <!-- Section a propos de GEANTEK -->
        <section id="apropos" class="relative py-20 bg-white overflow-hidden scroll-mt-20">
            <div class="mx-auto max-w-7xl px-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="relative flex justify-center lg:justify-end">
                        <div class="relative w-full max-w-lg">
                            <div
                                class="absolute -top-10 -left-10 w-64 h-64 bg-purple-600 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob">
                            </div>
                            <div
                                class="absolute -bottom-10 -right-10 w-64 h-64 bg-purple-600 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000">
                            </div>

                            <div data-aos="zoom-in-left" class="relative group">
                                <!-- Image principale (Caroussel) -->
                                <div class="overflow-hidden rounded-2xl border border-white">
                                    <img src="static/images/apropos/apr5.png" alt="Plats Vitalis"
                                        class="object-cover w-full h-[400px] md:h-[500px] transition-transform duration-500 group-hover:scale-105">
                                </div>
                                <div class="animate-bounce-slow absolute -top-6 -left-6 w-24 h-30 md:w-32 md:h-32 bg-white p-1 rounded-full shadow-2xl z-20 border-8 border-white overflow-hidden">
                                    <img src="static/images/apropos/apr5.png" alt="Expérience Vitalis" class="w-full h-full object-cover">
                                </div>
                                <div class="animate-bounce-slow absolute -bottom-10 -right-6 w-24 h-30 md:w-32 md:h-32 bg-white p-1 rounded-full shadow-2xl z-20 border-8 border-white overflow-hidden">
                                    <img src="static/images/apropos/apr5.png" alt="Expérience Vitalis" class="w-full h-full object-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative z-10">
                        <span data-aos="zoom-in-right" class="inline-block animate-bounce px-4 py-2 rounded-full bg-purple-600 text-white text-sm font-bold uppercase tracking-widest mb-6">
                            Qui sommes-nous ?
                        </span>
                        <div class="mb-16 max-w-3xl">
                            <h2 data-aos="zoom-in-right" class="text-3xl font-extrabold leading-tight sm:text-4xl first-line:uppercase first-line:tracking-widest first-letter:float-start first-letter:me-3 first-letter:text-7xl first-letter:font-bold first-letter:text-purple-700">
                                Et si on parlait un peu de GEANTEK ?
                            </h2>
                            <p data-aos="zoom-in-right" class="mt-4 text-gray-600 text-lg leading-relaxed">
                                Partenaire technologique de confiance pour la transformation digitale, nous
                                concevons des solutions web et logicielles sur mesure qui
                                propulsent votre croissance. De la création de votre vitrine en
                                ligne à l'optimisation complète de vos processus internes (ERP, CRM,
                                RH, Logistique), notre expertise technique donne vie à des outils performants,
                                évolutifs et parfaitement adaptés à vos défis métiers. Propulsez votre activité au
                                niveau supérieur avec élégance et précision.
                            </p>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="300" class="flex flex-wrap gap-4">
                            <a href="#about" class="flex items-center gap-2 rounded-full bg-purple-600 px-6 py-3.5 text-sm font-semibold text-white hover:bg-purple-700 shadow-md hover:shadow-purple-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
                                En savoir plus
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg>
                            </a>
                            <a href="#services" class="flex items-center gap-2 rounded-full border-2 border-gray-200 bg-transparent px-6 py-3.5 text-sm font-semibold text-gray-700 hover:border-purple-600 hover:text-purple-600 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.1a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                                Découvrir nos services
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Section des images en grille responsive -->
                <div class="mt-24">
                    <div class="mb-16 max-w-3xl">
                        <h2 data-aos="zoom-in-right" class="text-3xl font-extrabold leading-tight sm:text-4xl first-line:uppercase first-line:tracking-widest first-letter:float-start first-letter:me-3 first-letter:text-7xl first-letter:font-bold first-letter:text-purple-700">
                            Notre Expertise ?
                        </h2>
                        <p data-aos="zoom-in-right" class="mt-4 text-gray-600 text-lg leading-relaxed">
                            Nous combinons expertise technique et compréhension
                            métier pour créer des solutions qui génèrent de la valeur.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 sm:grid-cols-4 gap-6">
                        <!-- Élément 1 : Qualité Bio -->
                        <div data-aos="zoom-in" class="flex flex-col items-center p-4 bg-white rounded-xl shadow-sm border border-gray-200 transition-transform hover:scale-105">
                            <div class="text-green-600 mb-3">
                                <!-- Icône Feuille / Bio -->
                                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-sm font-bold text-gray-800 text-center">Innovation</span>
                            <p class="text-gray-600 text-center">
                                Technologies de pointe et approches
                                modernes pour des solutions performantes.
                            </p>
                        </div>

                        <!-- Élément 2 : Fraîcheur & Local -->
                        <div data-aos="zoom-in" class="flex flex-col items-center p-4 bg-white rounded-xl shadow-sm border border-gray-200 transition-transform hover:scale-105">
                            <div class="text-green-600 mb-3">
                                <!-- Icône Panier / Local -->
                                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-sm font-bold text-gray-800 text-center">Sur-Mesure</span>
                            <p class="text-gray-600 text-center">
                                Chaque projet est unique et mérite une
                                solution adaptée à vos besoins spécifiques.
                            </p>
                        </div>

                        <!-- Élément 3 : Certification Halal -->
                        <div data-aos="zoom-in" class="flex flex-col items-center p-4 bg-white rounded-xl shadow-sm border border-gray-200 transition-transform hover:scale-105">
                            <div class="text-green-600 mb-3">
                                <!-- Icône Bouclier / Confiance (Halal) -->
                                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-sm font-bold text-gray-800 text-center">Accompagnement</span>
                            <p class="text-gray-600 text-center">
                                Support continu et formation pour
                                assurer le succès de votre transformation
                                digitale.
                            </p>
                        </div>
                        <!-- Élément 3 : Certification Halal -->
                        <div data-aos="zoom-in" class="flex flex-col items-center p-4 bg-white rounded-xl shadow-sm border border-gray-200 transition-transform hover:scale-105">
                            <div class="text-green-600 mb-3">
                                <!-- Icône Bouclier / Confiance (Halal) -->
                                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-sm font-bold text-gray-800 text-center">Excellence</span>
                            <p class="text-gray-600 text-center">
                                Qualité, performance et sécurité au cœur
                                de tous nos développements.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section des services GEANTEK -->
        <section id="services" class="relative py-20 bg-slate-50 overflow-hidden scroll-mt-20">
            <div class="mx-auto max-w-7xl px-4">
                <div class="mb-12 text-start">
                    <span data-aos="fade-down" class="inline-block rounded-full bg-purple-600 px-4 py-2 animate-bounce text-xs font-semibold uppercase tracking-[0.35em] text-white">
                        Nos services
                    </span>
                    <div class="mt-10 mb-16 max-w-3xl">
                        <h2 data-aos="zoom-in-right" class="text-3xl font-extrabold leading-tight sm:text-4xl first-line:uppercase first-line:tracking-widest first-letter:float-start first-letter:me-3 first-letter:text-7xl first-letter:font-bold first-letter:text-purple-600">
                            Des solutions digitales sur mesure pour votre entreprise.
                        </h2>
                        <p data-aos="zoom-in-right" class="mt-4 text-gray-600 text-lg leading-relaxed">
                            GEANTEK accompagne chaque étape de votre
                            transformation digitale avec des services adaptés
                            à vos besoins métiers et à votre croissance.
                        </p>
                    </div>
                </div>

                <div class="grid gap-6 md:grid-cols-4 xl:grid-cols-4">
                    <article data-aos="zoom-in" class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                        <div class="mb-6 inline-flex h-16 w-16 items-center justify-center rounded-3xl bg-purple-100 text-purple-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M2 12h20" />
                                <path d="M12 2c3.5 7 3.5 10 0 20" />
                                <path d="M6 6a8 8 0 0 0 12 0" />
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-semibold text-gray-900">Sites Web Corporate</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Conception et développement de sites web professionnels pour présenter votre entreprise avec élégance et performance.
                        </p>
                    </article>

                    <article data-aos="zoom-in" data-aos-delay="100" class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                        <div class="mb-6 inline-flex h-16 w-16 items-center justify-center rounded-3xl bg-purple-100 text-purple-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 4l6 8-6 8" />
                                <path d="M8 4L2 12l6 8" />
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-semibold text-gray-900">Applications Web Sur Mesure</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Création d'applications web personnalisées adaptées à vos processus métier spécifiques.
                        </p>
                    </article>

                    <article data-aos="zoom-in" data-aos-delay="200" class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                        <div class="mb-6 inline-flex h-16 w-16 items-center justify-center rounded-3xl bg-purple-100 text-purple-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 6h15l-2 9H8L6 6z" />
                                <path d="M9 19h.01" />
                                <path d="M18 19h.01" />
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-semibold text-gray-900">E-commerce & Marketplaces</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Solutions complètes de commerce en ligne pour développer vos ventes et gérer votre catalogue.
                        </p>
                    </article>

                    <article data-aos="zoom-in" data-aos-delay="300" class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                        <div class="mb-6 inline-flex h-16 w-16 items-center justify-center rounded-3xl bg-purple-100 text-purple-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="7" y="3" width="10" height="18" rx="2" />
                                <path d="M12 7v2" />
                                <path d="M12 15v2" />
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-semibold text-gray-900">Progressive Web Apps (PWA)</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Applications web modernes offrant une expérience utilisateur native sur tous les appareils.
                        </p>
                    </article>

                    <article data-aos="zoom-in" data-aos-delay="400" class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                        <div class="mb-6 inline-flex h-16 w-16 items-center justify-center rounded-3xl bg-purple-100 text-purple-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="4" y="5" width="16" height="6" rx="2" />
                                <rect x="4" y="13" width="16" height="6" rx="2" />
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-semibold text-gray-900">ERP - Gestion Intégrée</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Systèmes de planification des ressources pour centraliser et optimiser tous vos processus d'entreprise.
                        </p>
                    </article>

                    <article data-aos="zoom-in" data-aos-delay="500" class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                        <div class="mb-6 inline-flex h-16 w-16 items-center justify-center rounded-3xl bg-purple-100 text-purple-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-8 0v2" />
                                <circle cx="12" cy="7" r="4" />
                                <path d="M3 11h18" />
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-semibold text-gray-900">CRM - Relation Client</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Solutions de gestion de la relation client pour améliorer vos ventes et fidéliser votre clientèle.
                        </p>
                    </article>

                    <article data-aos="zoom-in" data-aos-delay="600" class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                        <div class="mb-6 inline-flex h-16 w-16 items-center justify-center rounded-3xl bg-purple-100 text-purple-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z" />
                                <path d="M6 20v-1c0-2.21 1.79-4 4-4h4c2.21 0 4 1.79 4 4v1" />
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-semibold text-gray-900">Solutions RH et Paie</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Logiciels de gestion des ressources humaines et de traitement de la paie automatisé.
                        </p>
                    </article>

                    <article data-aos="zoom-in" data-aos-delay="700" class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                        <div class="mb-6 inline-flex h-16 w-16 items-center justify-center rounded-3xl bg-purple-100 text-purple-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 16V8a1 1 0 0 0-.55-.89l-7-4a1 1 0 0 0-.9 0l-7 4A1 1 0 0 0 3 8v8a1 1 0 0 0 .55.89l7 4a1 1 0 0 0 .9 0l7-4A1 1 0 0 0 21 16z" />
                                <path d="M3.76 8.88 12 13.17l8.24-4.29" />
                                <path d="M12 13.17v7.83" />
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-semibold text-gray-900">Gestion de Stock et Logistique</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Outils pour optimiser votre chaîne d'approvisionnement et gérer efficacement vos stocks.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <!-- Section Contact -->
        <section id="contact" class="relative py-20 bg-white overflow-hidden scroll-mt-20">
            <div class="mx-auto max-w-7xl px-4">
                <div class="grid gap-10 lg:grid-cols-2 items-start">
                    <div class="space-y-4">
                        <span data-aos="fade-down" class="inline-block rounded-full animate-bounce bg-purple-600 px-4 py-2 text-xs font-semibold uppercase tracking-[0.35em] text-white">
                            Contactez-nous
                        </span>
                        <h2 data-aos="fade-up" class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                            Et si on parlait de votre prochain projet ?
                        </h2>
                        <p data-aos="fade-up" data-aos-delay="100" class="max-w-xl text-gray-600 text-lg leading-relaxed">
                            Notre équipe est prête à vous accompagner dans la création de solutions digitales performantes, sur mesure et à forte valeur ajoutée.
                        </p>
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div data-aos="fade-up" data-aos-delay="200" class="rounded-3xl bg-slate-50 p-6">
                                <p class="text-sm font-semibold text-gray-500 uppercase">Email</p>
                                <p class="mt-2 text-gray-900">contact@geantek.com</p>
                            </div>
                            <div data-aos="fade-up" data-aos-delay="300" class="rounded-3xl bg-slate-50 p-6">
                                <p class="text-sm font-semibold text-gray-500 uppercase">Téléphone</p>
                                <p class="mt-2 text-gray-900">+1 (438) 722-2726</p>
                            </div>
                        </div>
                        <div data-aos="zoom-in-left" class="lg:col-span-2 relative group min-h-[450px]">
                            <div
                                class="absolute inset-0 rounded-3xl -rotate-1 group-hover:rotate-0 transition-transform duration-500">
                            </div>
                            <div
                                class="relative h-full w-full overflow-hidden rounded-3xl border-4 border-white">
                                <img src="static/images/contact/c1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-left" class="rounded-3xl bg-slate-50 p-8 shadow-xl">
                        <h3 class="text-2xl font-bold text-gray-900">Envoyez-nous un message</h3>
                        <p class="mt-3 text-gray-600">Remplissez le formulaire ci-dessous et nous reviendrons vers vous rapidement.</p>
                        <form class="mt-4 grid gap-6">
                            <div class="space-y-4">
                                <label class="block text-sm font-semibold text-gray-700">Nom</label>
                                <input type="text" placeholder="Votre nom" class="w-full rounded-full border border-gray-200 bg-white px-5 py-4 text-gray-900 focus:border-purple-600 focus:ring-purple-200 focus:ring-4 outline-none" />
                            </div>
                            <div class="space-y-4">
                                <label class="block text-sm font-semibold text-gray-700">Email</label>
                                <input type="email" placeholder="Votre email" class="w-full rounded-full border border-gray-200 bg-white px-5 py-4 text-gray-900 focus:border-purple-600 focus:ring-purple-200 focus:ring-4 outline-none" />
                            </div>
                            <div class="space-y-4">
                                <label class="block text-sm font-semibold text-gray-700">Sujet</label>
                                <input type="text" placeholder="Sujet du message" class="w-full rounded-full border border-gray-200 bg-white px-5 py-4 text-gray-900 focus:border-purple-600 focus:ring-purple-200 focus:ring-4 outline-none" />
                            </div>
                            <div class="space-y-4">
                                <label class="block text-sm font-semibold text-gray-700">Message</label>
                                <textarea rows="1" placeholder="Votre message" class="w-full rounded-full border border-gray-200 bg-white px-5 py-4 text-gray-900 focus:border-purple-600 focus:ring-purple-200 focus:ring-4 outline-none"></textarea>
                            </div>
                            <button type="submit" class="w-full rounded-full bg-purple-600 px-8 py-4 text-sm font-semibold text-white shadow-lg shadow-purple-200/20 transition hover:bg-purple-700">Envoyer le message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Newsletter -->
        <section id="newsletter" class="py-20 bg-slate-100">
            <div class="mx-auto max-w-7xl px-4">
                <div class="rounded-3xl px-8 py-12 lg:px-14 lg:py-14 text-gray-900 shadow-2xl">
                    <div class="grid gap-8 lg:grid-cols-2 lg:items-center">
                        <div>
                            <span data-aos="fade-down" class="inline-block rounded-full bg-purple-500 px-4 py-2 text-xs text-white font-semibold uppercase tracking-[0.35em]">Newsletter</span>
                            <h2 data-aos="fade-up" class="mt-6 text-3xl font-extrabold sm:text-4xl">Recevez nos dernières actualités et offres.</h2>
                            <p data-aos="fade-up" data-aos-delay="100" class="mt-4 max-w-xl text-gray-600 leading-relaxed">Abonnez-vous pour recevoir des conseils, des études de cas et des nouveautés directement dans votre boîte mail.</p>
                        </div>
                        <form data-aos="fade-left" data-aos-delay="200" class="flex flex-col gap-4 sm:flex-row">
                            <input type="email" placeholder="Votre email" class="w-full rounded-full border border-gray-200 bg-white/10 px-5 py-4 text-gray-900 placeholder:text-gray-500 focus:border-purple-500 focus:bg-white/20 focus:outline-none focus:ring-2 focus:ring-purple-500" />
                            <button type="submit" class="rounded-full bg-purple-600 px-8 py-4 text-sm font-semibold text-white transition hover:bg-purple-700">M'abonner</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php include("composants/footer.php"); ?>
    </main>

    <button id="scroll-top-btn" type="button" class="fixed bottom-6 right-6 z-50 hidden flex h-12 w-12 items-center justify-center rounded-full bg-purple-600 text-white shadow-2xl shadow-purple-500/20 transition duration-300 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-300">
        <span class="sr-only">Retour en haut</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6">
            <path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M18 15l-6-6-6 6" />
        </svg>
    </button>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="static/js/aos.js"></script>
    <script src="static/js/tailwind_config.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const words = [
                "votre Vision Digitale.",
                "votre Administration.",
                "votre Gestion.",
                "vos Services Publics.",
                "vos Processus.",
                "votre Organisation.",
                "votre Collectivité.",
                "votre Établissement."
            ];
            const element = document.getElementById("typewriter");

            let wordIndex = 0;
            let charIndex = 0;
            let deleting = false;

            const typingSpeed = 100;
            const deletingSpeed = 50;
            const pauseTime = 1800;

            function typeWriter() {

                const currentWord = words[wordIndex];

                if (!deleting) {

                    element.innerHTML = currentWord.substring(0, charIndex + 1);

                    charIndex++;

                    if (charIndex === currentWord.length) {

                        deleting = true;

                        setTimeout(typeWriter, pauseTime);

                        return;
                    }

                } else {

                    element.innerHTML = currentWord.substring(0, charIndex - 1);

                    charIndex--;

                    if (charIndex === 0) {

                        deleting = false;

                        wordIndex++;

                        if (wordIndex >= words.length) {
                            wordIndex = 0;
                        }

                    }

                }

                setTimeout(typeWriter, deleting ? deletingSpeed : typingSpeed);

            }

            typeWriter();

            const scrollTopBtn = document.getElementById("scroll-top-btn");
            if (scrollTopBtn) {
                const toggleScrollTopBtn = () => {
                    if (window.scrollY > 300) {
                        scrollTopBtn.classList.remove("hidden");
                    } else {
                        scrollTopBtn.classList.add("hidden");
                    }
                };

                window.addEventListener("scroll", toggleScrollTopBtn, { passive: true });
                scrollTopBtn.addEventListener("click", () => {
                    window.scrollTo({ top: 0, behavior: "smooth" });
                });

                toggleScrollTopBtn();
            }
        });
    </script>
</body>

</html>