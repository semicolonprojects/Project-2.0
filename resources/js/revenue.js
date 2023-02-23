import Chart from "chart.js/auto";

const revenue = document.getElementById("revenue");

var data = [0, 25, 10, 20, 30, 20];

new Chart(revenue, {
    type: "line",
    data: {
        datasets: [
            {
                fill: false,
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
                display: false,
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
