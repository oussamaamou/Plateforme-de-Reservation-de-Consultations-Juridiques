<?php 

    session_start();

    if(!isset($_SESSION['ID'])){
        header('location: login.php');
        exit();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Lien du Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lien des Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    
    <title>Reservations</title>
</head>
<body class="bg-stone-300">
    
    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a class="flex items-center">
                    <img src="/Systeme de Réservation de Consultations Juridiques/public/images/lawyer_logo.png" class="mr-3 mt-[-2rem] w-[11rem]" alt="Site Web Logo" />
                </a>
                <div class="flex items-center lg:order-2 mt-[-3rem]">
                    <button type="button" class="text-white bg-yellow-500 hover:opacity-85 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <a href="login.php"> Se deconnecter </a>
                    </button>
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1 mt-[-3rem]" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="avocat_dashboard.php" class="block py-2 pr-4 pl-3 text-stone-700 rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="avocat_profile.php" class="block py-2 pr-4 pl-3 text-stone-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Profile</a>
                        </li>
                        <li>
                            <a href="manipuler_reservations.php" class="block py-2 pr-4 pl-3 text-stone-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Reservations</a>
                        </li>
                        <li>
                            <a href="avocat_disponibilite.php" class="block py-2 pr-4 pl-3 text-stone-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Disponibilité</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="pt-[3rem]">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900">
                
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Client
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date de Consultation
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="annltbl px-6 py-3">
                                Action
                            </th>
                            <th scope="col" class="annltbl px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>

                    <tbody id="rsrvtioncard">
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">Ahmed Rachad</div>
                                    <div class="font-normal text-gray-500">rachad@gmail.com</div>
                                </div>  
                            </th>
                            <td class="px-6 py-4">
                                25-12-2024
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Confirmée
                                </div>
                            </td>
                            <td class="annltbl px-6 py-4">
                                <button id="dltersrvtion" class="font-medium text-red-600 hover:cursor-pointer">Annuler</button>
                            </td>
                            <td class="annltbl px-6 py-4">
                                <button id="cfrmrsrvtion" class="font-medium text-green-600 hover:cursor-pointer">Confirmer</button>
                            </td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">Ahmed Rachad</div>
                                    <div class="font-normal text-gray-500">rachad@gmail.com</div>
                                </div>  
                            </th>
                            <td class="px-6 py-4">
                                25-12-2024
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Confirmée
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <button  id="annltbl" class="font-medium text-red-600 hover:cursor-pointer">Annuler</button>
                            </td>
                            <td class="px-6 py-4">
                                <button id="cfrmrsrvtion" class="font-medium text-green-600 hover:cursor-pointer">Confirmer</button>
                            </td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">Ahmed Rachad</div>
                                    <div class="font-normal text-gray-500">rachad@gmail.com</div>
                                </div>  
                            </th>
                            <td class="px-6 py-4">
                                25-12-2024
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Confirmée
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <button  id="annltbl" class="font-medium text-red-600 hover:cursor-pointer">Annuler</button>
                            </td>
                            <td class="px-6 py-4">
                                <button id="cfrmrsrvtion" class="font-medium text-green-600 hover:cursor-pointer">Confirmer</button>
                            </td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">Ahmed Rachad</div>
                                    <div class="font-normal text-gray-500">rachad@gmail.com</div>
                                </div>  
                            </th>
                            <td class="px-6 py-4">
                                25-12-2024
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Confirmée
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <button  id="annltbl" class="font-medium text-red-600 hover:cursor-pointer">Annuler</button>
                            </td>
                            <td class="px-6 py-4">
                                <button id="cfrmrsrvtion" class="font-medium text-green-600 hover:cursor-pointer">Confirmer</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </main>

    <footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="/Systeme de Réservation de Consultations Juridiques/public/images/lawyer_logo.png" class="mb-[-2rem] w-[11rem]" alt="Site Web Logo" />
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="https://oussamaamou.github.io/PortFolio-HTML-CSS-JS/" target="_blank" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="https://www.youcode.ma/" target="_blank" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/oussama-amou-b71151337/" target="_blank" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">Lawyer</a>. Tous droits réservés.</span>
        </div>
    </footer>

    <script src="../js/script.js"></script>
</body>
</html>