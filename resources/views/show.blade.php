@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $listing->name }}<span class="float-right"><a class="btn btn-secondary" href="{{ route('listings.index') }}">Go Back</a></span></div>

                    <div class="list-group">
                        <div class="list-group-item">
                            Address: {{ $listing->address }}
                        </div>

                        <div class="list-group-item">
                            Website: <a href="{{ $listing->website }}">{{ $listing->website }}</a>
                        </div>

                        <div class="list-group-item">
                            Email: <a href="mailto:{{ $listing->email }}?Subject=Hello" target="_top" >{{ $listing->email }} </a>
                        </div>

                        <div class="list-group-item">
                            Phone: {{ $listing->phone }}
                        </div>

                        <div class="list-group-item">
                            Bio: {{ $listing->bio }}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
