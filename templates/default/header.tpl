<html>
<head>
<title>{if isset($return.sitetitle)}{$return.sitetitle}{/if}</title>
<link href="{$basepath}/css/all.css" type="text/css" rel="stylesheet"/>
<link href="{$basepath}/css/admin-ajax.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="{$basepath}/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="{$basepath}/js/all.js"></script>
<script type="text/javascript" src="{$basepath}/js/admin-ajax.js"></script>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<script>
{if $privileges eq "admin"}
editor="yes";
{else}
editor="no";
{/if}
</script>
</head>
<body>
<div class="contentrow">

{include file="default/topper.tpl"}
{include file="default/menu.tpl"}
