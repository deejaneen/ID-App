@extends('layout.weblayout')

@section('adminpanel')
    <aside>
        <div class="sidebar">
            <a href="{{ route('home') }}" class="active">
                <span class=""><ion-icon name="grid-outline"></ion-icon>
                    <h3>Dashboard</h3>
                </span>
            </a>
            <a href="{{ route('createid') }}">
                <span class="">
                    <ion-icon name="id-card-outline"></ion-icon>
                    <h3>ID Application</h3>
                </span>
            </a>
            <a href="{{ route('adminpanel') }}">
                <span class=""><ion-icon name="build-outline"></ion-icon>
                    <h3>Admin Panel</h3>
                </span>
            </a>
            <a href="{{ route('login') }}">
                <span class=""><ion-icon name="log-out-outline"></ion-icon>
                    <h3>Logout</h3>
                </span>
            </a>
        </div>
    </aside>

    {{-- END OF ASIDE --}}


@endsection
