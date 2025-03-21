<x-frontend-layout>
    <x-slot name="breadcrumbs">
        <x-breadcrumbs.item icon="house" href="{{route('frontend.dashboard')}}">Home</x-breadcrumbs.item>
        <x-breadcrumbs.item icon="gear" href="#">LiveConfigs</x-breadcrumbs.item>
        <x-breadcrumbs.item icon="file-ini" href="{{route('frontend.liveConfigs.dynamicConfigs.list')}}" isActive="true">DynamicConfigs</x-breadcrumbs.item>
    </x-slot>
    <x-slot name="heading">
        LiveConfigs / DynamicConfigs
    </x-slot>
    <livewire:ase.liveConfigs.dynamicConfigs.dashboard :configs="$configs"/>
</x-frontend-layout>

