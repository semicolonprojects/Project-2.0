import Chart from "chart.js/auto";

const ctx = document.getElementById("dailyTarget");

var xValues = ["Daily Target", "Actual Sales"];
var yValues = [50, 50];
var barColors = ["#F3722C", "#F94144"];

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
                position: "right",
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
