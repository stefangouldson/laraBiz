@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard<span class="float-right"><a class="btn btn-secondary" href="{{ route('listings.create') }}">Create new</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Your Listings</h3>
                    <hr>

                    @if (count($listings)>0)

                    <table class="table table-striped">
                        <tr>
                            <th>Company</th>
                        </tr>
                        @foreach ($listings as $listing)
                            <tr>
                                <td>{{ $listing->name }}</td>
                                <td>
                                    <span class="float-right ml-2">
                                {{ Form::open( ['action' => ['ListingController@destroy', $listing->id], 'method'=>'POST']) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                {{ Form::close() }}
                                    </span>
                                    <a href="{{ route('listings.index') }}/{{$listing->id}}/edit" class="btn btn-success float-right">Edit</a>
                                </td>
                            </tr>
                        @endforeach

                    </table>

                    @else
                        <p>You don't have any listings</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
