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