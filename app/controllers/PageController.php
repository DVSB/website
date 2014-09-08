<?php

use Illuminate\Routing\Redirector;

class PageController extends BaseController
{

    /**
     * Displays the homepage.
     * @return Illuminate\View\Factory
     */
    public function showHomepage()
    {
        return View::make('pages.homepage');
    }

    /**
     * Displays the 'About' project page
     * @return Illuminate\View\Factory
     */
    public function showAbout()
    {
        return View::make('pages.about');
    }

    /**
     * Displays the 'About\Team' page.
     * @return Illuminate\View\Factory
     */
    public function showTeam()
    {
        return View::make('pages.team');
    }

    /**
     * Displays the 'Donate' page.
     * @return Illuminate\View\Factory
     */
    public function showDonate()
    {
        return View::make('pages.donate');
    }

    /**
     * Handles the 'Download' page.
     * @return Illuminate\View\Factory
     */
    public function showDownload()
    {
        return View::make('pages.download');
    }

    /**
     * Handles the 'Support' page
     * @return Illuminate\View\Factory
     */
    public function showSupport()
    {
        return View::make('pages.support');
    }

    /**
     * Handles the 'FAQS' page
     * @return Illuminate\View\Factory
     */
    public function showFaqs()
    {
        return Redirect::to('http://docs.sentora.org/?node=94');
    }
}
