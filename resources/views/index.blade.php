<!DOCTYPE HTML>
<html>
<body>
<form method="post" action="{{ route('calculator') }}">
    @csrf
    <div>
        <h2>Calculator</h2>
        <div>
            <input type="text"  size="15" name="number1" placeholder="number1"/>
            <input type="text" size="15" name="number2" placeholder="number2">
        </div>
        <div>
            <input type="submit" value="+" name="operator">Addition(+)</input>
            <input type="submit" value="-" name="operator">Subtraction(-)</input>
            <input type="submit" value="*" name="operator">Multiplication(x)</input>
            <input type="submit" value="/" name="operator">Division(/)</input>
        </div>
    </div>
</form>
<p>ket qua la: {{ isset($result) ? $result : ' ' }}</p>
</body>
</html>