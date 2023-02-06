import Chart from "chart.js/auto";

const ctx = document.getElementById("lineChart");
var data = [0, 10, 5, 2, 20, 30];

new Chart(ctx, {
    type: "line",
    data: {
        datasets: [
            {
                label: "First dataset",
                data: data,
            },
            {
                label: "Second",
                data: [100, 50, 60, 70, 10, 50],
            },
        ],
        labels: ["January", "February", "March", "April", "May", "June"],
    },
    options: {
        scales: {
            y: {
                suggestedMin: 50,
                suggestedMax: 100,
            },
        },
    },
});
