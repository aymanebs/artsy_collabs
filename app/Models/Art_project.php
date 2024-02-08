<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Art_project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'title',
        'budget',
        'description',
        'category',
        'state',
        'partner_id',
        
       
    ];

  


    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function partners(){
        return $this->belongsTo(Partner::class);
    }
}
