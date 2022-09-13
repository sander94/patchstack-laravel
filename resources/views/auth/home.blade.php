@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="flex justify-between mb-20">
                        <h2>Total listed: {{ @count($vulnerabilities) }}</h2>
                        
                        <a href="{{ route('create') }}" class="btn btn-success special-btn"><i class="fa fa-plus fa-fw"></i> Create new vulnerability</a>
                     </div>

                    <table class="table table-striped">
                         <thead class="thead-dark">
                            <tr>
                              <th scope="row" style="width: 30px;">#</th>
                              
                              <th scope="col">Title</th>
                              <th scope="col" style="width: 90px;">Edit</th>
                              <th scope="col" style="width: 120px;">Delete</th>
                            </tr>
                          </thead>

                          <tbody>
                            
                            @foreach($vulnerabilities as $counter => $vuln) 


                                <tr>
                                    <td>{{ $counter+1 }}</td>
                                    
                                    <td>
                                        <a href="{{ route('vulnerability.edit', $vuln->id) }}">{{ $vuln->title }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('vulnerability.edit', $vuln->id) }}" class="btn btn-primary"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                                    </td>
                                    <td>
                                            <form action="" method="post" onsubmit="return confirm('Are you sure?');">
                                              @csrf
                                              <button class="btn btn-danger" type="submit" name="vulnerability_id" value="{{ $vuln->id }}">Delete</button>
                                            </form>
                                    </td>
                                    </th>
                                </tr>
                          
                            @endforeach
                        </tbody>
                    </table>

                 </div>
            </div>
        </div>
    </div>
</div>
@endsection
