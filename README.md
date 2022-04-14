# Default Image Alt Text

[![MIT license](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/clarkwinkelmann/flarum-ext-default-image-alt/blob/master/LICENSE.md) [![Latest Stable Version](https://img.shields.io/packagist/v/clarkwinkelmann/flarum-ext-default-image-alt.svg)](https://packagist.org/packages/clarkwinkelmann/flarum-ext-default-image-alt) [![Total Downloads](https://img.shields.io/packagist/dt/clarkwinkelmann/flarum-ext-default-image-alt.svg)](https://packagist.org/packages/clarkwinkelmann/flarum-ext-default-image-alt) [![Donate](https://img.shields.io/badge/paypal-donate-yellow.svg)](https://www.paypal.me/clarkwinkelmann)

This extension sets a default alt text to images that were inserted in a post without any alt text.

It affects all TextFormatter syntaxes that use the internal `IMG` tag, so `![](https://example.com/image.jpg)`, `[img]https://example.com/image.jpg[/img]` and AutoImage.

The main use case of this extension is improving accessibility but help texts are also very useful to see whether the post contains broken images.

The default alt text will not be visible in previews, only in the final output.

The default text is not stored in the post XML, so all existing posts are immediately updated, including when the translation or language is modified.

The alt text is different for posts with a known author.
A second alt text is used for posts with deleted author and other contexts where the Flarum formatter is used.

The Linguist extension can be used to change the text.

## Installation

    composer require clarkwinkelmann/flarum-ext-default-image-alt

## Support

This extension is under **minimal maintenance**.

It was developed for a client and released as open-source for the benefit of the community.
I might publish simple bugfixes or compatibility updates for free.

You can [contact me](https://clarkwinkelmann.com/flarum) to sponsor additional features or updates.

Support is offered on a "best effort" basis through the Flarum community thread.

## Links

- [GitHub](https://github.com/clarkwinkelmann/flarum-ext-default-image-alt)
- [Packagist](https://packagist.org/packages/clarkwinkelmann/flarum-ext-default-image-alt)
- [Discuss](https://discuss.flarum.org/d/30592)
