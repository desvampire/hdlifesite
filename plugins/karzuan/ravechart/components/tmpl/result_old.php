﻿<?php if(!function_exists('mb_ucwords'))      {
  function mb_ucwords($str)            {
    return mb_convert_case($str, MB_CASE_TITLE, "UTF-8");            }      }

    $country_en = array (1 => 'Australia', 2 => 'Austria', 3 => 'Azerbaijan', 4 => 'Albania', 5 => 'Algeria', 6 => 'Angola', 7 => 'Andorra', 8 => 'Antigua & Barbuda', 9 => 'Antilles', 10 => 'Argentina', 11 => 'Armenia', 12 => 'Afghanistan', 13 => 'Bahamas', 14 => 'Bangladesh', 15 => 'Barbados', 16 => 'Bahrain', 17 => 'Belize', 18 => 'Belarus', 19 => 'Belgium', 20 => 'Benin', 21 => 'Bulgaria', 22 => 'Bolivia', 23 => 'Bosnia & Herzegovina', 24 => 'Botswana', 25 => 'Brazil', 26 => 'Burkina Faso', 27 => 'Burundi', 28 => 'Bhutan', 29 => 'Vanuatu', 30 => 'Vatican', 31 => 'Great Britain', 32 => 'Hungary', 33 => 'Venezuela', 34 => 'Vietnam', 35 => 'Gabon', 36 => 'Haiti', 37 => 'Guyana', 38 => 'Gambia', 39 => 'Ghana', 40 => 'Guatemala', 41 => 'Guinea', 42 => 'Guinea-Bissau', 43 => 'Germany', 44 => 'Netherlands', 45 => 'Honduras', 46 => 'Hong Kong', 47 => 'Grenada', 48 => 'Greenland', 49 => 'Greece', 50 => 'Georgia', 51 => 'Guam', 52 => 'Denmark', 53 => 'Congo Democratic Republic', 54 => 'Djibouti', 55 => 'Dominican Republic', 56 => 'Egypt', 57 => 'Zambia', 58 => 'Western Sahara', 59 => 'Zimbabwe', 60 => 'Israel', 61 => 'India', 62 => 'Indonesia', 63 => 'Jordan', 64 => 'Iraq', 65 => 'Iran', 66 => 'Ireland', 67 => 'Iceland', 68 => 'Spain', 69 => 'Italy', 70 => 'Yemen', 71 => 'Cape Verde', 72 => 'Kazakhstan', 73 => 'Cambodia', 74 => 'Cameroon', 75 => 'Canada', 76 => 'Qatar', 77 => 'Kenya', 78 => 'Cyprus', 79 => 'Kyrgyzstan', 80 => 'Kiribati', 81 => 'China', 82 => 'North Korea', 83 => 'Colombia', 84 => 'Comoros', 85 => 'Costa Rica', 86 => 'Cote d\'Ivoire', 87 => 'Cuba', 88 => 'Saudi Arabia', 89 => 'Laos', 90 => 'Latvia', 91 => 'Lesotho', 92 => 'Liberia', 93 => 'Lebanon', 94 => 'Libya', 95 => 'Lithuania', 96 => 'Liechtenstein', 97 => 'Luxembourg', 98 => 'Mauritius', 99 => 'Mauritania', 100 => 'Madagascar', 101 => 'Macedonia', 102 => 'Malawi', 103 => 'Malaysia', 104 => 'Mali', 105 => 'Maldives', 106 => 'Malta', 107 => 'Morocco', 108 => 'Martinique', 109 => 'Mexico', 110 => 'Micronesia', 111 => 'Mozambique', 112 => 'Moldova', 113 => 'Monaco', 114 => 'Mongolia', 115 => 'Myanmar', 116 => 'Namibia', 117 => 'Nepal', 118 => 'Niger', 119 => 'Nigeria', 120 => 'Nicaragua', 121 => 'New Zealand', 122 => 'New Caledonia', 123 => 'Norway', 124 => 'UAE', 125 => 'Oman', 126 => 'Pakistan', 127 => 'Palestine', 128 => 'Panama', 129 => 'Papua New Guinea', 130 => 'Paraguay', 131 => 'Peru', 132 => 'Poland', 133 => 'Portugal', 134 => 'USA - Puerto Rico', 135 => 'Congo', 136 => 'Republic of Korea', 137 => 'Russia', 138 => 'Rwanda', 139 => 'Romania', 140 => 'El Salvador', 141 => 'San Marino', 142 => 'Sao Tome and Principe', 143 => 'Saudi Arabia', 144 => 'Swaziland', 145 => 'Senegal', 146 => 'Saint Kitts & Nevis', 147 => 'St. Lucia', 148 => 'Serbia', 149 => 'Singapore', 150 => 'Syria', 151 => 'Slovakia', 152 => 'Slovenia', 153 => 'Solomon Islands', 154 => 'Somalia', 155 => 'Sudan', 156 => 'Suriname', 157 => 'United States', 158 => 'Sierra Leone', 159 => 'Tajikistan', 160 => 'Thailand', 161 => 'Taiwan', 162 => 'Tanzania', 163 => 'Togo', 164 => 'Tonga', 165 => 'Trinidad and Tobago', 166 => 'Tunisia', 167 => 'Turkmenistan', 168 => 'Turkey', 169 => 'Uganda', 170 => 'Uzbekistan', 171 => 'Ukraine', 172 => 'Uruguay', 173 => 'Fiji', 174 => 'Philippines', 175 => 'Finland', 176 => 'France', 177 => 'French Guiana', 178 => 'Croatia', 179 => 'Central African Republic', 180 => 'Chad', 181 => 'Montenegro', 182 => 'Czech Republic', 183 => 'Chile', 184 => 'Switzerland', 185 => 'Sweden', 186 => 'Sri Lanka', 187 => 'Ecuador', 188 => 'Equatorial Guinea', 189 => 'Eritrea', 190 => 'Estonia', 191 => 'Ethiopia', 192 => 'South Africa', 193 => 'Jamaica', 194 => 'Japan', 841=>'Korea (North)', 842 =>'Korea (South)');

