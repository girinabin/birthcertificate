<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('img/municipality.png') }}" alt="Municipality Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
      @if(Auth::user()->healthPost)
      <span class="brand-text font-weight-light">{{ Auth::user()->healthPost->healthPostName }}</span>
      @else
      <span class="brand-text font-weight-light">{{ Auth::user()->municipality->municipalityNameInNepali }}</span>

      @endif
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('img/user.png') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="{{ route('dashboard') }}" class="d-block">{{ Auth::user()->roles->first()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @can('superAdmin', App\User::class)
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-school"></i>
            <p>
              HealthPost
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">

              <a href="{{ route('healthPost.index') }}" class="nav-link  ">
                <i class="fas fa-eye"></i>
                <p>View HealthPost</p>
              </a>
            </li>
          </ul>
        </li>
        @endcan
        
        @can('admin', App\BirthApplicationForm::class)
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-school"></i>
            <p>
              BirthApplicationForm
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">

              <a href="{{ route('birthApplicationForm.index') }}" class="nav-link  ">
                <i class="fas fa-eye"></i>
                <p>View Form</p>
              </a>
            </li>
          </ul>
        </li>
        @endcan

        @can('superAdmin', App\CertificateOfBirth::class)
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-school"></i>
            <p>
              Application Request
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">

              <a href="{{ route('birthapplicationrequest.index') }}" class="nav-link  ">
                <i class="fas fa-eye"></i>
                <p>View form</p>
              </a>
            </li>
          </ul>
        </li>
        @endcan
        

        @can('superAdmin', App\CertificateOfBirth::class)
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-school"></i>
            <p>
              BirthCertificate
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">

              <a href="{{ route('birthcertificate.index') }}" class="nav-link  ">
                <i class="fas fa-eye"></i>
                <p>View form</p>
              </a>
            </li>
          </ul>
        </li>
        @endcan


        

       

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>