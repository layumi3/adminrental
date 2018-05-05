<aside class="main-sidebar">
    <section class="sidebar">    
        <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
<!--         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li> -->
        <li><a href="{{ route('member') }}">
        <i class="fa fa-address-card-o" ></i> <span> Member </span></a>
      </li>
       <li class="treeview">
          <a href="{{ route('produk') }}">
            <i class="fa fa-product-hunt"></i> <span>Produk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
<!--             <li><a href="{{ route('produk') }}"><i class="fa fa-bicycle"></i> Sepeda</a></li> -->
            <li><a href="{{ route('produk') }}""><i class="fa fa-motorcycle"></i>Motor</a></li>
            <li><a href="{{ route('produkcar') }}"><i class="fa fa-car"></i>Mobil</a></li>
<!--             <li><a href="../../index2.html"><i class="fa fa-bus"></i> Mini Bus</a></li> -->
            <li><a href="{{ route('produkvalidasi') }}"><i class="fa fa-car"></i>Validasi Kendaraan</a></li>
          </ul>
        </li>
       <li><a href="{{ route('order') }}"><i class="fa fa-cart-plus"></i> Pesanan</a></li>
       <li><a href="{{ route('order.invalidasi') }}"><i class="fa fa-money"></i>Konfirmasi Pembayaran</a></li>
       <li><a href="{{ route('feedback') }}"><i class="fa fa-comment"></i> Feedback Member</a></li>
       
      </ul>
    </section>
</aside>