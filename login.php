<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.2/dist/full.css" rel="stylesheet" type="text/css" />
    <title>Je suis Athlète</title>
</head>

<body class="" >
    <?php include 'include/navbar.php' ?>
    <?php require 'traitement/traitement_login.php'; ?>

    <div class="max-w-md px-8 py-4 mx-auto mt-16 bg-white rounded-lg shadow-lg ">
        <form action="" method="POST">
            <div class="form-control ">
                <label class="label">
                    <span class="label-text">Identifiant</span>
                </label>
                <input type="text"  name="user_name" placeholder="Votre nom" class="input input-bordered " required>
            </div>
            <div class="form-control ">
                <label class="label">
                    <span class="label-text">Mot de passe</span>
                </label>
                <input type="password" name="password" placeholder="Saisir mot de passe" class="input input-bordered" required>
            </div>
            <div  class="form-control pt-6 mb-5">
                <button class="btn btn-active " type="submit" role="button" aria-pressed="true">Connexion</button>
            </div>
        </form>

        <div class="text-center"><a href="login_admin.php" > Je suis administrateur</a></div>
        
        
    </div>

</body>

</html>
