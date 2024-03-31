<div class="bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
        <i class="fas me-w"></i><img src="assets/images/s_logo.jpg" alt="logo_sayuri" width="50" height="50">Sayuri
    </div>

    <div class="list-group list-group-flush my-3">
            <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action bg-transparent second-text active">
            <i class="fa-solid fa-house"></i> Dashboard
        </a>
            
        <a href="{{route('registration')}}" class="list-group-item list-group-item-action bg-transparent second-text active">
        <i class="fa-solid fa-download"></i> Registration
        </a>
        <a href="{{route('student')}}" class="list-group-item list-group-item-action bg-transparent second-text active">
        <i class="fa-sharp fa-solid fa-address-card" ></i> Student
        </a>
        <a href="{{route('exam')}}" class="list-group-item list-group-item-action bg-transparent second-text active">
            <i class="fa-regular fa-pen-to-square"></i> Exam Form
        </a>
        <a href="{{route('registeredstud')}}" class="list-group-item list-group-item-action bg-transparent second-text active">
            <i class="fa-regular fa-rectangle-list"></i> Registered Students
        </a>
        
        <a href="{{route('logout')}}" class="list-group-item list-group-item-action bg-transparent second-text active">
            <i class="fas fa-power-off me-2" ></i>Logout
        </a>
    </div>
</div>