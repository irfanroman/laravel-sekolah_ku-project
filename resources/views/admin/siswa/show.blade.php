@extends('parent')

@section('content')
<div class="container">
    <label for="" class="form-label">Name Siswa</label>
    <input type="text" class="form-control" value="{{ $siswa->name }}" readonly></input>
    <br>
    <label for="" class="form-label">Phone Siswa</label>
    <input type="number" class="form-control" value="{{ $siswa->phone }}" readonly>
    <br>
    <label for="" class="form-label">City Siswa</label>
    <input type="text" class="form-control" value="{{ $siswa->city }}" readonly>
    <br>
    <label for="" class="form-label">NISN Siswa</label>
    <input type="number" class="form-control" value="{{ $siswa->NISN }}" readonly>
    <br>
    <label for="" class="form-label">Address Siswa</label>
    <textarea class="form-control" cols="30" rows="5" readonly>{!! $siswa->address !!}</textarea>
    
    <a href="{{ route('siswa.index') }}" class="btn btn-outline-info mt-3">Back</a>
</div>
@endsection