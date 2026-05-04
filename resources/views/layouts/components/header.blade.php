<!DOCTYPE html>
<html lang="en">

<body>
    <header>
        <nav>
            <div class="logo">
                <img class="logo1" src="{{ asset('images/asita-logo.png') }}" alt="Logo 1">
            </div>

            <div class="menu-toggle" id="menu-toggle">
                <i class="fa fa-bars"></i>
            </div>

            <div class="menu" id="menu">
                <a href="{{ route('home') }}" class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}">
                    Home
                </a>
                <div class="dropdown">
                    <a href="javascript:void(0)"
                        class="nav-link dropdown-toggle {{ Request::routeIs('about', 'vision-mission') ? 'active' : '' }}">
                        About <i class="fa fa-caret-down"></i>
                    </a>

                    <div class="dropdown-menu">
                        <a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'active' : '' }}">
                            ASITA Profile
                        </a>
                        <a href="{{ route('vision-mission') }}"
                            class="{{ Request::routeIs('vision-mission') ? 'active' : '' }}">
                            Vision & Mission
                        </a>
                        <a href="{{ route('how-to-join') }}"
                    class="nav-link {{ Request::routeIs('how-to-join') ? 'active' : '' }}">
                    How to Join
                </a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0)"
                        class="nav-link dropdown-toggle {{ Request::routeIs('e-katalog', 'active-member') ? 'active' : '' }}">
                        Membership <i class="fa fa-caret-down"></i>
                    </a>

                    <div class="dropdown-menu">
                        <a href="{{ route('e-katalog') }}" class="{{ Request::routeIs('e-katalog') ? 'active' : '' }}">
                            Showcase    
                        </a>
                        <a href="{{ route('active-member') }}"
                            class="{{ Request::routeIs('active-member') ? 'active' : '' }}">
                            Active Member
                        </a>
                    </div>
                </div>
                <a href="{{ route('berita') }}"
                    class="nav-link {{ Request::routeIs('berita') ? 'active' : '' }}">
                    Article
                </a>
                <a href="{{ route('contact') }}" class="nav-link {{ Request::routeIs('contact') ? 'active' : '' }}">
                    Contact
                </a>
                <div class="buttons-mobile">
                    @if(Auth::guard('web')->check())
                        {{-- Jika login sebagai Admin menggunakan guard 'web' --}}
                        <a href="{{ route('admin.dashboard') }}" class="btn">Dashboard Admin</a>
                    @elseif(Auth::guard('anggota')->check())
                        {{-- Jika login sebagai Anggota --}}
                        <a href="{{ route('profile-anggota') }}" class="btn-transparent">Profile Anggota</a>
                    @else
                        {{-- Jika belum login (Guest) - Tombol Login mengarah ke Anggota --}}
                        <a href="{{ route('anggota.login') }}" class="btn">Login</a>
                        <a href="{{ route('join-us') }}" class="btn-transparent">Join Us</a>
                    @endif
                </div>
            </div>

            <div class="buttons">
                @if(Auth::guard('web')->check())
                    {{-- Jika login sebagai Admin menggunakan guard 'web' --}}
                    <a href="{{ route('admin.dashboard') }}" class="btn">Dashboard Admin</a>
                @elseif(Auth::guard('anggota')->check())
                    {{-- Jika login sebagai Anggota --}}
                    <a href="{{ route('profile-anggota') }}" class="btn-transparent">Profile Anggota</a>
                @else
                    {{-- Jika belum login (Guest) - Tombol Login mengarah ke Anggota --}}
                    <a href="{{ route('anggota.login') }}" class="btn">Login</a>
                    <a href="{{ route('join-us') }}" class="btn-transparent">Join Us</a>
                @endif
            </div>
        </nav>
    </header>
</body>

</html>