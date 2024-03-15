// database/seeders/UsersTableSeeder.php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'username' => 'laila',
            'password' => bcrypt('rahasia'),
            'name' => 'laila mamamaam'
        ]);
    }
}
