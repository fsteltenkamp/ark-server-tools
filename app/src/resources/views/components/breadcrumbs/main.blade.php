<nav class="breadcrumb" aria-label="breadcrumbs">
    <ul>
        @if (isset($crumbs) && is_array($crumbs) && count($crumbs) > 0)
            @foreach ($crumbs as $crumb)
                <x-breadcrumbs.item
                    :label="$crumb['label']"
                    :href="$crumb['href']"
                    :icon="$crumb['icon']"
                    :isActive="$crumb['isActive']"
                />
            @endforeach
        @else
            {{$slot}}
        @endif
    </ul>
</nav>