$country_ru = array (1 => 'Австралия', 2 => 'Австрия', 3 => 'Азербайджан', 4 => 'Албания', 5 => 'Алжир', 6 => 'Ангола', 7 => 'Андорра', 8 => 'Антигуа и Барбуда', 9 => 'Антильские острова', 10 => 'Аргентина', 11 => 'Армения', 12 => 'Афганистан', 13 => 'Багамские острова', 14 => 'Бангладеш', 15 => 'Барбадос', 16 => 'Бахрейн', 17 => 'Белиз', 18 => 'Белоруссия', 19 => 'Бельгия', 20 => 'Бенин', 21 => 'Болгария', 22 => 'Боливия', 23 => 'Босния и Герцеговина', 24 => 'Ботсвана', 25 => 'Бразилия', 26 => 'Буркина-Фасо', 27 => 'Бурунди', 28 => 'Бутан', 29 => 'Вануату', 30 => 'Ватикан', 31 => 'Великобритания', 32 => 'Венгрия', 33 => 'Венесуэла', 34 => 'Вьетнам', 35 => 'Габон', 36 => 'Гаити', 37 => 'Гайана', 38 => 'Гамбия', 39 => 'Гана', 40 => 'Гватемала', 41 => 'Гвинея', 42 => 'Гвинея-Бисау', 43 => 'Германия', 44 => 'Голландия', 45 => 'Гондурас', 46 => 'Гонконг', 47 => 'Гренада', 48 => 'Гренландия', 49 => 'Греция', 50 => 'Грузия', 51 => 'Гуам', 52 => 'Дания', 53 => 'Демократическая Республика Конго', 54 => 'Джибути', 55 => 'Доминиканская республика', 56 => 'Египет', 57 => 'Замбия', 58 => 'Западная Сахара', 59 => 'Зимбабве', 60 => 'Израиль', 61 => 'Индия', 62 => 'Индонезия', 63 => 'Иордания', 64 => 'Ирак', 65 => 'Иран', 66 => 'Ирландия', 67 => 'Исландия', 68 => 'Испания', 69 => 'Италия', 70 => 'Йемен', 71 => 'Кабо-Верде', 72 => 'Казахстан', 73 => 'Камбоджа', 74 => 'Камерун', 75 => 'Канада', 76 => 'Катар', 77 => 'Кения', 78 => 'Кипр', 79 => 'Киргизия', 80 => 'Кирибати', 81 => 'Китай', 82 => 'КНДР', 83 => 'Колумбия', 84 => 'Коморские острова', 85 => 'Коста-Рика', 86 => 'Кот-д\'Ивуар', 87 => 'Куба', 88 => 'Кувейт', 89 => 'Лаос', 90 => 'Латвия', 91 => 'Лесото', 92 => 'Либерия', 93 => 'Ливан', 94 => 'Ливия', 95 => 'Литва', 96 => 'Лихтенштейн', 97 => 'Люксембург', 98 => 'Маврикий', 99 => 'Мавритания', 100 => 'Мадагаскар', 101 => 'Македония', 102 => 'Малави', 103 => 'Малайзия', 104 => 'Мали', 105 => 'Мальдивы', 106 => 'Мальта', 107 => 'Марокко', 108 => 'Мартиника', 109 => 'Мексика', 110 => 'Микронезия', 111 => 'Мозамбик', 112 => 'Молдавия', 113 => 'Монако', 114 => 'Монголия', 115 => 'Мьянма', 116 => 'Намибия', 117 => 'Непал', 118 => 'Нигер', 119 => 'Нигерия', 120 => 'Никарагуа', 121 => 'Новая Зеландия', 122 => 'Новая Каледония', 123 => 'Норвегия', 124 => 'ОАЭ', 125 => 'Оман', 126 => 'Пакистан', 127 => 'Палестина', 128 => 'Панама', 129 => 'Папуа-Новая Гвинея', 130 => 'Парагвай', 131 => 'Перу', 132 => 'Польша', 133 => 'Португалия', 134 => 'Пуэрто-Рико', 135 => 'Республика Конго', 136 => 'Республика Корея', 137 => 'Россия', 138 => 'Руанда', 139 => 'Румыния', 140 => 'Сальвадор', 141 => 'Сан-Марино', 142 => 'Сан-Томе и Принсипи', 143 => 'Саудовская Аравия', 144 => 'Свазиленд', 145 => 'Сенегал', 146 => 'Сент-Китс и Невис', 147 => 'Сент-Люсия', 148 => 'Сербия', 149 => 'Сингапур', 150 => 'Сирия', 151 => 'Словакия', 152 => 'Словения', 153 => 'Соломоновы острова', 154 => 'Сомали', 155 => 'Судан', 156 => 'Суринам', 157 => 'США', 158 => 'Сьерра-Леоне', 159 => 'Таджикистан', 160 => 'Таиланд', 161 => 'Тайвань', 162 => 'Танзания', 163 => 'Того', 164 => 'Тонга', 165 => 'Тринидад и Тобаго', 166 => 'Тунис', 167 => 'Туркменистан', 168 => 'Турция', 169 => 'Уганда', 170 => 'Узбекистан', 171 => 'Украина', 172 => 'Уругвай', 173 => 'Фиджи', 174 => 'Филиппины', 175 => 'Финляндия', 176 => 'Франция', 177 => 'Французская Гвиана', 178 => 'Хорватия', 179 => 'Центральноафриканская Республика', 180 => 'Чад', 181 => 'Черногория', 182 => 'Чехия', 183 => 'Чили', 184 => 'Швейцария', 185 => 'Швеция', 186 => 'Шри-Ланка', 187 => 'Эквадор', 188 => 'Экваториальная Гвинея', 189 => 'Эритрея', 190 => 'Эстония', 191 => 'Эфиопия', 192 => 'ЮАР', 193 => 'Ямайка', 194 => 'Япония', 841=> 'Корея (Северная)', 842=> 'Корея (Южная)');

