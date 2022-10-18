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
          <a href="#">Dashboard User</a>
        </li>
        <li class="breadcrumb-item active">Bun venit {{ Auth::user()->name }}</li>
      </ol>
	      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-envelope-open"></i>
              </div>
              <div class="mr-5"><h5>Medicii mei</h5></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="/pacienti">
              <span class="float-left">Vezi doctorii</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
            <a class="card-footer text-white clearfix small z-1" href="reviews.html">
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