function mFormClick() {  $("#city").empty();  $("#mapresult").empty();
 //alert('Hi');
var str = $("#mform").serialize();  
$.post("plugins/karzuan/ravechart/components/tmpl/result.php", str, function(data) {
	$("#city").html(data);  $("#subbtn").css('display' , 'inline-block');
																	});}

function mFormSub() {  var str = $("#mform").serialize();   
$.post("plugins/karzuan/ravechart/components/tmpl/result.php", str, function(data) {  $("#mapresult").html(data);  $("#print_ravechart").css('display' , 'inline-block');  });}/*function mailSub() {  var str = $("#mailform").serialize();   $.post("tmpl/mail.php", str, function(data) {  $("#mapresult").html(data);     });}*/
function isValidDate(y, m, d){    var dt = new Date(y, m-1, d);    return ((y == dt.getYear()) && ((m-1) == dt.getMonth()) && (d == dt.getDate()));}
function mailSub() {	$.fancybox.showActivity();	$.ajax({		type		: "POST",		cache	: false,		url		: "tmpl/mailform.php",		data		: $('#mailform').serializeArray(),		success: function(data) {			$.fancybox(data);		}	});	return false;};
function mailSubsend() {		$.fancybox.showActivity();	$.ajax({		type		: "POST",		cache	: false,		url		: "tmpl/mailsend.php",		data		: $('#mailsend').serializeArray(),		success: function(data) {			$.fancybox(data);		}	});	return false;};