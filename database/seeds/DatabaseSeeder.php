<?php

use App\Models\Faq;
use App\Models\Page;
use App\Models\Admin;
use App\Models\Claim;
use App\Models\Center;
use App\Models\Vendor;
use App\Models\Invoice;
use App\Models\Package;
use App\Models\Setting;
use App\Models\Subscriber;
use App\Models\Subscription;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        factory(Admin::class, 1)->create();
        //factory(Page::class, 2)->create();
        factory(Subscriber::class, 3)->create();
        factory(Claim::class, 5)->create();
        factory(Package::class, 1)->create();
        factory(Subscription::class, 5)->create();
        factory(Vendor::class, 3)->create();
        factory(Center::class, 3)->create();
        factory(Setting::class, 1)->create();
        factory(Faq::class, 1)->create();
    }
}
