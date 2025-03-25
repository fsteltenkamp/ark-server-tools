<x-frontend-layout>
    <x-slot name="breadcrumbs">
        <x-breadcrumbs.item icon="house" href="{{route('frontend.dashboard')}}">Home</x-breadcrumbs.item>
        <x-breadcrumbs.item icon="computer" href="{{route('frontend.server.list')}}">Servers</x-breadcrumbs.item>
        <x-breadcrumbs.item icon="pen" href="{{route('frontend.server.edit', $server->id)}}" isActive="true">Edit {{$server->name}}</x-breadcrumbs.item>
    </x-slot>
    <x-slot name="heading">
        Server Management
    </x-slot>
    <livewire:server.edit :server="$server"/>
</x-frontend-layout>