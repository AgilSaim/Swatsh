mapboxgl.accessToken = 'pk.eyJ1IjoiemNocyIsImEiOiJjbDM4ZnNieDQwMGt4M2RscjIyN2ppcncyIn0.3gXvKAUHjNQscl10hGZkfQ';

navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
    enableHighAccuracy: true
})

function successLocation(position) {
    setupMap([position.coords.longitude, position.coords.latitude])
}

function errorLocation() {}

function setupMap(center) {
    const map = new mapboxgl.Map({
        container: "map",
        style: "mapbox://styles/mapbox/streets-v11",
        center: center,
        zoom: 15
    });

    const nav = new mapboxgl.NavigationControl()
    map.addControl(nav)
}