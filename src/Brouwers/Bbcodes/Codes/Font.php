<?php namespace Brouwers\Bbcodes\Codes;

class Font {

    /**
     * Register bold
     * @param  \Brouwers\Shortcodes\Shortcode $shortcode
     * @param  string $content
     * @return [type]
     */
    public function register($shortcode, $content)
    {
        return '<font '. $shortcode->get('size') . ' ' . $shortcode->get('color') . '>' . $content . '</font>';
    }

}