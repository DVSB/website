<?php

class SitemapController extends BaseController
{

    /**
     * Generates a Google Compatible XML site-map.
     * @return Roumen\Sitemap
     */
    public function generateXML()
    {
        $sitemap = App::make('sitemap');
        $sitemap->add(URL::route('home'), date('c', filemtime(app_path() . '/views/pages/homepage.blade.php')), '1.0', 'weekly');
        $sitemap->add(URL::route('about'), date('c', filemtime(app_path() . '/views/pages/about.blade.php')), '0.8', 'monthly');
        $sitemap->add(URL::route('the-team'), date('c', filemtime(app_path() . '/views/pages/team.blade.php')), '0.6', 'monthly');
        $sitemap->add(URL::route('donate'), date('c', filemtime(app_path() . '/views/pages/donate.blade.php')), '0.4', 'monthly');
        $sitemap->add(URL::route('download'), date('c', filemtime(app_path() . '/views/pages/download.blade.php')), '0.8', 'monthly');
        $sitemap->add(URL::route('support.premium'), date('c', filemtime(app_path() . '/views/pages/support.blade.php')), '0.7', 'monthly');
        $sitemap->add(URL::route('support.faqs'), date('c', filemtime(app_path() . '/views/pages/faqs.blade.php')), '0.7', 'monthly');
        $sitemap->add(URL::route('git'), date('c', filemtime(app_path() . '/views/pages/git.blade.php')), '0.7', 'monthly');
        return $sitemap->render('xml');
    }
}
