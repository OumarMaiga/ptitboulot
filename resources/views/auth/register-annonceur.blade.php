<x-guest-layout>
  <x-auth-card>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="flex items-center justify-end">
      <x-button class="m-4">
        {{ __('Connexion') }}
      </x-button>
    </div>

    <div class="ml-16">
      <h1 class="text-4xl">Inscription <span class="font-bold">Annonceur</span></h1>
      <h2 class="text-2xl mt-4">Bienvenue !</h2>
      <p class="text-lg">Vous allez découvrir des offres chaque jour.</p>

      <form method="POST" action="{{ route('register_annonceur') }}">
        @csrf

        <div class="space-x-4">
          <!-- First_name -->
          <div class="mt-4 inline-block">
            <x-label for="first_name" :value="__('Prenom')" />

            <x-input id="first_name" class="mt-1" type="text" name="first_name" :value="old('first_name')" autofocus required />
          </div>

          <!-- Last_name -->
          <div class="mt-4 inline-block">
            <x-label for="last_name" :value="__('Nom')" />

            <x-input id="last_name" class="mt-1" type="text" name="last_name" :value="old('last_name')" required />
          </div>
        </div>

        <div class="space-x-4">
          <!-- Email Address -->
          <div class="mt-4 inline-block">
            <x-label for="email" :value="__('Email pro')" />

            <x-input id="email" class="mt-1" type="email" name="email" :value="old('email')" required />
          </div>

          <!-- Contact -->
          <div class="mt-4 inline-block">
            <x-label for="phone" :value="__('Contact')" />

            <x-input id="phone" class="mt-1" type="text" name="phone" :value="old('phone')" />
          </div>
        </div>

        <!-- Address -->
        <div class="mt-4">
          <x-label for="address" :value="__('Adresse')" />

          <x-input id="address" class="block mt-1 w-3/5" type="text" name="address" :value="old('address')" placeholder="Bacodjicoroni ACI, Bamako, Mali" required />
        </div>

        <!-- Userame -->
        <div class="mt-4">
          <x-label for="username" :value="__('Nom d\'utilisateur')" />

          <x-input id="username" class="block mt-1 w-3/5" type="text" name="username" :value="old('username')" required />
        </div>

        <div class="space-x-4">
          <!-- Password -->
          <div class="mt-4 inline-block">
            <x-label for="password" :value="__('Mot de passe')" />

            <x-input id="password" class="mt-1" type="password" name="password" required autocomplete="new-password" />
          </div>

          <!-- Confirm Password -->
          <div class="mt-4 inline-block">
            <x-label for="password_confirmation" :value="__('Mot de passe confirmé')" />

            <x-input id="password_confirmation" class="mt-1" type="password" name="password_confirmation" required />
          </div>
        </div>

        <div class="items-center mt-4">
          <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
            {{ __('Already registered?') }}
          </a> -->

          <!-- Terms and Conditions -->
          <div class="block mt-4">
            <label for="conditions" class="inline-flex items-center">
              <input id="conditions" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="conditions">
              <span class="ml-2 text-sm text-gray-600">{{ __('J\'accepte les termes et conditions d\'utilisation') }}</span>
            </label>
          </div>

          <p class="text-xs mt-2">En cliquant sur 'Créer un compte', vous acceptez nos termes et conditions.<br /> Notre politique de collecte et d'utilisation de données et de vos cookies est <br />détaillée dans notre politique de confidentialité. Nous pourrons vous contacter par email.<br /> Vous pourrez vous désinscrire à tout moment.</p>

          <x-button class="mt-4 mb-8">
            {{ __('Créer un compte annonceur') }}
          </x-button>
        </div>
      </form>
    </div>

  </x-auth-card>
</x-guest-layout>