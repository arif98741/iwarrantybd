<?php

    use Illuminate\Database\Seeder;
    use App\Models\Admin;
    use App\Models\Claim;
    use App\Models\Invoice;
    use App\Models\Package;
    use App\Models\Page;
    use App\Models\Setting;
    use App\Models\Subscriber;
    use App\Models\Subscription;
    use App\Models\Vendor;

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
            //factory(Setting::class, 1)->create();
        }
    }
