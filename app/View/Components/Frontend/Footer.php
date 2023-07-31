<?php

namespace App\View\Components\Frontend;

use Illuminate\View\Component;

class Footer extends Component
{
    public $setting;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->setting = allsetting();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if ((session('theme') && session('theme') == 'theme2') || $this->setting['theme'] == 'two') {
            return view('components.frontend.footer-two');
        } else {
            return view('components.frontend.footer-one');
        }
    }
}
