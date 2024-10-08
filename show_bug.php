<?php
// show_bug.php <id>
require_once 'config/bootstrap.php';

$theBugId = $argv[1];

$bug = $entityManager->find("Bug", (int)$theBugId);

echo "Bug: ".$bug->getDescription()."\n";
echo "Engineer: ".$bug->getEngineer()->getName()."\n";

?>
