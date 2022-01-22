<div class="content contentZoomIn">
	@php
		Helpers::data_index_set(100);
	@endphp
	@if($album->children->count() > 0)
		@if($album->photos->count() > 0)
		<div class='divider'>
			<h1>{{ Lang::get('ALBUMS') }}</h1>
		</div>
		@endif
		{{-- @foreach ($album->children as $data)
			@include('livewire.parts.album')
		@endforeach --}}
		@if($album->photos->count() > 0)
			<div class='divider'>
				<h1>{{ Lang::get('PHOTOS') }}</h1>
			</div>
		@endif
	@endif
	{{-- <div class="{{ $layout }}"> --}}
		{{-- @foreach ($album->photos as $data)
			<x-photo :data="$data" />
		@endforeach --}}
	{{-- </div> --}}
</div>