<!DOCTYPE html>
<html>
<head>
    <title>Aggiungi Libro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" >
</head>
<body>
    
<main class="container">



    <h1>Aggiungi un nuovo Libro</h1>

   <form action="index.php?action=store" method="POST">
        
        <div class="form-group">
            <label for="titolo">Titolo:</label>
            <input type="text" name="titolo" id="titolo" required>
        </div>
        
        <div class="form-group">
            <label for="autore">Autore:</label>
            <input type="text" name="autore" id="autore" required>
        </div>
        
        <div class="form-group">
            <label for="anno">Anno:</label>
            <input type="text" name="anno" id="anno" required>
        </div>

        <div class="form-group">
            <label for="anno">Stato:</label>
            <select type="text" name="stato" id="stato" required>
                <option value="1">Letto</option>
                <option value="2">Non Letto</option>
            </select>
        </div>
        
        <div class="form-actions">
            
            <button type="submit" class="btn btn-primary">Salva</button>
        </div>
    </form>
    
    <p><a href="index.php">Torna alla lista dei libri</a></p>

</main>
</body>
</html>
