<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ route('mitra.home') }}"> <img alt="image" src="{{url('otika/assets/img/logo.png')}}" class="header-logo" /> <span
            class="logo-name">Mitra</span>
        </a>
      </div>

    @if (App\Role_User::where('user_id', auth()->user()->id)->first()->role_id == 4)
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown {{ request()->is('mitra') ? 'active' : '' }}">
          <a href="{{ route('mitra.home') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>

        <li class="dropdown {{ request()->is('mitra') ? 'active' : '' }}">
          <a href="{{ route('kandidat.kandidat.lowongan') }}" class="nav-link"><i data-feather="grid"></i><span>Kandidat</span></a>
        </li>
    @endif


    @if (App\Role_User::where('user_id', auth()->user()->id)->first()->role_id == 3)
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown {{ request()->is('mitra') ? 'active' : '' }}">
          <a href="{{ route('mitra.home') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>


        <li class="dropdown {{ request()->is('mitra/profil') || request()->is('mitra/profil/*') ? 'active' : '' }}">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="list"></i><span>Profil Perusahaan</span></a>
          <ul class="dropdown-menu">
            <li class="{{ request()->is('mitra/profil') || request()->is('mitra/profil/*') ? 'active' : '' }}"><a class="nav-link"  href="{{ route('mitra.profil.index') }}"><i data-feather="file"></i><span>Profil</span></a></li>
            <li><a class="nav-link" href="#"><i data-feather="grid"></i><span>Deskripsi</span></a></li>


        </ul>
        </li>
        <li class="dropdown {{ request()->is('mitra/lowongan') || request()->is('mitra/lowongan/*') ? 'active' : '' }} {{ request()->is('mitra/kandidat') || request()->is('mitra/kandidat/*') ? 'active' : '' }}">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="shopping-cart"></i><span>Lowongan</span></a>
            <ul class="dropdown-menu">
              <li class="{{ request()->is('mitra/lowongan') || request()->is('mitra/lowongan/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('mitra.lowongan.index') }}"><i data-feather="file"></i><span>Daftar Lowongan</span></a></li>
              <li class="{{ request()->is('mitra/kandidat') || request()->is('mitra/kandidat/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('mitra.kandidat.index') }}"><i data-feather="grid"></i><span>Daftar Kandidat</span></a></li>
            </ul>
        </li>
          <li><a class="nav-link" href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>

        <li class="menu-header">Dashboard Client</li>
        <li class="dropdown"><a href="#" class="nav-link"><i data-feather="users"></i><span>User Account</span></a></li>
        <li class="dropdown {{ request()->is('mitra/topup') || request()->is('mitra/topup/*') ? 'active' : '' }}"><a href="{{ route('mitra.topup.index') }}" class="nav-link"><i class="fas fa-coins" style="margin: 0px 10px 0px -4px;"></i><span>Top Up Coin</span></a></li>
        <li class="dropdown"><a href="#" class="nav-link"><i data-feather="circle"></i><span>Logo Perusahaan</span></a></li>

      </ul>
    @endif
    </aside>
</div>

<!-- setting tema-->
    <div class="settingSidebar">
            <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
            </a>
            <div class="settingSidebar-body ps-container ps-theme-default">
              <div class=" fade show active">
                <div class="setting-panel-header">Setting Panel
                </div>
                <div class="p-15 border-bottom">
                  <h6 class="font-medium m-b-10">Select Layout</h6>
                  <div class="selectgroup layout-color w-50">
                    <label class="selectgroup-item">
                      <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                      <span class="selectgroup-button">Light</span>
                    </label>
                    <label class="selectgroup-item">
                      <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                      <span class="selectgroup-button">Dark</span>
                    </label>
                  </div>
                </div>
                <div class="p-15 border-bottom">
                  <h6 class="font-medium m-b-10">Sidebar Color</h6>
                  <div class="selectgroup selectgroup-pills sidebar-color">
                    <label class="selectgroup-item">
                      <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                      <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                        data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                    </label>
                    <label class="selectgroup-item">
                      <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                      <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                        data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                    </label>
                  </div>
                </div>
                <div class="p-15 border-bottom">
                  <h6 class="font-medium m-b-10">Color Theme</h6>
                  <div class="theme-setting-options">
                    <ul class="choose-theme list-unstyled mb-0">
                      <li title="white" class="active">
                        <div class="white"></div>
                      </li>
                      <li title="cyan">
                        <div class="cyan"></div>
                      </li>
                      <li title="black">
                        <div class="black"></div>
                      </li>
                      <li title="purple">
                        <div class="purple"></div>
                      </li>
                      <li title="orange">
                        <div class="orange"></div>
                      </li>
                      <li title="green">
                        <div class="green"></div>
                      </li>
                      <li title="red">
                        <div class="red"></div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="p-15 border-bottom">
                  <div class="theme-setting-options">
                    <label class="m-b-0">
                      <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                        id="mini_sidebar_setting">
                      <span class="custom-switch-indicator"></span>
                      <span class="control-label p-l-10">Mini Sidebar</span>
                    </label>
                  </div>
                </div>
                <div class="p-15 border-bottom">
                  <div class="theme-setting-options">
                    <label class="m-b-0">
                      <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                        id="sticky_header_setting">
                      <span class="custom-switch-indicator"></span>
                      <span class="control-label p-l-10">Sticky Header</span>
                    </label>
                  </div>
                </div>
                <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                  <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                    <i class="fas fa-undo"></i> Restore Default
                  </a>
                </div>
              </div>
            </div>
    </div>
