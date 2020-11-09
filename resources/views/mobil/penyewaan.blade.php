@extends('layouts.master')
@section('content')
<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Data Rental
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/rental/add" method="POST">
        	@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Kode Penyewaan</label>
    <input type="text" class="form-control" name="kode_penyewaan" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama Konsumen</label>
    <input type="text" class="form-control" name="nama_konsumen" required>
  </div>
  <div class="form-group">
    <label  for="exampleFormControlInput1">Kode Mobil</label>
    @foreach($data_mobil as $mobil)
    <select name="id_kode_mobil" class="form-control" id="exampleFormControlSelect1">
      <option>{{$mobil->kode_mobil}}</option>     
    </select>
    @endforeach
   
  </div> 
  <div class="form-group">
    <label for="exampleFormControlInput1">Jumlah</label>
    <input type="number" class="form-control" name="jumlah" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Tanggal Penyewaan</label>
    <input type="date" class="form-control" name="tgl_penyewaan" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Tanggal Pengembalian</label>
    <input type="date" class="form-control" name="tgl_pengembalian" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Total Bayar</label>
    <input type="number"  class="form-control" name="total_bayar" required>
  </div>
  <!-- <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div> -->
  <!-- <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div> -->
  <!-- <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div> -->
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
  </form>
    </div>
  </div>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Penyewaan</th>
      <th scope="col">Nama Konsumen</th>
      <th scope="col">Kode Mobil</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Tanggal Penyewaan</th>
      <th scope="col">Tanggal Pengembalian</th>
      <th scope="col">Total Bayar</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($data as $item)
    <tr>     
      <td>{{$loop->index+1}}</td>
      <td>{{$item->kode_penyewaan}}</td>
      <td>{{$item->nama_konsumen}}</td>
      <td>{{$item->id_kode_mobil}}</td>
      <td>{{$item->jumlah}}</td>
      <td>{{$item->tgl_penyewaan}}</td>
      <td>{{$item->tgl_pengembalian}}</td>
      <td>{{$item->total_bayar}}</td>
      
    </tr>
  	@endforeach
    
  </tbody>
</table>

@endsection
