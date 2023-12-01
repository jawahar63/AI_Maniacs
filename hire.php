<?php
session_start(); // Start the session if not already started

if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'hire') {
    header("Location: main.php"); // Redirect to main.php
    exit; // Terminate the script
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "summa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to fetch all data from the database
function fetchAllData($conn) {
    $sql = "SELECT username, first_name, current_position, location, email, specialization, linkedin, github FROM users WHERE user_type = 'job'";
    $result = $conn->query($sql);

    // Fetch the data into an array
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    return $data;
}
// Fetch all data initially
$data = fetchAllData($conn);

// Check if the criteria parameter is set and if the search button is clicked
if (isset($_GET['criteria']) && isset($_GET['search'])) {
    $criteria = $_GET['criteria'];
    $data = array_filter($data, function ($person) use ($criteria) {
        // Check for exact match with username, current_position, or location
        return (
            strtolower($person['username']) === strtolower($criteria) ||
            strtolower($person['current_position']) === strtolower($criteria) ||
            strtolower($person['location']) === strtolower($criteria)||
            strtolower($person['specialization']) === strtolower($criteria)
        );
    });
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Details</title>
</head>
<body style="margin-top: 100px;">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <input type="text" id="searchInput" name="criteria" placeholder="Search by current_position, username, or location">
        <button class="people-search" type="submit" name="search">Search</button>
    </form>
    <div id="peopleList" style="display: flex; flex-wrap: wrap;">
        <?php
        // Display the data in the peopleList element
        foreach ($data as $person) {
            echo '<div class="people">';
            echo '<h2>' . $person['first_name'] . '</h2>';
            echo '<p><strong>Username:</strong> ' . $person['username'] . '</p>';
            echo '<p><strong>Degree:</strong> ' . $person['current_position'] . '</p>';
            echo '<p><strong>Specialization:</strong> ' . $person['specialization'] . '</p>';
            echo '<p><strong>Location:</strong> ' . $person['location'] . '</p>';
            echo '<p><strong>Email:</strong> ' . $person['email'] . '</p>';
            echo '<p><strong>linkedin:</strong> ' . $person['linkedin'] . '</p>';
            echo '<p><strong>github:</strong> ' . $person['github'] . '</p>';
            echo '<button class="message">Commit</button>';
            echo '</div>';
        }
        ?>
    </div>

    <script>
        const searchInput = document.getElementById('searchInput');
        const peopleList = document.getElementById('peopleList');

        // Function to filter and display data based on search criteria
        function filterData(criteria) {
            const filteredData = <?php echo json_encode($data); ?>.filter(person => {
                // Check for exact match with username, current_position, or location
                return (
                    person.username.toLowerCase() === criteria.toLowerCase() ||
                    person.current_position.toLowerCase() === criteria.toLowerCase() ||
                    person.location.toLowerCase() === criteria.toLowerCase()||
                    person.specialization.toLowerCase() === criteria.toLowerCase()
                );
            });

            // Clear existing data in peopleList
            peopleList.innerHTML = '';

            // Display the filtered data in the peopleList element
            filteredData.forEach(person => {
                const personDiv = document.createElement('div');
                personDiv.innerHTML = `
                    <h2>${person.first_name}</h2>
                    <p><strong>Username:</strong> ${person.username}</p>
                    <p><strong>Degree:</strong> ${person.current_position}</p>
                    <p><strong>Specilization:</strong> ${person.specilization}</p>
                    <p><strong>Location:</strong> ${person.location}</p>
                    <p><strong>Email:</strong> ${person.email}</p>
                    <p><strong>linkedin:</strong> ${person.linkedin}</p>
                    <p><strong>github:</strong> ${person.github}</p>
                    <button class="message">commit</button>
                `;
                peopleList.appendChild(personDiv);
            });
        }

        // Function to handle input changes
        function handleInputChange() {
            const criteria = searchInput.value.trim();
            if (criteria === '') {
                // If search input is empty, display all data
                peopleList.innerHTML = '';
                <?php
                foreach ($data as $person) {
                    echo 'const personDiv = document.createElement(\'div\');';
                    echo 'personDiv.className = \'people\';';
                    echo 'personDiv.innerHTML = `<h2>' . $person['first_name'] . '</h2>';
                    echo '<p><strong>Username:</strong> ' . $person['username'] . '</p>';
                    echo '<p><strong>Degree:</strong> ' . $person['current_position'] . '</p>';
                    echo '<p><strong>specialization:</strong> ' . $person['specialization'] . '</p>';
                    echo '<p><strong>Location:</strong> ' . $person['location'] . '</p>';
                    echo '<p><strong>Email:</strong> ' . $person['email'] . '</p>`;';
                    echo '<p><strong>linledin:</strong> ' . $person['linkedin'] . '</p>`;';
                    echo '<p><strong>github:</strong> ' . $person['github'] . '</p>`;';
                    echo '<button class="message">Commit</button>';
                    echo 'peopleList.appendChild(personDiv);';
                }
                ?>
            } else {
                // Filter and display data based on search criteria
                filterData(criteria);
            }
        }

        // Listen for input changes
        searchInput.addEventListener('input', handleInputChange);

        // Initial data fetch (display all data initially)
        handleInputChange();
    </script>
</body>
<style>
    .people{
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        width: 350px;
        height: 350px;
        border: 2px solid #000;
        border-radius: 10px;
    }.people:hover{
        border: 3px solid #0090F9;
    }
    h2{
        text-align: center;
        font-family: roboto;
    }
    p{
        margin-left: 30px;
        font-weight: normal;
    }
    .people-search{
        font-family: Inter;
        display: block;
        margin-top: -40px;
        margin-left: 520px;
        width: 100px;
        height: 40px;
        flex-shrink: 0;
        border-radius: 8px;
        background: var(--lightblue1, #0090F9);
        color: #FFF;
        font-family: Inter;
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }
    .people-search:hover{
        font-family: Inter;
        color: #0090F9;
        background-color: #FFF;
        border: 1px solid #0090F9;
    }#searchInput{
        border: 1px solid #0090F9;
        width: 500px;
        margin-left: 20px;
    }
    .message{
        font-family: Inter;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 100px;
        height: 40px;
        flex-shrink: 0;
        border-radius: 8px;
        background: var(--lightblue1, #0090F9);
        color: #FFF;
        font-family: Inter;
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }
    .message:hover{
        font-family: Inter;
        color: #0090F9;
        background-color: #FFF;
        border: 1px solid #0090F9;
    }
</style>
</html>
