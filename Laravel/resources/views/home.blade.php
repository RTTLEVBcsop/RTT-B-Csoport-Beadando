@extends('layout.main')
@section('header')
    <header class="header">
        <nav class="navbar navbar-style">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a href=""><img class="logo" src="/img/team-g8e083dc6d_1920.jpg"></a>
                </div>
                <div class="collapse navbar-collapse" id="micon">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="">Home</a></li>
                        <li><a href="">Features</a></li>
                        <li><a href="">Team</a></li>
                        <li><a href="">Gallery</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>            
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-sm-6 banner-info">
                    <h1>XY vállalat</h1>
                    <p class="big-text">Programtervező informatikusokat keresünk!!!</p>
                    <p>Ha érdekel, akkor töltsd fel az önéletrajzod.</p>
                    <a class="btn btn-first" href="regist">regisztráció</a>
                    <a class="btn btn-second" href="#">belépés</a>
                </div>

                <div class="col-sm-6 banner-image" >
                    <img src="/img/meeting-gf53a7d63f_6401.jpg" class="img.responsive">
                </div>
            </div>
        </div>

</header>
@endsection
    