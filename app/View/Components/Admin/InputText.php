<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;


class InputText extends Component
{
    public function __construct(
        public string  $name,
        public ?string  $label        = null,
        public ?string  $type         = null,
        public ?string  $placeholder  = '',
        public mixed   $value        = '',
        public ?string  $id           = '',
        public ?bool    $required     = false,
        public ?bool    $disabled     = false,
        public ?bool    $readonly     = false,
    ) {
       $this->label = $label ?? Str::title(str_replace('_', ' ', $name))."";
    }

    public function render(): View|Closure|string
    {
        return view('components.admin.input-text');
    }
}
