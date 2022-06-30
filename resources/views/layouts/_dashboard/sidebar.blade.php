
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
       <div class="nav">
         {{-- link:dashboard --}}
          <a class="nav-link active" href="{{route('dashboard.index')}}">
             <div class="sb-nav-link-icon">
                <i class="fas fa-tachometer-alt"></i>
             </div>
             Dashboard
          </a>
          <div class="sb-sidenav-menu-heading">Master</div>
 
          <a class="nav-link" href="#">
             <div class="sb-nav-link-icon">
                <i class="far fa-newspaper"></i>
             </div>
             Posts
          </a>

          {{-- menu:categories --}}
          <a class="nav-link" href="{{route('categories.index')}}">
             <div class="sb-nav-link-icon">
                <i class="fas fa-bookmark"></i>
             </div>
             Categories
          </a>
          <a class="nav-link" href="#">
             <div class="sb-nav-link-icon">
                <i class="fas fa-tags"></i>
             </div>
             Tags
          </a>
          <div class="sb-sidenav-menu-heading">User permission</div>
          <a class="nav-link" href="#">
             <div class="sb-nav-link-icon">
                <i class="fas fa-user"></i>
             </div>
             User
          </a>
          <a class="nav-link" href="#">
             <div class="sb-nav-link-icon">
                <i class="fas fa-user-shield"></i>
             </div>
             Role
          </a>
          <div class="sb-sidenav-menu-heading">Settings</div>
          <a class="nav-link" href="#">
             <div class="sb-nav-link-icon">
                <i class="fas fa-photo-video"></i>
             </div>
             File manager
          </a>
       </div>
    </div>
    <div class="sb-sidenav-footer">
       <div class="small">Logged in as:</div>
       <!-- show username -->
       {{ Auth::user()->name }}
    </div>
 </nav>
 