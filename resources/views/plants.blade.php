@extends('layouts.app')
@section('page-title', __('app.pt-plants-database'))
@section('content')
    <div id="no-plants-in-database" class="w-96 m-auto mt-[25vh] flex flex-col items-center justify-center p-4 text-center">
        <div class="title">{{ __('app.welcome') }}</div>
        <div class="subtitle mt-4">{{ __('app.welcome-msg-plants') }}</div>
        <div class="text">{{ __('app.no-plants-in-database-msg') }}</div>
        <div class="button-group mt-8">
            <a class="button button-primary button-pill">
                <span class="material-symbols-rounded icon icon-sm">
                    add_circle
                </span>
                {{ __('app.add-new-plant') }}
            </a>
            <a class="button button-text button-pill">
                <span class="material-symbols-rounded icon icon-sm">
                    place_item
                </span>
                {{ __('app.import-plants') }}
            </a>
        </div>
    @endsection
