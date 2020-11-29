@extends('backend.master')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6 m-auto">
          <!-- general form elements -->
          <div class="card card-primary ">
            <div class="card-header py-3 d-flex flex-row  justify-content-between">
              <h3 class="m-0 font-weight-bold ">Copyright</h3>
            <a href="" class="btn  btn-success">Edit Copyright</a>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{route('copyright.store')}}">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Copyright</label>
                  <input type="text" class="form-control" name="copyright"  placeholder="Enter Copyright Text">
                </div>

                @error('copyright')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
               
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

        </div>
        
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection