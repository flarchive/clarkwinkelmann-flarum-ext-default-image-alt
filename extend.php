<?php

namespace ClarkWinkelmann\NoEmailNotifications;

use Flarum\Extend;
use Flarum\Locale\Translator;
use Flarum\Post\Post;
use Illuminate\Support\Arr;
use s9e\TextFormatter\Utils;

return [
    new Extend\Locales(__DIR__ . '/locale'),

    (new Extend\Formatter())
        ->render(function ($renderer, $context, $xml) {
            return Utils::replaceAttributes($xml, 'IMG', function (array $attributes) use ($context): array {
                // If there's already an alt text, skip our code
                if (Arr::get($attributes, 'alt')) {
                    return $attributes;
                }

                /**
                 * @var $translator Translator
                 */
                $translator = resolve(Translator::class);

                $key = 'clarkwinkelmann-default-image-alt.api.alt-text-generic';
                $params = [];

                if ($context instanceof Post && $context->user) {
                    $key = 'clarkwinkelmann-default-image-alt.api.alt-text-author';
                    $params['username'] = $context->user->display_name;
                }

                $attributes['alt'] = $translator->trans($key, $params);

                return $attributes;
            });
        }),
];
