<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Karting;

class KartingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Karting::truncate();
        Karting::create([
            "lokacija"=>"KartLand Ada Huja Beograd",
            "radnoVreme"=>" 10:00 - 18:00 ",
            "pravilaStaze"=>"Upotreba kacige i zaštitne opreme je OBAVEZNA. ZABRANJENO je pritisnuti kočnicu i gas u isto vreme.",
            "cena"=>"1800",
            "usluge"=>"Sportski / Rereativni karting, Deciji rodjendani, Paintball ",
        ]);

        Karting::create([
            "lokacija"=>"Karting Centar Motodrom Kula",
            "radnoVreme"=>"10:00 - 16:00",
            "pravilaStaze"=>"Upotreba kacige i zaštitne opreme je OBAVEZNA. U slučaju namerno učinjene štete na go-kart vozilima ili opremi, ugrožavanja sigurnosti službenog osoblja Karting Centra, snosite krivičnu i materijalnu odgovornost.",
            "cena"=>"2000",
            "usluge"=>"Sportski / Rereativni / Koorporativni / Deciji karting",
        ]);

    }
}
