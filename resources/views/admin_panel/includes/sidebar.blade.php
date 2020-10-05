<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/admin_panel/img/profile_icon.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p> {{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                <i class="fa fa-book"></i>
                <span>Category</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" {{ route('view.category') }} "><i class="fa fa-book"></i> View All Category</a></li>
                    <li><a href=" {{ route('add.category') }} "><i class="fa fa-check-square-o"></i> Add New Category</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                <i class="fa fa-book"></i>
                <span>Videos</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" {{ route('view.video') }} "><i class="fa fa-book"></i> View All Video</a></li>
                    <li><a href=" {{ route('add.video') }} "><i class="fa fa-check-square-o"></i> Add New Video</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>