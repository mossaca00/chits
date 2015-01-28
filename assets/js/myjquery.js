// add patient - create new folder //
$("#createnew").css("display", "none");
$(".radio1").click(function(){
	if($('input[name=pRecord]:checked').val() == "create") {
		$("#createnew").slideDown("slow");
	}
	if($('input[name=pRecord]:checked').val() == "find") {
		$("#createnew").slideUp("slow");
	}
}); 
// add patient - create new folder end //

// add patient - philhealth info //
$("#philinfo").css("display", "none");
$(".radio2").click(function(){
	if($('input[name=PhilEnrolled]:checked').val() == "notEnrolled") {
		$("#philinfo").slideUp("slow");
	}
	if($('input[name=PhilEnrolled]:checked').val() == "Enrolled") {
		$("#philinfo").slideDown("slow");
	}
});
// add patient - philhealth info end //