<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Lien du Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lien des Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    
    <title>Consultations</title>
</head>
<body class="bg-stone-200">

    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a class="flex items-center">
                    <img src="/Systeme de Réservation de Consultations Juridiques/public/images/lawyer_logo.png" class="mr-3 mt-[-2rem] w-[11rem]" alt="Site Web Logo" />
                </a>
                <div class="flex items-center lg:order-2 mt-[-3rem]">
                    <a href="login.php" class="text-gray-800 dark:text-white hover:bg-gray-50 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a>
                    <a href="register.php" class="text-white bg-yellow-500 hover:opacity-80 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Get started</a>
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1 mt-[-3rem]" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="/Systeme de Réservation de Consultations Juridiques/interface/index.php" class="block py-2 pr-4 pl-3 text-stone-700 rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="avocat_profile.php" class="block py-2 pr-4 pl-3 text-stone-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Profile</a>
                        </li>
                        <li>
                            <a href="afficher_reservations.php" class="block py-2 pr-4 pl-3 text-stone-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Reservations</a>
                        </li>
                        <li>
                            <a href="afficher_consultations.php" class="block py-2 pr-4 pl-3 text-stone-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Consultations</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        
  
            <div id="ctnrcsltion" class="hidden fixed left-[32rem] flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <i id="xmarkcsltion" class="fa-solid fa-xmark ml-[26rem] text-2xl cursor-pointer mt-[1.2rem]" style="color: #2e2e2e;"></i>
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-stone-700 md:text-2xl dark:text-white">
                            Reserver une Consultation
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="#">
                            <div class="grid lg:grid-cols-2 gap-6">
                                <div>
                                    <label for="nom" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Nom</label>
                                    <input type="text" name="nom" id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" disabled>
                                </div>
                                <div>
                                    <label for="prenom" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Prenom</label>
                                    <input type="text" name="prenom" id="prenom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" disabled>
                                </div>
                            </div>
                            <div>
                                <label for="telephone" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Téléphone</label>
                                <input type="text" name="telephone" id="telephone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" disabled>
                            </div>
                            <div class="mb-5">
                                <label for="date_reservation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de Consultation</label>
                                <input type="datetime-local" id="date_reservation" name="date_reservation" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
                            </div>
                            <button type="submit" class="ml-[7rem] w-[8rem] text-white bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Confirmer</button>
                        </form>
                    </div>
                </div>
            </div>
        

        
        <section>
            <!-- Avocat Card-->
            <div class="mt-[4rem] ml-[20rem] bg-white dark:bg-gray-800 rounded-xl shadow-2xl max-w-4xl w-full p-8 transition-all duration-300 animate-fade-in pt-[3.5rem]">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 text-center mb-8 md:mb-0">
                        <img src="https://wallpapers.com/images/hd/professional-profile-pictures-1080-x-1080-460wjhrkbwdcp1ig.jpg" alt="Profile Picture" class="rounded-full w-48 h-48 mx-auto mb-4 border-4 border-yellow-500 transition-transform duration-300 hover:scale-105">
                        <h1 class="text-2xl font-bold text-yellow-500 dark:text-white mb-2">John Doe</h1>
                        <p class="text-stone-700 font-semibold">Avocat</p>
                        <button class="mt-4 font-medium text-white px-4 py-2 rounded-lg bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br transition-colors duration-300">Reserver</button>
                    </div>
                    <div class="md:w-2/3 md:pl-8">
                        <h2 class="text-xl font-semibold text-yellow-500 dark:text-white mb-4">Biographie</h2>
                        <p class="text-gray-700 dark:text-gray-300 mb-6">
                            Passionate Avocat with 5 years of experience in web technologies. 
                            I love creating user-friendly applications and solving complex problems.
                        </p>
                        
                        <h2 class="text-xl font-semibold text-yellow-500 mb-4">Contact</h2>
                        <ul class="space-y-2 text-stone-700 font-medium">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-stone-700 " viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                                john.doe@example.com
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-stone-700 " viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                +1 (555) 123-4567
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Avocat Card-->
            <div class="mt-[4rem] ml-[20rem] bg-white dark:bg-gray-800 rounded-xl shadow-2xl max-w-4xl w-full p-8 transition-all duration-300 animate-fade-in pt-[3.5rem]">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 text-center mb-8 md:mb-0">
                        <img src="https://wallpapers.com/images/hd/professional-profile-pictures-1080-x-1080-460wjhrkbwdcp1ig.jpg" alt="Profile Picture" class="rounded-full w-48 h-48 mx-auto mb-4 border-4 border-yellow-500 transition-transform duration-300 hover:scale-105">
                        <h1 class="text-2xl font-bold text-yellow-500 dark:text-white mb-2">John Doe</h1>
                        <p class="text-stone-700 font-semibold">Avocat</p>
                        <button class="mt-4 font-medium text-white px-4 py-2 rounded-lg bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br transition-colors duration-300">Reserver</button>
                    </div>
                    <div class="md:w-2/3 md:pl-8">
                        <h2 class="text-xl font-semibold text-yellow-500 dark:text-white mb-4">Biographie</h2>
                        <p class="text-gray-700 dark:text-gray-300 mb-6">
                            Passionate Avocat with 5 years of experience in web technologies. 
                            I love creating user-friendly applications and solving complex problems.
                        </p>
                        
                        <h2 class="text-xl font-semibold text-yellow-500 mb-4">Contact</h2>
                        <ul class="space-y-2 text-stone-700 font-medium">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-stone-700 " viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                                john.doe@example.com
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-stone-700 " viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                +1 (555) 123-4567
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Avocat Card-->
            <div class="mt-[4rem] ml-[20rem] bg-white dark:bg-gray-800 rounded-xl shadow-2xl max-w-4xl w-full p-8 transition-all duration-300 animate-fade-in pt-[3.5rem]">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 text-center mb-8 md:mb-0">
                        <img src="https://wallpapers.com/images/hd/professional-profile-pictures-1080-x-1080-460wjhrkbwdcp1ig.jpg" alt="Profile Picture" class="rounded-full w-48 h-48 mx-auto mb-4 border-4 border-yellow-500 transition-transform duration-300 hover:scale-105">
                        <h1 class="text-2xl font-bold text-yellow-500 dark:text-white mb-2">John Doe</h1>
                        <p class="text-stone-700 font-semibold">Avocat</p>
                        <button class="mt-4 font-medium text-white px-4 py-2 rounded-lg bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br transition-colors duration-300">Reserver</button>
                    </div>
                    <div class="md:w-2/3 md:pl-8">
                        <h2 class="text-xl font-semibold text-yellow-500 dark:text-white mb-4">Biographie</h2>
                        <p class="text-gray-700 dark:text-gray-300 mb-6">
                            Passionate Avocat with 5 years of experience in web technologies. 
                            I love creating user-friendly applications and solving complex problems.
                        </p>
                        
                        <h2 class="text-xl font-semibold text-yellow-500 mb-4">Contact</h2>
                        <ul class="space-y-2 text-stone-700 font-medium">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-stone-700 " viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                                john.doe@example.com
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-stone-700 " viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                +1 (555) 123-4567
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Avocat Card-->
            <div class="mt-[4rem] ml-[20rem] bg-white dark:bg-gray-800 rounded-xl shadow-2xl max-w-4xl w-full p-8 transition-all duration-300 animate-fade-in pt-[3.5rem]">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 text-center mb-8 md:mb-0">
                        <img src="https://wallpapers.com/images/hd/professional-profile-pictures-1080-x-1080-460wjhrkbwdcp1ig.jpg" alt="Profile Picture" class="rounded-full w-48 h-48 mx-auto mb-4 border-4 border-yellow-500 transition-transform duration-300 hover:scale-105">
                        <h1 class="text-2xl font-bold text-yellow-500 dark:text-white mb-2">John Doe</h1>
                        <p class="text-stone-700 font-semibold">Avocat</p>
                        <button class="mt-4 font-medium text-white px-4 py-2 rounded-lg bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br transition-colors duration-300">Reserver</button>
                    </div>
                    <div class="md:w-2/3 md:pl-8">
                        <h2 class="text-xl font-semibold text-yellow-500 dark:text-white mb-4">Biographie</h2>
                        <p class="text-gray-700 dark:text-gray-300 mb-6">
                            Passionate Avocat with 5 years of experience in web technologies. 
                            I love creating user-friendly applications and solving complex problems.
                        </p>
                        
                        <h2 class="text-xl font-semibold text-yellow-500 mb-4">Contact</h2>
                        <ul class="space-y-2 text-stone-700 font-medium">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-stone-700 " viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                                john.doe@example.com
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-stone-700 " viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                +1 (555) 123-4567
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Avocat Card-->
            <div class="mt-[4rem] ml-[20rem] bg-white dark:bg-gray-800 rounded-xl shadow-2xl max-w-4xl w-full p-8 transition-all duration-300 animate-fade-in pt-[3.5rem]">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 text-center mb-8 md:mb-0">
                        <img src="https://wallpapers.com/images/hd/professional-profile-pictures-1080-x-1080-460wjhrkbwdcp1ig.jpg" alt="Profile Picture" class="rounded-full w-48 h-48 mx-auto mb-4 border-4 border-yellow-500 transition-transform duration-300 hover:scale-105">
                        <h1 class="text-2xl font-bold text-yellow-500 dark:text-white mb-2">John Doe</h1>
                        <p class="text-stone-700 font-semibold">Avocat</p>
                        <button class="mt-4 font-medium text-white px-4 py-2 rounded-lg bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br transition-colors duration-300">Reserver</button>
                    </div>
                    <div class="md:w-2/3 md:pl-8">
                        <h2 class="text-xl font-semibold text-yellow-500 dark:text-white mb-4">Biographie</h2>
                        <p class="text-gray-700 dark:text-gray-300 mb-6">
                            Passionate Avocat with 5 years of experience in web technologies. 
                            I love creating user-friendly applications and solving complex problems.
                        </p>
                        
                        <h2 class="text-xl font-semibold text-yellow-500 mb-4">Contact</h2>
                        <ul class="space-y-2 text-stone-700 font-medium">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-stone-700 " viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                                john.doe@example.com
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-stone-700 " viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                +1 (555) 123-4567
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>
        
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