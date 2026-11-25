<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\UUID;

class DeveplomentApplicant extends Model
{
    use SoftDeletes, UUID;
    protected $fillable = [
        'deveploment_id',
        'user_id',
        'status'
    ];
    public function Deveploment()
    {
        return $this->belongsTo(Development::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
