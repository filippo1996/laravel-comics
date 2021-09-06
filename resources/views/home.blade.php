@extends('templates/layout')
@section('title','Home - Comics')
@section('content')
    @component('components.grid')
        @slot('name_category', 'Comic Books')
        
        @foreach ($comicBooks as $comics)
            @component('components.card',[
                'img_card' => $comics['thumb'],
                'title_card' => $comics['title']
            ])
                
            @endcomponent
        @endforeach

    @endcomponent
@endsection