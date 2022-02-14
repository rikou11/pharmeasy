<!-- <?php
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
        include('../easypharmConfig/connection.php');
        include('../easypharmConfig/interdit.php');

        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" media="all">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Antic" media="all">

    <title>Document</title>
</head>

<body>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <div class="w-10 h-10 text-white p-2 bg-green-500 rounded-full"><i class="fa-solid fa-seedling text-2xl "></i></div>
                <span class="ml-3 text-xl">EasyPharm</span>
            </a>
            <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-gray-900">First Link</a>
                <a class="mr-5 hover:text-gray-900">Second Link</a>
                <a class="mr-5 hover:text-gray-900">Third Link</a>
                <a class="mr-5 hover:text-gray-900">Fourth Link</a>
            </nav>
            <button class="inline-flex items-center  py-2 px-3 focus:outline-none hover:bg-red-500 hover:text-white rounded shadow-lg border border-red-400 text-base text-red-400 mt-4 md:mt-0">
                Déconnecter &nbsp;<i class="fa-solid fa-arrow-right-from-bracket"></i>

            </button>
        </div>
    </header>









</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
</head>

<body>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <div class="w-10 h-10 text-white p-2 bg-green-500 rounded-full"><i class="fa-solid fa-seedling text-2xl "></i></div>
                <span class="ml-3 text-xl">EasyPharm</span>
            </a>
            <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-gray-900">First Link</a>
                <a class="mr-5 hover:text-gray-900">Second Link</a>
                <a class="mr-5 hover:text-gray-900">Third Link</a>
                <a class="mr-5 hover:text-gray-900">Fourth Link</a>
            </nav>
            <button class="inline-flex items-center  py-2 px-3 focus:outline-none hover:bg-red-500 hover:text-white rounded shadow-lg border border-red-400 text-base text-red-400 mt-4 md:mt-0">
                Déconnecter &nbsp;<i class="fa-solid fa-arrow-right-from-bracket"></i>

            </button>
        </div>
    </header>
    <div class="container mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="p-4 border-b border-gray-200 shadow">
                    <!-- <table> -->
                    <table id="dataTable" class="p-4">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="p-8 text-xs text-gray-500">
                                    ID
                                </th>
                                <th class="p-8 text-xs text-gray-500">
                                    Name
                                </th>
                                <th class="p-8 text-xs text-gray-500">
                                    Email
                                </th>
                                <th class="p-8 text-xs text-gray-500">
                                    Created_at
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Edit
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                    1
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-900">
                                        Jon doe 1
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-500">jhondoe@example.com</div>
                                </td>
                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                    2021-1-12
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <a href="#" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Edit</a>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <a href="#" class="px-4 py-1 text-sm text-white bg-red-400 rounded">Delete</a>
                                </td>
                            </tr>
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                    2
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-900">
                                        Jon doe 2
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-500">jhondoe@example.com</div>
                                </td>
                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                    2021-1-12
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <a href="#" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Edit</a>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <a href="#" class="px-4 py-1 text-sm text-white bg-red-400 rounded">Delete</a>
                                </td>
                            </tr>
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                    3
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-900">
                                        fares
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-500">jhondoe@example.com</div>
                                </td>
                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                    x
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <a href="#" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Edit</a>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <a href="#" class="px-4 py-1 text-sm text-white bg-red-400 rounded">Delete</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();

        });
    </script>
</body>

</html>