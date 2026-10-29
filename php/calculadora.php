<?php
/**
 * Calculadora normal — interfaz clásica, cálculo en PHP.
 */
$pageTitle = 'Calculadora';
$activePage = 'calculadora';
$basePath = '../';

$display = '0';
$error = '';

function formatear($n)
{
    if (!is_finite($n)) {
        return 'Error';
    }
    $texto = rtrim(rtrim(number_format((float) $n, 10, '.', ''), '0'), '.');
    return $texto === '' ? '0' : $texto;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = isset($_POST['a']) ? trim((string) $_POST['a']) : '';
    $b = isset($_POST['b']) ? trim((string) $_POST['b']) : '';
    $op = isset($_POST['op']) ? (string) $_POST['op'] : '';

    if (!is_numeric($a) || !is_numeric($b) || $op === '') {
        $error = 'Error';
        $display = 'Error';
    } else {
        $x = (float) $a;
        $y = (float) $b;

        switch ($op) {
            case '+':
                $display = formatear($x + $y);
                break;
            case '-':
                $display = formatear($x - $y);
                break;
            case '*':
                $display = formatear($x * $y);
                break;
            case '/':
                if ($y == 0.0) {
                    $error = 'No se puede dividir entre 0';
                    $display = 'Error';
                } else {
                    $display = formatear($x / $y);
                }
                break;
            default:
                $display = 'Error';
                $error = 'Operación inválida';
        }
    }
}

include __DIR__ . '/../includes/header.php';
?>

<section class="calc-page">
    <div class="container calc-layout">
        <div class="calc-info">
            <h1 class="calc-title">Calculadora</h1>
            <p class="calc-lead">
                Calculadora simple de la tarea. Sirve para sumar, restar, multiplicar y dividir.
                Cuando pulsas <strong>=</strong>, el cálculo lo hace PHP.
            </p>

            <h2 class="calc-info-title">Cómo usarla</h2>
            <ol class="calc-steps">
                <li>Pon el primer número.</li>
                <li>Elige <strong>+</strong>, <strong>−</strong>, <strong>×</strong> o <strong>÷</strong>.</li>
                <li>Pon el segundo número.</li>
                <li>Dale a <strong>=</strong> y verás el resultado.</li>
            </ol>

            <h2 class="calc-info-title">Otros botones</h2>
            <ul class="calc-help">
                <li><strong>AC</strong> limpia todo.</li>
                <li><strong>±</strong> cambia de positivo a negativo.</li>
                <li><strong>%</strong> pasa el número a porcentaje.</li>
                <li><strong>.</strong> sirve para decimales, por ejemplo 3.5.</li>
            </ul>

            <p class="calc-note">
                Si divides para 0 te va a salir error. También puedes escribir con el teclado de la PC.
            </p>

            <a class="btn btn-ghost calc-back" href="../index.php">← Volver al inicio</a>
        </div>

        <div class="calc-wrap">
            <div class="calculator" id="calculator">
                <div class="calculator-display" aria-live="polite">
                    <span class="calculator-expr" id="calcExpr"></span>
                    <span class="calculator-value" id="calcDisplay"><?php echo htmlspecialchars($display); ?></span>
                </div>

                <div class="calculator-keys">
                    <button type="button" class="key key-fn" data-action="clear">AC</button>
                    <button type="button" class="key key-fn" data-action="sign">±</button>
                    <button type="button" class="key key-fn" data-action="percent">%</button>
                    <button type="button" class="key key-op" data-op="/">÷</button>

                    <button type="button" class="key" data-num="7">7</button>
                    <button type="button" class="key" data-num="8">8</button>
                    <button type="button" class="key" data-num="9">9</button>
                    <button type="button" class="key key-op" data-op="*">×</button>

                    <button type="button" class="key" data-num="4">4</button>
                    <button type="button" class="key" data-num="5">5</button>
                    <button type="button" class="key" data-num="6">6</button>
                    <button type="button" class="key key-op" data-op="-">−</button>

                    <button type="button" class="key" data-num="1">1</button>
                    <button type="button" class="key" data-num="2">2</button>
                    <button type="button" class="key" data-num="3">3</button>
                    <button type="button" class="key key-op" data-op="+">+</button>

                    <button type="button" class="key key-zero" data-num="0">0</button>
                    <button type="button" class="key" data-action="dot">.</button>
                    <button type="button" class="key key-eq" data-action="equals">=</button>
                </div>
            </div>

            <form id="calcForm" method="post" action="" class="calc-php-form" hidden>
                <input type="hidden" name="a" id="fieldA">
                <input type="hidden" name="b" id="fieldB">
                <input type="hidden" name="op" id="fieldOp">
            </form>
        </div>
    </div>
