var options = {
    chart: {
        height: 380,
        type: "line",
        zoom: { enabled: !1 },
        toolbar: { show: !1 },
    },
    colors: ["#525ce5", "#23c58f"],
    dataLabels: { enabled: !1 },
    stroke: { width: [3, 3], curve: "straight" },
    series: [
        { name: "Completed Projects", data: [10, 15, 20, 25, 30, 35, 40] },
        { name: "Pending Projects", data: [5, 8, 6, 10, 7, 9, 6] },
    ],
    title: { text: "Project Completion Trend", align: "left" },
    grid: {
        row: { colors: ["transparent", "transparent"], opacity: 0.2 },
        borderColor: "#f1f1f1",
    },
    markers: { style: "inverted", size: 6 },
    xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        title: { text: "Month" },
    },
    yaxis: { title: { text: "Number of Projects" }, min: 0, max: 50 },
    legend: {
        position: "top",
        horizontalAlign: "right",
        floating: !0,
        offsetY: -25,
        offsetX: -5,
    },
    responsive: [
        {
            breakpoint: 600,
            options: {
                chart: { toolbar: { show: !1 } },
                legend: { show: !1 },
            },
        },
    ],
},
chart = new ApexCharts(
    document.querySelector("#line_chart_datalabel"),
    options
);
chart.render();
options = {
    chart: {
        height: 380,
        type: "line",
        zoom: { enabled: !1 },
        toolbar: { show: !1 },
    },
    colors: ["#525ce5", "#f14e4e", "#23c58f"],
    dataLabels: { enabled: !1 },
    stroke: { width: [3, 4, 3], curve: "straight", dashArray: [0, 8, 5] },
    series: [
        {
            name: "Average Task Duration",
            data: [3, 4, 3.5, 2, 4.5, 3, 2.8, 3.2, 3, 3.5, 2.9, 3.1],
        },
        {
            name: "Client Interactions",
            data: [25, 30, 35, 28, 40, 20, 18, 25, 30, 38, 35, 42],
        },
        {
            name: "System Usage (Hours)",
            data: [12, 15, 18, 22, 24, 26, 28, 30, 32, 34, 36, 38],
        },
    ],
    title: { text: "Monthly Operational Metrics", align: "left" },
    markers: { size: 0, hover: { sizeOffset: 6 } },
    xaxis: {
        categories: [
            "Jan Week 1",
            "Jan Week 2",
            "Jan Week 3",
            "Jan Week 4",
            "Feb Week 1",
            "Feb Week 2",
            "Feb Week 3",
            "Feb Week 4",
            "Mar Week 1",
            "Mar Week 2",
            "Mar Week 3",
            "Mar Week 4",
        ],
    },
    tooltip: {
        y: [
            {
                title: {
                    formatter: function (e) {
                        return e + " hrs/task";
                    },
                },
            },
            {
                title: {
                    formatter: function (e) {
                        return e + " interactions";
                    },
                },
            },
            {
                title: {
                    formatter: function (e) {
                        return e + " hrs";
                    },
                },
            },
        ],
    },
    grid: { borderColor: "#f1f1f1", padding: { bottom: 5 } },
    legend: { offsetY: 5 },
};
(chart = new ApexCharts(
    document.querySelector("#line_chart_dashed"),
    options
)).render();
options = {
    chart: { height: 350, type: "area" },
    dataLabels: { enabled: !1 },
    stroke: { curve: "smooth", width: 3 },
    series: [
        { name: "Active Users", data: [120, 150, 110, 170, 140, 200, 180] },
        { name: "Server Uptime (%)", data: [99, 98, 97, 99, 96, 95, 98] },
    ],
    colors: ["#525ce5", "#23c58f"],
    xaxis: {
        type: "datetime",
        categories: [
            "2024-12-01T00:00:00",
            "2024-12-01T04:00:00",
            "2024-12-01T08:00:00",
            "2024-12-01T12:00:00",
            "2024-12-01T16:00:00",
            "2024-12-01T20:00:00",
            "2024-12-02T00:00:00",
        ],
    },
    grid: { borderColor: "#f1f1f1", padding: { bottom: 15 } },
    legend: { offsetY: 5 },
    tooltip: { x: { format: "dd/MM/yy HH:mm" } },
};
(chart = new ApexCharts(
    document.querySelector("#spline_area"),
    options
)).render();
options = {
    chart: { height: 350, type: "bar", toolbar: { show: !1 } },
    plotOptions: {
        bar: { horizontal: !1, columnWidth: "45%", endingShape: "rounded" },
    },
    dataLabels: { enabled: !1 },
    stroke: { show: !0, width: 2, colors: ["transparent"] },
    series: [
        { name: "Project Profits", data: [46, 57, 59, 54, 62, 58, 64, 60, 66] },
        { name: "Revenue", data: [74, 83, 102, 97, 86, 106, 93, 114, 94] },
        { name: "Operational Costs", data: [37, 42, 38, 26, 47, 50, 54, 55, 43] },
    ],
    colors: ["#23c58f", "#525ce5", "#f14e4e"],
    xaxis: {
        categories: [
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
        ],
    },
    yaxis: { title: { text: "$ (thousands)" } },
    grid: { borderColor: "#f1f1f1", padding: { bottom: 10 } },
    fill: { opacity: 1 },
    tooltip: {
        y: {
            formatter: function (e) {
                return "$ " + e + " thousands";
            },
        },
    },
    legend: { offsetY: 7 },
};
(chart = new ApexCharts(
    document.querySelector("#column_chart"),
    options
)).render();

