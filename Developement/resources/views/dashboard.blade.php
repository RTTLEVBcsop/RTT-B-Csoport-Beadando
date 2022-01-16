<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @auth

                    <div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="align-items-center">
        <div class="paper" style="background: white">
            <div class="card p-3 py-4">
                <div class="text-center"> <img src="/img/profilepic.jpg" width="100" class="rounded-circle"> </div>
                <div class="text-center mt-3"> <span class="bg-secondary p-1 px-4 rounded text-white">Profil</span>
                    <h5 class="mt-2 mb-0">{{Auth::user()->name}}</h5> <span>E-mail: {{Auth::user()->email}}</span>
                    <div class="px-4 mt-1">
                        <p class="fonts">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                 </div>
            </div>
        </div>
        </div>
    </div>
</div>

                     <!--       <h1>Személyes adatok:</h1>
                        <p>Név: {{Auth::user()->name}}</p>
                        <p>E-mail: {{Auth::user()->email}}</p>
                    -->     
                    @endauth

                </div>
            </div>
        </div>
    </div>
</x-app-layout>