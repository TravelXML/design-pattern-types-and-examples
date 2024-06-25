<?php
class CircuitBreaker {
    private $failureCount = 0;
    private $failureThreshold;
    private $retryTimePeriod;
    private $lastFailureTime;

    public function __construct($failureThreshold, $retryTimePeriod) {
        $this->failureThreshold = $failureThreshold;
        $this->retryTimePeriod = $retryTimePeriod;
    }

    public function call($serviceFunction) {
        if ($this->isOpen()) {
            echo "Circuit is open. Request blocked.\n";
            return false;
        }

        try {
            $serviceFunction();
            $this->reset();
        } catch (Exception $e) {
            $this->recordFailure();
            echo "Service call failed. Error: " . $e->getMessage() . "\n";
        }
    }

    private function isOpen() {
        if ($this->failureCount >= $this->failureThreshold) {
            if ((time() - $this->lastFailureTime) > $this->retryTimePeriod) {
                $this->halfOpen();
                return false;
            }
            return true;
        }
        return false;
    }

    private function recordFailure() {
        $this->failureCount++;
        $this->lastFailureTime = time();
    }

    private function reset() {
        $this->failureCount = 0;
    }

    private function halfOpen() {
        $this->failureCount = $this->failureThreshold / 2;
    }
}
?>
