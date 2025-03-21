<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AseDynamicConfig extends Model
{
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
        $config = $this->all()->except(['id', 'name', 'description', 'user_id', 'created_at', 'updated_at']);
        $ini = '';
        foreach ($config as $key => $value) {
            $ini .= "$key=$value\n";
        }
        return $ini;
    }
}
