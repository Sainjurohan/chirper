<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Events\ChirpCreated;
use App\Events\NewChirpCreated;

class Chirp extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
    ];

    protected $dispachesEvents = [
        'created'=> ChirpCreated::class,
    ];

    protected $dipachEvent = [
        'created' => NewChirpCreated::class,
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
