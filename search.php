<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search - Educational Platform</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var searchForm = document.getElementById('search-form');

            searchForm.addEventListener('submit', function (event) {
                event.preventDefault();

                // Get search keyword
                var keyword = document.getElementById('search-keyword').value;

                // Make an asynchronous request to the server
                fetch('process_search.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ keyword: keyword })
                })
                .then(response => response.json())
                .then(data => {
                    // Handle the response from the server
                    console.log(data);

                    // Display search results (modify as needed)
                    var resultsContainer = document.getElementById('search-results');
                    resultsContainer.innerHTML = '';

                    if (data.length > 0) {
                        data.forEach(result => {
                            resultsContainer.innerHTML += '<p>' + result.title + '</p>';
                            // Add more details as needed
                        });
                    } else {
                        resultsContainer.innerHTML = '<p>No results found.</p>';
                    }
                })
                .catch(error => {
                    // Handle errors
                    console.error('Error:', error);
                });
            });
        });
    </script>
</head>
<body>
    <header>
        <!-- Your existing header content -->
        <h1>Educational Platform</h1>
    </header>

    <nav>
        <!-- Your existing navigation content -->
        <a href="index.php">Home</a>
        <a href="courses.php">Courses</a>
        <a href="about.php">About</a>
        <a href="reg.php">Registration</a>
        <a href="search.php">Search</a>
    </nav>

    <section>
        <h2>Search</h2>

        <form id="search-form">
            <label for="search-keyword">Search Keyword:</label>
            <input type="text" id="search-keyword" name="search-keyword" required>
            <button type="submit">Search</button>
        </form>

        <div id="search-results">
            <!-- Search results will be displayed here -->
        </div>
    </section>
</body>
</html>
