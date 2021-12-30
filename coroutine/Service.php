<?php
declare(strict_types=1);

/**
 * Class Service
 */
class Service
{
    private $coroutine;
    protected $before_first_yield = True;


    /**
     * Service constructor.
     * @param Generator $coroutine
     */
    public function __construct(Generator $coroutine)
    {
        $this->coroutine = $coroutine;
    }


    public function run(): void
    {
        if ($this->before_first_yield) {
            $this->before_first_yield = False;
            $this->coroutine->current();
        } else {
            $this->coroutine->next();
        }
    }


    /**
     * @return bool
     */
    public function isFinished(): bool
    {
        return !$this->coroutine->valid();
    }
}