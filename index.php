<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
    <title>Document</title>
</head>
<body>
    
<main>
    <input type="text" placeholder="1d20+5" id="rollInput">
    
    <div class="grid">
        <button value="7" onclick="addValue(this.value)">7</button>
        <button value="8" onclick="addValue(this.value)">8</button>
        <button value="9" onclick="addValue(this.value)">9</button>
        <button value="Del" onclick="minusValue(this.value)">&#9003</button>

        <button value="4" onclick="addValue(this.value)">4</button>
        <button value="5" onclick="addValue(this.value)">5</button>
        <button value="6" onclick="addValue(this.value)">6</button>
        <button value="-" onclick="addValue(this.value)">-</button>

        <button value="1" onclick="addValue(this.value)">1</button>
        <button value="2" onclick="addValue(this.value)">2</button>
        <button value="3" onclick="addValue(this.value)">3</button>
        <button value="+" onclick="addValue(this.value)">+</button>

        <div id="advClass" class="advClass">
            <button value="false" onclick="advToggle(this.value)" id="advData">Adv.</button>
        </div>
        <button value="0" onclick="addValue(this.value)">0</button>
        <div id="disClass" class="disClass">
            <button value="false" onclick="disToggle(this.value)" id="disData">Dis.</button>
        </div>
        <button class="disClass" value="d" onclick="addValue(this.value)">d</button>

        <button type="submit" value="roll" class="rollButton" onclick="rollCall()">Roll</button>
    </div>

</main>
</body>

</html>