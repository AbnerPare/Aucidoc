<nav x-data="{ open: false }" class="bg-dark fixed-top shadow border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img class="pt-1" src="{{ asset('img/logo.png') }}" alt="Votre Logo" style="width: 65%">
                    </a>
                </div>
                <!-- Navigation Links -->
                <div class="hidden space-x-4 sm:-my-px sm:ms-2 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-white" style="text-decoration: none">
                        {{ __(' Accueil') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-6 sm:-my-px sm:ms-6 sm:flex">
                    <x-nav-link :href="route('projets.projet')" :active="request()->routeIs('projets.projet')" class="text-white" style="text-decoration: none">
                        {{ __('Projets') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-6 sm:-my-px sm:ms-6 sm:flex">
                    <x-nav-link :href="route('documents.document')" :active="request()->routeIs('documents.document')" class="text-white" style="text-decoration: none">
                        {{ __('Documents') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-6 sm:-my-px sm:ms-6 sm:flex">
                    <x-nav-link :href="route('personnels.personnel')" :active="request()->routeIs('personnels.personnel')" class="text-white" style="text-decoration: none">
                        {{ __('Personnel') }}
                    </x-nav-link>
                </div>
                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ms-5 justify-end">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border-none  text-sm leading-4 font-medium rounded-md text-gray-500  text-white focus:outline-none transition ease-in-out duration-150">
                                <div class="text-white">{{ __('Demandes') }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')" style="text-decoration: none">
                                {{ __('Attestations') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('profile.edit')" style="text-decoration: none">
                                {{ __('Ordre de misssion') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('profile.edit')" style="text-decoration: none">
                                {{ __('Demande de congé') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('profile.edit')" style="text-decoration: none">
                                {{ __('Demande de fonds') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('profile.edit')" style="text-decoration: none">
                                {{ __("Autorisation d'absence") }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
                <div class="hidden sm:flex sm:items-center sm:ms-2 justify-end">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border-none  text-sm leading-4 font-medium rounded-md text-gray-500  text-white focus:outline-none transition ease-in-out duration-150">
                                <div class="text-white">{{ __('Finance') }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')" style="text-decoration: none">
                                {{ __('Demande de fonds') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('profile.edit')" style="text-decoration: none">
                                {{ __('Fournisseur') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
                <div class="hidden sm:flex sm:items-center sm:ms-2 justify-end">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border-none  text-sm leading-4 font-medium rounded-md text-gray-500  text-white focus:outline-none transition ease-in-out duration-150">
                                <div class="text-white">{{ __('Tâches') }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')" style="text-decoration: none">
                                {{ __('Demande de tâche') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('profile.edit')" style="text-decoration: none">
                                {{ __('Atrubuer une tâche') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
                <div class="hidden space-x-6 sm:-my-px sm:ms-4 sm:flex">
                    <x-nav-link :href="route('forum.forum')" :active="request()->routeIs('forum.forum')" class="text-white" style="text-decoration: none">
                        {{ __('Forum') }}
                    </x-nav-link>
                </div>


            </div>



            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6 justify-end">
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('personnels.admin')" :active="request()->routeIs('personnels.admin')" class="text-white" style="text-decoration: none">
                        {{ __('Admin') }}
                    </x-nav-link>
                </div>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border-none  text-sm leading-4 font-medium rounded-md text-gray-500  text-white focus:outline-none transition ease-in-out duration-150">
                            <div class="text-white">{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" style="text-decoration: none">
                            {{ __('Mon compte') }}
                        </x-dropdown-link>


                        <x-dropdown-link :href="route('personnels.demande')" style="text-decoration: none">
                            {{ __('Mes demandes') }}
                        </x-dropdown-link>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                class="text-danger" style="text-decoration: none">
                                {{ __('Déconnexion') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-2 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-success">
                {{ __('Accueil') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-2 space-y-1">
            <x-responsive-nav-link :href="route('projets.projet')" :active="request()->routeIs('projets.projet')" class="text-success">
                {{ __('Projets') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-2 space-y-1">
            <x-responsive-nav-link :href="route('documents.document')" :active="request()->routeIs('documents.document')" class="text-success">
                {{ __('Documents') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-2 space-y-1">
            <x-responsive-nav-link :href="route('personnels.personnel')" :active="request()->routeIs('personnels.personnel')" class="text-success">
                {{ __('Personnel') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-2 space-y-1">
            <x-responsive-nav-link :href="route('personnels.demande')" :active="request()->routeIs('personnels.demande')" class="text-success">
                {{ __('Mes demandes') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-2 space-y-1">
            <x-responsive-nav-link :href="route('forum.forum')" :active="request()->routeIs('forum.forum')" class="text-success">
                {{ __('Forum') }}
            </x-responsive-nav-link>
        </div>
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t  border-gray-200">
            <div class="px-4">
                <div class="font-medium text-white text-white">
                    <i class="fas fa-user"></i> {{ Auth::user()->name }}
                </div>
                <div class="font-medium text-sm text-white">{{ Auth::user()->email }}</div>
                <i class="fa-duotone fa-square-user"></i>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="text-info">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                <x-dropdown-link :href="route('personnels.demande')" style="text-decoration: none; color:white">
                    {{ __('Mes demandes') }}
                </x-dropdown-link>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();"
                        class="text-danger">
                        {{ __('Déconnexion ') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
