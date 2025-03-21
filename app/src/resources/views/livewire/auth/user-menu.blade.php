<div class="navbar-item has-dropdown is-hoverable">
    <a class="navbar-link">{{$user->name}}</a>
    <div class="navbar-dropdown">
        <a class="navbar-item" href="{{route('frontend.profile')}}">Profile</a>
        <a class="navbar-item">Logout</a>
    </div>
</div>