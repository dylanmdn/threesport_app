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

    <?php require './admin/traitement/traitement_add_triathlon_adm.php'; ?>
    
    

    <div class="flex justify-center min-h-screen bg-gray-100">

        
        <div class="container  my-auto max-w-md  p-3 bg-white">
        <h3 class="text-gray-700 text-3xl font-medium text-center mb-10"></h3>
            <div class="m-6">
                <form class="mb-4" method="POST">
                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Nom triathlon </span>
                        </label>
                        <input type="text"  name="triathlon_name" class="input input-bordered" >
                    </div>
                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Lieu triathlon </span>
                        </label>
                        <input  name="triathlon_lieu" class="input input-bordered">
                    </div>
                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Date triathlon </span>
                        </label>
                        <input type="date"  name="triathlon_date" class="input input-bordered">
                    </div>
                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Distance natation </span>
                        </label>
                        <input type="text" name="distance_nat" class="input input-bordered">
                    </div>
                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Distance cyclisme </span>
                        </label>
                        <input type="text" name="distance_cycl" class="input input-bordered">
                    </div>
                    
                    <div class="form-control mb-3">
                        <label class="label">
                            <span class="label-text">Distance course à pied </span>
                        </label>
                        <input type="text"  name="course_pied" class="input input-bordered" >
                    </div>
                    
                    <div class="form-control mt-10">
                        <button type="submit" class="btn btn-active" role="button" aria-pressed="true">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    



</body>