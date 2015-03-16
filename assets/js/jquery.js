$("#createnew").css("display");
$(".radio1").click(function(){
	if($('input[name=pRecord]:checked').val() == "create") {
		$("#createnew").slideDown("fast");
	}
	if($('input[name=pRecord]:checked').val() == "find") {
		$("#createnew").slideUp("fast");
	}
});
