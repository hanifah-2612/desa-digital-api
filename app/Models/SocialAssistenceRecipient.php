<?php

namespace App\Models;
use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialAssistenceRecipient extends Model
{
    use SoftDeletes, UUID;
    protected $fillable = [
        'sosial_assistance_id',
        'head_of_family_id',
        'amount',
        'reason',
        'bank',
        'account_number',
        'proof',
        'status'
    ];

    public function SocialAssistance()
    {
    return $this->belongsTo(SocialAssistence::class);
    }

    public function HeadOfFamily()
    {
        return $this->belongsTo(HeadOfFamily::class);
    }
}

