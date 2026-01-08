<?php
//
// Here we need to init $bannerLang to the page before call this includes
//

date_default_timezone_set('Europe/Paris');

// ----------------------------
// INIT
// ----------------------------
$today = new DateTime();
$today->setTime(0, 0, 0); 

// ----------------------------
// DATA
// ----------------------------
$promos = [
    "ENG" => [
        [
            "start" => "2025-09-23",
            "end"   => "2025-10-23",
            "text"  => "Autumn Savings Event – Up to 50% off!"
        ],
        [
            "start" => "2025-10-24",
            "end"   => "2025-11-05",
            "text"  => "Halloween Special Offer – Up to 50% off!"
        ],
        [
            "start" => "2025-11-06",
            "end"   => "2025-12-05",
            "text"  => "Black Friday Special Offer – Up to 50% off!"
        ],
        [
            "start" => "2025-12-06",
            "end"   => "2025-12-31",
            "text"  => "Christmas Special Promotion – Up to 50% off!"
        ],
        [
            "start" => "2026-01-01",
            "end"   => "2026-01-31",
            "text"  => "New Year's Special Promotion – Up to 50% off!"
        ],
        [
            "start" => "2026-02-01",
            "end"   => "2026-02-06",
            "text"  => "Winter Warm-Up Deals – Up to 50% off!"
        ],
        [
            "start" => "2026-02-07",
            "end"   => "2026-02-20",
            "text"  => "Valentine's Day Special Promotion – Up to 50% off!"
        ],
        [
            "start" => "2026-02-21",
            "end"   => "2026-03-19",
            "text"  => "Winter Sale (End of Season) – Up to 50% off!"
        ],
        [
            "start" => "2026-03-20",
            "end"   => "2026-03-31",
            "text"  => "Spring Refresh Promotion – Up to 50% off!"
        ],
        [
            "start" => "2026-04-01",
            "end"   => "2026-04-24",
            "text"  => "Easter Special Promotion – Up to 50% off!"
        ],
        [
            "start" => "2026-04-25",
            "end"   => "2026-05-31",
            "text"  => "Spring Renewal Sale – Up to 50% off!"
        ],
        [
            "start" => "2026-06-01",
            "end"   => "2026-06-30",
            "text"  => "Summer Kickoff Sale – Up to 50% off!"
        ],
        [
            "start" => "2026-07-01",
            "end"   => "2026-08-15",
            "text"  => "Mid-Summer Special Promotion – Up to 50% off!"
        ],
        [
            "start" => "2026-08-16",
            "end"   => "2026-09-08",
            "text"  => "End of Summer Sale – Up to 50% off!"
        ],
        [
            "start" => "2026-09-09",
            "end"   => "2026-09-22",
            "text"  => "Back to School Special Offer – Up to 50% off!"
        ]
    ],

    "FR" => [
        [
            "start" => "2025-09-23",
            "end"   => "2025-10-23",
            "text"  => "Offre Spéciale d'Automne – Jusqu'à -50 % !"
        ],
        [
            "start" => "2025-10-24",
            "end"   => "2025-11-05",
            "text"  => "Promo Spéciale Halloween – Jusqu'à -50 % !"
        ],
        [
            "start" => "2025-11-06",
            "end"   => "2025-12-05",
            "text"  => "Promo Spéciale Black Friday – Jusqu'à -50 % !"
        ],
        [
            "start" => "2025-12-06",
            "end"   => "2025-12-31",
            "text"  => "Promo Spéciale de Noël – Jusqu'à -50 % !"
        ],
        [
            "start" => "2026-01-01",
            "end"   => "2026-01-31",
            "text"  => "Promo Spéciale du Nouvel An – Jusqu'à -50 % !"
        ],
        [
            "start" => "2026-02-01",
            "end"   => "2026-02-06",
            "text"  => "Offres Hivernales – Jusqu'à -50 % !"
        ],
        [
            "start" => "2026-02-07",
            "end"   => "2026-02-20",
            "text"  => "Promo Spéciale Saint-Valentin – Jusqu'à -50 % !"
        ],
        [
            "start" => "2026-02-21",
            "end"   => "2026-03-19",
            "text"  => "Soldes d'Hiver – Jusqu'à -50 % !"
        ],
        [
            "start" => "2026-03-20",
            "end"   => "2026-03-31",
            "text"  => "Offre Printanière – Jusqu'à -50 % !"
        ],
        [
            "start" => "2026-04-01",
            "end"   => "2026-04-24",
            "text"  => "Promo Spéciale Pâques – Jusqu'à -50 % !"
        ],
        [
            "start" => "2026-04-25",
            "end"   => "2026-05-31",
            "text"  => "Promo Renouveau de Printemps – Jusqu'à -50 % !"
        ],
        [
            "start" => "2026-06-01",
            "end"   => "2026-06-30",
            "text"  => "Offre Spéciale Début d'Été – Jusqu'à -50 % !"
        ],
        [
            "start" => "2026-07-01",
            "end"   => "2026-08-15",
            "text"  => "Promo Spéciale Été – Jusqu'à -50 % !"
        ],
        [
            "start" => "2026-08-16",
            "end"   => "2026-09-08",
            "text"  => "Offre Spéciale Fin d'Été – Jusqu'à -50 % !"
        ],
        [
            "start" => "2026-09-09",
            "end"   => "2026-09-22",
            "text"  => "Promo Spéciale Rentrée – Jusqu'à -50 % !"
        ]
    ],

    "DE" => [
        [
            "start" => "2025-09-23",
            "end"   => "2025-10-23",
            "text"  => "Herbst-Sonderaktion – Bis zu -50 % Rabatt!"
        ],
        [
            "start" => "2025-10-24",
            "end"   => "2025-11-05",
            "text"  => "Halloween-Sonderangebot – Bis zu -50 % Rabatt!"
        ],
        [
            "start" => "2025-11-06",
            "end"   => "2025-12-05",
            "text"  => "Black-Friday-Sonderangebot – Bis zu -50 % Rabatt!"
        ],
        [
            "start" => "2025-12-06",
            "end"   => "2025-12-31",
            "text"  => "Weihnachts-Sonderaktion – Bis zu -50 % Rabatt!"
        ],
        [
            "start" => "2026-01-01",
            "end"   => "2026-01-31",
            "text"  => "Neujahrs-Sonderaktion – Bis zu -50 % Rabatt!"
        ],
        [
            "start" => "2026-02-01",
            "end"   => "2026-02-06",
            "text"  => "Winter-Angebote – Bis zu -50 % Rabatt!"
        ],
        [
            "start" => "2026-02-07",
            "end"   => "2026-02-20",
            "text"  => "Valentinstags-Sonderaktion – Bis zu -50 % Rabatt!"
        ],
        [
            "start" => "2026-02-21",
            "end"   => "2026-03-19",
            "text"  => "Winter-Schlussverkauf – Bis zu -50 % Rabatt!"
        ],
        [
            "start" => "2026-03-20",
            "end"   => "2026-03-31",
            "text"  => "Frühlings-Angebot – Bis zu -50 % Rabatt!"
        ],
        [
            "start" => "2026-04-01",
            "end"   => "2026-04-24",
            "text"  => "Oster-Sonderaktion – Bis zu -50 % Rabatt!"
        ],
        [
            "start" => "2026-04-25",
            "end"   => "2026-05-31",
            "text"  => "Frühlings-Erneuerungs-Aktion – Bis zu -50 % Rabatt!"
        ],
        [
            "start" => "2026-06-01",
            "end"   => "2026-06-30",
            "text"  => "Sommer-Auftakt-Sale – Bis zu -50 % Rabatt!"
        ],
        [
            "start" => "2026-07-01",
            "end"   => "2026-08-15",
            "text"  => "Sommer-Sonderaktion – Bis zu -50 % Rabatt!"
        ],
        [
            "start" => "2026-08-16",
            "end"   => "2026-09-08",
            "text"  => "End-of-Summer-Sale – Bis zu -50 % Rabatt!"
        ],
        [
            "start" => "2026-09-09",
            "end"   => "2026-09-22",
            "text"  => "Back-to-School-Sonderangebot – Bis zu -50 % Rabatt!"
        ]
    ]
];

// ----------------------------
// LOGIC
// ----------------------------
// Default values
$defaultBanners = [
    "ENG" => "Special Promotion - Up to 50% off!",
    "FR" => "Promotion Spéciale - Jusqu'à -50 % !",
    "DE" => "Sonderaktion - Bis zu -50 % Rabatt!"
];

// Default init
$bannerTxt = $defaultBanners[$bannerLang];

if (isset($promos[$bannerLang])) {
    foreach ($promos[$bannerLang] as $promo) {
        $start = new DateTime($promo["start"]);
        $end = new DateTime($promo["end"] . ' 23:59:59');

        if ($today >= $start && $today <= $end) {
            $bannerTxt = $promo["text"];
            break;
        }
    }
}
