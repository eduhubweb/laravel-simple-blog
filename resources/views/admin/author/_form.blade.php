<div class="form-group">
    <label class="col-md-12">Author Name</label>
    <div class="col-md-12">
        <input name="name" value="{{old('name',isset($author)? $author->name:null)}}"type="text" placeholder="Author Name" class="form-control form-control-line @error('name') is-invalid"@enderror>
    </div>
    @error('name')
     <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
    <label for="example-email" class="col-md-12">Author Email</label>
    <div class="col-md-12">
        <input name="email" type="email" value="{{old('email',isset($author)?$author->email:null)}}" placeholder="Enter Your Email" class="form-control form-control-line @error('email') is-invalid @enderror" >
    </div>
    @error('email')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror

</div>
<div class="form-group">
    <label class="col-md-12">Phone</label>
    <div class="col-md-12">
        <input  name="phone" type="text" value="{{old('phone',isset($author)?$author->phone:null)}}" placeholder="Enter Your Phone" class="form-control form-control-line @error('phone') is-invalid @enderror">
    </div>
    @error('phone')
     <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>

<div class="form-group">
    <label class="col-md-12">Address</label>
    <div class="col-md-12">
        <textarea rows="5" name="address" class="form-control form-control-line @error('address') is-invalid @enderror">{{old('address',isset($author)?$author->address:null)}}</textarea>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Gender</label>
    <div class="col-md-12">
        <input name="gender" @if(old("gender")=='male') checked @endif value="male" type="radio" id="male"><label for="male">male</label>
        <input name="gender" @if(old("gender")=='female') checked @endif value="female" type="radio" id="female"><label for="female">female</label>
        <input name="gender" @if(old("gender")=='others') checked @endif value="othes" type="radio" id="others"><label for="female">others</label>
    </div>
    @error('gender')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>
