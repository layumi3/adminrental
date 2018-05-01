@extends('layouts.master')

@extends('layouts.sidebar')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Tables</h1>
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
            <th>Email</th>
            <th>Website</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($contacts as $contact)
        <tr>
            <td>
            {{ $contact->id }}
            </td>
            <td>
            {{ $contact->email }}
            </td>
            <td>
            {{ $contact->website }}
            </td>
            <td>
            <a class="btn btn-info" href="{{ route('perental.show',$contact->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('perental.edit',$contact->id) }}">Edit</a>
           <!-- <a class="btn btn-info" href="#">Show</a>
            <a class="btn btn-primary" href="#">Edit</a>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Delete
            </button> -->

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