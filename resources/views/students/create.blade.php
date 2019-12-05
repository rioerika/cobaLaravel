@extends('layout/main')

@section('tittle', 'From tambah data')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-8">
				<h1 class="mt-3"> From Tambah Data Mahasiswa</h1>
				<form method="post" action="/students">
				  <div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}" placeholder="Masukan Nama">
				    @error('nama')
				    	<div class="invalid-feedback">{{@massage}}</div>
				    @enderror
				  </div>

				  <div class="form-group">
				    <label for="nrp">NRP</label>
				    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" value="{{old('nrp')}}" placeholder="Masukan NRP">
				    @error('nrp')
				    	<div class="invalid-feedback">{{@massage}}</div>
				    @enderror
				  </div>  

				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="email" name="email" value="{{old('email')}}" placeholder="Masukan Email">
				    @error('email')
				    	<div class="invalid-feedback">{{@massage}}</div>
				    @enderror
				  </div>

				  <div class="form-group">
				    <label for="jurusan">jurusan</label>
				    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="jurusan" name="jurusan" value="old{{('jurusan')}}" placeholder="Masukan jurusan">
				    @error('jurusan')
				    	<div class="invalid-feedback">{{@massage}}</div>
				    @enderror
				  </div>

				  <button type="submit" class="btn btn-primary">tambah data mahasiswa</button>
				</form>
			</div>
		</div>
	</div>
@endsection