<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Accueil</title>

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
                    <li class="text-[18px] font-semibold uppercase text-[#03a9f4] after:block after:w-full after:h-1 after:bg-[#03a9f4]"><a class="text-decoration-none" href="{{ route('home') }}">Accueil</a></li>
                    <li class="text-[18px] font-semibold uppercase transition-all duration-500 text-[#026e9f] hover:text-[#03a9f4] after:block after:w-0 after:h-1 after:bg-[#03a9f4] after:transition-all after:duration-200 hover:after:w-full"><a class="text-decoration-none" href="{{ route('home') }}">A propos</a></li>
                    <li class="text-[18px] font-semibold uppercase transition-all duration-500 text-[#026e9f] hover:text-[#03a9f4] after:block after:w-0 after:h-1 after:bg-[#03a9f4] after:transition-all after:duration-200 hover:after:w-full"><a class="text-decoration-none" href="{{ route('home') }}">Soins</a></li>
                    <li class="text-[18px] font-semibold uppercase transition-all duration-500 text-[#026e9f] hover:text-[#03a9f4] after:block after:w-0 after:h-1 after:bg-[#03a9f4] after:transition-all after:duration-200 hover:after:w-full"><a class="text-decoration-none" href="{{ route('home') }}">Rendez-vous</a></li>
                </ul>
            </nav>
        </header>
        <main class="w-full mt-[15vh] min-h-[150vh] bg-HomeBg bg-cover relative">
            <div class="w-full h-full bg-black bg-opacity-50 absolute z-[1] flex items-center justify-center">
                <div class="text-white w-3/5 mx-auto text-center">
                    <div class="flex h-[35vh] mt-40">
                        <h1 class="text-[3.375em] w-2/3 font-[300] leading-[1.23] flex justify-center items-center">MASSOTHÉRAPEUTE COACH SPORTIF</h1>
                        <div class="w-2/5 my-auto">
                            <button class="block mx-auto bg-[#03a9f4] py-3 px-7 text-[18px] rounded-full my-5 uppercase shadow-center">- les soins -</button>
                            <button class="block mx-auto border-2  border-white py-3 px-7 text-[18px] rounded-full my-5 uppercase shadow-center">- rendez-vous -</button>
                        </div>
                    </div>
                    <h2 class="w-1/2 text-3xl font-[300] m-auto leading-[1.23]">NV-MASSOTHERAPEUTE La Sarraz</h2>
                    <svg class="w-1/12 m-auto mt-20 mb-10" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="map-marker" viewBox="0 0 512 545.5"><path fill="white" d="M256 80c79.336 0 144 64.664 144 144 0 22.5-9.116 48.313-21.5 76.5s-28.314 58.098-44.5 86C301.628 442.306 269 489 269 489l-13 19-13-19s-32.628-46.694-65-102.5c-16.186-27.902-32.116-57.813-44.5-86S112 246.5 112 224c0-79.336 64.664-144 144-144zm0 32c-62.04 0-112 49.96-112 112 0 12.844 6.884 37.06 18.5 63.5s27.686 55.738 43.5 83c25.155 43.364 40.74 66.3 50 80 9.26-13.7 24.845-36.636 50-80 15.815-27.262 31.884-56.56 43.5-83S368 236.844 368 224c0-62.04-49.96-112-112-112zm0 80c17.673 0 32 14.327 32 32s-14.327 32-32 32-32-14.327-32-32 14.327-32 32-32z"></path></svg>
                    <p class="w-1/2 text-3xl font-[300] m-auto mb-6">THE RIGHT MOVE</p>
                    <p class="w-1/2 text-3xl font-[300] m-auto">Echichens</p>
                    <a href="#apropos"><i class="text-3xl mt-40 fa-solid fa-chevron-down animate-bounce-100"></i></a>
                </div>
            </div>
        </main>
        <section id="apropos" class="w-4/5 min-h-screen mx-auto flex justify-center items-center py-20">
            <div class="w-full grid grid-rows-1 grid-cols-2">
                <div class="rounded-xl p-20 shadow-center-gray">
                    <p class="text-[18px] font-semibold font-bold">À propos</p>
                    <p class="text-5xl my-5 font-[300]">Nicolas Verraires</p>
                    <p class="text-[16px] text-[#46707f] leading-[1.6] my-2">Mordu de sport, entraîneur d’athlétisme depuis plus de 20 ans, j’ai suivi l’ensemble du cursus J+S et continue de me former auprès de Swiss-Olympic, pour le brevet fédéral d’entraîneur. J’ai démarré une formation de massothérapeute au sein de l’école Atlas et Bien Etre.</p>
                    <p class="text-[16px] text-[#46707f] leading-[1.6] my-2">Mon expérience sur le terrain me permet aujourd’hui de pouvoir apporter un soin thérapeutique avec un regard et une compréhension du mouvement. Ceci en lien avec les gestes réalisés au quotidien, que ce soit dans les activités sportives, professionnelles ou simplement dans la vie de tous les jours</p>
                </div>
                <div class="flex justify-center items-center relative">
                    <img class="w-full rounded-xl absolute -left-8 shadow-center-gray" src="{{ asset('Images/À propos Pic.jpg') }}" alt="">
                </div>
            </div>
        </section>
        <section id="apropos" class="w-full min-h-screen mx-auto flex justify-center items-center py-5 bg-[#f5fafd]">
            <div class="w-5/6 text-center">
                <h2 class="text-5xl my-5 font-[300]">Les soins</h2>
                <p class="text-[20px] my-10">Voici en quelques lignes, les soins que je vous propose. N’hésitez pas à cliquer dessus pour en savoir un peu plus, ainsi qu’à me contacter pour plus d’informations</p>
                <div class="grid grid-rows-1 grid-cols-3 gap-x-5 my-5">
                    <div class="bg-HomeBg bg-cover bg-no-repeat text-center h-[40vh] relative">
                        <div class="w-full h-full bg-white bg-opacity-60 flex items-center justify-center relative">
                            <div class="w-11/12">
                                <p class="text-[18px] font-semibold mb-5">Massage thérapeutique</p>
                                <p class="text-[18px] font-[300]">Le massage thérapeutique est un ensemble de techniques manuelles réalisées sur le corps à but curatif</p>
                            </div>
                            <div class="w-full h-full bg-cyan-400 absolute bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500">
                                <svg class="w-1/6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div class="bg-HomeBg bg-cover bg-no-repeat text-center h-[40vh] relative">
                        <div class="w-full h-full bg-white bg-opacity-60 flex items-center justify-center relative">
                            <div class="w-11/12">
                                <p class="text-[18px] font-semibold mb-5">Massage thérapeutique</p>
                                <p class="text-[18px] font-[300]">Le massage thérapeutique est un ensemble de techniques manuelles réalisées sur le corps à but curatif</p>
                            </div>
                            <div class="w-full h-full bg-cyan-400 absolute bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500">
                                <svg class="w-1/6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div class="bg-HomeBg bg-cover bg-no-repeat text-center h-[40vh] relative">
                        <div class="w-full h-full bg-white bg-opacity-60 flex items-center justify-center relative">
                            <div class="w-11/12">
                                <p class="text-[18px] font-semibold mb-5">Massage thérapeutique</p>
                                <p class="text-[18px] font-[300]">Le massage thérapeutique est un ensemble de techniques manuelles réalisées sur le corps à but curatif</p>
                            </div>
                            <div class="w-full h-full bg-cyan-400 absolute bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500">
                                <svg class="w-1/6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-2/3 m-auto grid grid-rows-1 grid-cols-2 gap-x-5 my-5">
                    <div class="bg-HomeBg bg-cover bg-no-repeat text-center h-[40vh] relative">
                        <div class="w-full h-full bg-white bg-opacity-60 flex items-center justify-center relative">
                            <div class="w-11/12">
                                <p class="text-[18px] font-semibold mb-5">Massage thérapeutique</p>
                                <p class="text-[18px] font-[300]">Le massage thérapeutique est un ensemble de techniques manuelles réalisées sur le corps à but curatif</p>
                            </div>
                            <div class="w-full h-full bg-cyan-400 absolute bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500">
                                <svg class="w-1/6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div class="bg-HomeBg bg-cover bg-no-repeat text-center h-[40vh] relative">
                        <div class="w-full h-full bg-white bg-opacity-60 flex items-center justify-center relative">
                            <div class="w-11/12">
                                <p class="text-[18px] font-semibold mb-5">Massage thérapeutique</p>
                                <p class="text-[18px] font-[300]">Le massage thérapeutique est un ensemble de techniques manuelles réalisées sur le corps à but curatif</p>
                            </div>
                            <div class="w-full h-full bg-cyan-400 absolute bg-opacity-60 flex justify-center items-center opacity-0 cursor-pointer hover:opacity-100 transition-opacity duration-500">
                                <svg class="w-1/6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 512 545.5"><path class="fill-white" d="M304 80c88.176 0 160 71.824 160 160s-71.824 160-160 160c-38.32 0-73.41-13.423-101-36L75.5 491.5l-23-23L180 341c-22.577-27.59-36-62.68-36-101 0-88.176 71.824-160 160-160zm0 32c-70.882 0-128 57.118-128 128s57.118 128 128 128 128-57.118 128-128-57.118-128-128-128z"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="apropos" class="w-full min-h-screen mx-auto flex justify-center items-center py-5 bg-[#0d678f]">
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
