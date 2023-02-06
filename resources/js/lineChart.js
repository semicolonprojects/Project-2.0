import Chart from "chart.js/auto";

const ctx = document.getElementById("lineChart");

new Chart(ctx, {
    type: "line",
    data: {
        datasets: [
            {
                label: "First dataset",
                data: [0, 10, 5, 2, 20, 30, 45],
                data: [5, 20, 25, 1, 20, 30, 45],
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
