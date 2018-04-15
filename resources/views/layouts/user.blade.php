@extends('layouts.master')
@extends('layouts.sidebar')

@section('content')
<table id="pageTable" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($items as $item)
        <tr>
            <td>
            {{ $item->id }}
            </td>
            <td>
            {{ $item->email }}
            </td>
            <td>
            {{ $item->website }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
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