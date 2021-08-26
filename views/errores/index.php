<!DOCTYPE html5>
<html lang="es">
<header>
   
    <title>Error</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
</header>    
   
<body>
   
    <?php require 'views/header.php'; ?>
    
    <div id="main">
        <h1 class="center error"><?php echo $this->mensaje ?></h1>
    </div>
    
    <?php require 'views/footer.php'; ?>
</body>
    
    
</html>