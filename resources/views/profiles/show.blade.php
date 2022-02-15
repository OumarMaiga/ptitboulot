<x-app-layout>

  <div class="absolute bg-red-700 h-56 w-full"></div>
  <div class="pt-32 pb-8">
    <div class="relative max-w-5xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="mb-4 grid grid-cols-3 gap-4">
            <div class="col-start-2 col-span-1 justify-self-center">
              <img src="/image/avatar.png" alt="" class="profil-avatar">
            </div>
            <div class="col-span-1 justify-self-end">
              <x-button>
                @if (Auth::user()->username === $user->username)
                  <a href="{{ route('profile.edit', $user->username) }}" style="color: white;">Modifier profil</a>
                @endif
              </x-button>
            </div>
          </div>

          <h1 class="flex justify-center font-bold text-4xl text-gray-800 leading-tight capitalize">
            {{ $user->first_name }} {{ $user->last_name }}
          </h1>
          <p class="space-x-12 mt-8 flex items-center justify-center">
            Je suis un community manager avec des experience professionels
          </p>
          <div class="space-x-12 mt-8 flex items-center justify-center">
            <div class="inline-block space-x-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
              </svg>
              <p class="text-lg inline-block">{{ $user->address }}</p>
            </div>

            <div class="inline-block space-x-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline block" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
              </svg>
              <p class="text-lg inline-block">{{ $user->phone }}</p>
            </div>

            <div class="inline-block space-x-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
              </svg>
              <p class="text-lg inline-block"> {{ $user->email }}</p>
            </div>
            
            <div class="inline-block space-x-1">
              <img src="/image/linkedin.png" alt="LinkedIn" class="icon-rs">
              <img src="/image/github.png" alt="Git hub" class="icon-rs">
              <img src="/image/dribbble.png" alt="Dribbble" class="icon-rs">
              <img src="/image/instagram.png" alt="Instagram" class="icon-rs">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="px-24">
    <div class="py-12 text-center tab">
      <div class="text-lg mx-8 font-semibold inline-block tablinks active" onclick="openTab(event, 'enattentes')" id="defaultOpen">
        En attente de reponse
      </div>
      <div class="text-lg mx-8 font-semibold inline-block tablinks" onclick="openTab(event, 'encours')">
        Boulots en cours
      </div>
      <div class="text-lg mx-8 font-semibold inline-block tablinks" onclick="openTab(event, 'termine')">
        Boulots terminés
      </div>
    </div>
    <!-- En attentes -->
    <div class="grid grid-cols-3 gap-4 tabcontent" id="enattentes">
      <div class="relative my-4 grid col-span-1 bg-white border-b border-gray-200 flex justify-center shadow-sm rounded-md">
        <img src="/image/avatar.png" alt="" class="w-24 pt-4 pb-24 justify-self-center">
        <div class="absolute bg-gray-200 py-4 px-2 bottom-0 w-full">
          <p class="text-start">Correction d’un bug sur une app mobile</p>
        </div>
      </div>
      <div class="relative my-4 grid col-span-1 bg-white border-b border-gray-200 flex justify-center shadow-sm rounded-md">
        <img src="/image/avatar.png" alt="" class="w-24 pt-4 pb-24 justify-self-center">
        <div class="absolute bg-gray-200 py-4 px-2 bottom-0 w-full">
          <p class="text-start">Correction d’un bug sur une app mobile</p>
        </div>
      </div>
      <div class="relative my-4 grid col-span-1 bg-white border-b border-gray-200 flex justify-center shadow-sm rounded-md">
        <img src="/image/avatar.png" alt="" class="w-24 pt-4 pb-24 justify-self-center">
        <div class="absolute bg-gray-200 py-4 px-2 bottom-0 w-full">
          <p class="text-start">Correction d’un bug sur une app mobile</p>
        </div>
      </div>
      <div class="relative my-4 grid col-span-1 bg-white border-b border-gray-200 flex justify-center shadow-sm rounded-md">
        <img src="/image/avatar.png" alt="" class="w-24 pt-4 pb-24 justify-self-center">
        <div class="absolute bg-gray-200 py-4 px-2 bottom-0 w-full">
          <p class="text-start">Correction d’un bug sur une app mobile</p>
        </div>
      </div>
      <div class="relative my-4 grid col-span-1 bg-white border-b border-gray-200 flex justify-center shadow-sm rounded-md">
        <img src="/image/avatar.png" alt="" class="w-24 pt-4 pb-24 justify-self-center">
        <div class="absolute bg-gray-200 py-4 px-2 bottom-0 w-full">
          <p class="text-start">Correction d’un bug sur une app mobile</p>
        </div>
      </div>
    </div>
    <!-- En cours -->
    <div class="grid grid-cols-3 gap-4 tabcontent" id="encours">
      <div class="relative my-4 grid col-span-1 bg-white border-b border-gray-200 flex justify-center shadow-sm rounded-md ">
        <img src="/image/avatar.png" alt="" class="w-24 pt-4 pb-24 justify-self-center">
        <div class="absolute bg-gray-200 py-4 px-2 bottom-0 w-full">
          <p class="text-start">Correction d’un bug sur une app mobile</p>
        </div>
      </div>
      <div class="relative my-4 grid col-span-1 bg-white border-b border-gray-200 flex justify-center shadow-sm rounded-md">
        <img src="/image/avatar.png" alt="" class="w-24 pt-4 pb-24 justify-self-center">
        <div class="absolute bg-gray-200 py-4 px-2 bottom-0 w-full">
          <p class="text-start">Correction d’un bug sur une app mobile</p>
        </div>
      </div>
    </div>
    <!-- Terminé -->
    <div class="grid grid-cols-3 gap-4 tabcontent" id="termine">
      <div class="relative my-4 grid col-span-1 bg-white border-b border-gray-200 flex justify-center shadow-sm rounded-md">
        <img src="/image/avatar.png" alt="" class="w-24 pt-4 pb-24 justify-self-center">
        <div class="absolute bg-gray-200 py-4 px-2 bottom-0 w-full">
          <p class="text-start">Correction d’un bug sur une app mobile</p>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
<script type="text/javascript">

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();

  function openTab(evt, name) {
      // Declare all variables
      var i, tabcontent, tablinks;

      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
      }

      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(name).style.display = "grid";
      evt.currentTarget.className += " active";
  } 
</script>