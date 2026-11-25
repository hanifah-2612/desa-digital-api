<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialAssistence extends Model
{
    use SoftDeletes, UUID;
    protected $fillable = [
        'thumbnail',
        'name',
        'category',
        'amount',
        'provider',
        'description',
        'is_available'
    ];
    public function SocialAssistanceRecipient()
    {
      return $this->hasMany(SocialAssistenceRecipient::class);
    }
}
