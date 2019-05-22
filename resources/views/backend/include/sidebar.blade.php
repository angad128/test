    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ __('key.admin') }}</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{URL::to('/dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>{{ __('key.dashboard') }}</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">{{ __('key.interface') }}</div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/news/view')}}">
          <i class="fas fa-newspaper"></i>
          <span>{{ __('key.news') }}</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/legislations/view')}}">
          <i class="fas fa-balance-scale"></i>
          <span>{{ __('key.legislations') }}</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/notice/view')}}">
          <i class="fas fa-cogs"></i>
          <span>{{__('key.notice')}}</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/gallery/view')}}">
          <i class="fas fa-images"></i>
          <span>{{ __('key.gallery') }}</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/members/view')}}">
          <i class="fas fa-users"></i>
          <span>{{__('key.members')}}</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>



