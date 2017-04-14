<?php

if ( ! function_exists('asset_segmented')) {
    /**
     * This function is used wherever an asset is served in the application.
     *
     * The purpose of this is so that it's easy to compile the pages down to
     * Flat HTML Format should you wish, as the assets are file: protocol
     * friendly, and won't cause you any issues with deeper-set links.
     * 
     * @param  string $uri
     * @return string
     */
    function asset_segmented($uri)
    {
        $upOneFolder = '../';
        $segment1 = request()->segment(1);
        $segment2 = request()->segment(2);
        $segment3 = request()->segment(3);
        $segment4 = request()->segment(4);
        $segment5 = request()->segment(5);
        $segment6 = request()->segment(6);

        if (empty($segment1)) {
            return $uri;
        } else if (empty($segment2)) {
            return $upOneFolder . $uri;
        } else if (empty($segment3)) {
            return $upOneFolder . $upOneFolder . $uri;
        } else if (empty($segment4)) {
            return $upOneFolder . $upOneFolder . $upOneFolder . $uri;
        } else if (empty($segment5)) {
            return $upOneFolder . $upOneFolder . $upOneFolder . $upOneFolder . $uri;
        } else if (empty($segment6)) {
            return $upOneFolder . $upOneFolder . $upOneFolder . $upOneFolder . $upOneFolder . $uri;
        }
    }
}