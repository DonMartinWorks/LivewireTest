<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $num1 = 0;
    public $num2 = 0;
    public string $action = '+';
    public float $result = 0;
    public bool $disabled = false;

    public function calculate()
    {
        $num1 = (float)$this->num1;
        $num2 = (float)$this->num2;

        # resta
        if ($this->action == '-') {
            $this->result = $num1 - $num2;
        }
        # suma
        else if ($this->action == '+') {
            $this->result = $num1 + $num2;
        }
        # multiplicacion
        else if ($this->action == '*') {
            $this->result = $num1 * $num2;
        }
        # division
        else if ($this->action === '/') {
            $this->result = $num1 / $num2;
        }
        # porcentaje
        else if ($this->action == '%') {
            $this->result = $num1 / 100 * $num2;
        }
    }

    public function render()
    {
        return view('livewire.calculator');
    }
}
