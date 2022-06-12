<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.2/dist/full.css" rel="stylesheet" type="text/css" />
    <title>Je suis Athlète</title>
</head>

<body>

    <?php require 'traitement/traitement_login.php'; ?>
    <?php require 'traitement/traitement_interface_user.php'; ?>



    <div class="py-5 flex flex-1 shadow-sm items-center justify-center bg-white">
        <ul class="menu items-stretch px-3 shadow-lg bg-base-100 horizontal rounded-box">
            <li>
                <a class="font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <?php echo $_SESSION['user_last']; ?>
                </a>
            </li>
            <li class="bordered">
                <a href="interface_user.php">
                    Récapitulatif
                </a>
            </li>
            <li>
                <a href="triathlon.php">
                    Triathlon
                </a>
            </li>
            <li>
                <a href="logout.php">
                    Déconnexion
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>

                </a>
            </li>
        </ul>
    </div>

    <div>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 mt-5">
            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>


            <div class="flex-1 flex flex-col overflow-hiddenb">

                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-white">
                    <div class="container mx-auto px-6 py-8">
                        <h3 class="text-gray-700 text-3xl font-medium"> Historique Triathlons </h3>


                        <div class="flex flex-col mt-8">
                            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                                <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                                    <table class="min-w-full">
                                        <thead>
                                            <tr>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider"> NOM TRIATHLON</th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">TEMPS NATATION </th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">TEMPS CYCLISME </th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">TEMPS COURSE A PIED</th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">DOSSARD</th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">DATE</th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider"> CLASSEMENT</th>
                                            </tr>
                                        </thead>

                                        <?php foreach ($competition as $competitions) : ?>
                                            <tbody class="bg-white">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div>
                                                            <div class="text-base leading-5  text-gray-900">
                                                                <?php

                                                                if ($competitions->nom_triathlon === NULL) {
                                                                    echo "Aucune données";
                                                                } else {
                                                                    echo "$competitions->nom_triathlon";
                                                                }

                                                                ?>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-base leading-5 text-gray-900">

                                                            <?php

                                                            if ($competitions->temps_natation === NULL) {
                                                                echo "Aucune données";
                                                            } else {
                                                                echo "$competitions->temps_natation";
                                                            }

                                                            ?>
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-base leading-5 text-gray-900">

                                                            <?php

                                                            if ($competitions->temps_course_cycliste === NULL) {
                                                                echo "Aucune données";
                                                            } else {
                                                                echo "$competitions->temps_course_cycliste";
                                                            }

                                                            ?>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-base leading-5 text-gray-900">
                                                            <?php

                                                            if ($competitions->temps_course_pied === NULL) {
                                                                echo "Aucune données";
                                                            } else {
                                                                echo "$competitions->temps_course_pied";
                                                            }
                                                            ?>
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-base leading-5 text-gray-900">

                                                            <?php

                                                            if ($competitions->id_dossard === NULL) {
                                                                echo "Aucune données";
                                                            } else {
                                                                echo "$competitions->id_dossard";
                                                            }
                                                            ?>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-base leading-5 text-gray-900">
                                                            <?php

                                                            if ($competitions->date_inscription === NULL) {
                                                                echo "Aucune données";
                                                            } else {
                                                                echo "$competitions->date_triathlon";
                                                            }
                                                            ?>
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-base leading-5 text-gray-900">

                                                            <?php

                                                            if ($competitions->classement_categorie === NULL) {
                                                                echo "Aucune données";
                                                            } else {
                                                                echo "$competitions->classement_categorie";
                                                            }

                                                            ?>
                                                        </div>
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