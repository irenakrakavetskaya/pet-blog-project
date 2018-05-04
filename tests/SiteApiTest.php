<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SiteApiTest extends TestCase
{
    use MakeSiteTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateSite()
    {
        $site = $this->fakeSiteData();
        $this->json('POST', '/api/v1/sites', $site);

        $this->assertApiResponse($site);
    }

    /**
     * @test
     */
    public function testReadSite()
    {
        $site = $this->makeSite();
        $this->json('GET', '/api/v1/sites/'.$site->id);

        $this->assertApiResponse($site->toArray());
    }

    /**
     * @test
     */
    public function testUpdateSite()
    {
        $site = $this->makeSite();
        $editedSite = $this->fakeSiteData();

        $this->json('PUT', '/api/v1/sites/'.$site->id, $editedSite);

        $this->assertApiResponse($editedSite);
    }

    /**
     * @test
     */
    public function testDeleteSite()
    {
        $site = $this->makeSite();
        $this->json('DELETE', '/api/v1/sites/'.$site->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/sites/'.$site->id);

        $this->assertResponseStatus(404);
    }
}
