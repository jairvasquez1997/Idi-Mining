<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="{{asset('admin/images/user.jpg')}}" class="rounded-circle user-photo"
                 alt="User Profile Picture">
            <div class="dropdown">
                <span>Bienvenido,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name"
                   data-toggle="dropdown"><strong>{{Auth::user()->persona->nombres}} {{Auth::user()->persona->apellidos}}</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">

                    <li><a href="{{ route('logout') }}"><i class="icon-power"></i>Salir</a></li>
                </ul>
            </div>
            <hr>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#info"><i class="icon-question"></i></a></li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content p-l-0 p-r-0">
            <div class="tab-pane active" id="menu">
                @yield('menu')
            </div>
            <div class="tab-pane p-l-15 p-r-15" id="info">
                {{--<form>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="list-unstyled question">
                    <li class="menu-heading">HOW-TO</li>
                    <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                    <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                    <li><a href="javascript:void(0);">Website Analytics</a></li>
                    <li class="menu-heading">ACCOUNT</li>
                    <li><a href="javascript:void(0);">Cearet New Account</a></li>
                    <li><a href="javascript:void(0);">Change Password?</a></li>
                    <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                    <li class="menu-heading">BILLING</li>
                    <li><a href="javascript:void(0);">Payment info</a></li>
                    <li><a href="javascript:void(0);">Auto-Renewal</a></li>
                    <li class="menu-button m-t-30">
                        <a href="javascript:void(0);" class="btn btn-primary"><i class="icon-question"></i> Need Help?</a>
                    </li>
                </ul>--}}
            </div>

        </div>
    </div>
</div>
