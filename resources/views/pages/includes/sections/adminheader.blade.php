<div class="header">
    <div class="wrapper">
        <div class="brand">
            <a href="{{ url('/') }}"><img src="{{ url('assets/img/logo.png') }}" alt="logo"></a>
        </div>
        <nav class="navigation-items">
            <div class="wrapper">
                <ul class="main-navigation navigation-top-header"></ul>
                <ul class="user-area">
                    <li><a href="{{ url('/dashboard') }}"  style="font-size: 14px;"><strong>Dashboard</strong></a></li>

                @if(count(Auth::user()->companies) > 0)
                        <li><a href="{{ url('/users/businesses') }}"  style="font-size: 14px;"><strong>My Business</strong></a></li>
                        @else
                        <li><a href="{{ url('/dashboard') }}" style="font-size: 14px;"><strong>Add a Business</strong></a></li>
                    @endif
                        <li><a href="{{ url('/users/Profile') }}" style="font-size: 14px;"><strong>Profile</strong></a></li>
                   </ul>

                <a href="{{ url('/logout') }}" class="submit-item">
                    <div class="content"><span>Logout</span></div>
                    <div class="icon">
                        <i class="fa fa-lock"></i>
                    </div>
                </a>
            </div>
        </nav>
    </div>
</div>