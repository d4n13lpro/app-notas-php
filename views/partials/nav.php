<?php
// Esto detendrá la carga del Nav y del resto de la página
//dd(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
?>
<nav class="bg-gray-800/50 border-b border-white/10">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="w-8 h-8" />
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">

                        <a href="./"
                            class="<?= urlIs("/app_notas_pract/") ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">
                            Home
                        </a>

                        <a href="about"
                            class="<?= urlIs('/app_notas_pract/about') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">
                            About
                        </a>

                        <a href="contact"
                            class="<?= urlIs('/app_notas_pract/contact') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">
                            Contact
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>