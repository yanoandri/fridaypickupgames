<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';

    protected $primaryKey = 'team_id';

    const CREATED_AT = 'created_at';

    const UPDATED_AT = 'updated_at';
}
