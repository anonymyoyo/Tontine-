<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Produit::create([
            "image" => "images/38v8hoN5hLyax2Eb2iPSgIakVnTs3bU4oH4UEsmS.jpg",
            "name" => "Tablette Blackview Tab 50 - WIFI 6 - 128Go - 4Go RAM",
            "prix_cash" => "50000",
            "prix_tontine" => "62500",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/sKKRXzku0gojbSkBHUTu3MKjuz99JDcmM1HewBOt.jpg",
            "name" => "Tablette Blackview Tab 16 - 4G - 256Go - 8Go RAM",
            "prix_cash" => "115000",
            "prix_tontine" => "143750",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/z3mayioFfOj7uaUz0Fyp56GIlvhogsl62LQZv2xB.jpg",
            "name" => "Tablette pour enfants Blackview Tab A6 - WIFI 6 - 16Go - 2Go RAM",
            "prix_cash" => "67500",
            "prix_tontine" => "84375",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/LzqkETVej68AaitNO2e6TDA03kEP7m3L3knKsw4a.jpg",
            "name" => "Tablette pour enfants Blackview Tab 30 - WIFI 6 - 16Go - 2Go RAM",
            "prix_cash" => "57500",
            "prix_tontine" => "71875",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/4uzO0eMBX4fZoHTzM5tlTNSXlg0nBoLTMxuc18AW.jpg",
            "name" => "Xiaomi Redmi A3 Pro - 128Go - 4Go - RAM - 6,88''",
            "prix_cash" => "54999",
            "prix_tontine" => "70625",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/MqCs78k70lsyqeOr9X49bAwIaMAINDeKf1yHzaLM.jpg",
            "name" => "Xiaomi Redmi 14C - 128Go - 6Go +6Go - RAM - 6,88''",
            "prix_cash" => "54999",
            "prix_tontine" => "70625",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/502WI0b9LsfuLGg9RM3zLTZWz9MG7IMac86lqf9w.jpg",
            "name" => "Machine a Laver Semi-Automatique - WESTPOINT",
            "prix_cash" => "175000",
            "prix_tontine" => "194118",
            "category_id" => 5,
        ]);

        Produit::create([
            "image" => "images/sZL0aCBO84zRgCrL4Bj8NUqO3cGEsekUpwe44npA.jpg",
            "name" => "Machine a Laver Semi-Automatique - WESTPOINT",
            "prix_cash" => "155000",
            "prix_tontine" => "165368",
            "category_id" => 5,
        ]);

        Produit::create([
            "image" => "images/oe30W5BwxfujHgQgKnqaiwfNzCcEszS5cGbOMe2G.jpg",
            "name" => "Climatiseur split - MIDEA - Uni Cool INVERTER - 1.5 CV",
            "prix_cash" => "216000",
            "prix_tontine" => "279852",
            "category_id" => 5,
        ]);

        Produit::create([
            "image" => "images/xs4VvrLPUUBPzOwYAzSY3tAeeeb9CKKleMV7Ya8C.jpg",
            "name" => "TV Smart ROCH - 56 pouces - Full HD - RH-LE55DSA-B Android",
            "prix_cash" => "244725",
            "prix_tontine" => "315752",
            "category_id" => 6,
        ]);

        Produit::create([
            "image" => "images/Uo9hbJVb7P6732BLaFK0dTazKQTA5kEphnssti8D.jpg",
            "name" => "Etagere de cuisine a 3 nivaeaux de 11 litres",
            "prix_cash" => "7000",
            "prix_tontine" => "25000",
            "category_id" => 10,
        ]);

        Produit::create([
            "image" => "images/6R9MwMMa7P3w9XYBvz1GNaXbsNXLtu1zf11SLT3G.jpg",
            "name" => "TV Smart DELTA 65 pouces - 65DL1514 - 4K - Android 13",
            "prix_cash" => "328680",
            "prix_tontine" => "396000",
            "category_id" => 6,
        ]);

        Produit::create([
            "image" => "images/US9R8PxgnBSI0440HF5EM80U5fwkqFiErFxcHj4r.jpg",
            "name" => "TV Numerique ROCH 43 pouces - RH-LE43DS-LED",
            "prix_cash" => "108338",
            "prix_tontine" => "133750",
            "category_id" => 6,
        ]);

        Produit::create([
            "image" => "images/DNyY7LmiS1adzepgoMPG3m7Pmx4TZlrlhMn9pvmC.jpg",
            "name" => "Smart TV ROCH 43 pouces - RH-LE43DSA-B - Android - LED",
            "prix_cash" => "114999",
            "prix_tontine" => "1437548.75",
            "category_id" => 6,
        ]);

        Produit::create([
            "image" => "images/TmYFoRyUXTaReeLGhpIDGq11UcYcTphlgKwv0uuP.jpg",
            "name" => "Machine a Laver Semi-Automatique - WESTPOINT",
            "prix_cash" => "155000",
            "prix_tontine" => "165368",
            "category_id" => 5,
        ]);

        Produit::create([
            "image" => "images/tcXLvgRYWrBJi9k65PG03fuy5N6CPE7zn42TZHqA.jpg",
            "name" => "Ordinateur portable - HP VICTUS 15 - 1TB SSD - 16 Go RAM",
            "prix_cash" => "446500",
            "prix_tontine" => "625000",
            "category_id" => 3,
        ]);

        Produit::create([
            "image" => "images/uQOV6V6f1Ez4HUiCqmXl87Ema8UvbalDpWf5limL.jpg",
            "name" => "Ordinateur portable -ASUS Vivobook - 256 Go SSD - 4 Go RAM",
            "prix_cash" => "143000",
            "prix_tontine" => "198750",
            "category_id" => 3,
        ]);


        Produit::create([
            "image" => "images/lRazLBBRBjQjv9KdjldldxjWwpt4tvDVfQhvTX6L.jpg",
            "name" => "Telephone portable Tecno T302 - 2\" - 4Mo/4Mo RAM",
            "prix_cash" => "9000",
            "prix_tontine" => "11250",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/hphU6jbc4EkoJ99WK4Z1P4W6FmA5bI41uPZM0VVW.jpg",
            "name" => "Telephone portable Tecno T353 - 2\" - 4Mo/4Mo RAM",
            "prix_cash" => "9800",
            "prix_tontine" => "12250",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/VpogsJCUA8oFj3iOIXaUvHa5rvbQtellHdW07vIz.jpg",
            "name" => "Telephone portable Tecno T352 - 1.77\" - 4Mo/4Mo RAM",
            "prix_cash" => "9800",
            "prix_tontine" => "12250",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/tqS5tVw0qhG7EdascRqboLTLQFvFSpUzKwxyqFwt.jpg",
            "name" => "Telephone portable Alcatel 1067 Noir - Torche LED - 1.77\" - 4Mo/4Mo RAM",
            "prix_cash" => "10000",
            "prix_tontine" => "12500",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/VCeZIRGOpHlQFxu5vn7OvCc6BNsSYzDWtbSd1DrV.jpg",
            "name" => "Telephone portable Nokia 5710 XpressAudio - 128Mo - 48Mo RAM",
            "prix_cash" => "47000",
            "prix_tontine" => "58750",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/W5rIi3V0SFXPA7bAEZSUYVdvkZJCPloELBx1zj0d.jpg",
            "name" => "Telephone portable Nokia 8210 4G - 128Mo - 48Mo RAM - 2.8\"",
            "prix_cash" => "45000",
            "prix_tontine" => "56250",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/iXcjQWWyhcTwUsbgUAvKLWyPyeWICooGB6f93dxm.jpg",
            "name" => "Telephone Nokia 2660 Flip- 128Mo - 48Mo RAM - 2.8\"",
            "prix_cash" => "35000",
            "prix_tontine" => "43750",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/0gEjJqy4OGt0NTjddpsOt7DoExgLd6bHmOoX7vdB.jpg",
            "name" => "Telephone Nokia 3210 - 128Mo - 64Mo RAM - 2.4\"",
            "prix_cash" => "39500",
            "prix_tontine" => "43750",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/pYrDwqaI2TIvrk0dLi9gSDSQ2jZQgrt3EFAuxKvn.jpg",
            "name" => "Telephone portable X-TIGI Q15 - 3.5pouces - Double Sims",
            "prix_cash" => "13000",
            "prix_tontine" => "16250",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/BWrexteTAvMF2ryBr8PYAqPgpHpUxRMCJnVKNDLu.jpg",
            "name" => "Telephone portable Alcatel 3082 4G - 2.4\" - 1380 mAh",
            "prix_cash" => "20000",
            "prix_tontine" => "25000",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/I3vPMyjpTctT2FLU3VOKSOcgw2Y7bj8kgyn0RkYR.jpg",
            "name" => "Smartphone Nokia G42 5G - 256 Go - 8 Go RAM - 6.56\"",
            "prix_cash" => "120000",
            "prix_tontine" => "150000",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/CvPLZzjM7vHzsBsafs1cVUV0pKVnQb2HPo9uDVd5.jpg",
            "name" => "itel P65 C - Ecran 6.6\" HD - 128 Go/ 4Go Ram + 4Go",
            "prix_cash" => "53500",
            "prix_tontine" => "62500",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/8GflYWndCVOZ9ENmnkDJzQVRkaJVlMsLYbyRKIgX.jpg",
            "name" => "Tecno Pop 9 (KL4) - 64 Go - 3 Go + 3 Go RAM - 6.67\"",
            "prix_cash" => "53500",
            "prix_tontine" => "68750",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/AwGzs9etMHiFgbGIIhIA4ZRaJIHdQpHaJfFD2L10.jpg",
            "name" => "Tecno Pop 9 (KL4) - 128 Go - 3 Go + 3 Go RAM - 6.67\"",
            "prix_cash" => "57999",
            "prix_tontine" => "74987",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/8YH4fiRHwtuPgFBog8alviw6WVyQhWibGpH0QT7G.jpg",
            "name" => "Tecno Phantom V Fold - 512Go - 12Go RAM",
            "prix_cash" => "650000",
            "prix_tontine" => "812000",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/1HSrY8Vja0QnNx2k64GbSNqaIMAveZY14cg8QAv4.jpg",
            "name" => "Tecno Spark 30C (KL5) - 128 Go - 4Go + 4Go RAM - 6.67\"",
            "prix_cash" => "65990",
            "prix_tontine" => "85625",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/yx06fT6YS7LrAG6gdCcHIIrERyav54IWVmAMFDzl.jpg",
            "name" => "Smartphone itel A50C 4G - 32Go - 2+2Go RAM",
            "prix_cash" => "36000",
            "prix_tontine" => "45000",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/EDPw1vIe2BGZuA2ij4YLkukA7SRUK8PesWEqBcP2.jpg",
            "name" => "Asus ROG Phone 8 Pro - 512Go - 16Go RAM - 6.78\" LTPO",
            "prix_cash" => "660000",
            "prix_tontine" => "825000",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/sqWs9xOzOCtfqJr43axudbkYgmISGaW6t7M6FbGg.jpg",
            "name" => "Tecno Camon 30S - 128Go - 6Go + 6Go RAM Extensible",
            "prix_cash" => "119990",
            "prix_tontine" => "168750",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/QivwtRhm6oaoc6O8aSPrnx8u8XWf1ncQglY1h1jy.jpg",
            "name" => "Tecno Camon 30S Pro - 256Go - 8Go + 8Go RAM 6.78\"",
            "prix_cash" => "159500",
            "prix_tontine" => "199375",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/lP0UWnH1E3gqI0Ji0cbOKTnxT96drAvcKzRH7Sla.jpg",
            "name" => "Smartphone itel A06 4G - 32Go - 2+2Go RAM Virtuelle",
            "prix_cash" => "34000",
            "prix_tontine" => "45000",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/lGiuxxgtg8NFEujcZNM8iHB6PaspeweTwvGjhL2q.jpg",
            "name" => "Tablette Blackview Tab 90 - 128Go - 8Go RAM - 13\"",
            "prix_cash" => "85000",
            "prix_tontine" => "106250",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/0qvUcZNUFFmzcgECTeANKP7NQQ0g88pSWw66HhMT.jpg",
            "name" => "Tablette Blackview Tab 5 Kids - 128Go - 4Go RAM - 8\"",
            "prix_cash" => "55000",
            "prix_tontine" => "68750",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/GKPbP8ThRifiC9lu2yXdVIR5XfrVufap2uGTpmsm.jpg",
            "name" => "Tablette Blackview Tab A5 Kids tactile - 64Go - 3Go RAM",
            "prix_cash" => "63000",
            "prix_tontine" => "72500",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/PWlprljNTrC8gyfRKZuTFuOG4gDk7laYayZ4JkBV.jpg",
            "name" => "Tablette pour enfants Blackview Tab 3 - WIFI - 32Go - 2Go RAM",
            "prix_cash" => "45000",
            "prix_tontine" => "56250",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/JRn3kqjJGXcQ6ay2kehexPiz43XSBfqr1ylYH2ZN.jpg",
            "name" => "Tablette Tecno MegaPad - 128Go - 4Go RAM - 10.1\"",
            "prix_cash" => "73500",
            "prix_tontine" => "93750",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/AEZEK3l2kbtjzmR4Oxk1WqOIkGb29RDYpMYKyBcZ.jpg",
            "name" => "Samsung Galaxy Tab S10+ 5G - 256Go - 12Go RAM - 12.4\"",
            "prix_cash" => "654000",
            "prix_tontine" => "817500",
            "category_id" => 1,
        ]);

        Produit::create([
            "image" => "images/UynuD2BYOIm7NxrgwM36SSgRe2bnpvxY81KYUuSV.jpg",
            "name" => "Refrigerateur Oscar OSC-277R - 277Litres - 220/240Hz - A+ - R600a",
            "prix_cash" => "250000",
            "prix_tontine" => "271000",
            "category_id" => 5,
        ]);

        Produit::create([
            "image" => "images/ZtkL263FhYy3hzqcraFpWH8rQpG6CGBh1LdJZ8Ld.jpg",
            "name" => "Haut Parleur Bleutooth LP-V20SUN",
            "prix_cash" => "17500",
            "prix_tontine" => "20000",
            "category_id" => 6,
        ]);

        Produit::create([
            "image" => "images/mU4udx8VDVuExfP8LRjCPNoRaeg7MEnw4RbcJApw.jpg",
            "name" => "Haut Parleur Bleutooth MINI ++ CARTE MEMOIRE",
            "prix_cash" => "10500",
            "prix_tontine" => "12000",
            "category_id" => 6,
        ]);

        Produit::create([
            "image" => "images/u7BmtCqj32I0b6P3obDu1oBBqnmJbzlxV2WFC6RH.jpg",
            "name" => "RADIO FM MULTI BANDES",
            "prix_cash" => "13000",
            "prix_tontine" => "15000",
            "category_id" => 6,
        ]);

        Produit::create([
            "image" => "images/Kx8aXGBTMJ4AQI35Dd9rmC6ZsPppapuAij3iBlOI.jpg",
            "name" => "Ventilateur Plafonier ou murale",
            "prix_cash" => "26000",
            "prix_tontine" => "35000",
            "category_id" => 6,
        ]);

        Produit::create([
            "image" => "images/PVXzdTvQUGmFf4oOr1F3mNwq6EsSsDwNdJnJrsQo.jpg",
            "name" => "Ventilateur Mural",
            "prix_cash" => "40000",
            "prix_tontine" => "55000",
            "category_id" => 6,
        ]);

        Produit::create([
            "image" => "images/3a1bLwdXx41zClg9ypjGEhoyFumOXvkNhG5BqINQ.jpg",
            "name" => "Tapis 160 x 210cm",
            "prix_cash" => "45000",
            "prix_tontine" => "55000",
            "category_id" => 9,
        ]);

        Produit::create([
            "image" => "images/0DgRwcNUCk43e4u8BA60FrOBjc46CsZwpilAN0qW.jpg",
            "name" => "APPLE Iphone - XR - 6.1\" - 128Go/3GoRAM - Nano Sim - 12MP/7MP - 2942mAh",
            "prix_cash" => "139999",
            "prix_tontine" => "220000",
            "category_id" => 1,
        ]);
    }
}
