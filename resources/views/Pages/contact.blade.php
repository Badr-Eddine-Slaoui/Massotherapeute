<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contactez-nous</title>

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
                    <li class="text-[18px] font-semibold uppercase transition-all duration-500 text-[#026e9f] hover:text-[#03a9f4] after:block after:w-0 after:h-1 after:bg-[#03a9f4] after:transition-all after:duration-200 hover:after:w-full xs:text-[7px] xs:after:h-[2px] sm:text-[11px] sm:after:h-[3px] md:text-[14px] md:after:h-1 lg:text-[16px]"><a class="text-decoration-none" href="{{ route('soins') }}">Soins</a></li>
                    <li class="text-[18px] font-semibold uppercase text-[#03a9f4] after:block after:w-full after:h-1 after:bg-[#03a9f4] xs:text-[7px] xs:after:h-[2px] sm:text-[11px] sm:after:h-[3px] md:text-[14px] md:after:h-1 lg:text-[16px]"><a class="text-decoration-none" href="{{ route('contact') }}">Contactez-nous</a></li>
                </ul>
            </nav>
        </header>
        <section class="w-full pt-1 mt-[15vh] pb-20 xs:pb-5 xs:min-h-[50vh] bg-[#f5fafd]">
            <div class="w-5/6 mx-auto py-20">
                <h1 class="font-[300] text-6xl mt-10 mb-28 xs:text-xs xs:mb-14 md:text-2xl lg:text-3xl">Contactez-nous</h1>
                <div class="w-full bg-white flex shadow-center-gray rounded-md xs:block sm:flex md:flex">
                    <div class="w-2/6 bg-[#03a9f4] rounded-s-md flex justify-center items-center xs:rounded-s-none xs:w-full xs:pt-5 sm:w-2/6 sm:pt-0 md:w-2/6 md:w-pt-0">
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
