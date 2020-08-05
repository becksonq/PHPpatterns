<?php

use app\patterns\singleton\real\Logger;
use app\patterns\singleton\real\Config;

/* @var $this yii\web\View */
?>
<h4>Pattern Singleton</h4>

<h5>Concept example</h5>
<?php
$s1 = \app\patterns\singleton\concept\Singleton::getInstance();
$s2 = \app\patterns\singleton\concept\Singleton::getInstance();
if ($s1 === $s2) {
    echo "Singleton works, both variables contain the same instance.";
} else {
    echo "Singleton failed, variables contain different instances.";
}
?>
<hr>
<h5>Real example</h5>
<?php
Logger::log("Started!");

$l1 = Logger::getInstance();
$l2 = Logger::getInstance();
if ($l1 === $l2) {
    Logger::log("Logger has a single instance.");
} else {
    Logger::log("Loggers are different.");
}

// Проверяем, как одиночка-Конфигурация сохраняет данные...
$config1 = Config::getInstance();
$login = "test_login";
$password = "test_password";
$config1->setValue("login", $login);
$config1->setValue("password", $password);
// ...и восстанавливает их.
$config2 = Config::getInstance();
if ($login == $config2->getValue("login") &&
    $password == $config2->getValue("password")
) {
    Logger::log("Config singleton also works fine.");
}

Logger::log("Finished!");
?>
