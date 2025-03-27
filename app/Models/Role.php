<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{
    use HasFactory;

    protected $primaryKey = 'role_id';

    public $incrementing = true;

    protected $fillable = [
       'role_name',
       'route_name'
    ];

    protected $guarded = [
        'role_id'
    ];
    
    public function users(){
        return $this->belongsToMany(User::class,'role_id');
    }
    
}
