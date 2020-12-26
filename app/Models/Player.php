<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'players';

    protected $primaryKey = 'player_id';

    const CREATED_AT = 'created_at';

    const UPDATED_AT = 'updated_at';
}
