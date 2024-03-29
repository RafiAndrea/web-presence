<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory;

    protected $primaryKey = 'staff_id';
    public function user() {
        return $this->belongsTo(User::class, 'user_nik', 'nik');
    }

}
