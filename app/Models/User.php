<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const CLIENT = 0;
    const RM = 1;
    const SWISSCOMPLY = 2;
    const SUPERUSER = 3;

    const CLIENT_INDIVIDUAL = 0;
    const CLIENT_CORPORATE = 1;
    const CLIENT_TRUST = 2;
    const CLIENT_FOUNDATION = 3;
    const CLIENT_CHARITY = 4;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'uuid',
        'rm_id',
        'state',
        'type',
        'individual',
        'client_type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected $stateDescriptions = [
        0 => 'Registered',
        10 => 'Waiting for RM',
        20 => 'Waiting for confirmation',
        30 => 'Accepted for POI',
        40 => 'Waiting for POI confirmation',
        100 => 'Onboarding',
        -1 => 'Rejected',
    ];


    public function isClient()
    {
        return $this->type === self::CLIENT;
    }

    public function isRM()
    {
        return $this->type === self::RM;
    }

    public function isSwisscomply()
    {
        return $this->type === self::SWISSCOMPLY;
    }

    public function isSuperuser()
    {
        return $this->type === self::SUPERUSER;
    }

    public function isClientIndividual() {
        return $this->client_type == self::CLIENT_INDIVIDUAL;
    }
    public function isClientCoporate() {
        return $this->client_type == self::CLIENT_CORPORATE;
    }
    public function isClientTrust() {
        return $this->client_type == self::CLIENT_TRUST;
    }
    public function isClientFoundation() {
        return $this->client_type == self::CLIENT_FOUNDATION;
    }
    public function isClientCharity() {
        return $this->client_type == self::CLIENT_CHARITY;
    }

    protected static function booted()
    {
        static::creating(function ($user) {
            $user->uuid = (string) Str::uuid();
        });
    }

    public function getStateDescription()
    {
        return $this->stateDescriptions[$this->state];
    }

    public function onboardingRoute() {
        switch($this->client_type) {
            case self::CLIENT_INDIVIDUAL:
                return route('individual-onboarding', ['customerUuid' => $this->uuid]);
                break;
            case self::CLIENT_CORPORATE:
                return route('corporate-onboarding', ['customerUuid' => $this->uuid]);
                break;
            case self::CLIENT_TRUST:
                return route('trust-onboarding', ['customerUuid' => $this->uuid]);
                break;
            case self::CLIENT_FOUNDATION:
                return route('foundation-onboarding', ['customerUuid' => $this->uuid]);
                break;
            case self::CLIENT_CHARITY:
                return route('charity-onboarding', ['customerUuid' => $this->uuid]);
                break;
        }

        return route('individual-onboarding', ['customerUuid' => $this->uuid]);
    }

    public static function onboardingRouteOf($uuid) {
        $customer = User::where('uuid', $uuid)->first();
        switch($customer->client_type) {
            case self::CLIENT_INDIVIDUAL:
                return route('individual-onboarding', ['customerUuid' => $uuid]);
                break;
            case self::CLIENT_CORPORATE:
                return route('corporate-onboarding', ['customerUuid' => $uuid]);
                break;
            case self::CLIENT_TRUST:
                return route('trust-onboarding', ['customerUuid' => $uuid]);
                break;
            case self::CLIENT_FOUNDATION:
                return route('foundation-onboarding', ['customerUuid' => $uuid]);
                break;
            case self::CLIENT_CHARITY:
                return route('charity-onboarding', ['customerUuid' => $uuid]);
                break;
        }

        return route('individual-onboarding', ['customerUuid' => $uuid]);
    }
}
