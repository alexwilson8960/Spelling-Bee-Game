<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Spelling Bee Game</title>
<style>
    body {
        font-family: Arial;
        text-align: center;
        background: #f4f4f4;
    }
    h1 {
        color: #333;
    }
    input {
        padding: 10px;
        width: 200px;
    }
    button {
        padding: 10px;
        margin-top: 10px;
    }
    #result {
        margin-top: 15px;
        font-weight: bold;
    }
</style>
</head>

<body>

<h1>Spelling Bee Game</h1>

<p>Make words using these letters:</p>
<h2 id="letters"></h2>

<input type="text" id="wordInput" placeholder="Enter word">
<br>
<button onclick="checkWord()">Submit</button>

<p id="result"></p>

<script>
const letters = "abcdefg";
const validWords = ["bad", "bed", "fed", "face", "cafe", "aged"];

document.getElementById("letters").innerText = letters;

function checkWord() {
    const word = document.getElementById("wordInput").value.toLowerCase();

    if (validWords.includes(word)) {
        document.getElementById("result").innerText = "Correct!";
    } else {
        document.getElementById("result").innerText = "Try again!";
    }
}
</script>

</body>
</html>