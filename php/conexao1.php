<?php

function DBconect(){
    $sql=mysql_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die (mysql_connect_erro());
    mysql_set_charset($sql, CHARSERT) or die (mysql_connect($sql));

    return $sql
}