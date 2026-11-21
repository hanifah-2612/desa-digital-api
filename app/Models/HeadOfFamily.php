<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeadOfFamily extends Model
{
    use SoftDeletes, UUID;
    protected $fillable = [
        'user_id',
        'profile_picture',
        'identity_number',
        'gender',
        'date_of_birth',
        'phone_number',
        'occupation',
        'marital_status'
];
        public function user()
        {
            return $this->belongsTo(User::class);
        }
}
