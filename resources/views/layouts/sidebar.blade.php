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
       <li><a href="{{ route('pesanan') }}"><i class="fa fa-money"></i> Pesanan</a></li>
       </li>
       <li><a href="{{ route('feedback') }}"><i class="fa fa-comment"></i> Feedback Perental</a></li>
       <li><a href="{{ route('perental') }}"><i class="fa fa-user"></i>Perental</a></li>
       
      </ul>
    </section>
</aside>