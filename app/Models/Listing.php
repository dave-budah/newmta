<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    const TABLE = 'listings';

    protected $table = self::TABLE;


    protected $fillable = [
        'user_id',
        'name',
        'description',
        'price',
        'image',
        'tags',
        'location',
        'radius',
        'width',
        'profile',
        ];

    public function scopeFilter($query, array $filters)
    {
       if ($filters['tag'] ?? false) {
           $query->where('tags', 'like', '%' . request('tag') . '%');

           }

        if ($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%') ->
            orWhere('description', 'like', '%' . request('search') . '%')->
            orWhere('tags', 'like', '%' . request('search') . '%') ->
            orWhere('price', 'like', '%' . request('search') . '%') ->
            orWhere('location', 'like', '%' . request('search') . '%')->
            orWhere('radius', 'like', '%' . request('search') . '%')->
            orWhere('width', 'like', '%' . request('search') . '%')->
            orWhere('profile', 'like', '%' . request('search') . '%');

        }

        if ($filters['tyre'] ?? false) {
            $query->where('width', 'like', '%' . request('width') . '%') ->
            orWhere('radius', 'like', '%' . request('radius') . '%')->
            orWhere('profile', 'like', '%' . request('profile') . '%')->get();
        }

       }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
