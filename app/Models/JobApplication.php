<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class JobApplication extends Model
{
    use HasFactory;
    public function user():HasOne{
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function jobPosting():HasOne{
        return $this->hasOne(JobPosting::class, 'id', 'post_id');
    }

    public function comments(): HasMany{
        return $this->hasMany(Comment::class, 'job_application_id', 'id');
    }
}
