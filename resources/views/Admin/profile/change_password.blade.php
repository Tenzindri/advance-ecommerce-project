@extends('Admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container-full">


	<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Admin Change Password</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
		  <form method="POST" action="{{ route('update.change.password') }}" class="form-pill">
          @csrf
 
          <div class="form-group">
               <label for="exampleFormControlInput3">Current Password</label>
               <input type="password" name="oldpassword" class="form-control" id="current_password" placeholder="Current Password">
 
               @error('oldpassword')
               <span class="text-danger">{{ $message }} </span>
               @enderror
          </div>
 
          <div class="form-group">
         <label for="exampleFormControlPassword3">New Password</label>
               <input type="password" name="password" class="form-control" id="password" placeholder="New Password">
 
               @error('password')
               <span class="text-danger">{{ $message }} </span>
               @enderror
          </div>
 
          <div class="form-group">
               <label for="exampleFormControlPassword3">Confirm Password</label>
               <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password">
 
               @error('password_confirmation')
               <span class="text-danger">{{ $message }} </span>
               @enderror
          </div>
 
          <button type="submit" class="btn btn-primary btn-default"> Save</button>
           
     </form>

				</div>
				<!-- /.col -->
				 @if(session('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        @endif
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>

		
	  </div>




	  @endsection