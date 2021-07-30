@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Tambah Data Played</h3>
    <form action="{{ url('/played') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for=>NAMA</label>
        <input type="text" name="played_name" class="form-control">
    </div>

    <div class="form-group">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>

    </form>
</div>
@endsection 