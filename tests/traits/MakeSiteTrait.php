<?php

use Faker\Factory as Faker;
use App\Models\Site;
use App\Repositories\SiteRepository;

trait MakeSiteTrait
{
    /**
     * Create fake instance of Site and save it in database
     *
     * @param array $siteFields
     * @return Site
     */
    public function makeSite($siteFields = [])
    {
        /** @var SiteRepository $siteRepo */
        $siteRepo = App::make(SiteRepository::class);
        $theme = $this->fakeSiteData($siteFields);
        return $siteRepo->create($theme);
    }

    /**
     * Get fake instance of Site
     *
     * @param array $siteFields
     * @return Site
     */
    public function fakeSite($siteFields = [])
    {
        return new Site($this->fakeSiteData($siteFields));
    }

    /**
     * Get fake data of Site
     *
     * @param array $postFields
     * @return array
     */
    public function fakeSiteData($siteFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'name_en' => $fake->word,
            'address' => $fake->text,
            'main_img' => $fake->text,
            'introtext' => $fake->text,
            'text' => $fake->text,
            'price' => $fake->word,
            'open_hours' => $fake->text,
            'city_id' => $fake->randomDigitNotNull
        ], $siteFields);
    }
}
