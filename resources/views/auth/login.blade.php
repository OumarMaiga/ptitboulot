<x-guest-layout>
  <x-auth-card>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="flex items-center justify-end">
      <x-button class="m-4">
        <a href="{{  route('register_freelance') }}">{{ __('INSCRIVEZ-VOUS MAINTENANT') }}</a>
      </x-button>
    </div>

    <div class="mt-12 ml-16">
      <h1 class="text-4xl">(Re) Bienvenue !</h1>
      <p class="text-lg">Nous sommes content de vous revoir !</p>

      <form method="POST" action="{{ route('login') }}" class="mt-8">
        @csrf

        <!-- Email Address -->
        <div>
          <x-label for="login" :value="__('Email / Pseudo')" class="font-semibold uppercase text-sm" />

          <x-input id="login" class="block mt-1 w-3/5" type="text" name="login" :value="old('login')" required autofocus />
        </div>

        <!-- Password -->
        <div class="mt-4">
          <x-label for="password" :value="__('Mot de passe')" class="font-semibold uppercase text-sm" />

          <x-input id="password" class="block mt-1 w-3/5" type="password" name="password" required autocomplete="current-password" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
          <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
            <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
          </label>
        </div>

        <div class="items-center mt-2">
          @if (Route::has('password.request'))
          <a class="block underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
            {{ __('Mot de passe oublié?') }}
          </a>
          @endif

          <x-button class="mt-2">
            {{ __('Connexion') }}
          </x-button>
        </div>
      </form>
    </div>

  </x-auth-card>
</x-guest-layout>