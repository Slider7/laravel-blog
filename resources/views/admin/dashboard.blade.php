@extends('admin.layouts.app_admin')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="jumbotron text-center">
          <p><span  class="badge badge-primary p-2">Категорий 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron text-center">
          <p><span  class="badge badge-primary p-2">Материалов 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron text-center">
          <p><span  class="badge badge-primary p-2">Посетителей 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron text-center">
          <p><span  class="badge badge-primary p-2">Сегодня 0</span></p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <a class="btn btn-block btn-outline-secondary" href="#">Создать категорию</a>
        <a class="list-group-item list-group-item-action" href="#">
          <h4 class="list-group-item-heading">Категория первая</h4>
          <p class="list-group-item-text">
            Кол-во материалов
          </p>
        </a>
      </div>
      <div class="col-sm-6">
        <a class="btn btn-block btn-outline-secondary" href="#">Создать материал</a>
        <a class="list-group-item list-group-item-action" href="#">
          <h4 class="list-group-item-heading">Материал первый</h4>
          <p class="list-group-item-text">
            Категория
          </p>
        </a>
      </div>
    </div>
  </div>
@endsection