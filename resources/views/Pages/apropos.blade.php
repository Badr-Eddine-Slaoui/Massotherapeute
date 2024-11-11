<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>A propos</title>

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
                    <li class="text-[18px] font-semibold uppercase text-[#03a9f4] after:block after:w-full after:h-1 after:bg-[#03a9f4]"><a class="text-decoration-none" href="{{ route('apropos') }}">A propos</a></li>
                    <li class="text-[18px] font-semibold uppercase transition-all duration-500 text-[#026e9f] hover:text-[#03a9f4] after:block after:w-0 after:h-1 after:bg-[#03a9f4] after:transition-all after:duration-200 hover:after:w-full"><a class="text-decoration-none" href="{{ route('soins') }}">Soins</a></li>
                    <li class="text-[18px] font-semibold uppercase transition-all duration-500 text-[#026e9f] hover:text-[#03a9f4] after:block after:w-0 after:h-1 after:bg-[#03a9f4] after:transition-all after:duration-200 hover:after:w-full"><a class="text-decoration-none" href="{{ route('rendezVous') }}">Rendez-vous</a></li>
                </ul>
            </nav>
        </header>
        <section class="w-full pt-1 mt-[15vh] min-h-[150vh bg-[#f5fafd] pb-20">
            <div class="w-5/6 mx-auto">
                <h1 class="font-[300] text-6xl mt-10 mb-28">À propos</h1>
                <div class="w-full grid grid-rows-1 grid-cols-2 my-10 gap-y-32">
                    <div>
                        <img src="{{ asset('Images/Apropos1.jpeg') }}" alt="Apropos1">
                    </div>
                    <div class="flex justify-center items-center">
                        <p>Mordu de sport, je pratique moi-même l’escalade, le squash, le vtt et suis également présent dans le milieu du foot. Entraîneur d’athlétisme depuis plus de 20 ans, tant pour le sport loisir que pour les personnes souhaitant faire de la compétition, j’ai suivi l’ensemble du cursus J+S et continue de me former auprès de Swiss-Olympic, pour le brevet fédéral d’entraîneur. Lors de ces années de présence auprès des athlètes, il m’est très vite devenu évident que l’entraînement seul ne suffit pas à accompagner les sportifs. Que cela soit dans un but de loisirs ou avec un entraînement à visée de compétition, il est important de prendre soins de soi. Pour ce faire, j’ai démarré une formation de massothérapeute au sein de l’école Atlas et Bien Etre.</p>
                    </div>
                    <div class="flex justify-center items-center">
                        <p>Mon expérience sur le terrain me permet aujourd’hui de pouvoir apporter un soin thérapeutique avec un regard et une compréhension du mouvement, ceci en lien avec les gestes réalisés au quotidien, que ce soit dans les activités sportives, professionnelles ou simplement dans la vie de tous les jours. La frontière entre le sport et le milieu professionnel est en effet très proche. Nous prenons soins des sportifs, mais le faisons-nous autant pour un carreleur qui porte parfois plus de poids quotidiennement que le pratiquant de crossfit ? Inversement une personne qui reste longtemps en position assise a de grand risque de voir son psoas se raccourcir et peut à la longue développer des des douleurs dans le bas du dos ? Mon but est de pouvoir m’adapter aux besoins spécifiques de chaque personne.</p>
                    </div>
                    <div>
                        <img class="float-end" src="{{ asset('Images/Apropos2.jpg') }}" alt="Apropos2">
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
