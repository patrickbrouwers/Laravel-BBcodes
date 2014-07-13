<?php namespace Brouwers\Bbcodes\Codes;

class U {

    /**
     * Register bold
     * @param  \Brouwers\Shortcodes\Shortcode $shortcode
     * @param  string $content
     * @return [type]
     */
    public function register($shortcode, $content)
    {
        return '<u>' . $content . '</u>';
    }

}