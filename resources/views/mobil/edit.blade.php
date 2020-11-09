@extends('layouts.master')
@section('content')
<br>
<form action="/mobil/{{$data->id}}/update" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Kode Mobil</label>
    <input type="text" value="{{$data->kode_mobil}}" class="form-control" name="kode_mobil" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Merek Mobil</label>
    <input type="text" class="form-control" value="{{$data->merek_mobil}}" name="merek_mobil" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">No Polisi</label>
    <input type="text" class="form-control" value="{{$data->no_pol}}" name="no_pol" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Tahun Sewa</label>
    <input type="number" value="{{$data->tahun_sewa}}" class="form-control" name="tahun_sewa" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Harga Sewa</label>
    <input type="number" value="{{$data->harga_sewa}}" class="form-control" name="harga_sewa" required>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</form>
@endsection