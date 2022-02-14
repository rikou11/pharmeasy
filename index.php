<?php
include('./validation/formValidation.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyPharm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Antic" media="all">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body style="font-family: Antic" class="scroll-smooth">

    <!-- Section 1 -->
    <?php if ($alert) {
        echo '    <div class="px-8 py-6 bg-red-400 text-white flex justify-between rounded">
       <div class="flex items-center">
           <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-6" viewBox="0 0 20 20" fill="currentColor">
               <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
           </svg>
           <p>Danger! This is an error alert—check it out!</p>
       </div>
       <button class="text-red-100 hover:text-white">
           <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
           </svg>
       </button>
   </div>';
    }  ?>


    <!-- Section 2 -->
    <section class="w-full px-3 antialiased bg-green-400 lg:px-6">
        <div class="mx-auto max-w-7xl">
            <nav class="flex items-center w-full h-24 select-none" x-data="{ showMenu: false }">
                <div class="relative flex flex-wrap items-center justify-between w-full h-24 mx-auto font-medium md:justify-center">
                    <a href="#_" class="w-1/4 py-4 pl-6 pr-4 md:pl-4 md:py-0">
                        <span class="p-1 text-5xl font-black leading-none text-white select-none"><span>EASYPHARM</span><span class="text-green-400">.</span></span>
                    </a>
                    <div class="fixed top-0 left-0 z-40 items-center hidden w-full h-full p-3 text-xl bg-gray-900 bg-opacity-50 md:text-sm lg:text-base md:w-3/4 md:bg-transparent md:p-0 md:relative md:flex" :class="{'flex': showMenu, 'hidden': !showMenu }">
                        <div class="flex-col w-full h-auto h-full overflow-hidden bg-white rounded-lg select-none md:bg-transparent md:rounded-none md:relative md:flex md:flex-row md:overflow-auto">
                            <div class="  flex flex-col items-center justify-center w-full h-full mt-12 text-center text-green-400 md:text-green-50 md:w-2/3 md:mt-0 md:flex-row md:items-center">
                                <a href="#_" class=" md:hidden  inline-block px-4 py-2 mx-2 font-medium text-left text-green-400 md:text-white md:px-0 lg:mx-3 md:text-center">Valider la commande</a>
                                <a href="#_" class=" md:hidden  text-3xl inline-block px-0 px-4 py-2 mx-2 font-medium text-left md:px-0 
                                hover:text-green-400 md:hover:text-white lg:mx-3 md:text-center"> Contactez nous
                                </a>
                                <a href="#" class=" md:hidden  inline-block px-0 px-4 py-2 mx-2 font-medium text-left md:px-0 hover:text-green-400 md:hover:text-white lg:mx-3 md:text-center"></a>

                            </div>
                            <div class="flex flex-col items-center justify-end w-full h-full pt-4 md:w-1/3 md:flex-row md:py-0">
                                <a href="#contact" class="w-full pl-6 mr-0 text-green-50 hover:text-white md:pl-0 md:mr-3 lg:mr-5 md:w-auto">Contactez nous?</a>
                                <a href="#valider" class="inline-flex items-center justify-center px-4 py-2 mr-1 text-base font-medium leading-6 text-green-400 whitespace-no-wrap transition duration-150 ease-in-out bg-white border border-transparent rounded-full hover:bg-white focus:outline-none focus:border-green-500 focus:shadow-green-NaN active:bg-green-500">Valider
                                    la commande</a>
                            </div>
                        </div>
                    </div>
                    <div @click="showMenu = !showMenu" class="absolute right-0 z-50 flex flex-col items-end w-10 h-10 p-2 mr-4 rounded-full cursor-pointer md:hidden hover:bg-gray-900 hover:bg-opacity-10" :class="{ 'text-gray-400': showMenu, 'text-gray-100': !showMenu }">
                        <svg class="w-6 h-6" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" x-cloak="">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg class="w-6 h-6" x-show="showMenu" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" x-cloak="">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </div>
                </div>
            </nav>
    </section>
    <!-- Section 1 -->
    <!-- <section class="px-2 py-32 bg-white md:px-0 bg-green-400">
                <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
                    <div class="flex flex-wrap items-center sm:-mx-3">
                        <div class="w-full md:w-1/2 md:px-3">
                            <div
                                class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                                <h1
                                    class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                                    <span class="block xl:inline">EasyPharm</span>
                                    <span class="block text-white xl:inline">Lorem, ipsum dolor.</span>
                                </h1>
                                <p class="mx-auto text-base  sm:max-w-md lg:text-xl md:max-w-3xl">Lorem ipsum dolor sit
                                    amet, consectetur adipisicing elit. Voluptatum accusamus voluptates, adipisci
                                    suscipit quidem cupiditate inventore nobis optio beatae magnam quis voluptate
                                    facilis rem, non sunt magni maxime. Totam, aliquid.</p>
                                <div class="relative flex flex-col sm:flex-row sm:space-x-4">
                                    <a href="#valider"
                                        class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-gray-400 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                                        Valider
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </a>
                                    <a href="#_"
                                        class="flex items-center px-6 py-3 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200 hover:text-gray-600">
                                        Contactez nous
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2">
                            <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                                <img src="https://cdn.devdojo.com/images/november2020/hero-image.jpeg">
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

    <section class="">

        <div class="relative flex flex-col-reverse bg-green-400 px-4 py-16 mx-auto lg:block lg:flex-col lg:py-32 xl:py-48 md:px-8 sm:max-w-xl md:max-w-full">
            <div class="z-0 flex justify-center h-full -mx-4 overflow-hidden lg:pt-24 lg:pb-16 lg:pr-8 xl:pr-0 lg:w-1/2 lg:absolute lg:justify-end lg:bottom-0 lg:left-0 lg:items-center">
                <img src="image/accueil.png" class="object-cover object-right w-full h-auto lg:w-auto lg:h-full" alt="" />
            </div>
            <div class="relative flex justify-end max-w-xl mx-auto xl:pr-32 lg:max-w-screen-xl">
                <div class="mb-16 lg:pr-5 lg:max-w-lg lg:mb-0">
                    <div class="max-w-xl mb-6">

                        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                            GESTION DE PHARMACIE<br class="hidden md:block" />


                        </h2>
                        <p class="text-base text-gray-700 md:text-lg">
                            EASYPHARM est un logiciel de gestion de pharmacie conçu en étroite collaboration avec des pharmaciens. C’est une solution complète intégrant les outils les plus performants permettant de relever les défis quotidiens de la gestion de votre pharmacie .
                        </p>

                        <div class="flex items-center mt-4">
                            <a href="#contact" type="submit" class=" text-center w-full  px-6 py-3 bg-green-600 text-white rounded-md hover:bg-green-700 hover:text-white">
                                Contactez nous
                            </a>

                        </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>

    </section>






    <!-- Section 3 -->
    <section class="w-full bg-white">

        <div class="mx-auto max-w-7xl">
            <div class="flex flex-col lg:flex-row">
                <div class="relative w-full bg-cover lg:w-6/12 xl:w-7/12 bg-gradient-to-r from-white via-white to-gray-100">
                    <div class="relative flex flex-col items-center justify-center w-full h-full px-10 my-20 lg:px-16 lg:my-0">
                        <div class="flex flex-col items-start space-y-8 tracking-tight lg:max-w-3xl">
                            <div class="relative">
                                <p class="mb-2 font-medium text-gray-700 uppercase">EASYPHARM</p>
                                <h2 class="text-5xl font-bold text-gray-900 xl:text-6xl">GESTION DE PHARMACIE
                                </h2>
                            </div>
                            <p class="text-xl text-gray-700">EASYPHARM : L'outil le plus adapté et le plus performant pour la gestion de votre officine.<br>
                                Avec sa simplicité, sa richesse en fonctionnalités et ses performances,<br> EASYPHARM s'est imposé sur le marché algérien avec plus de 1.200 pharmacies installées.
                                <br>
                                Installation, formation initiale et suivi assurés
                                <br> * Dépannage 12h/24 7j/7, maintenance et mises à jour par internet
                                <br> * Possibilité de déplacement sur tout le territoire national
                                <br> * Possibilité d'établir une facture pour le logiciel et le matériel
                                <br> * licence illimité donc pas d'abonnement annuel.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="w-full bg-white lg:w-6/12 xl:w-5/12">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="flex flex-col items-start justify-start w-full h-full p-10 lg:p-16 xl:p-24" id="valider">
                        <h4 class="w-full text-3xl font-bold">inscrivez vous au formulaire</h4>

                        <div id="responsefield" class="relative w-full mt-5 space-y-4">
                            <div class="relative">
                                <label class="font-medium text-gray-900">Nom et Prénom </label>
                                <input name="fname" value="<?php echo $fname; ?>" type="text" class="block w-full px-4  py-4 md:py-2  mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-green-400 focus:ring-opacity-50" placeholder="Entrer nom et prénom">
                                <?php echo $err_fname; ?>
                            </div>
                            <div class="relative">
                                <label class="font-medium text-gray-900">Numéro de téléphone</label>
                                <input name="tel" maxlength="10" value="<?php echo $tel; ?>" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="<?php echo $tel; ?>" class="block w-full px-4  py-4 md:py-2  mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-green-400 focus:ring-opacity-50" placeholder="Entrer numéro de téléphone">
                                <?php echo $err_tel; ?>
                            </div>
                            <div class="relative">
                                <label class="font-medium text-gray-900">Email</label>
                                <input name="email" value="<?php echo $email; ?>" type="email" class="block w-full px-4  py-4 md:py-2  mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-green-400 focus:ring-opacity-50" placeholder="Entrer email">
                                <?php echo $err_email; ?>
                            </div>
                            <div class="relative">
                                <label class="font-medium text-gray-900">Adresse</label>
                                <input name="adresse" value="<?php echo $adresse; ?>" type="text" class="block w-full px-4  py-4 md:py-2  mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-green-400 focus:ring-opacity-50" placeholder="Entrer Adresse">
                                <?php echo $err_adresse; ?>
                            </div>
                            <div class="relative">
                                <label class="font-medium text-gray-900">Exemple: serveur +5 (Optionel) </label>
                                <input name="server" value="<?php echo $server; ?>" type="text" class="block w-full px-4  py-4 md:py-2  mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-green-400 focus:ring-opacity-50" placeholder="">
                                <?php echo $err_server; ?>
                            </div>

                            <button type="submit" onclick="submitText(fullname.value,tel.value,email.value,adresse.value,server.value);" class="inline-block w-full px-5  py-4  text-lg font-medium text-center text-white transition duration-200 bg-green-400 rounded-lg hover:bg-green-500 ease">
                                Valider
                            </button>

                        </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <section>

            <div x-data="{ imgModal : false, imgModalSrc : '', imgModalDesc : '' }">
                <template @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc; imgModalDesc = $event.detail.imgModalDesc;" x-if="imgModal">
                    <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" x-on:click.away="imgModalSrc = ''" class="p-2 fixed w-full h-screen inset-0 z-50 overflow-hidden flex justify-center items-center bg-black bg-opacity-75">
                        <div @click.away="imgModal = ''" class="flex flex-col max-w-screen max-h-full overflow-auto">
                            <div class="z-50">
                                <button @click="imgModal = ''" class="float-right pt-2 pr-2 outline-none focus:outline-none">
                                    <svg class="fill-current text-white " xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2">
                                <img :alt="imgModalSrc" class="object-contain h-1/2-screen" :src="imgModalSrc">
                                <p x-text="imgModalDesc" class="text-center text-white"></p>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <div x-data="{}" class="px-5">
                <div class="flex flex-col pt-8 text-center w-full mb-20">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">photos</h1>
                    <!-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p> -->
                </div>
                <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 items-center gap-5 ">
                    <div class=" px-2">
                        <div class="rounded  ">
                            <a @click="$dispatch('img-modal', {  imgModalSrc: 'image/1.png', imgModalDesc: 'Random Image One Description' })" class="cursor-pointer">
                                <img alt="Placeholder" class="object-fit w-screen rounded-lg hover:scale-150 transition duration-200" src="image/1.png">
                            </a>
                        </div>
                    </div>

                    <div class=" px-2">
                        <div class="rounded ">
                            <a @click="$dispatch('img-modal', {  imgModalSrc: 'image/2.jpg', imgModalDesc: '' })" class="cursor-pointer">
                                <img alt="Placeholder" class="object-fit w-screen rounded-lg hover:scale-150 transition duration-200" src="image/2.jpg">
                            </a>
                        </div>
                    </div>

                    <div class=" px-2">
                        <div class="rounded ">
                            <a @click="$dispatch('img-modal', {  imgModalSrc: 'image/3.jpg', imgModalDesc: '' })" class="cursor-pointer">
                                <img alt="Placeholder" class="object-fit w-screen rounded-lg hover:scale-150 transition duration-200 " src="image/3.jpg">
                            </a>
                        </div>
                    </div>
                    <div class=" px-2">
                        <div class="rounded ">
                            <a @click="$dispatch('img-modal', {  imgModalSrc: 'image/4.jpg', imgModalDesc: '' })" class="cursor-pointer">
                                <img alt="Placeholder" class="object-fit w-screen rounded-lg hover:scale-150 transition duration-200" src="image/4.jpg">
                            </a>
                        </div>
                    </div>
                    <div class=" px-2">
                        <div class="rounded ">
                            <a @click="$dispatch('img-modal', {  imgModalSrc: 'image/5.png', imgModalDesc: 'This one has description' })" class="cursor-pointer">
                                <img alt="Placeholder" class="object-fit w-screen rounded-lg hover:scale-150 transition duration-200" src="image/5.png">
                            </a>
                        </div>
                    </div>
                    <div class=" px-2">
                        <div class="rounded ">
                            <a @click="$dispatch('img-modal', {  imgModalSrc: 'image/6.jpg', imgModalDesc: '' })" class="cursor-pointer">
                                <img alt="Placeholder" class="object-fit w-screen rounded-lg hover:scale-150 transition duration-200" src="image/6.jpg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="bg-white py-6 sm:py-8 lg:py-12">
                <div class="max-w-screen-xl px-4 md:px-8 mx-auto">
                    <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-8 md:mb-12">What others say about us</h2>

                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-y-10 sm:gap-y-12 lg:divide-x">
                        <!-- quote - start -->
                        <div class="flex flex-col items-center gap-4 md:gap-6 sm:px-4 lg:px-8">
                            <div class="text-gray-600 text-center">“This is a section of some simple filler text, also known as placeholder text.”</div>

                            <div class="flex flex-col sm:flex-row items-center gap-2 md:gap-3">
                                <div class="w-12 md:w-14 h-12 md:h-14 bg-gray-100 rounded-full overflow-hidden shadow-lg">
                                    <img src="https://images.unsplash.com/photo-1567515004624-219c11d31f2e??auto=format&q=75&fit=crop&w=112" loading="lazy" alt="Photo by Radu Florin" class="w-full h-full object-cover object-center" />
                                </div>

                                <div>
                                    <div class="text-indigo-500 text-sm md:text-base font-bold text-center sm:text-left">fares</div>
                                    <p class="text-gray-500 text-sm md:text-sm text-center sm:text-left">CEO / Datadrift</p>
                                </div>
                            </div>
                        </div>
                        <!-- quote - end -->

                        <!-- quote - start -->
                        <div class="flex flex-col items-center gap-4 md:gap-6 sm:px-4 lg:px-8">
                            <div class="text-gray-600 text-center">“This is a section of some simple filler text, also known as placeholder text.”</div>

                            <div class="flex flex-col sm:flex-row items-center gap-2 md:gap-3">
                                <div class="w-12 md:w-14 h-12 md:h-14 bg-gray-100 rounded-full overflow-hidden shadow-lg">
                                    <img src="https://images.unsplash.com/photo-1532073150508-0c1df022bdd1?auto=format&q=75&fit=crop&w=112" loading="lazy" alt="Photo by christian ferrer" class="w-full h-full object-cover object-center" />
                                </div>

                                <div>
                                    <div class="text-indigo-500 text-sm md:text-base font-bold text-center sm:text-left">fares</div>
                                    <p class="text-gray-500 text-sm md:text-sm text-center sm:text-left">CFO / Dashdash</p>
                                </div>
                            </div>
                        </div>
                        <!-- quote - end -->

                        <!-- quote - start -->
                        <div class="flex flex-col items-center gap-4 md:gap-6 sm:px-4 lg:px-8">
                            <div class="text-gray-600 text-center">“This is a section of some simple filler text, also known as placeholder text.”</div>

                            <div class="flex flex-col sm:flex-row items-center gap-2 md:gap-3">
                                <div class="w-12 md:w-14 h-12 md:h-14 bg-gray-100 rounded-full overflow-hidden shadow-lg">
                                    <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?auto=format&q=75&fit=crop&w=500" loading="lazy" alt="Photo by Ayo Ogunseinde" class="w-full h-full object-cover object-center" />
                                </div>

                                <div>
                                    <div class="text-indigo-500 text-sm md:text-base font-bold text-center sm:text-left">fares</div>
                                    <p class="text-gray-500 text-sm md:text-sm text-center sm:text-left">CTO / Uptime</p>
                                </div>
                            </div>
                        </div>
                        <!-- quote - end -->
                    </div>
                </div>
            </div>
        </section>

        <!-- message -->

        <section class="text-gray-600 body-font relative" id="contact">
            <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
                <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                    <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1610.5268456255167!2d6.165569190826776!3d36.16524806396795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f3c3c39eaae08f%3A0x3736dad6f371be18!2sChelghoum%20Laid%2C%20Chelghoum%20La%C3%AFd!5e0!3m2!1sen!2sdz!4v1644422777505!5m2!1sen!2sdz" style="filter: contrast(2) opacity(0.4);"></iframe>
                    <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                        <div class="lg:w-1/2 px-6">
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                            <p class="mt-1">Mila-Chelghoum Laïd-Cité Didouch Mourad N°09</p>
                        </div>
                        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                            <a class="text-blue-500 leading-relaxed">contact@infodz.net</a>
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">Téléphone</h2>
                            <p class="leading-relaxed">077-060-1199</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                    <h2 class="text-gray-900 text-5xl mb-1 font-bold title-font">Feedback</h2>
                    <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p>

                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="emailcontact" class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-green-400 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                        <textarea id="message" name="messagecontact" class="w-full bg-white rounded border border-gray-300 focus:border-green-400 focus:ring-2 focus:ring-blue-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                    <a href="continue/continuemessage.php" class="text-white text-center bg-green-400 border-0 py-2 px-6 focus:outline-none  hover:bg-green-600 rounded text-lg">Envoyer</a>
                    <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
                </div>
            </div>
        </section>



        <!-- footer -->
        <div class="relative mt-16 bg-green-400">
            <svg class="absolute top-0 w-full h-6 -mt-5 sm:-mt-10 sm:h-16 text-green-400" preserveAspectRatio="none" viewBox="0 0 1440 54">
                <path fill="currentColor" d="M0 22L120 16.7C240 11 480 1.00001 720 0.700012C960 1.00001 1200 11 1320 16.7L1440 22V54H1320C1200 54 960 54 720 54C480 54 240 54 120 54H0V22Z"></path>
            </svg>
            <section class="text-white bg-green-400 body-font">
                <div class="container flex flex-col items-center px-8 py-8 mx-auto max-w-7xl sm:flex-row">
                    <a href="#_" class="text-xl font-black leading-none text-white select-none logo">EasyPharm<span class="text-indigo-600">.</span></a>
                    <p class="mt-4 text-sm text-white sm:ml-4 sm:pl-4 sm:border-l sm:border-gray-200 sm:mt-0">© 2022 InfoDz

                    </p>
                    <span class="inline-flex justify-center mt-4 space-x-5 sm:ml-auto sm:mt-0 sm:justify-start">
                        <a href="#" class="text-white hover:text-gray-500">
                            <span class="sr-only">Facebook</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                            </svg>
                        </a>




                    </span>
                </div>
            </section>
        </div>
        <!-- Section 4 -->


        <!-- AlpineJS Library -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>

        <!-- script  -->
        <script>
            $(document).ready(function() {
                // Add smooth scrolling to all links
                $("a").on('click', function(event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 500, function() {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });
            });
        </script>

</body>

</html>