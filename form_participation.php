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

    <?php require 'traitement/traitement_form_participation.php'; ?>

    <div class="flex justify-center min-h-screen bg-gray-100">
        <div class="container  my-auto max-w-md  p-3 bg-white">

            <div class="m-6">
                <form class="mb-4" method="POST">
                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Identifiant </span>
                        </label>
                        <input type="text" value="<?= $_SESSION['id'] ?>" name="id_user" class="input input-bordered" readonly="readonly">
                    </div>
                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Triathlon choisi </span>
                        </label>
                        <input  value="<?= $triathlon->nom_triathlon; ?>" name="triathlon" class="input input-bordered" readonly="readonly">
                        <input  value="<?= $triathlon->id_triathlon; ?>" name="id_triathlon" hidden>
                    </div>
                    <div class="form-control mt-10">
                        <button type="submit" class="btn btn-active" role="button" aria-pressed="true">Particiter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>





</body>