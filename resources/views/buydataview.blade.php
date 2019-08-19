@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




                <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone Number</th>
	  <th scope="col">Email</th>
      <th scope="col">Journey Date</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($all_buydatas as $all_buydata)

    <tr>
      <td>{{ $all_buydata->name}}</td>
      <td>{{ $all_buydata->phone_number}}</td>
	  <td>{{ $all_buydata->email}}</td>
      <td>{{ $all_buydata->journey_date}}</td>
      
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
