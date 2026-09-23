<?php

namespace App\Models;

use Database\Factories\RegistrationFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    /** @use HasFactory<RegistrationFactory> */
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'contact_number',
        'location',
        'organization',
        'ticket_quantity',
        'ticket_code',
        'status',
    ];

    protected $casts = [
        'ticket_quantity' => 'integer',
    ];

    protected function fullName(): Attribute
    {
        return Attribute::get(fn () => trim("{$this->first_name} {$this->last_name}"));
    }

    protected static function booted(): void
    {
        static::creating(function (Registration $registration) {
            $registration->ticket_code ??= static::generateTicketCode();
        });
    }

    public static function generateTicketCode(): string
    {
        do {
            $code = 'TICK-'.random_int(10000, 99999);
        } while (static::where('ticket_code', $code)->exists());

        return $code;
    }
}
