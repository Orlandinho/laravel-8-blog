<?php

namespace App\Models;

use http\QueryString;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //permite mass assignment dos campos da tabela que forem expecifícados nessa variável

    protected $fillable = ['post', 'excerpt', 'body'];

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

    public function scopeFilter($query, array $filters) // equals to Post::newQuery()->filter()
    {
        $query->when($filters['search'] ?? false, function ($query, $search){

            $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, fn ($query, $category) => //same as above, but with arrow function

            $query->whereHas('category', fn ($query) =>
                $query->where('slug', $category)));
    }
}
