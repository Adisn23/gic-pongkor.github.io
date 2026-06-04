var size = 0;
var placement = 'point';

var style_TitikKoordinat_2 = function(feature, resolution){
    var context = {
        feature: feature,
        variables: {}
    };
    
    var labelText = ""; 
    var value = feature.get("Rank");
    var labelFont = "13.0px \'Open Sans\', sans-serif";
    var labelFill = "#323232";
    var bufferColor = "";
    var bufferWidth = 0;
    var textAlign = "left";
    var offsetX = 0;
    var offsetY = 0;
    var placement = 'point';
    if (feature.get("Lokasi") !== null) {
        labelText = String(feature.get("Lokasi"));
    }
    if (value >= 1.000000 && value <= 11.670000) {
            style = [ new ol.style.Style({
        image: new ol.style.Circle({radius: 6.4 + size,
            displacement: [0, 0], stroke: new ol.style.Stroke({color: 'rgba(35,35,35,1.0)', lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0.0}), fill: new ol.style.Fill({color: 'rgba(51,160,44,1.0)'})}),
        text: createTextStyle(feature, resolution, labelText, labelFont,
                            labelFill, placement, bufferColor,
                            bufferWidth)
    })]
                    } else if (value >= 11.670000 && value <= 32.330000) {
            style = [ new ol.style.Style({
        image: new ol.style.Circle({radius: 6.4 + size,
            displacement: [0, 0], stroke: new ol.style.Stroke({color: 'rgba(35,35,35,1.0)', lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0.0}), fill: new ol.style.Fill({color: 'rgba(245,242,63,1.0)'})}),
        text: createTextStyle(feature, resolution, labelText, labelFont,
                            labelFill, placement, bufferColor,
                            bufferWidth)
    })]
                    } else if (value >= 32.330000 && value <= 36.000000) {
            style = [ new ol.style.Style({
        image: new ol.style.Circle({radius: 6.4 + size,
            displacement: [0, 0], stroke: new ol.style.Stroke({color: 'rgba(35,35,35,1.0)', lineDash: null, lineCap: 'butt', lineJoin: 'miter', width: 0.0}), fill: new ol.style.Fill({color: 'rgba(255,0,0,1.0)'})}),
        text: createTextStyle(feature, resolution, labelText, labelFont,
                            labelFill, placement, bufferColor,
                            bufferWidth)
    })]
                    };

    return style;
};
