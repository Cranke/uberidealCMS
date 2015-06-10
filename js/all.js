$(function() {
	// getareas();
	
	$('.has-sub').click( function(e) {
		e.preventDefault();
		var hastap = 0;
		if($(this).parent().hasClass('tap')) { hastap = 1; };
		$(".tap").removeClass("tap");
		if(hastap == 1) {
			$(this).parent().removeClass('tap');
		} else {
			$(this).parent().addClass('tap');
		}
	});

	$(".menu-icon").click(function() {
		$(this).toggleClass("open");
    $("body").toggleClass("nooverflow");
		$(".egmenu").slideToggle();
	});

	$(".showonclick h5").click(function(e) {
    e.preventDefault();
    if($(document).width()<1025) {
      if($(this).parent().find("ul").css("display") == "none") {
        $(".submenuopen").find("ul").slideUp(1000);
        $(".submenuopen").removeClass("submenuopen");
        $(this).parent().addClass("submenuopen");
        $(this).parent().find("ul").slideDown(1000);
      } else {
        $(".showonclick").find("ul").slideUp(1000);
        $(this).parent().removeClass("submenuopen");
      }

    } else {
      $(".showonclick").each(function() {
        $(this).parent().find("ul").addClass("submenuopen");
        $(this).parent().find("ul").slideDown(1000);
      });
    }

	});

	$(".anchor").click(function(e) {
    e.preventDefault();
    anchor = $(this).attr('href');
    $("html, body").animate({
      'scrollTop':   $(anchor).offset().top - 100
    }, 1000);
  });

  $(".rolldown").click( function(e) {
    e.preventDefault();
    $(".roller").slideToggle();
  });

	
});

function getareas() {
	$.ajax({
		url: "/index/default/getAreas"
	})
	.done(function( data ) {
		var arr = $.parseJSON(data);
		for(var x in arr){
			for(var y in arr[x]){
				// parseInt(arr[x][y]['y1']
			}
		}
		addclicks();
		var iOS = ( navigator.userAgent.match(/(iPad|iPhone|iPod)/g) ? true : false );
		// if(iOS) $(".prize").hide();

	});
}

function addclicks() {
	$(".item").click(function() {
		id = $(this).attr("rel");
		data(id);
	});
	$(".datenschutz").click(function() {
		data='<div class="popupclose"></div><div class="alignleft boxpadding">Datenschutzinformation</div>';
		$(".popup").html(data);
		hideareas();
		$("#hintergrund").click(function() {
			showareas();
		});
		$(".popupclose").click(function() {
			showareas();
		});
	});
	function loaddata(id) {
		$(".popup").css("top","1em");
		$.ajax({
			url: "/index/default/getPrizeById/"+id
		})
		.done(function( data ) {
			$(".popup").html(data);
			hideareas();
			$("#hintergrund").click(function() {
				showareas();
			});
			$(".popupclose").click(function() {
				showareas();
			});
		});
	}
	function hideareas()  {
		$(".popup").fadeIn("fast");
		$("#hintergrund").fadeIn("fast");
		var iOS = ( navigator.userAgent.match(/(iPad|iPhone|iPod)/g) ? true : false );
	}
	function showareas() {
		$(".popup").fadeOut("fast");
		$("#hintergrund").fadeOut("fast");
		var iOS = ( navigator.userAgent.match(/(iPad|iPhone|iPod)/g) ? true : false );
	}
}
function share() {
    FB.init({appId: '11111111111111', status: true, cookie: true, xfbml: true, oauth: true}  );
    postToWall();
}

function postToWall() {
        FB.login(function(response) {
            if (response.authResponse) {
                FB.ui(
				{
                    method: 'feed',
                    name: 'Best App',
                    link: 'http://example.com/share.php',
                    picture: 'http://example.com/img/share_image.jpg',
                    caption: 'The Best App',
                    description: 'Take part in this story!'
                    },
                        function(response) {
                            if (response && response.post_id) {
                                alert('Erfolgreich geteilt.');
								$(".popup").fadeOut("slow");
								$("#hintergrund").fadeOut("slow");
                            } else {
                                alert('Teilen ist leider fehlgeschlagen.');
                            }
                        });
                    } else {
                        alert('Abbruch.');
                    }
                }, {scope: 'publish_stream'});
                return false;
            }
