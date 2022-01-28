<x-app-layout>
    <div class="mx-16 my-4">
        <h1 class="mb-6">Modifier l'offre</h1>
        <form method="POST" action="{{ route('offer.update', $offer->slug) }}">
            @csrf
            @method('put')
            <div class="grid grid-cols-5 gap-10">
                <div class="col-span-4">
                    <div class="bg-white rounded-md shadow-md px-8 py-6 ">
                        <h2 class="text-base uppercase mb-4">Informations de l'offre</h2>
                        <svg width="1165" height="1" viewBox="0 0 1165 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="0.5" x2="1165" y2="0.5" stroke="#C4C4C4"/>
                        </svg>
                        <h3 class="text-base mt-6 mb-8">Infos Entreprise</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <!-- Nom -->
                                <div>
                                    <x-label for="name" :value="__('Nom')" class="text-sm text-gray-500 inline-block mr-10" />
                                    <x-input id="name" class="inline-block mt-1 w-3/5" type="text" name="name" :value="$offer->name" required autofocus />
                                </div>

                                <!-- Contact -->
                                <div class="mt-3">
                                    <x-label for="contact" :value="__('Contact')" class="text-sm text-gray-500 inline-block mr-6" />
                                    <x-input id="contact" class="inline-block mt-1 w-3/5" type="text" name="contact" :value="$offer->contact" required />
                                </div>
                            </div>
                            <div>
                                <!-- Email -->
                                <div>
                                    <x-label for="email" :value="__('Email')" class="text-sm text-gray-500 inline-block mr-10" />
                                    <x-input id="email" class="inline-block mt-1 w-3/5" type="email" name="email" :value="$offer->email" required />
                                </div>

                                <!-- Adresse -->
                                <div class="mt-3">
                                    <x-label for="address" :value="__('Adresse')" class="text-sm text-gray-500 inline-block mr-6" />
                                    <x-input id="address" class="inline-block mt-1 w-3/5" type="text" name="address" :value="$offer->address" required />
                                </div>
                            </div>
                        </div>

                        <h3 class="text-base mt-6 mb-8">Détails de l'offre</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <!-- Libellé -->
                                <div>
                                    <x-label for="libelle" :value="__('Libellé')" class="text-sm text-gray-500 inline-block mr-8" />
                                    <x-input id="libelle" class="inline-block mt-1 w-3/5" type="text" name="title" :value="$offer->title" required />
                                </div>

                                <!-- Catégorie -->
                                <div class="mt-3">
                                    <x-label for="category" :value="__('Catégorie')" class="text-sm text-gray-500 inline-block mr-3" />
                                    <select name="category" id="category" class="inline-block mt-1 w-3/5 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" :value="$offer->category" required>
                                        <option value="graphic-design">Graphic design</option>
                                        <option value="mobile-app">Mobile App</option>
                                    </select>
                                </div>

                                <!-- Description -->
                                <div class="mt-8">
                                    <x-label for="overview" :value="__('Description')" class="text-sm text-gray-500 mb-2" />
                                    <textarea name="overview" id="overview" cols="56" rows="5" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" :value="$offer->overview"></textarea>
                                </div>
                            </div>
                            <div>
                                <!-- Durée -->
                                <div>
                                    <x-label for="worktime" :value="__('Durée')" class="text-sm text-gray-500 inline-block mr-8" />
                                    <x-input id="worktime" class="inline-block mt-1 w-3/5" type="text" name="worktime" :value="$offer->worktime" required />
                                </div>

                                <!-- Budget -->
                                <div class="mt-3">
                                    <x-label for="budget" :value="__('Budget')" class="text-sm text-gray-500 inline-block mr-6" />
                                    <x-input id="budget" class="inline-block mt-1 w-3/6" type="text" name="budget" :value="$offer->budget" required />
                                    <p class="inline-block ml-3">FCFA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <x-button class="mt-6 inline-block uppercase">
                        {{ __('Modifier') }}
                    </x-button>
                    <a href="#" class="mt-6 ml-16 text-black font-medium inline-block uppercase no-underline">Annuler</a>
                </div>
               
                <div class="bg-white rounded-md shadow-md px-8 py-6 h-2/5">
                    <h2 class="text-base uppercase mb-4">Image de couverture</h2>
                    <svg width="260" height="1" viewBox="0 0 260 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line y1="0.5" x2="260" y2="0.5" stroke="#C4C4C4"/>
                    </svg>   
                </div>
            </div>
        </form>
    </div>
</x-app-layout>