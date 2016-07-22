<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class issues extends Model
{
    protected $table = 'issues';
    protected $fillable = [
    	'requester',
    	'service_type_id',
    	'service_domain_id',
    	'requester_detail_issue',
    	'queued',
    	'service_begin_at',
    	'checkup_detail',
    	'service_end_estimated',
    	'service_end_at',
    	'issue_status_id',
    	'summary_report',
    	'need_followup',
    	'service_by',
    	'requester_rate_service',
    ]; 

    public function getServiecTypeName() {
        $serviceType = \App\issues::find($this->attributes['service_type_id']);
        return $service_type->name;
    }


}
