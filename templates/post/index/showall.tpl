<div class="descriptorkey">Posts:</div><br />
{foreach $return.posts as $singlepost}
<div class="descriptorvalue floatleft"><a href="/post/index/show/{$singlepost.id}">{$singlepost.title}</a></div>
<div class="descriptorvalue floatleft" item="post" itemid="{$singlepost.id}">{$singlepost.excerpt}</div>
<div class="clear"></div>
{/foreach}

