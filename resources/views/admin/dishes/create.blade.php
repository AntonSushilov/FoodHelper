@extends('admin.layouts.app_admin')

@section('content')
<div class="container">	
	@component('admin.components.breadcrumb')
	@slot('title') Список блюд @endslot
	@slot('parent') Главная @endslot
	@slot('active') Блюда @endslot
	@endcomponent

	<hr />

	<form class="form-horizontal" action="{{route('admin.dish.store')}}" method="post">
		{{ csrf_field() }}

		
		<label for="">Наименование</label>
		<input type="text" class="form-control" name="title" placeholder="Название" value="{{$title}}" required>
		<hr>



		
	</form>

</div>
@endsection