{{-- Extends layout --}}
@extends('layout.dashboard')

{{-- Content --}}
@section('content')
<main>
<!-- /Navigation-->
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Bun venit {{ Auth::user()->name }}/{{Auth::user()->specialization}}/{{Auth::user()->working_at}}</li>
      </ol>
	      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-users" aria-hidden="true"></i>
              </div>
              <div class="mr-5"><h5>Pacientii mei</h5></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="/pacienti">
              <span class="float-left">Vezi pacientii</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-user-md" aria-hidden="true"></i>
              </div>
				<div class="mr-5"><h5>Colegii mei</h5></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="colegi">
              <span class="float-left">Vezi colegii</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
		</div>
		<!-- /cards -->
</main>
@endsection