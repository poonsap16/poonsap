{!! Form::label('requester', 'Requester : ') !!}
{!! Form::input('number', 'requester', null ) !!}<br><br>

{!! Form::label('requester_detail_issue', 'requester_detail_issue : ') !!}
{!! Form::input('text', 'requester_detail_issue', null) !!}<br><br>


{!! Form::label('service_type', 'service_type_id : ') !!}
{!! Form::select('service_type_id',['เลือกประเภท',1,2,3,4]) !!}<br><br>

{!! Form::label('service_domain', 'service_domain_id : ') !!}
{!! Form::select('service_domain_id',['เลือกประเภท',1,2,3,4], null ) !!}<br><br>

{!! Form::label('service_begin_at', 'service_begin_at : ') !!}
{!! Form::input('text', 'service_begin_at', null) !!}<br><br>

{!! Form::label('checkup_detail', 'checkup_detail : ') !!}
{!! Form::textarea('checkup_detail', null) !!}<br><br>

{!! Form::label('service_end_estimated', 'service_end_estimated : ') !!}
{!! Form::input('text', 'service_end_estimated', null) !!}<br><br>	

{!! Form::label('service_end_at', 'service_end_at : ') !!}
{!! Form::input('text', 'service_end_at', null) !!}<br><br> 

{!! Form::label('issue_status_id', 'issue_status_id : ') !!}
{!! Form::select('issue_status_id',['เลือกประเภท',1,2,3,4], null ) !!}<br><br>

{!! Form::label('summary_report', 'summary_report : ') !!}
{!! Form::textarea('summary_report', null) !!}<br><br>

{!! Form::label('need_followup', 'need_followup : ') !!}
{!! Form::checkbox('need_followup') !!}
{!! Form::label('need_followup', 'YES') !!}
{!! Form::checkbox('need_followup') !!}
{!! Form::label('need_followup', 'NO') !!}<br><br>

{!! Form::label('service_by', 'service_by : ') !!}
{!! Form::select('service_by',['เลือกประเภท',1,2,3,4], null ) !!}<br><br>
