@extends('layouts.master')

@extends('layouts.sidebar')

@section('content')
<form action="{{ url()->current() }}">
    <div class="col-md-5">
        <input type="text" name="keyword" class="form-control" placeholder="Search users...">
    </div>
    <div class="col-md-1">
        <button type="submit" class="btn btn-primary">
            Search
        </button>
    </div>
</form>
    <section class="content">
            <div class="card-header">
              <h3 class="card-title">Data Member</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
<table id="pageTable" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Whatapps</th>
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
            {{ $contact->name }}
            </td>
            <td>
            {{ $contact->email }}
            </td>
           <td>
            {{ $contact->phone }}
            </td>
            <td>
            {{ $contact->whatapps }}
            </td>
            <td>
            <a class="btn btn-info" href="{{ route('showuser',$contact->id) }}">Show</a>
                <?php if ($contact->blocked==null){?>
                <a class="btn btn-danger" href="{{ route('blok.blok',$contact->id) }}" dissabled>Block</a>
                
                <?php }else{?>
                 <a class="btn btn-success" href="{{ route('unblok',$contact->id) }}">Unblock</a>
               
                <?php }?>
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