$capital_ru = array (1 => 'Виктория, Западная Австралия, Квинсленд, Новый Южный Уэльс, Северная территория, Тасмания, Южная Австралия', 2 => 'Вена', 3 => 'Баку', 4 => 'Тирана', 5 => 'Алжир', 6 => 'Луанда', 7 => 'Андорра-ла-Велла', 8 => 'Сент-Джонс', 9 => 'Виллемстад', 10 => 'Буэнос-Айрес', 11 => 'Ереван', 12 => 'Кабул', 13 => 'Нассау', 14 => 'Дакка', 15 => 'Бриджтаун', 16 => 'Манама', 17 => 'Бельмопан ', 18 => 'Минск', 19 => 'Брюссель', 20 => 'Котону', 21 => 'София', 22 => 'Ла-Пас', 23 => 'Сараево', 24 => 'Габороне', 25 => 'Acre, Alagoas, Amapa, Amazonas, Bahia, Ceara, Distrito Federal, Espirito Santo, Goias, Maranhao, Mato Grosso, Mato Grosso do Sul, Minas Gerais, Para, Paraiba, Parana, Pernambuco, Piaui, Rio de Janeiro, Rio Grande do Norte, Rio Grande do Sul, Rondonia, Roraima, Santa Catarina, Sao Paulo, Sergipe, Tocantins', 26 => 'Уагадугу', 27 => 'Бужумбура', 28 => 'Paro', 29 => 'Порт-Вила', 30 => 'Ватикан', 31 => 'Лондон', 32 => 'Будапешт', 33 => 'Каракас', 34 => 'Ханой', 35 => 'Либревиль', 36 => 'Порт-о-Пренс', 37 => 'Джорджтаун', 38 => 'Банджул', 39 => 'Аккра', 40 => 'Гватемала', 41 => 'Конакри', 42 => 'Бисау', 43 => 'Берлин', 44 => 'Амстердам', 45 => 'Тегусигальпа', 46 => 'Гонконг', 47 => 'Сент-Джорджес', 48 => 'Нуук', 49 => 'Афины', 50 => 'Тбилиси', 51 => 'Dededo', 52 => 'Копенгаген', 53 => 'Bandundu, Bas-Congo, Equateur, Kasai-Occidental, Kasai-Oriental, Katanga, Kinshasa, Maniema, North Kivu, Orientale, South Kivu', 54 => 'Джибути', 55 => 'Санто-Доминго', 56 => 'Каир', 57 => 'Лусака', 58 => 'Эль-Аюн', 59 => 'Хараре', 60 => 'Иерусалим', 61 => 'Дели', 62 => 'Aceh, North Sumatra (Sumatera Utara), West Sumatra (Sumatera Barat), Riau, Riau Islands (Kepulauan Riau), Jambi, South Sumatra (Sumatera Selatan), Bangka-Belitung, Bengkulu, Lampung, Special Capital Territory of Jakarta, Banten, West Java (Jawa Barat), Central Java (Jawa Tengah), Yogyakarta Special Region, East Java (Jawa Timur), Bali, West Nusa Tenggara, East Nusa Tenggara, West Kalimantan (Kalimantan Barat), Central Kalimantan (Kalimantan Tengah), South Kalimantan (Kalimantan Selatan), East Kalimantan (Kalimantan Timur), North Sulawesi (Sulawesi Utara), Gorontalo, Central Sulawesi (Sulawesi Tengah), West Sulawesi (Sulawesi Barat), South Sulawesi (Sulawesi Selatan), South East Sulawesi (Sulawesi Tenggara), Maluku, North Maluku (Maluku Utara), West Papua (Papua Barat), Papua', 63 => 'Амман', 64 => 'Багдад', 65 => 'Тегеран', 66 => 'Дублин', 67 => 'Рейкьявик', 68 => 'Мадрид', 69 => 'Рим', 70 => 'Сана', 71 => 'Прая', 72 => 'Акмолинская область, Актюбинская область, Алматинская область, Алматы (Алма-Ата), Астана, Атырауская область, Байконыр (Байконур), Восточно-Казахстанская область, Жамбылская область, Западно-Казахстанская область, Карагандинская область, Костанайская область, Кызылординская область, Мангистауская область, Павлодарская область, Северо-Казахстанская область, Южно-Казахстанская область', 73 => 'Пномпень', 74 => 'Яунде', 75 => 'Альберта, Британская Колумбия, Квебек, Манитоба, Новая Шотландия, Нью-Брансуик, Ньюфаундленд и Лабрадор, Онтарио, Остров Принца Эдуарда, Саскачеван', 76 => 'Доха', 77 => 'Найроби', 78 => 'Никосия', 79 => 'Бишкек', 80 => 'Баирики', 81 => 'Пекин', 82 => 'Пхеньян', 83 => 'Богота', 84 => 'Морони', 85 => 'Сан-Хосе', 86 => 'Ямусукро', 87 => 'Гавана', 88 => 'Эль-Кувейт', 89 => 'Вьентьян', 90 => 'Рига', 91 => 'Масеру', 92 => 'Монровия', 93 => 'Бейрут', 94 => 'Триполи', 95 => 'Вильнюс', 96 => 'Вадуц', 97 => 'Люксембург', 98 => 'Порт-Луи', 99 => 'Нуакшот', 100 => 'Антананариву', 101 => 'Скопье', 102 => 'Лилонгве', 103 => 'Куала-Лумпур', 104 => 'Бамако', 105 => 'Мале', 106 => 'Валлетта', 107 => 'Рабат', 108 => 'Фор-де-Франс', 109 => 'Агуаскальентес, Веракрус, Герреро, Гуанахуато, Дуранго, Идальго, Кампече, Керетаро, Кинтана-Роо, Коауила, Колима, Мехико, Мичоакан, Морелос, Наярит, Нижняя Калифорния, Южная Нижняя Калифорния, Нуэво-Леон, Оахака, Пуэбла, Сакатекас, Сан-Луис-Потоси, Синалоа, Сонора, Табаско, Тамаулипас, Тласкала, Халиско, Чиуауа, Чьяпас, Юкатан', 110 => 'Pohnpei', 111 => 'Мапуту', 112 => 'Кишинев', 113 => 'Монако', 114 => 'Архангай, Баян-Улгий, Баянхонгор, Булган, Дорноговь, Дорнод, Говь-Алтай, Говь-Сумбэр, Дархан-Уул, Завхан, Ховд, Орхон, Сэлэнгэ, Дундговь, Сухэ-Батор, Увс, Уверхангай, Хувсгел, Хэнтий, Туве, Умнеговь', 115 => 'Янгон', 116 => 'Виндхук', 117 => 'Катманду', 118 => 'Ниамей', 119 => 'Абуджа', 120 => 'Манагуа', 121 => 'Веллингтон', 122 => 'Нумеа', 123 => 'Осло', 124 => 'Абу-Даби', 125 => 'Маскат', 126 => 'Исламабад', 127 => 'Газа', 128 => 'Панама', 129 => 'Порт-Морсби', 130 => 'Асунсьон', 131 => 'Лима', 132 => 'Варшава', 133 => 'Лиссабон', 134 => 'Сан-Хуан', 135 => 'Браззавиль', 136 => 'Сеул', 137 => 'Алтайский край, Амурская область, Архангельская область, Астраханская область, Белгородская область, Брянская область, Владимирская область, Волгоградская область, Вологодская область, Воронежская область, Еврейская автономная область, Забайкальский край, Ивановская область, Иркутская область, Калининградская область, Калужская область, Камчатский край, Кемеровская область, Кировская область, Костромская область, Краснодарский край, Красноярский край, Курганская область, Курская область, Санкт-Петербург и Лен.Обл., Липецкая область, Магаданская область, Московская область, Мурманская область, Ненецкий автономный округ, Нижегородская область, Новгородская область, Новосибирская область, Омская область, Оренбургская область, Орловская область, Пензенская область, Пермский край, Приморский край, Псковская область, Республика Адыгея, Республика Алтай, Республика Башкортостан, Республика Бурятия, Республика Дагестан, Республика Ингушетия, Республика Кабардино-Балкария, Республика Калмыкия, Республика Карачаево-Черкессия, Республика Карелия, Республика Коми, Республика Марий Эл, Республика Мордовия, Республика Саха (Якутия), Республика Северная Осетия - Алания, Республика Татарстан, Республика Тыва (Тува), Республика Удмуртия, Республика Хакасия, Республика Чечня, Республика Чувашия, Ростовская область, Рязанская область, Самарская область, Саратовская область, Сахалинская область, Свердловская область, Смоленская область, Ставропольский край, Тамбовская область, Тверская область, Томская область, Тульская область, Тюменская область, Ульяновская область, Хабаровский край, Ханты-Мансийский автономный округ - Югра, Челябинская область, Чукотский автономный округ, Ямало-Ненецкий автономный округ, Ярославская область ', 138 => 'Кигали', 139 => 'Бухарест', 140 => 'Сан-Сальвадор', 141 => 'Сан-Марино', 142 => 'Сан-Томе', 143 => 'Эр-Рияд', 144 => 'Мбабане', 145 => 'Дакар', 146 => 'Бастер', 147 => 'Кастри', 148 => 'Белград', 149 => 'Сингапур', 150 => 'Дамаск', 151 => 'Братислава', 152 => 'Любляна', 153 => 'Хониара', 154 => 'Могадишо', 155 => 'Хартум', 156 => 'Парамарибо', 157 => 'Вашингтон', 158 => 'Фритаун', 159 => 'Душанбе', 160 => 'Бангкок', 161 => 'Тайбэй', 162 => 'Дар-эс-Салам', 163 => 'Ломе', 164 => 'Нукуалофа', 165 => 'Порт-оф-Спейн', 166 => 'Тунис', 167 => 'Ашхабад', 168 => 'Анкара', 169 => 'Кампала', 170 => 'Ташкент', 171 => 'Киев', 172 => 'Монтевидео', 173 => 'Сува', 174 => 'Манила', 175 => 'Хельсинки', 176 => 'Париж', 177 => 'Кайенна', 178 => 'Загреб', 179 => 'Банги', 180 => 'Нджамена', 181 => 'Подгорица', 182 => 'Прага', 183 => 'Сантьяго', 184 => 'Берн', 185 => 'Стокгольм', 186 => 'Коломбо', 187 => 'Кито', 188 => 'Малабо', 189 => 'Асмэра', 190 => 'Таллин', 191 => 'Аддис-Абеба', 192 => 'Претория', 193 => 'Кингстон', 194 => 'Токио', 841=> 'Корея (Северная)', 842=> 'Корея (Южная)');

