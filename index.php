
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="script.js"></script>

<div id="calculator">
    <div id="total">
    </div>
    <div id="operators">
        <a>+</a>
        <a>-</a>
        <a>/</a>
        <a>*</a>
        <a>^</a>
        <a id="clear">C</a>
    </div>
    <div id="numbers">
        <a>1</a>
        <a>2</a>
        <a>3</a>
        <a>4</a>
        <a>5</a>
        <a>6</a>
        <a>7</a>
        <a>8</a>
        <a>9</a>
        <a>0</a>
        <a>.</a>
        <a>-</a>
    </div>
    <button id="do_math" type="submit" form="calc_form" value="submit">Do Math</button>
</div>

<div id="final_result">
    <form id="total" action="calculate.php" method="get">
        Result
        <br>
        <input id="total" type="text" name="result" value="<?php echo $_GET['result'] ?>">
    </form>
</div>

<form action="calculate.php" method="post" id="calc_form">
    <input id="input_one" type="text" name="num_one">
    <br>
    <input id="input_two" type="text" name="op_one">
    <br>
    <input id="input_three" type="text" name="num_two">
    <br>
    <input id="input_four" type="text" name="op_two">
    <br>
    <input id="input_five" type="text" name="num_three">
    <br>
</form>

