<x-layout>

@include('partials._hero')
@include('partials._search')
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
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
        <x-listing-card :listing="$listing"/>
    @endforeach
    @else
    <p>No listings found</p>
@endunless
    
</div>
</x-layout>