$capital_en = array (1 => 'Melbourne, Perth, Brisbane, Sydney, Darwin, Hobart, Adelaide', 2 => 'Vienna', 3 => 'Baku', 4 => 'Tirana', 5 => 'Alger', 6 => 'Luanda', 7 => 'Andorra', 8 => 'St. Johns', 9 => 'Willemstad', 10 => 'Buenos Aires', 11 => 'Yerevan', 12 => 'Kabul', 13 => 'Nassau', 14 => 'Dhaka', 15 => 'Bridgetown', 16 => 'Manama', 17 => 'Belmopan', 18 => 'Minsk', 19 => 'Brussels', 20 => 'Cotonou', 21 => 'Sofia', 22 => 'La Paz', 23 => 'Sarajevo', 24 => 'Gaborone', 25 => 'Rio Branco, Maceio, Macapa, Manaus, Salvador, Fortaleza, Brasilia, Vitoria, Goiania, Sao Luis, Cuiaba, Campo Grande, Belo Horizonte, Belem, Joao Pessoa, Curitiba, Recife, Teresina, Rio de Janeiro, Natal, Porto Alegre, Porto Velho, Boa Vista, Florianopolis, Sao Paulo, Aracaju, Palmas', 26 => 'Ouagadougou', 27 => 'Bujumbura', 28 => 'Paro', 29 => 'Port Vila', 30 => 'Vatican', 31 => 'London', 32 => 'Budapest', 33 => 'Caracas', 34 => 'Hanoi', 35 => 'Libreville', 36 => 'Port-au-Prince', 37 => 'Georgetown', 38 => 'Banjul', 39 => 'Accra', 40 => 'Guatemala', 41 => 'Conakry', 42 => 'Bissau', 43 => 'Berlin', 44 => 'Amsterdam', 45 => 'Tegucigalpa', 46 => 'Hong Kong', 47 => 'St. Georges', 48 => 'Nuuk', 49 => 'Athens', 50 => 'Tbilisi', 51 => 'Dededo', 52 => 'Copenhagen', 53 => 'Bandundu, Boma, Mbandaka, Kananga, Mbuji-Mayi, Lubumbashi, Kinshasa, Kindu, Goma, Kisangani, Bukavu', 54 => 'Djibouti', 55 => 'Santo Domingo', 56 => 'Cairo', 57 => 'Lusaka', 58 => 'Laayoune', 59 => 'Harare', 60 => 'Jerusalem', 61 => 'Delhi', 62 => 'Banda Aceh, Medan, Padang, Padang, Tanjung Pinang, Jambi, Palembang, Pangkal Pinang, Bengkulu, Bandar, Jakarta, Serang, Bandung, Semarang, Yogyakarta, Surabaya, Denpasar, Mataram, Kupang, Pontianak, Palangkaraya, Banjarmasin, Samarinda, Manado, Gorontalo, Palu, Mamuju, Makasar, Kendari, Ambon, Ternate, Manokwari, Jayapura', 63 => 'Amman', 64 => 'Baghdad', 65 => 'Tehran', 66 => 'Dublin', 67 => 'Reykjavik', 68 => 'Madrid', 69 => 'Rome', 70 => 'Sanaa', 71 => 'Praia', 72 => 'Astana, Aktobe, Almaty, Almaty, Astana, Aterau, Baikonur, Ust-Kamenogorsk, Karatau, Uralsk, Karaganda, Kustanaj, Kzyl-Orda, Aktau, Pavlodar , Petropavlovsk, Chimkent', 73 => 'Phnom Penh', 74 => 'Yaounde', 75 => 'Edmonton, Victoria,  Quebec, Winnipeg, Halifax, Fredericton, St. Johns, Toronto, Charlottetown, Regina', 76 => 'Doha', 77 => 'Nairobi', 78 => 'Nicosia', 79 => 'Frunze', 80 => 'Bairiki', 81 => 'Beijing', 82 => 'Pyongyang', 83 => 'Bogota', 84 => 'Moroni', 85 => 'San Jose', 86 => 'Yamoussoukro', 87 => 'Havana', 88 => 'Riyadh', 89 => 'Vientiane', 90 => 'Riga', 91 => 'Maseru', 92 => 'Monrovia', 93 => 'Beirut', 94 => 'Tripoli', 95 => 'Vilnius', 96 => 'Vaduz', 97 => 'Luxembourg', 98 => 'Port Louis', 99 => 'Nouakchott', 100 => 'Antananarivo', 101 => 'Skopje', 102 => 'Lilongwe', 103 => 'Kuala Lumpur', 104 => 'Bamako', 105 => 'Male', 106 => 'Valletta', 107 => 'Rabat', 108 => 'Fort-de-France', 109 => 'Aguascalientes, Veracruz, Chilpancingo, Guanajuato, Durango, Pachuca, Campeche, Queretaro, Chetumal, Saltillo, Colima, Toluca, Morelia, Cuernavaca, Tepic, Mexicali, La Paz, Monterrey, Oaxaca, Puebla, Zacatecas, San Luis Potosi, Culiacan, Hermosillo, Villahermosa, Ciudad Victoria, Tlaxcala, Guadalajara, Chihuahua, Tuxtla Gutierrez, Merida', 110 => 'Pohnpei', 111 => 'Maputo', 112 => 'Chisinau', 113 => 'Monaco', 114 => 'Ulan Bator, Nogoonnuur, Ulan Bator, Ulan Bator, Ulan Bator, Ulan Bator, Ulan Bator, Ulan Bator, Ulan Bator, Ulan Bator, Nogoonnuur, Ulan Bator, Ulan Bator, Ulan Bator, Ulan Bator, Nogoonnuur, Ulan Bator, Ulan Bator, Ulan Bator, Ulan Bator, Ulan Bator', 115 => 'Yangon', 116 => 'Windhoek', 117 => 'Kathmandu', 118 => 'Niamey', 119 => 'Abuja', 120 => 'Managua', 121 => 'Wellington', 122 => 'Noumea', 123 => 'Oslo', 124 => 'Abu Dhabi', 125 => 'Muscat', 126 => 'Islamabad', 127 => 'Gaza', 128 => 'Panama', 129 => 'Port Moresby', 130 => 'Asuncion', 131 => 'Lima', 132 => 'Warsaw', 133 => 'Lisbon', 134 => 'San Juan', 135 => 'Brazzaville', 136 => 'Seoul', 137 => 'Barnaul, Belogorsk, Arkhangelsk, Astrakhan, Belgorod, Bryansk, Vladimir, Volgograd, Vologda, Voronezh, Vladivostok, Chita, Ivanovo, Irkutsk, Kaliningrad, Kaluga, Petropavlovsk, Kemerovo, Kirov, Kostroma, Krasnodar, Krasnoyarsk, Kurgan, Kursk, St. Petersburg, Lipetsk, Magadan, Moscow, Murmansk, Amderma, Arzamas, Novgorod, Novosibirsk, Omsk, Orenburg, Orel, Penza, Perm, Vladivostok, Pskov, Maykop, Altay, Ufa, Ulan-Ude, Makhachkala, Nazran, Nalchik, Elista, Cherkessk, Petrozavodsk, Syktyvkar, Yoshkar-Ola, Saransk, Yakutsk, Vladikavkaz, Kazan, Kyzyl, Izhevsk, Abakan, Gudermes, Cheboksary, Rostov-na-Donu, Ryazan, Samara, Saratov, Yuzhno-Sakhalinsk, Yekaterinburg, Smolensk, Stavropol, Tambov, Tver, Tomsk, Tula, Tyumen, Ulyanovsk, Khabarovsk, Khanty-Mansiysk, Chelyabinsk, Anadyr, Nadym, Rybinsk', 138 => 'Kigali', 139 => 'Bucharest', 140 => 'San Salvador', 141 => 'San Marino', 142 => 'Sao Tome', 143 => 'Riyadh', 144 => 'Mbabane', 145 => 'Dakar', 146 => 'Basseterre', 147 => 'Castries', 148 => 'Belgrade', 149 => 'Singapore', 150 => 'Damascus', 151 => 'Bratislava', 152 => 'Ljubljana', 153 => 'Honiara', 154 => 'Mogadishu', 155 => 'Khartoum', 156 => 'Paramaribo', 157 => 'Washington', 158 => 'Freetown', 159 => 'Dushanbe', 160 => 'Bangkok', 161 => 'Taipei', 162 => 'Dar Es Salaam', 163 => 'Lome', 164 => 'Nuku\'alofa', 165 => 'Port of Spain', 166 => 'Tunis', 167 => 'Ashkhabad', 168 => 'Ankara', 169 => 'Kampala', 170 => 'Tashkent', 171 => 'Kiev', 172 => 'Montevideo', 173 => 'Suva', 174 => 'Manila', 175 => 'Helsinki', 176 => 'Paris', 177 => 'Cayenne', 178 => 'Zagreb', 179 => 'Bangui', 180 => 'Ndjamena', 181 => 'Podgorica', 182 => 'Prague', 183 => 'Santiago', 184 => 'Bern', 185 => 'Stockholm', 186 => 'Colombo', 187 => 'Quito', 188 => 'Malabo', 189 => 'Asmara', 190 => 'Tallinn', 191 => 'Addis Ababa', 192 => 'Pretoria', 193 => 'Kingston', 194 => 'Tokyo', 841=>'Pyongyang', 842=>'Seoul');

