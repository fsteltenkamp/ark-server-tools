<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DynamicConfig extends Model
{
    protected $fillable = [
        'name',
        'description',
        'ActiveEventColors','BabyCuddleIntervalMultiplier','BabyFoodConsumptionSpeedMultiplier',
        'BabyImprintAmountMultiplier','BabyMatureSpeedMultiplier','bDisableDinoDecayPvE','bDisableStructureDecayPvE',
        'bPvPDinoDecay','bPvPStructureDecay','bUseAlarmNotifications','CropGrowthSpeedMultiplier','CustomRecipeEffectivenessMultiplier',
        'DinoCharacterFoodDrainMultiplier','DisableTimestampVerification','DisableWorldBuffs','DynamicUndermeshRegions',
        'DynamicColorset','EggHatchSpeedMultiplier','EnableFullDump','EnableWorldBuffScaling','GMaxFlameThrowerServerTicksPerFrame',
        'GlobalSpoilingTimeMultiplier','GUseServerNetSpeedCheck','HarvestAmountMultiplier','HexagonRewardMultiplier','MatingIntervalMultiplier',
        'MatingSpeedMultiplier','NPCReplacements','PvEDinoDecayPeriodMultiplier','PvEStructureDecayPeriodMultiplier','StructureDamageMultiplier',
        'TamingSpeedMultiplier','TributeDinoExpirationSeconds','TributeItemExpirationSeconds','XPMultiplier','WorldBuffScalingEfficacy'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Generates the content of an ini file from the database.
     * @return string The content of an ini file.
     */
    public function generateIni()
    {
        // Pull all variables from the database, and assemble them into an INI file
        $config = collect($this->attributes);
        $config->forget(['id', 'name', 'description', 'user_id', 'created_at', 'updated_at']);
        $ini = '';
        foreach ($config as $key => $value) {
            if (is_bool($value)) {
                $value = $value ? 'True' : 'False';
            }
            if (empty($value) || is_null($value)) {
                continue;
            }
            $ini .= "$key=$value\n";
        }
        return $ini;
    }
}
