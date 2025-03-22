<div class="px-2">
    <fieldset>
        <legend>Edit The Cluster Details</legend>
        <div class="grid">
            <div class="field cell">
                <label class="label" for="name">Name</label>
                <div class="control">
                    <input
                        class="input"
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Name of the Cluster"
                        wire:model="dotCluster.name"
                    />
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
                        placeholder="Describe the Cluster"
                        wire:model="dotCluster.description"
                    />
                </div>
            </div>
        </div>
        <button class="button is-success" wire:click="save">
            <x-icon i="floppy-disk" spe="2"/>Save
        </button>
    </fieldset>
</div>
