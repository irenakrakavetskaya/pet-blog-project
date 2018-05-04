<?php

use App\Models\Duration;
use App\Repositories\DurationRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DurationRepositoryTest extends TestCase
{
    use MakeDurationTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var DurationRepository
     */
    protected $durationRepo;

    public function setUp()
    {
        parent::setUp();
        $this->durationRepo = App::make(DurationRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateDuration()
    {
        $duration = $this->fakeDurationData();
        $createdDuration = $this->durationRepo->create($duration);
        $createdDuration = $createdDuration->toArray();
        $this->assertArrayHasKey('id', $createdDuration);
        $this->assertNotNull($createdDuration['id'], 'Created Duration must have id specified');
        $this->assertNotNull(Duration::find($createdDuration['id']), 'Duration with given id must be in DB');
        $this->assertModelData($duration, $createdDuration);
    }

    /**
     * @test read
     */
    public function testReadDuration()
    {
        $duration = $this->makeDuration();
        $dbDuration = $this->durationRepo->find($duration->id);
        $dbDuration = $dbDuration->toArray();
        $this->assertModelData($duration->toArray(), $dbDuration);
    }

    /**
     * @test update
     */
    public function testUpdateDuration()
    {
        $duration = $this->makeDuration();
        $fakeDuration = $this->fakeDurationData();
        $updatedDuration = $this->durationRepo->update($fakeDuration, $duration->id);
        $this->assertModelData($fakeDuration, $updatedDuration->toArray());
        $dbDuration = $this->durationRepo->find($duration->id);
        $this->assertModelData($fakeDuration, $dbDuration->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteDuration()
    {
        $duration = $this->makeDuration();
        $resp = $this->durationRepo->delete($duration->id);
        $this->assertTrue($resp);
        $this->assertNull(Duration::find($duration->id), 'Duration should not exist in DB');
    }
}
