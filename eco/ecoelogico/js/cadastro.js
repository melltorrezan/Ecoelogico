document.querySelector("#confsenha").addEventListener('blur', ()=>{
      let senha = document.getElementById("senha").value;
      let confsenha = document.getElementById("confsenha").value;

      if (senha==confsenha) {
         document.querySelector("#btn-cadastro").disabled=false;
      }
      else{
  
        document.querySelector("#btn-cadastro").disabled=true;
      };

});


document.querySelector("#confsenhae").addEventListener('blur', ()=>{
  let senhae = document.getElementById("senhae").value;
  let confsenhae = document.getElementById("confsenhae").value;

  if (senhae==confsenhae) {
     document.querySelector("#btn-cadastroe").disabled=false;
  }
  else{

    document.querySelector("#btn-cadastroe").disabled=true;
  };

});