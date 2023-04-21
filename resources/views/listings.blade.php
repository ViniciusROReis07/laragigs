<h1>{{$heading}}</h1>

{{-- @php
    $number = 1
@endphp --}}

{{-- {{$number}} --}}

@if(count($listings) == 0)
    <p>No listings found</p>
@endif

@foreach($listings as $listing)
    <h2>{{$listing['title']}}</h2>
    <p>{{$listing['description']}}</p>
@endforeach
