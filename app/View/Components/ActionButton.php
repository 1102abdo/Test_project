<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButton extends Component
{
    public string $color ;
    public string $text ;
    /**
     * Create a new component instance.
     */
    public function __construct(public string $href , public string $type)
    {
        if ($type=='create') {
            $this->text= __('keywords.new');
            $this->color= 'primary';
        }elseif($type=='edit'){
            $this->text= "<i class='fe fe-20 fe-edit'></i>";
            $this->color= 'success';
        }elseif($type=='show'){
            $this->text= "<i class='fe fe-20 fe-eye'></i>";
            $this->color= 'primary';
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-button');
    }
}
