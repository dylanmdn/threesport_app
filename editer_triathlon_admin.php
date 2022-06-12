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

    <?php require './admin/traitement/traitement_update_triathlon_adm.php'; ?>
    
    

    <div class="flex justify-center min-h-screen bg-gray-100">

        
        <div class="container  my-auto max-w-md  p-3 bg-white">
        <h3 class="text-gray-700 text-3xl font-medium text-center mb-10"><?= $triathlon->nom_triathlon; ?></h3>
            <div class="m-6">
                <form class="mb-4" method="POST">
                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Nom triathlon </span>
                        </label>
                        <input type="text" value="<?= $triathlon->nom_triathlon; ?>" name="name_thiathlon" class="input input-bordered" >
                    </div>
                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Lieu triathlon </span>
                        </label>
                        <input value="<?= $triathlon->lieu_triathlon; ?>" name="lieu_triathlon" class="input input-bordered">
                    </div>
                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Date triathlon </span>
                        </label>
                        <input type="date" value="<?= $triathlon->date_triathlon; ?>" name="date_triathlon" class="input input-bordered">
                    </div>
                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Distance natation </span>
                        </label>
                        <input value="<?= $triathlon->distance_natation; ?>" name="distance_nat" class="input input-bordered">
                    </div>
                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Distance cyclisme </span>
                        </label>
                        <input value="<?= $triathlon->distance_cyclisme; ?>" name="distance_cycl" class="input input-bordered">
                    </div>
                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Distance cours à pied </span>
                        </label>
                        <input value="<?= $triathlon->distance_course_pied; ?>" name="distance_pied" class="input input-bordered">
                    </div>
                    <div class="form-control mt-10">
                        <button type="submit" class="btn btn-active" role="button" aria-pressed="true">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    



</body>