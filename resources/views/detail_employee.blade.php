@extends('tamplate.layout')

@section('title', 'Detail Employee')

@section('container')
<div class="container">
    <h1 class="mt-5">@yield('title')</h1>

    <div class="row mt-4">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <?php 
                    function rupiah($angka){
	
                        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                        return $hasil_rupiah;
                    }
                    foreach($employee as $emp) :?>
                    <div>
                        <h4 class="fw-bold">Nip</h4>
                        <p>{{ $emp->nip }}</p>
                    </div>
                    <div>
                        <h4 class="fw-bold">Full name</h4>
                        <p>{{ $emp->full_name }}</p>
                    </div>
                    <div>
                        <h4 class="fw-bold">Email</h4>
                        <p>{{ $emp->email }}</p>
                    </div>
                    <div>
                        <h4 class="fw-bold">Birth</h4>
                        <p>{{ $emp->birth }}</p>
                    </div>
                    <div>
                        <h4 class="fw-bold">Phone</h4>
                        <p>{{ $emp->phone }}</p>
                    </div>
                    <div>
                        <h4 class="fw-bold">Address</h4>
                        <p>{{ $emp->address }}</p>
                    </div>
                    <div>
                        <h4 class="fw-bold">Salary</h4>
                        <p>{{ rupiah($emp->salary) }}</p>
                    </div>
                    <?php endforeach; ?>

                    <a href="{{ url('/edit/'. $emp->id) }}" class="btn btn-success  mt-3 ps-4 pe-4 pt-2 pb-2"><i class="fa-solid fa-user-pen"></i> Edit</a>

                    <a href="{{ url('/') }}" class="btn btn-danger mt-3 ps-4 pe-4 pt-2 pb-2"><i class="fa-solid fa-arrow-left"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection