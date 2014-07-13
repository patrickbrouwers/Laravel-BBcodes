<?php namespace Brouwers\Bbcodes\Codes;

class Youtube {

    /**
     * Register code
     * @param  \Brouwers\Shortcodes\Shortcode $shortcode
     * @param  string $content
     * @return string
     */
    public function register($shortcode, $content)
    {
        return '<iframe '. $shortcode->get('width', 560) .' '. $shortcode->get('height', 315) .' src="//www.youtube.com/embed/'. $content .'" '. $shortcode->get('frameborder', 0) .' '. $this->fullscreen($shortcode) .'></iframe>';
    }

    /**
     * Fullscreen option
     * @param  [type] $shortcode [description]
     * @return [type]            [description]
     */
    public function fullscreen($shortcode)
    {
        if($shortcode->allowfullscreen !== 'false')
            return 'allowfullscreen';
    }

}