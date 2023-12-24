var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

// function changeWennako(){
//   var checkbox = document.getElementById('vehicle1');
//   var hiddenForm = document.getElementById('hiddenForm');

//   console.log(checkbox.checked)

//   if (checkbox.checked) {
//       hiddenForm.style.display = 'block';
//   } else {
//       hiddenForm.style.display = 'none';
//   }

// }

var select = document.getElementById("selectDistrict");
var options = ['Colombo', 'Kandy', 'Galle', 'Ampara', 'Anuradhapura', 'Badulla', 'Batticaloa', 'Gampaha', 'Hambantota', 'Jaffna', 'Kalutara', 'Kegalle', 'Kilinochchi', 'Kurunegala', 'Mannar', 'Matale', 'Matara', 'Moneragala', 'Mullativu', 'Nuwara Eliya', 'Polonnaruwa', 'Puttalam', 'Ratnapura', 'Trincomalee', 'Vavuniya'];
var townsByDistrict = {
  
  'Colombo' :['Angoda',
              'Athurugiriya',
              'Avissawella',
              'Battaramulla',
              'Boralesgamuwa',
              'Colombo 01',
              'Colombo 02',
              'Colombo 03',
              'Colombo 04',
              'Colombo 05',
              'Colombo 06',
              'Colombo 06',
              'Colombo 07',
              'Colombo 08',
              'Colombo 09',
              'Colombo 10',
              'Colombo 11',
              'Colombo 12',
              'Colombo 13',
              'Colombo 14',
              'Colombo 15',
              'Dehiwala',
              'Hanwella',
              'Homagama',
              'Kaduwela',
              'Kesbewa',
              'Kohuwala',
              'Kolonnawa',
              'Kosgama',
              'Kottawa',
              'Kotte',
              'Maharagama',
              'Malabe',
              'Mount Lavinia',
              'Nawala',
              'Nugegoda',
              'Paddukka',
              'Pannipitiya',
              'Piliyandala',
              'Rajagiriya',
              'Ranala',
              'Ratmalana',
              'Talawathugoda',
              'Wellampitiya'],


  'Kandy' :['Akurana',
          'Alawatugoda',
          'Ambatenna',
          'Ampitiya',
          'Daskara',
          'Daulagala',
          'Delthota',
          'Digana',
          'Galagedara',
          'Galhinna',
          'Gampola',
          'Gelioya',
          'Hanguranketa',
          'Hapugastalawa',
          'Harispattuwa',
          'Hatharaliyadda',
          'Kadugannawa',
          'Kadugannawa UC',
          'Kandy',
          'Katugastota',
          'Kundasale',
          'Madawala',
          'Madawala Bazaar',
          'Menikdiwela',
          'Minipe',
          'Nawalapitiya',
          'Pallekele',
          'Panvila',
          'Pathadumbara',
          'Pathahewaheta',
          'Peradeniya',
          'Pilimatalawa',
          'Poojapitiya',
          'Pussellawa',
          'Talatuoya',
          'Teldeniya',
          'Thumpane',
          'Udapalatha',
          'Ududumbara',
          'Udunuwara',
          'Ulapane',
          'Watadeniya',
          'Wattegama',
          'Welamboda',
          'Yatinuwara'],


  'Galle' :['Ahangama',
                'Ahungalla',
                'Ambalangoda',
                'Baddegama',
                'Balapitiya',
                'Batapola',
                'Bentota',
                'Boossa',
                'Elpitiya',
                'Galle',
                'Habaraduwa',
                'Hikkaduwa',
                'Hiniduma',
                'Imaduwa',
                'Karandeniya',
                'Karapitiya',
                'Koggala',
                'Kosgoda',
                'Mapalagama',
                'Nagoda',
                'Neluwa',
                'Pitigala',
                'Rathgama',
                'Thawalama',
                'Udugama',
                'Uragasmanhandiya',
                'Wanduramba',
                'Yakkalamulla'],


  'Ampara':['Addalaichchenai',
            'Akkarepattu',
            'Alayadivembu',
            'Ampara',
            'Damana',
            'Dehiattakandiya',
            'Irakkamam',
            'Kalmunai',
            'Karaitivu',
            'Lahugala',
            'Maha Oya',
            'Navithanveli',
            'Nintavur',
            'Padiyathalawa',
            'Pottuvil',
            'Sainthamaruthu',
            'Sammanthurai',
            'Uhana'],


  'Anuradhapura':['Anuradhapura',
                  'Bulnewa',
                  'Eppawala',
                  'Galenbindunuwewa',
                  'Galnewa',
                  'Ganewalpola',
                  'Habarana',
                  'Horowupotana',
                  'Ipalogama',
                  'Kahatagasdigiliya',
                  'Kebithigollewa',
                  'Kebitigollawa',
                  'Kekirawa',
                  'Konapathirawa',
                  'Konwewa',
                  'Madatugama',
                  'Mahailuppallama',
                  'Mahavilachchiya',
                  'Maradankadawala',
                  'Medawachchiya',
                  'Mihintale',
                  'Nochchiyagama',
                  'Padaviya',
                  'Palagala',
                  'Palugaswewa',
                  'Rajanganaya',
                  'Rambewa',
                  'Seeppukulama',
                  'Talawa',
                  'Tambuttegama',
                  'Thambuttegama',
                  'Thirappane',
                  'Yakalla'],
                  'Badulla':['Badulla',
                  'Bandarawela',
                  'Beragala',
                  'Diyatalawa',
                  'Ella',
                  'Haldummulla',
                  'Hali Ela',
                  'Haputale',
                  'Kandaketiya',
                  'Lunugala',
                  'Mahiyanganaya',
                  'Meegahakivula',
                  'Passara',
                  'tennapanguwa',
                  'Uva-Paranagama',
                  'Welimada',
                  'Wiyaluwa'],
  'Batticaloa':['Araiyampathy',
                'Batticaloa',
                'Chenkalady',
                'Eravur',
                'Kaluvanchikudy',
                'Kattankudy',
                'Kiran',
                'Kokkadichcholai',
                'Oddamavadi',
                'Pasikudah',
                'Vakarai',
                'Valaichchenai',
                'Vavunathivu',
                'Vellavely'],


  'Gampaha':['Attanagalla',
                'Biyagama',
                'Delgoda',
                'Divlapitiya',
                'Dompe',
                'Gampaha',
                'Ganemulla',
                'Ja-Ela',
                'Kadawatha',
                'Kandana',
                'Katana',
                'Katunayake',
                'Kelaniya',
                'Kiribathgoda',
                'Mahara',
                'Minuwangoda',
                'Mirigama',
                'Negombo',
                'Nittambuwa',
                'Ragama',
                'Veyangoda',
                'Wattala'],


  'Hambantota':['Ambalantota',
                'Angunukolapelessa',
                'Beliatta',
                'Hambantota',
                'Middeniya',
                'Tangalla',
                'Tissamaharama',
                'Walasmulla',
                'Weeraketiya'],


  'Jaffna':['Chankanai',
                'Chavakachcheri',
                'Jaffna',
                'Karainagar',
                'Karaveddy',
                'Kayts',
                'Kopay',
                'Maruthankerney',
                'Nallur',
                'Point Pedro',
                'Sandilipay',
                'Tellippalai',
                'Uduvil',
                'Velanai'],


  'Kalutara':['Agalawatta',
                'Aluthgama',
                'Baduraliya',
                'Bandaragama',
                'Beruwala',
                'Bulathsinhala',
                'Dodangoda',
                'Horana',
                'Ingiriya',
                'Kalutara',
                'Madurawela',
                'Matugama',
                'Millaniya',
                'Panadura',
                'Wadduwa',
                'Walallavita',],


  'Kegalle':['Ambepussa',
            'Amitirigala',
            'Aranayaka',
            'Bulathkohupitiya',
            'Dehiovita',
            'Deraniyagala',
            'Galigamuwa',
            'Hemmathagama',
            'Karawanella',
            'Kegalle',
            'Kitulgala',
            'Kotiyakumbura',
            'Mawanella',
            'Rambukkana',
            'Ruwanwella',
            'Thalgaspitiya',
            'Warakapola',
            'Yatiyantota'],


  'Kilinochchi':['Iranamadu',
                'Kandavalai',
                'Kilinochchi',
                'Pallai',
                'Paranthan',
                'Poonakary',
                'Velikkandal'],


  'Kurunegala':['Alawwa',
                'Bingiriya',
                'Dambadeniya',
                'Dandagamuwa',
                'Galgamuwa',
                'Giriulla',
                'Hettipola',
                'Hiripitiya',
                'Ibbagamuwa',
                'Katupotha',
                'Kuliyapitiya',
                'Kurunegala',
                'Maho',
                'Mawathagama',
                'Melsiripura',
                'Narammala',
                'Nikaweratiya',
                'pahamune',
                'Panagamuwa',
                'Pannala',
                'Pannawa',
                'Polgahawela',
                'Potuhera',
                'Ridigama',
                'Wariyapola',
                'Wawathagama',
                'Yapahuwa'],


  'Mannar':[ 'Adampan',
                'Chilawathurai',
                'Madhu',
                'Mannar',
                'Nanaddan'],


  'Matale':['Dambulla',
                'Elkaduwa',
                'Galewela',
                'Gammaduwa',
                'Inamaluwa',
                'Kaikawala',
                'Kibissa',
                'Laggala Pallegama',
                'Madawala Ulpotha',
                'Matale',
                'Nalanda',
                'Naula',
                'Palapathwela',
                'Pallepola',
                'Rattota',
                'Sigiriya',
                'Ukuwela',
                'Wahacotte',
                'Yatawatta'],


  'Mullativu':['Ehatugaswewa',
                'Mullativu',
                'Oddusuddan',
                'Pandiyankulam',
                'Puthukkudiyiruppu',
                'Thunukkai',],


  'Matara':['Athuraliya',
                'Akuressa',
                'Aparekka',
                'Denipitiya',
                'Deniyaya',
                'Devinuwara',
                'Dikwella',
                'Gandara',
                'Hakmana',
                'Kamburugamuwa',
                'Kamburupitiya',
                'Karaputugala',
                'Kekanadura',
                'Kirinda',
                'Kotapola',
                'Malimbada',
                'Matara',
                'Mirissa',
                'Morawaka',
                'Mulatiyana',
                'Pasgoda',
                'Pitabeddara',
                'Puhuwella',
                'Thelijjawila',
                'Thihagoda',
                'Tihagoda',
                'Weligama',
                'Welihinda',
                'Welipitiya'],


  'Moneragala':['Badalkumbura',
                'Bibile',
                'Buttala',
                'Kataragama',
                'Madulla',
                'Medagama',
                'Moneragala',
                'Okkampitiya',
                'Sevanagala',
                'Siyambalanduwa',
                'Tanamalwila',
                'Wellawaya'],
                'Nuwara Eliya':[],
                'Polonnaruwa':['Aralaganwila',
                'Bakamuna',
                'Dimbulagala',
                'Elahera',
                'Galamuna',
                'Giritale',
                'Hingurakgoda',
                'Jayantipura',
                'Kaduruwela',
                'Lankapura',
                'Manampitiya',
                'Medirigiriya',
                'Minneriya',
                'Polonnaruwa',
                'Sungawila',
                'Welikanda'],


'Nuwara Eliya':['Agrapatana',
                  'Ambewela',
                  'Bogawantalawa',
                  'Bopattalawa',
                  'Dayagama',
                  'Ginigathena',
                  'Haggala',
                  'Hapugastalawa',
                  'Hatton',
                  'Kotagala',
                  'Kotmale',
                  'Labukele',
                  'Laxapana',
                  'Madulla',
                  'Maskeliya',
                  'Nanuoya',
                  'Nuwara Eliya',
                  'Padiyapelella',
                  'Ragala',
                  'Ramboda',
                  'Rozella',
                  'Talawakele',
                  'Udapussallawa',
                  'Walapane',
                  'Watawala'],


  'Puttalam':['Anamaduwa',
              'Battuluoya',
              'Chilaw',
              'Dankotuwa',
              'Eluvankulam',
              'Kalpitiya',
              'Madampe',
              'Mahawewa',
              'Marawila',
              'Mundel',
              'Nattandiya',
              'Nuraicholai',
              'Palavi',
              'Puttalam',
              'Thillaiyadi',
              'Wennappuwa'],


  'Ratnapura':['Ayagama',
                'Balangoda',
                'Eheliyagoda',
                'Elapatha',
                'Embilipitiya',
                'Godakawela',
                'Imbulpe',
                'Kahawatta',
                'Kalawana',
                'Kiriella',
                'Kolonne',
                'Kuruwita',
                'Nivitigala',
                'Opanayaka',
                'Panamure',
                'Pelmadulla',
                'Pelmadulla',
                'Pohorabawa',
                'Rakwana',
                'Ratnapura',
                'Weligepola'],


  'Trincomalee':['Gomarankadawala',
                  'Kantalai',
                  'Kinniya',
                  'Kuchchaveli',
                  'Morawewa',
                  'Muttur',
                  'Seruvila',
                  'Siripura',
                  'Thampalakamam',
                  'Trincomalee',
                  'Verugal'],


  'Vavuniya':['Vavuniya',
              'Nedunkeni',
              'Cheddikulam']

};


for(var i = 0; i < options.length; i++) {
    var opt = options[i];
    var el = document.createElement("option");
    el.textContent = opt;
    el.value = opt;
    select.appendChild(el);
}

function updateTown() {



    var select = document.getElementById("selectDistrict").value;
   
    selectTown.innerHTML = "";
    townsByDistrict[select].forEach(function(town) {
      
        var option = document.createElement("option");
        console.log(town)
        option.value = town;
        option.text = town;
        selectTown.add(option);
    });
  }




// const realFileBtn = document.getElementById("real-file");
// const customBtn = document.getElementById("custom-button");


// customBtn.addEventListener("click", function() {
//   realFileBtn.click();
// });

// realFileBtn.addEventListener("change", function() {
//   if (realFileBtn.value) {
//     customTxt.innerHTML = realFileBtn.value.match(
//       /[\/\\]([\w\d\s\.\-\(\)]+)$/
//     )[1];
//   } else {
//     customTxt.innerHTML = "No file chosen, yet.";
//   }
// });


