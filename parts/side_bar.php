
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin_dashboard.php" style="height: 100px;">
<!--        <div class="sidebar-brand-icon">-->
<!--            <i class="fas fa-school"></i>-->
<!--        </div>-->
<!--        <div class="sidebar-brand-text mx-3">ABC International</div>-->
        <img src="img/logo.png" alt="" style="width: 100%">
    </a>


    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="admin_dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    <!-- Students -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true"
           aria-controls="collapse1">
            <i class="fas fa-fw fa-cog"></i>
            <span>Students</span>
        </a>
        <div id="collapse1" class="collapse" aria-labelledby="headingTwo"
             data-parent="#accordionSidebar">
            <div class="bg-gradient-light py-2 collapse-inner rounded">
                <a class="collapse-item" href="admin_student_registration.php">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Student Registration</span>
                </a>
                <a class="collapse-item" href="admin_global_list.php">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Registered Students</span>
                </a>
                <a class="collapse-item" href="admin_edit_student.php">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Edit Student</span>
                </a>
                <a class="collapse-item" href="admin_student_card.php">
                    <i class="fas fa-fw fa-id-card"></i>
                    <span>Student Management</span>
                </a>
                <a class="collapse-item" href="admin_schedule_rewrite.php">
                    <i class="fas fa-fw fa-pen"></i>
                    <span>Schedule Rewrite</span>
                </a>
                <a class="collapse-item" href="admin_student_certificate.php">
                    <i class="fas fa-fw fa-certificate"></i>
                    <span>Schedule Certificate</span>
                </a>
            </div>
        </div>
    </li>


    <!-- Instructors -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
           aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Instructors</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
             data-parent="#accordionSidebar">
            <div class="bg-gradient-light py-2 collapse-inner rounded">
                <a class="collapse-item" href="admin_add_instructor.php">
                    <i class="fas fa-fw fa-chalkboard-teacher"></i>
                    <span>Instructor Registration</span>
                </a>
                <a class="collapse-item" href="admin_instructor_list.php">
                    <i class="fas fa-fw fa-list-ol"></i>
                    <span>Registered Instructors</span>
                </a>
            </div>
        </div>
    </li>

    <!-- Courses -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true"
           aria-controls="collapse3">
            <i class="fas fa-fw fa-cog"></i>
            <span>Courses</span>
        </a>
        <div id="collapse3" class="collapse" aria-labelledby="heading3"
             data-parent="#accordionSidebar">
            <div class="bg-gradient-light py-2 collapse-inner rounded">
                <a class="collapse-item" href="admin_courses.php">
                    <i class="fas fa-fw fa-book-open"></i>
                    <span>Courses Management</span>
                </a>
                <a class="collapse-item" href="admin_linked_courses.php">
                    <i class="fas fa-fw fa-address-book"></i>
                    <span>Monthly Roster</span>
                </a>
            </div>
        </div>
    </li>

    <!-- Administration -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true"
           aria-controls="collapse4">
            <i class="fas fa-fw fa-cog"></i>
            <span>Administration</span>
        </a>
        <div id="collapse4" class="collapse" aria-labelledby="heading4"
             data-parent="#accordionSidebar">
            <div class="bg-gradient-light py-2 collapse-inner rounded">
                <a class="collapse-item" href="admin_users.php">
                    <i class="fas fa-fw fa-address-book"></i>
                    <span>Admin Users</span>
                </a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->