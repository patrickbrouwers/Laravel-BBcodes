<?php namespace Brouwers\Bbcodes\Codes;

class Code {

    /**
     * Register code
     * @param  \Brouwers\Shortcodes\Shortcode $shortcode
     * @param  string $content
     * @return string
     */
    public function register($shortcode, $content)
    {
        return '<code>' . $content . '</code>';
    }

}