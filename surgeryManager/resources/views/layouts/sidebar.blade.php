<!--/. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a class="active-menu" href="{{ route('home') }}"><i class="fa fa-dashboard"></i> {{ __('messages.main.sidebar.dashboard')}} </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop"></i> {{ __('messages.main.sidebar.appointments') }}</a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('appointments') }}"> {{ __('messages.main.sidebar.list') }} </a>
                    </li>
                    <li>
                        <a href="{{ url('appointments/create') }}"> {{ __('messages.main.sidebar.create') }} </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop"></i> {{ __('messages.main.sidebar.surgeries') }}</a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"> {{ __('messages.main.sidebar.list') }} </a>
                    </li>
                    <li>
                        <a href="#"> {{ __('messages.main.sidebar.create') }} </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop"></i> {{ __('messages.main.sidebar.patients') }}</a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('patients') }}"> {{ __('messages.main.sidebar.list') }} </a>
                    </li>
                    <li>
                        <a href="{{ url('patients/create') }}"> {{ __('messages.main.sidebar.create') }} </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop"></i> {{ __('messages.main.sidebar.places') }}</a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('places') }}"> {{ __('messages.main.sidebar.list') }} </a>
                    </li>
                    <li>
                        <a href="{{ url('places/create') }}"> {{ __('messages.main.sidebar.create') }} </a>
                    </li>
                </ul>
            </li>
            <!--
            <li>
                <a href="#"><i class=""></i>Next Item</a>
            </li>
            -->
        </ul>

    </div>

</nav>

<div id="page-wrapper">
    <div id="page-inner">

        <div class="panel panel-default">

            <div class="panel-body">