options = {
    chart: { height: 350, type: "bar", toolbar: { show: !1 } },
    plotOptions: { bar: { dataLabels: { position: "top" } } },
    dataLabels: {
        enabled: !0,
        formatter: function (e) {
            return e + "%";
        },
        offsetY: -20,
        style: { fontSize: "12px", colors: ["#304758"] },
    },
    series: [
        {
            name: "Inflation",
            data: [2.5, 3.2, 5, 10.1, 4.2, 3.8, 3, 2.4, 4, 1.2, 3.5, 0.8],
        },
    ],
    colors: ["#525ce5"],
    grid: { borderColor: "#f1f1f1", padding: { bottom: 10 } },
    xaxis: {
        categories: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
        ],
        position: "top",
        labels: { offsetY: -18 },
        axisBorder: { show: !1 },
        axisTicks: { show: !1 },
        crosshairs: {
            fill: {
                type: "gradient",
                gradient: {
                    colorFrom: "#D8E3F0",
                    colorTo: "#BED1E6",
                    stops: [0, 100],
                    opacityFrom: 0.4,
                    opacityTo: 0.5,
                },
            },
        },
        tooltip: { enabled: !0, offsetY: -35 },
    },
    fill: {
        gradient: {
            shade: "light",
            type: "horizontal",
            shadeIntensity: 0.25,
            gradientToColors: void 0,
            inverseColors: !0,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [50, 0, 100, 100],
        },
    },
    yaxis: {
        axisBorder: { show: !1 },
        axisTicks: { show: !1 },
        labels: {
            show: !1,
            formatter: function (e) {
                return e + "%";
            },
        },
    },
    title: {
        text: "Monthly Inflation in Argentina, 2002",
        floating: !0,
        offsetY: 320,
        align: "center",
        style: { color: "#444" },
    },
    legend: { offsetY: 7 },
};
(chart = new ApexCharts(
    document.querySelector("#column_chart_datalabel"),
    options
)).render();
options = {
    chart: { height: 350, type: "bar", toolbar: { show: !1 } },
    plotOptions: { bar: { horizontal: !0 } },
    dataLabels: { enabled: !1 },
    series: [{ data: [380, 430, 450, 475, 550, 584, 780, 1100, 1220, 1365] }],
    colors: ["#23c58f"],
    grid: { borderColor: "#f1f1f1", padding: { bottom: 5 } },
    xaxis: {
        categories: [
            "South Korea",
            "Canada",
            "United Kingdom",
            "Netherlands",
            "Italy",
            "France",
            "Japan",
            "United States",
            "China",
            "Germany",
        ],
    },
    legend: { offsetY: 5 },
};
(chart = new ApexCharts(
    document.querySelector("#bar_chart"),
    options
)).render();
options = {
    chart: { height: 382, type: "line", stacked: !1, toolbar: { show: !1 } },
    stroke: { width: [0, 2, 4], curve: "smooth" },
    plotOptions: { bar: { columnWidth: "50%" } },
    colors: ["#f14e4e", "#525ce5", "#23c58f"],
    series: [
        {
            name: "Team A",
            type: "column",
            data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30],
        },
        {
            name: "Team B",
            type: "area",
            data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43],
        },
        {
            name: "Team C",
            type: "line",
            data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39],
        },
    ],
    fill: {
        opacity: [0.85, 0.25, 1],
        gradient: {
            inverseColors: !1,
            shade: "light",
            type: "vertical",
            opacityFrom: 0.85,
            opacityTo: 0.55,
            stops: [0, 100, 100, 100],
        },
    },
    labels: [
        "01/01/2003",
        "02/01/2003",
        "03/01/2003",
        "04/01/2003",
        "05/01/2003",
        "06/01/2003",
        "07/01/2003",
        "08/01/2003",
        "09/01/2003",
        "10/01/2003",
        "11/01/2003",
    ],
    markers: { size: 0 },
    legend: { offsetY: 7 },
    xaxis: { type: "datetime" },
    yaxis: { title: { text: "Points" } },
    tooltip: {
        shared: !0,
        intersect: !1,
        y: {
            formatter: function (e) {
                return void 0 !== e ? e.toFixed(0) + " points" : e;
            },
        },
    },
    grid: { borderColor: "#f1f1f1", padding: { bottom: 10 } },
};
(chart = new ApexCharts(
    document.querySelector("#mixed_chart"),
    options
)).render();
options = {
    chart: { height: 380, type: "radialBar" },
    plotOptions: {
        radialBar: {
            dataLabels: {
                name: { fontSize: "22px" },
                value: { fontSize: "16px" },
                total: {
                    show: !0,
                    label: "Total",
                    formatter: function (e) {
                        return 249;
                    },
                },
            },
        },
    },
    series: [44, 55, 67, 83],
    labels: ["Computer", "Tablet", "Laptop", "Mobile"],
    colors: ["#525ce5", "#23c58f", "#f14e4e", "#eeb148"],
    legend: { offsetY: 5 },
};
(chart = new ApexCharts(
    document.querySelector("#radial_chart"),
    options
)).render();
options = {
    chart: { height: 320, type: "pie" },
    series: [44, 55, 41, 17, 15],
    labels: ["Series 1", "Series 2", "Series 3", "Series 4", "Series 5"],
    colors: ["#23c58f", "#525ce5", "#f14e4e", "#5ba4e5", "#eeb148"],
    legend: {
        show: !0,
        position: "bottom",
        horizontalAlign: "center",
        verticalAlign: "middle",
        floating: !1,
        fontSize: "14px",
        offsetX: 0,
        offsetY: 5,
    },
    responsive: [
        {
            breakpoint: 600,
            options: { chart: { height: 240 }, legend: { show: !1 } },
        },
    ],
};
(chart = new ApexCharts(
    document.querySelector("#pie_chart"),
    options
)).render();
options = {
    chart: { height: 320, type: "donut" },
    series: [44, 55, 41, 17, 15],
    labels: ["Series 1", "Series 2", "Series 3", "Series 4", "Series 5"],
    colors: ["#23c58f", "#525ce5", "#f14e4e", "#5ba4e5", "#eeb148"],
    legend: {
        show: !0,
        position: "bottom",
        horizontalAlign: "center",
        verticalAlign: "middle",
        floating: !1,
        fontSize: "14px",
        offsetX: 0,
        offsetY: 5,
    },
    responsive: [
        {
            breakpoint: 600,
            options: { chart: { height: 240 }, legend: { show: !1 } },
        },
    ],
};
(chart = new ApexCharts(
    document.querySelector("#donut_chart"),
    options
)).render();
