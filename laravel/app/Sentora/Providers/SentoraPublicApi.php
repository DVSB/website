<?php

namespace Sentora\Providers;

use \Cache;
use \Config;

class SentoraPublicApi
{

    private $driver;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->driver = new \Ballen\Sentora\PublicApiClient\PublicApiClient();
    }

    /**
     * Returns the current stable release of Sentora.
     * @return type
     */
    public function latestStableVersion()
    {
        return Cache::remember('sentora_version', Config::get('site.sentora_api_cache_timeout'), function () {
                    return $this->driver->getVersion()->version;
                });
    }

    /**
     * Gets the latest project news and caches it.
     * @return type
     */
    public function lastestNews()
    {
        return Cache::remember('sentora_news', Config::get('site.sentora_api_cache_timeout'), function () {
                    return $this->driver->getNews();
                });
    }
}
