<!DOCTYPE html>
<html>
<head>
    <title>Aggiungi Opera</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" >
</head>
<body>
    
<main class="container">



    <h1>Aggiungi Opera</h1>

   <form action="index.php?action=store" method="POST">
        <div class="form-group">
            <label for="titolo">Titolo:</label>
            <input type="text" name="titolo" required>
        </div>
        
        <div class="form-group">
            <label for="anno">Anno:</label>
            <input type="number" name="anno" required>
        </div>
        
        <div class="form-group">
            <label for="stato">Stato:</label>
            <select name="stato">
                <option value="ottimo">Ottimo</option>
                <option value="discreto">Discreto</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="paese">Paese di destinazione:</label>
            <input type="text" name="paese" required> 
        </div>
        
        <div class="form-actions">
            
            <button type="submit" class="btn btn-primary">Salva</button>
        </div>
    </form>
    
    <p><a href="index.php">Torna alla lista delle opere</a></p>

</main>
</body>
</html>
