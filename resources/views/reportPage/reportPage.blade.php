<!-- base template -->
@extends('layout/main')
<!-- end base -->
@section('title','Page Report')

@section('container')

<div class="container">
    <div class="box shadow p-3 mb-5 bg-body rounded">

        <div class="row">
            <div class="col">
                <h3>Laporan</h3>
            </div>
        </div>

        
        <div class="row my-3">
            <div class="col-4">
                <form class="d-flex">
                    <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>   
                    </button>
                </form>
            </div>
            <div class="col-8">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('reports.create') }}" class="btn btn-primary me-md-2" type="button">Create Report </a>
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
                        <tr style="color: #000a;">
                           <th scope="col">Photo</th>
                           <th scope="col">Judul Laporan</th> 
                           <th scope="col">Action</th>
                           <th scope="col">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($report as $report)
                        <tr>
                          <th scope="row">
                              <img src="{{asset('img/img-laporan.png')}}" alt="gambar laporan" width="80" height="80">
                          </th>
                            <td style="padding: 40px 8px;">{{$report -> judul_laporan}}</td>
                            <td style="padding: 40px 8px;">
                                <a href="{{route('reports.edit', $report->id)}}" class="badge bg-success text-decoration-none">Edit</a>
                                <form action="{{ route('reports.destroy', $report->id) }}" method="post" class="d-inline">
                                @method ('delete')
                                @csrf
                                    <button type="submit" class="btn btn-danger" style="line-height:1; vertical-align:baseline; padding:.35em .65em; font-size:.75em;" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</button>
                                </form>
                                <a href="#" class="badge bg-info text-decoration-none">Print</a>
                            </td>
                            <td style="padding: 40px 8px;">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#detailsModal" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical ms-3 rounded-circle shadow" style="width:20px;height:20px;" viewBox="0 0 16 16">
                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                    </svg>
                                   
                                </a>
                                <!-- Modal View Data -->
                                <!-- Modal -->
                                <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModal" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="detailsModalTitle">Detail Laporan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="judul_laporan" class="form-label">Report Title</label>
                                                        <input type="text" class="form-control" id="judul_laporan" value="{{$report->judul_laporan}}" readonly>
                                                    </div> 
                                                  
                                                    <div class="mb-3">
                                                        <label for="category" class="form-label">Category</label>
                                                        <input type="text" class="form-control" id="category" value="{{$report->category}}" readonly>
                                                    </div>
                                                   
                                                    <div class="mb-3">
                                                        <label for="description" class="form-label">Description</label>
                                                        <textarea class="form-control" id="description" rows="5" readonly>{{$report->description}}</textarea>
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