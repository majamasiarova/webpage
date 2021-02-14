<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function getCategories()
    {
        return [
            "Autá", "Oblečenie", "Elektronika", "Dom a záhrada", "Reality, Byty, Domy", "Stroje",
            "Mobily", "Motorky", "Práca", "Počítače", "Hudba", "Zvieratá", "Ostatné",
            "Služby", "Knihy", "Nábytok", "Športové potreby", "Zdravie a krása",
            "Deti a detské potreby"
        ];
    }

    public static function getImages()
    {
        return [
            "Autá" => 'pictures/car.jpg',
            "Oblečenie" => 'pictures/clothes.jpg',
            "Elektronika" => 'pictures/elec.jpg',
            "Dom a záhrada"=> 'pictures/garden.jpg',
            "Reality, Byty, Domy"=> 'pictures/house.jpg',
            "Stroje"=> 'pictures/machine.jpg',
            "Mobily"=> 'pictures/mobile.jpg',
            "Motorky"=> 'pictures/moto.jpg',
            "Práca"=> 'pictures/work.jpg',
            "Počítače"=> 'pictures/laptop.jpg',
            "Hudba"=> 'pictures/music.jpg',
            "Zvieratá"=> 'pictures/dog.jpg',
            "Ostatné"=> 'pictures/ticket.jpg',
            "Služby"=> 'pictures/service.jpg',
            "Knihy"=> 'pictures/books.jpg',
            "Nábytok"=> 'pictures/furniture.jpg',
            "Športové potreby"=> 'pictures/bicycle.jpg',
            "Zdravie a krása"=> 'pictures/health.jpg',
            "Deti a detské potreby"=> 'pictures/kids.jpg',
        ];
    }
}
