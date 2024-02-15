<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Art_project extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;

    protected $fillable=[
        'title',
        'budget',
        'description',
        'category',
        'state',
        'partner_id',
        
       
    ];

  


    public function users(){
        return $this->belongsToMany(User::class)->withPivot('application');
    }

    public function partner(){
        return $this->belongsTo(Partner::class);
    }

   
}
