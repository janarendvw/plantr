@extends('layouts.app')

@section('content')
    <div class="px-10 py-5 scan-new-plant-msg m-auto flex flex-col justify-center items-center mt-36">
        <div class="title text-center mt-4">
{{ __('app.welcome') }}
        </div>
        <div class="subtitle text-black/50 text-center">
            {{ __('app.welcome-msg-plants') }}
        </div>
        <div class="text text-center w-80 mt-4">
            {{ __('app.no-plants-in-database-msg') }}
        </div>
        <div class="button-group flex flex-row justify-center items-center mt-4">
            <a href="" class="button hover:button-hover text">
               <span class="material-symbols-rounded mr-2 icon-sm">add_circle</span> {{ __('app.add-new-plant') }}
            </a>
            <a href="" class="button button-outline">
                <span class="material-symbols-rounded mr-2 icon-sm">Place_item</span>   {{ __('app.import-plants') }}
            </a>
    </div>
@endsection
