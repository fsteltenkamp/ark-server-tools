<div>
    <div class="px-4">
        <button class="button is-primary" wire:click="createServer">
            <x-icon i="plus" spe="2"/>
            Add Server
        </button>
    </div>
    @if (session()->has('error'))
        <div class="notification is-danger">
            {{ session('error') }}
        </div>
    @endif
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>Server Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servers as $server)
                <tr>
                    <td>{{ $server->name }}</td>
                    <td>
                        <button class="button is-small is-primary" href="{{route('frontend.server.edit', $server->id)}}" wire:navigate>
                            <x-icon i="pen" spe="2"/>
                        </button>
                        <button class="button is-small is-danger" href="#" wire:click="deleteServer({{ $server->id }})" wire:confirm='Are you sure you want to delete the Server "{{$server->name}}"?'>
                            <x-icon i="trash" spe="2"/>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>