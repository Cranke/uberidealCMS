<div class="descriptorkey">Usernames:</div><br />
{foreach $return.user as $user}
<div class="descriptorvalue" item="user" itemid="{$user.id}"><a href="/user/index/show/{$user.id}">{$user.username}</a></div>
{/foreach}
