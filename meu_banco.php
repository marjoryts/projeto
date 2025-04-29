<?php 

try {
    $banco = new PDO('sqlite:meu_banco.db');
    $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    $sql = "SELECT name FROM sqlite_master WHERE type = 'table'";

    $stmt = $banco->query($sql);
    $tables = $stmt->fetchAll(PDO::FETCH_ASSOC); 

    foreach ($tables as $table) {
        echo $table['name'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();  
}

?>