$usa_city_eng = array (1 => 'Montgomery', 2 => 'Juneau', 3 => 'Phoenix', 4 => 'Little Rock', 5 => 'Sacramento', 6 => 'Denver', 7 => 'Hartford', 8 => 'Dover', 9 => 'Washington', 10 => 'Tallahassee', 11 => 'Atlanta', 12 => 'Honolulu', 13 => 'Boise', 14 => 'Springfield', 15 => 'Indianapolis', 16 => 'Des Moines', 17 => 'Topeka', 18 => 'Frankfort', 19 => 'Baton Rouge', 20 => 'Augusta', 21 => 'Annapolis', 22 => 'Boston', 23 => 'Lansing', 24 => 'St. Paul', 25 => 'Jackson', 26 => 'Jefferson City', 27 => 'Helena', 28 => 'Lincoln', 29 => 'Carson City', 30 => 'Concord', 31 => 'Trenton', 32 => 'Santa Fe', 33 => 'Albany', 34 => 'Raleigh', 35 => 'Bismarck', 36 => 'Columbus', 37 => 'Oklahoma City', 38 => 'Salem', 39 => 'Harrisburg', 40 => 'Providence', 41 => 'Columbia', 42 => 'Pierre', 43 => 'Nashville', 44 => 'Austin', 45 => 'Salt Lake City', 46 => 'Montpelier', 47 => 'Richmond', 48 => 'Olympia', 49 => 'Charleston', 50 => 'Madison', 51 => 'Cheyenne');

