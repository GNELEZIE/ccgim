<?php
class Tresorerie
{

    public function __construct()
    {
        $this->bdd = bdd();
    }

    //Create

    public function addOperation($dateOperation,$idUser,$typeOp,$libelle,$debit,$credit){
        $query = "INSERT INTO tresorerie(date_tresorerie,user_id ,type_transac,libelle_transac,debit_transac,credit_transac)
            VALUES (:dateOperation,:idUser,:typeOp,:libelle,:debit,:credit)";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "dateOperation" => $dateOperation,
            "idUser" => $idUser,
            "typeOp" => $typeOp,
            "libelle" => $libelle,
            "debit" => $debit,
            "credit" => $credit
        ));

        $nb = $rs->rowCount();

        if($nb > 0){
            $r = $this->bdd->lastInsertId();
            return $r;
        }
    }


//Read

    public function getAllPaiement(){
        $query = "SELECT * FROM tresorerie
        INNER JOIN  locataire ON id_locataire  = user_id
        ORDER BY id_tresorerie DESC";
        $rs = $this->bdd->query($query);
        return $rs;
    }


//Count
    public function getSoldeTotal(){
        $query = "SELECT SUM(debit_transac) - SUM(credit_transac) as solde FROM tresorerie";
        $rs = $this->bdd->query($query);
        return $rs;
    }






}

// Instance
$tresorerie = new Tresorerie();