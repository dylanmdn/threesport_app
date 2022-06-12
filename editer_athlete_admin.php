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

    <?php require './admin/traitement/traitement_athlete_adm.php'; ?>



    <div class="flex justify-center min-h-screen bg-gray-100">


        <div class="container  my-auto max-w-md  p-3 bg-white">
            <h3 class="text-gray-700 text-3xl font-medium text-center mb-10"><?= $triathlete->nom_du_triathlete . " " . $triathlete->prenom_du_triathlete; ?></h3>
            <div class="m-6">
                <form class="mb-4" method="POST">
                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Nom </span>
                        </label>
                        <input  onClick="this.select();" type="text" value="<?= $triathlete->nom_du_triathlete; ?>" name="name_triathlete" class="input input-bordered">
                    </div>
                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Prénom </span>
                        </label>
                        <input onClick="this.select();" value="<?= $triathlete->prenom_du_triathlete; ?>" name="prenom_triathlete" class="input input-bordered">
                    </div>
                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Date de naissance </span>
                        </label>
                        <input onClick="this.select();" type="date" value="<?= $triathlete->date_de_naissance; ?>" name="date_naissance" class="input input-bordered">
                    </div>


                    <div class="form-control ">
                        <label class="label">
                            <span class="label-text">Sexe</span>
                        </label>
                        <select class="select select-bordered w-full " name="sexe">
                            <option name="sexe" selected="selected" hidden ><?= $triathlete->sexe_triathlete; ?></option>
                            <option name="sexe" value="homme">Homme</option>
                            <option name="sexe" value="femme">Femme</option>
                        </select>
                    </div>

                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Adresse Postale </span>
                        </label>
                        <input onClick="this.select();" value="<?= $triathlete->adresse_triathlete; ?>" name="adresse_postale" class="input input-bordered">
                    </div>



                    <div class="form-control mt-10">
                        <button type="submit" class="btn btn-active" role="button" aria-pressed="true">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>





</body>