<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Character;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate(); // Clear the table
        Category::truncate(); // Clear the table
        Character::truncate(); // Clear the table

        User::factory(5)->create();


        Character::factory(5)->create();



        $user = User::factory()->create([
                'name' => 'Ben Walsh'
            ]);

        $protagonist = Category::create([
            'name' => 'Protagonist',
            'slug' => 'protagonist'

        ]);
       $antagonist = Category::create([
            'name' => 'Antagonist',
            'slug' => 'antagonist'

        ]);
        $side = Category::create([
            'name' => 'Side',
            'slug' => 'side'

        ]);

        Character::create([
            'user_id' => $user->id,
            'category_id' => $protagonist->id,
            'slug' => 'gon',
            'title' => 'Gon Freecss',
            'excerpt' => 'Gon Freecss is a young boy with boundless curiosity. He embarks on a journey to become a Hunter...',
            'body' => '<p>Gon Freecss, a cheerful and naive young boy, possesses an innate sense of wonder and an unyielding determination. Driven by his boundless curiosity and the dream of following in the footsteps of his long-lost father, Gon embarks on a journey to become a Hunter—a title granted to those who prove themselves as elite members of humanity. Throughout his adventures, Gon forms strong bonds with others and faces numerous challenges that test his physical and emotional strengths. His purity of heart and unwavering spirit make him a beacon of hope and inspiration to all who meet him.</p>'
        ]);
        Character::create([
            'user_id' => $user->id,
            'category_id' => $protagonist->id,
            'slug' => 'killua',
            'title' => 'Killua Zoldyck',
            'excerpt' => 'Killua Zoldyck hails from the infamous Zoldyck family of assassins. He is incredibly skilled and has a playful side...',
            'body' => '<p>Born into the shadowy world of the Zoldyck family, Killua Zoldyck stands as a prodigious assassin with unparalleled skills. Despite his deadly lineage, Killua exhibits a playful and kind-hearted nature. As he befriends Gon and embarks on a shared journey, Killua seeks to carve out his own path, separate from the expectations of his family. Struggling with the darkness within and the weight of his legacy, Killuas journey is one of self-discovery, redemption, and the pursuit of true friendship.</p>'
        ]);

        Character::create([
            'user_id' => $user->id,
            'category_id' => $protagonist->id,
            'slug' => 'kurapika',
            'title' => 'Kurapika',
            'excerpt' => 'Kurapika is the last surviving member of the Kurta Clan. He seeks vengeance against the Phantom Troupe who massacred his clan...',
            'body' => '<p>Kurapika, the last remnant of the tragically wiped-out Kurta Clan, burns with a quiet rage. His life is dedicated to avenging his kin by hunting down the Phantom Troupe—a group responsible for the brutal massacre of the Kurta. Armed with intelligence, determination, and unique chain weapons, Kurapikas journey intertwines with both light and darkness. While revenge fuels him, he is also driven by a deep-seated desire to reclaim the stolen scarlet eyes of his clan and to protect those he comes to hold dear.</p>'
        ]);
        Character::create([
            'user_id' => $user->id,
            'category_id' => $protagonist->id,
            'slug' => 'leorio',
            'title' => 'Leorio Paradinight',
            'excerpt' => 'Leorio Paradinight is a tall, suave man with aspirations of becoming a doctor. He deeply cares for his friends and has a strong sense of justice...',
            'body' => '<p>Leorio Paradinight, with his signature suit and briefcase, stands out not just for his height but also for his unwavering sense of justice. Driven by personal tragedies and the aspiration to become a doctor, Leorio joins the Hunter examination to fund his medical studies. While initially appearing self-centered, beneath the surface lies a heart of gold. Deeply caring and fiercely loyal, Leorio proves time and again that he would go to great lengths to protect and support his friends, especially in their shared adventures with Gon, Killua, and Kurapika.</p>'
        ]);
        Character::create([
            'user_id' => $user->id,
            'category_id' => $antagonist->id,
            'slug' => 'hisoka',
            'title' => 'Hisoka Morow',
            'excerpt' => 'Hisoka Morow is a mysterious and powerful fighter. Hes whimsical and takes interest in Gon and Killua due to their potential...',
            'body' => '<p> Hisoka Morow, a captivating and enigmatic fighter, thrives on the thrill of combat. Known for his unpredictable nature and whimsical demeanor, Hisoka holds a unique philosophy about strength and potential. While often seen as an adversary, Hisoka possesses a particular fondness for Gon and Killua, seeing in them the budding seeds of greatness. Driven by a desire to fight powerful opponents and test his limits, Hisokas presence brings both danger and intrigue wherever he goes.</p>'
        ]);
        Character::create([
            'user_id' => $user->id,
            'category_id' => $antagonist->id,
            'slug' => 'chrollo',
            'title' => 'Chrollo Lucilfer',
            'excerpt' => 'Chrollo Lucilfer, the enigmatic leader of the Phantom Troupe, possesses a calm demeanor and unparalleled strategic prowess.',
            'body' => '<p>Chrollo Lucilfer stands as the mastermind behind the notorious Phantom Troupe, a band of thieves known for their heinous crimes and immense power. Beneath his calm and composed facade, Chrollo harbors a deep fascination for the complexities of humanity. His leadership is marked by a blend of charisma and ruthlessness, attracting followers who are fiercely loyal. Wielding a book that allows him to steal and use others abilities, Chrollos tactical genius and unpredictability make him one of the most formidable figures in the world of Hunter x Hunter.</p>'
        ]);
        Character::create([
            'user_id' => $user->id,
            'category_id' => $side->id,
            'slug' => 'ging',
            'title' => 'Ging Freecss',
            'excerpt' => 'Ging Freecss, renowned as one of the worlds greatest Hunters, is a man shrouded in mystery and is Gons elusive father.',
            'body'=> '<p>As one of the top Hunters in the world, Ging Freecss remains an enigma to many, including his own son, Gon. Despite his absentee parenting, Gings legend serves as the driving force behind Gons adventurous spirit. Beyond his reputation, Ging is characterized by his boundless curiosity, audacious goals, and an uncanny ability to foresee events. His actions often seem whimsical or even careless, but they are underpinned by a profound understanding of the world and a deep philosophical insight. Throughout the series, Gings choices and the ripple effects they create underscore the intricate web of fate, choice, and consequence in the Hunter x Hunter universe.</p>'
        ]);
    }
}
