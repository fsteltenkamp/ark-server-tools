<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="has-background-light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    @vite([
        'resources/css/themes/default.min.css',
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body>
    @include('partials.loader')
    @include('partials.navs.main')

    <div class="level" style="margin-top:60px;">
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

    @if (isset($header) || isset($heading))
        <!-- Page Heading -->
        @if (!empty($header))
            {{ $header }}
        @else
            <section class="hero is-small">
                <div class="hero-body">
                    <div class="container is-fluid">
                        <h1 class="title">{{ $heading }}</h1>
                        @if (isset($headingsubtitle))
                            <h2 class="subtitle">{{ $headingsubtitle }}</h2>
                        @endif
                    </div>
                </div>
                @if (isset($heading_buttons))
                    <div class="hero-foot">
                        <nav class="tabs">
                            <div class="container is-fluid">
                                <ul>
                                    {{ $heading_buttons }}
                                </ul>
                            </div>
                        </nav>
                    </div>
                @endif
            </section>
        @endif
    @endif

    <!-- Page Content -->
    <main class="container is-fluid" style="margin-bottom:80px;">
        <div class="card py-5">
            {{ $slot }}
        </div>
    </main>

    @include('partials.navs.footer')
</body>
<script>
    function showChangelog() {
        $('#changelog_popup').toggle();
        axios.get(`{{route('api.html.frontend.changelog.plain')}}`)
        .then(function (response) {
            $('#changelog_text').text(response.data);
        })
    }
</script>
<!-- Bulma Modal -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        util.removeLoader();
        // Functions to open and close a modal
        function openModal($el) {
            $el.classList.add('is-active');
        }

        function closeModal($el) {
            $el.classList.remove('is-active');
        }

        function closeAllModals() {
            (document.querySelectorAll('.modal') || []).forEach(($modal) => {
                closeModal($modal);
            });
        }

        // Add a click event on buttons to open a specific modal
        (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
            const modal = $trigger.dataset.target;
            const $target = document.getElementById(modal);

            $trigger.addEventListener('click', () => {
                openModal($target);
            });
        });

        // Add a click event on various child elements to close the parent modal
        (document.querySelectorAll(
            '.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || [])
        .forEach(($close) => {
            const $target = $close.closest('.modal');

            $close.addEventListener('click', () => {
                closeModal($target);
            });
        });

        // Add a keyboard event to close all modals
        document.addEventListener('keydown', (event) => {
            if (event.key === "Escape") {
                closeAllModals();
            }
        });
    });
</script>

</html>
