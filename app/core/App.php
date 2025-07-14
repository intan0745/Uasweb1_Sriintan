<?php

class App {
    public function __construct()
    {
        $url = $this->parseURL();

        // Tambahkan <pre> agar output var_dump rapi
        echo '<pre>';
        var_dump($url);
        echo '</pre>';
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }

        return []; // return array kosong jika tidak ada URL
    }
}
