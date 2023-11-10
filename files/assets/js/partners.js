const allMembers = document.querySelectorAll('.members-top');
const allMemberPopups = document.querySelectorAll('.members-bottom');
const popUpClose = document.querySelectorAll('.popup-close');
const overlay = document.querySelector('.member-overlay')


allMembers.forEach(member => {
    member.addEventListener('click', event => {
        let memberPopUp = member.nextElementSibling;
        if (memberPopUp.style.display === "block") {
            memberPopUp.style.display = "none";
            overlay.style.display = 'none'
        } else {
            memberPopUp.style.display = "block";
            overlay.style.display = 'block'
        }
    });
});

popUpClose.forEach(close => {
    close.addEventListener('click', (event) => {
        event.preventDefault();
        allMemberPopups.forEach(memberPopUp => {
              memberPopUp.style.display = "none";
        })
        overlay.style.display = 'none'
    })
})

//Map
/*
const map = L.map('map').setView([51.351738, 12.4257344], 17);
const carte = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
});
carte.addTo(map)

/!*const marker = L.marker([51.351738, 12.4257344]).addTo(map);
const popUp = marker.bindPopup("<b>Permoserstraße 15</b><br>04318 Leipzig.").clickPopup();
popUp.addTo(map);*!/

const gravomer = L.marker([51.351738, 12.4257344]).bindPopup('This is Littleton, CO.'),
    micromac   = L.marker([50.8173474, 12.921595]).bindPopup('This is Denver, CO.'),
    schilling    = L.marker([39.73, -104.8]).bindPopup('This is Aurora, CO.'),
    achilles    = L.marker([39.77, -105.23]).bindPopup('This is Golden, CO.');

var cities = L.layerGroup([gravomer, micromac, schilling, achilles]);
cities.addTo(map)

*/
// Creating map options
var mapOptions = {
    center: [51.3398095, 12.3763205],
    zoom: 8
}
/*var map = new L.map('map', mapOptions); // Creating a map object*/

// Creating a Layer object
/*var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
map.addLayer(layer); */     // Adding layer to the map
/*
const carte = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 15,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
});
carte.addTo(map)


// Creating markers
var gravomer = new L.Marker([51.351738, 12.4257344]).bindPopup("<b>Permoserstraße 15</b><br>04318 Leipzig.");
var micromac = new L.Marker([50.8173474, 12.921595]).bindPopup("<b>Technologie-Campus 8</b><br>09126 Chemnitz.");
var schilling = new L.Marker([51.3083697, 10.846073]).bindPopup("<b>Mühlenweg 3</b><br>99706 Sondershausen.");


// Creating layer group
var layerGroup = L.layerGroup([gravomer, micromac, schilling]);
layerGroup.addTo(map);    // Adding layer group to map

const url = 'https://gravomer.de/api/v2/pages/?type=partner.PartnerPage&locale=de&fields=*&order=title';
console.log(url);
*/



/*//Filter

let radioTest = document.getElementById('test');
let radioTest1 = document.getElementById('test1');
let radioTest2 = document.getElementById('test2');
let radioTest3 = document.getElementById('test3');
let killTypeFilter = document.querySelector('.kill-filter');
let allPartners = document.getElementsByClassName('members');
let allPartners1 = document.querySelectorAll('.ce_rsce_my_member');
let eventRadio = document.getElementById('event-radio-form');

let allRadioTest = document.querySelectorAll('.test');
let allRadioTest1 = document.querySelectorAll('.test1');
let allRadioTest2 = document.querySelectorAll('.test2');
let allRadioTest3 = document.querySelectorAll('.test3');


function filter () {
    allPartners1.forEach(partner => {
        if (partner.classList.contains('radioChecked')) {
            partner.style.display = 'block';
        } else {
            partner.style.display = 'none';
        }
    })
}

function killFilter() {
    radioTest.checked = false;
    radioTest1.checked = false;
    radioTest2.checked = false;
    radioTest3.checked = false;
    allPartners1.forEach(partner => {
        partner.style.display = 'block';
        partner.classList.remove('radioChecked')
    })
    killTypeFilter.style.color = "#cecece";

}

eventRadio.addEventListener('click',() => {
    if(radioTest.checked) {
        allRadioTest.forEach(allTest => {
            allTest.classList.add('radioChecked')
            console.log(allTest);
        })
    } else {
        allRadioTest.forEach(allTest => {
            allTest.classList.remove('radioChecked')
        })
    }
    if(radioTest1.checked) {
        allRadioTest1.forEach(allTest1 => {
            allTest1.classList.add('radioChecked')
        })
    } else {
        allRadioTest1.forEach(allTest1 => {
            allTest1.classList.remove('radioChecked')
        })
    }
    if(radioTest2.checked) {
        allRadioTest2.forEach(allTest2 => {
            allTest2.classList.add('radioChecked')
        })
    } else {
        allRadioTest2.forEach(allTest2 => {
            allTest2.classList.remove('radioChecked')
        })
    }
    if(radioTest3.checked) {
        allRadioTest3.forEach(allTest3 => {
            allTest3.classList.add('radioChecked')
        })
    } else {
        allRadioTest3.forEach(allTest3 => {
            allTest3.classList.remove('radioChecked')
        })
    }
    if(!radioTest.checked && !radioTest1.checked && !radioTest2.checked && !radioTest3.checked) {
        allPartners1.forEach(partner => {
            partner.classList.add('radioChecked');
        })
        killTypeFilter.style.color = "#1c388f";
    } else {
        killTypeFilter.style.color = "#00aee5";
    }
    filter();
})*/



















