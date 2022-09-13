@extends('layouts/page')

@section('content')

	<h2 class="text-center" style="margin-top: 100px;">Here you can see a list of OWASP things, Dave!</h2>

	<table border="0" cellpadding="0" cellspacing="0" class="vuln-table">

		<tr>
			<td>ID</td>
			<td>Title</td>
			<td>View</td>
		</tr>

	@foreach($vulnerabilities as $vulnerability)

		<tr>
			<td>
				{{ $vulnerability->id }}
			</td>
			<td>
				<a href="{{ route('vulnerability', $vulnerability->id) }}">{{ $vulnerability->title }}</a>
			</td>
			<td>
				<a href="{{ route('vulnerability', $vulnerability->id) }}"><i class="fa fa-eye"></i></a>
			</td>
		</tr>

	@endforeach

	</table>

@endsection