@extends('layout.weblayout')

@section('createid')
    <div class="create-id-main-container">
        <aside>
            <div class="sidebar">
                <a href="{{ route('home') }}" class="">
                    <span class=""><ion-icon name="grid-outline"></ion-icon>
                        <h3>Dashboard</h3>
                    </span>
                </a>
                <a href="{{ route('createid') }}" class="active">
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
        <main>
            <div class="create-id-container">
                <div class="button-section">
                    <button class="btn-create btn btn-primary btn-lg rounded-pill">
                        Create
                    </button>
                    <button class="btn-edit btn btn-primary btn-lg rounded-pill">
                        Edit
                    </button>
                </div>
                <div class="id-section">
                    <div class="slsu-section">
                        <h5 class="fname">SLSU</h5>
                    </div>
                    <div class="name-section">
                        <h5 class="fname">test</h5>
                        <h5 class="mname">test</h5>
                        <h5 class="lname">test</h5>
                        <h5 class="suffix">test</h5>
                    </div>
                    <div class="id-number-section">
                        <h5 class="idnumber">test</h5>
                    </div>
                    <div class="department-section">
                        <h5 class="department">test</h5>
                    </div>
                    <div class="course-section">
                        <h5 class="course">test</h5>
                    </div>
                </div>
                <div class="id-info">
                    <h3 class="id-info-label">ID Information</h3>
                </div>
            </div>
        </main>
    </div>
@endsection
