<?php namespace Brouwers\Bbcodes\Codes;

class Img {

    /**
     * Register bold
     * @param  \Brouwers\Shortcodes\Shortcode $shortcode
     * @param  string $content
     * @return [type]
     */
    public function register($shortcode, $content)
    {
        return '<img '. $shortcode->get('src', $content) .' '. $shortcode->get('alt') .' />';
    }

}