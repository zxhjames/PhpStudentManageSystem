function data(id,text,data) {		//学生基本信息饼图
    var dom = document.getElementById(id);
    var myChart = echarts.init(dom);
    var app = {};
    var color = ['#784feb', '#88d3ce'];
    if(id=='gender-statistical'){
        color = ['#5272ed', '#be8fdd'];
    }else if(id=='province-statistical'){
        color =  ['#5188ec', '#de8f94','#dc8fd3', '#c28fdc','#8fdddd']
    }
    option = null;
    option = {
        title : {
            text: text,
            // subtext: '纯属虚构',
            x:'center',
            y:'bottom',
            textStyle: {
                fontSize: 15,
                fontWeight: 'normal',
                color:'#343434'
            }
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        color:color,
        series : [
            {
                name: text,
                type: 'pie',
                radius: ['40%', '65%'],
                center: ['50%', '50%'],
                data:data,
                itemStyle: {
                    normal:{
                        label:{
                            show:true,
                            formatter: '{b} : {c} \n ({d}%)'
                        },
                        labelLine:{
                            show:true
                        }
                    },
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }
        ]
    };
    ;
    if (option && typeof option === "object") {
        myChart.setOption(option, true);
    }
}
function payInfoData(id,text,payData,Yname,Xname,data) {	//薪资基本信息柱状图
    var dom = document.getElementById(id);
    var myChart = echarts.init(dom);
    var app = {};
    var color = '#774fea';
    if(id=='payInfo'){
        color = '#774fea';
    }else {
        color =  '#5171ec';
    }

    option = null;
    app.title = '坐标轴刻度与标签对齐';
    option = {
        color: [color],
        title : {
            text:text,
            // subtext: '纯属虚构',
            x:'center',
            y:'bottom',
            textStyle: {
                fontSize: 15,
                fontStyle: 'normal',
                fontWeight: 'normal',
                color:'#343434'

            }
        },

        tooltip : {
        },
        grid: {
            bottom: '10%',
            containLabel: true
        },
        xAxis : [
            {
                splitLine:{show: false},
                type : 'category',
                name:Xname,

                nameLocation:'end',
                data :payData,
                axisLabel: {
                    color:'#000'
                },
                axisTick: {
                    alignWithLabel: true
                },
                nameTextStyle:{
                    color:'#000'
                },
                axisLine:{
                    lineStyle:{
                        color:color,
                        width:4
                    }
                }


            }
        ],
        yAxis : [
            {
                splitLine:{show: false},
                type : 'value',
                name:Yname,
                nameTextStyle:{
                    color:'#000'
                },
                axisLabel: {
                    color:'#000'
                },
                axisLine:{
                    lineStyle:{
                        color:color,
                        width:4
                    }
                }
            }
        ],
        series:{
            name:Yname,
            type:'bar',
            barWidth: '50%',
            color:color,
            data:data,
            label:{
                normal:{
                    show:true,            //显示数字
                    position: 'top',
                    color:'#000'//这里可以自己选择位置
                }
            }
        }
    };
    ;
    if (option && typeof option === "object") {
        myChart.setOption(option, true);
    }

}

function getEcharts(id, title, adata, acolor, sname, aDirect, sX, sTitleLeft) {		//就业信息饼图
	var myChart = echarts.init(document.getElementById(id));
	option = {
		title: {
			text: title,
			bottom: '-2%',
			left: sTitleLeft,
			textStyle: {
				color: '#333',
				fontSize: 15,
				fontWeight: 'normal'
			}
		},
		tooltip: {
			trigger: 'item',
			formatter: "{a} <br/>{b}: {c} ({d}%)"
		},
		legend: {
			orient: 'vertical',
			x: sX,
			y: '70%',
			align: 'left',
			top: '20%',
			itemGap: 30,
			itemWidth: 30,
			itemHeight: 16,
			textStyle: {
				fontSize: 15,
				color: '#666'
			}
		},
		series: [{
			name: sname,
			type: 'pie',
			center: aDirect,
			radius: ['40%', '70%'],
			avoidLabelOverlap: false,
			label: {
				normal: {
					show: false,
					position: 'center'
				},
				emphasis: {
					show: true,
					textStyle: {
						fontSize: '16',
						fontWeight: 'bold'
					}
				}
			},
			labelLine: {
				normal: {
					show: false
				}
			},
			data: adata,
			color: acolor
		}]
	};
	myChart.setOption(option);
}

function getEchartsMap() {			//工作省份地图
	var myChart = echarts.init(document.getElementById('map'));
	var app = {};
	option = null;
	var data = [
		{ name: '北京', value: 30 },
		{ name: '郑州', value: 38 },
		{ name: '石家庄', value: 43 },
		{ name: '重庆', value: 54 },
		{ name: '西安', value: 54 },
		{ name: '上海', value: 54 }
	];

	var geoCoordMap = {
		'北京': [116.46, 39.92],
		'郑州': [113.65, 34.76],
		'石家庄': [114.48, 38.03],
		'重庆': [106.54, 29.59],
		'西安': [108.95, 34.27],
		'上海': [121.48, 31.22]
	};

	function convertData(data) {
		var res = [];
		for(var i = 0; i < data.length; i++) {
			var geoCoord = geoCoordMap[data[i].name];
			if(geoCoord) {
				res.push({
					name: data[i].name,
					value: geoCoord.concat(data[i].value)
				});
			}
		}
		return res;
	};

	option = {
		tooltip: {},
		visualMap: {
			show: false,
			inRange: {
				color: '#fff'
			}
		},
		geo: {
			map: 'china',
			roam: true,
			label: {
				normal: {
					show: true,
					textStyle: {
						color: '#929292',
						fontSize: 8
					}
				}
			},
			itemStyle: {
				normal: {
					borderColor: 'rgba(0, 0, 0, 0.2)'
				},
				emphasis: {
					areaColor: null,
					shadowOffsetX: 0,
					shadowOffsetY: 0,
					shadowBlur: 20,
					borderWidth: 0,
					shadowColor: 'rgba(0, 0, 0, 0.5)'
				}
			}
		},
		series: [
			{
				type: 'scatter',
				coordinateSystem: 'geo',
				data: convertData(data),
				symbolSize: 15,
				symbol: 'image://images/pin_2.svg',
				symbolRotate: 0,
				itemStyle: {
					normal: {
						color: 'red'
					}
				}
			},
			{
				name: '就业地区',
				type: 'map',
				geoIndex: 0,
				data: [
					{ name: '北京', value: 120 },
					{ name: '天津', value: 58 },
					{ name: '上海', value: 78 },
					{ name: '重庆', value: 53 },
					{ name: '河北', value: 27 },
					{ name: '河南', value: 58 },
					{ name: '云南', value: 58 },
					{ name: '辽宁', value: 58 },
					{ name: '黑龙江', value: 58 },
					{ name: '湖南', value: 58 },
					{ name: '安徽', value: 58 },
					{ name: '山东', value: 58 },
					{ name: '新疆', value: 58 },
					{ name: '江苏', value: 58 },
					{ name: '浙江', value: 58 },
					{ name: '江西', value: 58 },
					{ name: '湖北', value: 58 },
					{ name: '广西', value: 58 },
					{ name: '甘肃', value: 58 },
					{ name: '山西', value: 58 },
					{ name: '内蒙古', value: 58 },
					{ name: '陕西', value: 58 },
					{ name: '吉林', value: 58 },
					{ name: '福建', value: 58 },
					{ name: '贵州', value: 58 },
					{ name: '广东', value: 58 },
					{ name: '青海', value: 58 },
					{ name: '西藏', value: 58 },
					{ name: '四川', value: 58 },
					{ name: '宁夏', value: 58 },
					{ name: '海南', value: 58 },
					{ name: '台湾', value: 58 },
					{ name: '香港', value: 58 },
					{ name: '澳门', value: 58 }
				]
			}
		]
	};
	if(option && typeof option === "object") {
		myChart.setOption(option, true);
	}
}