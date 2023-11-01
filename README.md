# Luana for Bludit Theme

A blogging theme focusing on text and also following some WCAG recommendations in an effort to make the web more accessible, built using a small footprint CSS framework called Chota.

## Features

- Include PrismJS for syntax highlighting with a11y-light syntax highlighting theme by [Eric W. Bailey](https://github.com/ericwbailey/a11y-syntax-highlighting)
- Quite lightweight with only around 107KB total page size, approximately 0.01g CO2e carbon footprint per new visit[^1]
- Text focus with big and bold text
- With simple content markup microdata using Schema.org vocabulary for every single blog posts
- WCAG 2.1 AA & ADA Compliant (machine-tested, navigation is self-tested using NVDA)
- Three languages support: Indonesian, English, and Japanese
- Critical inline CSS and asynchronous CSS load
- Minimal and non-intrusive use of Javascript

## Compatibility

- Bludit 3.15.0
- Modern browsers[^2]

## Screenshot

![Luana theme for bludit screenshot showing its main page with several articles listed and a sidebar](luanascreenshot.webp)

## Mobile Performance[^3]

![Luana theme performance on PageSpeed for mobile mode showing all 100 for Performance, Accessibility, Best Practice, and SEO](luanapagespeed.webp)

## Notes
The current (Bludit 3.15.0) included search plugin could cause some issues with accessibility test. To ensure there are no critical errors for accessibility, you can add the required aria-label on the form function in the search plugin (bl-plugins/search/plugin.php) by yourself.

Example:

```php
$html .= '<input type="text" id="jspluginSearchText" aria-label="'.$L->get('Search').'" /> ';
```

[^1]: In development and controlled test-case. Users test may vary but still very light, bar any user added assets.
[^2]: This theme is using CSS Container Query Units [(Compatibility)](https://caniuse.com/css-container-query-units)
[^3]: Experiences may vary from person to person and use case.