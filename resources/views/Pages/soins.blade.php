<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Soins</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        <header class="h-[15vh] bg-white flex items-center justify-between px-20 py-10 fixed top-0 left-0 z-[2] shadow-center-gray">
            <div class="w-1/3">
                <a href="{{ route('home') }}"><img class="w-full" src="{{ asset('Images/Logo.png') }}" alt="Logo"></a>
            </div>
            <nav class="w-2/5">
                <ul class="ms-auto flex justify-between items-center">
                    <li class="text-[18px] font-semibold uppercase transition-all duration-500 text-[#026e9f] hover:text-[#03a9f4] after:block after:w-0 after:h-1 after:bg-[#03a9f4] after:transition-all after:duration-200 hover:after:w-full"><a class="text-decoration-none" href="{{ route('home') }}">Accueil</a></li>
                    <li class="text-[18px] font-semibold uppercase transition-all duration-500 text-[#026e9f] hover:text-[#03a9f4] after:block after:w-0 after:h-1 after:bg-[#03a9f4] after:transition-all after:duration-200 hover:after:w-full"><a class="text-decoration-none" href="{{ route('apropos') }}">A propos</a></li>
                    <li class="text-[18px] font-semibold uppercase text-[#03a9f4] after:block after:w-full after:h-1 after:bg-[#03a9f4]"><a class="text-decoration-none" href="{{ route('soins') }}">Soins</a></li>
                    <li class="text-[18px] font-semibold uppercase transition-all duration-500 text-[#026e9f] hover:text-[#03a9f4] after:block after:w-0 after:h-1 after:bg-[#03a9f4] after:transition-all after:duration-200 hover:after:w-full"><a class="text-decoration-none" href="{{ route('rendezVous') }}">Rendez-vous</a></li>
                </ul>
            </nav>
        </header>
        <section class="w-full pt-1 mt-[15vh] min-h-[150vh pb-20">
            <div class="w-5/6 mx-auto">
                <h1 class="font-[300] text-6xl mt-10 mb-28">Soins</h1>
                <div class="w-full grid grid-rows-1 grid-cols-2 my-10 gap-y-32 gap-x-8">
                    <div>
                        <p class=" text-4xl font-[300] mb-5">Le massage thérapeutique</p>
                        <p class="text-[16px] text-[#477180] leading-[1.6]">Le massage thérapeutique est un ensemble de techniques manuelles réalisées sur le corps à but curatif. Le massothérapeute dispose de plusieurs techniques de base qui sont l’effleurage, le pétrissage, les pressions, les percussions, les frictions… qui agissent à différentes profondeurs sur différents tissus (muscles, tendons, ligaments, fascias…). Mais toutes ces manoeuvres ont un effet sur les fascias, qui sont présents à tous les niveaux de profondeur du corps.</p>
                        <button class="text-white bg-[#03a9f4] px-8 py-4 block m-auto mt-[15%]">Rendez-vous</button>
                    </div>
                    <div class="flex items-center">
                        <img class="shadow-center-gray" src="{{ asset('Images/Soins1.jpg') }}" alt="Apropos1">
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full pt-1 mt-[15vh] min-h-[150vh bg-[#f5fafd] pb-20">
            <div class="w-5/6 mx-auto">
                <div class="w-full grid grid-rows-1 grid-cols-2 my-32 gap-x-8">
                    <div class="flex items-center">
                        <img class="shadow-center-gray" src="{{ asset('Images/Soins2.jpg') }}" alt="Apropos1">
                    </div>
                    <div>
                        <p class=" text-4xl font-[300] mb-5">Massage relaxant</p>
                        <p class="text-[16px] text-[#477180] leading-[1.6]">Le massage relaxant utilise une grande partie des techniques manuelles de massage. Cela implique l’effleurage, le palper rouler, le pétrissage et la pression glissée.


                            Toutes ces manipulations sont utilisées de manière efficace et harmonieuse en fonction des besoins respectifs de votre corps. Muscles, ligaments, tendons, mais aussi articulations bénéficient des bienfaits du massage classique.


                            Le massage relaxant permet à votre corps d’oxygéner les tissus, de supprimer les douleurs articulaires et musculaires, et même de favoriser et améliorer la circulation du sang. Le massage classique offre à votre corps une profonde détente, la relaxation complète ainsi que le bien-être.</p>
                        <button class="text-white bg-[#03a9f4] px-8 py-4 block m-auto mt-[15%]">Rendez-vous</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full pt-1 mt-[15vh] min-h-[150vh pb-20">
            <div class="w-5/6 mx-auto">
                <div class="w-full grid grid-rows-1 grid-cols-2 my-32 gap-x-8">
                    <div>
                        <p class=" text-4xl font-[300] mb-5">Massage sportif</p>
                        <p class="text-[16px] text-[#477180] leading-[1.6]">Le massage sportif s’adresse naturellement aux sportifs, mais pas uniquement aux athlètes professionnels ; Quiconque pratique une activité physique sur une base régulière peut en bénéficier.

                            Utilisé autant en préparation à l’entraînement, qu’à la récupération, le massage sportif est l’allié idéal pour apaiser le corps à qui l’on demande beaucoup. Il vise à préserver la mobilité et la flexibilité des articulations ainsi qu’à soulager les douleurs musculo-articulaires liées à l’entraînement.</p>
                        <button class="text-white bg-[#03a9f4] px-8 py-4 block m-auto mt-[15%]">Rendez-vous</button>
                    </div>
                    <div class="flex items-center">
                        <img class="shadow-center-gray" src="{{ asset('Images/Soins3.jpeg') }}" alt="Apropos1">
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full pt-1 mt-[15vh] min-h-[150vh bg-[#f5fafd] pb-20">
            <div class="w-5/6 mx-auto">
                <div class="w-full grid grid-rows-1 grid-cols-2 my-32 gap-x-8">
                    <div class="flex items-center">
                        <img class="shadow-center-gray" src="{{ asset('Images/Soins4.jpg') }}" alt="Apropos1">
                    </div>
                    <div>
                        <p class=" text-4xl font-[300] mb-5">Électrostimulation</p>
                        <p class="text-[16px] text-[#477180] leading-[1.6]">L’électrostimulation, NMES, est destiné à transformer vos entraînements en une véritable expérience. Les abréviations signifient Neuromuscular Electrical Stimulation qui est la livraison d’un courant électrique via les nerfs moteurs d’un muscle pour stimuler l’activation musculaire afin de créer une contraction musculaire. Avec cette méthode, nous contournons essentiellement le cerveau afin de créer une contraction musculaire via le nerf moteur et sans avoir besoin de pensée consciente.

                            La recherche montre que même les personnes très mobiles, sportives et en forme ne tirent pas vraiment le meilleur parti de leurs muscles. Avec les programmes NMES, nous pouvons recruter plus de fibres musculaires en utilisant la stimulation électrique couplée à une séance d’entraînement, qu’avec une séance d’entraînement seule. Cela signifie pratiquement que nous pouvons nous entraîner, mieux, plus dur, et obtenir le maximum de résultats, tout en restant toujours du côté de la sécurité ! L’électrostimulation dans le cadre d’un soin, vous apportera des effets de relaxation musculaire, antidouleurs, capillarisation/vascularisation, soit une excellente contribution à votre récupération.</p>
                        <button class="text-white bg-[#03a9f4] px-8 py-4 block m-auto mt-[15%]">Rendez-vous</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full pt-1 mt-[15vh] min-h-[150vh pb-20">
            <div class="w-5/6 mx-auto">
                <div class="w-full grid grid-rows-1 grid-cols-2 my-32 gap-x-8">
                    <div>
                        <p class=" text-4xl font-[300] mb-5">Les ventouses</p>
                        <p class="text-[16px] text-[#477180] leading-[1.6]">La thérapie par ventouses est particulièrement prisée pour ses capacités de drainer les toxines, d’éliminer les blocages, de stimuler la récupération des muscles et de diminuer la douleur. Il est intéressant de recourir à cette technique dans les cas suivants :</p>
                        <ul>
                            <li class="text-[16px] text-[#477180] leading-[1.6]">Sciatique</li>
                            <li class="text-[16px] text-[#477180] leading-[1.6]">Tendinites</li>
                            <li class="text-[16px] text-[#477180] leading-[1.6]">Douleurs articulaires et dorsales</li>
                            <li class="text-[16px] text-[#477180] leading-[1.6]">Maux de tête causés par une nuque raide</li>
                            <li class="text-[16px] text-[#477180] leading-[1.6]">Troubles digestifs</li>
                            <li class="text-[16px] text-[#477180] leading-[1.6]">Cellulite</li>
                            <li class="text-[16px] text-[#477180] leading-[1.6]">Crampes</li>
                            <li class="text-[16px] text-[#477180] leading-[1.6]">Stress</li>
                            <li class="text-[16px] text-[#477180] leading-[1.6]">Récupération des muscles après sport</li>
                        </ul>
                        <button class="text-white bg-[#03a9f4] px-8 py-4 block m-auto mt-[15%]">Rendez-vous</button>
                    </div>
                    <div class="flex items-center">
                        <img class="shadow-center-gray" src="{{ asset('Images/Soins5.jpg') }}" alt="Apropos1">
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full min-h-screen mx-auto flex justify-center items-center py-5 bg-[#0d678f]">
            <div class="w-11/12 grid grid-rows-1 grid-cols-2">
                <div class="w-full bg-white flex">
                    <div class="w-2/6 bg-[#03a9f4] flex justify-center items-center">
                        <div class="text-white text-center">
                            <p class="text-[20px] uppercase font-semibold">Contact direct</p>
                            <i class="text-[26px] w-[8vh] h-[8vh] border-2 rounded-full fa-regular fa-envelope flex justify-center items-center m-auto my-5"></i>
                            <p class="text-[20px] font-semibold">Je suis à votre disposition</p>
                            <div class="grid grid-rows-1 grid-cols-3">
                                <i class="text-[26px] w-[8vh] h-[8vh] border-2 rounded-full fa-brands fa-linkedin flex justify-center items-center m-auto my-5"></i>
                                <i class="text-[26px] w-[8vh] h-[8vh] border-2 rounded-full fa-brands fa-instagram flex justify-center items-center m-auto my-5"></i>
                                <i class="text-[26px] w-[8vh] h-[8vh] border-2 rounded-full fa-brands fa-facebook flex justify-center items-center m-auto my-5"></i>
                            </div>
                        </div>
                    </div>
                    <div class="w-4/6 grid grid-cols-1 grid-rows-1 gap-10 p-10">
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[18px] font-semibold" for="nom_complet">Nom <span class=" text-red-600">*</span></label>
                            <input class="text-black border-b border-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1" placeholder="Par exemple : Jean" id="nom_complet" name="nom_complet" type="text" value="{{ old('nom_complet') }}">
                            @error('nom_complet')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[18px] font-semibold" for="email">Adresse de messagerie  <span class=" text-red-600">*</span></label>
                            <input class="text-black border-b border-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1" placeholder="Par exemple : jacques@martin.com" id="email" name="email" type="email" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[18px] font-semibold" for="tele">Numéro de téléphone <span class=" text-red-600">*</span></label>
                            <input class="text-black border-b border-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1" placeholder="Par exemple : +1 02 03 04 05" id="tele" name="tele" type="tel" value="{{ old('tele') }}">
                            @error('email')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-1">
                            <label class="text-[18px] font-semibold mb-4" for="message">Message <span class=" text-red-600">*</span></label>
                            <textarea class="text-black border-b border-black focus:outline-0 px-4 py-1 resize-none" name="message" id="message" cols="30" rows="5" maxlength="180" placeholder="Saisissez votre message…">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5963.2699960497375!2d-9.236240317659657!3d32.299677851376316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sma!4v1731345640387!5m2!1sen!2sma"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </body>
</html>
