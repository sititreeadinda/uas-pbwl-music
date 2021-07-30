@extends('layouts.app')

@section('content')

<div class="container">

<h3>Edit Data Track</h3>
<form action="{{ url('/track/' . $row->track_id) }}" method="POST">
    <input name="method" type="hidden" value="PATCH">
    @csrf
    <div class="form-group">
        <label for="">NAMA</label>
        <input type="text" name="track_name" class="form-control" value="{{ $row->track_name}}">
    </div>
    <div class="form-group">
        <label for="">TIME</label>
        <input type="text" name="time" class="form-control" value="{{ $row->time}}">
    </div>
    <div class="form-group">
        <input type="submit" value="UPDATE" class="btn btn-primary">

    </div>
</form>
</div>

@endsection