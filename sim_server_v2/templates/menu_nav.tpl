<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding:0">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="inicio.php">
            <img src="./img/empresa/logo.svg" alt="" height="30" loading="lazy"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="inicio.php">{"house"|ico}&nbsp;{gt Home}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdowna" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {"gear"|ico}&nbsp;{gt Configuration}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdowna">
                        <li><a class="dropdown-item" href="sim_team.php">{gt Group}</a></li>
                        <li><a class="dropdown-item" href="sim_bank.php">{gt SIM Bank}</a></li>
                        <li><a class="dropdown-item" href="rm_device.php">{gt GoIP}</a></li>
                        <li><a class="dropdown-item" href="scheduler.php">{gt Group Scheduler}</a></li>
                        <li><a class="dropdown-item" href="human.php">{gt Human Behavior}</a></li>
                        <li><a class="dropdown-item" href="imei_db.php">{gt IMEI Database}</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownb" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {"speedometer2"|ico}&nbsp;{gt Monitor}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownb">
                        <li><a class="dropdown-item" href="all_sim.php">{gt SIM Slot}</a></li>
                        <li><a class="dropdown-item" href="all_device_line.php">{gt GoIP Channel}</a></li>
                        <li><a class="dropdown-item" href="logs.php">{gt Logs}</a></li>
                        <li><a class="dropdown-item" href="call_record.php">{gt Call Record}</a></li>
                        <li><a class="dropdown-item" href="cdr.php">{gt CDR}</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownc" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {"server"|ico}&nbsp;{gt Data Manage}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownc">
                        <li><a class="dropdown-item" href="sys.php">{gt "System Manage"}</a></li>
                        <li><a class="dropdown-item" href="databackup.php">{gt "Data Backup"}</a></li>
                        <li><a class="dropdown-item" href="datarestore.php">{gt "Data Import"}</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user_others.php">{"person"|ico}&nbsp;{gt 'Users'}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">{"door-open"|ico}&nbsp;{gt Exit}</a>
                </li>
            </ul>
        </div>
        {$smarty.session.usuario.name}<p class="h4">&nbsp;<span class="badge badge-primary">{$titulo}</span></p>
    </div>
</nav>