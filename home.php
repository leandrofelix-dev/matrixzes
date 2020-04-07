<div class="all">
<table>
    <tr>
        <td><?php echo($dodo1);?></td>
        <td><?php echo($dodo2);?></td>
        <td><?php echo($dodo3);?></td>
    </tr>
    <tr>
        <td><?php echo($dodo4);?></td>
        <td><?php echo($dodo5);?></td>
        <td><?php echo($dodo6);?></td>
    </tr>
    <tr>
        <td><?php echo($dodo7);?></td>
        <td><?php echo($dodo8);?></td>
        <td><?php echo($dodo9);?></td>
    </tr>
</table>

<p>Olá, <b><?php echo($saudacao);?> </b> Que tal calcular?</p>

    <input id="valor_do_usuario" type="number" name="valor_do_usuario" placeholder="INSIRA O VALOR DA DETERMINANTE"> <br>
    <button onclick="conferir_resultado()">CONFERIR RESULTADO</button>

<div class="msg">
<div><h2 id="det"><?php echo($det);?></h2></div>
</div>
</div>

<script type="text/javascript">
	
    function conferir_resultado(){
      var elements = document.getElementsByTagName(name["valor_do_usuario"]);
      var num = elements;
       console.log(num.value);
            
    }

</script>
