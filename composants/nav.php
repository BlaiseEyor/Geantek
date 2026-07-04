<?php
// Header component for Geantek
?>
<!-- Navbar -->
<header class="fixed w-full top-0 z-50 border-b shadow-sm border-gray-200 bg-white/65 backdrop-blur">
    <nav class="mx-auto max-w-7xl flex items-center justify-between px-4 py-6">
        <a href="#top" data-aos="zoom-in" class="text-xl text-green-500 font-extrabold tracking-tight">
            <h1 class="text-xl text-purple-500 font-extrabold tracking-tight">GEANTEK</h1>
        </a>
        <div class="hidden items-center gap-6 md:flex">
            <a href="index.php" onclick="location.reload()" data-aos="zoom-in" class="group relative flex items-center gap-2 text-sm font-medium text-gray-900 hover:text-purple-600">
                Accueil
                <span class="absolute inset-x-0 bottom-0 h-0.5 w-0 bg-purple-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="#apropos" data-aos="zoom-in" class="group relative flex items-center gap-2 text-sm font-medium text-gray-900 hover:text-purple-600">
                A propos
                <span class="absolute inset-x-0 bottom-0 h-0.5 w-0 bg-purple-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="#services" data-aos="zoom-in" class="group relative flex items-center gap-2 text-sm font-medium text-gray-900 hover:text-purple-600">
                Services
                <span class="absolute inset-x-0 bottom-0 h-0.5 w-0 bg-purple-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="#contact" data-aos="zoom-in" class="group relative flex items-center gap-2 text-sm font-medium text-gray-900 hover:text-purple-600">
                Contact
                <span class="absolute inset-x-0 bottom-0 h-0.5 w-0 bg-purple-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="https://wa.me/1(438)722-2726"
                target="_blank"
                class="flex items-center gap-2 rounded-full bg-purple-500 hover:bg-purple-600 text-white shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-105 px-5 py-2.5 text-sm font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="w-4 h-4">
                    <path d="M20.52 3.48A11.79 11.79 0 0 0 12.05 0C5.54 0 .24 5.3.24 11.82c0 2.08.54 4.12 1.57 5.92L0 24l6.45-1.69a11.8 11.8 0 0 0 5.6 1.43h.01c6.51 0 11.81-5.3 11.81-11.82 0-3.16-1.23-6.13-3.35-8.44ZM12.06 21.7a9.88 9.88 0 0 1-5.03-1.37l-.36-.21-3.83 1 1.02-3.73-.24-.38a9.87 9.87 0 0 1-1.52-5.2c0-5.47 4.45-9.92 9.93-9.92 2.65 0 5.14 1.03 7.01 2.9a9.84 9.84 0 0 1 2.91 7.02c0 5.47-4.45 9.91-9.89 9.91Zm5.44-7.44c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.95 1.17-.17.2-.35.22-.65.07-.3-.15-1.26-.46-2.4-1.47-.89-.79-1.49-1.76-1.66-2.06-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.01-1.04 2.46 0 1.45 1.07 2.86 1.22 3.06.15.2 2.1 3.2 5.09 4.49.71.31 1.27.49 1.7.63.71.23 1.36.2 1.87.12.57-.09 1.76-.72 2.01-1.41.25-.69.25-1.28.17-1.41-.08-.13-.28-.2-.58-.35Z" />
                </svg>
                <span>WhatsApp Geantek</span>
            </a>
        </div>
        
        <!-- Toggle button with SVG icon -->
        <button id="mobile-menu-btn" type="button"
            class="relative inline-flex items-center justify-center rounded-full border border-purple-600 w-10 h-10 text-purple-600 focus:outline-none md:hidden transition-all duration-300"
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Ouvrir le menu</span>
            <!-- Icone hamburger (closed state) -->
            <svg id="hamburger-icon" class="h-6 w-6 transition-all duration-300 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
            <!-- Icone fermer (open state) -->
            <svg id="close-icon" class="h-6 w-6 transition-all duration-300 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>
    
    <!-- Mobile dropdown menu with grid transition -->
    <div id="mobile-menu" class="grid grid-rows-[0fr] opacity-0 transition-all duration-300 ease-in-out md:hidden overflow-hidden border-t border-gray-100 bg-white/60 backdrop-blur-md">
        <div class="overflow-hidden">
            <div class="space-y-2 px-6 py-4 pb-6">
                <a href="index.php" onclick="location.reload()" class="flex items-center gap-2 rounded-lg py-2.5 px-3 text-sm font-semibold text-gray-900 hover:bg-purple-50 hover:text-purple-600 transition-all duration-200">
                    Accueil
                </a>
                <a href="#apropos" class="flex items-center gap-2 rounded-lg py-2.5 px-3 text-sm font-semibold text-gray-900 hover:bg-purple-50 hover:text-purple-600 transition-all duration-200">
                    A propos
                </a>
                <a href="#services" class="flex items-center gap-2 rounded-lg py-2.5 px-3 text-sm font-semibold text-gray-900 hover:bg-purple-50 hover:text-purple-600 transition-all duration-200">
                    Services
                </a>
                <a href="#contact" class="flex items-center gap-2 rounded-lg py-2.5 px-3 text-sm font-semibold text-gray-900 hover:bg-purple-50 hover:text-purple-600 transition-all duration-200">
                    Contact
                </a>
                <div class="pt-4 border-t border-gray-100">
                    <a href="https://wa.me/1(438)722-2726"
                        target="_blank"
                        class="flex items-center justify-center gap-2 rounded-full bg-purple-500 hover:bg-purple-600 text-white shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-[1.02] active:scale-[0.98] px-5 py-3 text-sm font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="w-5 h-5">
                            <path d="M20.52 3.48A11.79 11.79 0 0 0 12.05 0C5.54 0 .24 5.3.24 11.82c0 2.08.54 4.12 1.57 5.92L0 24l6.45-1.69a11.8 11.8 0 0 0 5.6 1.43h.01c6.51 0 11.81-5.3 11.81-11.82 0-3.16-1.23-6.13-3.35-8.44ZM12.06 21.7a9.88 9.88 0 0 1-5.03-1.37l-.36-.21-3.83 1 1.02-3.73-.24-.38a9.87 9.87 0 0 1-1.52-5.2c0-5.47 4.45-9.92 9.93-9.92 2.65 0 5.14 1.03 7.01 2.9a9.84 9.84 0 0 1 2.91 7.02c0 5.47-4.45 9.91-9.89 9.91Zm5.44-7.44c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.95 1.17-.17.2-.35.22-.65.07-.3-.15-1.26-.46-2.4-1.47-.89-.79-1.49-1.76-1.66-2.06-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.01-1.04 2.46 0 1.45 1.07 2.86 1.22 3.06.15.2 2.1 3.2 5.09 4.49.71.31 1.27.49 1.7.63.71.23 1.36.2 1.87.12.57-.09 1.76-.72 2.01-1.41.25-.69.25-1.28.17-1.41-.08-.13-.28-.2-.58-.35Z" />
                        </svg>
                        <span>WhatsApp Geantek</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- navbar dynamic -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        if (!btn || !menu || !hamburgerIcon || !closeIcon) return;

        function toggleMenu() {
            const isOpen = btn.getAttribute('aria-expanded') === 'true';
            if (isOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        }

        function openMenu() {
            btn.setAttribute('aria-expanded', 'true');
            // Show close icon, hide hamburger
            hamburgerIcon.classList.replace('block', 'hidden');
            closeIcon.classList.replace('hidden', 'block');
            
            // Animate menu open
            menu.classList.remove('grid-rows-[0fr]', 'opacity-0');
            menu.classList.add('grid-rows-[1fr]', 'opacity-100');
        }

        function closeMenu() {
            btn.setAttribute('aria-expanded', 'false');
            // Show hamburger icon, hide close
            closeIcon.classList.replace('block', 'hidden');
            hamburgerIcon.classList.replace('hidden', 'block');
            
            // Animate menu close
            menu.classList.remove('grid-rows-[1fr]', 'opacity-100');
            menu.classList.add('grid-rows-[0fr]', 'opacity-0');
        }

        // Toggle on button click
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMenu();
        });

        // Close menu on selecting any link
        menu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                closeMenu();
            });
        });

        // Smooth scrolling for same-page anchor links
        document.documentElement.style.scrollBehavior = 'smooth';
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', (event) => {
                const href = anchor.getAttribute('href');
                if (!href || href === '#' || !href.startsWith('#')) return;
                const targetId = href.slice(1);
                if (!targetId) return;
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    event.preventDefault();
                    closeMenu();
                    targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    history.replaceState(null, '', href);
                } else if (targetId === 'top') {
                    event.preventDefault();
                    closeMenu();
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    history.replaceState(null, '', href);
                }
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', (event) => {
            const isClickInsideMenu = menu.contains(event.target);
            const isClickInsideBtn = btn.contains(event.target);
            const isOpen = btn.getAttribute('aria-expanded') === 'true';

            if (!isClickInsideMenu && !isClickInsideBtn && isOpen) {
                closeMenu();
            }
        });
    });
</script>