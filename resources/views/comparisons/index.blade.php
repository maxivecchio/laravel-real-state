@extends('layouts.public')

@section('content')


<div class="container marginTop" style="min-height: 90vh">

        <a class="breadcrumb-item active" aria-current="page"><a href="/properties"><i class="fa-solid fa-angle-left"></i> Go Back to Properties</a>
    <h1>Comparison History</h1>

    @if($comparisons->isEmpty())
        <h3>You don't have any comparison yet.</h3>
    @else
        <div class="row">
        @foreach($comparisons as $comparison)
            @if($comparison->property1 && $comparison->property2)
                <h5 class="mt-4">{{$comparison->created_at}}</h5>
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Characteristic</th>
                        <th>Property 1</th>
                        <th>Property 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Image</th>
                        <td><img src="{{ $comparison->property1->image_path }}" alt="Property 1 Image" style="height: 250px;"></td>
                        <td><img src="{{ $comparison->property2->image_path }}" alt="Property 2 Image" style="height: 250px;"></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>{{ $comparison->property1->type }}</td>
                        <td>{{ $comparison->property2->type }}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>${{ number_format($comparison->property1->price) }}</td>
                        <td>${{ number_format($comparison->property2->price) }}</td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td>{{ $comparison->property1->country }}</td>
                        <td>{{ $comparison->property2->country }}</td>
                    </tr>
                    <tr>
                        <th>State</th>
                        <td>{{ $comparison->property1->state }}</td>
                        <td>{{ $comparison->property2->state }}</td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td>{{ $comparison->property1->city }}</td>
                        <td>{{ $comparison->property2->city }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $comparison->property1->address }}</td>
                        <td>{{ $comparison->property2->address }}</td>
                    </tr>
                    <tr>
                        <th>Zipcode</th>
                        <td>{{ $comparison->property1->zipcode }}</td>
                        <td>{{ $comparison->property2->zipcode }}</td>
                    </tr>
                    <tr>
                        <th>Kitchens</th>
                        <td>{{ $comparison->property1->kitchen }}</td>
                        <td>{{ $comparison->property2->kitchen }}</td>
                    </tr>
                    <tr>
                        <th>Bedrooms</th>
                        <td>{{ $comparison->property1->bedroom }}</td>
                        <td>{{ $comparison->property2->bedroom }}</td>
                    </tr>
                    <tr>
                        <th>Bathrooms</th>
                        <td>{{ $comparison->property1->bathroom }}</td>
                        <td>{{ $comparison->property2->bathroom }}</td>
                    </tr>
                    <tr>
                        <th>Offices</th>
                        <td>{{ $comparison->property1->office }}</td>
                        <td>{{ $comparison->property2->office }}</td>
                    </tr>
                    <tr>
                        <th>Garage Capacity</th>
                        <td>{{ $comparison->property1->garage }}</td>
                        <td>{{ $comparison->property2->garage }}</td>
                    </tr>
                    <tr>
                        <th>Floors</th>
                        <td>{{ $comparison->property1->floors }}</td>
                        <td>{{ $comparison->property2->floors }}</td>
                    </tr>
                    <tr>
                        <th>Size (sqm)</th>
                        <td>{{ $comparison->property1->size }}</td>
                        <td>{{ $comparison->property2->size }}</td>
                    </tr>
                </tbody>
            </table>
            @else
                <div class="col-md-12">
                    <h3>Finish adding one more property to compare!</h3>
                </div>
            @endif
        @endforeach
        </div>
    @endif
</div>


@endsection