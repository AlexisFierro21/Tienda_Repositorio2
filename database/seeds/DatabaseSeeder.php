<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->crate([
            'email' => 'alexis@mail.com'
        ]);
    	model::unguard();
        $this->call(libroTableSedeer::class);
		model::reguard();    
    }
}
