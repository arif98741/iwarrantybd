//<?php

    use Illuminate\Database\Seeder;
    use App\Models\Admin;
    use App\Models\Claim;
    use App\Models\Invoice;
    use App\Models\Package;
    use App\Models\Page;
    use App\Models\Setting;
    use App\Models\Subscriber;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Schema;

    class DatabaseSeeder extends Seeder
    {

        public function run()
        {
            factory(Admin::class, 1)->create();
            //factory(Page::class, 2)->create();
            factory(Subscriber::class, 3)->create();
            factory(Claim::class, 5)->create();
            //factory(Package::class, 3)->create();
            //factory(Invoice::class, 5)->create();
            //factory(Setting::class, 1)->create();
        }
    }