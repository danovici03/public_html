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
          <a href="/dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Profilul meu</li>
      </ol>

      <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-file"></i>Basic info</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nume</label>
                    <input type="text" class="form-control" placeholder="Your name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Prenume</label>
                    <input type="text" class="form-control" placeholder="Your last name">
                </div>
            </div>
        </div>
        <!-- /row-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Telefon</label>
                    <input type="text" class="form-control" placeholder="Your telephone number">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Your email">
                </div>
            </div>
        </div>
        <!-- /row-->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Poza de profil</label>
                    <form action="/file-upload" class="dropzone" ></form>
                </div>
            </div>
        </div>
        <!-- /row-->
    </div>
    <!-- /box_general-->
    
    <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-map-marker"></i>Adresa</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Oras</label>
                    <select class="form-control">
                        <option value="">Alege oras</option>
                        <option value="New York">Bistrita</option>
                        <option value="Chicago">Cluj</option>
                        <option value="Miami">Mures</option>
                        <option value="Los Angeles">Brasov</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Adresa</label>
                    <input type="text" class="form-control" placeholder="Your address">
                </div>
            </div>
        </div>
        <!-- /row-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Judet</label>
                    <input type="text" class="form-control" placeholder="Your state">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Cod postal</label>
                    <input type="text" class="form-control" placeholder="Your zip code">
                </div>
            </div>
        </div>
        <!-- /row-->
    </div>
    <!-- /box_general-->
    
    <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-file-text"></i>Curriculum</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Detalii profesionale</label>
                    <div class="editor"></div>
                </div>
            </div>
        </div>
        <!-- /row-->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Specializare <a href="#0" data-toggle="tooltip" data-placement="top" title="Separated by commas"><i class="fa fa-fw fa-question-circle"></i></a></label>
                    <input type="text" class="form-control" placeholder="Ex: Piscologist, Pediatrician...">
                </div>
            </div>
        </div>
        <!-- /row-->
    </div>
    <!-- /box_general-->
    <p><a href="#0" class="btn_1 medium">Salveaza</a></p>
  </div>
  <!-- /.container-fluid-->
   </div>
</main>

 @endsection