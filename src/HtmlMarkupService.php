<?php
declare(strict_types=1);

namespace M2Collective\HtmlMarkup;

use M2Collective\HtmlMarkup\Views\Properties\Contracts\Body;
use M2Collective\HtmlMarkup\Views\Properties\Contracts\Html;

final readonly class HtmlMarkupService implements HtmlMarkup
{
    /**
     * @var Html
     */
    public Html $html;

    /**
     * @var Body
     */
    public Body $body;

    /**
     * @param Html $html
     * @param Body $body
     */
    public function __construct(Html $html, Body $body)
    {
        $this->html = $html;
        $this->body = $body;
    }

    /**
     * @return Html
     */
    public function getHtml(): Html
    {
        return $this->html;
    }

    /**
     * @return Body
     */
    public function getBody(): Body
    {
        return $this->body;
    }
}
