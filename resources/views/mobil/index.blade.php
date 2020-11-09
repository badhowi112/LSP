@extends('layouts.master')
@section('content')
<br>
 <div class="col-md-12">
      @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Data Mobil
</button>
<a href="/rental"><button type="button" class="btn btn-success">Rental Mobil</button></a>

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
        <form action="/mobil/create" method="POST">
        	@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Kode Mobil</label>
    <input type="text" class="form-control" name="kode_mobil" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Merek Mobil</label>
    <input type="text" class="form-control" name="merek_mobil" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">No Polisi</label>
    <input type="text" class="form-control" name="no_pol" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Tahun Sewa</label>
    <input type="number" class="form-control" name="tahun_sewa" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Harga Sewa</label>
    <input type="number" class="form-control" name="harga_sewa" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Stok</label>
    <input type="number"   class="form-control" name="stok" required>
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
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Mobil</th>
      <th scope="col">Merek Mobil</th>
      <th scope="col">No Polisi</th>
      <th scope="col">Tahun Sewa</th>
      <th scope="col">Harga Sewa</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($data as $item)  	
    <tr>     
      <td>{{$loop->index+1}}</td>
      <td>{{$item->kode_mobil}}</td>
      <td>{{$item->merek_mobil}}</td>
      <td>{{$item->no_pol}}</td>
      <td>{{$item->tahun_sewa}}</td>
      <td>{{$item->harga_sewa}}</td>      
      <td><a href="/mobil/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
      <td><a href="/mobil/{{$item->id}}/delete" onclick="return confirm('Apakah Data Ini Akan Dihapus ??')" class="btn btn-danger btn-sm">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection