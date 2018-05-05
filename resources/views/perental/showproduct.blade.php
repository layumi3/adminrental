@extends('layouts.master')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Product Detail</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('produk') }}"> Back</a>
            </div>
        </div>
    </div>

    <form action = "{{ route('updateproduct',$product->id) }}" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User ID:</strong>
                <input type = 'text' name = 'user_id' 
                     value = '{{ $product->user_id }}'/>
                 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipe:</strong>
                 {{ $product->type }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Brand Merk :</strong>
                 {{ $product->brand }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori :</strong>
                 {{ $product->category }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahun Kendaraan:</strong>
                 {{ $product->year }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Plat Nomor:</strong>
                 {{ $product->plat }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Per Jam:</strong>
                  <input type = 'text' name = 'hourly_price' 
                     value = '{{ $product->hourly_price }}'/>
            </div>
        </div>
    <input type = 'submit' value = "Update Product" />
    </div>
</form>
</div>
</div>
</div>
@endsection