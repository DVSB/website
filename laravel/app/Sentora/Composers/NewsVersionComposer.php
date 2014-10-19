<?php

namespace Sentora\Composers;

class NewsVersionComposer
{

    /**
     * News and Version shared view variables
     * @param type $view
     */
    public function compose($view)
    {
        $view->with('senApiVersion', (new \Sentora\Providers\SentoraPublicApi)->latestStableVersion());
        $view->with('senApiNews', (new \Sentora\Providers\SentoraPublicApi)->lastestNews());
    }
}
