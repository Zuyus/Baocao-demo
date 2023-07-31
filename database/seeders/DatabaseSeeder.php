<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LanguageTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        $this->call(AdvertiseTableSeeder::class);
        $this->call(GeneralSettingsTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(BrandTableSeeder::class);
        $this->call(ProductTagListsTableSeeder::class);
        $this->call(ItemTagsTableSeeder::class);
        $this->call(ImageGallerySeeder::class);
        $this->call(ColorTableSeeder::class);
        $this->call(SizeTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ProductTagTableSeeder::class);
        $this->call(CustomerServiceTableSeeder::class);
        $this->call(CompanyStoryTableSeeder::class);
        $this->call(TestimonialTableSeeder::class);
        $this->call(HomepageTableSeeder::class);
        $this->call(AboutUsPageTableSeeder::class);
        $this->call(SocialLinkTableSeeder::class);
        $this->call(FooterTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(PaymentPlatformsTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(SeoSettingsTableSeeder::class);
        $this->call(SpecialOfferTableSeeder::class);
        $this->call(BannerSeeder::class);
    }
}
