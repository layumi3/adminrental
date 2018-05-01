<aside class="main-sidebar">
    <section class="sidebar">    
        <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
       <li class="treeview">
          <a href="#">
            <i class="fa fa-address-card-o"></i> <span>Member</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('perental') }}"><i class="fa fa-user"></i> Perental</a></li>
            <li><a href="../../index2.html"><i class="fa fa-address-book-o"></i> Agen</a></li>
            <li><a href="../../index2.html"><i class="fa fa-address-book-o"></i>Blok Member</a></li>
          </ul>
        </li>
       <li class="treeview">
          <a href="{{ route('produk') }}">
            <i class="fa fa-product-hunt"></i> <span>Produk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('produk') }}"><i class="fa fa-bicycle"></i> Sepeda</a></li>
            <li><a href="../../index2.html"><i class="fa fa-motorcycle"></i> Motor</a></li>
            <li><a href="../../index2.html"><i class="fa fa-car"></i> Mobil</a></li>
            <li><a href="../../index2.html"><i class="fa fa-bus"></i> Mini Bus</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-check-square"></i> <span>Verifikasi Kendaraan</span>
          </a>
        </li>
       <li class="treeview">
          <a href="{{ route('order') }}">
            <i class="fa fa-dashboard"></i> <span>Order</span>
          </a>
       </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>Konfirmasi pembayaran</span>
          </a>
        </li>
       <li class="treeview">
          <a href="#">
            <i class="fa fa-tag"></i> <span>Feedback</span>
          </a>
        </li>
<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i> <span>User</span>
          </a>
        </li> -->
       
      </ul>
<!--         <ul class="sidebar-menu" data-widget="tree">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Categories</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-circle-o"></i>Add Category</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i>All Categories</a></li>
                </ul>
            </li> 
        </ul> -->
    </section>
</aside>