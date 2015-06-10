<div class="menu-icon">
	<div class="menuline menu-top"></div>
	<div class="menuline menu-middle"></div>
	<div class="menuline menu-bottom"></div>
</div>

<ul class="egmenu">
    {foreach $pages as $p}
    <li>
      <a class="{if $p.isOpen eq '1'}active{/if}{if $p.hasVisibleChildren eq '1'} hassub{/if}" href="{$p.url}">{$p.title}</a>

      {if $p.hasVisibleChildren eq '1'}
      <ul>
        {foreach $p.visibleChildren as $p): ?>
        <li>
          <a href="{$p.url}">{$p.title}</a>
        </li>
        {/foreach}
      </ul>
      {/if}
	
    </li>
    {/foreach}
</ul>
