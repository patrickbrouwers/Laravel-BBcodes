<?php namespace Brouwers\Bbcodes\Codes;

class S {

    /**
     * Register bold
     * @param  \Brouwers\Shortcodes\Shortcode $shortcode
     * @param  string $content
     * @return [type]
     */
    public function register($shortcode, $content)
    {
        return '<strike>' . $content . '</strike>';
    }

}