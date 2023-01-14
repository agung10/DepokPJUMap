<script type="text/javascript" src="{{ asset('assets/landing/custom/geojson/kelurahan.js') }}"></script>

<script type="text/javascript">
	const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, Pemetaan Lampu PJU Kota Depok &copy; <a href="https://www.indonesia-geospasial.com/">Indonesia Geospasial</a>'
	});

	var customIcon = L.icon({ 
		iconUrl: "{{ asset('assets/lampp.png') }}",
		iconSize: [35, 50],
		iconAnchor: [12, 41],
		popupAnchor: [1, -34],
		shadowSize: [41, 41]
	});

	let marker = {};
	
	<?php foreach ($seluruh_kecamatan as $kecamatan_id => $nama_kecamatan) { ?>
		var coordinate_{{ $kecamatan_id }} = L.layerGroup();

		if ('{{ count($laporan->where('kecamatan_id', $kecamatan_id)) }}' > 0) {
			<?php foreach ($laporan->where('kecamatan_id', $kecamatan_id) as $key => $val) { ?>
				var gambar = '<div class="text-center"><a href="{{ asset('uploaded_files/laporan/'.$val->gambar) }}" target="_blank"><img class="mb-1" src="{{ asset('uploaded_files/laporan/'.$val->gambar) }}" style="background-size: contain; width: 100px; height: 100px; background-repeat: no-repeat;"></a></div>';
				var deskripsi = '<p class="text-center my-0">{{ $val->deskripsi }}</p>';
				var alamat = '<p class="mt-1"><b>Alamat:</b> <br/> {{ $val->detail_alamat }}</p>';
				var kategori = '<p class="mb-1"><b>Kategori Pengajuan:</b> <br/> <code>{{ $val->kategori }}</code></p>';

				var status = '';
				if ('{{ $val->status }}' == 1) {
					status = '<span><b>Status Laporan:</b></span> <br/> <span class="status-laporan" style="background-color: #6c757d;">Diterima</span>';
				} else if ('{{ $val->status }}' == 2) {
					status = '<span><b>Status Laporan:</b></span> <br/> <span class="status-laporan" style="background-color: #28a745;">Diteruskan</span>';
				} else {
					status = '<span><b>Status Laporan:</b></span> <br/> <span class="status-laporan" style="background-color: #dc3545;">Ditolak</span>';
				}

				var keterangan = '';
				if ('{{ $val->status }}' == 3) {
					keterangan = '<p class="my-1"><b>Keterangan:</b> <br/> {{ $val->keterangan }}</p>'
				}

				marker = new L.marker(['{{ $val->latitude }}', '{{ $val->longitude }}'], {icon: customIcon})
				.bindPopup(`<h4 class="text-center" style="color: #4B56D2;"><b>Data Laporan</b></h4> <hr class="mt-0"> ${gambar} ${deskripsi} <br> ${kategori} ${status} <br/> ${keterangan} ${alamat}`)
				.addTo(coordinate_{{ $kecamatan_id }});
			<?php } ?>
		};
	<?php } ?>
	

	const map = new L.map('map', {
		center: [-6.385589, 106.830711],
		zoom: 12,
		layers: [
			osm, 
			<?php foreach ($seluruh_kecamatan as $kecamatan_id => $nama_kecamatan) { ?>
				coordinate_{{ $kecamatan_id }},
			<?php } ?>
		]
	});

	// control that shows state info on hover
	const info = L.control();

	info.onAdd = function (map) {
		this._div = L.DomUtil.create('div', 'info');
		this.update();
		return this._div;
	};

	info.update = function (props) {
		var total_laporan_kecamatan = '';
		var total_laporan_kelurahan = '';
		<?php foreach ($seluruh_kecamatan as $kecamatan_id => $nama_kecamatan) { ?>
			if (props) {
				if (`${props.WADMKC}` == '{{ $nama_kecamatan }}') {
					total_laporan_kecamatan = '{{ count($laporan->where('kecamatan_id', $kecamatan_id)) }}';
				}
			}
		<?php } ?>

		<?php foreach ($seluruh_kelurahan as $kelurahan_id => $nama_kelurahan) { ?>
			if (props) {
				if (`${props.NAMOBJ}` == '{{ $nama_kelurahan }}') {
					total_laporan_kelurahan = '{{ count($laporan->where('kelurahan_id', $kelurahan_id)) }}';
				}
			}
		<?php } ?>

		const contents = props ? `<p class="mb-1"><b>Kelurahan ${props.NAMOBJ}</b> - Kecamatan ${props.WADMKC}</p> <span>${total_laporan_kelurahan} Laporan PJU/Kelurahan - ${total_laporan_kecamatan} Laporan PJU/Kecamatan</span>` : `Terdapat {{ count($laporan) }} Laporan PJU di Kota Depok`;
		this._div.innerHTML = `<h4>Pemetaan Laporan Lampu PJU</h4>${contents}`;
	};

	info.addTo(map);


    const mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>, Pemetaan Lampu PJU Kota Depok &copy; <a href="https://www.indonesia-geospasial.com/">Indonesia Geospasial</a>';
	const mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

	const streets = L.tileLayer(mbUrl, {id: 'mapbox/streets-v11', tileSize: 512, zoomOffset: -1, attribution: mbAttr});

    var baseLayers = {
        "OpenStreetMap": osm,
        "Mapbox Streets": streets
    };

    const overlays = {
		<?php foreach ($seluruh_kecamatan as $kecamatan_id => $nama_kecamatan) { ?>
			'{{ $nama_kecamatan }}': coordinate_{{ $kecamatan_id }},
		<?php } ?>
	};
    var layerControl = L.control.layers(baseLayers, overlays).addTo(map);

    const satellite = L.tileLayer(mbUrl, {id: 'mapbox/satellite-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr});
    layerControl.addBaseLayer(satellite, 'Satellite');
    // End Layer
    
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
			weight: 4,
			color: '#4B56D2',
			dashArray: '',
			fillOpacity: 0.7
		});

		layer.bringToFront();

		info.update(layer.feature.properties);
	}

	/* global statesData */
	const geojson = L.geoJson(statesData, {
		style,
		onEachFeature
	}).addTo(map);

	function resetHighlight(e) {
		geojson.resetStyle(e.target);
		info.update();
	}

	function zoomToFeature(e) {
		map.fitBounds(e.target.getBounds());
	}

	function onEachFeature(feature, layer) {
		layer.on({
			mouseover: highlightFeature,
			mouseout: resetHighlight,
			click: zoomToFeature
		});
	}

    // Legend
	const legend = L.control({position: 'bottomleft'});

	legend.onAdd = function (map) {

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

	legend.addTo(map);
</script>