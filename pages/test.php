<?php
$test = $tresorerie->getPaiementByUser(3)->fetch();
echo date('Y-m').' '.date_fr2($test['date_tresorerie']);