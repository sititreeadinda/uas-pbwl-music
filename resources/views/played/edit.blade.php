@extends('layouts.app')

@section('content')

<div class="container">

<h3>Edit Data Played</h3>
<form action="{{ url('/played/' . $row->palyed_id) }}" method="POST">
    <input name="method" type="hidden" value="PATCH">
    @csrf
    <div class="form-group">
        <label for="">NAMA</label>
        <input type="text" name="played_name" class="form-control" value="{{ $row->played_name}}">
    </div>
    <div class="form-group">
        <input type="submit" value="UPDATE" class="btn btn-primary">

    </div>
</form>
</div>

@endsection