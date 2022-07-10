const username=document.getElementById('username');
const password=document.getElementById('password');
const form=document.getElementById('ffrom');

form.addEventListener('submit',(e) => {
    let message = []
    if (username.value === ''|| username.value== null){
        message.push('Nama Harus Diiisi');
    }
})