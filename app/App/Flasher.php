<?php

namespace JackBerck\Ambatuflexing\App;

class Flasher
{
    public static function set(string $title, string $message, string $type = "success"): void
    {
        $_SESSION['flash'] = [
            "title" => $title,
            "message" => $message,
            "type" => $type
        ];
    }

    public static function run(): void
    {
        if (isset($_SESSION['flash'])) {

            echo '<script>
            Swal.fire({
                 title: "' . $_SESSION['flash']['title'] . '",
                 text: "' . $_SESSION['flash']['message'] . '",
                 icon: "' . $_SESSION['flash']['type'] . '",
                });
            </script>';

            unset($_SESSION['flash']);
        }
    }
}