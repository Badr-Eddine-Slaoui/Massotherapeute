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
        <header class="h-[15vh] bg-white flex items-center justify-between px-20 py-10 fixed top-0 left-0 z-[2] shadow-center-gray xs:px-4 sm:px-12 md:px-16">
            <div class="w-1/3">
                <a href="{{ route('home') }}"><img class="w-full" src="{{ asset('Images/Logo.png') }}" alt="Logo"></a>
            </div>
            <nav class="w-2/5 xs:w-7/12 sm:w-3/6 md:w-7/12 lg:w-6/12 xl:w-5/12">
                <ul class="ms-auto flex justify-between items-center">
                    <li class="text-[18px] font-semibold uppercase transition-all duration-500 text-[#026e9f] hover:text-[#03a9f4] after:block after:w-0 after:h-1 after:bg-[#03a9f4] after:transition-all after:duration-200 hover:after:w-full xs:text-[7px] xs:after:h-[2px] sm:text-[11px] sm:after:h-[3px] md:text-[14px] md:after:h-1 lg:text-[16px]"><a class="text-decoration-none" href="{{ route('home') }}">Accueil</a></li>
                    <li class="text-[18px] font-semibold uppercase transition-all duration-500 text-[#026e9f] hover:text-[#03a9f4] after:block after:w-0 after:h-1 after:bg-[#03a9f4] after:transition-all after:duration-200 hover:after:w-full xs:text-[7px] xs:after:h-[2px] sm:text-[11px] sm:after:h-[3px] md:text-[14px] md:after:h-1 lg:text-[16px]"><a class="text-decoration-none" href="{{ route('apropos') }}">A propos</a></li>
                    <li class="text-[18px] font-semibold uppercase text-[#03a9f4] after:block after:w-full after:h-1 after:bg-[#03a9f4] xs:text-[7px] xs:after:h-[2px] sm:text-[11px] sm:after:h-[3px] md:text-[14px] md:after:h-1 lg:text-[16px]"><a class="text-decoration-none" href="{{ route('soins') }}">Soins</a></li>
                    <li class="text-[18px] font-semibold uppercase transition-all duration-500 text-[#026e9f] hover:text-[#03a9f4] after:block after:w-0 after:h-1 after:bg-[#03a9f4] after:transition-all after:duration-200 hover:after:w-full xs:text-[7px] xs:after:h-[2px] sm:text-[11px] sm:after:h-[3px] md:text-[14px] md:after:h-1 lg:text-[16px]"><a class="text-decoration-none" href="{{ route('contact') }}">Contactez-nous</a></li>
                </ul>
            </nav>
        </header>
        <section class="w-full pt-1 mt-[15vh] pb-20 xs:pb-5 xs:min-h-[50vh]">
            <div class="w-5/6 mx-auto">
                <h1 class="font-[300] text-6xl mt-10 mb-28 xs:text-xs xs:mb-14 md:text-2xl lg:text-3xl">Soins</h1>
                <div id="massage-thérapeutique" class="w-full grid grid-rows-1 grid-cols-2 my-10 gap-y-32 gap-x-8 xs:flex xs:flex-col-reverse xs:gap-y-5 sm:grid sm:grid-cols-2">
                    <div>
                        <p class="text-4xl font-[300] mb-5 xs:text-xs sm:text-xl md:text-xl xs:mb-2">Le massage thérapeutique</p>
                        <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">Le massage thérapeutique est un ensemble de techniques manuelles réalisées sur le corps à but curatif. Le massothérapeute dispose de plusieurs techniques de base qui sont l’effleurage, le pétrissage, les pressions, les percussions, les frictions… qui agissent à différentes profondeurs sur différents tissus (muscles, tendons, ligaments, fascias…). Mais toutes ces manoeuvres ont un effet sur les fascias, qui sont présents à tous les niveaux de profondeur du corps.</p>
                        <button class="text-white bg-[#03a9f4] px-8 py-4 block m-auto mt-[15%] hover:bg-cyan-700 xs:text-[10px] sm:text-[11px] xs:px-5 xs:py-2 xs:mt-[10%] md:text-[14px] lg:text-[16px]"><a class="text-decoration-none" href="{{ route('contact') }}">Contactez-nous</a></button>
                    </div>
                    <div class="flex items-center">
                        <img class="shadow-center-gray" src="{{ asset('Images/Soins1.jpg') }}" alt="Apropos1">
                    </div>
                </div>
            </div>
        </section>
        <section id="massage-relaxant" class="w-full pt-1 bg-[#f5fafd] pb-20 xs:pb-5 xs:min-h-[50vh]">
            <div class="w-5/6 mx-auto">
                <div class="w-full grid grid-rows-1 grid-cols-2 my-32 gap-x-8 xs:grid-cols-1 xs:gap-y-5 sm:grid-cols-2">
                    <div class="flex items-center">
                        <img class="shadow-center-gray" src="{{ asset('Images/Soins2.jpg') }}" alt="Apropos1">
                    </div>
                    <div>
                        <p class="text-4xl font-[300] mb-5 xs:text-xs sm:text-xl md:text-xl">Massage relaxant</p>
                        <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">Le massage relaxant utilise une grande partie des techniques manuelles de massage. Cela implique l’effleurage, le palper rouler, le pétrissage et la pression glissée.


                            Toutes ces manipulations sont utilisées de manière efficace et harmonieuse en fonction des besoins respectifs de votre corps. Muscles, ligaments, tendons, mais aussi articulations bénéficient des bienfaits du massage classique.


                            Le massage relaxant permet à votre corps d’oxygéner les tissus, de supprimer les douleurs articulaires et musculaires, et même de favoriser et améliorer la circulation du sang. Le massage classique offre à votre corps une profonde détente, la relaxation complète ainsi que le bien-être.</p>
                        <button class="text-white bg-[#03a9f4] px-8 py-4 block m-auto mt-[15%] hover:bg-cyan-700 xs:text-[10px] sm:text-[11px] xs:px-5 xs:py-2 xs:mt-[10%] md:text-[14px] lg:text-[16px]"><a class="text-decoration-none" href="{{ route('contact') }}">Contactez-nous</a></button>
                    </div>
                </div>
            </div>
        </section>
        <section id="massage-sportif" class="w-full pt-1 pb-20 xs:pb-5 xs:min-h-[50vh]">
            <div class="w-5/6 mx-auto">
                <div id="massage-thérapeutique" class="w-full grid grid-rows-1 grid-cols-2 my-10 gap-y-32 gap-x-8 xs:flex xs:flex-col-reverse xs:gap-y-5 sm:grid sm:grid-cols-2">
                    <div>
                        <p class="text-4xl font-[300] mb-5 xs:text-xs sm:text-xl md:text-xl xs:mb-2">Le massage thérapeutique</p>
                        <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">Le massage thérapeutique est un ensemble de techniques manuelles réalisées sur le corps à but curatif. Le massothérapeute dispose de plusieurs techniques de base qui sont l’effleurage, le pétrissage, les pressions, les percussions, les frictions… qui agissent à différentes profondeurs sur différents tissus (muscles, tendons, ligaments, fascias…). Mais toutes ces manoeuvres ont un effet sur les fascias, qui sont présents à tous les niveaux de profondeur du corps.</p>
                        <button class="text-white bg-[#03a9f4] px-8 py-4 block m-auto mt-[15%] hover:bg-cyan-700 xs:text-[10px] sm:text-[11px] xs:px-5 xs:py-2 xs:mt-[10%] md:text-[14px] lg:text-[16px]"><a class="text-decoration-none" href="{{ route('contact') }}">Contactez-nous</a></button>
                    </div>
                    <div class="flex items-center">
                        <img class="shadow-center-gray" src="{{ asset('Images/Soins1.jpg') }}" alt="Apropos1">
                    </div>
                </div>
            </div>
        </section>
        <section id="electrostimulation" class="w-full pt-1 bg-[#f5fafd] pb-20 xs:pb-5 xs:min-h-[50vh]">
            <div class="w-5/6 mx-auto">
                <div class="w-full grid grid-rows-1 grid-cols-2 my-32 gap-x-8 xs:grid-cols-1 xs:gap-y-5 sm:grid-cols-2">
                    <div class="flex items-center">
                        <img class="shadow-center-gray" src="{{ asset('Images/Soins4.jpg') }}" alt="Apropos1">
                    </div>
                    <div>
                        <p class="text-4xl font-[300] mb-5 xs:text-xs sm:text-xl md:text-xl">Électrostimulation</p>
                        <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">L’électrostimulation, NMES, est destiné à transformer vos entraînements en une véritable expérience. Les abréviations signifient Neuromuscular Electrical Stimulation qui est la livraison d’un courant électrique via les nerfs moteurs d’un muscle pour stimuler l’activation musculaire afin de créer une contraction musculaire. Avec cette méthode, nous contournons essentiellement le cerveau afin de créer une contraction musculaire via le nerf moteur et sans avoir besoin de pensée consciente.

                            La recherche montre que même les personnes très mobiles, sportives et en forme ne tirent pas vraiment le meilleur parti de leurs muscles. Avec les programmes NMES, nous pouvons recruter plus de fibres musculaires en utilisant la stimulation électrique couplée à une séance d’entraînement, qu’avec une séance d’entraînement seule. Cela signifie pratiquement que nous pouvons nous entraîner, mieux, plus dur, et obtenir le maximum de résultats, tout en restant toujours du côté de la sécurité ! L’électrostimulation dans le cadre d’un soin, vous apportera des effets de relaxation musculaire, antidouleurs, capillarisation/vascularisation, soit une excellente contribution à votre récupération.</p>
                        <button class="text-white bg-[#03a9f4] px-8 py-4 block m-auto mt-[15%] hover:bg-cyan-700 xs:text-[10px] sm:text-[11px] xs:px-5 xs:py-2 xs:mt-[10%] md:text-[14px] lg:text-[16px]"><a class="text-decoration-none" href="{{ route('contact') }}">Contactez-nous</a></button>
                    </div>
                </div>
            </div>
        </section>
        <section id="ventouses" class="w-full pt-1 pb-20 xs:pb-5 xs:min-h-[50vh]">
            <div class="w-5/6 mx-auto">
                <div id="massage-thérapeutique" class="w-full grid grid-rows-1 grid-cols-2 my-10 gap-y-32 gap-x-8 xs:flex xs:flex-col-reverse xs:gap-y-5 sm:grid sm:grid-cols-2">
                    <div>
                        <p class="text-4xl font-[300] mb-5 xs:text-xs sm:text-xl md:text-xl xs:mb-2">Le massage thérapeutique</p>
                        <p class="text-[16px] text-[#477180] leading-[1.6] xs:text-[10px] sm:text-[11px] md:text-[14px] lg:text-[16px]">Le massage thérapeutique est un ensemble de techniques manuelles réalisées sur le corps à but curatif. Le massothérapeute dispose de plusieurs techniques de base qui sont l’effleurage, le pétrissage, les pressions, les percussions, les frictions… qui agissent à différentes profondeurs sur différents tissus (muscles, tendons, ligaments, fascias…). Mais toutes ces manoeuvres ont un effet sur les fascias, qui sont présents à tous les niveaux de profondeur du corps.</p>
                        <button class="text-white bg-[#03a9f4] px-8 py-4 block m-auto mt-[15%] hover:bg-cyan-700 xs:text-[10px] sm:text-[11px] xs:px-5 xs:py-2 xs:mt-[10%] md:text-[14px] lg:text-[16px]"><a class="text-decoration-none" href="{{ route('contact') }}">Contactez-nous</a></button>
                    </div>
                    <div class="flex items-center">
                        <img class="shadow-center-gray" src="{{ asset('Images/Soins1.jpg') }}" alt="Apropos1">
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full min-h-screen mx-auto flex justify-center items-center py-5 bg-[#0d678f]">
            <div class="w-11/12 grid grid-rows-1 grid-cols-2 xs:grid-cols-1 sm:grid-cols-2 md:grid-cols-2">
                <div class="w-full bg-white flex xs:block sm:flex md:flex">
                    <div class="w-2/6 bg-[#03a9f4] flex justify-center items-center xs:w-full xs:pt-5 sm:w-2/6 sm:pt-0 md:w-2/6 md:w-pt-0">
                        <div class="text-white text-center">
                            <p class="text-[20px] uppercase font-semibold xs:text-[10px] sm:text-[11px] md:text-[13px] lg:text-[18px]">Contact direct</p>
                            <i class="text-[26px] w-[8vh] h-[8vh] border-2 rounded-full fa-regular fa-envelope flex justify-center items-center m-auto my-5 xs:text-[10px] xs:border xs:w-[4vh] xs:h-[4vh] sm:text-[11px] sm:border sm:w-[4vh] sm:h-[4vh] md:text-[14px] md:border-2 md:w-[5vh] md:h-[5vh] lg:text-[24px] lg:w-[7vh] lg:h-[7vh]"></i>
                            <p class="text-[20px] font-semibold xs:text-[10px] sm:text-[11px] md:text-[13px] lg:text-[18px]">Je suis à votre disposition</p>
                            <div class="grid grid-rows-1 grid-cols-3">
                                <i class="text-[26px] w-[8vh] h-[8vh] border-2 rounded-full fa-brands fa-linkedin flex justify-center items-center m-auto my-5 xs:text-[10px] xs:border xs:w-[4vh] xs:h-[4vh] sm:text-[11px] sm:border sm:w-[4vh] sm:h-[4vh] md:text-[14px] md:border-2 md:w-[5vh] md:h-[5vh] lg:text-[24px] lg:w-[7vh] lg:h-[7vh]"></i>
                                <i class="text-[26px] w-[8vh] h-[8vh] border-2 rounded-full fa-brands fa-instagram flex justify-center items-center m-auto my-5 xs:text-[10px] xs:border xs:w-[4vh] xs:h-[4vh] sm:text-[11px] sm:border sm:w-[4vh] sm:h-[4vh] md:text-[14px] md:border-2 md:w-[5vh] md:h-[5vh] lg:text-[24px] lg:w-[7vh] lg:h-[7vh]"></i>
                                <i class="text-[26px] w-[8vh] h-[8vh] border-2 rounded-full fa-brands fa-facebook flex justify-center items-center m-auto my-5 xs:text-[10px] xs:border xs:w-[4vh] xs:h-[4vh] sm:text-[11px] sm:border sm:w-[4vh] sm:h-[4vh] md:text-[14px] md:border-2 md:w-[5vh] md:h-[5vh] lg:text-[24px] lg:w-[7vh] lg:h-[7vh]"></i>
                            </div>
                        </div>
                    </div>
                    <form class="w-4/6 grid grid-cols-1 grid-rows-1 gap-10 p-10 xs:w-full sm:w-4/6 sm:p-2 md:w-4/6 md:p-5" action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[18px] font-semibold xs:text-[10px] sm:text-[11px] md:text-[13px] lg:text-[16px]" for="nom">Nom <span class=" text-red-600">*</span></label>
                            <input class="text-black border-b border-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 xs:text-[10px] sm:text-[10px] md:text-[12px] lg:text-[16px]" placeholder="Par exemple : Jean" id="nom" name="nom" type="text" value="{{ old('nom') }}">
                            @error('nom')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[18px] font-semibold xs:text-[10px] sm:text-[11px] md:text-[13px] lg:text-[16px]" for="email">Adresse de messagerie  <span class=" text-red-600">*</span></label>
                            <input class="text-black border-b border-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 xs:text-[10px] sm:text-[10px] md:text-[12px] lg:text-[16px]" placeholder="Par exemple : jacques@martin.com" id="email" name="email" type="email" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[18px] font-semibold xs:text-[10px] sm:text-[11px] md:text-[13px] lg:text-[16px]" for="tele">Numéro de téléphone <span class=" text-red-600">*</span></label>
                            <input class="text-black border-b border-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 xs:text-[10px] sm:text-[10px] md:text-[12px] lg:text-[16px]" placeholder="Par exemple : +1 02 03 04 05" id="tele" name="tele" type="tel" value="{{ old('tele') }}">
                            @error('email')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-1">
                            <label class="text-[18px] font-semibold mb-4 xs:text-[10px] sm:text-[11px] md:text-[13px] lg:text-[16px]" for="message">Message <span class=" text-red-600">*</span></label>
                            <textarea class="text-black border-b border-black focus:outline-0 px-4 py-1 resize-none xs:text-[10px] sm:text-[10px] md:text-[12px] lg:text-[16px]" name="message" id="message" cols="30" rows="5" maxlength="180" placeholder="Saisissez votre message…">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                        <input class="text-white uppercase bg-[#03a9f4] px-8 py-4 block m-auto cursor-pointer hover:bg-cyan-700 xs:text-[10px] xs:px-5 xs:py-2 sm:text-[10px] sm:px-4 sm:py-2 md:text-[12px] md:px-5 md:py-2" type="submit" value="Envoyer le message">
                    </form>
                </div>
                <div>
                    <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5963.2699960497375!2d-9.236240317659657!3d32.299677851376316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sma!4v1731345640387!5m2!1sen!2sma"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        @if (session()->has('success'))
            <div id="alert" class="w-1/4 h-[8vh] items-center z-20 fixed right-10 bottom-8 bg-green-600 text-white font-bold rounded-md xs:w-1/2 xs:right-3 xs:h-[7vh] sm:w-2/5 sm:right-5 md:w-2/5 md:right-8 lg:w-1/4">
                <p class="ms-5">{{ session('success') }}</p>
                <div class="alert-time-bar w-full bg-white opacity-50 h-2 absolute bottom-0 rounded-bl-3xl xs:h-1"></div>
            </div>
        @endif
    </body>
</html>
