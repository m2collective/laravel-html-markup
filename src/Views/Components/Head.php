<?php
declare(strict_types=1);

namespace M2Collective\HtmlMarkup\Views\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Head extends Component
{
    /**
     * @return View
     */
    public function render(): View
    {
        return view('html-markup::components.head');
    }
}
