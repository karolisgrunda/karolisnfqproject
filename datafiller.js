var moterys = Array('Eglė', 'Edita', 'Laura', 'Simona', 'Rūta', 'Justina', 'Viktorija', 'Miglė', 'Dalia', 'Erika', 'Aldona', 'Augustė', 'Ina', 'Kristina');
var vyrai = Array('Lukas', 'Karolis', 'Paulius', 'Olegas', 'Egidijus', 'Tautvydas', 'Justas', 'Julius', 'Giedrius', 'Jonas', 'Mantas', 'Vismantas', 'Augustas', 'Aironas', 'Rokas');
var komentaras = Array('Numesti svorio', 'Priaugti masės', 'Užsiauginti raumenų', 'Mitybos programos', 'Treniruočių programos', 'Piaugti svorio, išmokti daryti pratimus', 'Asmeninės mitybos programos');
var lytys = Array('MOTERIS', 'VYRAS');

function getRandomIntInclusive(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min; 
  };

function generatorius(){
    var gender = getRandomIntInclusive(0, 1);
    var genderName = lytys[gender];
    if (gender){
          var genderNum = getRandomIntInclusive(0, vyrai.length - 1);
          var name = vyrai[genderNum];
          var el = vyrai[genderNum] + '@gmail.com';
    } else {
          var genderNum = getRandomIntInclusive(0, moterys.length - 1);
          var name = moterys[genderNum];
          var el = moterys[genderNum] + '@gmail.com';
    }
    var comment = komentaras[getRandomIntInclusive(0, komentaras.length - 1)];
    var weight = getRandomIntInclusive(43,150);
    var height = getRandomIntInclusive(135, 215);
    var telefonas = '6' + getRandomIntInclusive(0,9) + getRandomIntInclusive(0,9) + getRandomIntInclusive(0,9) + getRandomIntInclusive(0,9) + getRandomIntInclusive(0,9) + getRandomIntInclusive(0,9) + getRandomIntInclusive(0,9); 

    var klientai = new Array(name, genderName, weight, height, telefonas, el, comment);
    return klientai;
        
};

   
