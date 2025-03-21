<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('ase_dynamic_configs', function (Blueprint $table) {
            $table->string('ActiveEventColors');
            $table->float('BabyCuddleIntervalMultiplier')->nullable()->default(1.0);
            $table->float('BabyFoodConsumptionSpeedMultiplier')->nullable()->default(1.0);
            $table->float('BabyImprintAmountMultiplier')->nullable()->default(1.0);
            $table->float('BabyMatureSpeedMultiplier')->nullable()->default(1.0);
            $table->boolean('bDisableDinoDecayPvE')->nullable()->default(false);
            $table->boolean('bDisableStructureDecayPvE')->nullable()->default(false);
            $table->boolean('bPvPDinoDecay')->nullable()->default(false);
            $table->boolean('bPvPStructureDecay')->nullable()->default(false);
            $table->boolean('bUseAlarmNotifications')->nullable()->default(false);
            $table->float('CropGrowthSpeedMultiplier')->nullable()->default(1.0);
            $table->float('CustomRecipeEffectivenessMultiplier')->nullable()->default(1.0);
            $table->float('DinoCharacterFoodDrainMultiplier')->nullable()->default(1.0);
            $table->boolean('DisableTimestampVerification')->nullable()->default(false);
            $table->string('DisableWorldBuffs')->nullable()->default('');
            $table->string('DynamicUndermeshRegions')->nullable()->default('');
            $table->string('DynamicColorset')->nullable()->default('');
            $table->float('EggHatchSpeedMultiplier')->nullable()->default(1.0);
            $table->string('EnableFullDump')->nullable()->default('');
            $table->boolean('EnableWorldBuffScaling')->nullable()->default(false);
            $table->integer('GMaxFlameThrowerServerTicksPerFrame')->nullable()->default(5);
            $table->float('GlobalSpoilingTimeMultiplier')->nullable()->default(1.0);
            $table->boolean('GUseServerNetSpeedCheck')->nullable()->default(false);
            $table->float('HarvestAmountMultiplier')->nullable()->default(1.0);
            $table->float('HexagonRewardMultiplier')->nullable()->default(1.0);
            $table->float('MatingIntervalMultiplier')->nullable()->default(1.0);
            $table->float('MatingSpeedMultiplier')->nullable()->default(1.0);
            $table->string('NPCReplacements')->nullable()->default('');
            $table->float('PvEDinoDecayPeriodMultiplier')->nullable()->default(1.0);
            $table->float('PvEStructureDecayPeriodMultiplier')->nullable()->default(1.0);
            $table->float('StructureDamageMultiplier')->nullable()->default(1.0);
            $table->float('TamingSpeedMultiplier')->nullable()->default(1.0);
            $table->integer('TributeDinoExpirationSeconds')->nullable()->default(86400);
            $table->integer('TributeItemExpirationSeconds')->nullable()->default(86400);
            $table->float('XPMultiplier')->nullable()->default(1.0);
            $table->float('WorldBuffScalingEfficacy')->nullable()->default(1.0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ase_dynamic_configs', function (Blueprint $table) {
            $table->dropColumn('ActiveEventColors');
            $table->dropColumn('BabyCuddleIntervalMultiplier');
            $table->dropColumn('BabyFoodConsumptionSpeedMultiplier');
            $table->dropColumn('BabyImprintAmountMultiplier');
            $table->dropColumn('BabyMatureSpeedMultiplier');
            $table->dropColumn('bDisableDinoDecayPvE');
            $table->dropColumn('bDisableStructureDecayPvE');
            $table->dropColumn('bPvPDinoDecay');
            $table->dropColumn('bPvPStructureDecay');
            $table->dropColumn('bUseAlarmNotifications');
            $table->dropColumn('CropGrowthSpeedMultiplier');
            $table->dropColumn('CustomRecipeEffectivenessMultiplier');
            $table->dropColumn('DinoCharacterFoodDrainMultiplier');
            $table->dropColumn('DisableTimestampVerification');
            $table->dropColumn('DisableWorldBuffs');
            $table->dropColumn('DynamicUndermeshRegions');
            $table->dropColumn('DynamicColorset');
            $table->dropColumn('EggHatchSpeedMultiplier');
            $table->dropColumn('EnableFullDump');
            $table->dropColumn('EnableWorldBuffScaling');
            $table->dropColumn('GMaxFlameThrowerServerTicksPerFrame');
            $table->dropColumn('GlobalSpoilingTimeMultiplier');
            $table->dropColumn('GUseServerNetSpeedCheck');
            $table->dropColumn('HarvestAmountMultiplier');
            $table->dropColumn('HexagonRewardMultiplier');
            $table->dropColumn('MatingIntervalMultiplier');
            $table->dropColumn('MatingSpeedMultiplier');
            $table->dropColumn('NPCReplacements');
            $table->dropColumn('PvEDinoDecayPeriodMultiplier');
            $table->dropColumn('PvEStructureDecayPeriodMultiplier');
            $table->dropColumn('StructureDamageMultiplier');
            $table->dropColumn('TamingSpeedMultiplier');
            $table->dropColumn('TributeDinoExpirationSeconds');
            $table->dropColumn('TributeItemExpirationSeconds');
            $table->dropColumn('XPMultiplier');
            $table->dropColumn('WorldBuffScalingEfficacy');
        });
    }
};
