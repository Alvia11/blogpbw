@extends('layouts.app')
@extends('content')
<div class="container">
  <div class="row justify-content-center">

    <div class="right">
      <a href="{{ url('admin/add_blog') }}" class="btn btn-primary"> Add New Blog </a>
    </div>

    <div class="col-md-12">
      <div class="card-header">Add New Blog</div>
      <div class="card_body">


<br/><br/>
<form class="" action="{{ url('/admin/blog') }}" method="post" enctype="multipar/form-data">
  @crsf

  <div class="row">
  <div class="col-md-4">
    <div class="form-group col-md-4">
      <label for="Judul">Judul :</label>
      <input type="text" name="judul" class="form-control" required>
    </div>
    </div>

      <div class="row">
      <div class="col-md-4">
        <div class="form-group col-md-4">
          <label for="Artikel">Artikel :</label>
          <textarea name="Artikel" cols="form-control" required></textarea>
        </div>
      </div>

      <div class="row">
      <div class="col-md-4">
        <div class="form-group col-md-4">
          <label for="Gambar">Gambar :</label>
          <input type="file" name="filename">
        </div>
      </div>

      <div class="row">
      <div class="col-md-4">
        <div class="form-group col-md-4">
          <button type="submit" class="btn btn-success"> Submit </button>
        </div>
      </div>

    </form>
  </div>
</div>
      @endsection
