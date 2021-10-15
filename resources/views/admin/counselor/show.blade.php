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
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
                <!-- Form -->
                <form id="form">
						<div class="row">
							<div class="media align-items-center col-md-4 col-sm-12">
								<img src="{{ asset('storage/'. $psychologist->photo) }}" alt="" class="d-block ui-w-140" id="previewImage">
							</div>

							<div class="col-md-8 sm-12">
								<div class="form-group">
									<label class="form-label" for="name">{{ __('admin.counselor.field.name') }}</label>
									<input id="name" class="form-control" name="name" value="{{ $psychologist->name }}" disabled>
								</div>
								<div class="form-group">
									<label class="form-label" for="email">{{ __('admin.counselor.field.email') }}</label>
									<input id="email" class="form-control" name="email" value="{{ $psychologist->email }}" disabled>
								</div>
								<div class="form-group">
									<label class="form-label" for="title">{{ __('admin.counselor.field.title') }}</label>
									<input id="title" class="form-control" name="title" value="{{ $psychologist->title }}" disabled>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="form-label" for="info">{{ __('admin.counselor.field.info') }}</label>
							<textarea id="info" name="info" class="form-control">{{ $psychologist->info }}</textarea>
						</div>

						<div class="form-group">
							<label class="form-label" for="topic">{{ __('admin.counselor.field.topic') }}</label>
							<textarea id="topic" class="form-control" name="topic" rows="3" disabled>{{ $psychologist->topic }}</textarea>
						</div>

						<div class="form-group">
							<label class="form-label" for="about">{{ __('admin.counselor.field.about') }}</label>
							<textarea id="about" class="form-control" name="about" rows="3" disabled>{{ $psychologist->about }}</textarea>
						</div>
						
						<div class="row">
							<div class="form-group col-md-6 col-12">
								<label class="form-label" for="country_code">Team</label>
								<select id="country_code" name="country_code" class="form-control" disabled>
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
							</div>
						</div>
						
						<div class="row">
							<div class="form-group col-12">
								<label class="form-label" for="services">Service alternatives</label>
								<select id="services" name="services[]" class="form-control @error('services') is-invalid @enderror" multiple disabled>
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
							</div>
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
	#previewImage {
		width: 220px !important;
		height: 220px !important;
		margin: auto;
		object-fit: cover;
	}
</style>
@endpush

@push('js')
<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('assets/libs/summernote/summernote-bs4.min.js') }}"></script>
<script>
	var defaultPhoto = "";
	$('#info').summernote('disable');
	$('#services')
		.wrap('<div class="position-relative"></div>')
		.select2({
			placeholder: 'Select value',
			dropdownParent: $('#services').parent()
		});
</script>
@endpush