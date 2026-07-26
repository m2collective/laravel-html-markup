<?php
declare(strict_types=1);

namespace M2Collective\HtmlMarkup\Facades;

use Illuminate\Support\Facades\Facade;
use M2Collective\HtmlMarkup\HtmlMarkup as HtmlMarkupContract;
use M2Collective\HtmlMarkup\Views\Properties\Contracts\Body;
use M2Collective\HtmlMarkup\Views\Properties\Contracts\Html;

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
