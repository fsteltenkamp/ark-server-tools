<x-frontend-layout>
    <x-slot name="breadcrumbs">
        <x-breadcrumbs.item icon="house" href="{{route('frontend.dashboard')}}" active="true">Home</x-breadcrumbs.item>
    </x-slot>
    <x-slot name="heading">
        Home / Dashboard
    </x-slot>
    Managing {{$ownedClustersCount ?? 'N/A'}} Clusters for you.<br/>
    Managing {{$ownedServersCount ?? 'N/A'}} Servers for you.<br/>
</x-frontend-layout>