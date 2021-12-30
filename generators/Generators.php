<?php

/**
 * Class Generators
 */
class Generators
{
    private $file;


    /**
     * Generators constructor.
     * @param string $file_name
     */
    public function __construct(string $file_name)
    {
        $this->file = fopen($file_name, 'rb');
    }


    /**
     * @return Generator
     */
    public function read(): Generator
    {
        while (!feof($this->file)) {
            yield fgetcsv($this->file);
        }
    }


    /**
     *
     */
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        fclose($this->file);
    }

}