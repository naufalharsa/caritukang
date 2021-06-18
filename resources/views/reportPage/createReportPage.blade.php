<!-- base template -->
@extends('layout/main')
<!-- end base -->
@section('title','Create Report')

@section('container')
<div class="container">
    <div class="box shadow p-3 mb-5 bg-body rounded">
        <div class="row">
            <div class="col">
                <h3>Create Report</h3>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form method="post" action="{{ route('reports.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="judul_laporan" class="form-label">Judul</label>
                        <input type="text" class="form-control " id="judul_laporan" name="judul_laporan"  value="{{ old('judul_laporan')}}" placeholder="Masukkan Judul Laporan">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="category" name="category" placeholder="Masukkan Kategori" value="{{ old('category')}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="5" placeholder="Masukkan Deskripsi Laporan"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Tanggal</label>
                        <input type="date" class="form-control date" id="date" name="date" width="10">
                    </div>
                    <button class="btn btn-primary">Create</button>
                    
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection

    