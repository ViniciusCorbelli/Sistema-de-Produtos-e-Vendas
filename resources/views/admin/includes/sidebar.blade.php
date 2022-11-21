<aside class="main-sidebar elevation-4 sidebar-dark-primary"  style="overflow-x: hidden;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Banco de Dados - DCC 060</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Usuário</a>
        </div>
        <div class="info align-self-center">
          <form id="logout-form" method="post" action="{{ route('logout') }}">
              @csrf
              <a href="#" onclick="$('#logout-form').submit()" class="d-block"><i class="nav-icon fas fa-power-off"></i></a>
          </form>
      </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="/home" class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

            <li class="nav-item has-treeview ">
              <a href="{{ route('users.index') }}" class="nav-link {{ Route::is('user*') ? 'active' : '' }}">
                <i class="nav-icon fa fa-user"></i>
                <p>
                  Usuários
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview ">
              <a href="{{ route('categories.index') }}" class="nav-link {{ Route::is('categories*') ? 'active' : '' }}">
                <i class="nav-icon fa fa-sitemap"></i>
                <p>
                  Categorias
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview ">
              <a href="{{ route('brands.index') }}" class="nav-link {{ Route::is('brands*') ? 'active' : '' }}">
                <i class="nav-icon fa fa-copyright"></i>
                <p>
                  Marcas
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview ">
              <a href="{{ route('products.index') }}" class="nav-link {{ Route::is('products*') ? 'active' : '' }}">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>
                  Produtos
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview ">
              <a href="{{ route('payments.index') }}" class="nav-link {{ Route::is('payments*') ? 'active' : '' }}">
                <i class="nav-icon fa fa-credit-card"></i>
                <p>
                  Pagamentos
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview ">
              <a href="{{ route('coupons.index') }}" class="nav-link {{ Route::is('coupons*') ? 'active' : '' }}">
                <i class="nav-icon fa fa-times"></i>
                <p>
                  Cupons
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview ">
              <a href="{{ route('sales.index') }}" class="nav-link {{ Route::is('sales*') ? 'active' : '' }}">
                <i class="nav-icon fa fa-shopping-cart"></i>
                <p>
                  Vendas
                </p>
              </a>
            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>