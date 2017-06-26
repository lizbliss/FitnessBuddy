@extends('layouts.app')

@section('content')

<h2> Add Another Meal</h2>

<hr>

<div container="container">
<div class="meal-info">
<h2 class="meal-name">Breakfast&nbsp;</h2>

<span class="meal-time">
<?php
echo date('l jS \of F Y h:i:s A');
?>
</span>

<hr>

<span class="meal-data label label-pill label-default">
{{ $meal->protein() }} g Protein
</span>

<span class="meal-data label label-pill label-default">
{{ $meal->carbohydrates() }} g Carbohydrates
</span>

<span class="meal-data label label-pill label-default">
{{ $meal->fats() }} g Fat
</span>

</div>

<br>

<h3> Foods </h3>
<p> No Foods associated with this meal. Add some below. </p>

<br>

<form action="/meals" method="post">
<input type="hidden" name="_token" value="RxgIeTaqP8XG34QTyaIXX7ZK7FubAyALIM7So6ar">

		<div class="form-group row">
			<label for="name" class="col-sm-2 form-control-label">Food Name</label>
			<div class="col-sm-10">
				<input class="form-control" 
						type="text" 
						name="name" 
						placeholder="Food Name"
						required
						>
			</div>
		</div>

		<div class="form-group row">
			<label for="protein" class="col-sm-2 form-control-label">Protein</label>
			<div class="col-sm-10">
				<input class="form-control" 
						type="number" 
						name="protein" 
						placeholder="Protein/g"
						required
						>
			</div>
		</div>

		<div class="form-group row">
			<label for="carbohydrates" class="col-sm-2 form-control-label">Carbohydrates</label>
			<div class="col-sm-10">
				<input class="form-control" 
						type="number" 
						name="carbohydrates" 
						placeholder="Carbohydrates/g"
						required
						>
			</div>
		</div>

		<div class="form-group row">
			<label for="fat" class="col-sm-2 form-control-label">Fat</label>
			<div class="col-sm-10">
				<input class="form-control" 
						type="number" 
						name="fat" 
						placeholder="Fat/g"
						required
						>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-offset-2 col-sm-10">
				<button class="btn btn-primary" value="submit" type="submit">Submit</button>
			</div>
		</div>

	</form>


