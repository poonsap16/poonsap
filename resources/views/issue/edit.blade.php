<html>
<head>
	<meta charset="utf-8">
	<title>Edit</title>
</head>
<body>
	<h1>Edit</h1>

 	<lable>requester detail issue : </label>
		<textarea name="issue"></textarea> <br><br>
	<lable>service type id : </label>
	<select name='service_type_id'>
        <option selected disabled hidden value=''></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <br><br>
    <lable>service domain id : </label>
	<select name='service_domain_id'>
        <option selected disabled hidden value=''></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
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
        <option selected disabled hidden value=''></option>
        <option value="1">รอ</option> 
        <option value="2">รับเรื่องแล้ว</option> 
        <option value="3">กำลังดำเนินการ</option> 
        <option value="4">สำเร็จ</option> 
        <option value="5">ส่งต่อศูนย์คอม</option> 
        <option value="6">ไม่สามารถทำได้</option> 
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

   		<input type="submit" value="Click to Submit">



</body>
</html>