</section>

<script>
(function () {
    var displayEl = document.getElementById('calcDisplay');
    var exprEl = document.getElementById('calcExpr');
    var form = document.getElementById('calcForm');
    var fieldA = document.getElementById('fieldA');
    var fieldB = document.getElementById('fieldB');
    var fieldOp = document.getElementById('fieldOp');

    var current = <?php echo json_encode($display === 'Error' ? '0' : $display); ?>;
    var previous = null;
    var operator = null;
    var resetNext = <?php echo $display !== '0' && $display !== 'Error' ? 'true' : 'false'; ?>;
    var phpError = <?php echo json_encode($error); ?>;

    if (phpError) {
        exprEl.textContent = phpError;
    }

    function show(value) {
        displayEl.textContent = value;
    }

    function showExpr() {
        if (previous !== null && operator) {
            var symbol = { '+': '+', '-': '−', '*': '×', '/': '÷' }[operator] || operator;
            exprEl.textContent = previous + ' ' + symbol;
        } else {
            exprEl.textContent = '';
        }
    }

    function inputDigit(d) {
        if (resetNext || current === '0' || current === 'Error') {
            current = d;
            resetNext = false;
        } else {
            if (current.length >= 14) return;
            current += d;
        }
        show(current);
    }

    function inputDot() {
        if (resetNext || current === 'Error') {
            current = '0.';
            resetNext = false;
        } else if (current.indexOf('.') === -1) {
            current += '.';
        }
        show(current);
    }

    function clearAll() {
        current = '0';
        previous = null;
        operator = null;
        resetNext = false;
        exprEl.textContent = '';
        show(current);
    }

    function toggleSign() {
        if (current === 'Error' || current === '0') return;
        current = current.charAt(0) === '-' ? current.slice(1) : '-' + current;
        show(current);
    }

    function percent() {
        var n = parseFloat(current);
        if (isNaN(n)) return;
        current = String(+(n / 100).toPrecision(12));
        show(current);
    }

    function setOperator(op) {
        if (previous !== null && operator && !resetNext) {
            // Encadena: calcula en PHP el parcial anterior
            fieldA.value = previous;
            fieldB.value = current;
            fieldOp.value = operator;
            // Guardamos el nuevo operador en sessionStorage para después del reload
            sessionStorage.setItem('calcPendingOp', op);
            form.submit();
            return;
        }
        previous = current;
        operator = op;
        resetNext = true;
        showExpr();
    }

    function equals() {
        if (previous === null || !operator) return;
        fieldA.value = previous;
        fieldB.value = current;
        fieldOp.value = operator;
        sessionStorage.removeItem('calcPendingOp');
        form.submit();
    }

    // Si venimos de un cálculo encadenado, aplicar el operador pendiente
    var pending = sessionStorage.getItem('calcPendingOp');
    if (pending && displayEl.textContent !== 'Error') {
        sessionStorage.removeItem('calcPendingOp');
        previous = displayEl.textContent;
        current = displayEl.textContent;
        operator = pending;
        resetNext = true;
        showExpr();
    } else if (displayEl.textContent !== '0' && displayEl.textContent !== 'Error' && !phpError) {
        previous = null;
        operator = null;
        resetNext = true;
    }

    document.querySelector('.calculator-keys').addEventListener('click', function (e) {
        var btn = e.target.closest('button');
        if (!btn) return;

        if (btn.dataset.num !== undefined) {
            inputDigit(btn.dataset.num);
            return;
        }
        if (btn.dataset.op) {
            setOperator(btn.dataset.op);
            return;
        }
        switch (btn.dataset.action) {
            case 'clear': clearAll(); break;
            case 'sign': toggleSign(); break;
            case 'percent': percent(); break;
            case 'dot': inputDot(); break;
            case 'equals': equals(); break;
        }
    });

    document.addEventListener('keydown', function (e) {
        if (e.key >= '0' && e.key <= '9') inputDigit(e.key);
        else if (e.key === '.') inputDot();
        else if (e.key === '+') setOperator('+');
        else if (e.key === '-') setOperator('-');
        else if (e.key === '*') setOperator('*');
        else if (e.key === '/') { e.preventDefault(); setOperator('/'); }
        else if (e.key === 'Enter' || e.key === '=') { e.preventDefault(); equals(); }
        else if (e.key === 'Escape') clearAll();
        else if (e.key === '%') percent();
    });
})();
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
