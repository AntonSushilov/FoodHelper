@extends('admin.layouts.app_admin')

@section('content')
<div class="container">	
	@component('admin.components.breadcrumb')
	@slot('title') Список категорий @endslot
	@slot('parent') Главная @endslot
	@slot('active') Категории @endslot
	@endcomponent

	<hr />

	<form class="form-horizontal" action="{{route('admin.category.update', ['category'=>$id])}}" method="post">
		{{ csrf_field() }}
		@method('PUT')


		<label for="">Наименование</label>
		<input type="text" class="form-control" name="title" value="{{$title}}" required>

		<label for="">Категория</label>
		<select class="form-control" name="category_id">
			<option value="0">-- без категории --</option>
				@include('admin.dishes.update_form',['categories' => $categories])
		</select>

		<label for="">Описание</label>
		<textarea type="text" class="form-control" name="info" required>{{$info}}</textarea>

		<label for="">Состав</label>
		<textarea type="text" class="form-control" name="composition"  required>{{$composition}}</textarea>

		<label for="">Рецепт</label>
		<textarea type="text" class="form-control" name="recipe" required>{{$recipe}}</textarea>

		<label for="">Количество калорий</label>
		<input type="integer" class="form-control" name="kcal" value="{{$kcal}}" required>

		<label for="">Количество белков</label>
		<input type="integer" class="form-control" name="protein" value="{{$protein}}" required>

		<label for="">Количество жиров</label>
		<input type="integer" class="form-control" name="fat" value="{{$fat}}" required>

		<label for="">Количество углеводов</label>
		<input type="integer" class="form-control" name="carbohydrate" value="{{$carbohydrate}}" required>

		<hr>

		<input class="btn btn-primary" type="submit" value="Сохранить">



	</form>

</div>
@endsection