import Chart from "chart.js/auto";

const ctx = document.getElementById("myChart");

var xValues = ["Complete", "Pending", "Cancel", "Complain"];
var yValues = [69, 69, 69, 69];
var barColors = ["#A155B9", "#165BAA", "#F765A3", "#FF4E4E"];

new Chart(ctx, {
    type: "doughnut",
    data: {
        labels: xValues,
        datasets: [
            {
                backgroundColor: barColors,
                data: yValues,
            },
        ],
    },
    options: {
        plugins: {
            legend: {
                position: "bottom",
                labels: {
                    font: {
                        size: 20,
                        family: "Segoe UI",
                    },
                },
            },
        },
    },
});

//Bar Chart
const bar = document.getElementById("barChart");
var data = [250, 200, 175, 125, 100];
new Chart(bar, {
    type: "bar",
    data: {
        datasets: [
            {
                data: data,
                backgroundColor: "#FFC525",
            },
        ],
        labels: [
            "Madu Durian",
            "Madu Durian",
            "Madu Durian",
            "Madu Durian",
            "Madu Durian",
        ],
    },
    options: {
        plugins: {
            legend: {
                display: false,
                align: "center",
                position: "top",
                padding: 30,
                labels: {
                    font: {
                        size: 14,
                        family: "Segoe UI",
                    },
                },
            },
        },

        scales: {
            y: {
                suggestedMin: 50,
                suggestedMax: 100,
            },
        },
    },
});

const sales = document.getElementById("salesAnalytics");

var data = [0, 10, 5, 2, 20, 30];

new Chart(sales, {
    type: "line",
    data: {
        datasets: [
            {
                label: "Target",
                data: data,
                borderColor: "#A155B9",
                backgroundColor: "#A155B9",
            },
            {
                label: "Total",
                data: [100, 50, 60, 70, 10, 50],
                borderColor: "#F765A3",
                backgroundColor: "#F765A3",
                borderDash: [10, 5],
            },
        ],
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
    },
    options: {
        plugins: {
            legend: {
                align: "center",
                position: "top",
                padding: 30,
                labels: {
                    font: {
                        size: 13,
                        family: "Segoe UI",
                    },
                },
            },
        },

        scales: {
            y: {
                suggestedMin: -10,
                suggestedMax: 200,
            },
        },
    },
});
