var getJSON = function(url, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.responseType = 'json';
    xhr.onload = function() {
      var status = xhr.status;
      if (status === 200) {
        callback(null, xhr.response);
      } else {
        callback(status, xhr.response);
      }
    };
    xhr.send();
};

var map = L.map('map').setView([51.505, -0.09], 13);

getJSON('https://api.jcdecaux.com/vls/v3/stations?contract=toulouse&apiKey=73d009546a4358a0a18c62926b721b0014936ad8',
function(err, data) {
  if (err !== null) {
    console.log(err);
  } else {
    console.log(data);

    data.forEach(element => {
        let bikes = element.totalStands.availabilities.bikes;
        let stands = element.totalStands.availabilities.stands  ;
        let mechanicalBikes = element.totalStands.availabilities.mechanicalBikes;
        let electricalBikes = element.totalStands.availabilities.electricalBikes;
        let electricalInternalBatteryBikes = element.totalStands.availabilities.electricalInternalBatteryBikes;
        let electricalRemovableBatteryBikes = element.totalStands.availabilities.electricalRemovableBatteryBikes;
        L.marker([element.position.latitude, element.position.longitude]).addTo(map).bindPopup( `liste des vélo dispo : <br>bikes:${bikes}<br>stands:${stands}<br>mechanicalBikes:${mechanicalBikes}<br>electricalBikes:${electricalBikes}<br>electricalInternalBatteryBikes:${electricalInternalBatteryBikes}<br>electricalRemovableBatteryBikes:${electricalRemovableBatteryBikes}<br>`).openPopup();
    });
    
  }
});

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

