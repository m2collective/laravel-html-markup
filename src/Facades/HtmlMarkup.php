<?php
declare(strict_types=1);

namespace M2Collective\HtmlMarkup\Facades;

use Illuminate\Support\Facades\Facade;
use M2Collective\HtmlMarkup\Contracts\Views\Properties\Body;
use M2Collective\HtmlMarkup\Contracts\Views\Properties\Html;
use M2Collective\HtmlMarkup\HtmlMarkup as HtmlMarkupContract;

/**
 * @method static Html getHtml()
 * @method static Body getBody()
 *
 * @see \M2Collective\HtmlMarkup\HtmlMarkupService
 */
final class HtmlMarkup extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return HtmlMarkupContract::class;
    }
}
