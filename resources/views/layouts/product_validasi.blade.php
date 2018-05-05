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
              <h3 class="card-title">Validasi Kendaraan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
<table id="pageTable" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Pemilik ID</th>
            <th>Type</th>
            <th>Brand</th>
            <th>Kategori</th>
            <th>Tahun</th>
            <th>Plat</th>
            <th>Harga Perjam</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
        <tr>
            <td>
            {{ $product->id }}
            </td>
            <td>
            {{ $product->user_id }}
            </td>
            <td>
            {{ $product->type }}
            </td>       
            <td>
            {{ $product->brand }}
            </td>
            <td>
            {{ $product->category }}
            </td>                 
            <td>
            {{ $product->year }}
            </td>
            <td>
            {{ $product->plat }}
            </td>
            <td>
            {{ $product->hourly_price }}
            </td>
            <td>
                <a class="btn btn-success" href="{{ route('validasi.product',$product->id) }}">Validasi</a> 
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