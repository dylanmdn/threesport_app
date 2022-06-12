<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.2/dist/full.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>

<body>

    <?php require './admin/traitement/traitement_login_adm.php'; ?>
    <?php require './admin/traitement/traitement_dashbord_adm.php'; ?>

    <div>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

            <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
                <div class="flex items-center justify-center mt-8">
                    <div class="flex items-center">
                        <svg class="h-12 w-12" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z" fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z" fill="white"></path>
                        </svg>

                        <span class="text-white text-2xl mx-2 font-semibold">Threesport</span>
                    </div>
                </div>

                <nav class="mt-10">
                    <a class="flex items-center mt-4 py-2 px-6 bg-gray-700 bg-opacity-25 text-gray-100" href="dashboard.php">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                        </svg>

                        <span class="mx-3">Vue d'ensemble</span>
                    </a>

                    <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="triathlon_admin.php">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                            </path>
                        </svg>

                        <span class="mx-3">Triathlon</span>
                    </a>

                    <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="triathlete_admin.php">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                            </path>
                        </svg>

                        <span class="mx-3">Athlète</span>
                    </a>

                    <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="triathlete_inscrit_admin.php">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                            </path>
                        </svg>

                        <span class="mx-3">Athlète - Inscrit</span>
                    </a>




                </nav>
            </div>
            <div class="flex-1 flex flex-col overflow-hidden">
                <header class=" flex items-center py-4 px-6 bg-white border-b-4 border-gray-900">

                    <div x-data="{ dropdownOpen: false }" class="relative">
                        <button @click="dropdownOpen = ! dropdownOpen" class=" block rounded-full overflow-hidden shadow focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10" style="display: none;"></div>

                        <div x-show="dropdownOpen" class="absolute left-0 mt-2 w-48 bg-gray-200 rounded-md overflow-hidden shadow-xl z-10" style="display: none;">

                            <a href="./logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Déconnexion</a>
                        </div>
                    </div>
                    <div class="ml-2 font-medium"> <?php echo $_SESSION['name']; ?> </div>
                </header>
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container mx-auto px-6 py-8">
                        <h3 class="text-gray-700 text-3xl font-medium">Vue d'ensemble</h3>



                        <div class="mt-4">
                            <div class="flex flex-wrap -mx-6">
                                <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                                    <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                        <div class="p-3 rounded-full  bg-opacity-75">
                                            <img src="https://img.icons8.com/ios-filled/50/000000/discus-throw.png" />
                                        </div>

                                        <div class="mx-5">
                                            <h4 class="text-2xl font-semibold text-gray-700"><?php echo $nb_athlete; ?></h4>
                                            <div class="text-gray-500">Nombre d'Athlètes</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                                    <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                        <div class="p-3 rounded-full bg-orange-600 bg-opacity-75">
                                            <img src="https://img.icons8.com/ios-filled/50/000000/man-winner.png" />
                                        </div>

                                        <div class="mx-5">
                                            <h4 class="text-2xl font-semibold text-gray-700"><?php echo $nb_triathlon; ?></h4>
                                            <div class="text-gray-500">Nombre de Compétitions</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                                    <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                        <div class="p-3 rounded-full  bg-opacity-75">
                                            <img src="https://img.icons8.com/ios-filled/50/000000/multi-edit.png" />
                                        </div>

                                        <div class="mx-5">
                                            <h4 class="text-2xl font-semibold text-gray-700"><?php echo $nb_participant; ?></h4>
                                            <div class="text-gray-500">Total Participants Inscrits </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">

                        </div>

                        <div class="flex flex-col mt-8">
                            <h3 class="text-gray-700 text-2xl font-small mb-2"> Nombre d'Athlètes </h3>
                            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                                <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                                    <table class="min-w-full">
                                        <thead>
                                            <tr>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Nom</th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Prénom</th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Sexe</th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Date naissance</th>

                                            </tr>
                                        </thead>
                                        <?php foreach ($athele as $atheles) : ?>
                                            <tbody class="bg-white">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-sm leading-5 font-medium text-gray-900"><?= $atheles->nom_du_triathlete ?></div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-sm leading-5 text-gray-900"><?= $atheles->prenom_du_triathlete ?></div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-sm leading-5 text-gray-900"><?= $atheles->sexe_triathlete ?></div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-sm leading-5 text-gray-900"><?= $atheles->date_de_naissance ?></div>
                                                    </td>

                                                </tr>
                                            </tbody>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                        </div>



                        <div class="flex flex-col mt-8">
                            <h3 class="text-gray-700 text-2xl font-small mb-2"> Nombre de Compétitions </h3>
                            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                                <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                                    <table class="min-w-full">
                                        <thead>
                                            <tr>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"> nom triathlon</th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">lieu triathlon </th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">date triathlon </th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">distance natation </th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">distance cyclisme </th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">distance course a pied </th>

                                            </tr>
                                        </thead>
                                        <?php foreach ($triathlon as $triathlons) : ?>
                                            <tbody class="bg-white">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-sm leading-5 font-medium text-gray-900"><?= $triathlons->nom_triathlon ?>
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-sm leading-5 text-gray-900"><?= $triathlons->lieu_triathlon ?> </div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-sm leading-5 text-gray-900"><?= $triathlons->date_triathlon ?> </div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-sm leading-5 text-gray-900"><?= $triathlons->distance_natation ?> Km</div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-sm leading-5 text-gray-900"><?= $triathlons->distance_cyclisme ?> Km</div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-sm leading-5 text-gray-900"><?= $triathlons->distance_course_pied ?> Km</div>
                                                    </td>


                                                </tr>
                                            </tbody>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col mt-8">
                            <h3 class="text-gray-700 text-2xl font-small mb-2"> Total Participants Inscrits</h3>
                            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                                <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                                    <table class="min-w-full">
                                        <thead>
                                            <tr>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Nom</th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Prénom</th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Dossard</th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Date d'insciption au triathlon</th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    nom triathlon</th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Date Triathlon</th>

                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    TEMPS NATATION</th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    TEMPS CYCLISME </th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    TEMPS COURSE A PIED</th>

                                            </tr>
                                        </thead>

                                        <?php foreach ($participant as $participants) : ?>
                                            <tbody class="bg-white">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-sm leading-5 font-medium text-gray-900"><?= $participants->nom_du_triathlete ?></div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-sm leading-5 text-gray-900"><?= $participants->prenom_du_triathlete ?> </div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-sm leading-5 text-gray-900">N° <?= $participants->id_dossard ?> </div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-sm leading-5 text-gray-900"><?= $participants->date_inscription ?> </div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-sm leading-5 text-gray-900"><?= $participants->nom_triathlon ?></div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-sm leading-5 text-gray-900"><?= $participants->date_triathlon ?></div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-sm leading-5 text-gray-900"><?= $participants->temps_natation ?> </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-sm leading-5 text-gray-900"><?= $participants->temps_course_cycliste ?> </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-sm leading-5 text-gray-900"><?= $participants->temps_course_pied ?> </div>
                                                    </td>

                                                </tr>



                                            </tbody>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

</body>

</html>