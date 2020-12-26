<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table = 'matches';

    protected $primaryKey = 'match_id';

    const CREATED_AT = 'created_at';

    const UPDATED_AT = 'updated_at';
}
