<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{asset('img/logo/logo.png')}}" rel="icon">
  <title>Datahub</title>
  <link href="{{url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('css/ruang-admin.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/super_admin">
        <div class="sidebar-brand-icon">
          <img src="{{asset('img/logo/logo.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3"></div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="/super_admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        office
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Projects</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Project Module</h6>
            <a class="collapse-item" href="/project">Create Project</a>
            <a class="collapse-item" href="/project_list">View Projects</a>
            <a class="collapse-item" href="/project_docs">Project Docs</a>
         
           
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Document</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Docs Module</h6>
            <a class="collapse-item" href="programme">Create Program</a>
            <a class="collapse-item" href="programme_list">All Programs</a>
            <a class="collapse-item" href="document">Add document</a>
          
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Expense Module</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Expense Module</h6>
            <a class="collapse-item" href="/expense">Create Expense</a>
            <a class="collapse-item" href="/expense_list">All Expenses</a>
            <a class="collapse-item" href="/period_list">Report</a>
            
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsemale" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-male"></i>
          <span>Employee Module</span>
        </a>
        <div id="collapsemale" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Employee</h6>
            <a class="collapse-item" href="/employee">Create Employee</a>
            <a class="collapse-item" href="employee_list">All Employess</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetrainee" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-user"></i>
          <span>Training Module</span>
        </a>
        <div id="collapsetrainee" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Training</h6>
            <a class="collapse-item" href="/training">Create Training</a>
            <a class="collapse-item" href="/training_list">All Trainings</a>
            <a class="collapse-item" href="/trainee">Add Traininee</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseattendence" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-thumbs-up"></i>
          <span>Attendence Module</span>
        </a>
        <div id="collapseattendence" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Attendence</h6>
            <a class="collapse-item" href="/attendence">Add Attendences</a>
            <a class="collapse-item" href="/attendence_list">Attendence List</a>
           
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseregion" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-cloud"></i>
          <span>Region Module</span>
        </a>
        <div id="collapseregion" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Region</h6>
            <a class="collapse-item" href="/region">Add Regions</a>
            <a class="collapse-item" href="/region_list">All Regions</a>
           
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseorganization" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-clock"></i>
          <span>Organization Module</span>
        </a>
        <div id="collapseorganization" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Organization</h6>
            <a class="collapse-item" href="/organization">Add Organization</a>
            <a class="collapse-item" href="/organization_list">All Organizations</a>
           
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesalary" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-clock"></i>
          <span>Salary Module</span>
        </a>
        <div id="collapsesalary" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Salary</h6>
            <a class="collapse-item" href="/salary">Add Salary</a>
            <a class="collapse-item" href="/salary_list">All Records</a>
           
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetimemodule" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-clock"></i>
          <span>Time Module</span>
        </a>
        <div id="collapsetimemodule" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Time Module</h6>
            <a class="collapse-item" href={{ route('time_module.create') }}>Create</a>
            <a class="collapse-item" href={{ url('/time_module') }}>List</a>
           
          </div>
        </div>
      </li>
      
     
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Role Module
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-file"></i>
          <span>Task Management</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Task Module</h6>
            <a class="collapse-item" href="task">Add Task</a>
            <a class="collapse-item" href="task_list">Task List</a>
            <a class="collapse-item" href="task_view">View Task</a>
          </div>
        </div>
      </li>
     
     
      <hr class="sidebar-divider">
    
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search" action="search" method="post">
                @csrf
                  <div class="input-group">
                  <input type="text"  name="phone" placeholder="Example:01770137655" value="{{old('phone')}}" class="form-control" />
                    <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Search</button>
                        
                    
                    </div>
                  </div>
                </form>
              </div>
            </li>
           

            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="public/images/{{ Auth::user()->filename }}" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">{{ Auth::user()->name }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="/profile">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="/change_password">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Password
                </a>
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        @yield('content')

            <!-- Area Chart -->

            <!-- Message From Customer-->
        </div>

          <!--Row-->



          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Sorry to see you go!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="/logout" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="baybdtech.com" target="_blank">BayBD</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{url('js/ruang-admin.min.js')}}"></script>
  <script src="{{url('vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{url('js/demo/chart-area-demo.js')}}"></script>
</body>
</html>
