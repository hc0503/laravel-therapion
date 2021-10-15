@extends('layouts.admin')
@section('content')
<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h4 class="text-themecolor">{{ $pageTitle }}</h4>
	</div>
	<div class="col-md-7 align-self-center text-right">
		<div class="d-flex justify-content-end align-items-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ route('admin.home') }}">{{ __('admin.home') }}</a>
			</li>
			<li class="breadcrumb-item">
				<a href="{{ route('admin.counselors.index') }}">{{ __('admin.counselor.title') }}</a>
			</li>
			<li class="breadcrumb-item active">{{ $pageTitle }}</li>
			</ol>
		</div>
	</div>
</div>
<div class="container-fluid">
	@if (session()->get('status'))
	<div class="alert alert-{{ session()->get('status') }}">
		<i class="ti-user"></i> {{ session()->get('message') }}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
	</div>
	@endif
	@error('photo')
	<div class="alert alert-danger">
		<i class="ti-user"></i> {{ $message }}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
	</div>
	@enderror
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
                <!-- Form -->
                <form id="form" method="POST" action="{{ route('admin.counselors.update', $psychologist->id) }}" enctype="multipart/form-data">
						
						@csrf
						@method('PUT')

						<div class="row">
							<div class="media align-items-center col-md-4 col-sm-12">
								<img src="{{ asset('storage/'. $psychologist->photo) }}" alt="" class="d-block ui-w-140" id="previewImage">
								<div class="media-body ml-4">
									<label class="btn btn-outline-primary mt-1">
										{{ __('admin.upload') }}
										<input type="file" class="account-settings-fileinput" name="photo" id="photo" onchange="previewPhoto();" accept=".jpg, .jpeg, .png">
										<input type="number" id="reset" name="reset" value="0" hidden>
									</label> &nbsp;
									<button type="button" class="btn btn-default md-btn-flat mt-1" onclick="resetPhoto();">{{ __('admin.reset') }}</button>
									<div class="text-light small mt-1">{{ __('admin.photoDescription') }}</div>
								</div>
							</div>

							<div class="col-md-8 sm-12">
								<div class="form-group">
									<label class="form-label" for="name">{{ __('admin.counselor.field.name') }} *</label>
									<input id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $psychologist->name }}" autofocus>
									@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<label class="form-label" for="email">{{ __('admin.counselor.field.email') }} *</label>
									<input id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $psychologist->email }}">
									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<label class="form-label" for="title">{{ __('admin.counselor.field.title') }} *</label>
									<input id="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $psychologist->title }}">
									@error('title')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="form-label" for="info">{{ __('admin.counselor.field.info') }}</label>
							<textarea id="info" name="info" class="form-control @error('description') is-invalid @enderror">{{ $psychologist->info }}</textarea>
							@error('info')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

						<div class="form-group">
							<label class="form-label" for="topic">{{ __('admin.counselor.field.topic') }}</label>
							<textarea id="topic" class="form-control @error('topic') is-invalid @enderror" name="topic" rows="3">{{ $psychologist->topic }}</textarea>
							@error('topic')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

						<div class="form-group">
							<label class="form-label" for="about">{{ __('admin.counselor.field.about') }}</label>
							<textarea id="about" class="form-control @error('about') is-invalid @enderror" name="about" rows="3">{{ $psychologist->about }}</textarea>
							@error('about')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						
						<div class="row">
							<div class="form-group col-md-6 col-12">
								<label class="form-label" for="country_code">Team</label>
								<select id="country_code" name="country_code" class="form-control">
									<option value="en" {{ $psychologist->country_code == 'en' ? 'selected' : '' }}>English</option>
									<option value="es" {{ $psychologist->country_code == 'es' ? 'selected' : '' }}>Español</option>
									<option value="pt" {{ $psychologist->country_code == 'pt' ? 'selected' : '' }}>EnglPortuguêsish</option>
									<option value="fi" {{ $psychologist->country_code == 'fi' ? 'selected' : '' }}>Suomi</option>
									<option value="se" {{ $psychologist->country_code == 'se' ? 'selected' : '' }}>Svenska</option>
									<option value="no" {{ $psychologist->country_code == 'no' ? 'selected' : '' }}>Norsk</option>
									<option value="dk" {{ $psychologist->country_code == 'dk' ? 'selected' : '' }}>Dansk</option>
									<option value="de" {{ $psychologist->country_code == 'de' ? 'selected' : '' }}>Deutsch</option>
									<option value="nl" {{ $psychologist->country_code == 'nl' ? 'selected' : '' }}>Nederlands</option>
									<option value="fr" {{ $psychologist->country_code == 'fr' ? 'selected' : '' }}>Français</option>
									<option value="it" {{ $psychologist->country_code == 'it' ? 'selected' : '' }}>Italiano</option>
									<option value="ru" {{ $psychologist->country_code == 'ru' ? 'selected' : '' }}>По-русски</option>
									<option value="tr" {{ $psychologist->country_code == 'tr' ? 'selected' : '' }}>Türkçe</option>
									<option value="jp" {{ $psychologist->country_code == 'jp' ? 'selected' : '' }}>日本語</option>
									<option value="cn" {{ $psychologist->country_code == 'cn' ? 'selected' : '' }}>中文</option>
								</select>
								@error('country_code')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
						
						<div class="row">
							<div class="form-group col-12">
								<label class="form-label" for="services">Service alternatives</label>
								<select id="services" name="services[]" class="form-control @error('services') is-invalid @enderror" multiple>
									<optgroup label="SINGLE SESSIONS:">
										@foreach ($singleServices as $service)
											<option value="{{ $service->id }}" {{ collect($psychologist->services()->pluck('id'))->contains($service->id) ? 'selected' : '' }}>{{ $service->title }}</option>
										@endforeach
									</optgroup>
									<optgroup label="THERAPY PROGRAMS:">
										@foreach ($programServices as $service)
											<option value="{{ $service->id }}" {{ collect($psychologist->services()->pluck('id'))->contains($service->id) ? 'selected' : '' }}>{{ $service->title }}</option>
										@endforeach
									</optgroup>
								</select>
								@error('services')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="m-0 text-right">
							<button type="submit" class="btn btn-secondary" onclick="saveExit();">{{ __('admin.saveExit') }}</button>
						</div>
				  </form>
				  <!-- / Form -->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}">
