<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('products')->insert([
            [
                "name" => "Bowl Kekko",
                "price" => 780,
                "category" => "bowls",
                "product_description" => "Bowl Kekko \nMedidas: 16,5 de diámetro por 5,5 cm de alto (pueden variar por ser productos hechos a mano). \n*Cada pieza que hago es única e irrepetible en su esmaltado. Los colores combinados pueden ser similares, pero nunca van a ser iguales. ¡Esa es la magia! \nApta para horno a gas, horno electrico y microondas.",
                "image" => "bowlKekkoBlancoNegro",
                "image_description" => "Bowl Kekko color: negro gris y blanco de medidas 16,5cm de diamentro por 5,5cm de alto",
                "created_at" => now(),
                "updated_at" => now()
                
            ],
            [
                "name" => "Taza Barna",
                "price" => 1000,
                "category" => "tazas",
                "product_description" => "Taza Barna \nMedidas 9,5 de diametro por 9 de alto (pueden variar por ser productos hechos a mano). \n*Cada pieza que hago es única e irrepetible en su esmaltado. Los colores combinados pueden ser similares, pero nunca van a ser iguales. ¡Esa es la magia! \nApta para horno a gas, horno electrico y microondas.",
                "image" => "tazaBarnaBeige",
                "image_description" => "Taza Barna color beige, de medidas 9,5 de diametro por 9 de alto",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Fuente Kekko",
                "price" => 1400,
                "category" => "fuentes",
                "product_description" => "Fuente/Plato Kekko. \nMedidas 23 de diámetro por 4 cm de alto (pueden variar por ser productos hechos a mano). \n *Cada pieza que hago es única e irrepetible en su esmaltado. Los colores combinados pueden ser similares, pero nunca van a ser iguales. ¡Esa es la magia! \n Apta para horno a gas, horno electrico y microondas.",
                "image" => "fuenteKekkoNegroBlanco",
                "image_description" => "Fuente Kekko color negro gris y blanco, de medidas 23 de diámetro por 4 cm de alto",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Bowl Mateo",
                "price" => 980,
                "category" => "bowls",
                "product_description" => "Fuente Mateo \nMedidas 16,5 de diámetro por 5,5 de alto (pueden variar por ser productos hechos a mano). \n *Cada pieza que hago es única e irrepetible en su esmaltado. Los colores combinados pueden ser similares, pero nunca van a ser iguales. ¡Esa es la magia!\n Apta para horno a gas, horno electrico y microondas.",
                "image" => "bowlMateoBlancoNegro",
                "image_description" => "Fuente Mateo color negro gris y blanco, de medidas 16,5 de diámetro por 5,5 de alto",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Taza Laura",
                "price" => 700,
                "category" => "tazas",
                "product_description" => "Taza Laura \nMedidas 7,5 de diametro por 9,5 cm de alto (pueden variar por ser productos hechos a mano). \n *Cada pieza que hago es única e irrepetible en su esmaltado. Los colores combinados pueden ser similares, pero nunca van a ser iguales. ¡Esa es la magia!\n Apta para horno a gas, horno electrico y microondas.",
                "image" => "tazaLauraNegro",
                "image_description" => "Taza Laura color beige y negro de medidas 16,5 de diámetro por 5,5 de alto",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Mate Martha",
                "price" => 530,
                "category" => "mate",
                "product_description" => "Mate/Vaso Martha \nMedidas 7,5 de diámetro por 9cm de alto (pueden variar por ser productos hechos a mano). \n*Cada pieza que hago es única e irrepetible en su esmaltado. Los colores combinados pueden ser similares, pero nunca van a ser iguales. ¡Esa es la magia! \nApta para horno a gas, horno electrico y microondas.",
                "image" => "mateMarthaBlanco",
                "image_description" => "Fuente Meneca color blanco de medidas 7,5 de diámetro por 9cm de alto",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}
