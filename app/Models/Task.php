<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    

    protected $table = 'Tasks';
    protected $guarded = ['id'];



    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
