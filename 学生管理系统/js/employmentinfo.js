app.title = '环形图';

option = {
    tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b}: {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        x: 'left',
        data:['农林业','互联网','金融','建筑','服务行业','事业机关单位','教育科研','其他']
    },
    series: [
        {
            name:'访问来源',
            type:'pie',
            radius: ['50%', '70%'],
            avoidLabelOverlap: false,
            label: {
                normal: {
                    show: false,
                    position: 'center'
                },
                emphasis: {
                    show: true,
                    textStyle: {
                        fontSize: '30',
                        fontWeight: 'bold'
                    }
                }
            },
            labelLine: {
                normal: {
                    show: false
                }
            },
            data:[
                {value:75, name:'农林业'},
                {value:25, name:'互联网'},
                {value:25, name:'金融'},
                {value:75, name:'建筑'},
                {value:75, name:'服务行业'},
                {value:75, name:'事业机关单位'},
                {value:25, name:'教育科研'},
                {value:25, name:'其他'}
            ]
        }
    ]
};
