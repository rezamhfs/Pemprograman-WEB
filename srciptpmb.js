const form = document.getElementById('form');
const nama = document.getElementById('nama');
const nik =  document.getElementById('nik');
const julur =  document.getElementById('jaur');
const jurusan1 =  document.getElementById('jurusan1');
const  jurusan2=  document.getElementById('jurusan2');
const  noHp=  document.getElementById('nohp');
const  sma=  document.getElementById('sma');
const  alamat=  document.getElementById('alamat');

function showError(input,message){
    const formControl = input.parentElement;
    formControl.className = 'form-control error';
    const small = formControl.querySelector('small');
    small.innerText = message;
}

function showSucces(input,message){
    const formControl = input.parentElement;
    formControl.className = 'form-control succes';
}

form.addEventListener('submit',function(e){
    e.preventDefault();

    if (nama.value === ''){
        showError(nama,'Nama Harus Diisi');
    }

    if (nik.value === ''){
        showError(nik,'NIK Harus Diisi');
    }
    

    if (email.value === ''){
        showError(email,'Email Harus Diisi');
    }
    else{
        showSucces(email);
    }
    if (jurusan1.value === ''){
        showError(jurusan1,'Jurusan1 Harus Diisi');
    }
    
    if (jurusan2.value === ''){
        showError(jurusan2,'Jurusan2 Harus Diisi');
    }
    
    if (noHp.value === ''){
        showError(noHp,'No HP Harus Diisi');
    }
    
    if (sma.value === ''){
        showError(sma,'Asal SMA Harus Diisi');
    }
   
    if (alamat.value === ''){
        showError(alamat,'Alamat Harus Diisi');
    }
   


}
)