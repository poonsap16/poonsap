
{!! Form::label('requester', 'Requester : ') !!}
{!! Form::input('number', 'requester', null ) !!}<br><br>

{!! Form::label('requester_detail_issue', 'requester detail issue : ') !!}
{!! Form::textarea('requester_detail_issue', null, ['rows' => 5, 'cols' => 50]) !!}<br><br>


{!! Form::label('service_type', 'service type : ') !!}
{!! Form::select('service_type_id', $serviceType, null) !!}<br><br>


{!! Form::label('service_domain', 'service domain : ') !!}
{!! Form::select('service_domain_id', $serviceDomain, null ) !!}<br><br>

{!! Form::label('service_begin_at', 'service begin at : ') !!}
{!! Form::input('text', 'service_begin_at', null) !!}<br><br>

{!! Form::label('checkup_detail', 'checkup detail : ') !!}
	{!! Form::textarea('checkup_detail', null, ['rows' => 5, 'cols' => 50]) !!}<br><br>

{!! Form::label('service_end_estimated', 'service end estimated : ') !!}
	{!! Form::input('text', 'service_end_estimated', null) !!}<br><br>	

{!! Form::label('service_end_at', 'service end at : ') !!}
	{!! Form::input('text', 'service_end_at', null) !!}<br><br> 

{!! Form::label('issue_status_id', 'issue status : ') !!}
	{!! Form::select('issue_status_id', $issueStatus, null ) !!}<br><br>


{!! Form::label('summary_report', 'summary report : ') !!}
	{!! Form::textarea('summary_report', null, ['rows' => 5, 'cols' => 50]) !!}<br><br>

{!! Form::label('need_followup', 'need_followup : ') !!}
	{!! Form::checkbox('need_followup') !!}
	{!! Form::label('need_followup', 'YES') !!}
	{!! Form::checkbox('need_followup') !!}
	{!! Form::label('need_followup', 'NO') !!}<br><br>

{!! Form::label('service_by', 'serviceby : ') !!}
	{!! Form::select('service_by',['เลือกปร เภท',1,2,3,4], null ) !!}<br><br>

