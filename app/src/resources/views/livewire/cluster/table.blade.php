<div>
    <div class="px-4">
        <button class="button is-primary" wire:click="createCluster">
            <x-icon i="plus" spe="2"/>
            Add Cluster
        </button>
    </div>
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>Cluster Name</th>
                <th>Servers</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clusters as $cluster)
                <tr>
                    <td>{{ $cluster->name }}</td>
                    <td>{{ count($cluster->servers) }}</td>
                    <td>
                        <button class="button is-small is-primary" href="{{route('frontend.cluster.edit', $cluster->id)}}" wire:navigate>
                            <x-icon i="pen" spe="2"/>
                        </button>
                        <button class="button is-small is-info" href="{{route('frontend.server.list', $cluster->id)}}" wire:navigate>
                            <x-icon i="computer-tower" spe="2"/>
                        </button>
                        <button class="button is-small is-danger" href="#" wire:click="deleteCluster({{ $cluster->id }})" wire:confirm='Are you sure you want to delete the Cluster "{{$cluster->name}}"?'
                            <x-icon i="trash" spe="2"/>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>