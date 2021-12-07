{include file="cabecera.tpl"}
<header id="header" class="">
    {include file="menu_nav.tpl"}
</header><!-- /header -->
<main>


    <div class="row">
        <div class="col">
            <div class="mitabla">
                <table class="content-table" id="tablacdr">
                    <thead>
                        <th>{gt 'Id'}</th>
                        <th>{gt 'Name'}</th>
                        <th>{gt 'Privileges'}</th>
                        <th>{gt 'Remark'}</th>
                        <th>{gt 'Operation'}</th>
                    </thead>
                    <tfoot>
                        <th>{gt 'Id'}</th>
                        <th>{gt 'Name'}</th>
                        <th>{gt 'Privileges'}</th>
                        <th>{gt 'Remark'}</th>
                        <th>{gt 'Operation'}</th>
                    </tfoot>
                    <tbody>
                        <td>admin</td>
                        <td>Admin</td>
                        <td>INIT, USER, </td>
                        <td>Remark</td>
                        <td></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
{include file="pie.tpl"}