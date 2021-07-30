@extends('layouts.app')

@section('content')

<div class="container">

<h3>Edit Data Album</h3>
<form action="{{ url('/album/' . $row->album_id) }}" method="POST">
    <input name="method" type="hidden" value="PATCH">
    @csrf
    <div class="form-group">
        <label for="">NAMA</label>
        <input type="text" name="album_name" class="form-control" value="{{ $row->album_name}}">
    </div>
    <div class="form-group">
        <input type="submit" value="UPDATE" class="btn btn-primary">

    </div>
</form>
</div>

@endsection