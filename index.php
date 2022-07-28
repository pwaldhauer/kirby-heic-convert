<?php

Kirby::plugin('pwaldhauer/kirby-heic-convert', [

    'hooks' => [
        'file.create:after' => function (Kirby\Cms\File $file) {

            if ($file->extension() !== 'heic') {
                return true;
            }

            $path = $file->root();

            $newname = sprintf('%s.%s', $file->name(), 'jpg');
            $newpath = sprintf('%s/%s', dirname($path), $newname);

            $command = sprintf('%s "%s" "%s"', option('heic-convert.path'), $path, $newpath);
            if (!file_exists($newpath)) {
                shell_exec($command);
                $file->delete();
            }

            return true;
        }
    ]

]);