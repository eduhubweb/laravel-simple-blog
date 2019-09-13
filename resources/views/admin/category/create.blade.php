@extends('layouts.theme1.master');
@section('content')
    <div class="row">
      <div class="offset-2 col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <div class="card-body">
                <form  action="{{route('category.store')}}" method="post" class="form-horizontal form-material">
                    @csrf

                    <div class="form-group">
                        <label class="col-md-12">Category Name</label>
                        <div class="col-md-12">
                            <input type="text" name="name" value="{{old('name')}}" placeholder="Category Name" class="@error('name') is-valid @enderror form-control form-control-line">
                        </div>
                        @error('name')
                         <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>



                    <div class="form-group">
                        <label class="col-md-12">Message</label>
                        <div class="col-md-12">
                            <textarea rows="5" name="details" class="form-control form-control-line">{{old('details')}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Create Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection
