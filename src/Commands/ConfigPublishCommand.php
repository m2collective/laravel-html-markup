<?php
declare(strict_types=1);

namespace M2Collective\HtmlMarkup\Commands;

use Illuminate\Console\Command;

final class ConfigPublishCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'm2collective:html-markup:publish-config';

    /**
     * @var string
     */
    protected $description = 'Publishing the config files';

    /**
     * @return void
     */
    public function handle() : void
    {
        $this->call('vendor:publish', [
            '--tag' => 'm2collective:html-markup:publish-config'
        ]);
    }
}
