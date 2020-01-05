<?php

require_once "vendor/autoload.php";

$Jira = new \JiraApi\Jira([
    'host' => 'your-domain.atlassian.net',
    'username' => 'your-email@hotmail.com',
    'password' => 'password123'
]);

if ($Jira->testLogin())
    echo "Login Success\n";
else
    echo "Login Failure\n";