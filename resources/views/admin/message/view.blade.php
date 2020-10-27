@extends('layouts.admin-master')
@section('messages')active @endsection
@section('admin-title')view message @endsection
@section('admin-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">view message</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Admin</a></li>
              <li class="breadcrumb-item active">view message</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
      
      <!-- Timelime example  -->
      <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <div class="timeline">
            <div>
              <i class="fas fa-user bg-green"></i>
              <div class="timeline-item">
                <span class="time"><i class="fas fa-clock"></i> {{ ($message->created_at)->diffForHumans() }}</span>
                <h3 class="timeline-header no-border"><a href="#">{{ $message->name }}</a></h3>
              </div>
            </div>
           
            <div>
                <i class="fas fa-user bg-green"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> {{ ($message->created_at)->diffForHumans() }}</span>
                  <h3 class="timeline-header no-border"><a href="#">{{ $message->email }}</a></h3>
                </div>
            </div>

            
            <div>
                <i class="fas fa-user bg-green"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> {{ ($message->created_at)->diffForHumans() }}</span>
                  <h3 class="timeline-header no-border"><a href="#">{{ $message->phone }}</a></h3>
                </div>
            </div>

            <div>
              <i class="fas fa-comments bg-yellow"></i>
              <div class="timeline-item">
                <span class="time"><i class="fas fa-clock"></i> {{ ($message->created_at)->diffForHumans() }}</span>
                <h3 class="timeline-header"><a href="#">Subject:</a> {{ $message->subject }}</h3>
                <div class="timeline-body">
                    Message: <br>
                {{ $message->message }}
                </div>
              </div>
            </div>
            <!-- END timeline item -->
          </div>
        </div>
        <!-- /.col -->
      </div>
    </div>
    <!-- /.timeline -->

  </section>
  <!-- /.content -->

  </div>
@endsection
