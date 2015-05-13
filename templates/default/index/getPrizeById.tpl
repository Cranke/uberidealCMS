{if $return.prizestatus eq "today"}
	<div class="popupclose"></div>
<div style="overflow: hidden;">{$return.prize.url}</div>
<br />
	<div class="title">{$return.prize.title}</div>
	<div class="frage">{$return.prize.frage}</div>
{if $return.prize.isImage eq "0"}
	<div class="popupform">
		<form action="#" method=post>
			<input name=formantwort" id=formantwort class="forminput" placeholder="GESUCHTER BERUF"><br />
      <div class=subtext>Du interessierst Dich für diesen Beruf? Dann schau in die <a href="https://www.ihk-lehrstellenboerse.de/" target="_blank">IHK-Lehrstellenbörse und finde deinen Ausbildungsplatz.</a></div>
			<div><input name=formname id=formname class="forminput" placeholder="NAME">
			<input name=formemail id=formemail class="forminput" placeholder="E-MAIL ADRESSE"></div>
			<img id=teilnehmen src="img/teilnehmen.png">
		</form>
	</div>
{/if}
	<div class="popupfooter centered">Die Gewinner werden am Ende der Woche ausgelost und per E-Mail von uns benachrichtigt.</div>
	<script src="//connect.facebook.net/en_US/all.js"></script>
	<script>
	{literal}
	$("#teilnehmen").click(function() {
		antwort=$("#formantwort").val();
		name=$("#formname").val();
		email=$("#formemail").val();
		$.ajax({
			type: "POST",
			url: "/index/default/addParticipant/",
			data: { antwort: antwort, name: name, email: email}
		})
		.done(function( data ) {
			if(data.trim()!="eingetragen") {
				alert(data);
			} else {
				data='<div class="popupclose"></div><div id="fb-root"></div><div class="boxpadding title centered">Vielen Dank für Ihre Teilnahme.</div><br /><div class="frage">Bitte best&auml;tigen Sie Ihre E-Mail durch einen Klick auf den Aktivierungslink, der Ihnen per Mail zugesendet wurde.<br /><br /><center><a href="javascript:share();"><img src="img/share_button.png" /></a></center></div>';
				$(".popup").html(data);
				$(".popup").css("top","40%");
				$(".popup").fadeIn("fast");
				$("#hintergrund").fadeIn("fast");
				$("#hintergrund").click(function() {
					$(".popup").fadeOut("fast");
					$("#hintergrund").fadeOut("fast");
				});
				$(".popupclose").click(function() {
					$(".popup").fadeOut("fast");
					$("#hintergrund").fadeOut("fast");
				});
			}
		});
	});
	{/literal}
	</script>
{/if}

{if $return.prizestatus eq "passed"}
	<div class="popupclose"></div>
	{$return.prize.url}<br />
	<div class="fragevergangen">Die Verlosung für diesen Tag ist schon beendet.<br />Versuche Dein Glück mit einem anderen Türchen!</div>
  <div class="fragevergangen2">Du interessierst Dich für diesen Beruf? Dann schau in die <a target="_blank" href="http://www.ihk-lehrstellenboerse.de/">IHK-Lehrstellenbörse und finde deinen Ausbildungsplatz</a></div>
	<div class="popupfooter centered">Die Gewinner werden ausgelost und per E-Mail von uns benachrichtigt.</div>
{/if}

