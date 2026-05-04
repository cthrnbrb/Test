<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'partner_user_id',
        'organization_id',
        'issued_at',
        'created_at',
    ];

    protected $casts = [
        'issued_at' => 'datetime',
        'created_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function partnerUser()
    {
        return $this->belongsTo(User::class, 'partner_user_id');
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
