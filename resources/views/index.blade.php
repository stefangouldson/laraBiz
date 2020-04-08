@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Latest Business Listings</div>

                    @if (count($listing)>0)

                    <div class="list-group">
                        @foreach ($listing as $listing)
                            <div class="list-group-item">
                                <a href="{{ route('listings.index') }}/{{ $listing->id }}" >{{ $listing->name }}</a>
                            </div>
                        @endforeach
                    </div>
                    @else
                        <p>There are currently no listings</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
