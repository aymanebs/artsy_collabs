<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description'
    ];

    public function art_projects(){
        return $this->hasmany(Art_project::class);
    }
}
