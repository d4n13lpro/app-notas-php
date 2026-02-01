<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-900">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

    <style type="text/tailwindcss">
        /* Esto ayuda a que las variables de espaciado modernas funcionen si usas v4 */
        @theme {
            --spacing-2: 0.5rem;
        }
    </style>
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800/50 border-b border-white/10">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="w-8 h-8" />
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="./" aria-current="page" class="rounded-md bg-gray-950/50 px-3 py-2 text-sm font-medium text-white">Home</a>
                                <a href="about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">About</a>
                                <a href="contact" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a>
                            </div>
                        </div>
                    </div>

                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <button type="button" class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-none">
                                <span class="sr-only">View notifications</span>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6">
                                    <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>

                            <el-dropdown class="relative ml-3">
                                <button class="relative flex max-w-xs items-center rounded-full focus:outline-none">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="w-8 h-8 rounded-full border border-white/10" />
                                </button>

                                <el-menu anchor="bottom end" class="w-48 mt-2 rounded-md bg-gray-800 py-1 shadow-lg ring-1 ring-black ring-opacity-5">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Your profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Sign out</a>
                                </el-menu>
                            </el-dropdown>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <header class="bg-gray-800 border-b border-white/10">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-white">Home</h1>
            </div>
        </header>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <p class="text-gray-400">Hello. Welcome to the hom page</p>

            </div>
        </main>
    </div>
</body>

</html>