<?php

use Faker\Factory as Faker;
use App\Models\Duration;
use App\Repositories\DurationRepository;

trait MakeDurationTrait
{
    /**
     * Create fake instance of Duration and save it in database
     *
     * @param array $durationFields
     * @return Duration
     */
    public function makeDuration($durationFields = [])
    {
        /** @var DurationRepository $durationRepo */
        $durationRepo = App::make(DurationRepository::class);
        $theme = $this->fakeDurationData($durationFields);
        return $durationRepo->create($theme);
    }

    /**
     * Get fake instance of Duration
     *
     * @param array $durationFields
     * @return Duration
     */
    public function fakeDuration($durationFields = [])
    {
        return new Duration($this->fakeDurationData($durationFields));
    }

    /**
     * Get fake data of Duration
     *
     * @param array $postFields
     * @return array
     */
    public function fakeDurationData($durationFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'date_from' => $fake->word,
            'date_till' => $fake->word,
            'expenses' => $fake->word,
            'country_id' => $fake->randomDigitNotNull,
            'city_id' => $fake->randomDigitNotNull
        ], $durationFields);
    }
}
