<?php
declare(strict_types=1);

/**
 * Class Scheduler
 */
class Scheduler
{
    private $services;


    /**
     * Scheduler constructor.
     */
    public function __construct()
    {
        $this->services = new SplQueue();
    }


    /**
     * @param Service $service
     */
    public function schedule(Service $service): void
    {
        // To add tasks to that queue.
        $this->services->enqueue($service);
    }


    public function run(): void
    {
        while (!$this->services->isEmpty()) {

            /**@var Service $service */
            $service = $this->services->dequeue();
            $service->run();

            // Services always come back to the queue while they still have values to be processed:
            if (!$service->isFinished()) {
                $this->schedule($service);
            }
        }
    }
}