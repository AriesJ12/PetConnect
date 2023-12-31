@extends(backpack_view('blank'))

@php
    $defaultBreadcrumbs = [
      trans('backpack::crud.admin') => url(config('backpack.base.route_prefix'), 'dashboard'),
      $crud->entity_name_plural => url($crud->route),
      trans('backpack::crud.preview') => false,
    ];

    // if breadcrumbs aren't defined in the CrudController, use the default breadcrumbs
    $breadcrumbs = $breadcrumbs ?? $defaultBreadcrumbs;
@endphp

@section('header')
    <div class="container-fluid d-flex justify-content-between my-3">
        <section class="header-operation animated fadeIn d-flex mb-2 align-items-baseline d-print-none" bp-section="page-header">
            <h1 class="text-capitalize mb-0" bp-section="page-heading">{!! $crud->getHeading() ?? $crud->entity_name_plural !!}</h1>
            <p class="ms-2 ml-2 mb-0" bp-section="page-subheading">{!! $crud->getSubheading() ?? mb_ucfirst(trans('backpack::crud.preview')).' '.$crud->entity_name !!}</p>
            @if ($crud->hasAccess('list'))
                <p class="ms-2 ml-2 mb-0" bp-section="page-subheading-back-button">
                    <small><a href="{{ url($crud->route) }}" class="font-sm"><i class="la la-angle-double-left"></i> {{ trans('backpack::crud.back_to_all') }} <span>{{ $crud->entity_name_plural }}</span></a></small>
                </p>
            @endif
        </section>
        <a href="javascript: window.print();" class="btn float-end float-right"><i class="la la-print"></i></a>
    </div>
@endsection

@section('content')
<div class="row" bp-section="crud-operation-show">
    <div class="{{ $crud->getShowContentClass() }}">
		
	{{-- Default box --}}
	<div class="">
		
	@if ($crud->model->translationEnabled())
		<div class="row">
			
			<div class="col-md-12 mb-2">
				{{-- Change translation button group --}}
				<div class="btn-group float-right">
				<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					{{trans('backpack::crud.language')}}: {{ $crud->model->getAvailableLocales()[request()->input('_locale')?request()->input('_locale'):App::getLocale()] }} &nbsp; <span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					@foreach ($crud->model->getAvailableLocales() as $key => $locale)
						<a class="dropdown-item" href="{{ url($crud->route.'/'.$entry->getKey().'/show') }}?_locale={{ $key }}">{{ $locale }}</a>
					@endforeach
				</ul>
				</div>
			</div>
		</div>
	@endif
		<div class="col-md-12 mb-2 text-center">
			<img src="" alt="" id="super-unique-image" class = "rounded" style="height: 200px; width:200px;">
		</div>
		@if($crud->tabsEnabled() && count($crud->getUniqueTabNames('columns')))
			@include('crud::inc.show_tabbed_table')
		@else
			<div class="card no-padding no-border mb-0">
				@include('crud::inc.show_table', ['columns' => $crud->columns()])
			</div>
		@endif
	</div>
	</div>
</div>
@endsection


<script>
    document.addEventListener('DOMContentLoaded', function() {
		//decide the default image
		let defaultImage = 'userImages/defaultImage.png';
		if(window.location.href.includes('user'))
		{
		defaultImage = 'userImages/defaultImage.png';
		}
		else if(window.location.href.includes('pet'))
		{
		defaultImage = 'petImages/defaultImage.jpg';
		}
		// Get all strong elements
		var strongs = document.querySelectorAll('strong');
		var imageElement = document.getElementById('super-unique-image');
		var photoFound = false;
		// Loop over the strong elements
		for (var i = 0; i < strongs.length; i++) {
			// If the strong contains the text "Photo:"
			if (strongs[i].textContent.trim() === "Photo:") {
				// Get the text content of the adjacent span
				var imagePath = strongs[i].parentNode.nextElementSibling.querySelector('span').textContent.trim();

				// Prepend the path to the storage directory
				var fullImagePath = '/storage/' + imagePath;

				// Set the src attribute of the img tag to the full image path
				imageElement.src = fullImagePath;

				// Set the flag to true
				photoFound = true;

				// Break the loop
				break;
			}
		}
		 if (!photoFound) {
        	imageElement.style.display = 'none';
		}

		// If the src attribute is "/storage/-", set it to the default image
		else if (imageElement.src.endsWith("/storage/-")) {
			imageElement.src = '/storage/' + defaultImage;
		}
	});
</script>