import Chart from "chart.js/auto";

const ctx = document.getElementById("chartBar");
var data = [250, 200, 175, 125, 100];
new Chart(ctx, {
    type: "bar",
    data: {
        datasets: [
            {
                data: data,
                backgroundColor: "#FFC525",
            },
        ],
        labels: [
            "Tokopedia Utama",
            "Shopee",
            "Tokopedia Malang",
            "Bukalapak",
            "Lazada",
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