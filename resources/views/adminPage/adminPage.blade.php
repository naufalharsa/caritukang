<!-- base template -->
@extends('layout/main')
<!-- end base -->
@section('title','Page Administrator')

@section('container')

<div class="container">
    <div class="box shadow p-3 mb-5 bg-body rounded">

        <div class="row">
            <div class="col">
                <h3>Administrator</h3>
            </div>
        </div>

        
        <div class="row my-3">
            <div class="col-4">
                <form class="d-flex" action="" method="get">
                    <input class="form-control me-2 " name="search" value="{{ $search }}" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>   
                    </button>
                </form>
            </div>
            <div class="col-8">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('administrators.create') }}" class="btn btn-primary me-md-2 shadow" type="button">Create Administrator</a>
                </div>
            </div>
        </div>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="row mt-5">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                           <th scope="col">No</th>
                           <th scope="col">ID</th>
                           <th scope="col">Administrator Name</th> 
                           <th scope="col">Role</th>
                           <th scope="col">Action</th>
                           <th scope="col">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($administrator as $admin)
                        <tr>
                          <th scope="row">{{$loop -> iteration}}</th>
                            <td>{{$admin -> id}}</td>
                            <td>{{$admin -> nama}}</td>
                            <td>
                                <span class="badge bg-info">{{$admin -> role}}</span>
                            </td>
                            <td>
                                <a href="{{ route('administrators.edit', $admin->id)}}" class="btn btn-success" style="line-height:1; vertical-align:baseline; padding:.35em .65em; font-size:.75em;">Edit</a>
                                <form action="{{ route('administrators.destroy', $admin->id) }}" method="post" class="d-inline">
                                @method ('delete')
                                @csrf
                                    <button type="submit" class="btn btn-danger" style="line-height:1; vertical-align:baseline; padding:.35em .65em; font-size:.75em;" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</button>
                                </form>
                            </td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#detailsModal{{$admin->id}}" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical ms-3 rounded-circle shadow" style="width:20px;height:20px;" viewBox="0 0 16 16">
                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                    </svg>
                                </a>
                                <!-- Modal View Data -->
                                <!-- Modal -->
                                <div class="modal fade" id="detailsModal{{$admin->id}}" tabindex="-1" aria-labelledby="detailsModal" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="detailsModalTitle">Detail Administrator</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="nama" class="form-label">Nama lengkap</label>
                                                        <input type="text" class="form-control" id="nama" value="{{ $admin->nama }}" readonly>
                                                    </div> 
                                                    <div class="mb-3">
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                        <input type="alamat" class="form-control" id="alamat" value="{{ $admin->alamat }}" readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nomorhp" class="form-label">Nomor Handphone</label>
                                                        <input type="text" class="form-control" id="nomorhp" value="{{ $admin->nomorhp }}" readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email address</label>
                                                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{ $admin->email }}" readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="role" class="form-label">Role</label>
                                                        <input type="text" class="form-control" id="role" value="{{ $admin->role}}" readonly>
                                                    </div>
                                                </form>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        

</div>
@endsection