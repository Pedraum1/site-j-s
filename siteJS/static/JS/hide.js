const button = document.getElementById("switchBtn");
const filtro = document.getElementById("filter");
const pesquisa = document.getElementById("search");

pesquisa.style.display = 'none';
filtro.style.display = 'block';

button.addEventListener('click',event =>{
  console.log('click')

  if(filtro.style.display === 'none'){
    filtro.style.display = 'block';
    pesquisa.style.display = 'none';
  } else {
    filtro.style.display = 'none';
    pesquisa.style.display = 'block';
  }
});