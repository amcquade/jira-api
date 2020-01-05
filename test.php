<?php

$cfg = [
    'host' => 'your-domain.atlassian.net',
    'username' => 'your-email@hotmail.com',
    'password' => 'password123'
];

require_once "vendor/autoload.php";

$Jira = new \JiraApi\Jira($cfg);

if ($Jira->testLogin())
    echo "Login Success\n";
else
    echo "Login Failure\n";

$members = $Jira->getMembersFromGroup();
var_dump($members);
