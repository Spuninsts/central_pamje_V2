<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

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

    /**
     * for reviewer and editors
     */

    public function getFullNameAttribute()
    {
        $parts = [];

        if ($this->title) {
            $parts[] = $this->title;
        }

        if ($this->fname) {
            $parts[] = $this->fname;
        }

        if ($this->mname) {
            $parts[] = $this->mname;
        }

        if ($this->lname) {
            $parts[] = $this->lname;
        }

        return implode(' ', $parts);
    }

    /**
     * Check if the user is a reviewer.
     *
     * @return bool
     */
    public function isReviewer()
    {
        return $this->user_type === 'reviewer';
    }

    /**
     * Check if the user is an editor.
     *
     * @return bool
     */
    public function isEditor()
    {
        return $this->user_type === 'editor';
    }

    /**
     * Check if the user account is active.
     *
     * @return bool
     */
    public function isActive()
    {
        return $this->user_status === 'active';
    }

    /**
     * Check if the user account is pending approval.
     *
     * @return bool
     */
    public function isPending()
    {
        return $this->user_status === 'pending';
    }

    /**
     * Get the user's areas of expertise.
     *
     * @return array
     */
    public function getExpertiseAttribute()
    {
        if (!$this->user_spare) {
            return [];
        }

        $userData = json_decode($this->user_spare, true);
        return $userData['expertise'] ?? [];
    }

    /**
     * Get editor specialty.
     *
     * @return string|null
     */
    public function getSpecialtyAttribute()
    {
        if (!$this->user_spare || !$this->isEditor()) {
            return null;
        }

        $userData = json_decode($this->user_spare, true);
        return $userData['specialty'] ?? null;
    }

    /**
     * Get editor position.
     *
     * @return string|null
     */
    public function getPositionAttribute()
    {
        if (!$this->user_spare || !$this->isEditor()) {
            return null;
        }

        $userData = json_decode($this->user_spare, true);
        return $userData['position'] ?? null;
    }

    /**
     * Get editor experience.
     *
     * @return string|null
     */
    public function getExperienceAttribute()
    {
        if (!$this->user_spare || !$this->isEditor()) {
            return null;
        }

        $userData = json_decode($this->user_spare, true);
        return $userData['experience'] ?? null;
    }

}
