<div class="why_me">
    <div class="why_me_block">
        <span class="box_name">Иван, Honda Accord</span>
        <p>Настоящий профессионал своего дела. Делал чистку форсунок. Работа была выполнена квалифицированно и оперативно. При этом получил исчерпывающие ответы на все свои вопросы. Рад, что попал на обслуживание к этому Мастеру.</div>
    <div class="why_me_block">
        <span class="box_name">Петр, Audi A6</span>
        <p>Квалифицированный мастер, знающий свое дело. Оперативно провел диагностику моего автомобиля, дал советы по эксплуатации. Спокойно и внимательно выслушивает клиента. Очень доволен.</div>
    <div class="why_me_block">
        <span class="box_name">Женя, Toyota Camry</span>
        <p>Диагностику сделал на высшем уровне. Мастер своего дела, а как человек, то очень адекватен. Приятно обслуживаться у таких мастеров.
    </div>
    <div class="why_me_block">
        <span class="box_name">Руслан, Renault Kangoo</span>
        <p>Отличный автослесарь выполнил все на высшем уровне, внимательно выслушал все жалобы и пожелания по поводу машины, постоянно держал в курсе что делают с машиной в тот или иной момент, спрашивал, консультировал.</p>
    </div>
    <div class="why_me_block">
        <span class="box_name">    <?php
            $name_and_car = strip_tags($_POST['name_and_car'] ?? ' ');
            echo $name_and_car;
            ?></span>
        <p><?php
            $feedback = strip_tags($_POST['feedback'] ?? ' ');
            echo $feedback;
            ?></p>
    </div>
    <div class="why_me_block">
        <form method="POST">
            <p>Имя, авто: <input type="text" name="name_and_car" /></p>
            <p>Отзыв: <input type="text" name="feedback" /></p>
            <input type="submit" value="Отправить" class="btn">
        </form>
    </div>

</div>

