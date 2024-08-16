<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead_id',
        'manager_id',
        'project_status',
        'created_by',
        'start_date',
        'end_date',
    ];

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }

    public function by()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
