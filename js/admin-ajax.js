$(function() {
	if(editor=="yes") {
		addEdits();
		addEditsPopup();
	}
	$('.descriptorvalue').on('focus', function() {
	  before = $(this).html();
	}).on('blur', function() { 
	  if (before != $(this).html()) { $(this).trigger('change'); }
	});


	$('.descriptorvalue').on('change', function() {
		value=$(this).html();
		field=$(this).attr("rel");
		$.ajax({
			type: "POST",
			url: "/default/ajax/update/",
			data: { value: value, field: field}
		})
		.done(function( data ) {
			if(data.trim()!="eingetragen") {
				alert(data);
			} else {
				alert(data);
			}
		});
	});
	addloginformsubmit();
	addlogoutclick();
});

function addloginformsubmit() {
	$("#loginform").submit(function(event) {
		event.preventDefault();
		user=$("#loginform input[name=uname]").val();
		pass=$("#loginform input[name=pword]").val();
		action=$(this).attr("action");
		$.ajax({
			type: "POST",
			url: action,
			data: { uname: user, pword: pass, output: "json" }
		}).done(function(data) {
			response = JSON.parse(data);
			$(".userstatus").html(response.html);
				if(response.status=="success") {
					addlogoutclick();
				}
				if(response.userstatus=="editor") {
					addEdits();
					addEditsPopup();
				}
		});
	});
}
function addlogoutclick() {
	$(".logout").click(function(event) {
		event.preventDefault();
		logouturl=$(this).attr('href');
		$.ajax({
			type: "POST",
			url: logouturl,
			data: { output: "content" }
		})
		.done(function( data ) {
			$(".userstatus").html(data);
				removeEdits();
				removeEditsPopup();
				addloginformsubmit();
		});
	});	
}
function addEdits() {
	$('div[item]').each(function(index, element) {
		$(this).append('<div class="editbutton rounded"><a class="editlink rounded" href="/admin/ajax/edit/'+$(this).attr("item")+'/'+$(this).attr("itemid")+'">edit<a></div>');
	});
}
function removeEdits() {
	$(".editbutton").remove();
}
function removeEditsPopup() {
	$(".editbox").remove();
}
function addEditsPopup() {
	$(".editlink").click(function(e) {
		editurl=$(this).attr('href');
		$.ajax({
			url: editurl
		})
		.done(function( data ) {
			$("body").append('<div class="editbox rounded">'+data+'<br /><a class="saveedit rounded" href="#">save</a><a class="canceledit rounded" href="#">cancel</a></div>');
			$(".canceledit").click(function(ee) {
				removeEditsPopup();
				ee.preventDefault;
				});
			$(".saveedit").click(function(ee) {
				saveEditsPopup();
				ee.preventDefault;
				});
		});
		e.preventDefault();
	});
}
function removeEditsPopup() {
	$(".editbox").fadeOut("fast",function() {
		$(".editbox").remove;
	});
}
function saveEditsPopup() {
	$(".editbox").empty();
	$(".editbox").css("line-height","100px");
	$(".editbox").append('<div class="centereddiv">content saved!</div>');
	$(".editbox").delay(500).fadeOut("slow", function() {
		$(".editbox").remove;
	});
}

