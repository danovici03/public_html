{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
		<div id="hero_register">
			<div class="container margin_120_95">			
				<div class="row">
					<div class="col-lg-6">
						<h1>Aproape de pacientii tai!</h1>
						<p class="lead">Va multumim pentru interesul dvs de a intra in comunitatea Medisbook.ro!</p>
						<div class="box_feat_2">
							<i class="pe-7s-user"></i>
							<h3>Cine suntem</h3>
							<p>Medisbook.ro va ofera posibilitatea de a fi mai aproape de pacientii dvs atat prin sfaturi informale cat si prin recomandari formale sub forma de documente oficiale (Scrisoare Medicala insotita sau nu de Reteta simpla, Referat Medical) care contin parafa cu semnatura medicului si sunt semnate electronic pentru autenticitate. Serviciile oferite pacientilor dvs pot fi de ordin gratuit sau contra-cost; calitatea de serviciu medical gratuit sau contra-cost, cat si valoarea tarifului solicitat ramane la latitudinea dvs ca medic; 80% din pretul serviciului medical oferit revine medicului.</p>
						</div>
						<div class="box_feat_2">
							<i class="pe-7s-users"></i>
							<h3>Conectat intre medici</h3>
							<p>De asemenea, aveti posibilitatea de a va consulta cu alti colegi (din aceeasi specilitate sau specializari diferite) referitor la aspecte care tin de patologia pacientilor din lista proprie, folosind aplicatia Echipa medicala din contul dvs.  </p>
						</div>
						<div class="box_feat_2">
							<i class="pe-7s-mail"></i>
							<h3>Metoda de inregistrare</h3>
							<p>Completati datele solicitate in formularul alaturat, urmand ca inregistrarea dvs sa fie confirmata in cel mai scurt timp. Ulterior veti primi contractul de colaborare, iar dupa semnarea acestuia, contul dvs va deveni activ.</p>
						</div>
					</div>
					<!-- /col -->
					<div class="col-lg-5 ml-auto">
						<div class="box_form">
							<div id="message-register"></div>
							<form action="{{route('register') }}" method="POST" enctype="multipart/form-data">
								<!-- Validation Errors -->
								<x-auth-validation-errors class="mb-4" :errors="$errors" />
                                @csrf
								<div class="row">
									<h3>Date Personale</h3>
									<div class="col-md-6 ">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Nume" name="name" id="name" value="{{old('name')}}">
											<span class="text-danger">@error('name') {{ $message }} @enderror</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Specializare" name="specialization" id="specialization" value="{{old('specialization')}}">
											<span class="text-danger">@error('specialization') {{ $message }} @enderror</span>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Adresa" name="adress" id="adress" value="{{old('adress')}}">
											<span class="text-danger">@error('adress') {{ $message }} @enderror</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Oras" name="city" id="city" value="{{old('city')}}">
											<span class="text-danger">@error('city') {{ $message }} @enderror</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Judet" name="county" id="county" value="{{old('county')}}">
											<span class="text-danger">@error('county') {{ $message }} @enderror</span>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<input type="tel" class="form-control" placeholder="Telefon" name="phone" id="phone" value="{{old('phone')}}">
											<span class="text-danger">@error('phone') {{ $message }} @enderror</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input type="tel" class="form-control" placeholder="Loc de munca" name="working_at" id="working_at" value="{{old('working_at')}}">
											<span class="text-danger">@error('working_at') {{ $message }} @enderror</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input type="date" class="form-control" placeholder="Data nasterii" name="date_of_birth" id="date_of_birth" value="{{old('date_of_birth')}}">
											<span class="text-danger">@error('adress') {{ $message }} @enderror</span>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<h3>Upload documente necesare</h3>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="p">Carte de identitate</div>
										<div class="form-group">
											<input type="file" class="form-control" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip" placeholder="Carte de identitate" name="ci_doctor" id="ci_doctor" value="{{old('ci_doctor')}}">
											<span class="text-danger">@error('adress') {{ $message }} @enderror</span>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="p">CUIM</div>
										<div class="form-group">
											<input type="file" class="form-control" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip" placeholder="CUIM" name="cuim_doctor" id="cuim_doctor" value="{{old('cuim_doctor')}}">
											<span class="text-danger">@error('cuim_doctor') {{ $message }} @enderror</span>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="p">Avis libera practică</div>
										<div class="form-group">
											<input type="file" class="form-control" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip" placeholder="Avis libera practica" name="avis_libera_practica" id="avatar" value="{{old('avis_libera_practica')}}">
											<span class="text-danger">@error('avis_libera_practica') {{ $message }} @enderror</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="p">Imagine de profil</div>
										<div class="form-group">
											<input type="file" class="form-control" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip" placeholder="Imagine profil" name="profile_image" id="profile_image" value="{{old('profile_image')}}">
											<span class="text-danger">@error('profile_image') {{ $message }} @enderror</span>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="p">Parafă și semnătură</div>
										<div class="form-group">
											<input type="file" class="form-control" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip" placeholder="Parafa si semnatura" name="parafa_semnatura" id="parafa_semnatura" value="{{old('parafa_semnatura')}}">
											<span class="text-danger">@error('parafa_semnatura') {{ $message }} @enderror</span>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<h3>Date personale</h3>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="email" class="form-control"  placeholder="Adresa de email" name="email" id="email" value="{{old('email')}}">
											<span class="text-danger">@error('working_at') {{ $message }} @enderror</span>
										</div>
									</div>
								</div>
                                <div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Parola" name="password" id="password" value="{{old('password')}}">
											<span class="text-danger">@error('password') {{ $message }} @enderror</span>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Confirma parola" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}">
											<span class="text-danger">@error('password_confirmation') {{ $message }} @enderror</span>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div><input type="submit" class="btn_1" value="Inregistrare"  id="Register"></div>
							<br>
                            <a href="/login">Daca ai deja cont autentifica-te aici!</a>
                            </form>
						</div>
						<!-- /box_form -->
					</div>
					<!-- /col -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /hero_register -->
	<!-- /main -->
    @endsection