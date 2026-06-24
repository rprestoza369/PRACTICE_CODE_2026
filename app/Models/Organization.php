<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = "organizations";
    protected $guarded = [];

    public function events()
    {
        return $this->hasMany('events', 'organization_id');
}
