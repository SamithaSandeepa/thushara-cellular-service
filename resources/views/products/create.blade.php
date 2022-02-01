@extends('layouts.admin')

@section('stylesheet')

@endsection

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3>Add product</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">General Form</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
{{-- <div class="d-flex justify-content-center"> --}}
<section class="content">
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <!-- left column -->
      <div class="col-md-10">
        <!-- general form elements -->
        <div class="card card-primary">
          <!-- /.card-header -->
          <!-- form start -->
        {{-- {{ Form::open(array('url' => '{{./product}}', 'method' => 'put')) }}
        {{csrf_field()}}
        <div class="card-body">
            <div class="form-group">
                {{ Form::label('itemId', 'Item ID') }}
                {{ Form::text('itemId','',['class'=>'form-control', 'placeholder'=>'Enter Item ID','id'=>'exampleInputEmail1']) }}
            </div>    
        </div>    
        
        {{ Form::close() }}             --}}


          {{-- --------------------------------------------------------------------- --}}
          <form action="{{url('./product')}}" method='post'>
            {{csrf_field()}}
            <div class="card-body">
              <div class="form-group">
                <label for="productid">Product ID</label>
                <input type="text" name="id" class="form-control" id="#" placeholder="Enter Product ID">
              </div>
              <div class="form-group">
                <label for="barcodeid">Barcode ID</label>
                <input type="text" name="bid" class="form-control" id="#" placeholder="Enter Barcode ID">
              </div>
              <div class="form-group">
                <label for="productname">Product Name</label>
                <input type="text" name="name" class="form-control" id="#" placeholder="Enter Product Name">
              </div>
              <div class="form-group">
                <label for="salesprice">Sales Price</label>
                <input type="text" name="sprice" class="form-control amount" id="#" placeholder="Enter Sales Price">
              </div>
              <div class="form-group">
                <label for="purchaseprice">Purchase Price</label>
                <input type="text" name="pprice" class="form-control" id="#" placeholder="Enter Purchase Price">
              </div>
              <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" name="quantity" class="form-control amount" id="#" placeholder="Enter Quantity">
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>






      @endsection

      @section('script')

      </script>
      @endsection