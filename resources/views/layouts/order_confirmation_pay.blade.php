@extends('layouts.master')
@extends('layouts.sidebar')

@section('content')

    <div class="col-md-4 col-md-offset-4">
        {!!Form::open(['method'=>'GET','url'=>'searchinvalid','role'=>'search'])  !!}
        <div class="pull-right">  
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" name="search" placeholder="Search...">
                <span class="input-group-btn">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Cari</button>
                    </span>
                </span>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

<section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Validasi Pesanan</h3>
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
            <th>Pembayaran</th>
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
            {{ $order->total_price}}
            <?php
                
            ?>
            </td>
            <td>
                <a class="btn btn-success" href="{{ route('order.validasi',$order->id) }}">Validasi</a> 
            </td>
<!--             <td>
                <a class="btn btn-info" href="{{ route('order.edit',$order->id) }}">Edit</a>
            </td> -->
        </tr>
    @endforeach
    </tbody>
</table>
</div>

</div>
</div>
</div>
</section>
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