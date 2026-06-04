ol.proj.proj4.register(proj4);
//ol.proj.get("EPSG:32748").setExtent([661996.592734, 9253379.372407, 699932.096519, 9274251.318426]);
var wms_layers = [];


        var lyr_Google_0 = new ol.layer.Tile({
            'title': 'Google',
            'type':'base',
            'opacity': 1.000000,
            
            
            source: new ol.source.XYZ({
            attributions: ' &nbsp &middot; <a href="https://www.google.at/permissions/geoguidelines/attr-guide.html">Map data ©2015 Google</a>',
                url: 'https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}'
            })
        });
var format_Kecamatan_1 = new ol.format.GeoJSON();
var features_Kecamatan_1 = format_Kecamatan_1.readFeatures(json_Kecamatan_1, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:32748'});
var jsonSource_Kecamatan_1 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Kecamatan_1.addFeatures(features_Kecamatan_1);
var lyr_Kecamatan_1 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Kecamatan_1, 
                style: style_Kecamatan_1,
                popuplayertitle: 'Kecamatan',
                interactive: true,
    title: 'Kecamatan<br />\
    <img src="assets/peta/styles/legend/Kecamatan_1_0.png" /> LEUWILIANG<br />\
    <img src="assets/peta/styles/legend/Kecamatan_1_1.png" /> NANGGUNG<br />\
    <img src="assets/peta/styles/legend/Kecamatan_1_2.png" /> PAMIJAHAN<br />\
    <img src="assets/peta/styles/legend/Kecamatan_1_3.png" /> TAMANSARI<br />\
    <img src="assets/peta/styles/legend/Kecamatan_1_4.png" /> TENJOLAYA<br />' });
var format_KecukupanInformasiObjekWisata_2 = new ol.format.GeoJSON();
var features_KecukupanInformasiObjekWisata_2 = format_KecukupanInformasiObjekWisata_2.readFeatures(json_KecukupanInformasiObjekWisata_2, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:32748'});
var jsonSource_KecukupanInformasiObjekWisata_2 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_KecukupanInformasiObjekWisata_2.addFeatures(features_KecukupanInformasiObjekWisata_2);
var lyr_KecukupanInformasiObjekWisata_2 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_KecukupanInformasiObjekWisata_2, 
                style: style_KecukupanInformasiObjekWisata_2,
                popuplayertitle: 'Kecukupan Informasi Objek Wisata',
                interactive: true,
    title: 'Kecukupan Informasi Objek Wisata<br />\
    <img src="assets/peta/styles/legend/KecukupanInformasiObjekWisata_2_0.png" /> Lengkap, Rank 1 - 12<br />\
    <img src="assets/peta/styles/legend/KecukupanInformasiObjekWisata_2_1.png" /> Cukup Lengkap, Rank 13 - 24<br />\
    <img src="assets/peta/styles/legend/KecukupanInformasiObjekWisata_2_2.png" /> Kurang Lengkap, Rank 25 - 36<br />' });

lyr_Google_0.setVisible(true);lyr_Kecamatan_1.setVisible(true);lyr_KecukupanInformasiObjekWisata_2.setVisible(true);
var layersList = [lyr_Google_0,lyr_Kecamatan_1,lyr_KecukupanInformasiObjekWisata_2];
lyr_Kecamatan_1.set('fieldAliases', {'KECAMATAN': 'KECAMATAN', 'luaskec': 'luaskec', 'Foto': 'Foto', });
lyr_KecukupanInformasiObjekWisata_2.set('fieldAliases', {'X': 'X', 'Y': 'Y', 'Lokasi': 'Lokasi', 'Alamat': 'Alamat', 'Jenis Obje': 'Jenis Obje', 'Rating': 'Rating', 'Rute': 'Rute', 'Jarak dari': 'Jarak dari', 'Fasilitas': 'Fasilitas', 'Biaya (Rp)': 'Biaya (Rp)', 'Aktivitas': 'Aktivitas', 'Rating_1': 'Rating_1', 'Deskripsi': 'Deskripsi', 'Rating_2': 'Rating_2', 'Kelengkapa': 'Kelengkapa', 'Rating_3': 'Rating_3', 'Kebaharuan': 'Kebaharuan', 'Rating_4': 'Rating_4', 'Hasil Skor': 'Hasil Skor', 'RANK': 'RANK', 'Foto': 'Foto', });
lyr_Kecamatan_1.set('fieldImages', {'KECAMATAN': 'TextEdit', 'luaskec': 'TextEdit', 'Foto': 'ExternalResource', });
lyr_KecukupanInformasiObjekWisata_2.set('fieldImages', {'X': 'TextEdit', 'Y': 'TextEdit', 'Lokasi': 'TextEdit', 'Alamat': 'TextEdit', 'Jenis Obje': 'TextEdit', 'Rating': 'TextEdit', 'Rute': 'TextEdit', 'Jarak dari': 'TextEdit', 'Fasilitas': 'TextEdit', 'Biaya (Rp)': 'TextEdit', 'Aktivitas': 'TextEdit', 'Rating_1': 'TextEdit', 'Deskripsi': 'TextEdit', 'Rating_2': 'TextEdit', 'Kelengkapa': 'TextEdit', 'Rating_3': 'TextEdit', 'Kebaharuan': 'TextEdit', 'Rating_4': 'TextEdit', 'Hasil Skor': 'TextEdit', 'RANK': 'TextEdit', 'Foto': 'ExternalResource', });
lyr_Kecamatan_1.set('fieldLabels', {'KECAMATAN': 'no label', 'luaskec': 'hidden field', 'Foto': 'no label', });
lyr_KecukupanInformasiObjekWisata_2.set('fieldLabels', {'X': 'inline label - always visible', 'Y': 'inline label - always visible', 'Lokasi': 'inline label - always visible', 'Alamat': 'inline label - always visible', 'Jenis Obje': 'inline label - always visible', 'Rating': 'hidden field', 'Rute': 'inline label - always visible', 'Jarak dari': 'inline label - always visible', 'Fasilitas': 'inline label - always visible', 'Biaya (Rp)': 'inline label - always visible', 'Aktivitas': 'inline label - always visible', 'Rating_1': 'hidden field', 'Deskripsi': 'inline label - always visible', 'Rating_2': 'hidden field', 'Kelengkapa': 'inline label - always visible', 'Rating_3': 'hidden field', 'Kebaharuan': 'inline label - always visible', 'Rating_4': 'hidden field', 'Hasil Skor': 'inline label - always visible', 'RANK': 'inline label - always visible', 'Foto': 'inline label - always visible', });
lyr_KecukupanInformasiObjekWisata_2.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});