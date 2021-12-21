{include file="cabecera.tpl"}
<header id="header" class="">
    {include file="menu_nav.tpl"}
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href="user_others.php">{gt 'Refresh'}</a></li>
        <li class="nav-item"><a class="nav-link" href="privileges.php">{gt 'Privileges'}</a></li>
    </ul>
</header><!-- /header -->
<main>
    <div class="row">
        <div class="col">
            <div class="mitabla table-responsive">
                <table class="table table-sm table-hover content-table" id="tablausers">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{gt 'Id'}</th>
                            <th>{gt 'Name'}</th>
                            <th>{gt 'Level'}</th>
                            <th>{gt 'Remark'}</th>
                            <th>{if $}<a href="user_add.php" class="btn btn-warning text-break">{'plus-square'|ico}&nbsp;{gt 'Add'}</a></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>{gt 'Id'}</th>
                            <th>{gt 'Name'}</th>
                            <th>{gt 'Level'}</th>
                            <th>{gt 'Remark'}</th>
                            <th>{gt 'Actions'}</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        {foreach $d as $u}
                        <tr class="text-center">
                            <td>{$u@iteration}</td>
                            <td>{$u.id}</td>
                            <td>{$u.name}</td>
                            <td>
                                <div class="lrtooltip">{$u.permission} <span class="lrtooltiptext">{$u.module}</span></div>
                            </td>
                            <td>{$u.info}</td>
                            <td><a class="btn btn-outline-warning btn-sm" href="user_password.php?u={$u.id}">{'key'|ico}&nbsp;{gt "Password"}</a>
                                <a class="btn btn-outline-warning btn-sm" href="user_modify.php?u={$u.id}">{'pencil-square'|ico}&nbsp;{gt "Modify"}</a>
                                <a class="btn  btn-outline-warning btn-sm" href="user_delete.php?u={$u.id}">{'x-square'|ico}&nbsp;{gt "Delete"}</a>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
{include file="pie.tpl"}