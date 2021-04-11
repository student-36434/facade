<?php

namespace facade\Classes;

class Facade
{
    protected $subsystem1;

    protected $subsystem2;

    protected $subsystem3;

    protected $subsystem4;

    //Możesz przekazać istniejący obiekt lub fasada utworze nowy
    public function __construct(
        Subsystem1 $subsystem1 = null,
        Subsystem2 $subsystem2 = null,
        Subsystem3 $subsystem3 = null,
        Subsystem4 $subsystem4 = null
    ) {
        $this->subsystem1 = $subsystem1 ?: new Subsystem1();
        $this->subsystem2 = $subsystem2 ?: new Subsystem2();
        $this->subsystem3 = $subsystem3 ?: new Subsystem3();
        $this->subsystem4 = $subsystem4 ?: new Subsystem4();
    }

    public function operation(): string
    {
        $result = 'Facade initializes subsystems:' . '<br>';
        $result .= $this->subsystem1->operation1() . '<br>';
        $result .= $this->subsystem2->operation1() . '<br>';
        $result .= $this->subsystem3->operation1() . '<br>';
        $result .= $this->subsystem4->operation1() . '<br>';
        $result .= 'Facade orders subsystems to perform the action:' . '<br>';
        $result .= $this->subsystem1->sayHelloA() . '<br>';
        $result .= $this->subsystem2->sayHelloB() . '<br>';
        $result .= $this->subsystem3->sayHelloC() . '<br>';
        $result .= $this->subsystem4->sayHelloD() . '<br>';

        return $result;
    }
}