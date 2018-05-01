@extends('layouts.master')
@extends('layouts.sidebar')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Tables Product</h1>
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
            <th>Brand</th>
            <th>Tahun</th>
            <th>Type</th>
            <th>Plat</th>
            <th>Harga Perjam</th>

            <!-- jadi yang ditampilka kondisi active = 1 
                kalo yang kondisinya active=0 nanti munculin di tempat lain untuk di validasi
                {blum di validasi}-->
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
            {{ $product->brand }}
            </td>            
            <td>
            {{ $product->year }}
            </td>
            <td>
            {{ $product->type }}
            </td>
            <td>
            {{ $product->plat }}
            </td>
            <td>
            {{ $product->hourly_price }}
            </td>
            <td>
            <a class="btn btn-success" href="">Verifikasi</a>
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