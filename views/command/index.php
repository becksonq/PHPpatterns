<?php
use app\patterns\command\concept\Invoker;
use app\patterns\command\concept\Receiver;
use app\patterns\command\concept\SimpleCommand;
use app\patterns\command\concept\ComplexCommand;

/* @var $this yii\web\View */
?>

<?php
$invoker = new Invoker();
$invoker->setOnStart(new SimpleCommand("Say Hi!"));
$receiver = new Receiver();
$invoker->setOnFinish(new ComplexCommand($receiver, "Send email", "Save report"));

$invoker->doSomethingImportant();
?>
<hr>

<?php
$queue = \app\patterns\command\real\Queue::get();

if ($queue->isEmpty()) {
    $queue->add(new \app\patterns\command\real\IMDBGenresScrapingCommand());
}

$queue->work();

