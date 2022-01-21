<x-app-layout>
  <x-auth-card>

    <h2 class="mt-10 text-4xl ml-16">
      {{ __('Modification de profil') }}
    </h2>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="ml-16 mt-4">
      <form method="POST" action="{{ route('profile.update', $user->id) }}">
        @csrf
        @method('put')

        <div class="space-x-4">
          <!-- First_name -->
          <div class="mt-4 inline-block">
            <x-label for="first_name" :value="__('Prenom')" class="font-semibold uppercase text-sm" />

            <x-input id="first_name" class="mt-1" type="text" name="first_name" value="{{ $user->first_name }}" />
          </div>

          <!-- Last_name -->
          <div class="mt-4 inline-block">
            <x-label for="last_name" :value="__('Nom')" class="font-semibold uppercase text-sm" />

            <x-input id="last_name" class="mt-1" type="text" name="last_name" value="{{ $user->last_name }}" />
          </div>
        </div>

        <div class="space-x-4">
          <!-- Userame -->
          <div class="mt-4 inline-block">
            <x-label for="username" :value="__('Nom d\'utilisateur')" class="font-semibold uppercase text-sm" />

            <x-input id="username" class="mt-1" type="text" name="username" value="{{ $user->username }}" required />
          </div>

          <!-- Contact -->
          <div class="mt-4 inline-block">
            <x-label for="phone" :value="__('Contact')" class="font-semibold uppercase text-sm" />

            <x-input id="phone" class="mt-1" type="text" name="phone" value="{{ $user->phone }}" />
          </div>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
          <x-label for="email" :value="__('Email pro')" class="font-semibold uppercase text-sm" />

          <x-input id="email" class="mt-1 w-3/5" type="email" name="email" value="{{ $user->email }}" required />
        </div>

        <!-- Address -->
        <div class="mt-4">
          <x-label for="address" :value="__('Adresse')" class="font-semibold uppercase text-sm" />

          <x-input id="address" class="mt-1 w-3/5" type="text" name="address" value="{{ $user->address }}" />
        </div>

        <div class="items-center mt-4">
          <x-button class="mt-4">
            {{ __('Modifier') }}
          </x-button>
        </div>
      </form>
    </div>

  </x-auth-card>
</x-app-layout>