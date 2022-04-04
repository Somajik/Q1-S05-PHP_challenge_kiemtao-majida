<?php
require('data\mock.php');
require('data\users.php');
?>

<section>
    <?php
    foreach ($users as $auteur){?>
    <h2>\#kiemtao <a href="" class="addmessage"><span>+</span><em>ajouter&nbsp;un&nbsp;message</em></a></h2>
    <ul id="messages-list">
        <li class="message">
            <h3 title="Passions : animaux, réincarnation, teflon">><?=$auteur['name']?> </h3><?php }?>
            <?php
    foreach ($messages as $value){ ?>
            <p><?=$value['body']?></p>
            <h4 class="date">30/03/2022</h4>
        </li>
    </ul><?php }?>

    <!-- <h2>#kiemtao <a href="" class="addmessage"><span>+</span><em>ajouter&nbsp;un&nbsp;message</em></a></h2>
    <ul id="messages-list">
        <li class="message">
            <h3 title="Passions : animaux, réincarnation, teflon">Slobodan</h3>
            <p>Mais euuuh</p>
            <h4 class="date">30/03/2022</h4>
        </li>
    </ul>

    <h2>#kiemtao <a href="" class="addmessage"><span>+</span><em>ajouter&nbsp;un&nbsp;message</em></a></h2>
    <ul id="messages-list">
        <li class="message">
            <h3 title="Passions : animaux, réincarnation, teflon">Gustave</h3>
            <p>Help ! Faut absolument que je mette des paillettes dans sa vie</p>
            <h4 class="date">30/03/2022</h4>
        </li>
    </ul> -->

</section>



