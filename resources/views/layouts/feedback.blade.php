@extends('layouts.master')
@extends('layouts.sidebar')

@section('content')
    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Feedback Perental</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
<table id="pageTable" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Pemilik ID</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($feedbacks as $feedback)
        <tr>
            <td>
            {{ $feedback->id }}
            </td>
            <td>
            {{ $feedback->user_id }}
            </td>
            <td>
            {{ $feedback->ket }}
            </td>
            <td>
            aksi
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