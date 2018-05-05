@extends('layouts.master')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Member</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('member') }}"> Back</a>
            </div>
        </div>
    </div>

    <form action = "{{ route('updateuser',$contact->id) }}" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                  <input type = 'text' name = 'name' 
                     value = '{{ $contact->name }}'/>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type = 'text' name = 'email' 
                     value = '{{ $contact->email }}'/>
                 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Lahir:</strong>
                 {{ $contact->birth_date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Telp:</strong>
                 {{ $contact->phone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No WA:</strong>
                 {{ $contact->whatapps }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Akun Instagram:</strong>
                 {{ $contact->instagram }}
            </div>
        </div>
    <input type = 'submit' value = "Update student" />
    </div>
</form>
</div>
</div>
</div>
@endsection