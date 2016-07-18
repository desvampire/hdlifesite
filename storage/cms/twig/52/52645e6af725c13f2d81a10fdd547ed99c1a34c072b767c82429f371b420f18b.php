<?php

/* /home/u312/domains/hdlife.center/public/plugins/karzuan/ravechart/components/myform/default.htm */
class __TwigTemplate_0723bb61a046ebf2ce4aedccd287696c85c0382e9387d6742c907128181c05f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"mapgen\">
\t<form name=\"mform\" action=\"\" method=\"post\" id=\"mform\">
\t<!-- 1 РЯД -->
\t<div class=\"grid maingrey-bg\">
\t\t<!-- ДЕНЬ -->
\t\t<div class=\"grid__col-12 grid__col-md-4\">
\t\t\t<div class=\"grid__cell\">
\t\t\t\t<label for=\"day__birth\" class=\"mform__label\">День:</label>
\t\t\t\t<div class=\"select mform__select\">
\t\t\t\t<select name=\"day\" id=\"day__birth\">\t\t\t

                                                <option value=\"01\">01</option>
                                                <option value=\"02\">02</option>
                                                <option value=\"03\">03</option>
                                                <option value=\"04\">04</option>
                                                <option value=\"05\">05</option>
                                                <option value=\"06\">06</option>
                                                <option value=\"07\">07</option>
                                                <option value=\"08\">08</option>
                                                <option value=\"09\">09</option>
                                                <option value=\"10\">10</option>
                                                <option value=\"11\">11</option>
                                                <option value=\"12\">12</option>
                                                <option value=\"13\">13</option>
                                                <option value=\"14\">14</option>
                                                <option value=\"15\">15</option>
                                                <option value=\"16\">16</option>
                                                <option value=\"17\">17</option>
                                                <option value=\"18\">18</option>
                                                <option value=\"19\">19</option>
                                                <option value=\"20\">20</option>
                                                <option value=\"21\">21</option>
                                                <option value=\"22\">22</option>
                                                <option value=\"23\">23</option>
                                                <option value=\"24\">24</option>
                                                <option value=\"25\">25</option>
                                                <option value=\"26\">26</option>
                                                <option value=\"27\">27</option>
                                                <option value=\"28\">28</option>
                                                <option value=\"29\">29</option>
                                                <option value=\"30\">30</option>
                                                <option value=\"31\">31</option>

\t\t\t</select>
\t\t\t\t\t<div class=\"select__arrow\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t
\t\t<!-- МЕСЯЦ -->
\t\t<div class=\"grid__col-12 grid__col-md-4\">
\t\t\t<div class=\"grid__cell\">
\t\t\t\t<label for=\"month__birth\" class=\"mform__label\">Месяц:</label>
\t\t\t\t<div class=\"select mform__select\">
\t\t\t<select name=\"month\" id=\"month__birth\">\t\t\t\t

\t\t\t\t\t<option selected value=\"1\">Январь</option>\t<option value=\"2\">Февраль</option>\t
\t\t\t\t\t<option value=\"3\">Март</option>\t\t<option value=\"4\">Апрель</option>\t<option value=\"5\">Май</option>
\t\t\t\t\t<option value=\"6\">Июнь</option>\t\t<option value=\"7\">Июль</option>\t\t<option value=\"8\">Август</option>
\t\t\t\t\t<option value=\"9\">Сентябрь</option>\t\t<option value=\"10\">Октябрь</option>\t\t<option value=\"11\">Ноябрь</option>\t
\t\t\t\t\t<option value=\"12\">Декабрь</option>\t\t

\t\t\t</select>
\t\t\t\t\t<div class=\"select__arrow\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t
\t\t<!-- ГОД -->
\t\t<div class=\"grid__col-12 grid__col-md-4\">
\t\t\t<div class=\"grid__cell\">
\t\t\t\t<label for=\"year__birth\" class=\"mform__label\">Год:</label>
\t\t\t\t<div class=\"select mform__select\">
\t\t\t<select name=\"year\" id=\"year__birth\">
\t\t\t<script>
            var myDate = new Date();
            var year = myDate.getFullYear();
            for(var i = 1900; i < year+1; i++){
            document.write('<option value=\"'+i+'\">'+i+'</option>');
            }
            </script>
