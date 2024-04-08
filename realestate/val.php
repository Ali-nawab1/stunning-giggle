<script>
    function onSubmitForm() 
{

if(document.frmform.propertyCat.value==0)
{
 alert("Please Enter Category .");

 return false;
}





if(document.frmform.SocietyFlats.value=="")
{
 alert("Please Enter Flat Type.");
 document.frmform.SocietyFlats.focus();
 return false;
}
function check(field)
{
if (document.frmform.chkAll.checked == true)
	checkAll(field);
else
	uncheckAll(field);
}


function checkAll(field)
{
for (i = 0; i < field.length; i++)
	field[i].checked = true ;
}

function uncheckAll(field)
{
for (i = 0; i < field.length; i++)
	field[i].checked = false ;
}

</script>
<script language=javascript>

function onSubmitForm() {
 var formObj = document.frmform;
 udd=false;

 if (formObj.list.length>1)
 {
 	for(i=0;i<=formObj.list.length-1;i++)
 	{

	 	if (formObj.list(i).checked==true)
	 		udd=true;
	 }
}
 else
{
	if (formObj.list.checked==true)
	udd=true;
 }

 if (udd==true)
 	{
 	var answer = confirm ("Are you sure this is true date?")
	if (answer)
	return true;
	else
		return false;
  	} 
 else
 {
 	alert('You have not selected any record');
 	return false;
 }
 
}
</script>

</script>
