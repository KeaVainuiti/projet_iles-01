<?php

    require('connexion.php');

    $req_listIles = "SELECT * from iles" ; //$sql : contient la requete sql 
    $res_listIles = $connect_bdd->query($req_listIles); //$result : execute la requete $sql

    // ILES
    echo '<select id="select_listIles">';
        foreach ($res_listIles as $value) {
            
            echo '<option value="'.$value["name"].'">';
                echo $value["name"];    
            echo '</option>';

        }

    echo '</select>';

    echo '<div id="affiche">';

    echo '</div>';
?>

<!-- TITRE -->
<title>Nos îles et nos ville</title>

<!-- JVSCRIPT -->
<script src="jquery.js"></script>
<script language="javascript">

    $(document).ready(function(){

        //3 évènement (TAHITI,HAWAII,HUAHINE)
        $("#select_listIles").on("change", function(){
            jsIles = $("#select_listIles").val();
            getIles(jsIles);
        })

    });

    // ILES
    function getIles(jsIles){

        $.ajax({
            type: 'post',
            url: 'ajax.php',
            data: {
                'getIles': jsIles
            },
            datatype: 'json',
            success: function(data)  {
                data = JSON.parse(data);
                $('#affiche').empty();
                $('#affiche').append('<select id="Choisir_ville"></select>');
                $.each(data.iles,function(idx,el){
                    
                    $('#Choisir_ville').append('<option value="">'+el+'</option>');

                })
            }

        });
    }

</script>
