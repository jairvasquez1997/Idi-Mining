<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
        </div>

        <div class="navbar-brand">
            <a href="{{route('home')}}"><img src="{{asset('admin\images\LOGO ADMIN.png')}}" class="img-responsive logo"></a>
        </div>

        <div class="navbar-right" style="width: 40%;">

            <div id="navbar-menu">
                <ul class="nav navbar-nav">

                    <li>
                        <a href="{{ route('logout') }}" class="icon-menu"><i class="icon-login"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
