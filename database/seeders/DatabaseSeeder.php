<?php

namespace Database\Seeders;
use App\Models\Karting;
use App\Models\User;
use App\Models\Rezervacija;

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
         $this->call(KartingSeeder::class);
         $this->call(RezervacijaSeeder::class);
        // User::truncate();
        // Karting::truncate();
        // Rezervacija::truncate();
        User::factory(3)->create();
        $user = User::factory()->create();
        $karting = Karting::create([
            "lokacija"=>"Autokomerc Beograd",
            "radnoVreme"=>"10:00 - 20:00",
            "pravilaStaze"=>"Upotreba kacige i zaštitne opreme je OBAVEZNA. U slučaju namerno učinjene štete na go-kart vozilima ili opremi, ugrožavanja sigurnosti službenog osoblja Karting Centra, snosite krivičnu i materijalnu odgovornost.",
            "cena"=>"2500",
            "usluge"=>"Sportski / Rereativni / Koorporativni karting",
        ]);

        $array=explode(" ",$user->name);
        $prezime = $array[1];
        $ime = $array[0];
        Rezervacija::create([
            "ime"=>$ime,
            "prezime"=> $prezime,
            "datum"=>"2023-03-03",
            "vreme"=>"12:00",
            "brOsoba"=> "6",
            "karting_id"=> $karting->id,
            "user_id"=> $user->id,
        ]);
    }
}
