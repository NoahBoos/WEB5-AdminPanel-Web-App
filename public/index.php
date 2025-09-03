<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="app.css" rel="stylesheet">
    <title>WEB5 - Admin Panel</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="flex flex-col font-sans-3 text-slate-800 h-screen" x-data="{ open: false }">
    <header class="bg-primary-600 text-white text-lg sm:text-xl flex flex-row justify-between px-4 py-4">
        <div class="flex flex-row justify-space-between items-center gap-4">
            <button @click="open = !open">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu-icon lucide-menu"><path d="M4 5h16"/><path d="M4 12h16"/><path d="M4 19h16"/></svg>
            </button>
            <p>
              Panneau d'administration
            </p>
        </div>
        <div class="flex flex-row justify-between items-center gap-4">
            <input class="max-md:hidden bg-white text-slate-800 p-1 rounded-md" type="text" placeholder="Recherche">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search md:hidden"><path d="m21 21-4.34-4.34"/><circle cx="11" cy="11" r="8"/></svg>
            <div class="flex flex-row justify-between items-center gap-4" x-data="{ open: false }" @click.outside="open = false" >
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-user-round-icon lucide-circle-user-round"><path d="M18 20a6 6 0 0 0-12 0"/><circle cx="12" cy="10" r="4"/><circle cx="12" cy="12" r="10"/></svg>
                </button>
                <p class="max-sm:hidden">Noah <span class="uppercase">Boos</span></p>
                <button @click="open = !open">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down-icon lucide-chevron-down"><path d="m6 9 6 6 6-6"/></svg>
                </button>
                <div class="w-fit absolute top-16 bg-white text-slate-700 right-4" x-show="open">
                    <div class="sm:hidden">
                        <ul>
                            <li class="px-4 py-2">
                                <p>
                                    Noah Boos
                                </p>
                            </li>
                        </ul>
                        <hr>
                    </div>
                    <ul>
                        <li class="px-4 py-2">
                            <a href="#">
                                Mon profil
                            </a>
                        </li>
                        <li class="px-4 py-2">
                            <a href="#">
                                Mes messages
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <ul>
                        <li class="px-4 py-2">
                            <a href="#">
                                Déconnexion
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="flex flex-1 overflow-hidden">
        <aside class="hidden md:flex bg-slate-700 text-white flex-col gap-4  w-[15rem] px-6 py-2 overflow-y-auto" x-show="open" x-transition.duration.400ms>
            <a href="#" class="flex flex-row justify-start items-center gap-6 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-gauge-icon lucide-circle-gauge"><path d="M15.6 2.7a10 10 0 1 0 5.7 5.7"/><circle cx="12" cy="12" r="2"/><path d="M13.4 10.6 19 5"/></svg>
                Tableau de bord
            </a>
            <a href="#" class="flex flex-row justify-start items-center gap-6 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-files-icon lucide-files"><path d="M15 2a2 2 0 0 1 1.414.586l4 4A2 2 0 0 1 21 8v7a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"/><path d="M15 2v4a2 2 0 0 0 2 2h4"/><path d="M5 7a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h8a2 2 0 0 0 1.732-1"/></svg>
                Pages
            </a>
            <a href="#" class="flex flex-row justify-start items-center gap-6 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-newspaper-icon lucide-newspaper"><path d="M15 18h-5"/><path d="M18 14h-8"/><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-4 0v-9a2 2 0 0 1 2-2h2"/><rect width="8" height="4" x="10" y="6" rx="1"/></svg>
                Articles
            </a>
            <a href="#" class="flex flex-row justify-start items-center gap-6 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                Utilisateurs
            </a>
            <a href="#" class="flex flex-row justify-start items-center gap-6 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings-icon lucide-settings"><path d="M9.671 4.136a2.34 2.34 0 0 1 4.659 0 2.34 2.34 0 0 0 3.319 1.915 2.34 2.34 0 0 1 2.33 4.033 2.34 2.34 0 0 0 0 3.831 2.34 2.34 0 0 1-2.33 4.033 2.34 2.34 0 0 0-3.319 1.915 2.34 2.34 0 0 1-4.659 0 2.34 2.34 0 0 0-3.32-1.915 2.34 2.34 0 0 1-2.33-4.033 2.34 2.34 0 0 0 0-3.831A2.34 2.34 0 0 1 6.35 6.051a2.34 2.34 0 0 0 3.319-1.915"/><circle cx="12" cy="12" r="3"/></svg>
                Paramètres
            </a>
        </aside>
        <div class="flex flex-col flex-1 overflow-y-auto">
            <main class="flex-1">
                <?php
                    $currentURL = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

                    if (str_ends_with($currentURL, "/")) {
                        include('./pages/dashboard.php');
                    }
                ?>
            </main>
            <footer class="p-6 bg-slate-700 text-white">
                <p class="text-center">
                    © 2025 - WEB6 - Admin Panel - Web App - Développé par Noah Boos.
                </p>
            </footer>
        </div>
    </div>
</body>
</html>