<!-- base template -->
@extends('layout/main')
<!-- end base -->
@section('title','Order')

@section('container')

<div class="container">
    <div class="box shadow p-3 mb-5 bg-body rounded">

        <div class="row">
            <div class="col">
                <h3>Order</h3>
            </div>
        </div>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
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
            
        </div>
  
        <div class="row mt-5">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr style="color: #000a;">
                           <th scope="col">No</th>
                           <th scope="col">Customer ID</th> 
                           <th scope="col">Name</th> 
                           <th scope="col">Description</th> 
                           <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($order as $order)
                        <tr>
                          <th scope="row">{{$loop -> iteration}}</th>
                          <td>{{$order->customer_id}}</td>
                          <td>{{$order->description}}</td>
                          <td>
                            <form action="{{route('orders.destroy', $order->id)}}" method="post" class="d-inline">
                            @method ('delete')
                            @csrf
                                <button type="submit" class="btn btn-danger" style="line-height:1; vertical-align:baseline; padding:.35em .65em; font-size:.75em;" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</button>
                            </form>
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

