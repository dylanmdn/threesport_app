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

    <?php require './admin/traitement/traitement_result_adm.php'; ?>



    <div class="flex justify-center min-h-screen bg-gray-100">


        <div class="container  my-auto max-w-md  p-3 bg-white">
            <p class="text-gray-700 text-2xl font-medium text-center mb-10"> Entrer les résultats de <?= $result->nom_du_triathlete; ?></p>
            <div class="m-6">
                <form class="mb-4" method="POST">
                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Temps Natation </span>
                        </label>
                        <input onClick="this.select();" type="time" value="<?= $result->temps_natation; ?>" name="natation" class="input input-bordered">
                    </div>
                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Temps Cyclisme</span>
                        </label>
                        <input onClick="this.select();" type="time" value="<?= $result->temps_course_cycliste; ?>" name="cyclisme" class="input input-bordered">
                    </div>

                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Temps Course à pied </span>
                        </label>
                        <input onClick="this.select();" type="time" value="<?= $result->temps_course_pied; ?>" name="course_pied" class="input input-bordered">
                    </div>

                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Classement</span>
                        </label>
                        <input onClick="this.select();" type="number" value="<?= $result->classement_categorie; ?>" name="classement" class="input input-bordered">
                    </div>



                    <div class="form-control mt-10">
                        <button type="submit" class="btn btn-active" role="button" aria-pressed="true">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>





</body>