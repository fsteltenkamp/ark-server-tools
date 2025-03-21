<x-frontend-layout>
    <x-slot name="breadcrumbs">
        <x-breadcrumbs.item icon="house" href="{{route('frontend.dashboard')}}">Home</x-breadcrumbs.item>
        <x-breadcrumbs.item icon="network" href="{{route('frontend.clusterManagement.dashboard')}}" isActive="true">Cluster Management</x-breadcrumbs.item>
    </x-slot>
    <x-slot name="heading">
        Cluster Management
    </x-slot>
    <x-slot name="heading_buttons">
        <button class="button is-primary">Create Cluster</button>
    </x-slot>
    Managing {{$ownedAseClustersCount ?? 'N/A'}} Clusters for you.<br/>
</x-frontend-layout>