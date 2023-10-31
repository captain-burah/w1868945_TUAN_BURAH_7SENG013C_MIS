<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Honorific;

class HonorificSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $honorifics = array(
            array("name" => "Mr"),
            array("name" => "Mrs"),
            array("name" => "Miss"),
            array("name" => "Ms"),
            array("name" => "Mx"),
            array("name" => "Dr"),
            array("name" => "Admiral"),
            array("name" => "Air Comm"),
            array("name" => "Ambassador"),
            array("name" => "Baron"),
            array("name" => "Baroness"),
            array("name" => "Brig & Mrs"),
            array("name" => "Brig Gen"),
            array("name" => "Brigadier"),
            array("name" => "Brother"),
            array("name" => "Canon"),
            array("name" => "Capt"),
            array("name" => "Chief"),
            array("name" => "Cllr"),
            array("name" => "Col"),
            array("name" => "Commander"),
            array("name" => "Commander & Mrs"),
            array("name" => "Consul"),
            array("name" => "Consul General"),
            array("name" => "Count"),
            array("name" => "Countess"),
            array("name" => "Countess of"),
            array("name" => "Cpl"),
            array("name" => "Dame"),
            array("name" => "Deputy"),
            array("name" => "Dr & Mrs"),
            array("name" => "Drs"),
            array("name" => "Duchess"),
            array("name" => "Duke"),
            array("name" => "Earl"),
            array("name" => "Father"),
            array("name" => "General"),
            array("name" => "Gräfin"),
            array("name" => "HE"),
            array("name" => "HMA"),
            array("name" => "Her Grace"),
            array("name" => "His Excellency"),
            array("name" => "Ing"),
            array("name" => "Judge"),
            array("name" => "Justice"),
            array("name" => "Lady"),
            array("name" => "Lic"),
            array("name" => "Llc"),
            array("name" => "Lord"),
            array("name" => "Lord & Lady"),
            array("name" => "Lt"),
            array("name" => "Lt Col"),
            array("name" => "Lt Cpl"),
            array("name" => "M"),
            array("name" => "Madam"),
            array("name" => "Madame"),
            array("name" => "Major"),
            array("name" => "Major General"),
            array("name" => "Marchioness"),
            array("name" => "Marquis"),
            array("name" => "Minister"),
            array("name" => "Mme"),
            array("name" => "Mr & Dr"),
            array("name" => "Mr & Mrs"),
            array("name" => "Mr & Ms"),
            array("name" => "Prince"),
            array("name" => "Princess"),
            array("name" => "Professor"),
            array("name" => "Prof"),
            array("name" => "Prof & Dr"),
            array("name" => "Prof & Mrs"),
            array("name" => "Prof & Rev"),
            array("name" => "Prof Dame"),
            array("name" => "Prof Dr"),
            array("name" => "Pvt"),
            array("name" => "Rabbi"),
            array("name" => "Rear Admiral"),
            array("name" => "Rev"),
            array("name" => "Rev & Mrs"),
            array("name" => "Rev Canon"),
            array("name" => "Rev Dr"),
            array("name" => "Senator"),
            array("name" => "Sgt"),
            array("name" => "Sheriff"),
            array("name" => "Sir"),
            array("name" => "Sir & Lady"),
            array("name" => "Sister"),
            array("name" => "Sqr. Leader"),
            array("name" => "The Earl of"),
            array("name" => "The Hon"),
            array("name" => "The Hon Dr"),
            array("name" => "The Hon Lady"),
            array("name" => "The Hon Lord"),
            array("name" => "The Hon Mrs"),
            array("name" => "The Hon Sir"),
            array("name" => "The Honourable"),
            array("name" => "The Rt Hon"),
            array("name" => "The Rt Hon Dr"),
            array("name" => "The Rt Hon Lord"),
            array("name" => "The Rt Hon Sir"),
            array("name" => "The Rt Hon Visc"),
            array("name" => "Viscount")
        );

        Honorific::insert($honorifics);

    }
}
