// functions to toggle the color and colors of the adv and dis buttons
function advToggle(value) {
    if (value == "false") {
        document.getElementById("advClass").innerHTML = `
        <button value="true" onclick="advToggle(this.value)" style="background-color: green;">Adv.</button>
        `
    } else {
        document.getElementById("advClass").innerHTML = `
        <button value="false" onclick="advToggle(this.value)">Adv.</button>
        `
    }
}
function disToggle(value) {
    if (value == "false") {
        document.getElementById("disClass").innerHTML = `
        <button value="true" onclick="disToggle(this.value)" style="background-color: green;">Dis.</button>
        `
    } else {
        document.getElementById("disClass").innerHTML = `
        <button value="false" onclick="disToggle(this.value)">Dis.</button>
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