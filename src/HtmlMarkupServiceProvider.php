<?php
declare(strict_types=1);

namespace M2Collective\HtmlMarkup;

use Illuminate\Support\ServiceProvider;
use M2Collective\HtmlMarkup\Commands\ConfigPublishCommand;

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
        $this->publishes([
            __DIR__ . '/../config/html-markup.php' => config_path('html-markup.php'),
        ], 'm2collective:html-markup:publish-config');

        if ($this->app->runningInConsole()) {
            $this->commands([
                ConfigPublishCommand::class,
            ]);
        }
    }
}