\t\t\t</select>
\t\t\t\t\t<div class=\"select__arrow\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>\t

\t<!-- 2 РЯД -->
\t<div class=\"grid\">
\t\t<!-- ЧАС -->
\t\t<div class=\"grid__col-12 grid__col-md-4\">
\t\t\t<div class=\"grid__cell\">
\t\t\t\t<label for=\"hour__birth\" class=\"mform__label\">Час:</label>
\t\t\t\t<div class=\"select mform__select\">
\t\t\t\t\t<select name=\"hour\" id=\"hour__birth\">
                                            <option selected value=\"0\">00</option>
                                                <option value=\"1\">01</option>
                                                <option value=\"2\">02</option>
                                                <option value=\"3\">03</option>
                                                <option value=\"4\">04</option>
                                                <option value=\"5\">05</option>
                                                <option value=\"6\">06</option>
                                                <option value=\"7\">07</option>
                                                <option value=\"8\">08</option>
                                                <option value=\"9\">09</option>
                                                <option value=\"10\">10</option>
                                                <option value=\"11\">11</option>
                                                <option value=\"12\">12</option>
                                                <option value=\"13\">13</option>
                                                <option value=\"14\">14</option>
                                                <option value=\"15\">15</option>
                                                <option value=\"16\">16</option>
                                                <option value=\"17\">17</option>
                                                <option value=\"18\">18</option>
                                                <option value=\"19\">19</option>
                                                <option value=\"20\">20</option>
                                                <option value=\"21\">21</option>
                                                <option value=\"22\">22</option>
                                                <option value=\"23\">23</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"select__arrow\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t
\t\t<!-- Минута -->
\t\t<div class=\"grid__col-12 grid__col-md-4\">
\t\t\t<div class=\"grid__cell\">
\t\t\t\t<label for=\"minute__birth\" class=\"mform__label\">Минута:</label>
\t\t\t\t<div class=\"select mform__select\">
\t\t\t\t\t<select name=\"minute\" id=\"minute__birth\">
                                            <option value=\"0\">00</option>
                                            <option value=\"1\">1</option>
                                            <option value=\"2\">2</option>
                                            <option value=\"3\">3</option>
                                            <option value=\"4\">4</option>
                                            <option value=\"5\">5</option>
                                            <option value=\"6\">6</option>
                                            <option value=\"7\">7</option>
                                            <option value=\"8\">8</option>
                                            <option value=\"9\">9</option>
                                            <option value=\"10\">10</option>
                                            <option value=\"11\">11</option>
                                            <option value=\"12\">12</option>                                        
                                            <option value=\"13\">13</option>
                                            <option value=\"14\">14</option>
                                            <option value=\"15\">15</option>
                                            <option value=\"16\">16</option>
                                            <option value=\"17\">17</option>
                                            <option value=\"18\">18</option>
                                            <option value=\"19\">19</option>
                                            <option value=\"20\">20</option>
                                            <option value=\"21\">21</option>
                                            <option value=\"22\">22</option>
                                            <option value=\"23\">23</option>                                        
                                            <option value=\"24\">24</option>
                                            <option value=\"25\">25</option>
                                            <option value=\"26\">26</option>
                                            <option value=\"27\">27</option>
                                            <option value=\"28\">28</option>
                                            <option value=\"29\">29</option>
                                            <option value=\"30\">30</option>
                                            <option value=\"31\">31</option>
                                            <option value=\"32\">32</option>
                                            <option value=\"33\">33</option>
                                            <option value=\"34\">34</option>
                                            <option value=\"35\">35</option>
                                            <option value=\"36\">36</option>                                        
                                            <option value=\"37\">37</option>
                                            <option value=\"38\">38</option>
                                            <option value=\"39\">39</option>
                                            <option value=\"40\">40</option>
                                            <option value=\"41\">41</option>
                                            <option value=\"42\">42</option>
                                            <option value=\"43\">43</option>
                                            <option value=\"44\">44</option>
                                            <option value=\"45\">45</option>
                                            <option value=\"46\">46</option>
                                            <option value=\"47\">47</option>                                        
                                            <option value=\"48\">48</option>
                                            <option value=\"49\">49</option>
                                            <option value=\"50\">50</option>
                                            <option value=\"51\">51</option>
                                            <option value=\"52\">52</option>
                                            <option value=\"53\">53</option>
                                            <option value=\"54\">54</option>
                                            <option value=\"55\">55</option>
                                            <option value=\"56\">56</option>
                                            <option value=\"57\">57</option>                                        
                                            <option value=\"58\">58</option>
                                            <option value=\"59\">59</option>\t
                            </select>\t\t\t
