@extends('layouts.default')

@section('title', "creazione nuovo post")

@section('main_content')
<div class="mb-3">
  <label for="title" class="form-label">Title</label>
  <input type="text" class="form-control" id="title" name="title">
</div>
<div class="mb-3">
  <label for="sottotitolo" class="form-label">Sottotitolo</label>
  <input type="text" class="form-control" id="sottotitolo" name="sottotitolo">
</div>
<div class="mb-3">
  <label for="content" class="form-label">Contenuto</label>
  <textarea type="text" class="form-control" id="content" name="content" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="author" class="form-label">author</label>
  <input type="text" class="form-control" id="author" name="author">
</div>
<div class="mb-3">
  <label for="coverImg" class="form-label">coverImg</label>
  <input type="text" class="form-control" id="coverImg" name="coverImg">
</div>
<div class="mb-3">
  <label for="category" class="form-label">category</label>
  <input type="text" class="form-control" id="category" name="category">
</div>
<div class="text-center">
  <button type="submit" class="btn btn-success">Crea</button>
</div>

@endsection