@extends('admin.layouts.app_admin')

@section('content')
<div class="container">	
	@component('admin.components.breadcrumb')
	@slot('title') Список категорий @endslot
	@slot('parent') Главная @endslot
	@slot('active') Категории @endslot
	@endcomponent

	<hr />

	<form class="form-horizontal" action="{{route('admin.dish.store')}}" method="post">
		{{ csrf_field() }}

		




		
	</form>

</div>