\t\t\t\t\t<div class=\"select__arrow\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t
\t</div>\t

\t<!-- 3 РЯД -->
\t<div class=\"grid maingrey-bg\">
\t\t<!-- СТРАНА -->
\t\t<div class=\"grid__col-12 grid__col-md-4\">
\t\t\t<div class=\"grid__cell\">
\t\t\t\t<label for=\"country__birth\" class=\"mform__label\">Страна:</label>
\t\t\t\t<div class=\"select mform__select\">
<select name=\"country\" id=\"country__birth\" onChange =\"mFormClick()\">
<option selected value=\"Россия\">Россия</option>
\t\t\t<option value=\"Вьетнам\">Вьетнам</option>
\t\t\t<option value=\"США\">США</option>  \t
\t\t</select>
\t\t\t\t\t<div class=\"select__arrow\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t
\t\t<!-- РЕГИОН -->
\t\t<div class=\"grid__col-12 grid__col-md-4\">
\t\t\t<div class=\"grid__cell\">
\t\t\t\t<label for=\"city__birth\" class=\"mform__label\">Регион:</label>
\t\t\t\t<div class=\"select mform__select\">
\t\t<select name=\"city\" id=\"city__birth\">
\t\t\t<option value=\"Barnaul\">Алтайский край</option>
\t\t\t<option value=\"Belogorsk\">Амурская область</option>
\t\t\t<option value=\"Arkhangelsk\">Архангельская область</option>
\t\t\t<option value=\"Astrakhan\">Астраханская область</option>
\t\t\t<option value=\"Belgorod\">Белгородская область</option>
\t\t\t<option value=\"Bryansk\">Брянская область</option>
\t\t\t<option value=\"Vladimir\">Владимирская область</option>
\t\t\t<option value=\"Volgograd\">Волгоградская область</option>
\t\t\t<option value=\"Vologda\">Вологодская область</option>
\t\t\t<option value=\"Voronezh\">Воронежская область</option>
\t\t\t<option value=\"Vladivostok\">Еврейская автономная область</option>
\t\t\t<option value=\"Chita\">Забайкальский край</option>
\t\t\t<option value=\"Ivanovo\">Ивановская область</option>
\t\t\t<option value=\"Irkutsk\">Иркутская область</option>
\t\t\t<option value=\"Kaliningrad\">Калининградская область</option>
\t\t\t<option value=\"Kaluga\">Калужская область</option>
\t\t\t<option value=\"Petropavlovsk\">Камчатский край</option>
\t\t\t<option value=\"Kemerovo\">Кемеровская область</option>
\t\t\t<option value=\"Kirov\">Кировская область</option>
\t\t\t<option value=\"Kostroma\">Костромская область</option>
\t\t\t<option value=\"Krasnodar\">Краснодарский край</option>
\t\t\t<option value=\"Krasnoyarsk\">Красноярский край</option>
\t\t\t<option value=\"Kurgan\">Курганская область</option>
\t\t\t<option value=\"Kursk\">Курская область</option>
\t\t\t<option value=\"Lipetsk\">Липецкая область</option>
\t\t\t<option value=\"Magadan\">Магаданская область</option>
\t\t\t<option value=\"Moscow\">Московская область</option>
\t\t\t<option value=\"Murmansk\">Мурманская область</option>
\t\t\t<option value=\"Amderma\">Ненецкий автономный округ</option>
\t\t\t<option value=\"Arzamas\">Нижегородская область</option>
\t\t\t<option value=\"Novgorod\">Новгородская область</option>
\t\t\t<option value=\"Novosibirsk\">Новосибирская область</option>
\t\t\t<option value=\"Omsk\">Омская область</option>
\t\t\t<option value=\"Orenburg\">Оренбургская область</option>
\t\t\t<option value=\"Orel\">Орловская область</option>
\t\t\t<option value=\"Penza\">Пензенская область</option>
\t\t\t<option value=\"Perm\">Пермский край</option>
\t\t\t<option value=\"Vladivostok\">Приморский край</option>
\t\t\t<option value=\"Pskov\">Псковская область</option>
\t\t\t<option value=\"Maykop\">Республика Адыгея</option>
\t\t\t<option value=\"Altay\">Республика Алтай</option>
\t\t\t<option value=\"Ufa\">Республика Башкортостан</option>
\t\t\t<option value=\"Ulan-Ude\">Республика Бурятия</option>
\t\t\t<option value=\"Makhachkala\">Республика Дагестан</option>
\t\t\t<option value=\"Nazran\">Республика Ингушетия</option>
\t\t\t<option value=\"Nalchik\">Республика Кабардино-Балкария</option>
\t\t\t<option value=\"Elista\">Республика Калмыкия</option>
\t\t\t<option value=\"Cherkessk\">Республика Карачаево-Черкессия</option>
\t\t\t<option value=\"Petrozavodsk\">Республика Карелия</option>
\t\t\t<option value=\"Syktyvkar\">Республика Коми</option>
\t\t\t<option value=\"Yoshkar-Ola\">Республика Марий Эл</option>
\t\t\t<option value=\"Saransk\">Республика Мордовия</option>
\t\t\t<option value=\"Yakutsk\">Республика Саха (Якутия)</option>
\t\t\t<option value=\"Vladikavkaz\">Республика Северная Осетия - Алания</option>
\t\t\t<option value=\"Kazan\">Республика Татарстан</option>
\t\t\t<option value=\"Kyzyl\">Республика Тыва (Тува)</option>
\t\t\t<option value=\"Izhevsk\">Республика Удмуртия</option>
\t\t\t<option value=\"Abakan\">Республика Хакасия</option>
\t\t\t<option value=\"Gudermes\">Республика Чечня</option>
\t\t\t<option value=\"Cheboksary\">Республика Чувашия</option>
\t\t\t<option value=\"Rostov-na-Donu\">Ростовская область</option>
\t\t\t<option value=\"Ryazan\">Рязанская область</option>
\t\t\t<option value=\"Samara\">Самарская область</option>
\t\t\t<option value=\"St. Petersburg\">Санкт-Петербург и Лен.Обл.</option>
\t\t\t<option value=\"Saratov\">Саратовская область</option>
\t\t\t<option value=\"Yuzhno-Sakhalinsk\">Сахалинская область</option>
\t\t\t<option value=\"Yekaterinburg\">Свердловская область</option>
\t\t\t<option value=\"Smolensk\">Смоленская область</option>\t\t\t\t
\t\t\t<option value=\"Stavropol\">Ставропольский край</option>\t\t\t\t
\t\t\t<option value=\"Tambov\">Тамбовская область</option>\t\t\t\t
\t\t\t<option value=\"Tver\">Тверская область</option>\t\t\t\t
\t\t\t<option value=\"Tomsk\">Томская область</option>\t\t\t\t
\t\t\t<option value=\"Tula\">Тульская область</option>\t\t\t\t
\t\t\t<option value=\"Tyumen\">Тюменская область</option>\t\t\t\t
\t\t\t<option value=\"Ulyanovsk\">Ульяновская область</option>\t\t\t\t
\t\t\t<option value=\"Khabarovsk\">Хабаровский край</option>\t\t\t\t
\t\t\t<option value=\"Khanty-Mansiysk\">Ханты-Мансийский автономный округ - Югра</option>\t\t\t\t
\t\t\t<option value=\"Chelyabinsk\">Челябинская область</option>\t\t\t\t
\t\t\t<option value=\"Anadyr\">Чукотский автономный округ</option>\t\t\t\t
\t\t\t<option value=\"Nadym\">Ямало-Ненецкий автономный округ</option>\t\t\t\t
\t\t\t<option value=\"Rybinsk\">Ярославская область </option>\t\t\t
\t\t</select>

