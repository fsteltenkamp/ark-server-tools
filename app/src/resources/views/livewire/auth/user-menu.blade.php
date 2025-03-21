<div class="navbar-item has-dropdown is-hoverable">
    <a class="navbar-link">{{$user->name}}</a>
    <div class="navbar-dropdown">
        <a class="navbar-item" href="{{route('frontend.profile')}}">Profile</a>
        <form method="POST" action="{{ route('web.auth.logout') }}">
            @csrf
            <a class="navbar-item" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
        </form>
    </div>
</div>