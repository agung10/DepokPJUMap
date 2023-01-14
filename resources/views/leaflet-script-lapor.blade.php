<script type="text/javascript">
    const map_lapor = L.map('map_lapor').setView([-6.385589, 106.830711], 12);

	L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, Pemetaan Lampu PJU Kota Depok &copy; <a href="https://www.indonesia-geospasial.com/">Indonesia Geospasial</a>'
	}).addTo(map_lapor);


	const info_lapor = L.control();

	info_lapor.onAdd = function (map_lapor) {
		this._div = L.DomUtil.create('div', 'info');
		this.update();
		return this._div;
	};

	info_lapor.update = function (props) {
		const contents = props ? `<b>Kelurahan ${props.NAMOBJ}</b> - Kecamatan ${props.WADMKC}` : 'Arahkan mouse untuk mengetahui wilayah';
		this._div.innerHTML = `<h4>Pemetaan Laporan Lampu PJU</h4>${contents}`;
	};

	info_lapor.addTo(map_lapor);
    
	function getColor(subdistrict) {
		return subdistrict == 'Beji' ? '#E5D9B6' :
			subdistrict == 'Bojongsari' ? '#A4BE7B' :
			subdistrict == 'Cilodong' ? '#5F8D4E' :
			subdistrict == 'Cimanggis' ? '#5F7161' :
			subdistrict == 'Cinere' ? '#AA8B56' :
			subdistrict == 'Cipayung' ? '#464E2E' :
			subdistrict == 'Limo' ? '#1C6758' :
			subdistrict == 'Pancoran Mas' ? '#224B0C' :
			subdistrict == 'Sawangan' ? '#809A6F' :
			subdistrict == 'Sukmajaya' ? '#74B49B' :
			subdistrict == 'Tapos' ? '#285430' : '#C5D8A4';
	}

	function style(feature) {
		return {
			weight: 2,
			opacity: 1,
			color: 'white',
			dashArray: '3',
			fillOpacity: 0.7,
			fillColor: getColor(feature.properties.WADMKC)
		};
	}

	function highlightFeature(e) {
		const layer = e.target;

		layer.setStyle({
			weight: 3,
			color: '#4B56D2',
			dashArray: '',
			fillOpacity: 0.7
		});

		layer.bringToFront();

		info_lapor.update(layer.feature.properties);
	}

	/* global statesData */
	const geojson_lapor = L.geoJson(statesData, {
		style,
		onEachFeature
	}).addTo(map_lapor);

	function resetHighlight(e) {
		geojson_lapor.resetStyle(e.target);
		info_lapor.update();
	}

	function onEachFeature(feature, layer) {
		layer.on({
			mouseover: highlightFeature,
			mouseout: resetHighlight
		});
	}

    // Legend
	const legend_lapor = L.control({position: 'bottomright'});

	legend_lapor.onAdd = function (map_lapor) {

		const div = L.DomUtil.create('div', 'info legend');
		const subdistricts = ['Beji', 'Bojongsari', 'Cilodong', 'Cimanggis', 'Cinere', 'Cipayung', 'Limo', 'Pancoran Mas', 'Sawangan', 'Sukmajaya', 'Tapos'];
		const labels = ['<strong>Kecamatan di Kota Depok</strong><br/>'];

		for (let i = 0; i < subdistricts.length; i++) {
			let subdistrict = subdistricts[i];

			labels.push(`<i style="background:${getColor(subdistrict)}"></i> ${subdistrict}`);
		}

		div.innerHTML = labels.join('<br>');
		return div;
	};

	legend_lapor.addTo(map_lapor);

	// OnClick
	let marker_laporan = {};
	
	const LeafIcon = L.Icon.extend({
		options: {
			// https://github.com/pointhi/leaflet-color-markers
			shadowUrl: "{{ asset(('assets/landing/custom/img/marker-shadow.png')) }}",
			iconSize: [25, 41],
			iconAnchor: [12, 41],
			popupAnchor: [1, -34],
			shadowSize: [41, 41]
		}
	});

	map_lapor.on('click', function (e) {
		let latitude = e.latlng.lat.toString().substring(0, 15);
		let longitude = e.latlng.lng.toString().substring(0, 15);

		let markerIcon = new LeafIcon({iconUrl: "{{ asset(('assets/landing/custom/img/marker-icon.png')) }}"});
		getLatLng(latitude, longitude, markerIcon);

		$('.marker-search-icon').addClass('d-none');
		$('.marker-search-shadow').addClass('d-none');
	});

	const search = new GeoSearch.GeoSearchControl({
		provider: new GeoSearch.OpenStreetMapProvider(),
		style: 'bar',
		searchLabel: 'Masukkan lokasi yang ingin dicari',
		showPopup: true,
		marker: { draggable: false },
		popupFormat: ({ query, result }) => `Latitude: ${result.y.toString()} <br/> Longitude: ${result.x.toString()}`,
	});
	map_lapor.addControl(search);

	function searchEventHandler(result) {
		let latitude = result.location.y.toString().substring(0, 15);
		let longitude = result.location.x.toString().substring(0, 15);

		let markerIcon = new LeafIcon({iconUrl: "https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png"});
		getLatLng(latitude, longitude, markerIcon);

		$('.leaflet-pane img.leaflet-marker-icon').addClass('marker-search-icon');
		$('.leaflet-pane img.leaflet-marker-shadow').addClass('marker-search-shadow');
		$('.marker-search-icon').removeClass('d-none');
		$('.marker-search-shadow').removeClass('d-none');
	}
	map_lapor.on('geosearch/showlocation', searchEventHandler);

	// getLatLng
	function getLatLng(latitude, longitude, markerIcon) {
		if (marker_laporan != undefined) { map_lapor.removeLayer(marker_laporan); };
		
		marker_laporan = new L.Marker([latitude, longitude], {icon: markerIcon}, {draggable:true}).addTo(map_lapor);
		marker_laporan.bindPopup(`Latitude: ${latitude} <br/> Longitude: ${longitude}`).openPopup();

		$('#latitude').val(latitude);
		$('#longitude').val(longitude);
	};
	// $('.leaflet-control-geosearch a.reset').on('click', function (e) {});
</script>