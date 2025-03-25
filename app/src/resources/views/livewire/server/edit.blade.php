<div class="px-2">
    <fieldset>
        <legend>Edit The Server Details</legend>
        <div class="grid">
            <div class="field cell">
                <label class="label" for="name">Name</label>
                <div class="control">
                    <input
                        class="input"
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Name of the Server"
                        wire:model="dotServer.name"
                    />
                </div>
            </div>
            <div class="field cell">
                <label class="label" for="name">Cluster this Server belongs to</label>
                <div class="control">
                    <select
                        class="input"
                        id="cluster_id"
                        name="cluster_id"
                        wire:model="dotServer.cluster_id"
                    >
                        <option value="">Select a Cluster</option>
                        @foreach ($clusters as $cluster)
                            <option value="{{ $cluster->id }}">{{ $cluster->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="field cell">
                <label class="label" for="name">Description</label>
                <div class="control">
                    <input
                        class="input" 
                        id="description"
                        name="name"
                        type="text"
                        placeholder="Describe the Server"
                        wire:model="dotServer.description"
                    />
                </div>
            </div>
        </div>
        <button class="button is-success" wire:click="save">
            <x-icon i="floppy-disk" spe="2"/>Save
        </button>
    </fieldset>
</div>
