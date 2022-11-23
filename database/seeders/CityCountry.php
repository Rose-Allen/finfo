<?php

namespace Database\Seeders;

use App\Models\AddressCity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityCountry extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = array(
            array(
                'id' => 1,
                'name_en' => 'Абай',
                'name_ru' => 'Абай',
                'name_kz' => 'Абай',
                'region' => 11),
            array(
                'id' => 2,
                'name_en' => 'Акколь',
                'name_ru' => 'Акколь',
                'name_kz' => 'Ақкөл',
                'region' => 4),
            array(
                'id' => 3,
                'name_en' => 'Аксай',
                'name_ru' => 'Аксай',
                'name_kz' => 'Ақсай',
                'region' => 10),
            array(
                'id' => 4,
                'name_en' => 'Аксу',
                'name_ru' => 'Аксу',
                'name_kz' => 'Ақсу',
                'region' => 15),
            array(
                'id' => 5,
                'name_en' => 'Актау',
                'name_ru' => 'Актау',
                'name_kz' => 'Ақтау',
                'region' => 14),
            array(
                'id' => 6,
                'name_en' => 'Актобе',
                'name_ru' => 'Актобе',
                'name_kz' => 'Ақтөбе',
                'region' => 5),
            array(
                'id' => 7,
                'name_en' => 'Алга',
                'name_ru' => 'Алга',
                'name_kz' => 'Алға',
                'region' => 5),
            array(
                'id' => 8,
                'name_en' => 'Алма-Ата',
                'name_ru' => 'Алматы',
                'name_kz' => 'Алматы',
                'region' => 2),
            array(
                'id' => 9,
                'name_en' => 'Аральск',
                'name_ru' => 'Арал',
                'name_kz' => 'Арал',
                'region' => 13),
            array(
                'id' => 10,
                'name_en' => 'Аркалык',
                'name_ru' => 'Аркалык',
                'name_kz' => 'Арқалық',
                'region' => 12),
            array(
                'id' => 11,
                'name_en' => 'Арыс',
                'name_ru' => 'Арыс',
                'name_kz' => 'Арыс',
                'region' => 17),
            array(
                'id' => 12,
                'name_en' => 'Нур-Султан',
                'name_ru' => 'Нур-Султан',
                'name_kz' => 'Нур-Султан',
                'region' => 1),
            array(
                'id' => 13,
                'name_en' => 'Атбасар',
                'name_ru' => 'Атбасар',
                'name_kz' => 'Атбасар',
                'region' => 4),
            array(
                'id' => 14,
                'name_en' => 'Атырау',
                'name_ru' => 'Атырау',
                'name_kz' => 'Атырау',
                'region' => 7),
            array(
                'id' => 15,
                'name_en' => 'Аягоз',
                'name_ru' => 'Аягоз',
                'name_kz' => 'Аягөз',
                'region' => 8),
            array(
                'id' => 16,
                'name_en' => 'Байконур',
                'name_ru' => 'Байконыр',
                'name_kz' => 'Байқоңыр',
                'region' => 13),
            array(
                'id' => 17,
                'name_en' => 'Балхаш',
                'name_ru' => 'Балхаш',
                'name_kz' => 'Балқаш',
                'region' => 11),
            array(
                'id' => 18,
                'name_en' => 'Булаево',
                'name_ru' => 'Булаево',
                'name_kz' => 'Булаев',
                'region' => 16),
            array(
                'id' => 19,
                'name_en' => 'Державинск',
                'name_ru' => 'Державинск',
                'name_kz' => 'Державин',
                'region' => 4),
            array(
                'id' => 20,
                'name_en' => 'Ерейментау',
                'name_ru' => 'Ерейментау',
                'name_kz' => 'Ерейментау',
                'region' => 4),
            array(
                'id' => 21,
                'name_en' => 'Есик',
                'name_ru' => 'Есик',
                'name_kz' => 'Есік',
                'region' => 6),
            array(
                'id' => 22,
                'name_en' => 'Есиль',
                'name_ru' => 'Есиль',
                'name_kz' => 'Есіл',
                'region' => 4),
            array(
                'id' => 23,
                'name_en' => 'Жанаозен',
                'name_ru' => 'Жанаозен',
                'name_kz' => 'Жаңаөзен',
                'region' => 14),
            array(
                'id' => 24,
                'name_en' => 'Жанатас',
                'name_ru' => 'Жанатас',
                'name_kz' => 'Жаңатас',
                'region' => 9),
            array(
                'id' => 25,
                'name_en' => 'Жаркент',
                'name_ru' => 'Жаркент',
                'name_kz' => 'Жаркент',
                'region' => 6),
            array(
                'id' => 26,
                'name_en' => 'Жезказган',
                'name_ru' => 'Жезказган',
                'name_kz' => 'Жезқазған',
                'region' => 11),
            array(
                'id' => 27,
                'name_en' => 'Жем',
                'name_ru' => 'Жем',
                'name_kz' => 'Жем',
                'region' => 5),
            array(
                'id' => 28,
                'name_en' => 'Жетысай',
                'name_ru' => 'Жетысай',
                'name_kz' => 'Жетісай',
                'region' => 17),
            array(
                'id' => 29,
                'name_en' => 'Житикара',
                'name_ru' => 'Житикара',
                'name_kz' => 'Жітіқара',
                'region' => 12),
            array(
                'id' => 30,
                'name_en' => 'Зайсан',
                'name_ru' => 'Зайсан',
                'name_kz' => 'Зайсаң',
                'region' => 8),
            array(
                'id' => 31,
                'name_en' => 'Зыряновск',
                'name_ru' => 'Зыряновск',
                'name_kz' => 'Зыряновск',
                'region' => 8),
            array(
                'id' => 32,
                'name_en' => 'Казалинск',
                'name_ru' => 'Казалинск',
                'name_kz' => 'Қазалы',
                'region' => 13),
            array(
                'id' => 33,
                'name_en' => 'Кандыагаш',
                'name_ru' => 'Кандыагаш',
                'name_kz' => 'Қандыағаш',
                'region' => 5),
            array(
                'id' => 34,
                'name_en' => 'Капшагай',
                'name_ru' => 'Капшагай',
                'name_kz' => 'Қапшағай',
                'region' => 6),
            array(
                'id' => 35,
                'name_en' => 'Караганда',
                'name_ru' => 'Караганды',
                'name_kz' => 'Қарағанды',
                'region' => 11),
            array(
                'id' => 36,
                'name_en' => 'Каражал',
                'name_ru' => 'Каражал',
                'name_kz' => 'Қаражал',
                'region' => 11),
            array(
                'id' => 37,
                'name_en' => 'Каратау',
                'name_ru' => 'Каратау',
                'name_kz' => 'Қаратау',
                'region' => 9),
            array(
                'id' => 38,
                'name_en' => 'Каркаралинск',
                'name_ru' => 'Каркаралинск',
                'name_kz' => 'Қарқаралы',
                'region' => 11),
            array(
                'id' => 39,
                'name_en' => 'Каскелен',
                'name_ru' => 'Каскелен',
                'name_kz' => 'Қаскелең',
                'region' => 6),
            array(
                'id' => 40,
                'name_en' => 'Кентау',
                'name_ru' => 'Кентау',
                'name_kz' => 'Кентау',
                'region' => 17),
            array(
                'id' => 41,
                'name_en' => 'Кокшетау',
                'name_ru' => 'Кокшетау',
                'name_kz' => 'Көкшетау',
                'region' => 4),
            array(
                'id' => 42,
                'name_en' => 'Костанай',
                'name_ru' => 'Костанай',
                'name_kz' => 'Қостанай',
                'region' => 12),
            array(
                'id' => 43,
                'name_en' => 'Кульсары',
                'name_ru' => 'Кулсары',
                'name_kz' => 'Құлсары',
                'region' => 7),
            array(
                'id' => 44,
                'name_en' => 'Курчатов',
                'name_ru' => 'Курчатов',
                'name_kz' => 'Курчатов',
                'region' => 8),
            array(
                'id' => 45,
                'name_en' => 'Кызылорда',
                'name_ru' => 'Кызылорда',
                'name_kz' => 'Қызылорда',
                'region' => 13),
            array(
                'id' => 46,
                'name_en' => 'Ленгер',
                'name_ru' => 'Ленгер',
                'name_kz' => 'Леңгір',
                'region' => 17),
            array(
                'id' => 47,
                'name_en' => 'Лисаковск',
                'name_ru' => 'Лисаковск',
                'name_kz' => 'Лисаковск',
                'region' => 12),
            array(
                'id' => 48,
                'name_en' => 'Макинск',
                'name_ru' => 'Макинск',
                'name_kz' => 'Макинск',
                'region' => 4),
            array(
                'id' => 49,
                'name_en' => 'Мамлютка',
                'name_ru' => 'Мамлютка',
                'name_kz' => 'Мамлют',
                'region' => 16),
            array(
                'id' => 50,
                'name_en' => 'Павлодар',
                'name_ru' => 'Павлодар',
                'name_kz' => 'Павлодар',
                'region' => 15),
            array(
                'id' => 51,
                'name_en' => 'Петропавловск',
                'name_ru' => 'Петропавловск',
                'name_kz' => 'Петропавл',
                'region' => 16),
            array(
                'id' => 52,
                'name_en' => 'Приозёрск',
                'name_ru' => 'Приозёрск',
                'name_kz' => 'Приозер',
                'region' => 11),
            array(
                'id' => 53,
                'name_en' => 'Риддер',
                'name_ru' => 'Риддер',
                'name_kz' => 'Риддер',
                'region' => 8),
            array(
                'id' => 54,
                'name_en' => 'Рудный',
                'name_ru' => 'Рудный',
                'name_kz' => 'Рудный',
                'region' => 12),
            array(
                'id' => 55,
                'name_en' => 'Сарань',
                'name_ru' => 'Сарань',
                'name_kz' => 'Саран',
                'region' => 11),
            array(
                'id' => 56,
                'name_en' => 'Сарканд',
                'name_ru' => 'Сарканд',
                'name_kz' => 'Сарқант',
                'region' => 6),
            array(
                'id' => 57,
                'name_en' => 'Сарыагаш',
                'name_ru' => 'Сарыагаш',
                'name_kz' => 'Сарыағаш',
                'region' => 17),
            array(
                'id' => 58,
                'name_en' => 'Сатпаев',
                'name_ru' => 'Сатпаев',
                'name_kz' => 'Сәтбаев',
                'region' => 11),
            array(
                'id' => 59,
                'name_en' => 'Семей',
                'name_ru' => 'Семей',
                'name_kz' => 'Семей',
                'region' => 8),
            array(
                'id' => 60,
                'name_en' => 'Сергеевка',
                'name_ru' => 'Сергеевка',
                'name_kz' => 'Сергеев',
                'region' => 16),
            array(
                'id' => 61,
                'name_en' => 'Серебрянск',
                'name_ru' => 'Серебрянск',
                'name_kz' => 'Серебрянск',
                'region' => 8),
            array(
                'id' => 62,
                'name_en' => 'Степногорск',
                'name_ru' => 'Степногорск',
                'name_kz' => 'Степногорск',
                'region' => 4),
            array(
                'id' => 63,
                'name_en' => 'Степняк',
                'name_ru' => 'Степняк',
                'name_kz' => 'Степняк',
                'region' => 4),
            array(
                'id' => 64,
                'name_en' => 'Тайынша',
                'name_ru' => 'Тайынша',
                'name_kz' => 'Тайынша',
                'region' => 16),
            array(
                'id' => 65,
                'name_en' => 'Талгар',
                'name_ru' => 'Талгар',
                'name_kz' => 'Талғар',
                'region' => 6),
            array(
                'id' => 66,
                'name_en' => 'Талдыкорган',
                'name_ru' => 'Талдыкорган',
                'name_kz' => 'Талдықорған',
                'region' => 6),
            array(
                'id' => 67,
                'name_en' => 'Тараз',
                'name_ru' => 'Тараз',
                'name_kz' => 'Тараз',
                'region' => 9),
            array(
                'id' => 68,
                'name_en' => 'Текели',
                'name_ru' => 'Текели',
                'name_kz' => 'Текелі',
                'region' => 6),
            array(
                'id' => 69,
                'name_en' => 'Темир',
                'name_ru' => 'Темир',
                'name_kz' => 'Темір',
                'region' => 5),
            array(
                'id' => 70,
                'name_en' => 'Темиртау',
                'name_ru' => 'Темиртау',
                'name_kz' => 'Теміртау',
                'region' => 11),
            array(
                'id' => 71,
                'name_en' => 'Туркестан',
                'name_ru' => 'Туркестан',
                'name_kz' => 'Түркістан',
                'region' => 17),
            array(
                'id' => 72,
                'name_en' => 'Уральск',
                'name_ru' => 'Уральск',
                'name_kz' => 'Орал',
                'region' => 10),
            array(
                'id' => 73,
                'name_en' => 'Усть-Каменогорск',
                'name_ru' => 'Усть-Каменогорск',
                'name_kz' => 'Өскемен',
                'region' => 8),
            array(
                'id' => 74,
                'name_en' => 'Ушарал',
                'name_ru' => 'Ушарал',
                'name_kz' => 'Үшарал',
                'region' => 6),
            array(
                'id' => 75,
                'name_en' => 'Уштобе',
                'name_ru' => 'Уштобе',
                'name_kz' => 'Үштөбе',
                'region' => 6),
            array(
                'id' => 76,
                'name_en' => 'Форт-Шевченко',
                'name_ru' => 'Форт-Шевченко',
                'name_kz' => 'Форт-Шевченко',
                'region' => 14),
            array(
                'id' => 77,
                'name_en' => 'Хромтау',
                'name_ru' => 'Хромтау',
                'name_kz' => 'Хромтау',
                'region' => 5),
            array(
                'id' => 78,
                'name_en' => 'Шардара',
                'name_ru' => 'Шардара',
                'name_kz' => 'Шардара',
                'region' => 17),
            array(
                'id' => 79,
                'name_en' => 'Шалкар',
                'name_ru' => 'Шалкар',
                'name_kz' => 'Шалқар',
                'region' => 5),
            array(
                'id' => 80,
                'name_en' => 'Шар',
                'name_ru' => 'Шар',
                'name_kz' => 'Шар',
                'region' => 8),
            array(
                'id' => 81,
                'name_en' => 'Шахтинск',
                'name_ru' => 'Шахтинск',
                'name_kz' => 'Шахтинск',
                'region' => 11),
            array(
                'id' => 82,
                'name_en' => 'Шемонаиха',
                'name_ru' => 'Шемонаиха',
                'name_kz' => 'Шемонаиха',
                'region' => 8),
            array(
                'id' => 83,
                'name_en' => 'Шу',
                'name_ru' => 'Шу',
                'name_kz' => 'Шу',
                'region' => 9),
            array(
                'id' => 84,
                'name_en' => 'Шымкент',
                'name_ru' => 'Шымкент',
                'name_kz' => 'Шымкент',
                'region' => 3),
            array(
                'id' => 85,
                'name_en' => 'Щучинск',
                'name_ru' => 'Щучинск',
                'name_kz' => 'Щучинск',
                'region' => 4),
            array(
                'id' => 86,
                'name_en' => 'Экибастуз',
                'name_ru' => 'Экибастуз',
                'name_kz' => 'Екібастұз',
                'region' => 15),
            array(
                'id' => 87,
                'name_en' => 'Эмба',
                'name_ru' => 'Эмба',
                'name_kz' => 'Ембі',
                'region' => 5,
//                'district_id' => 5
            ),

            // Поселки/аулы

            array(
                'id' => 88,
                'name_en' => 'Аксу',
                'name_ru' => 'Аксу',
                'name_kz' => 'Аксу',
                'region' => 4,
            ),
            array(
                'id' => 89,
                'name_en' => 'Аршалы',
                'name_ru' => 'Аршалы',
                'name_kz' => 'Аршалы',
                'region' => 4,
            ),
            array(
                'id' => 90,
                'name_en' => 'Бестобе',
                'name_ru' => 'Бестобе',
                'name_kz' => 'Бестобе',
                'region' => 4,
            ),
            array(
                'id' => 91,
                'name_en' => 'Заводской',
                'name_ru' => 'Заводской',
                'name_kz' => 'Заводской',
                'region' => 4,
            ),
            array(
                'id' => 92,
                'name_en' => 'Станционный',
                'name_ru' => 'Станционный',
                'name_kz' => 'Станционный',
                'region' => 4,
            ),
            array(
                'id' => 93,
                'name_en' => 'Шантобе',
                'name_ru' => 'Шантобе',
                'name_kz' => 'Шантобе',
                'region' => 4,
            ),
            array(
                'id' => 94,
                'name_en' => 'Шортанды',
                'name_ru' => 'Шортанды',
                'name_kz' => 'Шортанды',
                'region' => 4,
            ),
            array(
                'id' => 95,
                'name_en' => 'Шубаркудук',
                'name_ru' => 'Шубаркудук',
                'name_kz' => 'Шубаркудук',
                'region' => 5,
            ),
            array(
                'id' => 96,
                'name_en' => 'Индерборский',
                'name_ru' => 'Индерборский',
                'name_kz' => 'Индерборский',
                'region' => 4,
            ),
            array(
                'id' => 97,
                'name_en' => 'Макат',
                'name_ru' => 'Макат',
                'name_kz' => 'Макат',
                'region' => 5,
            ),
            array(
                'id' => 98,
                'name_en' => 'Ульба',
                'name_ru' => 'Ульба',
                'name_kz' => 'Ульба',
                'region' => 8,
            ),
            array(
                'id' => 99,
                'name_en' => 'Чаган',
                'name_ru' => 'Чаган',
                'name_kz' => 'Чаган',
                'region' => 8,
            ),
            array(
                'id' => 100,
                'name_en' => 'Шульбинск',
                'name_ru' => 'Шульбинск',
                'name_kz' => 'Шульбинск',
                'region' => 8,
            ),
            array(
                'id' => 101,
                'name_en' => 'Деркул',
                'name_ru' => 'Деркул',
                'name_kz' => 'Деркул',
                'region' => 10,
            ),
            array(
                'id' => 102,
                'name_en' => 'Зачаганск',
                'name_ru' => 'Зачаганск',
                'name_kz' => 'Зачаганск',
                'region' => 10,
            ),
            array(
                'id' => 103,
                'name_en' => 'Круглоозёрное',
                'name_ru' => 'Круглоозёрное',
                'name_kz' => 'Круглоозёрное',
                'region' => 10,
            ),

            array(
                'id' => 104,
                'name_en' => 'Актас',
                'name_ru' => 'Актас',
                'name_kz' => 'Актас',
                'region' => 11,
            ),
            array(
                'id' => 105,
                'name_en' => 'Актау',
                'name_ru' => 'Актау',
                'name_kz' => 'Актау',
                'region' => 11,
            ),
            array(
                'id' => 106,
                'name_en' => 'Атасу',
                'name_ru' => 'Атасу',
                'name_kz' => 'Атасу',
                'region' => 11,
            ),
            array(
                'id' => 107,
                'name_en' => 'Ботакара',
                'name_ru' => 'Ботакара',
                'name_kz' => 'Ботакара',
                'region' => 11,
            ),
            array(
                'id' => 108,
                'name_en' => 'Гульшат',
                'name_ru' => 'Гульшат',
                'name_kz' => 'Гульшат',
                'region' => 11,
            ),
            array(
                'id' => 109,
                'name_en' => 'Долинка',
                'name_ru' => 'Долинка',
                'name_kz' => 'Долинка',
                'region' => 11,
            ),
            array(
                'id' => 110,
                'name_en' => 'Жайрем',
                'name_ru' => 'Жайрем',
                'name_kz' => 'Жайрем',
                'region' => 11,
            ),
            array(
                'id' => 111,
                'name_en' => 'Жезказган',
                'name_ru' => 'Жезказган',
                'name_kz' => 'Жезказган',
                'region' => 11,
            ),
            array(
                'id' => 112,
                'name_en' => 'Конырат',
                'name_ru' => 'Конырат',
                'name_kz' => 'Конырат',
                'region' => 11,
            ),
            array(
                'id' => 113,
                'name_en' => 'Новодолинский',
                'name_ru' => 'Новодолинский',
                'name_kz' => 'Новодолинский',
                'region' => 11,
            ),
            array(
                'id' => 114,
                'name_en' => 'Нура',
                'name_ru' => 'Нура',
                'name_kz' => 'Нура',
                'region' => 11,
            ),
            array(
                'id' => 115,
                'name_en' => 'Осакаровка',
                'name_ru' => 'Осакаровка',
                'name_kz' => 'Осакаровка',
                'region' => 11,
            ),
            array(
                'id' => 116,
                'name_en' => 'Саяк',
                'name_ru' => 'Саяк',
                'name_kz' => 'Саяк',
                'region' => 11,
            ),
            array(
                'id' => 117,
                'name_en' => 'Шахан',
                'name_ru' => 'Шахан',
                'name_kz' => 'Шахан',
                'region' => 11,
            ),

            array(
                'id' => 118,
                'name_en' => 'Горняцкий',
                'name_ru' => 'Горняцкий',
                'name_kz' => 'Горняцкий',
                'region' => 12,
            ),
            array(
                'id' => 119,
                'name_en' => 'Затобольск',
                'name_ru' => 'Затобольск',
                'name_kz' => 'Затобольск',
                'region' => 12,
            ),
            array(
                'id' => 120,
                'name_en' => 'Карабалык',
                'name_ru' => 'Карабалык',
                'name_kz' => 'Карабалык',
                'region' => 12,
            ),
            array(
                'id' => 121,
                'name_en' => 'Качар',
                'name_ru' => 'Качар',
                'name_kz' => 'Качар',
                'region' => 12,
            ),
            array(
                'id' => 122,
                'name_en' => 'Октябрьский',
                'name_ru' => 'Октябрьский',
                'name_kz' => 'Октябрьский',
                'region' => 12,
            ),
            array(
                'id' => 123,
                'name_en' => 'Сарыколь',
                'name_ru' => 'Сарыколь',
                'name_kz' => 'Сарыколь',
                'region' => 12,
            ),

            array(
                'id' => 124,
                'name_en' => 'Айтеке-Би',
                'name_ru' => 'Айтеке-Би',
                'name_kz' => 'Айтеке-Би',
                'region' => 13,
            ),
            array(
                'id' => 125,
                'name_en' => 'Белколь',
                'name_ru' => 'Белколь',
                'name_kz' => 'Белколь',
                'region' => 13,
            ),
            array(
                'id' => 126,
                'name_en' => 'Тасбогет',
                'name_ru' => 'Тасбогет',
                'name_kz' => 'Тасбогет',
                'region' => 13,
            ),

            array(
                'id' => 127,
                'name_en' => 'Аксу',
                'name_ru' => 'Аксу',
                'name_kz' => 'Аксу',
                'region' => 15,
            ),
            array(
                'id' => 128,
                'name_en' => 'Ленинский',
                'name_ru' => 'Ленинский',
                'name_kz' => 'Ленинский',
                'region' => 15,
            ),
            array(
                'id' => 129,
                'name_en' => 'Солнечный',
                'name_ru' => 'Солнечный',
                'name_kz' => 'Солнечный',
                'region' => 15,
            ),
            array(
                'id' => 130,
                'name_en' => 'Шидерты',
                'name_ru' => 'Шидерты',
                'name_kz' => 'Шидерты',
                'region' => 15,
            ),
            array(
                'id' => 131,
                'name_en' => 'Мырзакент',
                'name_ru' => 'Мырзакент',
                'name_kz' => 'Мырзакент',
                'region' => 17,
            ),
        );
        foreach ($arr as $item){
            DB::table('address_cities')->insert([
                'id'=>$item['id'],
                'name'=>$item['name_en'],
            ]);
            DB::table('address_countries')->insert([
                'id'=>$item['id'],
                'name'=>'Казахстан',
            ]);
        }

    }
}
