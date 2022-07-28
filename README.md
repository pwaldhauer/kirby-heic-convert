# Kirby Heic Convert

This plugin automatically converts `.heic` files to `.jpg` after upload.

It needs the `heif-convert` binary from [libheif](https://github.com/strukturag/libheif), it is included in the `libheif-examples` package in Debian Bullseye for example.

## Installation

- Install the plugin
- In `config.php` add the following config option:
```php
'heic-convert.path' => '/path/to/heif-convert',
```

- You'll also need to allow `.heic` files to be uploaded. Create a [files blueprint](https://getkirby.com/docs/reference/panel/blueprints/file) at `site/blueprints/files`, e.g. `default.yml` and add:
```yml
accept:
  extension: jpg, png, jpeg, heic, mov, m4v
```

## License

MIT