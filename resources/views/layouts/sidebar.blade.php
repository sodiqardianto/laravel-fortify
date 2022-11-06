<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="{{ route('dashboard') }}">
                <img class="hide-on-med-and-down " src="{{ asset('app-assets/images/logo/materialize-logo.png') }}" alt="materialize logo" />
                <img class="show-on-medium-and-down hide-on-med-and-up" src="{{ asset('app-assets/images/logo/materialize-logo-color.png') }}" alt="materialize logo" />
                <span class="logo-text hide-on-med-and-down">Materialize</span>
            </a>
            <a class="navbar-toggler" href="#">
                <i class="material-icons">radio_button_checked</i>
            </a>
        </h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
        <li class="bold">
            <a class="waves-effect waves-cyan {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}">
                <i class="material-icons">settings_input_svideo</i>
                <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
            </a>
        </li>
        <li class="navigation-header">
            <a class="navigation-header-text">Misc </a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold">
            <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
                <i class="material-icons">photo_filter</i>
                <span class="menu-title" data-i18n="Menu levels">Menu levels</span>
            </a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Second level">Second level</span></a>
                    </li>
                    <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Second level child">Second level child</span></a>
                        <div class="collapsible-body">
                            <ul class="collapsible" data-collapsible="accordion">
                                <li><a href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Third level">Third level</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>