$usa_state_en = array (1 => 'USA - Alabama', 2 => 'USA - Alaska', 3 => 'USA - Arizona', 4 => 'USA - Arkansas', 5 => 'USA - California', 6 => 'USA - Colorado', 7 => 'USA - Connecticut', 8 => 'USA - Delaware', 9 => 'USA - Dist of Columbia', 10 => 'USA - Florida', 11 => 'USA - Georgia', 12 => 'USA - Hawaii', 13 => 'USA - Idaho', 14 => 'USA - Illinois', 15 => 'USA - Indiana', 16 => 'USA - Iowa', 17 => 'USA - Kansas', 18 => 'USA - Kentucky', 19 => 'USA - Louisiana', 20 => 'USA - Maine', 21 => 'USA - Maryland', 22 => 'USA - Massachusetts', 23 => 'USA - Michigan', 24 => 'USA - Minnesota', 25 => 'USA - Mississippi', 26 => 'USA - Missouri', 27 => 'USA - Montana', 28 => 'USA - Nebraska', 29 => 'USA - Nevada', 30 => 'USA - New Hampshire', 31 => 'USA - New Jersey', 32 => 'USA - New Mexico', 33 => 'USA - New York', 34 => 'USA - North Carolina', 35 => 'USA - North Dakota', 36 => 'USA - Ohio', 37 => 'USA - Oklahoma', 38 => 'USA - Oregon', 39 => 'USA - Pennsylvania', 40 => 'USA - Rhode Island', 41 => 'USA - South Carolina', 42 => 'USA - South Dakota', 43 => 'USA - Tennessee', 44 => 'USA - Texas', 45 => 'USA - Utah', 46 => 'USA - Vermont', 47 => 'USA - Virginia', 48 => 'USA - Washington', 49 => 'USA - West Virginia', 50 => 'USA - Wisconsin', 51 => 'USA - Wyoming');$usa_state_ru = array (1 => 'Алабама', 2 => 'Аляска', 3 => 'Аризона', 4 => 'Арканзас', 5 => 'Калифорния', 6 => 'Колорадо', 7 => 'Коннектикут', 8 => 'Делавэр', 9 => 'Расстояние Колумбия', 10 => 'Флорида', 11 => 'Джорджия', 12 => 'Гавайи', 13 => 'Айдахо', 14 => 'Иллинойс', 15 => 'Индиана', 16 => 'Айова', 17 => 'Канзас', 18 => 'Кентукки', 19 => 'Луизиана', 20 => 'Мэн', 21 => 'Мэриленд', 22 => 'Массачусетс', 23 => 'Мичиган', 24 => 'Миннесота', 25 => 'Миссисипи', 26 => 'Миссури', 27 => 'Монтана', 28 => 'Небраска', 29 => 'Невада', 30 => 'Нью-Гемпшир', 31 => 'Нью-Джерси', 32 => 'Нью-Мексико', 33 => 'Нью-Йорк', 34 => 'Северная Каролина', 35 => 'Северная Дакота', 36 => 'Огайо', 37 => 'Оклахома', 38 => 'Орегон', 39 => 'Пенсильвания', 40 => 'Род-Айленд', 41 => 'Южная Каролина', 42 => 'Южная Дакота', 43 => 'Теннесси', 44 => 'Техас', 45 => 'Юта', 46 => 'Вермонт', 47 => 'Виргиния', 48 => 'Вашингтон', 49 => 'Западная Виргиния', 50 => 'Висконсин', 51 => 'Вайоминг');

