<?php

/* /home/u312/domains/hdlife.center/public/themes/humandesignlife/pages/raschet-karty.htm */
class __TwigTemplate_5b2313ccf0c5292b08e0500dd36f8d670334ab8b7db803dfd2e6d15507c3b4c2 extends Twig_Template
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
        echo "<div class=\"container\">
<p>В этом разделе сайта вы можете <strong>бесплатно рассчитать свою рейв-карту</strong> по системе Дизайна Человека. Для того, чтобы построить свой бодиграф вам необходимо ввести свои данные: дату, время и место рождения и нажать кнопку \"ОК\".</p>
";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("ravechart"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "<p>Если вы новичок в системе Дизайна Человека, мы предлагаем ознакомиться с основными терминами, которые обозначены на вашем бодиграфе.</p>
<ol>
    <li><strong>Рейв-карта(Бодиграф)</strong> - это ваш уникальный генетический код, в котором изображена информация об устройстве и механике вашего тела.</li>
    <li><strong>Тип(всего 4)</strong> - это истинная природа человека, которая соответствует индивидуальной Стратегии движения по жизни.</li>
    <li><strong>Внутренний Авторитет</strong> - это очень прочный механизм внутри вашего тела, которому следует доверять в процессе принятия решений.</li>
    <li><strong>Нет внутреннего Авторитета</strong> - это бывает в двух случаях: 1). Вы являетесь Рефлектором 2). Вы являетесь Ментальным Проектором.</li>
    <li><strong>Профиль</strong> - это линии гексаграммы И-цзин, которые играют определенную, ролевую модель в вашей жизни.</li>
    <li><strong>Инкарнационный крест</strong> - это нечто, что является результатом движения по жизни, следуя своей Стратегии и Авторитета. Провляется примерно через 30 лет после корректного проживания своего дизайна.</li>
</ol>
<p class=\"typl8-delta\">Ответы на частые вопросы:</p>
<ul class=\"accordion\">
    <li>
        <span>Насколько важно знать точную дату рождения?</span>
        <div><p>Чем более точной информацией вы обладаете - тем точнее будет построена ваша рейв-карта. Практика показывает, что бодиграф почти или не сильно изменится, если вы неуверены в минутах своего рождения.</p></div>
    </li>
    <li>
        <span>Я незнаю время рождения?</span>
        <div>
            <p>В случае, если вы совсем незнаете времени рождения, то мы рекомендуем к астрологам за услугой \"ректификации\".</p>
        </div>
    </li>
    <li>
        <span>Как происходит построение бодиграфа?</span>
        <div><p>Расчет карты состоит из двух позиций:</br> 1).В черной колонке фиксириуется информация, сопоставленная из астрономических планетарных позиций с гексаграммами на Мандале и указание соответствующих в них линий в момент рождения(выхода плода из утроба матери) - это <strong>Личность</strong>, далее те же данные отсчитываются за 88-89 дней(когда Солнце стояло за 88 градусов) до рождения и вносятся в красную колонку - это <strong class=\"red\">Подсознание.</strong></br>2). Полученные данные накладываются на рейв-карту и формируют финальную картину. </p></div>
    </li>
</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/u312/domains/hdlife.center/public/themes/humandesignlife/pages/raschet-karty.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="container">*/
/* <p>В этом разделе сайта вы можете <strong>бесплатно рассчитать свою рейв-карту</strong> по системе Дизайна Человека. Для того, чтобы построить свой бодиграф вам необходимо ввести свои данные: дату, время и место рождения и нажать кнопку "ОК".</p>*/
/* {% component 'ravechart' %}*/
/* <p>Если вы новичок в системе Дизайна Человека, мы предлагаем ознакомиться с основными терминами, которые обозначены на вашем бодиграфе.</p>*/
/* <ol>*/
/*     <li><strong>Рейв-карта(Бодиграф)</strong> - это ваш уникальный генетический код, в котором изображена информация об устройстве и механике вашего тела.</li>*/
/*     <li><strong>Тип(всего 4)</strong> - это истинная природа человека, которая соответствует индивидуальной Стратегии движения по жизни.</li>*/
/*     <li><strong>Внутренний Авторитет</strong> - это очень прочный механизм внутри вашего тела, которому следует доверять в процессе принятия решений.</li>*/
/*     <li><strong>Нет внутреннего Авторитета</strong> - это бывает в двух случаях: 1). Вы являетесь Рефлектором 2). Вы являетесь Ментальным Проектором.</li>*/
/*     <li><strong>Профиль</strong> - это линии гексаграммы И-цзин, которые играют определенную, ролевую модель в вашей жизни.</li>*/
/*     <li><strong>Инкарнационный крест</strong> - это нечто, что является результатом движения по жизни, следуя своей Стратегии и Авторитета. Провляется примерно через 30 лет после корректного проживания своего дизайна.</li>*/
/* </ol>*/
/* <p class="typl8-delta">Ответы на частые вопросы:</p>*/
/* <ul class="accordion">*/
/*     <li>*/
/*         <span>Насколько важно знать точную дату рождения?</span>*/
/*         <div><p>Чем более точной информацией вы обладаете - тем точнее будет построена ваша рейв-карта. Практика показывает, что бодиграф почти или не сильно изменится, если вы неуверены в минутах своего рождения.</p></div>*/
/*     </li>*/
/*     <li>*/
/*         <span>Я незнаю время рождения?</span>*/
/*         <div>*/
/*             <p>В случае, если вы совсем незнаете времени рождения, то мы рекомендуем к астрологам за услугой "ректификации".</p>*/
/*         </div>*/
/*     </li>*/
/*     <li>*/
/*         <span>Как происходит построение бодиграфа?</span>*/
/*         <div><p>Расчет карты состоит из двух позиций:</br> 1).В черной колонке фиксириуется информация, сопоставленная из астрономических планетарных позиций с гексаграммами на Мандале и указание соответствующих в них линий в момент рождения(выхода плода из утроба матери) - это <strong>Личность</strong>, далее те же данные отсчитываются за 88-89 дней(когда Солнце стояло за 88 градусов) до рождения и вносятся в красную колонку - это <strong class="red">Подсознание.</strong></br>2). Полученные данные накладываются на рейв-карту и формируют финальную картину. </p></div>*/
/*     </li>*/
/* </ul>*/
/* </div>*/
