<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      <strong>POINT</strong> OF SALES
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      
      <li class="nav-item {{ ($activePage == 'supplier' || $activePage == 'pelanggan' || $activePage == 'sales') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/angular.png"></i>
          <p>{{ __('Master') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
          <li class="nav-item{{ $activePage == 'supplier' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('supplier') }}">
              <i class="material-icons">supervised_user_circle</i>
                <p>Supplier</p>
            </a>
          </li>
          <li class="nav-item{{ $activePage == 'pelanggan' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('pelanggan') }}">
              <i class="material-icons">supervisor_account</i>
                <p>Pelanggan</p>
            </a>
          </li>
          <li class="nav-item{{ $activePage == 'sales' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('sales') }}">
              <i class="material-icons">face</i>
                <p>Sales</p>
            </a>
          </li>
          <li class="nav-item{{ $activePage == 'produk' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('produk') }}">
              <i class="material-icons">layers</i>
                <p>Item</p>
            </a>
          </li>
          <li class="nav-item{{ $activePage == 'merk' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('merk') }}">
              <i class="material-icons">layers</i>
                <p>Merk</p>
            </a>
          </li>
          <li class="nav-item{{ $activePage == 'jenis' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('jenis') }}">
              <i class="material-icons">layers</i>
                <p>Jenis</p>
            </a>
          </li>
          <li class="nav-item{{ $activePage == 'satuan' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('satuan') }}">
              <i class="material-icons">layers</i>
                <p>Satuan</p>
            </a>
          </li>
          </ul>
        </div>
      </li>

      
      

      
      <!-- <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Laravel Examples') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li> -->
    </ul>
  </div>
</div>