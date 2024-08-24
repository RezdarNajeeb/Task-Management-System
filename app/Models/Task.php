<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('title', 'LIKE', '%' . $search . '%')
                    ->orWhere('description', 'LIKE', '%' . $search . '%');
            });
        });

        $query->when($filters['status'] ?? null, function ($query, $status) {
            $query->where('status', 'LIKE', '%' . $status . '%');
        });

        $query->when($filters['priority'] ?? null, function ($query, $priority) {
            $query->where('priority', 'LIKE', '%' . $priority . '%');
        });

        $query->when($filters['due_date'] ?? null, function ($query, $due_date) {
            $query->where('due_date', 'LIKE', '%' . $due_date . '%');
        });

        return $query;
    }
}
