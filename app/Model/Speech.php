<?php declare(strict_types=1);

namespace App\Model;

class Speech extends Model
{
    public string $keyType = 'string';

    public bool $incrementing = false;

    protected array $fillable = [
        'id',
        'title',
        'description',
        'speaker',
        'start_time',
        'end_time',
    ];
}
