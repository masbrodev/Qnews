<?php

use Illuminate\Database\Seeder;
// use Faker;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // https://github.com/fzaninotto/Faker
        $faker = Faker\Factory::create('id_ID');
        for ($i=1; $i <= 5; $i++) { 
            DB::table('beritas')->insert([
                'judul' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'kategori' => $faker->randomElement($array = array (
                    'Nasional',
                    'Otomotif',
                    'Edukasi',
                    'Ekonomi',
                    'Teknologi',
                    'Olahraga',
                    'Health')),
                'foto' => $faker->randomElement($array = array (
                    '2016_11_14_15_40_24_android.jpg',
                    '2016_11_14_09_54_08_Selection_004.png',
                    '2016_11_13_18_08_19_p9220572.jpg',
                    '2016_11_13_11_40_24_newsf.jpg')),
                'isi' => $faker->realText,
                'path' => $faker->slug,
                'dilihat' => $faker->numberBetween($min = 20, $max = 300),
                'created_at' =>$faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at' =>$faker->date($format = 'Y-m-d', $max = 'now')
            ]);

            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('users'),
                'profile' => 'profile.png',
                'alamat' => $faker->address,
                'tgl_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'nohp' => $faker->phoneNumber,
                'remember_token' => $faker->unixTime($max = 'now'),
                'created_at' =>$faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at' =>$faker->date($format = 'Y-m-d', $max = 'now')
            ]);

            DB::table('comments')->insert([
                'user_id' => $faker->randomElement($array = array (3,1,2)),
                'post_id' => $faker->randomDigit,
                'isi' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'remember_token' => $faker->creditCardNumber,
                'created_at' =>$faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at' =>$faker->date($format = 'Y-m-d', $max = 'now')
            ]);
        }

        DB::table('users')->insert([
                'name' => 'Ahmad Usamah',
                'email' => 'admin@portal.com',
                'password' => bcrypt('admin'),
                'profile' => 'profile.png',
                'alamat' => $faker->address,
                'tgl_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'nohp' => $faker->phoneNumber,
                'remember_token' => $faker->unixTime($max = 'now'),
                'created_at' =>$faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at' =>$faker->date($format = 'Y-m-d', $max = 'now')
                ]);
    }
}
