<?php

if (!function_exists('versioned_asset')) {
    /**
     * Build an asset URL that changes when its deployed file changes.
     * This lets browsers keep long-lived asset caches without serving stale files.
     */
    function versioned_asset($path, $secure = null)
    {
        $url = asset($path, $secure);
        $urlPath = parse_url($url, PHP_URL_PATH);
        $filePath = public_path(ltrim($urlPath, '/'));
        $version = (string) config('site.version', '1.4.5');

        if (is_file($filePath)) {
            $modifiedAt = filemtime($filePath);
            if ($modifiedAt !== false) {
                $version .= '-' . $modifiedAt;
            }
        }

        $urlWithoutQuery = preg_replace('/[?#].*$/', '', $url);

        return $urlWithoutQuery . '?v=' . rawurlencode($version);
    }
}
