<?php namespace Brouwers\Bbcodes\Codes;

class B {

    /**
     * Register bold
     * @param  \Brouwers\Shortcodes\Shortcode $shortcode
     * @param  string $content
     * @return [type]
     */
    public function register($shortcode, $content)
    {
        return '<strong>' . $content . '</strong>';
    }

}