if ($_POST['country'] !='' && $_POST['country'] !='0' && $_POST['city'] =='')	{
  		$key = array_search($_POST['country'], $country_ru);
        		if ($_POST['country'] == 'США')			{
        		  		echo '<p>Штат<span class="red"></span></p><select name="city">';
                        $i=1;
                        foreach ($usa_state_ru as $state)					{
                          		echo '<option value="'.$usa_state_en[$i].', '.$usa_city_eng[$i].'">'.$state.'</option>';
                                $i++;
                        }
                        echo '</select><input type="hidden" value="1" name="usa"><input type="hidden" value="usa" name="country_en">';
				}				else 			{
				  		if (stristr($capital_ru[$key], ', '))					{
				  		  		$city_ru_arr = explode(', ', $capital_ru[$key]);
                                $city_en_arr = explode(', ', $capital_en[$key]);
                                if ($key == 1 or $key == 25 or $key == 75 or $key == 109)							{
                                  		echo '<p>Штат<span class="red"></span></p><select name="city">';
                                }						else							{
                                  		echo '<p>Регион<span class="red"></span></p><select name="city">';
                                }
                                $i=0;
                                foreach($city_ru_arr as $city)							{
                                  		echo '<option value="'.$city_en_arr[$i].'">'.$city.'</option>';
                                        $i++;
                                }
                                echo '</select><input type="hidden" value="'.$country_en[$key].'" name="country_en">';
                                //echo $_POST['city'];
                        }				else					{
                          		//echo '<p>Регион<span class="red"></span></p><select name="city_ru" disabled><option value="'.$capital_en[$key].'">'.$capital_ru[$key].'</option></select>';
            					echo '<input type="hidden" value="'.$capital_en[$key].'" name="city"><input type="hidden" value="'.$country_en[$key].'" name="country_en">';
    					}
                }
                //echo '';
}else if ($_POST['city'] !='' && $_POST['country_en'] !='')	{
        		if($_POST['usa'] ==1)			{
        		  				$al_arr = explode(', ', $_POST['city']);
                                $country_eng = $al_arr[0];
                                $city_eng = $al_arr[1];
                }		else			{
                  				$country_eng = $_POST['country_en'];
                                $city_eng = $_POST['city'];
                }
                //echo $_POST['country_en'].' - '.$_POST['city'];
                $curl = curl_init();
                //уcтанавливаем урл, к которому обратимся
                curl_setopt($curl, CURLOPT_URL, 'http://www.jovianarchive.com/Get_Your_Variable');
                //включаем вывод заголовков
                curl_setopt($curl, CURLOPT_HEADER, 0);
                //передаем данные по методу post
                curl_setopt($curl, CURLOPT_POST, 1);
                //теперь curl вернет нам ответ, а не выведет
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                //curl_setopt($ch, CURLOPT_PROXY, "$proxy");
                //переменные, которые будут переданные по методу post
                curl_setopt($curl, CURLOPT_POSTFIELDS, 'IsVariableChart=False&Day='.$_POST['day'].'&Month='.$_POST['month'].'&Year='.$_POST['year'].'&Hour='.$_POST['hour'].'&Minute='.$_POST['minute'].'&Country='.$country_eng.'&City='.$city_eng);
                //curl_setopt($curl, CURLOPT_POSTFIELDS, 'IsVariableChart=false&Day=4&Month=1&Year=1984&Hour=1&Minute=0&Country=Russia&City=Rostov');
                //я не скрипт, я браузер опера
                curl_setopt($curl, CURLOPT_USERAGENT, 'Opera 10.00');
                $res = curl_exec($curl);
                // echo 'IsVariableChart=False&Day='.$_POST['day'].'&Month='.$_POST['month'].'&Year='.$_POST['year'].'&Hour='.$_POST['hour'].'&Minute='.$_POST['minute'].'&Country='.$country_eng.'&City='.$city_eng;
                //проверяем, если ошибка, то получаем номер и сообщение
                if(!$res){
                  $error = curl_error($curl).'('.curl_errno($curl).')';
                  echo $error;
                }
                //если не ошибка, то выводим результат
                else{
                  //echo $res;
                }
                curl_close($curl);
                require_once 'simple_html_dom.php';
                $data = str_get_html($res);
                if($data->innertext!='' and count($data->find('img[style=margin-left:30px;]')))			{
                  				foreach($data->find('table.form label') as $label)					{
                  				  			$labels[] = $label;
                                            //echo $label.'<br>';
                                }
                                $to_repl = array('<strong>', '</strong>');
                                foreach($data->find('table.form strong') as $text)					{
                                  			$texts[] = str_replace($to_repl, '',$text);
                                            //echo $text.'<br>';
                                }
                                require_once('ru-eng.php');
                                $type_text = array_search(strtolower($texts[3]), $ru_eng);
                                $type_text = mb_ucwords($type_text);
                                $difin_text = array_search(strtolower($texts[5]), $ru_eng);
                                $difin_text = mb_ucwords($difin_text);
                                $authority_text = array_search(strtolower($texts[6]), $ru_eng);
                                $authority_text = mb_ucwords($authority_text);
                                $strategy_text = array_search(strtolower($texts[7]), $ru_eng);
                                $strategy_text = mb_ucwords($strategy_text);
                                $theme_text = array_search(strtolower($texts[8]), $ru_eng);
                                $theme_text = mb_ucwords($theme_text);
                                $cross_text = str_replace($cross_en, $cross_ru, strtolower($texts[9]));
                                $cross_text = str_replace($cross_en_det, $cross_ru_det, $cross_text);
                                $cross_text = str_replace('the', '', $cross_text);
                                $cross_text = mb_ucwords($cross_text);
                                //$cross_text = ;
                                echo '<table><tr><td><label>Тип:</label><strong>'.$type_text.'</strong></td><td><label>Профиль:</label><strong>'.$texts[4].'</strong></td><td><label>Определение:</label><strong>'.$difin_text.'</strong></td></tr><tr><td><label>Внутренний Авторитет:</label><strong>'.$authority_text.'</strong></td><td><label>Стратегия:</label><strong>'.$strategy_text.'</strong></td><td><label>Ложное Я:</label><strong>'.$theme_text.'</strong></td></tr><tr><td colspan="3"><label>Инкарнационный крест:</label><strong>'.$cross_text.'</strong></td></tr></table>';
                                foreach($data->find('img[style=margin-left:30px;]') as $a)					{
                                  			$img_url = $a->src;
                                            $img = '<img id="imgmap" src="http://www.jovianarchive.com'.$img_url.'" />';
                                            echo '<img id="imgover" src="/modules/mod_mapgen/tmpl/img_over.png" />';
                                            echo $img;
                                }
                                echo '<form id="mailform" action="" method="post">					<input type="hidden" name="action" value="form" />					<input type="hidden" name="image" value="'.$img_url.'" />					<input type="hidden" name="type" value="'.$type_text.'" />					<input type="hidden" name="profile" value="'.$texts[4].'" />					<input type="hidden" name="difin" value="'.$difin_text.'" />					<input type="hidden" name="authority" value="'.$authority_text.'" />					<input type="hidden" name="strategy" value="'.$strategy_text.'" />					<input type="hidden" name="theme" value="'.$theme_text.'" />					<input type="hidden" name="cross" value="'.$cross_text.'" />					</form>';
                 						}
                }//unset($_POST);
                                        ?>