	<input type = "hidden" name = "_token" value = "{{ csrf_token() }}" />
	
	
	<textarea name="requester_detail_issue"> {{ $issues->requester_detail_issue }}</textarea> <br><br>

	<lable>service type id : </label>
	<select name='service_type_id'>
     	@if(isset($serviceTypes))
	        @foreach($serviceTypes as $serviceType)
	            @if($issues->service_type_id == $serviceType->id)
	            <option value="{{ $serviceType->id }}" selected>{{$serviceType->name}}</option>
	            @else
	            <option value="{{ $serviceType->id }}">{{$serviceType->name}}</option>
	            @endif
	        @endforeach
	    @else
	        @foreach($serviceTypes as $serviceType)
	            <option value="{{ $serviceType->id }}">{{$serviceType->name}}</option>
	        @endforeach
	    @endif

    </select>
    <br><br>
    <lable>service domain id : </label>
	<select name='service_domain_id'>
        @if(isset($serviceDomains))
	        @foreach($serviceDomains as $serviceDomain)
	            @if($issues->service_domain_id == $serviceDomain->id)
	            <option value="{{ $serviceDomain->id }}" selected>{{$serviceDomain->name}}</option>
	            @else
	            <option value="{{ $serviceDomain->id }}">{{$serviceDomain->name}}</option>
	            @endif
	        @endforeach
	    @else
	        @foreach($serviceDomains as $serviceDomain)
	            <option value="{{ $serviceDomain->id }}">{{$serviceDomain->name}}</option>
	        @endforeach
	    @endif
    </select>
    <br><br>
    <label>service begin at : </label>
    	<input type="text" name="service_begin_at" size="50"><br><br>
    <lable>checkup detail : </label>
		<textarea name="checkup_detail"></textarea> <br><br>
	<label>service end estimated : </label>
    	<input type="text" name="service_end_estimated" size="50"><br><br>
    <label>service end at : </label>
    	<input type="text" name="service_end_at" size="50"><br><br>
	
	<lable>issue status id : </label>
	<select name='issue_status_id'>
		@if(isset($issuesStatus))
	        @foreach($issueStatus as $issueSt)
	            @if($issues->issue_status_id == $issueSt->id)
	            <option value="{{ $issueSt->id }}" selected>{{$issueSt->name}}</option>
	            @else
	            <option value="{{ $issueSt->id }}">{{$issueSt->name}}</option>
	            @endif
	        @endforeach
	    @else
	    	@foreach($issueStatus as $issueSt)
	            <option value="{{ $issueSt->id }}">{{$issueSt->name}}</option>
	        @endforeach
	    @endif
    </select>
    <br><br>
    <lable>summary report : </label>
		<textarea name="summary_report"></textarea> <br><br>
	<label>need followup : </label>
	<input type="radio" name="followup" value="1"> Yes
	<input type="radio" name="followup" value="2"> No
	<br><br>
	<lable>service by : </label>
	<select name='service_by'>
        <option selected disabled hidden value=''></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <br><br>

