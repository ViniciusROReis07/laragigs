<h1>{{$heading}}</h1>

{{-- @php
    $number = 1
@endphp --}}

{{-- {{$number}} --}}
{{-- 
@if(count($listings) == 0)
    <p>No listings found</p>
@endif --}}

{{-- A diretiva @unless em Laravel é usada para executar um bloco de código se a expressão fornecida como argumento for falsa. --}}
@unless (count($listings) == 0)
    @foreach($listings as $listing)
        <h2>{{$listing['title']}}</h2>
        <p>{{$listing['description']}}</p>
    @endforeach
    @else
    <p>No listings found</p>
@endunless
    

