@extends('_master')


@section('head')
	<link rel="stylesheet" href="usergen.css" type="text/css">
@stop

@section('title')
	User Generator
@stop

<style>
	a:link {
		text-decoration:underline;
	}
</style>


@section('content')

	<div class="container">
		<a href='/'>&larr; Home</a>
		<h1>User Generator</h1>


		<form method='POST'>
			<input name="_token" type="hidden" value="Ul0GTOkJjFoZkU6rCiMJMjwBGJAyeZB6GE5HgPJk">	
			<label for="users">How many users?</label>		
			
			
			@if(isset($retArr))			
				<input maxlength="2" name="users" type="text" value={{$retArr['numUsers']}} id="users"> (Max: 99)
			@else
				<input maxlength="2" name="users" type="text" value="5" id="users"> (Max: 99)

			@endif	
			
			<br>
				Include...
			<br>
			@if(isset($retArr))	
				@if($retArr['bdayOption'])
					<input name="birthdate" type="checkbox" checked="checked">
				@else
					<input name="birthdate" type="checkbox">
				@endif
			@else
				<input name="birthdate" type="checkbox">
			@endif
			<label for="birthdate">Birthdate</label>		<br>
		
			@if(isset($retArr))	
				@if($retArr['profileOption'])
					<input name="profile" type="checkbox" checked="checked">
				@else
					<input name="profile" type="checkbox">
				@endif
			@else
				<input name="profile" type="checkbox">
			@endif		
			<label for="profile">Profile</label>		<br>
		
			<input name="_token" type="hidden" value="Ul0GTOkJjFoZkU6rCiMJMjwBGJAyeZB6GE5HgPJk">		
			<input type="submit" value="Generate!">    
    	</form>

	</div>

	
	<div class="container"> 

		@if(isset($retArr))
				@for ($i = 1; $i <= $retArr['numUsers']; $i++)
					<ul>
	     				<li>{{$retArr['faker']->name}}</li> 
	     				@if($retArr['bdayOption'])
	     					{{$retArr['faker']->dateTimeThisCentury->format('Y-m-d')}} <br>
     					@endif
     					@if($retArr['profileOption'])
	     					{{$retArr['faker']->text(100)}} <br>
     					@endif
	 				</ul>
				@endfor
		@endif
	</div>

@stop

