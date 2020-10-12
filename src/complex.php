<?php

class Complex
{
    private $real;
    private $complex;

    public function __construct(float $real, float $complex)
    {
        $this->real = $real;
        $this->complex = $complex;
    }

    public function getReal() :float
    {
        return $this->real;
    }

    public function getComplex() :float
    {
        return $this->complex;
    }

    public function __toString() :string
    {
        if ($this->real == 0 && $this->getComplex() == 0) {
            return "0";
        }
        $string = $this->real ? "$this->real" : "";

        if ($this->complex > 0) {
            $string .= ($this->real ? " + " : "") . $this->complex  . "i";
        } elseif ($this->complex < 0) {
            $string .= " - " . abs($this->complex)  . "i";
        }
        return $string;
    }

    public function add(Complex $b) :Complex
    {
        return new Complex($this->getReal() + $b->getReal(), $this->getComplex() + $b->getComplex());
    }

    public function subtract(Complex $b) :Complex
    {
        return new Complex($this->getReal() - $b->getReal(), $this->getComplex() - $b->getComplex());
    }

    public function multiply(Complex $b) :Complex
    {
        $x = $this->getReal() * $b->getReal() - $this->getComplex() * $b->getComplex();
        $y = $this->getReal() * $b->getComplex() + $b->getReal() * $this->getComplex();
        return new Complex($x, $y);
    }

    /**
     * @param Complex $b
     * @return Complex
     * @throws Exception
     */
    public function divide(Complex $b) :Complex
    {
        if ($b->getReal() == 0 && $b->getComplex() == 0) {
            throw new Exception("Cannot divide by 0!");
        }
        $x = ($this->getReal() * $b->getReal() + $this->getComplex() * $b->getComplex()) / ($b->getReal() ** 2 + $b->getComplex() ** 2);
        $y = ($b->getReal() * $this->getComplex() - $this->getReal() * $b->getComplex()) / ($b->getReal() ** 2 + $b->getComplex() ** 2);
        return new Complex($x, $y);
    }
}

