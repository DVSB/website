<?php

/**
 * A simple set of unit tests to quickly catch any 'normal' errors eg. 500,
 *  404 etc
 */
class BasicPageLoadTest extends TestCase
{

    /**
     * Makes a request to the 'homepage' and checks that is returns a 
     * simple status 200 response code.
     */
    public function testHomePageIsOk()
    {
        $this->client->request('GET', '/');
        $this->assertTrue($this->client->getResponse()->isOk());
    }

    /**
     * Makes a request to the 'About' page and checks that is returns a 
     * simple status 200 response code.
     */
    public function testAboutPageIsOk()
    {
        $this->client->request('GET', '/about');
        $this->assertTrue($this->client->getResponse()->isOk());
    }

    /**
     * Makes a request to the 'The team' page and checks that is returns a 
     * simple status 200 response code.
     */
    public function testTheTeamPageIsOk()
    {
        $this->client->request('GET', '/about/the-team');
        $this->assertTrue($this->client->getResponse()->isOk());
    }

    /**
     * Makes a request to the 'Donate' page and checks that is returns a 
     * simple status 200 response code.
     */
    public function testDonatePageIsOk()
    {
        $this->client->request('GET', '/donate');
        $this->assertTrue($this->client->getResponse()->isOk());
    }

    /**
     * Makes a request to the 'Downloads' page and checks that is returns a 
     * simple status 200 response code.
     */
    public function testDownloadPageIsOk()
    {
        $this->client->request('GET', '/download');
        $this->assertTrue($this->client->getResponse()->isOk());
    }

    /**
     * Makes a request to the 'Support' page and checks that is returns a 
     * simple status 200 response code.
     */
    public function testSupportPageIsOk()
    {
        $this->client->request('GET', '/support');
        $this->assertTrue($this->client->getResponse()->isOk());
    }

    /**
     * Makes a request to the 'FAQs' page and checks that it gets
     * redirected to the docs site.
     */
    public function testFaqsPageIsRedirected()
    {
        $this->client->request('GET', '/support/faqs');
        $this->assertTrue($this->client->getResponse()->isRedirect('http://docs.sentora.org/?node=94'));
    }

    /**
     * Makes a request to the XML sitemap and checks that is returns a 
     * simple status 200 response code.
     */
    public function testSiteMapPageIsOk()
    {
        $this->client->request('GET', 'sitemap.xml');
        $this->assertTrue($this->client->getResponse()->isOk());
    }
}
