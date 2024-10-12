<?php

namespace App\Models;

use App\ProjectStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    public $casts = [
            'tech_stack' => 'array', // Converte automaticamente para e de JSON
            'status' => ProjectStatus::class,
            'ends_at' => 'datetime',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function proposals()
     {
        return $this->hasMany(Proposal::class);
    }
}
