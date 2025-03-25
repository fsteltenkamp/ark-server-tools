<div class="px-2">
    <fieldset>
        <legend>Edit The Configs Details</legend>
        <div class="grid">
            <div class="field cell">
                <label class="label" for="name">Name</label>
                <div class="control">
                    <input
                        class="input"
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Name of the Config"
                        wire:model="dotConfig.name"
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
                        placeholder="Describe the Config"
                        wire:model="dotConfig.description"
                    />
                </div>
            </div>
        </div>
        <button class="button is-success" wire:click="save">
            <x-icon i="floppy-disk" spe="2"/>Save
        </button>
    </fieldset>
    <hr/>
    
<fieldset>
    <legend>Edit Values</legend>
        <div class="fixed-grid">
            <div class="grid has-3-cols">
                <div class="field cell">
                    <label class="label" for="ActiveEventColors">ActiveEventColors</label>
                    <div class="control">
                        <select
                            class="input"
                            id="ActiveEventColors"
                            name="ActiveEventColors"
                            wire:model="dotConfig.ActiveEventColors"
                        >
                            <option value="">None</option>
                            <option value="easter">ARK: Eggcellent Adventure 7</option>
                            <option value="FearEvolved">ARK: Fear Evolved 6</option>
                            <option value="PAX">ARK: PAX Party</option>
                            <option value="Summer">ARK: Summer EVO</option>
                            <option value="TurkeyTrial">ARK: Turkey Trial 6</option>
                            <option value="vday">Valentine's EVO Event</option>
                            <option value="WinterWonderland">ARK: Winter Wonderland 7</option>
                            <option value="custom">Custom</option>
                        </select>
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="BabyCuddleIntervalMultiplier">BabyCuddleIntervalMultiplier</label>
                    <div class="control">
                        <input
                            class="input"
                            id="BabyCuddleIntervalMultiplier"
                            name="BabyCuddleIntervalMultiplier"
                            type="number"
                            wire:model="dotConfig.BabyCuddleIntervalMultiplier"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="BabyFoodConsumptionSpeedMultiplier">BabyFoodConsumptionSpeedMultiplier</label>
                    <div class="control">
                        <input
                            class="input"
                            id="BabyFoodConsumptionSpeedMultiplier"
                            name="BabyFoodConsumptionSpeedMultiplier"
                            type="number"
                            wire:model="dotConfig.BabyFoodConsumptionSpeedMultiplier"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="BabyImprintAmountMultiplier">BabyImprintAmountMultiplier</label>
                    <div class="control">
                        <input
                            class="input"
                            id="BabyImprintAmountMultiplier"
                            name="BabyImprintAmountMultiplier"
                            type="number"
                            wire:model="dotConfig.BabyImprintAmountMultiplier"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="BabyMatureSpeedMultiplier">BabyMatureSpeedMultiplier</label>
                    <div class="control">
                        <input
                            class="input"
                            id="BabyMatureSpeedMultiplier"
                            name="BabyMatureSpeedMultiplier"
                            type="number"
                            wire:model="dotConfig.BabyMatureSpeedMultiplier"
                        />
                    </div>
                </div>
                <div class="field cell p-5">
                    <label class="switch is-rounded">
                        <input type="checkbox" 
                            id="bDisableStructureDecayPvE"
                            name="bDisableStructureDecayPvE"
                            wire:model="dotConfig.bDisableStructureDecayPvE"
                        />
                        <span class="check"></span>
                        <span class="control-label">bDisableStructureDecayPvE</span>
                    </label>
                </div>
                <div class="field cell p-5">
                    <label class="switch is-rounded">
                        <input type="checkbox"
                            id="bPvPDinoDecay"
                            name="bPvPDinoDecay"
                            wire:model="dotConfig.bPvPDinoDecay"
                        >
                        <span class="check"></span>
                        <span class="control-label">bPvPDinoDecay</span>
                    </label>
                </div>
                <div class="field cell p-5">
                    <label class="switch is-rounded">
                        <input type="checkbox"
                            id="bPvPStructureDecay"
                            name="bPvPStructureDecay"
                            wire:model="dotConfig.bPvPStructureDecay"
                        >
                        <span class="check"></span>
                        <span class="control-label">bPvPStructureDecay</span>
                    </label>
                </div>
                <div class="field cell p-5">
                    <label class="switch is-rounded">
                        <input type="checkbox"
                            id="bUseAlarmNotifications"
                            name="bUseAlarmNotifications"
                            wire:model="dotConfig.bUseAlarmNotifications"
                        >
                        <span class="check"></span>
                        <span class="control-label">bPvPbUseAlarmNotificationsDinoDecay</span>
                    </label>
                </div>
                <div class="field cell">
                    <label class="label" for="CropGrowthSpeedMultiplier">CropGrowthSpeedMultiplier</label>
                    <div class="control">
                        <input
                            class="input"
                            id="CropGrowthSpeedMultiplier"
                            name="CropGrowthSpeedMultiplier"
                            type="number"
                            wire:model="dotConfig.CropGrowthSpeedMultiplier"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="CustomRecipeEffectivenessMultiplier">CustomRecipeEffectivenessMultiplier</label>
                    <div class="control">
                        <input
                            class="input"
                            id="CustomRecipeEffectivenessMultiplier"
                            name="CustomRecipeEffectivenessMultiplier"
                            type="number"
                            wire:model="dotConfig.CustomRecipeEffectivenessMultiplier"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="DinoCharacterFoodDrainMultiplier">DinoCharacterFoodDrainMultiplier</label>
                    <div class="control">
                        <input
                            class="input"
                            id="DinoCharacterFoodDrainMultiplier"
                            name="DinoCharacterFoodDrainMultiplier"
                            type="number"
                            wire:model="dotConfig.DinoCharacterFoodDrainMultiplier"
                        />
                    </div>
                </div>
                <div class="field cell p-5">
                    <label class="switch is-rounded">
                        <input type="checkbox"
                            id="DisableTimestampVerification"
                            name="DisableTimestampVerification"
                            wire:model="dotConfig.DisableTimestampVerification"
                        >
                        <span class="check"></span>
                        <span class="control-label">DisableTimestampVerification</span>
                    </label>
                </div>
                <div class="field cell">
                    <label class="label" for="DisableWorldBuffs">DisableWorldBuffs</label>
                    <div class="control">
                        <input
                            class="input"
                            id="DisableWorldBuffs"
                            name="DisableWorldBuffs"
                            type="text"
                            wire:model="dotConfig.DisableWorldBuffs"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="DynamicUndermeshRegions">DynamicUndermeshRegions</label>
                    <div class="control">
                        <input
                            class="input"
                            id="DynamicUndermeshRegions"
                            name="DynamicUndermeshRegions"
                            type="text"
                            wire:model="dotConfig.DynamicUndermeshRegions"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="DynamicColorset">DynamicColorset</label>
                    <div class="control">
                        <input
                            class="input"
                            id="DynamicColorset"
                            name="DynamicColorset"
                            type="text"
                            wire:model="dotConfig.DynamicColorset"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="EggHatchSpeedMultiplier">EggHatchSpeedMultiplier</label>
                    <div class="control">
                        <input
                            class="input"
                            id="EggHatchSpeedMultiplier"
                            name="EggHatchSpeedMultiplier"
                            type="number"
                            wire:model="dotConfig.EggHatchSpeedMultiplier"
                        />
                    </div>
                </div>
                <div class="field cell p-5">
                    <label class="switch is-rounded">
                        <input type="checkbox"
                            id="EnableFullDump"
                            name="EnableFullDump"
                            wire:model="dotConfig.EnableFullDump"
                        >
                        <span class="check"></span>
                        <span class="control-label">EnableFullDump</span>
                    </label>
                </div>
                <div class="field cell p-5">
                    <label class="switch is-rounded">
                        <input type="checkbox"
                            id="EnableWorldBuffScaling"
                            name="EnableWorldBuffScaling"
                            wire:model="dotConfig.EnableWorldBuffScaling"
                        >
                        <span class="check"></span>
                        <span class="control-label">EnableWorldBuffScaling</span>
                    </label>
                </div>
                <div class="field cell">
                    <label class="label" for="GMaxFlameThrowerServerTicksPerFrame">GMaxFlameThrowerServerTicksPerFrame</label>
                    <div class="control">
                        <input
                            class="input"
                            id="GMaxFlameThrowerServerTicksPerFrame"
                            name="GMaxFlameThrowerServerTicksPerFrame"
                            type="number"
                            wire:model="dotConfig.GMaxFlameThrowerServerTicksPerFrame"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="GlobalSpoilingTimeMultiplier">GlobalSpoilingTimeMultiplier</label>
                    <div class="control">
                        <input
                            class="input"
                            id="GMaxFlameTGlobalSpoilingTimeMultiplierhrowerServerTicksPerFrame"
                            name="GlobalSpoilingTimeMultiplier"
                            type="number"
                            wire:model="dotConfig.GlobalSpoilingTimeMultiplier"
                        />
                    </div>
                </div>
                <div class="field cell p-5">
                    <label class="switch is-rounded">
                        <input type="checkbox"
                            id="GUseServerNetSpeedCheck"
                            name="GUseServerNetSpeedCheck"
                            wire:model="dotConfig.GUseServerNetSpeedCheck"
                        >
                        <span class="check"></span>
                        <span class="control-label">GUseServerNetSpeedCheck</span>
                    </label>
                </div>
                <div class="field cell">
                    <label class="label" for="HarvestAmountMultiplier">HarvestAmountMultiplier</label>
                    <div class="control">
                        <input
                            class="input"
                            id="HarvestAmountMultiplier"
                            name="HarvestAmountMultiplier"
                            type="number"
                            wire:model="dotConfig.HarvestAmountMultiplier"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="HexagonRewardMultiplier">HexagonRewardMultiplier</label>
                    <div class="control">
                        <input
                            class="input"
                            id="HexagonRewardMultiplier"
                            name="HexagonRewardMultiplier"
                            type="number"
                            wire:model="dotConfig.HexagonRewardMultiplier"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="MatingIntervalMultiplier">MatingIntervalMultiplier</label>
                    <div class="control">
                        <input
                            class="input"
                            id="MatingIntervalMultiplier"
                            name="MatingIntervalMultiplier"
                            type="number"
                            wire:model="dotConfig.MatingIntervalMultiplier"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="MatingSpeedMultiplier">MatingSpeedMultiplier</label>
                    <div class="control">
                        <input
                            class="input"
                            id="MatingSpeedMultiplier"
                            name="MatingSpeedMultiplier"
                            type="number"
                            wire:model="dotConfig.MatingSpeedMultiplier"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="NPCReplacements">NPCReplacements</label>
                    <div class="control">
                        <input
                            class="input"
                            id="NPCReplacements"
                            name="NPCReplacements"
                            type="text"
                            wire:model="dotConfig.NPCReplacements"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="PvEDinoDecayPeriodMultiplier">PvEDinoDecayPeriodMultiplier</label>
                    <div class="control">
                        <input
                            class="input"
                            id="PvEDinoDecayPeriodMultiplier"
                            name="PvEDinoDecayPeriodMultiplier"
                            type="number"
                            wire:model="dotConfig.PvEDinoDecayPeriodMultiplier"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="PvEStructureDecayPeriodMultiplier">PvEStructureDecayPeriodMultiplier</label>
                    <div class="control">
                        <input
                            class="input"
                            id="PvEStructureDecayPeriodMultiplier"
                            name="PvEStructureDecayPeriodMultiplier"
                            type="number"
                            wire:model="dotConfig.PvEStructureDecayPeriodMultiplier"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="StructureDamageMultiplier">StructureDamageMultiplier</label>
                    <div class="control">
                        <input
                            class="input"
                            id="StructureDamageMultiplier"
                            name="StructureDamageMultiplier"
                            type="number"
                            wire:model="dotConfig.StructureDamageMultiplier"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="TamingSpeedMultiplier">TamingSpeedMultiplier</label>
                    <div class="control">
                        <input
                            class="input"
                            id="TamingSpeedMultiplier"
                            name="TamingSpeedMultiplier"
                            type="number"
                            wire:model="dotConfig.TamingSpeedMultiplier"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="TributeDinoExpirationSeconds">TributeDinoExpirationSeconds</label>
                    <div class="control">
                        <input
                            class="input"
                            id="TributeDinoExpirationSeconds"
                            name="TributeDinoExpirationSeconds"
                            type="number"
                            wire:model="dotConfig.TributeDinoExpirationSeconds"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="TributeItemExpirationSeconds">TributeItemExpirationSeconds</label>
                    <div class="control">
                        <input
                            class="input"
                            id="TributeItemExpirationSeconds"
                            name="TributeItemExpirationSeconds"
                            type="number"
                            wire:model="dotConfig.TributeItemExpirationSeconds"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="XPMultiplier">XPMultiplier</label>
                    <div class="control">
                        <input
                            class="input"
                            id="XPMultiplier"
                            name="XPMultiplier"
                            type="number"
                            wire:model="dotConfig.XPMultiplier"
                        />
                    </div>
                </div>
                <div class="field cell">
                    <label class="label" for="WorldBuffScalingEfficacy">WorldBuffScalingEfficacy</label>
                    <div class="control">
                        <input
                            class="input"
                            id="WorldBuffScalingEfficacy"
                            name="WorldBuffScalingEfficacy"
                            type="number"
                            wire:model="dotConfig.WorldBuffScalingEfficacy"
                        />
                    </div>
                </div>
            </div>
        </div>
        <button class="button is-success" wire:click="save">
            <x-icon i="floppy-disk" spe="2"/>Save
        </button>
    </fieldset>
</div>
