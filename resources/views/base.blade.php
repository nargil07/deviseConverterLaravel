<?php
/**
 *
 * $Author$
 * $Rev$
 * $Date$
 * $Id$
 * $HeadURL$
 *
 * Copyright (c) C.I.S.S - Tous droits réservés
 *
 */
?>
<html>
<head>
    <title>Converter</title>
</head>
<body>
<select id="from"></select>
<input type="number" id="valeur"/>
<select id="to"></select>
<input type="number" id="resultat"/>
<input id="convert" type="button" value="Convertir"/>
<script src="js/jquery-3.1.1.min.js"></script>
<script>
    $(document).ready(function () {
        $.ajax({
            url: "http://ardechetrottinette.com:8000/",
            dataType: "json",
            success: function (data) {
                var selectFrom = $("#from");
                var selectTo = $("#to");
                $(selectFrom).html("");
                $(selectTo).html("");
                data.forEach(function(value){
                    $(selectFrom).append("<option value='"+value.identifiant+"'>"+value.nom+"</option>")
                    $(selectTo).append("<option value='"+value.identifiant+"'>"+value.nom+"</option>")
                });
            }
        });

        var selectFrom = $("#from");
        var selectTo = $("#to");
        var inputValeur = $("#valeur");
        $("#convert").bind("click", function () {
            $.ajax({
                url: "http://ardechetrottinette.com:8000/"+$(selectFrom).val()+"/"+$(selectTo).val(),
                data: "value="+$(inputValeur).val(),
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    $("#resultat").val(data);
                }
            });
        });
    });
</script>
</body>
</html>
