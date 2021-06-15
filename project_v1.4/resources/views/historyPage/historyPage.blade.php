<!-- base template -->
@extends('layout/main')
<!-- end base -->
@section('title','History')

@section('container')

<div class="container">
    <div class="box shadow p-3 mb-5 bg-body rounded">

        <div class="row">
            <div class="col">
                <h3>History</h3>
            </div>
        </div>
        

    </div>
</div>
@endsection



<!-- function persetujuan_mitra($mitra_id) {
    return output_to mitra($mitra_id);
}

function order($customer_id, $data_detail_order) {
   $mitra = Mitra::all();
   foreach($mitra as $person) {
   }
}
function persetujuan_mitra($mitra_id, $data_detail_order) {
    return output_to mitra($mitra_id, $data_detail_order);
}

function order($customer_id, $data_detail_order) {
   $mitra = Mitra::all();
   foreach($mitra as $person) {
      if persetujuan_mitra($person->id, $data_detail_order) {
         return ["mitra_id" => $person->id, "message" => $person_nama . " siap mengambil pesanan"];
      }
   }
   return ["mitra_id" =>null, "message" => "tidak ada yang mengambil pesanan"];
} -->