<x-frontend-layout>
    <x-slot name="breadcrumbs">
        <x-breadcrumbs.item icon="house" href="{{route('frontend.dashboard')}}" active="false">Home</x-breadcrumbs.item>
        <x-breadcrumbs.item icon="user" href="{{route('frontend.profile')}}" active="true">Profile</x-breadcrumbs.item>
    </x-slot>
    <x-slot name="heading">
        User-Profile
    </x-slot>
    <livewire:auth.profile/>
</x-frontend-layout>