<?php

function login(Request $request, Response $response) {
    global $database;

    $req_data = $request->getParsedBody();

    $query = "SELECT * FROM user WHERE username = '" . $req_data["username"] . "' AND password = '" . md5($req_data["password"]) . "'";
    $data = $database->query($query);
}

function v2getFirewallRule(Request $request, Response $response) {
    global $database;
    $ruleid = $request->getQueryParam('id');
    $query = "SELECT * FROM firewall_rules WHERE id = " . $ruleid;
}

    $statement = $database->prepare($query);

    $mysql_host = "localhost"; 
    $mysql_user = "adminmon";
    $mysql_pass = "xxxxxxxxxxxx";
    $mysql_db = "adminmon";
    $mysql_char = "utf8";

    global $database;
    $database = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

?>