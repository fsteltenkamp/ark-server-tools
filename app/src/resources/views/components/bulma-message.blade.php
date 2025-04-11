<div class="message is-{{$type ?? 'primary'}}">
    <div class="message-header">
        <p>{{$header ?? 'Header'}}</p>
    </div>
    <div class="message-body">
        {{$slot ?? $body ?? 'Body'}}
    </div>
</div>