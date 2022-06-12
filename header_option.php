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
            <li>
                <a href="interface_user.php">
                    Récapitulatif
                </a>
            </li>
            <li class="bordered">
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

</body>

</html>