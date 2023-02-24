// a  simple function that triggle
function hello(){
    alert("welcome to my website");
}

// a simple function to add 2 numbers
function add(){
    document.write(5+6);
}


//change the background color of the page
function changelColor(whichColor,newColor){
    if (whichColor == "background"){
        document.body.style.backgroundColor = newColor;
    }
}

function BG_yellow()
{
document.body.style.backgroundColor = 0xFFFF00
}

function changeColor(){
    let color =document.getElementById('background').value;
    document.body.style.backgroundColor = color;
}

function changeColor(){
    let color =document.getElementById('fcolor').value;
    document.body.style.fcolor = fcolor;
}