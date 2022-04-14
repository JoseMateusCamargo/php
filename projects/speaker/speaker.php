<?php
/*
 * Begin license text.
 * Copyright (c) 2022. Mateus
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * End license text.
 */

// Adicionar: extension=com_dotnet > php.ini
/**
 * @param string $text
 * @return void
 */
function createSpeaker(string $text)
{
    $create_linux_speaker = static function () use ($text) {
        if (is_executable(exec("which spd-say"))) {
            exec('spd-say ' . escapeshellarg($text), $output, $resultCode);

            if ($resultCode !== 0) {
                throw new \RuntimeException('Error executing spd-say command');
            }
        }

        if (is_executable(exec("which espeak"))) {
            exec('espeak ' . escapeshellarg($text), $output, $resultCode);

            if ($resultCode !== 0) {
                throw new \RuntimeException('Error executing espeak command');
            }
        }

        throw new RuntimeException('Linux needs spd-say or espeak installed');
    };

    switch (PHP_OS_FAMILY) {
        default:
            echo "In build... don't worry!";
            break;

        case "Windows":
            // Adicionar: extension=com_dotnet > php.ini
            $voice = new \COM("SAPI.SpVoice");
            $voice->Speak($text);
            break;

        case "Linux":
            $create_linux_speaker();
            break;

        case "Darwin":
            exec('say ' . escapeshellarg($text), $output, $resultCode);

            if ($resultCode !== 0) {
                throw new \RuntimeException('Error executing spd-say command');
            }
            break;
    }
}

createSpeaker('Hello world, Starting RPA!');