function drawVisualization() {var data = new google.visualization.DataTable();

 data.addColumn('string', 'Country');
 data.addColumn('number', 'Value');
 data.addColumn({type:'string', role:'tooltip'});var ivalue = new Array();

 data.addRows([[{v:'KR-11', f:'서울특별시'},0,'서울특별시']]);
 ivalue['KR-11'] = '';

 data.addRows([[{v:'KR-26', f:'부산광역시'},26,'부산광역시']]);
 ivalue['KR-26'] = '';

 data.addRows([[{v:'KR-27',f:'대구광역시'},2,'대구광역시']]);
 ivalue['KR-27'] = '';

 data.addRows([[{v:'KR-30',f:'대전광역시'},3,'대전광역시']]);
 ivalue['KR-30'] = '';

 data.addRows([[{v:'KR-29',f:'광주광역시'},4,'광주광역시']]);
 ivalue['KR-29'] = '';

 data.addRows([[{v:'KR-28',f:'인천광역시'},5,'인천광역시']]);
 ivalue['KR-28'] = '';

 data.addRows([[{v:'KR-31',f:'울산광역시'},6,'울산광역시']]);
 ivalue['KR-31'] = '';

 data.addRows([[{v:'KR-43',f:'충청북도'},7,'충청북도']]);
 ivalue['KR-43'] = '';

 data.addRows([[{v:'KR-44',f:'충청남도'},8,'충청남도']]);
 ivalue['KR-44'] = '';

 data.addRows([[{v:'KR-42',f:'강원도'},9,'강원도']]);
 ivalue['KR-42'] = '';

 data.addRows([[{v:'KR-41',f:'경기도'},10,'경기도']]);
 ivalue['KR-41'] = '';

 data.addRows([[{v:'KR-47',f:'경상북도'},11,'경상북도']]);
 ivalue['KR-47'] = '';

 data.addRows([[{v:'KR-48',f:'경상남도'},12,'경상남도']]);
 ivalue['KR-48'] = '';

 data.addRows([[{v:'KR-49',f:'제주도'},13,'제주도']]);
 ivalue['KR-49'] = '';

 data.addRows([[{v:'KR-45',f:'전라북도'},14,'전라북도']]);
 ivalue['KR-45'] = '';

 data.addRows([[{v:'KR-46',f:'전라남도'},15,'전라남도']]);
 ivalue['KR-46'] = '';

 data.addRows([[{v:'KR-50',f:'세종특별시'},23,'세종특별시']]);
 ivalue['KR-50'] = '';

 // var options = {
 //   region: 'KR',
 //   colorAxis: {colors: ['#00853f', 'black', '#e31b23']},
 //   backgroundColor: 'white',
 //   datalessRegionColor: '#f8bbd0',
 //   defaultColor: '#f5f5f5',
 //  tooltip: {textStyle: {color: '#444444'}, trigger:'focus'}
 // };

 var options = {
region:'KR',
 backgroundColor: {fill:'transparent',stroke:'#FFFFFF' ,strokeWidth:0 },
 // colorAxis: {colors: ['#00853f', 'black', '#e31b23']},
 colorAxis:  {minValue: 0, maxValue: 26,  colors: ['#E5F5E0','#E5F5E0','#E5F5E0','#E5F5E0','#E5F5E0','#E5F5E0','#E5F5E0','#E5F5E0','#A1D99B','#A1D99B','#A1D99B','#A1D99B','#A1D99B','#A1D99B','#A1D99B','#A1D99B','#A1D99B','#31A354','#31A354','#31A354','#31A354','#31A354','#31A354','#31A354','#31A354','#31A354','#31A354',]},
 legend: 'none',
 backgroundColor: {fill:'transparent',stroke:'#FFFFFF' ,strokeWidth:0 },
 datalessRegionColor: '#f5f5f5',
 displayMode: 'regions',
 enableRegionInteractivity: 'true',
 resolution: 'provinces',
 sizeAxis: {minValue: 1, maxValue:1,minSize:10,  maxSize: 10},
 keepAspectRatio: true,
 width:500,
 height:400,
 tooltip: {textStyle: {color: '#444444'}, trigger:'focus'}
 };

  var chart = new google.visualization.GeoChart(document.getElementById('visualization'));
 chart.draw(data, options);
 }
