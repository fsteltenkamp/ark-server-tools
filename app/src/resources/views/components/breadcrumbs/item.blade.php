<li
    class="@if ($isActive ?? false) is-active @endif"
>
    <a
        href="{{$href ?? '#'}}"
        @if ($isActive ?? false) aria-current="page" @endif
    >
        @if (isset($icon))
            <span class="icon is-small">
                <i class="{{$icon}}" aria-hidden="true"/>
            </span>
        @endif
        <span>
            {{$slot}}
        </span>
    </a>
</li>
