@extends('parent')

@section('content')
<form action="{{ route('siswa.update', $siswa->id) }}" method="post">
    @csrf
    @method('PUT')
        <div class="container">
            <label for="" class="form-label">Name Siswa</label>
            <input type="text" class="form-control" name="name" value="{{ $siswa->name }}"></input>
            <br>
            <label for="" class="form-label">Phone Siswa</label>
            <input type="number" class="form-control" name="phone" value="{{ $siswa->phone }}">
            <br>
            <label for="" class="form-label">City Siswa</label>
            <input type="text" class="form-control" name="city" value="{{ $siswa->city }}">
            <br>
            <label for="" class="form-label">NISN Siswa</label>
            <input type="number" class="form-control" name="NISN" value="{{ $siswa->NISN }}">
            <br>
            <label for="" class="form-label">Address Siswa</label>
            <textarea
             class="form-control" cols="30" rows="5" name="address">{{ $siswa->address }}</textarea>
    
             <button type="submit" class="btn btn-primary mt-3" >Save Changes</button>
        </form>
        </div>
@endsection