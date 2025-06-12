<!DOCTYPE html>
<html>
<head>
    <title>Modifica Opera</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" >
</head>
<body>
    
<main class="container">



    <h1>Modifica Opera</h1>

    <!-- 
    come action dovrei mettere: <form action="index.php?action=modifica&id=<?= $opera['id'] ?>" method="POST">

    Quando non metti l’attributo action nel form, il browser usa l'URL corrente per inviare il form — cioè, invia i dati alla stessa pagina da cui è stato caricato il form.

    Risultato: il controller riceve sia $_POST con i dati del form, sia $_GET['id'], e tutto funziona.

     -->

   <form  method="POST">
       
        <div class="form-group">
            <label for="titolo">Titolo:</label>
            <input type="text" name="titolo" value="<?= htmlspecialchars($opera['titolo']) ?>" required>
        </div>
        
        <div class="form-group">
            <label for="anno">Anno:</label>
            <input type="number" name="anno" value="<?= htmlspecialchars($opera['anno']) ?>" required>
        </div>
        
        <div class="form-group">
            <label for="stato">Stato:</label>
            <select name="stato">
                <option value="ottimo" <?= $opera['stato'] === 'ottimo' ? 'selected' : '' ?>>Ottimo</option>
                <option value="discreto" <?= $opera['stato'] === 'discreto' ? 'selected' : '' ?>>Discreto</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="paese">Paese:</label>
            <input type="text" name="paese" value="<?= htmlspecialchars($opera['paese']) ?>" required> 
        </div>




        
        <div class="form-actions">
            
            <button type="submit" class="btn btn-primary">Salva</button>
        </div>
    </form>
    
    <p><a href="index.php">Torna alla lista delle opere</a></p>

</main>
</body>
</html>
