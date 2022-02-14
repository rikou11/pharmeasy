<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" media="all">

    <title>Document</title>
</head>

<body>
    <div class="w-full ">
        <nav class="container relative flex flex-wrap items-center justify-between p-8 mx-auto lg:justify-between xl:px-0">
            <div class="flex flex-wrap items-center justify-between w-full lg:w-auto">
                <a class="flex items-center space-x-2 text-2xl font-medium text-indigo-500 dark:text-gray-100" href="/#">
                    <span>
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg>
                    </span>
                    <span>Logo</span>
                </a>
                <button aria-label="Toggle Menu" class="px-2 py-1 ml-auto text-gray-500 rounded-md lg:hidden hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 focus:outline-none dark:text-gray-300 dark:focus:bg-gray-700 dark:focus:text-gray-300" id="headlessui-disclosure-button-undefined" type="button">
                    <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden text-center lg:flex lg:items-center">
                <ul class="items-center justify-end flex-1 pt-6 lg:pt-0 list-reset lg:flex">
                    <li class="mr-3 nav__item">
                        <a class="inline-block px-4 py-2 text-lg font-normal text-gray-800 no-underline rounded-md dark:text-gray-200 hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 focus:outline-none" href="/#">Product</a>
                    </li>
                    <li class="mr-3 nav__item">
                        <a class="inline-block px-4 py-2 text-lg font-normal text-gray-800 no-underline rounded-md dark:text-gray-200 hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 focus:outline-none" href="/#">Features</a>
                    </li>
                    <li class="mr-3 nav__item">
                        <a class="inline-block px-4 py-2 text-lg font-normal text-gray-800 no-underline rounded-md dark:text-gray-200 hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 focus:outline-none" href="/#">Pricing</a>
                    </li>
                    <li class="mr-3 nav__item">
                        <a class="inline-block px-4 py-2 text-lg font-normal text-gray-800 no-underline rounded-md dark:text-gray-200 hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 focus:outline-none" href="/#">Company</a>
                    </li>
                    <li class="mr-3 nav__item">
                        <a class="inline-block px-4 py-2 text-lg font-normal text-gray-800 no-underline rounded-md dark:text-gray-200 hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 focus:outline-none" href="/#">Blog</a>
                    </li>
                </ul>
            </div>
            <div class="hidden mr-3 space-x-3 lg:flex nav__item">
                <a class="px-6 py-2 text-white bg-indigo-600 rounded-md md:ml-5" href="/#">Get Started</a>
            </div>
        </nav>
    </div>
    <div class="flex items-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="w-full px-5 mx-auto lg:container">
            <div class="max-w-screen-lg mx-auto">
                <div class="min-w-full my-10 overflow-x-auto border rounded-md shadow-sm dark:border-gray-700">
                    <table class="min-w-full bg-white rounded whitespace-nowrap">
                        <thead class="border-b bg-gray-50">
                            <tr class="">
                                <th class="px-3 py-3 text-center ">
                                    <div class="flex place-content-center">
                                        <input type="checkbox" name="select_all" id="select_all" class="w-4 h-4 text-indigo-500 border border-gray-200 rounded focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 dark:border-gray-700" />
                                    </div>
                                </th>
                                <th class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">Order ID</th>
                                <th class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">Date</th>
                                <th class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">Customer</th>
                                <th class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">Status</th>
                                <th class="px-3 py-3 text-xs font-normal text-right text-gray-500 uppercase align-middle">Amount</th>
                                <th class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle"></th>
                            </tr>
                        </thead>
                        <tbody class="text-sm bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="w-20 px-3 py-4 text-center">
                                    <input type="checkbox" name="select" class="w-4 h-4 rounded opacity-50" />
                                </td>
                                <td class="px-3 py-4 text-gray-600 ">#102-325-2565</td>
                                <td class="px-3 py-4 text-gray-500 ">May 07, 2021</td>
                                <td class="px-3 py-4">
                                    <div class="flex items-center w-max">
                                        <img width="50" height="50" class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1506085452766-c330853bea50?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;fit=crop&amp;h=200&amp;w=200&amp;s=3e378252a934e660f231666b51bd269a" alt="avatar" />
                                        <div class="ml-4">
                                            <div>Chase Maxwell</div>
                                            <div class="text-sm text-gray-400">chase@anothercompany.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-3 py-4">
                                    <span class="px-4 py-1 text-sm text-green-500 rounded-full bg-green-50">completed</span>
                                </td>
                                <td class="px-3 py-4 text-right text-gray-500 ">$125.00</td>
                                <td class="w-20 px-3 py-2 text-center text-gray-500 ">
                                    <div class="flex place-content-center">
                                        <a href="#!">
                                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>