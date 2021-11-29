<x-app-layout>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __($user->username) }}
    </h2>

    <div class="py-12 px-5">
        <div>
            <span class="text-xl text-gray-800">
                Prenom:
            </span>
            <span class="pl-2">
                {{ $user->first_name }}
            </span>
        </div>
        <div>
            <span class="text-xl text-gray-800">
                Nom:
            </span>
            <span class="pl-2">
                {{ $user->last_name }}
            </span>
        </div>
        <div>
            <span class="text-xl text-gray-800">
                Adresse:
            </span>
            <span class="pl-2">
                {{ $user->address }}
            </span>
        </div>
        <div>
            <span class="text-xl text-gray-800">
                Téléphone:
            </span>
            <span class="pl-2">
                {{ $user->phone }}
            </span>
        </div>
        <div>
            <span class="text-xl text-gray-800">
                Email:
            </span>
            <span class="pl-2">
                {{ $user->email }}
            </span>
        </div>
        <div>
            <span class="text-xl text-gray-800">
                Date de naissance:
            </span>
            <span class="pl-2">
                {{ $user->birthday }}
            </span>
        </div>
        @if (Auth::user()->username === $user->username)
            <a href="{{ route('profil.edit', $user->username) }}" style="color: blue;">Edit</a>
        @endif
    </div>
</x-app-layout>
