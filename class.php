<?php
include("connexion.php");

class iles {
    public function getCity($getIles){
        global $connect_bdd;
       
        $req_select = "SELECT v.name FROM `ile_ville` as iv join iles as i on iv.fk_ile = i.id join villes as v on iv.fk_ville = v.id WHERE i.name = '".$getIles."'";
        $res_select = $connect_bdd->query($req_select);
       
        foreach ($res_select as $value) {
            $island['iles'][] = $value['name'];
        }
        return json_encode($island);
    }
}