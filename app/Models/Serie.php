<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // pencarian setiap when secara and
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['family'] ?? false, function($query, $family) {
            return $query->whereHas('family', function($query) use($family) {
                $query->where('slug', $family);
            });
        });
    }

    // pencarian setiap when secara OR
    public function scopeSearch($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->orWhere(function($query) use($search) {
                $query->where('name', 'like', "%$search%");
            });
        });

        $query->when($filters['family'] ?? false, function($query, $family) {
            return $query->orWhereHas('family', function($query) use($family) {
                $query->where('slug', 'like', "%$family%");
            });
        });
    }

    public function family()
    {
        return $this->belongsTo(Family::class);
    }
}
