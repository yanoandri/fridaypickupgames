<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerAttendance extends Model
{
    protected $table = 'player_attendances';

    protected $primaryKey = 'player_attendance_id';

    const CREATED_AT = 'created_at';

    const UPDATED_AT = 'updated_at';
}
