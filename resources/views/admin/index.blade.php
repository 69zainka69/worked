@extends('layout.admin')


@section('title', 'Админка | Dashboard')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Главная</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">


        </div>
      </div>
    </section>
    
    <div>{{ session('status') }}</div>
    <p>dfgdfgfgdf</p>
    <p>{{ }}</p>
@endsection