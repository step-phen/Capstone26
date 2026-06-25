<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public function __construct(
        public string $id,
        public string $title,
        public string $icon        = 'info',
        public string $formId      = 'modalForm',
        public string $submitLabel = 'Submit',
        public string $submitIcon  = 'check',
    ) {}

    public function render()
    {
        return view('components.modal');
    }
}
