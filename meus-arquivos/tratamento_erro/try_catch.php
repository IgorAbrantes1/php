<div class="title">Try/Catch</div>

<?php

try {
    echo intdiv(7, 0);
} catch (Error $e) {
    echo 'Error: ' . $e->getMessage() . '<br>';
}

try {
    throw new Exception('DIVISÃO POR ZERO CABEÇUDO');
    echo intdiv(7, 0);
} catch (DivisionByZeroError $e) {
    echo 'Error: DIVISÃO POR ZERO<br>';
    // echo 'Error: ' . $e->getMessage() . '<br>';
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . '<br>';
} finally {
    echo 'Sempre executado!<br>';
}

echo 'Execução continua... <br>';

?>
