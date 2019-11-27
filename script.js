// On définit les différentes variables 
var nativePicker = document.querySelector('.nativeDateTimePicker');
var fallbackPicker = document.querySelector('.fallbackDateTimePicker');
var fallbackLabel = document.querySelector('.fallbackLabel');

var yearSelect = document.querySelector('#year');
var monthSelect = document.querySelector('#month');
var daySelect = document.querySelector('#day');
var hourSelect = document.querySelector('#hour');
var minuteSelect = document.querySelector('#minute');

// Initialement, on masque le sélecteur non-natif
fallbackPicker.style.display = 'none';
fallbackLabel.style.display = 'none';

// On teste si l'élément <input type="date">
// se transforme en <input type="text"> 
var test = document.createElement('input');
test.type = 'date';
// Si c'est le cas, cela signifie que l'élément
// n'est pas pris en charge et 
if(test.type === 'text') {
  // On masque le sélecteur natif et on affiche
  // le sélecteur avec les <select> 
  nativePicker.style.display = 'none';
  fallbackPicker.style.display = 'block';
  fallbackLabel.style.display = 'block';

  // On affiche les jours, années, heures
  // et minutes de façon dynamique 
  populateDays(monthSelect.value);
  populateYears();
  populateHours();
  populateMinutes();
}

function populateDays(month) {
  // On supprime les éléments <option> pour l'élément
  // <select> des jours afin de pouvoir ajouter les prochains
  while(daySelect.firstChild){
    daySelect.removeChild(daySelect.firstChild);
  }

  // On crée une variable afin de contenir le nombre
  // de jours à afficher
  var dayNum;

  // 31 ou 30 jours ?
  if(month === 'Janvier' || month === 'Mars' || month === 'Mai' || month === 'Juillet' || month === 'Août' || month === 'Octobre' || month === 'Décembre') {
    dayNum = 31;
  } else if(month === 'Avril' || month === 'Juin' || month === 'Septembre' || month === 'Novembre') {
    dayNum = 30;
  } else {
  // Si le mois est février, on calcule si l'année est bissextile
    var year = yearSelect.value;
    var leap = new Date(year, 1, 29).getMonth() == 1;
    leap ? dayNum = 29 : dayNum = 28;
  }

  // on ajoute le bon nombre de jours dans autant
  // d'éléments <option> pour l'élément <select>
  // pour la journée
  for(i = 1; i <= dayNum; i++) {
    var option = document.createElement('option');
    option.textContent = i;
    daySelect.appendChild(option);
  }

  // Si le jour précédent a déjà été défini on utilise
  // la valeur de ce jour pour daySelect afin d'éviter de
  // réinitialiser le jour lorsqu'on change l'année
  if(previousDay) {
    daySelect.value = previousDay;

    // Si le jour précédent correspond au dernier jour d'un mois
    // et que le mois sélectionné possède moins de jours (par 
    // exemple en février)
    if(daySelect.value === "") {
      daySelect.value = previousDay - 1;
    }

    if(daySelect.value === "") {
      daySelect.value = previousDay - 2;
    }

    if(daySelect.value === "") {
      daySelect.value = previousDay - 3;
    }
  }
}

function populateYears() {
  // On obtient l'année courante
  var date = new Date();
  var year = date.getFullYear();

  // On affiche l'année courante et les 100 années
  // précédentes pour l'élément <select> destiné à
  // stocker l'année
  for(var i = 0; i <= 100; i++) {
    var option = document.createElement('option');
    option.textContent = year-i;
    yearSelect.appendChild(option);
  }
}

function populateHours() {
  // on crée 24 valeurs pour l'élément <select> 
  // associé aux heures
  for(var i = 0; i <= 23; i++) {
    var option = document.createElement('option');
    option.textContent = (i < 10) ? ("0" + i) : i;
    hourSelect.appendChild(option);
  }
}

function populateMinutes() {
  // On crée 60 valeurs pour l'élément <select>
  // associé aux minutes
  for(var i = 0; i <= 59; i++) {
    var option = document.createElement('option');
    option.textContent = (i < 10) ? ("0" + i) : i;
    minuteSelect.appendChild(option);
  }
}

// Lorsque la valeur du mois ou de l'année est modifiée
// on relance populateDays() 
yearSelect.onchange = function() {
  populateDays(monthSelect.value);
}

monthSelect.onchange = function() {
  populateDays(monthSelect.value);
}

// On conserve le jour sélectionné 
var previousDay;

// On met à jour la journée utilisé précédemment
// (voir la fin de populateDays() pour voir où
// est utilisée cette valeur) 
daySelect.onchange = function() {
  previousDay = daySelect.value;
}