<x-frontend-layout>
    <x-slot name="breadcrumbs">
        <x-breadcrumbs.item icon="house" href="{{route('frontend.dashboard')}}">Home</x-breadcrumbs.item>
        <x-breadcrumbs.item icon="computer" href="{{route('frontend.server.list')}}" isActive="true">Server Management</x-breadcrumbs.item>
    </x-slot>
    <x-slot name="heading">
        Server Management
    </x-slot>
    <livewire:server.table :clusterId="$clusterId"/>
</x-frontend-layout>