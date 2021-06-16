<!-- base template -->
@extends('layout/main')
<!-- end base -->
@section('title','Edit Customer')

@section('container')
<div class="container">
    <div class="box shadow p-3 mb-5 bg-body rounded">

        <div class="row">
            <div class="col">
                <h3>Edit Customer</h3>
            </div>
        </div>

        <div class="row">
            <div class="col">
                @if (Auth::user())
                <form method="post" action="/customers/{{ $customer->id }}">
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $customer->nama}}">
                        @error('nama')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control " id="alamat" name="alamat"  value="{{ $customer->alamat }}">
                    </div>
                    <div class="mb-3">
                        <label for="nomorhp" class="form-label">Nomor Handphone</label>
                        <input type="text" class="form-control" id="nomorhp" name="nomorhp" value="{{ $customer->nomorhp }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label @error('email') is-invalid @enderror">Email</label>
                        <input type="email" class="form-control" id="email" name="email"  value="{{ $customer->email }}">
                        @error('email')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <button class="btn btn-primary">Save Changes</button>
                    
                </form>
                @endif
            </div>
        </div>
        
    </div>
</div>
@endsection

    