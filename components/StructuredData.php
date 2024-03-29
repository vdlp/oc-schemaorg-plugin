<?php

declare(strict_types=1);

namespace Vdlp\SchemaOrg\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Contracts\Events\Dispatcher;
use Spatie\SchemaOrg\Type;
use Vdlp\SchemaOrg\Classes\Events\FetchStructuredData;

final class StructuredData extends ComponentBase
{
    public string $structuredData = '';

    public function componentDetails(): array
    {
        return [
            'name' => 'Structured Data',
            'description' => 'Renders the structured data.',
        ];
    }

    public function onRender(): void
    {
        /** @var Dispatcher $eventDispatcher */
        $eventDispatcher = resolve(Dispatcher::class);

        $responses = (array) $eventDispatcher->dispatch(FetchStructuredData::class);

        foreach ($responses as $response) {
            if (!$response instanceof Type) {
                continue;
            }

            $this->structuredData .= $response->toScript();
        }
    }
}
