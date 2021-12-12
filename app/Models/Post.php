<?php

namespace App\Models;

use http\QueryString;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //permite mass assignment dos campos da tabela que forem expecifícados no array $fillable

    protected $guarded = [];

    //exclui qualquer campo de ser incluído através de mass assignment

    //toda vez que eu buscar posts na db que contenham relacionamento com outras tabelas o 'with' vai trazer os dados com o mínimo de queries possível
    //protected $with = ['author', 'category'];

    public function category()
    {
        // table relationships
        // hasOne, hasMany, belongsTo, belongsToMany

        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
        $query->where(fn($query) =>
        $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%')
        )
        );

        $query->when($filters['category'] ?? false, fn($query, $category) =>
        $query->whereHas('category', fn ($query) =>
        $query->where('slug', $category)
        )
        );

        $query->when($filters['author'] ?? false, fn($query, $author) =>
        $query->whereHas('author', fn ($query) =>
        $query->where('username', $author)
        )
        );
    }
}
