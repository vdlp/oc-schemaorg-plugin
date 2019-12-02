# VDLP SchemaOrg plugin

Provides the rendering of structured data.

## Requirements

- PHP 7.2 or higher
- October CMS (preferably the latest version).

## Installation

`composer require vdlp/oc-schemaorg-plugin`

## Usage

To render structured data from a component you can listen to the `Vdlp\SchemaOrg\Classes\Events\FetchStructuredData`
event, see below for an example.

```
/** @var \Illuminate\Contracts\Events\Dispatcher $eventDispatcher */
$eventDispatcher = resolve(\Illuminate\Contracts\Events\Dispatcher::class);

$eventDispatcher->listen(\Vdlp\SchemaOrg\Classes\Events\FetchStructuredData::class, static function () {
    return \Spatie\SchemaOrg\Schema::localBusiness()
        ->name('VDLP')
        ->email('octobercms@vdlp.nl')
        ->contactPoint(\Spatie\SchemaOrg\Schema::contactPoint()->areaServed('Worldwide'));
});
```

Add the `vdlpStructuredData` component to your page or layout to render the structured data.

## Issues

If you have issues using this plugin. Please create an issue on GitHub or contact us at [octobercms@vdlp.nl]().

## Contribution

Any help is appreciated. Or feel free to create a Pull Request on GitHub.
