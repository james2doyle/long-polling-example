<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'title', 'description', 'completed'
    ];

    protected $hidden = [
    'created_at',
    'updated_at'
    ];

  }
