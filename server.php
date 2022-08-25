<?php
$dischiElements = [
    [
        'image' => 'https://i.pinimg.com/564x/af/43/42/af43426fe1114f93dd85140e2aab5bf9.jpg',
        'title' => 'zoro',
        'author' => 'one piece',
        'year' => '1998',
    ],
    [
        'image' => 'https://i.pinimg.com/564x/94/e7/76/94e776f187f1fa3fe01cda637f43a840.jpg',
        'title' => 'megumi',
        'author' => 'jjk',
        'year' => '2022',
    ],
    [
        'image' => 'https://i.pinimg.com/564x/37/c4/be/37c4be909e08c7b5a4f2aa6c08f950f5.jpg',
        'title' => 'kakashi',
        'author' => 'naruto',
        'year' => '1996',
    ],
    [
        'image' => 'https://i.pinimg.com/564x/43/6d/c7/436dc78f83f9b5b49cca4f8f594f86ad.jpg',
        'title' => 'killua',
        'author' => 'hunterxhunter',
        'year' => '2004',
    ],
    [
        'image' => 'https://i.pinimg.com/736x/cd/0e/45/cd0e455b18dcf5e9e8e774a9698c591d.jpg',
        'title' => 'gaara',
        'author' => 'naruto',
        'year' => '2010',
    ],
    [
        'image' => 'https://i.pinimg.com/564x/c5/fa/29/c5fa29402f55639b564c6ddef555ef26.jpg',
        'title' => 'naruto',
        'author' => 'naruto',
        'year' => '1998',
    ],
    [
        'image' => 'https://i.pinimg.com/564x/23/0e/f6/230ef68096b0f71d972489ed2454e9dd.jpg',
        'title' => 'tanjiro',
        'author' => 'demon slayer',
        'year' => '2021',
    ],
    [
        'image' => 'https://i.pinimg.com/564x/3a/9e/eb/3a9eebfea406da8755cb72699a2481c0.jpg',
        'title' => 'xander',
        'author' => 'det conan',
        'year' => '1990',
    ],
];

// ESPORRE L'ELEMENTO IN JSON
header('Content-type: application/json');
echo json_encode($dischiElements);