<?php namespace Brouwers\Bbcodes\Codes;

class I {

    /**
     * Register bold
     * @param  \Brouwers\Shortcodes\Shortcode $shortcode
     * @param  string $content
     * @return [type]
     */
    public function register($shortcode, $content)
    {
        return '<em>' . $content . '</em>';
    }

}