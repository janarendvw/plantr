@extends('layouts.app')

@section('content')
    <div id="no-plants-in-database" class="w-96 m-auto mt-24 flex flex-col items-center justify-center p-4 text-center">
        <div class="title">{{ __('app.welcome') }}</div>
        <div class="subtitle">{{ __('app.welcome-msg-plants') }}</div>
        <div class="text">{{ __('app.no-plants-in-database-msg') }}</div>
        <div class="button-group mt-2">
            <a class="button button-primary">
                <span class="material-symbols-rounded icon icon-sm">
                    add_circle
                </span>
                {{ __('app.add-new-plant') }}
            </a>
            <a class="button button-outline">
                <span class="material-symbols-rounded icon icon-sm">
                    place_item
                </span>
                {{ __('app.import-plants') }}
            </a>
        </div>
    @endsection
