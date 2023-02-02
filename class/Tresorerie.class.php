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
    public function getAllLocataire(){
        $query = "SELECT * FROM locataire
          WHERE statut = 0 ORDER BY id_locataire DESC ";
        $rs = $this->bdd->query($query);
        return $rs;
    }


    // Verification valeur existant
    public function verifLocataire($propriete,$val){
        $query = "SELECT * FROM locataire WHERE $propriete = :val";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val" => $val
        ));
        return $rs;
    }









}

// Instance
$tresorerie = new Tresorerie();