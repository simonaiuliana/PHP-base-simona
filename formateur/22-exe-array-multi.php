<?php
$webdev_2023_2024 = [
    "WEBDEV01" => [
        "Nom" => "Tekfi",
        "Prenom" => "Laura",
        "Sites" => [
            "SitePerso" => "https://2023.webdev-cf2m.be/Laura/",
            "SitePreformation" => "https://2023.webdev-cf2m.be/Laura/prefo/",
            "github" => "https://github.com/LauraTcf2",
        ],
    ],
    "WEBDEV02" => [
        "Nom" => "Eliya Bofana",
        "Prenom" => "Tevin",
        "Sites" => [
            "SitePerso" => "https://2023.webdev-cf2m.be/Tevin/",
            "SitePreformation" => "https://2023.webdev-cf2m.be/Tevin/prefo/",
            "github" => "https://github.com/Tevin01",
        ],
    ],
    "WEBDEV03" => [
        "Nom" => "Hoater",
        "Prenom" => "Simona",
        "Sites" => [
            "SitePerso" => "https://2023.webdev-cf2m.be/Simona/",
            "SitePreformation" => "https://2023.webdev-cf2m.be/Simona/",
            "github" => "https://github.com/simonaiuliana",
        ],
    ],
    "WEBDEV04" => [
        "Nom" => "Arpaci",
        "Prenom" => "Emrah",
        "Sites" => [
            "SitePerso" => "https://2023.webdev-cf2m.be/Emrah/",
            "SitePreformation" => "https://2023.webdev-cf2m.be/Emrah/prefowebsite/",
            "github" => "https://github.com/hack86bx",
        ],
    ],
    // ... etc
];

echo $webdev_2023_2024["WEBDEV01"]["Sites"]["github"];

echo "<hr>";

var_dump(
    // tous
    $webdev_2023_2024,
        // WEBDEV01
        $webdev_2023_2024["WEBDEV01"],
            // Sites
            $webdev_2023_2024["WEBDEV01"]["Sites"],
                // github
                $webdev_2023_2024["WEBDEV01"]["Sites"]['github'],
);


// Afficher le Github de Laura