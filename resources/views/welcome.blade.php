@extends('layouts.base')
@section('content')
    @livewireStyles
    <x-header />
    @livewire('show-form')
    @livewireScripts
@endsection
