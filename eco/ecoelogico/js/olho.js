
document.querySelector('#btn1').addEventListener('click', ()=>{
    let senha=document.getElementById('senha');
    document.getElementById('btn1').style.display='none';
    document.getElementById('btn2').style.display='inline';
    

    if(senha.type=='password'){
        senha.type='text';
    } 
});

    document.querySelector('#btn2').addEventListener('click', ()=>{
        let senha=document.getElementById('senha');
        if(senha.type=='text'){

            senha.type='password';
            document.getElementById('btn1').style.display='inline';
            document.getElementById('btn2').style.display='none';
        }
    });


/* ----------------------------------------------------------- */


    document.querySelector('#btn1').addEventListener('click', ()=>{
        let senha=document.getElementById('confsenha');
        document.getElementById('btn1').style.display='none';
        document.getElementById('btn2').style.display='inline';
        
    
        if(senha.type=='password'){
            senha.type='text';
        } 
    });
    
        document.querySelector('#btn2').addEventListener('click', ()=>{
            let senha=document.getElementById('confsenha');
            if(senha.type=='text'){
    
                senha.type='password';
                document.getElementById('btn1').style.display='inline';
                document.getElementById('btn2').style.display='none';
            }
        });


        /* ---------------------------------------------------------------------------------------------------------------------------- */


        
document.querySelector('#btn3').addEventListener('click', ()=>{
    let senha=document.getElementById('senhae');
    document.getElementById('btn3').style.display='none';
    document.getElementById('btn4').style.display='inline';
    

    if(senha.type=='password'){
        senha.type='text';
    } 
});

    document.querySelector('#btn4').addEventListener('click', ()=>{
        let senha=document.getElementById('senhae');
        if(senha.type=='text'){

            senha.type='password';
            document.getElementById('btn3').style.display='inline';
            document.getElementById('btn4').style.display='none';
        }
    });


/* ----------------------------------------------------------- */


    document.querySelector('#btn3').addEventListener('click', ()=>{
        let senha=document.getElementById('confsenhae');
        document.getElementById('btn3').style.display='none';
        document.getElementById('btn4').style.display='inline';
        
    
        if(senha.type=='password'){
            senha.type='text';
        } 
    });
    
        document.querySelector('#btn4').addEventListener('click', ()=>{
            let senha=document.getElementById('confsenhae');
            if(senha.type=='text'){
    
                senha.type='password';
                document.getElementById('btn3').style.display='inline';
                document.getElementById('btn4').style.display='none';
            }
        });