<link href="{{ asset('assets/libs/summernote/summernote-bs4.css') }}" rel="stylesheet" />
<style>
	.account-settings-fileinput {
		position: absolute;
		visibility: hidden;
		width: 1px;
		height: 1px;
		opacity: 0
	}
	.invalid-feedback {
		display: block;
	}
	select.is-invalid+span .select2-selection {
		border-color: #d9534f !important;
	}
</style>
@endpush

@push('js')
<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('assets/libs/summernote/summernote-bs4.min.js') }}"></script>
<script>
	var defaultPhoto = "";
	$('#info').summernote({
		height: 200,                 // set editor height
		minHeight: null,             // set minimum height of editor
		maxHeight: null,             // set maximum height of editor
		focus: false                 // set focus to editable area after initializing summernote
	});
	$('#country_code')
		.wrap('<div class="position-relative"></div>')
		.select2({
			placeholder: 'Select value',
			dropdownParent: $('#country_code').parent()
		});
	$('#services')
		.wrap('<div class="position-relative"></div>')
		.select2({
			placeholder: 'Select value',
			dropdownParent: $('#services').parent()
		});

	function saveAnother() {
		event.preventDefault();
		$('#exit').val(false);
		$('#form').submit();
	}

	function saveExit() {
		event.preventDefault();
		$('#exit').val(true);
		$('#form').submit();
	}
	
	function previewPhoto() {
      var file = $('#photo')[0].files[0];
		if (file) {
			$("#previewImage").attr("src", URL.createObjectURL(file));
			$("#reset").val(0);
		} else {
			$("#previewImage").attr("src", defaultPhoto);
		}
	}

	function resetPhoto() {
      $("#previewImage").attr("src", defaultPhoto);
      $("#reset").val(1);
	}
</script>
@endpush