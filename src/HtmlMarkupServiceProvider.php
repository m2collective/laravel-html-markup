<?php
declare(strict_types=1);

namespace M2Collective\HtmlMarkup;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use M2Collective\HtmlMarkup\Commands\ConfigPublishCommand;
use M2Collective\HtmlMarkup\Commands\ViewPublishCommand;

final class HtmlMarkupServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/html-markup.php',
            'html-markup'
        );

        $this->app->singleton(
            HtmlMarkup::class,
            HtmlMarkupService::class
        );
    }

    /**
     * @return void
     */
    public function boot(): void
    {
        $this->loadViewsFrom(
            __DIR__ . '/../resources/views',
            'html-markup'
        );

        Blade::componentNamespace(
            'M2Collective\\HtmlMarkup\\Views\\Components',
            'html-markup'
        );

        $this->publishes([
            __DIR__ . '/../config/html-markup.php' => config_path('html-markup.php'),
        ], 'm2collective:html-markup:publish-config');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/laravel-html-markup'),
        ], 'm2collective:html-markup:publish-views');

        if ($this->app->runningInConsole()) {
            $this->commands([
                ConfigPublishCommand::class,
                ViewPublishCommand::class,
            ]);
        }
    }
}
