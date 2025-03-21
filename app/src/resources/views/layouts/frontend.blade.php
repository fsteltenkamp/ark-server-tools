<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="has-background-light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    @vite([
        'resources/css/app-light.css',
        'resources/js/app.js'
    ])
</head>

<body style="height: 100vh">
    <livewire:nav.top title="Ark:SE Server Management Panel" subtitle="{{$heading ?? 'Home/Dashboard'}}"/>
    <div class="columns">
        <div class="column is-one-fifth">
            <livewire:nav.main/>
        </div>
        <div class="column">
            <div class="level">
                <div class="level-left">
                    @if (isset($breadcrumbs))
                        <div class="container is-fluid mt-5 mb-5 level-item">
                            <x-breadcrumbs.main>
                                {{ $breadcrumbs }}
                            </x-breadcrumbs.main>
                        </div>
                    @endif
                </div>
                <div class="level-right">
                    @if (isset($heading_buttons) && !isset($heading))
                        <div class="container is-fluid level-right">
                            <ul>
                                {{ $heading_buttons }}
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            <!-- Page Content -->
            <main class="container is-fluid" style="margin-bottom:80px;">
                <div class="card py-5">
                    {{ $slot ?? '' }}
                </div>
            </main>
        </div>
    </div>
</body>
</html>
