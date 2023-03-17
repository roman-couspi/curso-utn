const features = document.getElementById('features')
const flechita = document.getElementById('flechita')
const visi = document.getElementById('visi')


const company = document.getElementById('company')
const flechita2 = document.getElementById('flechita2')
const visi2 = document.getElementById('visi2')

features.addEventListener('click', ()=>{
flechita.classList.toggle('rotate')
visi.classList.toggle('visibilidad')
})

company.addEventListener('click', ()=>{
flechita2.classList.toggle('rotate')
visi2.classList.toggle('visi')
 })