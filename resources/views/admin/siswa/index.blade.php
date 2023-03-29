@extends('welcome')

@section('content')
<div class="container">
    <div class="card">
  
        <div class="card-body">
            <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">
                Add Siswa
            </a>
        </div>
       
    
        <div class="container mt-3">
            <table class="table table-striped">
                <thead>
                   <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Phone</td>
                    <td>City</td>
                    <td>NISN</td>
                    <td>Action</td>
                   </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $row)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>{{ $row->city }}</td>
                        <td>{{ $row->NISN }}</td>
                         <td>
                            <a href="{{ route('siswa.show', $row->id) }}" class="btn btn-primary m-1">Show</a>
                            <a href="{{ route('siswa.edit', $row->id) }}" class="btn btn-warning m-1">Edit</a>
                            <form action="{{ route('siswa.destroy', $row->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-1" type="submit">Delete</button>
                            </form>
                         </td>    
                    </tr>                        
                    @endforeach
                </tbody>
            </table>
        </div>
    
        </div>
</div>


@endsection

