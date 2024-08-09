 <!-- plugins:js -->
 <script src="/vendors/js/vendor.bundle.base.js"></script>
    <script src="/vendors/chart.js/Chart.min.js"></script>
    <script src="/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="/js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/js/off-canvas.js"></script>
    <script src="/js/hoverable-collapse.js"></script>
    <script src="/js/template.js"></script>
    <script src="/js/settings.js"></script>
    <script src="/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/js/dashboard.js"></script>
    <script src="/js/Chart.roundedBarCharts.js"></script>
    
    
    <!-- <script>
        $(document).ready(function() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    const lat = position.coords.latitude;
                    const lon = position.coords.longitude;
                    const apiKey = '556574e11a307f61d13c3dd5aff9eb30';
                    const weatherUrl = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&units=metric&appid=${apiKey}`;

                    console.log(`Latitude: ${lat}, Longitude: ${lon}`);
                    console.log(`Weather URL: ${weatherUrl}`);

                    $.getJSON(weatherUrl, function(data) {
                        console.log(data); // Log the response data for debugging
                        const temp = data.main.temp;
                        const city = data.name;
                        const country = data.sys.country;

                        $('#weather-temp').html(`${temp}<sup>°C</sup>`);
                        $('#location-city').text(city);
                        $('#location-country').text(country);

                        // Update date and time
                        const now = new Date();
                        const options = {
                            day: 'numeric',
                            month: 'short',
                            year: 'numeric'
                        };
                        const formattedDate = now.toLocaleDateString('en-GB', options).replace(/ /g, ' ');


                        $('#current-date').text(formattedDate);

                    }).fail(function(jqXHR, textStatus, errorThrown) {
                        console.error("Error fetching weather data: ", textStatus, errorThrown);
                    });
                }, function(error) {
                    console.error("Error getting location: ", error);
                });
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        });
    </script> -->