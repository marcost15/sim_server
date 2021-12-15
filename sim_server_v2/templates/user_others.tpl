{include file="cabecera.tpl"}
<header id="header" class="">
    {include file="menu_nav.tpl"}
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
                            <th><a href="user_add.php" class="btn btn-warning text-break">{'plus-square'|ico}&nbsp;{gt 'Add'}</a></th>
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
                            <td><a class="btn btn-outline-warning btn-sm" href="">{'pencil-square'|ico}&nbsp;{gt "Modify"}</a>
                                <a class="btn  btn-outline-warning btn-sm" href="">{'x-square'|ico}&nbsp;{gt "Delete"}</a>
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