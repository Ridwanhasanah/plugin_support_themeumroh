jQuery(document).ready(function(){

	/*===== Date Picker Start =====*/
jQuery(".datePicker").datepicker({dateFormat:"yy-mm-dd"});
/*===== Date Picker End =====*/

jQuery('#rdelete').click(function(){
	alert('reload');
	location.reload();
});
})