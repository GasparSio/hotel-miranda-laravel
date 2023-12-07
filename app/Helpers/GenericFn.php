<?php

namespace App\Helpers;

class GenericFn
{
    public static function getAmenityImages()
    {
        $amenityImages = [
            '<i class="fa-solid fa-bed"></i>',
            '<i class="fa-solid fa-wifi"></i>',
            '<i class="fa-solid fa-car"></i>',
            '<i class="fa-regular fa-snowflake"></i>',
            '<i class="fa-solid fa-dumbbell"></i>',
            '<i class="fa-solid fa-ban-smoking"></i>',
            '<i class="fa-solid fa-martini-glass-citrus"></i>',
            '<i class="fa-solid fa-mug-hot"></i>',
            '<i class="fa-solid fa-person-swimming"></i>',
            '<i class="fa-solid fa-shower"></i>',
            '<i class="fa-solid fa-bell-concierge"></i>',
            '<i class="fa-solid fa-hot-tub-person"></i>',
            '<i class="fa-solid fa-lock"></i>',
            '<i class="fa-solid fa-sun"></i>',
            '<i class="fa-solid fa-taxi"></i>',
        ];

        shuffle($amenityImages);
        return array_slice($amenityImages, 0, 8);
    }
    public static function getRandomImage()
    {
        $arrayImages = [
            '/img/home/pic-slider1.jpg',
            '/img/home/pic-slider2.jpg',
            '/img/home/pic-slider3.jpg',
            '/img/home/pic-slider4.jpg',
            '/img/home/pic-slider5.jpg',
            '/img/home/pic-slider6.jpg',
            '/img/home/pic-slider7.jpg',
            '/img/home/pic-slider8.jpg',
            '/img/home/pic-slider9.jpg',
        ];
        $indiceAleatorio = array_rand($arrayImages);
        return $arrayImages[$indiceAleatorio];
    }
    public static function getAmenitiesData($amenitiesData, $count = 8)
    {
        $randomAmenities = array_rand($amenitiesData, $count);
        $result = [];

        foreach ($randomAmenities as $index) {
            $result[] = [
                'url' => $amenitiesData[$index]['url'],
                'description' => $amenitiesData[$index]['description'],
            ];
        }

        return $result;
    }
}

$amenitiesData = [
    ['url' => '/img/room-detail/img-air-cond.png', 'description' => 'Air conditioner'],
    ['url' => '/img/room-detail/img-breakfast.png', 'description' => 'Breakfast'],
    ['url' => '/img/room-detail/img-cleaning.png', 'description' => 'Cleaning'],
    ['url' => '/img/room-detail/img-grocery.png', 'description' => 'Grocery'],
    ['url' => '/img/room-detail/img-shop near.png', 'description' => 'Shop near'],
    ['url' => '/img/room-detail/img-online.png', 'description' => '24/7 Online Support'],
    ['url' => '/img/room-detail/img-wifi.png', 'description' => 'High speed WiFi'],
    ['url' => '/img/room-detail/img-kitchen.png', 'description' => 'Kitchen'],
    ['url' => '/img/room-detail/img-shower.png', 'description' => 'Shower'],
    ['url' => '/img/room-detail/img-bad.png', 'description' => 'Single bed'],
    ['url' => '/img/room-detail/img-towels.png', 'description' => 'Towels'],
];

$roomAmenities = GenericFn::getAmenitiesData($amenitiesData);
