@extends('layouts.master')

@extends('layouts.sidebar')

@section('content')
    <section class="content">
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