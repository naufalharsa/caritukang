<!-- base template -->
@extends('layout/main')
<!-- end base -->
@section('title','Edit Mitra')

@section('container')
<div class="container">
    <div class="box shadow p-3 mb-5 bg-body rounded">

        <div class="row">
            <div class="col">
                <h3>Edit Mitra</h3>
            </div>
        </div>

        <div class="row">
            <div class="col">
                @if (Auth::user())
                <form method="post" action="/mitras/{{ $mitra->id }}">
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $mitra->nama}}" required>
                        @error('nama')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control " id="alamat" name="alamat"  value="{{ $mitra->alamat }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="nomorhp" class="form-label">Nomor Handphone</label>
                        <input type="text" class="form-control" id="nomorhp" name="nomorhp" value="{{ $mitra->nomorhp }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="category" name="category" value="{{ $mitra->category }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label @error('email') is-invalid @enderror">Email</label>
                        <input type="email" class="form-control" id="email" name="email"  value="{{ $mitra->email }}" required>
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

    