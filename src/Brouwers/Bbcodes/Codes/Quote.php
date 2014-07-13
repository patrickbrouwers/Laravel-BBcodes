<?php namespace Brouwers\Bbcodes\Codes;

class Quote {

    /**
     * Register bold
     * @param  \Brouwers\Shortcodes\Shortcode $shortcode
     * @param  string $content
     * @return [type]
     */
    public function register($shortcode, $content)
    {
        return '<blockquote>' . $content . '</blockquote>';
    }

}