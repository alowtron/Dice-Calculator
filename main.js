// functions to toggle the color and colors of the adv and dis buttons
function advToggle(value) {
    if (value == "false") {
        document.getElementById("advClass").innerHTML = `
        <button value="true" onclick="advToggle(this.value)" style="background-color: green;" id="advData">Adv.</button>
        `
    } else {
        document.getElementById("advClass").innerHTML = `
        <button value="false" onclick="advToggle(this.value)" id="advData">Adv.</button>
        `
    }
}
function disToggle(value) {
    if (value == "false") {
        document.getElementById("disClass").innerHTML = `
        <button value="true" onclick="disToggle(this.value)" style="background-color: green;" id="disData">Dis.</button>
        `
    } else {
        document.getElementById("disClass").innerHTML = `
        <button value="false" onclick="disToggle(this.value)" id="disData">Dis.</button>
        `
    }
}
//updates the input field when buttons are pressed
function addValue(value) {
    document.getElementById("rollInput").value += value
}
function minusValue() {
    document.getElementById("rollInput").value = document.getElementById("rollInput").value.slice(0, -1)
}

//submit the roll for processing
function rollCall() {
    let inputData = document.getElementById("rollInput").value
    let advData = document.getElementById("advData").value
    let disData = document.getElementById("disData").value
    let allData = new FormData()
    allData.append('inputData', inputData)
    allData.append('advData', advData)
    allData.append('disData', disData)
    fetch('roll.php', {
        method: 'POST',
        body: allData
    })
    .then(response => response.text())
    .then(processedData => {
        document.getElementById("rollInput").value = processedData
        console.log(processedData)
    })
    .catch(error => {
        console.log(error)
    })
}