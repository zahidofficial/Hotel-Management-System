<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Request</title>
    <link rel="stylesheet" href="css/cssDash.css">
    <style>
        /* Style for the form */
        .request-container {
            margin-top: 20px;
        }
        .request-table {
            width: 100%;
            border-collapse: collapse;
        }
        .request-table, .request-table th, .request-table td {
            border: 1px solid black;
        }
        .request-table th, .request-table td {
            padding: 10px;
            text-align: left;
        }
        .request-table th {
            background-color: #f2f2f2;
        }
        /* Style for buttons */
        .action-btn {
            background-color: #4CAF50; /* Green background */
            color: white; /* White text */
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 5px;
        }
        .action-btn.reject {
            background-color: #f44336; /* Red background */
        }
        .action-btn:hover {
            opacity: 0.8; /* Slightly dim on hover */
        }
    </style>
</head>
<body>

    <div class="header">View Requests</div>

    <div class="container">
        <div class="request-container">
            <h2>Customer Requests</h2>
            <table class="request-table">
                <tr>
                    <th>Customer Name</th> <!-- New Column -->
                    <th>Room Category</th>
                    <th>Rent</th>
                    <th>Duration</th> <!-- New Column -->
                    <th>Days</th>
                    <th>Customer Feedback</th> <!-- New Column -->
                    <th>Feedback</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>John Doe</td> <!-- Sample Customer Name -->
                    <td>Single Room</td>
                    <td>$100</td>
                    <td>
                        Start: <input type="date">
                        End: <input type="date">
                    </td> <!-- Duration with Start and End Dates -->
                    <td>3</td>
                    <td><textarea rows="3" cols="30" placeholder="Customer feedback..."></textarea></td> <!-- Customer Feedback -->
                    <td><textarea rows="3" cols="30" placeholder="Send feedback..."></textarea></td>
                    <td>
                        <button class="action-btn" onclick="acceptRequest()">Accept</button>
                        <button class="action-btn reject" onclick="rejectRequest()">Reject</button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </table>
        </div>
    </div>

    <div class="footer">
        <!-- Optional Footer content -->
    </div>

    <script>
        function acceptRequest() {
            // Handle accepting the request
            alert('Request accepted!');
            // You can add more logic here (e.g., update database, redirect, etc.)
        }

        function rejectRequest() {
            // Handle rejecting the request
            alert('Request rejected!');
            // You can add more logic here (e.g., update database, redirect, etc.)
        }
    </script>

</body>
</html>
