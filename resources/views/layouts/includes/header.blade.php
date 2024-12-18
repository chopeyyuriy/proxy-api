<div class="main-header">
    <ul class="main-header__nav">
        <li class="{{ request()->routeIs('posts') ? 'active' : '' }}"><a href="{{ route('posts') }}">Posts</a></li>
    </ul>
    <div class="main-header__user">
        <div class="main-header__user-avatar">JD</div>
        <div class="main-header__user-info">
            <p>First Name</p>
            <span>Admin</span>
        </div>
    </div>
</div>
