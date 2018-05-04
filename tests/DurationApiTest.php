<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DurationApiTest extends TestCase
{
    use MakeDurationTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateDuration()
    {
        $duration = $this->fakeDurationData();
        $this->json('POST', '/api/v1/durations', $duration);

        $this->assertApiResponse($duration);
    }

    /**
     * @test
     */
    public function testReadDuration()
    {
        $duration = $this->makeDuration();
        $this->json('GET', '/api/v1/durations/'.$duration->id);

        $this->assertApiResponse($duration->toArray());
    }

    /**
     * @test
     */
    public function testUpdateDuration()
    {
        $duration = $this->makeDuration();
        $editedDuration = $this->fakeDurationData();

        $this->json('PUT', '/api/v1/durations/'.$duration->id, $editedDuration);

        $this->assertApiResponse($editedDuration);
    }

    /**
     * @test
     */
    public function testDeleteDuration()
    {
        $duration = $this->makeDuration();
        $this->json('DELETE', '/api/v1/durations/'.$duration->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/durations/'.$duration->id);

        $this->assertResponseStatus(404);
    }
}
