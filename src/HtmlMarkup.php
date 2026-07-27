<?php
declare(strict_types=1);

namespace M2Collective\HtmlMarkup;

use M2Collective\HtmlMarkup\Contracts\Views\Properties\Body;
use M2Collective\HtmlMarkup\Contracts\Views\Properties\Html;

interface HtmlMarkup
{
    /**
     * @return Html
     */
    public function getHtml(): Html;

    /**
     * @return Body
     */
    public function getBody(): Body;
}
