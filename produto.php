<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>NAMO.COM</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/estilos.css">
        <?php $cabecalho_css = 
        '<link rel="stylesheet" href="css/produto.css">'; ?>
        </head>
        <body>
          
          <form action="checkout.php" method="POST">
            
            <input type="hidden" name="nome" value="Fuzzy Cardigan">
            <input type="hidden" name="preco" value="129,00">
            
          </form>
          
        <?php $cabecalho_title = "Produto da Namo.com";
           include("cabecalho.php"); ?>
          
          <!-- conteúdo depois -->
          
          <?php include("rodape.php"); ?>
          
          
            </body>
            </html>