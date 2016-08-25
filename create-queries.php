<?php
$type_class = $_GET['type'];
$team_class = $_GET['team'];
$crm_class = $_GET['crm'];
$online_class = $_GET['online'];
$frequency_class = $_GET['frequency'];

$type = ($_GET['type']) ? '?type='.$_GET['type'] : '';
$team = ($_GET['team']) ? '&team='.$_GET['team'] : '';
$crm = ($_GET['crm']) ? '&crm='.$_GET['crm'] : '';
$online = ($_GET['online']) ? '&online='.$_GET['online'] : '';
$frequency = ($_get['frequency']) ? '&frequency='.$_GET['frequency'] : '';
