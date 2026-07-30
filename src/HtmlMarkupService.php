<?php
declare(strict_types=1);

namespace M2Collective\HtmlMarkup;

use M2Collective\HtmlMarkup\Contracts\Views\Properties\Body;
use M2Collective\HtmlMarkup\Contracts\Views\Properties\Base;

final readonly class HtmlMarkupService implements HtmlMarkup
{
    /**
     * @var Base
     */
    public Base $base;

    /**
     * @var Body
     */
    public Body $body;

    /**
     * @param Base $base
     * @param Body $body
     */
    public function __construct(Base $base, Body $body)
    {
        $this->base = $base;
        $this->body = $body;
    }
}
