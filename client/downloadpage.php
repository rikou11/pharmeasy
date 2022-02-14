<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
include('../easypharmConfig/interdit-client.php');
include('../easypharmConfig/connection.php');
// $a = mysqli_real_escape_string($con, $_SESSION['pass']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- our project just needs Font Awesome Solid + Brands -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>

<body>
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="max-w-screen-lg px-4 md:px-8 mx-auto">
            <div class="grid sm:grid-cols-2 gap-8">
                <!-- content - start -->
                <div class="flex flex-col justify-center items-center sm:items-start md:py-24 lg:py-32">

                    <h1 class="text-gray-800 text-2xl md:text-3xl font-bold text-center sm:text-left mb-2">Bienvenue dans <span class="text-red-500">GDS pro</span> </h1>

                    <p class="text-gray-500 md:text-lg text-center sm:text-left mb-8">Votre lien de téléchargement </p>

                    <a href="tail.zip" download class="inline-block bg-red-400 hover:bg-red-600
                     focus-visible:ring ring-indigo-300 text-white active:text-gray-100
                      text-sm md:text-base font-semibold text-center rounded-lg outline-none
                       transition duration-100 px-8 py-3">Télécharger <i class="fa-solid fa-download"></i> </a>
                </div>
                <!-- content - end -->

                <!-- image - start -->
                <div class="h-80 md:h-auto bg-gray-100 overflow-hidden shadow-lg rounded-lg relative">
                    <img src="https://images.unsplash.com/photo-1622227922682-56c92e523e58?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" loading="lazy" alt="Photo by @heydevn" class="w-full h-full object-cover object-center absolute inset-0" />
                </div>
                <!-- image - end -->
            </div>
        </div>
    </div>


    <script src="//unpkg.com/alpinejs" defer></script>

</body>

</html>