////responsive menu
ma5menu({
        menu: '.site-menu',
        activeClass: 'active',
        footer: '#ma5menu-tools',
        position: 'left',
        closeOnBodyClick: true
});

// Function to handle language change
function changeLanguage() {
        var selectedLanguage = document.getElementById("language").value;
}

// Function to handle the search action
function performSearch() {
        var searchQuery = document.getElementById("search").value;
}


//--------- Chart of production of milk, egg, meat***************************************************
function toBengaliNumber(number) {
        var bengaliDigits = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
        return number.toString().split('').map(digit => bengaliDigits[parseInt(digit)]).join('');
}

// Data for the chart
var productionData = {
        labels: ['২০২০', '২০২১', '২০২২'], // Bengali Unicode for years 2020, 2021, 2022
        datasets: [
                {
                        label: 'দুধ', // Bengali Unicode for 'Milk'
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 2,
                        fill: false,
                        data: [1000, 1200, 1400],
                },
                {
                        label: 'মাংস', // Bengali Unicode for 'Meat'
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 2,
                        fill: false,
                        data: [800, 900, 950],
                },
                {
                        label: 'ডিম', // Bengali Unicode for 'Egg'
                        borderColor: 'rgba(255, 206, 86, 1)',
                        borderWidth: 2,
                        fill: false,
                        data: [500, 550, 600],
                },
        ]
};

// Chart configuration
var productionConfig = {
        type: 'line',
        data: productionData,
        options: {
                scales: {
                        x: {
                                title: {
                                        display: true,
                                        text: 'বছর' // Bengali Unicode for 'Year'
                                }
                        },
                        y: {
                                title: {
                                        display: true,
                                        text: 'উৎপাদন পরিমাণ' // Bengali Unicode for 'Production Amount'
                                },
                                ticks: {
                                        // Use the custom function to convert Y-axis labels to Bengali digits
                                        callback: function (value, index, values) {
                                                return toBengaliNumber(value);
                                        }
                                }
                        }
                }
        }
};

// Create the chart
var ctx = document.getElementById('productionChart').getContext('2d');
var productionChart = new Chart(ctx, productionConfig);




//--------- Chart of Transaction ***************************************************
// Function to convert numbers to Bengali digits
function toBengaliNumber(number) {
        var bengaliDigits = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
        return number.toString().split('').map(digit => bengaliDigits[parseInt(digit)]).join('');
}

// Data for the chart
var transactionData = {
        labels: ['২০২০', '২০২১', '২০২২'], // Bengali Unicode for years 2020, 2021, 2022
        datasets: [
                {
                        label: 'দুধ', // Bengali Unicode for 'Milk'
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 2,
                        fill: false,
                        data: [10000, 22000, 14000],
                },
                {
                        label: 'মাংস', // Bengali Unicode for 'Meat'
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 2,
                        fill: false,
                        data: [2800, 9800, 29500],
                },
                {
                        label: 'ডিম', // Bengali Unicode for 'Egg'
                        borderColor: 'rgba(255, 206, 86, 1)',
                        borderWidth: 2,
                        fill: false,
                        data: [5500, 13550, 57600],
                },
        ]
};

// Chart configuration
var transactionConfig = {
        type: 'bar',
        data: transactionData,
        options: {
                scales: {
                        x: {
                                title: {
                                        display: true,
                                        text: 'বছর' // Bengali Unicode for 'Year'
                                }
                        },
                        y: {
                                title: {
                                        display: true,
                                        text: 'লেনদেন' // Bengali Unicode for 'Transactions'
                                },
                                ticks: {
                                        // Use the custom function to convert Y-axis labels to Bengali digits
                                        callback: function (value, index, values) {
                                                return toBengaliNumber(value);
                                        }
                                }
                        }
                }
        }
};

// Create the chart
var ctx = document.getElementById('transactionChart').getContext('2d');
var transactionChart = new Chart(ctx, transactionConfig);


