<x-frontend-layout>
    <x-slot name="breadcrumbs">
        <x-breadcrumbs.item icon="house" href="{{route('frontend.dashboard')}}">Home</x-breadcrumbs.item>
        <x-breadcrumbs.item icon="network" href="{{route('frontend.cluster.list')}}" isActive="true">Cluster Management</x-breadcrumbs.item>
    </x-slot>
    <x-slot name="heading">
        Cluster Management
    </x-slot>
    <livewire:cluster.table/>
</x-frontend-layout>