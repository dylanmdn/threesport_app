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
    <?php require 'traitement/traitement_inscription_compet.php'; ?>

    <?php include 'header_option.php'; ?>

    <div>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 mt-5">
            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>


            <div class="flex-1 flex flex-col overflow-hiddenb">

                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-white">
                    <div class="container mx-auto px-6 py-8">
                        <h3 class="text-gray-700 text-3xl font-medium">Triathlon disponible</h3>


                        <div class="flex flex-col mt-8">
                            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                                <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                                    <table class="min-w-full">
                                        <thead>
                                            <tr>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider"> NOM TRIATHLON</th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">LIEU TRIATHLON </th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">DATE TRIATHLON </th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">DISTANCE NATATION </th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">DISTANCE CYCLISME </th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">DISTANCE COURSE A PIED </th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                            </tr>
                                        </thead>

                                        <?php foreach ($triathlon as $course) : ?>
                                            <tbody class="bg-white">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div>
                                                            <div class="text-base leading-5  text-gray-900">
                                                                <?= $course->nom_triathlon; ?>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-base leading-5 text-gray-900">
                                                            <?= $course->lieu_triathlon; ?>
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-base leading-5 text-gray-900">
                                                            <?= $course->date_triathlon; ?>
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-base leading-5 text-gray-900">
                                                            <?= $course->distance_natation ." Km"; ?>
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-base leading-5 text-gray-900">
                                                            <?= $course->distance_cyclisme ." Km"; ?>
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-base leading-5 text-gray-900">
                                                            <?= $course->distance_course_pied ." Km"; ?>
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="text-base leading-5 text-gray-900">
                                                            <a href="form_participation.php?id=<?= $course->id_triathlon; ?>" type="submit" class="btn btn-active">Participer</a>
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