<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>P'tit boulot</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- BOOTSTRAP CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="antialiased">
  <!-- Menu section -->
  <div class="flex items-top justify-center sm:items-center bg-white py-16 sm:pt-0 border-b border-slate-400">
    @if (Route::has('login'))
    <div class="hidden fixed bg-white top-0 right-0 px-6 py-2 sm:block">
      @auth
      <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 no-underline">Dashboard</a>
      @else
      <a href="{{ route('register_annonceur') }}" class="ml-6 text-lg text-gray-700 dark:text-gray-500 no-underline">Entreprise</a>
      <a href="{{ route('register_freelance') }}" class="ml-6 text-lg text-gray-700 dark:text-gray-500 no-underline">Freelance</a>
      <a href="{{ route('login') }}" class="ml-6">
        <x-button class="">
          {{ __('Se connecter') }}
        </x-button>
      </a>
      @endauth
    </div>
    @endif
  </div>

  <!-- Header section -->
  <div class="grid grid-cols-7 container mt-10">
    <div class="col-span-4">
      <h1 class="font-bold text-5xl text-red-500 leading-16 mb-4">P’tit boulot, une<br /> nouvelle
        façon de<br /> travailler
        ensemble</h1>
      <p class="font-normal text-lg leading-6 mb-4">P’tit boulot est une plateforme de
        mise en<br /> relation entre jeunes freelances
        et entreprises<br /> pour la réalisation de
        prestations ponctuelles.</p>

      <div class="bg-gray-200 overflow-hidden shadow-md rounded-md">
        <div class="grid grid-cols-2 p-6 border-gray-400">
          <div class="ml-1">
            <h2 class="font-semibold text-lg">Espace Entreprise</h2>
            <p class="text-base font-light">Besoin de renfort sans effort ?</p>
            <x-button class="">
              {{ __('Je cherche du renfort') }}
            </x-button>
          </div>
          <div class="ml-3">
            <h2 class="font-semibold text-lg">Espace Freelance</h2>
            <p class="text-base font-light">Les jobs que tu veux quand tu veux!</p>
            <x-button class="">
              {{ __('Je souhaite travailler') }}
            </x-button>
          </div>
        </div>
      </div>

    </div>

    <div class="col-span-3 bg-white min-h-full"></div>
  </div>

  <!-- About Section -->
  <div class="container mt-44">
    <h1 class="font-bold text-4xl text-center text-red-500">Qu'est-ce que P'tit boulot ?</h1>
    <p class="font-medium text-2xl text-center text-black">Les compétences des jeunes africains au service des entreprises</p>
    <div class="grid grid-cols-2 mt-8">
      <div class="w-5/6 mt-4 text-black text-lg">
        <p>P'tit boulot permet à de jeunes freelances de gagner en expérience en trouvant facilement des jobs flexibles, adaptés à leur profil et bien payés auprès de plus de 3500 entreprises de tous types cherchant du renfort de qualité.</p>
        <p>Grâce à P'tit boulot, ce sont des milliers de jeunes qui mettent, chaque mois, partout en Afrique, leurs compétences et leur dynamisme au service des entreprises pour leur prêter main forte et qui financent ainsi leur vie tout en se professionnalisant.</p>
      </div>
      <div class="min-h-full bg-gray-700 rounded-md"></div>
    </div>

    <div class="mt-10">
      <div class="grid grid-cols-2 p-6 border-gray-400">
        <div class="flex justify-center">
          <div class="bg-gray-200 border-gray-400 overflow-hidden shadow-md px-12 py-4 rounded-md">
            <h2 class="font-bold text-2xl text-center">+2 000</h2>
            <p class="text-lg font-medium text-center">Entreprises qui nous font confiance</p>
            <x-button class="">
              {{ __('Je cherche du renfort') }}
            </x-button>
          </div>
        </div>
        <div class="flex justify-center">
          <div class="bg-gray-200 border-gray-400 overflow-hidden shadow-md px-16 py-4 rounded-md">
            <h2 class="font-bold text-2xl text-center">+250 000</h2>
            <p class="text-lg font-medium text-center">Jeunes prêts à travailler</p>
            <x-button class="">
              {{ __('Je souhaite travailler') }}
            </x-button>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Advantages Section -->
  <div class="container mt-48">
    <h1 class="font-bold text-4xl text-center text-red-500">Une plateforme responsable</h1>
    <p class="font-medium text-2xl text-center text-black leading-none">un tremplin vers l’emploi pour chaque jeune<br /> et une solution innovante pour toutes les entreprises</p>
    <div class="bg-gray-700 rounded-md mt-8 h-44 mx-32"></div>
    <div class="mt-10">
      <div class="grid grid-cols-2 p-6 border-gray-400 mx-32">
        <div class="flex justify-start">
          <div class="px-4">
            <h2 class="font-bold text-3xl">Un cadre juridique simple et légal</h2>
            <p class="text-lg font-base mt-14">Les Staffers sont tous des prestataires habilités à effectuer des prestations de service. StaffMe est une plateforme ouverte qui permet aux freelances de réaliser des prestations pour plusieurs clients.</p>
            <x-button class="">
              {{ __('Création d\'opportunités') }}
            </x-button>
          </div>
        </div>
        <div class="flex justify-end">
          <div class="px-4">
            <h2 class="font-bold text-3xl">Des formations accessibles via learn ptitboulot</h2>
            <p class="text-lg font-base mt-6">Parce que nous pensons que le développement de l'employabilité passe par l'expérience mais aussi par la formation, nous avons créé notre propre organisme de formation pour les freelances : learn ptitboulot !</p>
            <x-button class="">
              {{ __('Des formations pour tous') }}
            </x-button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>