<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Romeromon extends Model
{
    use HasFactory;

    protected $fillable = [
        'rom_description',
        'rom_name',
        'bal_romeroball'
    ];

    /**
     * Get the user that owns the Task
     * 
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        //this function performes a query in the database where
        //we get the data of user owner of the task
        return $this->belongsTo(User::class, 'use_id', 'rol_id');
    }
}
