<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 banner-info">
                <h1>XY vállalat</h1>
                <p class="big-text">Programtervező informatikusokat keresünk!!!</p>
                <p>Ha érdekel, akkor töltsd fel az önéletrajzod.</p>
                @if (Route::has('login'))
                    <div>
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg" >Dashboard</a>
                            @else

                            <a href="{{ route('login') }}" class="btn btn-secondary btn-lg">Belépés</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Regisztráció</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>

            <div class="col-sm-6 banner-image" >
                <img src="/img/meeting-gf53a7d63f_6401.jpg" class="img.responsive" style="border-radius: 10%; box-shadow: 3px 7px 60px 10px #000000;">
            </div>
        </div>
    </div>
</x-app-layout>
