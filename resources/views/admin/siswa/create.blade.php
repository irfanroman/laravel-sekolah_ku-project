@extends('parent')

@section('content')
<div class="container">
    <form action="{{ route('siswa.store') }}" method="post">
        @csrf
        @method('POST')
    
            <label for="" class="form-label">Name Siswa</label>
            <input type="text" class="form-control" name="name"></input>
            <br>
            <label for="" class="form-label">Phone Siswa</label>
            <input type="number" class="form-control" name="phone">
            <br>
            <label for="" class="form-label">City Siswa</label>
            <input type="text" class="form-control" name="city">
            <br>
            <label for="" class="form-label">NISN Siswa</label>
            <input type="number" class="form-control" name="NISN">
            <br>
            <label for="" class="form-label">Address Siswa</label>
            <textarea class="form-control" cols="30" rows="5" name="address"></textarea>
            
            <button type="submit" class="btn btn-primary mt-3" >Add Siswa</button>
        </form>
</div>

@endsection