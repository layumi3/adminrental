@extends('layouts.master')
@extends('layouts.sidebar')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Tables Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Table With Full Features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
<table id="pageTable" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Pemilik ID</th>
            <th>Penyewa ID</th>
            <th>Status</th>
            <th>Waktu Sewa</th>
            <th>Durasi Sewa</th>
            <th>Jenis Pengiriman</th>
            <th>Total Harga</th>
            <th>Validasi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($orders as $order)
        <tr>
            <td>
            {{ $order->id }}
            </td>
            <td>
            {{ $order->agent_id }}
            </td>
            <td>
            {{ $order->user_id }}
            </td>
            <td>
            {{ $order->status }}
            <!-- sama halnya dengan product status = 3 admin validasi pembayaran  -->
            </td>
            <td>
            {{ $order->order_time }}
            </td>
            <td>
            {{ $order->rent_duration }}
            </td>
            <td>
            {{ $order->delivery_type }}
            </td>
            <td>
            {{ $order->total_price }}
            </td>
            <td>

    <!--         <a class="btn btn-success" href='{{route('update', '25')}}'>Lunas</a>
            </td> -->
            <a class="btn btn-success" href="<a class="btn btn-success" href="{{ route('pesanan',$order->id) }}">Lunas</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>

</div>
</div>
</div>
</section>

</div>
<script>
         jQuery(function($) {
        //initiate dataTables plugin
        var myTable = 
        $('#pageTable')
        .DataTable( {
            bAutoWidth: false,
            "aoColumns": [
                null,
                null,
                null
            ],
            "aaSorting": [],
                select: {
                    style: 'multi'
                }
            });
        });
    </script>
@endsection