@extends('layouts.app')

@section('content')

<h2> All Meals </h2>

@if (!$meals->isEmpty())

<ul class="list-group">
	@foreach ($meals as $meal)
		<li class="list-group-item">
			{{ $meal->name }}
		</li>
@endforeach
</ul>
@else

<h4>You have no meals <a href="/meals/create"> Create one now </a></h4> 

@endif
@stop