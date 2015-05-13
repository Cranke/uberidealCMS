<div class="wrapper centered">
<a class="datenschutz" href="#">Datenschutzhinweise</a>
<br /><br />
</div>
<div class="popup centered"></div>
<div id="hintergrund"></div>
{if $facebookapp eq 1}
<script type="text/javascript" src="//connect.facebook.net/en_US/all.js"></script>
 <script type="text/javascript">
    {literal}
    window.fbAsyncInit = function() {
    FB.init({
      appId      : '123123123123123',
    });
    FB.Canvas.setAutoGrow();
    }
    {/literal}
 </script> 
 {/if}
