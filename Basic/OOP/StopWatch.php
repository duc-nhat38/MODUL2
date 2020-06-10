<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
class StopWatch{
    private $startTime;
    private $endTime;
    public function start() {
        $this->startTime = date('H:i:s');
    }
    public function getStartTime() {
        return $this->startTime;
    }
    public function stop() {
        $this->endTime = date('H:i:s');
    }  
    public function getEndTime() {
        return $this->endTime;
    }
    public function getElapsedTime() {
        return microtime(($this->stop()-$this->start()));
    } 
}
$stopWatch = new StopWatch();
$stopWatch->start();
echo $stopWatch->getStartTime();
echo "<br>";
$stopWatch->stop();
echo $stopWatch->getEndTime();
echo "<br>";
echo $stopWatch->getElapsedTime()
?>
