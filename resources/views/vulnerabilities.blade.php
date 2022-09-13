@extends('layouts/page')

@section('content')

	<p>Here you can see a list of OWASP things, Dave!</p>

	<table border="0" cellpadding="0" cellspacing="0">

		<tr>
			<td>Title</td>
			<td>Description</td>
			<td>How to prevent?</td>
		</tr>

	@foreach($vulnerabilities as $vulnerability)

		<tr>
			<td>
				{{ $vulnerability->title }}
			</td>
			<td>
				{{ $vulnerability->description }}
			</td>
			<td>
				{{ $vulnerability->prevention }}
			</td>
		</tr>

	@endforeach

	</table>

@endsection