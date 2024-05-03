<nav x-data="{ open: false }" class="navbar">
    <!-- Primary Navigation Menu -->
                        <ul>
                            <li>
                                <a href="/dashboard">
                                    <button class="homeBtn">
                                        Izvelne
                                    </button>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('profile.edit')}}">
                                    <button class="navBtn">
                                        Profils
                                    </button>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('sludinajums.index')}}">
                                    <button class="navBtn">
                                        Sludinajumi
                                    </button>
                                </a>
                            </li>
                            <li>
                                <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
            
                                <x-responsive-nav-link :href="route('logout')" class="navBtn"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                            </li>
                        </ul>
                </div>

</nav>
