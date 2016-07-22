<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssueStatus extends Model
{
    protected $table = 'issue_status';
    protected $fillable = [
    	'name',
    ]; 
}
