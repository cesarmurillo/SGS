<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
        </div>
      </div>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menú Principal</li>
        <li class={{aa}}>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class={{a}} ng-click="a='active'; b=''; c=''; d=''; aa='treeview active'"><a href="#"><i class="fa fa-circle-o"></i>Sacramentos</a></li>
            <li class={{b}} ng-click="a=''; b='active'; c=''; d=''; aa='treeview active'""><a href="#"><i class="fa fa-circle-o"></i>Eventos</a></li>
            <li class={{c}} ng-click="a=''; b=''; c='active'; d=''; aa='treeview active'""><a href="#"><i class="fa fa-circle-o"></i>Misas y Celebraciones</a></li>
            <li class={{d}} ng-click="a=''; b=''; c=''; d='active'; aa='treeview active'""><a href="#"><i class="fa fa-circle-o"></i>Cursos</a></li>
          </ul>
        </li>
        <li class={{bb}}>
          <a href="#">
            <i class="fa fa-rebel"></i> <span>Sacramentos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class={{mm}}>
              <a href="#"><i class="fa fa-circle-o"></i>Bautizmo
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class={{p}} ng-click="p='active'; q=''; bb='treeview active'; mm='active'"><a href="#"><i class="fa fa-circle-o"></i>Crear Nuevo Registro</a></li>
                <li class={{q}} ng-click="p=''; q='active'; bb='treeview active'; mm='active'"><a href="#"><i class="fa fa-circle-o"></i>Ver Registros</a></li>
              </ul>
            </li>
            <li class={{nn}}>
              <a href="#"><i class="fa fa-circle-o"></i>Primera Comunión
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class={{r}} ng-click="r='active'; s=''; bb='treeview active'; nn='active'"><a href="#"><i class="fa fa-circle-o"></i>Crear Nuevo Registro</a></li>
                <li class={{s}} ng-click="r=''; s='active'; bb='treeview active'; nn='active'"><a href="#"><i class="fa fa-circle-o"></i>Ver Registros</a></li>
              </ul>
            </li>
            <li class={{oo}}>
              <a href="#"><i class="fa fa-circle-o"></i>Confirmación
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class={{t}} ng-click="t='active'; u=''; bb='treeview active'; oo='active'"><a href="#"><i class="fa fa-circle-o"></i>Crear Nuevo Registro</a></li>
                <li class={{u}} ng-click="t=''; u='active'; bb='treeview active'; oo='active'"><a href="#"><i class="fa fa-circle-o"></i>Ver Registros</a></li>
              </ul>
            </li>
            <li class={{pp}}>
              <a href="#"><i class="fa fa-circle-o"></i>Matrimonio
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class={{v}} ng-click="v='active'; w=''; bb='treeview active'; pp='active'"><a href="#"><i class="fa fa-circle-o"></i>Crear Nuevo Registro</a></li>
                <li class={{w}} ng-click="v=''; w='active'; bb='treeview active'; pp='active'"><a href="#"><i class="fa fa-circle-o"></i>Ver Registros</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class={{cc}}>
          <a href="#">
            <i class="fa fa-houzz"></i> <span>Iglesias</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class={{e}} ng-click="e='active'; f=''; cc='treeview active'"><a href="#"><i class="fa fa-circle-o"></i>Crear Nuevo Registro</a></li>
            <li class={{f}} ng-click="e=''; f='active'; cc='treeview active'"><a href="#"><i class="fa fa-circle-o"></i>Ver Iglesias</a></li>
          </ul>
        </li>
        <li class={{dd}}>
          <a href="#">
            <i class="fa fa-user"></i> <span>Sacerdotes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class={{g}} ng-click="g='active'; h=''; dd='treeview active'"><a href="#"><i class="fa fa-circle-o"></i>Crear Nuevo Registro</a></li>
            <li class={{h}} ng-click="g=''; h='active'; dd='treeview active'"><a href="#"><i class="fa fa-circle-o"></i>Ver Sacerdotes</a></li>
          </ul>
        </li>
        <li class={{ee}}>
          <a href="#">
            <i class="fa fa-star"></i> <span>Misas y Celebraciones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class={{i}} ng-click="i='active'; j=''; ee='treeview active'"><a href="#"><i class="fa fa-circle-o"></i>Registrar Nueva Misa</a></li>
            <li class={{j}} ng-click="i=''; j='active'; ee='treeview active'"><a href="#"><i class="fa fa-circle-o"></i>Ver Misas y Celebraciones</a></li>
          </ul>
        </li>
        <li class={{ff}}>
          <a href="#">
            <i class="fa fa-users"></i> <span>Catequistas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class={{k}} ng-click="k='active'; l=''; ff='treeview active'"><a href="#"><i class="fa fa-circle-o"></i>Añadir Nuevo Catequista</a></li>
            <li class={{l}} ng-click="k=''; l='active'; ff='treeview active'"><a href="#"><i class="fa fa-circle-o"></i>Ver Catequistas</a></li>
          </ul>
        </li>
        <li class={{gg}}>
          <a href="#">
            <i class="fa fa-object-group"></i> <span>Cursos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class={{m}} ng-click="m='active'; n=''; gg='treeview active'"><a href="#"><i class="fa fa-circle-o"></i>Crear Nuevo Curso</a></li>
            <li class={{n}} ng-click="m=''; n='active'; gg='treeview active'"><a href="#"><i class="fa fa-circle-o"></i>Ver Cursos</a></li>
          </ul>
        </li>

        <li class="header">Administración</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Registro de Usuarios</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Ingresos al Sistema</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Información de Actividad</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>