<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <title>Teste</title>
    <form>
    <button class="ir">+</button>
    <button class="voltar">-</button>
    </form>

    <script>
        var x = 0
        console.log(document.getElementById("ir"));
        console.log(document.getElementById("mostrar"));
        document.getElementById("ir").onclick = function next(){
            x++;
            alert(x)}
        document.getElementById("voltar").onclick = function next(){
            x--;
            alert(x)}
    </script>
</head>
<body>
<?php $teste = "<script>document.write(x)</script>"; ?>
<h1><?php echo $teste; ?></h1>
<button id = "ir">Ir<button>
<button id="voltar">voltar</button>
</body>
</html>