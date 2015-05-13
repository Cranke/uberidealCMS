{if isset($return.status) && $return.status!=""}{$return.status}<br />{/if} Username:{$username}<br />Privileges:{$privileges}
{if !isset($username) || $username eq ""}
	<form id="loginform" action="https://{$hostname}/admin/auth/index" method=POST>
	<input type=text name=uname><br />
	<input type=password name=pword><br />
	<input type=submit Value="Login">
	</form>
{else}
<br /><a class="logout" href="https://{$hostname}/admin/auth/logout">Logout</a>
{/if}
