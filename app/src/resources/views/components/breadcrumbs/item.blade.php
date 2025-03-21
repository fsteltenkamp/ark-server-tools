<li
    class="@if ($isActive ?? false) is-active @endif"
>
    <a
        href="{{$href ?? '#'}}"
        @if ($isActive ?? false) aria-current="page" @endif
    >
        @if (isset($icon))
            <x-icon i="{{$icon}}" spe="2" />
        @endif
        <span>
            {{$slot}}
        </span>
    </a>
</li>
