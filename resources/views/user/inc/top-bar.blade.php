<div class="myAccount-profile">
    <div class="row align-items-center">
        <div class="col-lg-4 col-md-5">
            <div class="profile-image">
                <img src="{{ asset(Auth::user()->image) }}" alt="image">
            </div>
        </div>
        @php
              $exist = App\Models\AdditionalInfo::where('user_id',Auth::id())->first();
              $info = App\Models\AdditionalInfo::with('users')->where('user_id',Auth::id())->first();
        @endphp
        <div class="col-lg-8 col-md-7">
            <div class="profile-content">
                <h3>{{ ucwords(Auth::user()->name) }}</h3>
                <ul class="contact-info">
                    @if ($exist)
                    <li><i class='bx bx-envelope'></i> <a href="#">{{ Auth::user()->email }}</a></li>
                    <li><i class='bx bx-phone'></i> <a href="#">{{ Auth::user()->phone }}</a></li>
                    <li><i class='bx bxs-dashboard'></i> <a href="#">{{ ucwords($info->institute) }}</a></li>
                    <li><i class='bx bxs-dashboard'></i> <a href="#">{{ ucwords($info->address) }}</a></li>
                    <li><i class='bx bxs-dashboard'></i> <a href="#">{{ ucwords($info->country) }}.</a></li>
                    @else
                    <li><i class='bx bx-envelope'></i> <a href="#">{{ Auth::user()->email }}</a></li>
                    <li><i class='bx bx-phone'></i> <a href="#">{{ Auth::user()->phone }}</a></li>
                    @endif
                </ul>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="myAccount-logout"><i class='bx bx-log-out'></i> Logout</a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </div>
        </div>
    </div>
</div>
<div class="myAccount-navigation">
    <ul>
        <li><a href="{{ route('user.dashboard') }}" class="@yield('dashboard')"><i class='bx bxs-dashboard'></i> Home</a></li>
        <li><a href="{{ route('user-orders') }}" class="@yield('user-orders')"><i class='bx bx-cart'></i> Orders</a></li>
        <li><a href="{{ route('user-course') }}" class="@yield('course')"><i class='bx bxs-dashboard'></i> Enroll Courses</a></li>
        <li><a href="{{ route('edit-profile') }}" class="@yield('edit-profile')"><i class='bx bx-edit'></i> Edit Profile</a></li>
        <li><a href="{{ route('additional-info') }}" class="@yield('additional-info')"><i class='bx bx-edit'></i> Additional Info</a></li>
        <li><a href="{{ route('user-password') }}" class="@yield('additional-info')"><i class='bx bx-edit'></i> Change Password</a></li>
    </ul>
</div>