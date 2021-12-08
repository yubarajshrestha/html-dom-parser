### HtmlDomParser

[![Total Downloads](https://poser.pugx.org/yubarajshrestha/html-dom-parser/downloads)](https://packagist.org/packages/yubarajshrestha/html-dom-parser)
[![License](https://poser.pugx.org/yubarajshrestha/html-dom-parser/license)](https://packagist.org/packages/yubarajshrestha/html-dom-parser)

This package a simple wrapper around **_Simple Html Dom Parser_** library.

### How to?

#### Step 1: Install package

Install package by executing the command.

```shell
composer require yubarajshrestha/html-dom-parser
```

#### Step 2: Implement HtmlDomParser

```php
use YubarajShrestha\HtmlDomParser\Parser;

public function parse_tags()
{
    $html = '<div>
        <ul>
            <li>PHP</li>
            <li>Python</li>
        </ul>
    </div>';

    $parsed = Parser::str_get_html($html);
}
```

**Credit**
[PHP Simple HTML DOM Parser](https://simplehtmldom.sourceforge.io/)
