@extends('layout/main')

@section('tittle', 'From ubah data mahasiswa')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-8">
				<h1 class="mt-3"> From Ubah Data Mahasiswa</h1>
				<form method="post" action="/students/{{$student->id}}">
					@method('patch')
					@csrf
				  <div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{$student->nama}}" placeholder="Masukan Nama">
				    @error('nama')
				    	<div class="invalid-feedback">{{$message}}</div>
				    @enderror
				  </div>

				  <div class="form-group">
				    <label for="nrp">NRP</label>
				    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" value="{{$student->nrp}}" placeholder="Masukan NRP">
				    @error('nrp')
				    	<div class="invalid-feedback">{{$message}}</div>
				    @enderror
				  </div>  

				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{$student->email}}" placeholder="Masukan Email">
				    @error('email')
				    	<div class="invalid-feedback">{{$message}}</div>
				    @enderror
				  </div>

				  <div class="form-group">
				    <label for="jurusan">jurusan</label>
				    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="jurusan" name="jurusan"  value="{{$student->jurusan}}" placeholder="Masukan jurusan">
				    @error('jurusan')
				    	<div class="invalid-feedback">{{$message}}</div>
				    @enderror
				  </div>

				  <button type="submit" class="btn btn-primary">ubah data mahasiswa</button>
				</form>
			</div>
		</div>
	</div>
@endsection