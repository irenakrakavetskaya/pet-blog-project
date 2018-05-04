<?php

use App\Models\Site;
use App\Repositories\SiteRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SiteRepositoryTest extends TestCase
{
    use MakeSiteTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var SiteRepository
     */
    protected $siteRepo;

    public function setUp()
    {
        parent::setUp();
        $this->siteRepo = App::make(SiteRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateSite()
    {
        $site = $this->fakeSiteData();
        $createdSite = $this->siteRepo->create($site);
        $createdSite = $createdSite->toArray();
        $this->assertArrayHasKey('id', $createdSite);
        $this->assertNotNull($createdSite['id'], 'Created Site must have id specified');
        $this->assertNotNull(Site::find($createdSite['id']), 'Site with given id must be in DB');
        $this->assertModelData($site, $createdSite);
    }

    /**
     * @test read
     */
    public function testReadSite()
    {
        $site = $this->makeSite();
        $dbSite = $this->siteRepo->find($site->id);
        $dbSite = $dbSite->toArray();
        $this->assertModelData($site->toArray(), $dbSite);
    }

    /**
     * @test update
     */
    public function testUpdateSite()
    {
        $site = $this->makeSite();
        $fakeSite = $this->fakeSiteData();
        $updatedSite = $this->siteRepo->update($fakeSite, $site->id);
        $this->assertModelData($fakeSite, $updatedSite->toArray());
        $dbSite = $this->siteRepo->find($site->id);
        $this->assertModelData($fakeSite, $dbSite->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteSite()
    {
        $site = $this->makeSite();
        $resp = $this->siteRepo->delete($site->id);
        $this->assertTrue($resp);
        $this->assertNull(Site::find($site->id), 'Site should not exist in DB');
    }
}
