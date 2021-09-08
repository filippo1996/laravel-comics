@extends('templates/layout')
@section('title','Home - Comics')
@section('content')
    @component('components.grid')
        @slot('name_category', 'Comic Books')
        {{--
        @foreach ($comicBooks as $comics)
            @component('components.card',[
                'img_card' => $comics['thumb'],
                'title_card' => $comics['title']
            ])
                
            @endcomponent
        @endforeach
        --}}

        {{-- Adesso proviamo a farlo con Vue.js 
        <card-component :comicbooks="{{ json_encode($comicBooks) }}"></card-component>
        --}}

        {{--
        <router-link to="/">Home</router-link>
        <router-link to="/test">About</router-link>
        --}}

        <router-view></router-view>
        
    @endcomponent
@endsection