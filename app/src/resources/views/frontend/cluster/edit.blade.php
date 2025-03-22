<x-frontend-layout>
    <x-slot name="breadcrumbs">
        <x-breadcrumbs.item icon="house" href="{{route('frontend.dashboard')}}">Home</x-breadcrumbs.item>
        <x-breadcrumbs.item icon="database" href="{{route('frontend.cluster.list')}}">Clusters</x-breadcrumbs.item>
        <x-breadcrumbs.item icon="pen" href="{{route('frontend.cluster.edit', $cluster->id)}}" isActive="true">Edit {{$cluster->name}}</x-breadcrumbs.item>
    </x-slot>
    <x-slot name="heading">
        Cluster Management
    </x-slot>
    <livewire:cluster.edit :cluster="$cluster"/>
</x-frontend-layout>