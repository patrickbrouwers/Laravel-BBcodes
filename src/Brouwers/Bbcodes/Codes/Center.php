<?php namespace Brouwers\Bbcodes\Codes;

class Center {

    /**
     * Register bold
     * @param  \Brouwers\Shortcodes\Shortcode $shortcode
     * @param  string $content
     * @return [type]
     */
    public function register($shortcode, $content)
    {
        return '<div style="text-align:center;">' . $content . '</div>';
    }

}