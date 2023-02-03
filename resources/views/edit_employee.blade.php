@extends('tamplate.layout')

@section('title', 'Edit Employee')

@section('container')
<div class="container">
    <h1 class="mt-5">@yield('title')</h1>

    <div class="card mt-3 mb-5 shadow">
        <div class="card-body p-5">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @foreach($employee as $emp)
            <form action="{{ url('/update/'.$emp->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" placeholder="nip" value="{{ $emp->nip }}">
                            <label for="nip">NIP</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{ $emp->email }}">
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Phone" value="{{ $emp->phone }}">
                            <label for="phone">Phone</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('salary') is-invalid @enderror" id="salary" name="salary" placeholder="salary" value="{{ $emp->salary }}">
                            <label for="salary">Salary</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 mb-3">
                            <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name" name="full_name" placeholder="John Doe" value="{{ $emp->full_name }}">
                            <label for="full_name">Full name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control @error('birth') is-invalid @enderror" id="birth" name="birth" placeholder="Birthday" value="{{ $emp->birth }}">
                            <label for="birth">Birth</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control @error('address') is-invalid @enderror" placeholder="Address" id="address" name="address" style="height: 130px">{{ $emp->address }}</textarea>
                            <label for="address">Address</label>
                        </div>
                    </div>
                </div>
                @endforeach
                <button type="submit" class="btn btn-primary mt-3 ps-4 pe-4 pt-2 pb-2"><i class="fa-solid fa-floppy-disk"></i> Save</button>

                <a href="{{ url('/') }}" class="btn btn-danger mt-3 ps-4 pe-4 pt-2 pb-2"><i class="fa-solid fa-arrow-left"></i> Back</a>
            </form>
        </div>
    </div>
</div>
@endsection