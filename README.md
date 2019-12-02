# VDLP SchemaOrg plugin

Provides the rendering of structured data on your October CMS powered website.

## What is structured data?

Structured data is code in a specific format, written in such a way that search engines understand it. Search engines read the code and use it to display search results in a specific and much richer way. You can easily put this piece of code on your website.

There are all kinds of structured data. Structured data is always a code format. There’s structured data for books, for reviews, for movies, and for products in your online store, for instance. In all cases, structured data adds more details to your snippet in the search results.

Browse [Google’s Search Gallery](https://developers.google.com/search/docs/guides/search-gallery) to see which rich results are powered by structured data.

Source: [yoast.com](https://yoast.com/what-is-structured-data/)

## Requirements

- PHP 7.2 or higher
- October CMS (preferably the latest version).

## Installation

### Using composer (CLI)

`composer require vdlp/oc-schemaorg-plugin`

### Using the OC Plugin Manager (CLI)

`php artisan plugin:install Vdlp.SchemaOrg`

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
