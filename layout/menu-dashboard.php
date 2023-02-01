<?php
$n_b = $logement->getNblogementsByUser($_SESSION['_ccgim_201']['id_utilisateur'])->fetch();
?>
<div class="link">
    <a href="<?=$domaine?>/compte/dashboard" class="<?= dash_active('dashboard');?>">Tableau de bord</a>
</div>
<div class="link">
    <a href="<?=$domaine?>/logement/logements"  class="<?= dash_active('logements');?>"> <span class="w80">Mes logements</span> <span class="w20"><i class="nb-box" style="font-style: normal;"><?=$n_b['nb']?></i></span></a>
</div>
<div class="link">
    <a href="<?=$domaine?>/logement/locataires" class="<?= dash_active('locataires');?>"> <span class="w80">Mes locataires</span> <span class="w20"><i class="nb-box" style="font-style: normal;">01</i></span></a>
</div>
<div class="link">
    <a href="<?=$domaine?>/logement/tresorerie" class="<?= dash_active('tresorerie');?>">Trésorerie</a>
</div>