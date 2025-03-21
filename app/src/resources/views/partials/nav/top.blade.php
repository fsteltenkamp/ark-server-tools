<nav class="navbar" role="navigation" aria-label="main navigation" style="border-bottom: 2px solid #939393;">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{route('frontend.dashboard')}}">
            {{$title ?? ''}}
        </a>
    </div>
    <div id="navTop" class="navbar-menu">
        <div class="navbar-start">
        </div>

        <div class="navbar-end">
            @livewire('auth.userMenu')
        </div>
    </div>
</nav>