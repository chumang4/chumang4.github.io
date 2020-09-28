const toolbarElement=document.getElementById("toolbar");
const rowContainerElement=document.getElementById("row-container");
const colors=["Green","Red","Blue","Purple","Black","Orange","Cyan","Brown"];
let selectedColorElement
const rowCount= 10
let i=0

colors.map(color=> {
    let colorElement=document.createElement("a");
    colorElement.href="#";
    colorElement.classList.add("color");
    colorElement.style.backgroundColor=color;
    colorElement.addEventListener("click",onSelectColor);
    toolbarElement.appendChild(colorElement);
});

function onSelectColor(e) {
e.preventDefault();
    if(selectedColorElement) {
        selectedColorElement.classList.remove('--selected');
    }
selectedColorElement= e.target;
selectedColorElement.classList.add("--selected")
}

    while (i < rowCount) {
        let row=document.createElement("div")
        rowContainerElement.appendChild(row)
        row.classList.add("row")
        row.addEventListener("click",onPaint)
        i++
    }

    

function onPaint(e){
    e.target.style.backgroundColor=selectedColorElement.style.backgroundColor;
}
