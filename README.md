# The λ PHP Cli Microframework

[![Code Climate](https://d3s6mut3hikguw.cloudfront.net/github/mrferos/lambda/badges/gpa.svg)](https://codeclimate.com/github/mrferos/lambda)

## Features

It's like [µ](https://github.com/jeremeamia/mu) but for CLI!

## Example
```php
$a = new λ();
$a->add('--foo=(?<foo>.*) (?<cool>--cool)', function($params) {
    if (isset($params['cool'])) {
        var_dump($params['foo']);
    }
});

$a->run();
```

## It works, but it's kinda **definitely** a joke.

Don't use this in production, or really anywhere. It's just for fun. :smile:
