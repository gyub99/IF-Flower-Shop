google.load('visualization', '1', {'packages': ['geochart']});
google.setOnLoadCallback(draw);

function draw() {

var data = new google.visualization.DataTable();

data.addColumn('string', 'Country');
data.addColumn('number', 'Value');
data.addColumn({type:'string', role:'tooltip'});var ivalue = new Array();

data.addRows([[{v:'KR-11', f:'서울특별시'},0,'50그루']]);
ivalue['KR-11'] = '';

data.addRows([[{v:'KR-26', f:'부산광역시'},1,'100그루']]);
ivalue['KR-26'] = '';

data.addRows([[{v:'KR-27',f:'대구광역시'},7,'1,000그루']]);
ivalue['KR-27'] = '';

data.addRows([[{v:'KR-30',f:'대전광역시'},3,'350그루']]);
ivalue['KR-30'] = '';

data.addRows([[{v:'KR-29',f:'광주광역시'},5,'500그루']]);
ivalue['KR-29'] = '';

data.addRows([[{v:'KR-28',f:'인천광역시'},4,'430그루']]);
ivalue['KR-28'] = '';

data.addRows([[{v:'KR-31',f:'울산광역시'},6,'610그루']]);
ivalue['KR-31'] = '';

data.addRows([[{v:'KR-43',f:'충청북도'},7,'11,00그루']]);
ivalue['KR-43'] = '';

data.addRows([[{v:'KR-44',f:'충청남도'},3,'280그루']]);
ivalue['KR-44'] = '';

data.addRows([[{v:'KR-42',f:'강원도'},8,'1,500그루']]);
ivalue['KR-42'] = '';

data.addRows([[{v:'KR-41',f:'경기도'},6,'630그루']]);
ivalue['KR-41'] = '';

data.addRows([[{v:'KR-47',f:'경상북도'},3,'300그루']]);
ivalue['KR-47'] = '';

data.addRows([[{v:'KR-48',f:'경상남도'},2,'200그루']]);
ivalue['KR-48'] = '';

data.addRows([[{v:'KR-49',f:'제주도'},7,'700그루']]);
ivalue['KR-49'] = '';

data.addRows([[{v:'KR-45',f:'전라북도'},5,'570그루']]);
ivalue['KR-45'] = '';

data.addRows([[{v:'KR-46',f:'전라남도'},4,'450그루']]);
ivalue['KR-46'] = '';


var options = {
region:'KR',
backgroundColor: {fill:'transparent',stroke:'#FFFFFF' ,strokeWidth:0 },
colorAxis:  {minValue: 0, maxValue: 8,  colors: ['#dd9f9f','#f6c7c7','#fbaf3b','#f2dc04','#b5d40e','#98b20d','#778b0e','#86a56d','#49720e']},
backgroundColor: {fill:'transparent',stroke:'#FFFFFF' ,strokeWidth:0 },
datalessRegionColor: '#f5f5f5',
enableRegionInteractivity: 'true',
resolution: 'provinces',
sizeAxis: {minValue: 1, maxValue:1,minSize:10,  maxSize: 10},
width:500,
height:400,
tooltip: {textStyle: {color: '#444444'}, trigger:'focus'}
};

var chart = new google.visualization.GeoChart(document.getElementById('visualization'));
chart.draw(data, options);

}
