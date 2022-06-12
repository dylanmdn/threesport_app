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

    <?php require './admin/traitement/traitement_register_adm.php'; ?>

    <div class="max-w-md px-8 py-4 mx-auto mt-16 bg-white rounded-lg shadow-lg  ">
        <form action="" method="POST">

            <div class="form-control ">
                <label class="label">
                    <span class="label-text">Identifiant administrateur</span>
                </label>
                <input type="text" name="name_admin" placeholder="Votre nom" class="input input-bordered" required>
            </div>

            <div class="form-control ">
                <label class="label">
                    <span class="label-text">Mot de passe</span>
                </label>
                <input type="password" name="password" placeholder="Saisir mot de passe" class="input input-bordered" required>
            </div>

            <div class="form-control pt-6 ">
                <button class="btn btn-active " type="submit" role="button" aria-pressed="true">Inscrire un</button>
            </div>

        </form>
    </div>





</body>

</html>

<!-- <form action="" method="POST">
        <input type="text" name="nom" placeholder="Nom" required> <br>
        <input type="text" name="prenom" placeholder="Prénom" required> <br>
        <input type="text" name="adresse" placeholder="Adresse" required> <br>
        <input type="date" name="date_naissance" placeholder="Date de naissance" required> <br>
        <label for="sexe">Sexe</label> <br>
        <input type="radio" name="sexe" id="sexe" value="homme" checked>
        <label for="sexe">Homme</label> <br>
        <input type="radio" name="sexe" id="sexe" value="femme">
        <label for="sexe">Femme</label> <br>
        <input type="password" name="password" placeholder="Mot de passe" required> <br>
        <button type="submit"> Valider </button>

    </form> -->