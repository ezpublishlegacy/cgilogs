<div class="context-block">

{* DESIGN: Header START *}<div class="box-header"><div class="box-ml">

<h1 class="context-title">{'Logs list (%logs_count)'|i18n( 'design/admin/cgilogs/list',, hash( '%logs_count', $logs_count ) )}</h1>

{* DESIGN: Mainline *}<div class="header-mainline"></div>

{* DESIGN: Header END *}</div></div>

{* DESIGN: Content START *}<div class="box-ml"><div class="box-mr"><div class="box-content">

{if $logs}

{* Object table. *}
<table class="list" cellspacing="0">
{foreach $logs as $dirname => $_logs}
<tr>
    <th>{$dirname}</th>
    <th>{'Size'|i18n( 'design/admin/cgilogs/list' )}</th>
    <th>{'Modified'|i18n( 'design/admin/cgilogs/list' )}</th>
</tr>
    {foreach $_logs as $log sequence array( bglight, bgdark ) as $sequence}
<tr class="{$sequence}">
    <td><a href={concat( 'cgilogs/download?file=', rawurldecode( concat( $dirname, '/', $log.name ) ) )|ezurl}>{$log.name|wash()}</a></td>
    <td>{$log.size|si( byte )}</td>
    <td>{$log.modified|l10n('shortdatetime')}</td>
</tr>
    {/foreach}
{/foreach}
</table>
{/if}

{* DESIGN: Content END *}</div></div></div>

</div>