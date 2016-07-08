<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceDomain extends Model
{
    protected $table = 'service_domains';
    protected $fillable = [
    	'name',
    ]; 
}
