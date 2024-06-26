@extends('admin.layouts.sidebar')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit suppliers</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         <div class="col-md-6">
            <form action="{{route('admin.supplier.update', $supplier->id)}}" method="POST">
              @csrf
              @method('PATCH')
              <div class="form-group">
                <label for="name">supplier's name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{$supplier->name}}">
                @error('name')
                  <div style="color: red;">{{ $message }}</div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Edit supplier</button>
          </form>
         </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection