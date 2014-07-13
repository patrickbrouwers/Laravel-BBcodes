<?php namespace Brouwers\Bbcodes\Codes;

class Url {

    /**
     * Register bold
     * @param  \Brouwers\Shortcodes\Shortcode $shortcode
     * @param  string $content
     * @return [type]
     */
    public function register($shortcode, $content)
    {
        return '<a '. $shortcode->get('href', $content) .' '. $shortcode->get('title') .'>'. $content .'</a>';
    }

}