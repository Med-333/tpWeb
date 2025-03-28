function formValidation(){
  const form = document.getElementById('form');

  let answer = true;

  for(let el of form.elements){
    if(el.tagName === "input"||el.tagName === "select"){
      if (el.type === 'submit' || el.type === 'button' ) continue;
      if(el.id === 'TVA'){
        continue;
      }
      if(el.value.trim()){
        answer = false;
        console.log('tataaa')
        break;
      }
    }
  }
}
