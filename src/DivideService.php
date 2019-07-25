<?php
namespace App;

class DivideService
{
    /** @var Simple $simple */
    private $divide;
    
    public function __construct(Divide $divide)
    {
        $this->divide = $divide;
    }

    public function dividingService($arg)
    {
        return $this->divide->divide($arg);
    }
}