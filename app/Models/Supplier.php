<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone'
    ];
    public $timestamps = true;

    public function receivingLogs(): HasMany
    {
        return $this->hasMany(ReceivingLog::class);
    }
}
