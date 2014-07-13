@extends('_master')


@section('head')
	<link rel="stylesheet" href="lorem.css" type="text/css">
@stop

@section('title')
	Lorem Ipsum Generator
@stop

<style>
	a:link {
		text-decoration:underline;
	}
</style>


@section('content')

	<div class="container">
		<a href='/'>&larr; Home</a>
		<h1>Lorem Ipsum Generator</h1>
	
		How many paragraphs do you want?

		<form method='POST'>
			<input name="_token" type="hidden" value="Ul0GTOkJjFoZkU6rCiMJMjwBGJAyeZB6GE5HgPJk">	
			<label for="paragraphs">Paragraphs</label>
				@if(isset($retArr))			
					<input maxlength="2" name="paragraphs" type="text" value={{$retArr['numParagraphs']}} id="paragraphs"> (Max: 99)
				@else
					<input maxlength="2" name="paragraphs" type="text" value="5" id="paragraphs"> (Max: 99)

				@endif	
			
			<br><br>
				
			<input type="submit" value="Generate!">    
    	</form>

	</div>

	<div class="paragraphs-output"> 

		@if(isset($retArr))
				@foreach($retArr['paragraphs'] as $pars)
					<p>
						{{$pars}}
					</p>
				@endforeach
		@endif
	</div>


@stop

