<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    public function users()
{
    return $this->belongsToMany(User::class,'permission_user','user_id','permission_id');
} }


