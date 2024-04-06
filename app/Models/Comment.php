<?php

namespace App\Models;

use Illuminate\Console\Application;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Comment extends Model
{
    use HasFactory;

    public function application():HasOne{
        return $this->hasOne(Application::class, 'id', 'application_id');
    }

    public function user():HasOne{
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
