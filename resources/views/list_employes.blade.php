@extends('tamplate.layout')

@section('title', 'CRUD App')

@section('container')
<div class="container">
    
    @if (session('alert-success'))
        <div class="flash-data-success" data-flashdata="{{ session('alert-success') }}"></div>
    @endif
    <h1 class="mt-5">List Employee</h1>
    <a href="{{ url('/create') }}" class="btn btn-primary mt-4"><i class="fa-solid fa-user-plus"></i> Create Employee</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIP</th>
                <th scope="col">Full name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach ($employee as $employe) {
            ?>
            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $employe->nip }}</td>
                <td>{{ $employe->full_name }}</td>
                <td>{{ $employe->email }}</td>
                <td>{{ $employe->phone }}</td>
                <td>
                    <a href="{{ url('/detail/'. $employe->id) }}" class="btn btn-outline-primary"><i class="fa-solid fa-circle-info"></i> Detail</a>
                    <a href="{{ url('/edit/'. $employe->id) }}" class="btn btn-outline-success"><i class="fa-solid fa-user-pen"></i> Edit</a>
                    <a href="{{ url('/delete/'. $employe->id) }}" class="btn btn-outline-danger tombol-hapus"><i class="fa-solid fa-trash"></i> Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
@endsection