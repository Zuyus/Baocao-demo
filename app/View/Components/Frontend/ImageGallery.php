<?php

namespace App\View\Components\Frontend;

use Illuminate\View\Component;
use App\Models\Admin\ImageGallery as Image;

class ImageGallery extends Component
{
    public $image_gallery;
    public $setting;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->setting = allsetting();
        if ((session('theme'))) {
            $theme = session('theme') == 'theme1' ? 1 : 2;
        } else {
            $theme = $this->setting['theme'] == 'one' ? 1 : 2;
        }
        $this->image_gallery = Image::where('theme', $theme)->latest()->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if ((session('theme') && session('theme') == 'theme2') || $this->setting['theme'] == 'two') {
            return view('components.frontend.image-gallery-two', $this->image_gallery);
        } else {
            return view('components.frontend.image-gallery-one', $this->image_gallery);
        }
    }
}
