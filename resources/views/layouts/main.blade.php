@extends('layouts.app')
@section('content')
    <section class="dashboard">
        <aside class="sidebar">
            <a href="{{ route('index') }}" class="sidebar-logo"><img src="{{ asset('img/svg/logo-full.svg') }}" alt=""></a>
            <ul class="sidebar-nav">
                <li class="{{ request()->routeIs('posts') ? 'active' : '' }}">
                    <a href="{{ route('posts') }}">
                        <img src="{{ asset('img/svg/nav-2.svg') }}" alt=""><span>Posts</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-copy">
                datamaze © 2024<br>
                BASED IN Constellation Rd,<br>
                Santa Clarita, CA 91355
            </div>
            <div class="sidebar-toggle"></div>
        </aside>

        <main class="main">
            @include('layouts.includes.header')
            @yield('main_content')
        </main>
    </section>
@endsection
