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
