<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Slider</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('new_slide')}}">Crear nuevo</a></li>
                    <li><a href="{{ url('slides')}}">Ver todos</a></li>
                </ul>
            </li>
            <li><a href="#"><i class='fa fa-link'></i> <span>Slider</span></a></li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
