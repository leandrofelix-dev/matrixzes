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
    <form action="" method="POST" autocomplete="off">
        <input type="number" placeholder="INSIRA AQUI O VALOR" name="valor">
    </form>
<div class="msg">

<button onclick="mostrar_det()">CONFERIR RESULTADO</button>
<div><h2 id="det"><?php echo($det);?></h2></div>
</div>
</div>
