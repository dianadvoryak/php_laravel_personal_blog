<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DateTimeImmutable;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(10)->create();
//         \App\Models\Category::factory(10)->create();
//         \App\Models\Post::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'admin',
             'email' => 'admin@admin.com',
             'password' => 'admin@admin.com',
             'email_verified_at' => new DateTimeImmutable(),
             'role' => 0
         ]);

        \App\Models\User::factory()->create([
            'name' => 'moderator',
            'email' => 'moderator@moderator.com',
            'password' => 'moderator@moderator.com',
            'email_verified_at' => new DateTimeImmutable(),
            'role' => 1
        ]);

        \App\Models\Category::factory()->create([
            'title' => 'we',
        ]);

        \App\Models\Category::factory()->create([
            'title' => 'home',
        ]);

        \App\Models\Category::factory()->create([
            'title' => 'all',
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'Lorem ipsum',
            'content' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'image' => 'images/BykwLBD9Y8W93CjUrEY64Jr4mfGFeSU3vQKszJ0B.png',
            'published' => true,
            'category_id' => 1,
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'Duis aute',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'image' => 'images/u9B2uIYrqb7a8jYCY9PmPz8sDA17L3oDjwEIppHm.png',
            'published' => true,
            'category_id' => 2,
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'Scelerisque mauris',
            'content' => 'Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Facilisis gravida neque convallis a cras semper. At lectus urna duis convallis convallis tellus. Nulla pharetra diam sit amet nisl. Vitae tempus quam pellentesque nec. Ultricies tristique nulla aliquet enim tortor. Magna fringilla urna porttitor rhoncus dolor. Egestas quis ipsum suspendisse ultrices gravida. Accumsan lacus vel facilisis volutpat est velit egestas. Dignissim cras tincidunt lobortis feugiat vivamus at augue eget arcu. Nec dui nunc mattis enim ut tellus elementum sagittis vitae. Et egestas quis ipsum suspendisse. Condimentum id venenatis a condimentum vitae sapien pellentesque habitant. Lectus arcu bibendum at varius vel pharetra vel turpis nunc. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt lobortis.',
            'image' => 'images/BpGvhcByuOJBPQOdlmhotyT6g6qF9fXlPQ4i9fup.png',
            'published' => true,
            'category_id' => 3,
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'Sit amet aliquam',
            'content' => 'Sit amet aliquam id diam maecenas ultricies mi eget. Sit amet luctus venenatis lectus magna fringilla urna porttitor. Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper. Urna neque viverra justo nec ultrices dui sapien. Dui vivamus arcu felis bibendum ut tristique. Bibendum est ultricies integer quis auctor elit sed vulputate. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Lacus viverra vitae congue eu consequat ac felis. Eu consequat ac felis donec et. Eu facilisis sed odio morbi quis. Ipsum consequat nisl vel pretium lectus quam. Vehicula ipsum a arcu cursus. Tellus at urna condimentum mattis pellentesque. Convallis convallis tellus id interdum velit. Purus sit amet volutpat consequat mauris nunc congue nisi. Maecenas accumsan lacus vel facilisis volutpat est velit egestas dui. Euismod nisi porta lorem mollis aliquam ut porttitor leo.',
            'image' => 'images/CqJfr9PDJrsUWOZhKeHiRek2HGjQbbOXYRu4omHj.png',
            'published' => true,
            'category_id' => 1,
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'Sit amet dictum',
            'content' => 'Sit amet dictum sit amet justo donec enim diam vulputate. Massa ultricies mi quis hendrerit. Etiam non quam lacus suspendisse faucibus interdum posuere lorem. In metus vulputate eu scelerisque felis imperdiet proin fermentum. Dui sapien eget mi proin. Neque aliquam vestibulum morbi blandit cursus risus at ultrices mi. Amet aliquam id diam maecenas ultricies mi eget mauris. Etiam tempor orci eu lobortis elementum nibh tellus. Mauris cursus mattis molestie a iaculis at. Duis at consectetur lorem donec massa sapien faucibus et molestie. Pretium viverra suspendisse potenti nullam ac tortor vitae. In hac habitasse platea dictumst vestibulum rhoncus. Vitae nunc sed velit dignissim sodales ut.',
            'image' => 'images/wcViCNxXQBz7HgQ3ECZbu2EeoP5fTFn9PZpX0Dak.png',
            'published' => true,
            'category_id' => 2,
        ]);


    }
}
