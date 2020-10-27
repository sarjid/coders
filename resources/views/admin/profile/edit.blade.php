@extends('layouts.admin-master')
@section('settings')active menu-open @endsection
@section('edit-profile')active @endsection
@section('admin-title')edit profile @endsection
@section('admin-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Admin</a></li>
              <li class="breadcrumb-item active">Update Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div div class="col-md-8 mt-1">
            <div class="card">
                <div class="card-body">
                     <form action="{{ url('admin/profile-update') }}" method="POST" enctype="multipart/form-data">
                        @csrf       
                      <input type="hidden" name="old_image" value="{{ Auth::user()->image }}">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ Auth::user()->name }}">

                        @error('name')
                          <span class="text-danger">{{$message}}</span>
                        @enderror

                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ Auth::user()->email }}">

                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Profile Picture</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" >
                        @error('image')
                      <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-danger">Update Data</button>
                    </div>
                  
                </form>

                </div>
            </div>
        </div>

        <div class="col-md-4 ">
            <div class="card " style="width: 18rem;">
              <img class="card-img-top"  style="border-radius: 50%;" src="{{ asset(Auth::user()->image) }}" height="100%;" width="100%;" alt="Card image cap">
            <div class="card-body">
              <ul class="list-group list-group-flush text-center">
                <a href="{{ url('admin/settings/profile-edit') }}" class="btn btn-primary btn-sm btn-block @yield('user-pass')">Update Profile</a>
                <a href="{{ url('admin/password/change') }}" class="btn btn-primary btn-sm btn-block @yield('user-pass')">Change Password</a>                   
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="btn btn-danger btn-sm btn-block"><i class="icon ion-power"></i> Logout</a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
                
              </ul>
            </div>                
            </div>
          </div>  
          
      
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  </div>
@endsection
