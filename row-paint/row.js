const d=document.getElementById("d")
const d1=document.getElementById("d1")
const d2=document.getElementById("d2")
const d3=document.getElementById("d3")
const d4=document.getElementById("d4")
const d5=document.getElementById("d5")
const d6=document.getElementById("d6")
const d7=document.getElementById("d7")
const d8=document.getElementById("d8")


d.addEventListener("click", onDClick)

function onDClick() {
    if (onDClick) {
    document.body.style.backgroundColor="black"    
    } else {
    document.body.style.backgroundColor="green"
    }
}