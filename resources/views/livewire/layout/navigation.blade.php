<div>  {{-- The single root element that wraps everything --}}

    <?php
    
    use App\Livewire\Actions\Logout;
    use Livewire\Volt\Component;
    
    new class extends Component
    {
        public function logout(Logout $logout): void
        {
            $logout();
            $this->redirect('/', navigate: true);
        }
    }; ?>
    
    <nav class="bg-white shadow-sm">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                
                <!-- Left Side: Search Bar -->
                <div>
                    <input type="text" placeholder="Search..." class="border rounded-md px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
    
                <!-- Right Side: Auth Links -->
                <div class="flex items-center">
                    @guest
                        {{-- Show these links only if the user is a guest (not logged in) --}}
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-800" wire:navigate>Login</a>
                        <a href="{{ route('register') }}" class="ml-4 text-gray-600 hover:text-gray-800" wire:navigate>Register</a>
                    @else
                        {{-- Show this dropdown if the user is logged in --}}
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>
    
                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
    
                            <x-slot name="content">
                                <x-dropdown-link :href="route('dashboard')" wire:navigate>
                                    {{ __('Dashboard') }}
                                </x-dropdown-link>
    
                                <x-dropdown-link :href="route('profile')" wire:navigate>
                                    {{ __('Profile') }}
                                </x-dropdown-link>
    
                                <!-- Authentication -->
                                <button wire:click="logout" class="w-full text-start">
                                    <x-dropdown-link>
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </button>
                            </x-slot>
                        </x-dropdown>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
    
    {{-- Header with Blog Title --}}
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-6">
            <h1 class="text-3xl font-bold text-gray-800">My Awesome Blog</h1>
        </div>
    </header>

</div> {{-- The closing tag for the single root element --}}