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
                <div class="department-course-section">
                    <div class="dcs-department">
                        <h3 class="input-label">Department</h3>
                        <div class="dropdown-center department">
                            <button id="dropdownToggle" class="btn btn-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false" style="min-width: 100%;">
                                Department
                            </button>
                            <ul class="dropdown-menu" style="min-width: 100%;">
                                <li><a class="dropdown-item" href="javascript:void(0);"
                                        data-value="COA Employee">Test1</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);"
                                        data-value="Non - COA">Test2</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dcs-course">
                        <h3 class="input-label">Course</h3>
                        <div class="dropdown-center course">
                            <button id="dropdownToggle" class="btn btn-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false" style="min-width: 100%;">
                                Course
                            </button>
                            <ul class="dropdown-menu" style="min-width: 100%;">
                                <li><a class="dropdown-item" href="javascript:void(0);"
                                        data-value="COA Employee">Test1</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);"
                                        data-value="Non - COA">Test2</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="id-section">
                    <div class="slsu-section">
                        <h5 class="fname">SLSU</h5>
                        <small class=""></small>
                    </div>
                    <div class="name-section">
                        <h5 class="fname">First Name</h5>
                        <small class="fname">First Name</small>
                        <h5 class="mname">Middle Name</h5>
                        <small class="mname">Middle Name</small>
                        <h5 class="lname">Last Name</h5>
                        <small class="lname">Last Name</small>
                        <h5 class="suffix">Suffix</h5>
                        <small class="suffix">Suffix</small>
                    </div>
                    <div class="id-number-section">
                        <h5 class="idnumber">ID Number</h5>
                        <small class="idnumber">ID Number</small>
                    </div>
                    <div class="department-section">
                        <h5 class="department">Department</h5>
                        <small class="department">Department</small>
                    </div>
                    <div class="course-section">
                        <h5 class="course">Course</h5>
                        <small class="course">Course</small>
                    </div>
                </div>
                <div class="id-info">
                    <div class="id-info-name-section">
                        <div class="input-fname">
                            <h3 class="input-label">First Name</h3>
                            <input type="text">
                        </div>
                        <div class="input-mname">
                            <h3 class="input-label">Middle Name</h3>
                            <input type="text">
                        </div>
                        <div class="input-lname">
                            <h3 class="input-label">Last Name</h3>
                            <input type="text">
                        </div>
                        <div class="input-suffix">
                            <h3 class="input-label">Suffix</h3>
                            <input type="text">
                        </div>
                    </div>
                    <div class="id-info-number-section">
                        <div class="input">
                            <h3 class="input-label">ID Number</h3>
                            <input type="text">
                        </div>
                    </div>
                    <div class="id-info-department-section">
                        <div class="input">
                            <h3 class="input-label">Department</h3>
                            <input type="text" disabled>
                        </div>
                    </div>
                    <div class="id-info-course-section">
                        <div class="input">
                            <h3 class="input-label">Course</h3>
                            <input type="text" disabled>
                        </div>
                    </div>
                    <div class="id-info-button-section">
                        <button class="btn-create btn btn-primary btn-lg rounded-pill">
                            Create
                        </button>
                        <button class="btn-create btn btn-primary btn-lg rounded-pill">
                            Clear
                        </button>
                    </div>
                    <h2 class="id-info-label">ID Information</h2>
                </div>
            </div>
        </main>
    </div>
    
@endsection
