<ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{url('/admin/dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Contact Us</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         
          <li>
            <a href="{{url('/admin/contact-us')}}">
              <i class="bi bi-circle"></i><span>view</span>
            </a>
          </li>
       
         
        </ul>
      </li>
       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>News Letter</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         
          <li>
            <a href="{{url('/admin/newsletter')}}">
              <i class="bi bi-circle"></i><span>view</span>
            </a>
          </li> 
        </ul>
      </li>
      <!-- End Components Nav -->



      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Inquiry</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('/admin/enquiries')}}">
              <i class="bi bi-circle"></i><span>view</span>
            </a>
          </li>
          
        </ul>
      </li> -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Request Quote</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('/admin/request-quote')}}">
              <i class="bi bi-circle"></i><span>view</span>
            </a>
          </li>
          
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#blog-master-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Blog Master</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="blog-master-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('blog-categories.index') }}">
              <i class="bi bi-circle"></i><span>Blog Categories</span>
            </a>
          </li>
          <li>
            <a href="{{ route('blogs.index') }}">
              <i class="bi bi-circle"></i><span>Blogs</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Charts Nav -->

     

     

    </ul>