\t\t<input type=\"hidden\" value=\"Russia\" name=\"country_en\">\t\t\t\t
\t\t\t\t\t<div class=\"select__arrow\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t
\t</div>
\t<div id = \"subbtn\">\t

<input onclick=\"mFormSub(); return false\" type=\"button\" class=\"btn btn-primary btn-red\" value=\"OK\"/>
<button class=\"btn btn-primary btn-ghost\" id=\"print_ravechart\" onclick=\"javascript:printDiv('mapresult')\">Распечатать рейв-карту</button>\t


</div>

</form>

<div id=\"mapresult\"></div>

</div>

";
    }

    public function getTemplateName()
    {
        return "/home/u312/domains/hdlife.center/public/plugins/karzuan/ravechart/components/myform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div id="mapgen">*/
/* 	<form name="mform" action="" method="post" id="mform">*/
/* 	<!-- 1 РЯД -->*/
/* 	<div class="grid maingrey-bg">*/
/* 		<!-- ДЕНЬ -->*/
/* 		<div class="grid__col-12 grid__col-md-4">*/
/* 			<div class="grid__cell">*/
/* 				<label for="day__birth" class="mform__label">День:</label>*/
/* 				<div class="select mform__select">*/
/* 				<select name="day" id="day__birth">			*/
/* */
/*                                                 <option value="01">01</option>*/
/*                                                 <option value="02">02</option>*/
/*                                                 <option value="03">03</option>*/
/*                                                 <option value="04">04</option>*/
/*                                                 <option value="05">05</option>*/
/*                                                 <option value="06">06</option>*/
/*                                                 <option value="07">07</option>*/
/*                                                 <option value="08">08</option>*/
/*                                                 <option value="09">09</option>*/
/*                                                 <option value="10">10</option>*/
/*                                                 <option value="11">11</option>*/
/*                                                 <option value="12">12</option>*/
/*                                                 <option value="13">13</option>*/
/*                                                 <option value="14">14</option>*/
/*                                                 <option value="15">15</option>*/
/*                                                 <option value="16">16</option>*/
/*                                                 <option value="17">17</option>*/
/*                                                 <option value="18">18</option>*/
/*                                                 <option value="19">19</option>*/
/*                                                 <option value="20">20</option>*/
/*                                                 <option value="21">21</option>*/
/*                                                 <option value="22">22</option>*/
/*                                                 <option value="23">23</option>*/
/*                                                 <option value="24">24</option>*/
/*                                                 <option value="25">25</option>*/
/*                                                 <option value="26">26</option>*/
/*                                                 <option value="27">27</option>*/
/*                                                 <option value="28">28</option>*/
/*                                                 <option value="29">29</option>*/
/*                                                 <option value="30">30</option>*/
/*                                                 <option value="31">31</option>*/
/* */
/* 			</select>*/
/* 					<div class="select__arrow"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>		*/
/* 		<!-- МЕСЯЦ -->*/
/* 		<div class="grid__col-12 grid__col-md-4">*/
/* 			<div class="grid__cell">*/
/* 				<label for="month__birth" class="mform__label">Месяц:</label>*/
/* 				<div class="select mform__select">*/
/* 			<select name="month" id="month__birth">				*/
/* */
/* 					<option selected value="1">Январь</option>	<option value="2">Февраль</option>	*/
/* 					<option value="3">Март</option>		<option value="4">Апрель</option>	<option value="5">Май</option>*/
/* 					<option value="6">Июнь</option>		<option value="7">Июль</option>		<option value="8">Август</option>*/
/* 					<option value="9">Сентябрь</option>		<option value="10">Октябрь</option>		<option value="11">Ноябрь</option>	*/
/* 					<option value="12">Декабрь</option>		*/
/* */
/* 			</select>*/
/* 					<div class="select__arrow"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>		*/
/* 		<!-- ГОД -->*/
/* 		<div class="grid__col-12 grid__col-md-4">*/
/* 			<div class="grid__cell">*/
/* 				<label for="year__birth" class="mform__label">Год:</label>*/
/* 				<div class="select mform__select">*/
/* 			<select name="year" id="year__birth">*/
/* 			<script>*/
/*             var myDate = new Date();*/
/*             var year = myDate.getFullYear();*/
/*             for(var i = 1900; i < year+1; i++){*/
/*             document.write('<option value="'+i+'">'+i+'</option>');*/
/*             }*/
/*             </script>*/
/* 			</select>*/
/* 					<div class="select__arrow"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>	*/
/* */
/* 	<!-- 2 РЯД -->*/
/* 	<div class="grid">*/
/* 		<!-- ЧАС -->*/
/* 		<div class="grid__col-12 grid__col-md-4">*/
/* 			<div class="grid__cell">*/
/* 				<label for="hour__birth" class="mform__label">Час:</label>*/
/* 				<div class="select mform__select">*/
/* 					<select name="hour" id="hour__birth">*/
/*                                             <option selected value="0">00</option>*/
/*                                                 <option value="1">01</option>*/
/*                                                 <option value="2">02</option>*/
/*                                                 <option value="3">03</option>*/
/*                                                 <option value="4">04</option>*/
/*                                                 <option value="5">05</option>*/
/*                                                 <option value="6">06</option>*/
/*                                                 <option value="7">07</option>*/
/*                                                 <option value="8">08</option>*/
/*                                                 <option value="9">09</option>*/
/*                                                 <option value="10">10</option>*/
/*                                                 <option value="11">11</option>*/
/*                                                 <option value="12">12</option>*/
/*                                                 <option value="13">13</option>*/
/*                                                 <option value="14">14</option>*/
/*                                                 <option value="15">15</option>*/
/*                                                 <option value="16">16</option>*/
/*                                                 <option value="17">17</option>*/
/*                                                 <option value="18">18</option>*/
/*                                                 <option value="19">19</option>*/
/*                                                 <option value="20">20</option>*/
/*                                                 <option value="21">21</option>*/
/*                                                 <option value="22">22</option>*/
/*                                                 <option value="23">23</option>*/
/* 								</select>*/
/* 					<div class="select__arrow"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>		*/
/* 		<!-- Минута -->*/
/* 		<div class="grid__col-12 grid__col-md-4">*/
/* 			<div class="grid__cell">*/
/* 				<label for="minute__birth" class="mform__label">Минута:</label>*/
/* 				<div class="select mform__select">*/
/* 					<select name="minute" id="minute__birth">*/
/*                                             <option value="0">00</option>*/
/*                                             <option value="1">1</option>*/
/*                                             <option value="2">2</option>*/
/*                                             <option value="3">3</option>*/
/*                                             <option value="4">4</option>*/
/*                                             <option value="5">5</option>*/
/*                                             <option value="6">6</option>*/
/*                                             <option value="7">7</option>*/
/*                                             <option value="8">8</option>*/
/*                                             <option value="9">9</option>*/
/*                                             <option value="10">10</option>*/
/*                                             <option value="11">11</option>*/
/*                                             <option value="12">12</option>                                        */
/*                                             <option value="13">13</option>*/
/*                                             <option value="14">14</option>*/
/*                                             <option value="15">15</option>*/
/*                                             <option value="16">16</option>*/
/*                                             <option value="17">17</option>*/
/*                                             <option value="18">18</option>*/
/*                                             <option value="19">19</option>*/
/*                                             <option value="20">20</option>*/
/*                                             <option value="21">21</option>*/
/*                                             <option value="22">22</option>*/
/*                                             <option value="23">23</option>                                        */
/*                                             <option value="24">24</option>*/
/*                                             <option value="25">25</option>*/
/*                                             <option value="26">26</option>*/
/*                                             <option value="27">27</option>*/
/*                                             <option value="28">28</option>*/
/*                                             <option value="29">29</option>*/
/*                                             <option value="30">30</option>*/
/*                                             <option value="31">31</option>*/
/*                                             <option value="32">32</option>*/
/*                                             <option value="33">33</option>*/
/*                                             <option value="34">34</option>*/
/*                                             <option value="35">35</option>*/
/*                                             <option value="36">36</option>                                        */
/*                                             <option value="37">37</option>*/
/*                                             <option value="38">38</option>*/
/*                                             <option value="39">39</option>*/
/*                                             <option value="40">40</option>*/
/*                                             <option value="41">41</option>*/
/*                                             <option value="42">42</option>*/
/*                                             <option value="43">43</option>*/
/*                                             <option value="44">44</option>*/
/*                                             <option value="45">45</option>*/
/*                                             <option value="46">46</option>*/
/*                                             <option value="47">47</option>                                        */
/*                                             <option value="48">48</option>*/
/*                                             <option value="49">49</option>*/
/*                                             <option value="50">50</option>*/
/*                                             <option value="51">51</option>*/
/*                                             <option value="52">52</option>*/
/*                                             <option value="53">53</option>*/
/*                                             <option value="54">54</option>*/
/*                                             <option value="55">55</option>*/
/*                                             <option value="56">56</option>*/
/*                                             <option value="57">57</option>                                        */
/*                                             <option value="58">58</option>*/
/*                                             <option value="59">59</option>	*/
/*                             </select>			*/
/* 					<div class="select__arrow"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>		*/
/* 	</div>	*/
/* */
/* 	<!-- 3 РЯД -->*/
/* 	<div class="grid maingrey-bg">*/
/* 		<!-- СТРАНА -->*/
/* 		<div class="grid__col-12 grid__col-md-4">*/
/* 			<div class="grid__cell">*/
/* 				<label for="country__birth" class="mform__label">Страна:</label>*/
/* 				<div class="select mform__select">*/
/* <select name="country" id="country__birth" onChange ="mFormClick()">*/
/* <option selected value="Россия">Россия</option>*/
/* 			<option value="Вьетнам">Вьетнам</option>*/
/* 			<option value="США">США</option>  	*/
/* 		</select>*/
/* 					<div class="select__arrow"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>		*/
/* 		<!-- РЕГИОН -->*/
/* 		<div class="grid__col-12 grid__col-md-4">*/
/* 			<div class="grid__cell">*/
/* 				<label for="city__birth" class="mform__label">Регион:</label>*/
/* 				<div class="select mform__select">*/
/* 		<select name="city" id="city__birth">*/
/* 			<option value="Barnaul">Алтайский край</option>*/
/* 			<option value="Belogorsk">Амурская область</option>*/
/* 			<option value="Arkhangelsk">Архангельская область</option>*/
/* 			<option value="Astrakhan">Астраханская область</option>*/
/* 			<option value="Belgorod">Белгородская область</option>*/
/* 			<option value="Bryansk">Брянская область</option>*/
/* 			<option value="Vladimir">Владимирская область</option>*/
/* 			<option value="Volgograd">Волгоградская область</option>*/
/* 			<option value="Vologda">Вологодская область</option>*/
/* 			<option value="Voronezh">Воронежская область</option>*/
/* 			<option value="Vladivostok">Еврейская автономная область</option>*/
/* 			<option value="Chita">Забайкальский край</option>*/
/* 			<option value="Ivanovo">Ивановская область</option>*/
/* 			<option value="Irkutsk">Иркутская область</option>*/
/* 			<option value="Kaliningrad">Калининградская область</option>*/
/* 			<option value="Kaluga">Калужская область</option>*/
/* 			<option value="Petropavlovsk">Камчатский край</option>*/
/* 			<option value="Kemerovo">Кемеровская область</option>*/
/* 			<option value="Kirov">Кировская область</option>*/
/* 			<option value="Kostroma">Костромская область</option>*/
/* 			<option value="Krasnodar">Краснодарский край</option>*/
/* 			<option value="Krasnoyarsk">Красноярский край</option>*/
/* 			<option value="Kurgan">Курганская область</option>*/
/* 			<option value="Kursk">Курская область</option>*/
/* 			<option value="Lipetsk">Липецкая область</option>*/
/* 			<option value="Magadan">Магаданская область</option>*/
/* 			<option value="Moscow">Московская область</option>*/
/* 			<option value="Murmansk">Мурманская область</option>*/
/* 			<option value="Amderma">Ненецкий автономный округ</option>*/
/* 			<option value="Arzamas">Нижегородская область</option>*/
/* 			<option value="Novgorod">Новгородская область</option>*/
/* 			<option value="Novosibirsk">Новосибирская область</option>*/
/* 			<option value="Omsk">Омская область</option>*/
/* 			<option value="Orenburg">Оренбургская область</option>*/
/* 			<option value="Orel">Орловская область</option>*/
/* 			<option value="Penza">Пензенская область</option>*/
/* 			<option value="Perm">Пермский край</option>*/
/* 			<option value="Vladivostok">Приморский край</option>*/
/* 			<option value="Pskov">Псковская область</option>*/
/* 			<option value="Maykop">Республика Адыгея</option>*/
/* 			<option value="Altay">Республика Алтай</option>*/
/* 			<option value="Ufa">Республика Башкортостан</option>*/
/* 			<option value="Ulan-Ude">Республика Бурятия</option>*/
/* 			<option value="Makhachkala">Республика Дагестан</option>*/
/* 			<option value="Nazran">Республика Ингушетия</option>*/
/* 			<option value="Nalchik">Республика Кабардино-Балкария</option>*/
/* 			<option value="Elista">Республика Калмыкия</option>*/
/* 			<option value="Cherkessk">Республика Карачаево-Черкессия</option>*/
/* 			<option value="Petrozavodsk">Республика Карелия</option>*/
/* 			<option value="Syktyvkar">Республика Коми</option>*/
/* 			<option value="Yoshkar-Ola">Республика Марий Эл</option>*/
/* 			<option value="Saransk">Республика Мордовия</option>*/
/* 			<option value="Yakutsk">Республика Саха (Якутия)</option>*/
/* 			<option value="Vladikavkaz">Республика Северная Осетия - Алания</option>*/
/* 			<option value="Kazan">Республика Татарстан</option>*/
/* 			<option value="Kyzyl">Республика Тыва (Тува)</option>*/
/* 			<option value="Izhevsk">Республика Удмуртия</option>*/
/* 			<option value="Abakan">Республика Хакасия</option>*/
/* 			<option value="Gudermes">Республика Чечня</option>*/
/* 			<option value="Cheboksary">Республика Чувашия</option>*/
/* 			<option value="Rostov-na-Donu">Ростовская область</option>*/
/* 			<option value="Ryazan">Рязанская область</option>*/
/* 			<option value="Samara">Самарская область</option>*/
/* 			<option value="St. Petersburg">Санкт-Петербург и Лен.Обл.</option>*/
/* 			<option value="Saratov">Саратовская область</option>*/
/* 			<option value="Yuzhno-Sakhalinsk">Сахалинская область</option>*/
/* 			<option value="Yekaterinburg">Свердловская область</option>*/
/* 			<option value="Smolensk">Смоленская область</option>				*/
/* 			<option value="Stavropol">Ставропольский край</option>				*/
/* 			<option value="Tambov">Тамбовская область</option>				*/
/* 			<option value="Tver">Тверская область</option>				*/
/* 			<option value="Tomsk">Томская область</option>				*/
/* 			<option value="Tula">Тульская область</option>				*/
/* 			<option value="Tyumen">Тюменская область</option>				*/
/* 			<option value="Ulyanovsk">Ульяновская область</option>				*/
/* 			<option value="Khabarovsk">Хабаровский край</option>				*/
/* 			<option value="Khanty-Mansiysk">Ханты-Мансийский автономный округ - Югра</option>				*/
/* 			<option value="Chelyabinsk">Челябинская область</option>				*/
/* 			<option value="Anadyr">Чукотский автономный округ</option>				*/
/* 			<option value="Nadym">Ямало-Ненецкий автономный округ</option>				*/
/* 			<option value="Rybinsk">Ярославская область </option>			*/
/* 		</select>*/
/* */
/* 		<input type="hidden" value="Russia" name="country_en">				*/
/* 					<div class="select__arrow"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>		*/
/* 	</div>*/
/* 	<div id = "subbtn">	*/
/* */
/* <input onclick="mFormSub(); return false" type="button" class="btn btn-primary btn-red" value="OK"/>*/
/* <button class="btn btn-primary btn-ghost" id="print_ravechart" onclick="javascript:printDiv('mapresult')">Распечатать рейв-карту</button>	*/
/* */
/* */
/* </div>*/
/* */
/* </form>*/
/* */
/* <div id="mapresult"></div>*/
/* */
/* </div>*/
/* */
/* */
