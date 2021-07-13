<?php

declare(strict_types=1);

namespace Vdlp\SchemaOrg;

use System\Classes\PluginBase;
use Vdlp\SchemaOrg\Components\StructuredData;

final class Plugin extends PluginBase
{
    public function pluginDetails(): array
    {
        return [
            'name' => 'SchemaOrg',
            'description' => 'Provides the rendering of structured data.',
            'author' => 'Van der Let & Partners',
            'icon' => 'icon-leaf',
        ];
    }

    public function registerComponents(): array
    {
        return [
            StructuredData::class => 'vdlpStructuredData',
        ];
    }
}
