const malebox = document.getElementById("maleradio")
const femalebox = document.getElementById("femaleradio")

const nom = document.getElementById("name")
const names = document.getElementById("namespan")

const prenom = document.getElementById("prenom")
const prenames = document.getElementById("prenamespan")

function checking(){

  checkname();
  checkprename();

}
function checkname(){
  if(nom.value.length < 3){
    names.style.display='inline'
  }
  else{
    names.style.display='none'
  }
}

function checkprename(){
  if(prenom.value.length < 3){
    prenames.style.display='inline'
  }
  else{
    prenames.style.display='none'
  }
}
