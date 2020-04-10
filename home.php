
<div class="all">
    <table>
        <tr>
            <td><?php echo($e1);?></td>
            <td><?php echo($e2);?></td>
            <td><?php echo($e3);?></td>
        </tr>
        <tr>
            <td><?php echo($e4);?></td>
            <td><?php echo($e5);?></td>
            <td><?php echo($e6);?></td>
        </tr>
        <tr>
            <td><?php echo($e7);?></td>
            <td><?php echo($e8);?></td>
            <td><?php echo($e9);?></td>
        </tr>
    </table>

<p> <b>Olá, <?php echo($saudacao);?> Vamos calcular?</b> </p>

    <div class="flex">
    <input id="valor_do_usuario" type="text" placeholder="INSIRA O VALOR DA DETERMINANTE">
        <div>
            <button onclick="verificar_resposta()">CONFERIR RESULTADO</button>
        </div>
    </div>
</div>
<script>
    var valor_det = <?php echo($det);?>;
    console.log(valor_det);
</script>