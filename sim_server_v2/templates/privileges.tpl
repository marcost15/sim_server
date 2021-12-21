{include file="cabecera.tpl"}
<header id="header" class="">
    {include file="menu_nav.tpl"}
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link" href="user_others.php">{gt 'Refresh'}</a></li>
        <li class="nav-item"><a class="nav-link active" href="privileges.php">{gt 'Privileges'}</a></li>
    </ul>
</header><!-- /header -->
<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="privileges_proc.php" method="POST">
                    <table class="table table-sm content-table">
                        <thead>
                            <tr>
                                <th></th>
                                <th colspan="{$np}">{gt 'Level'}</th>
                            </tr>
                            <tr>
                                <th>{gt Module}</th>
                                {foreach $p as $nivel}
                                <th>{$nivel}</th>
                                {/foreach}
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <td>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </td>
                            </tr>
                        </tfoot>
                        <tbody>
                            {foreach $m as $modulo}
                            <tr>
                                <td>{$modulo}</td>
                                {foreach $p as $nivel}
                                <td label="{$nivel}" class="text-center"><input type="checkbox" name="{$modulo}@{$nivel}" id="{$modulo}@{$nivel}" {$t_p.$modulo.$nivel|default:""}></td>
                                {/foreach}
                            </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</main>
{include file="pie.tpl"}