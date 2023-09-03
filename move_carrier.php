<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVE TO AIS</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #a1d221;
            margin: 0;
            padding: 0;
        }

        .menu-grid {
            list-style: none;
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Create a 3x3 grid */
            grid-gap: 10px; /* Add some spacing between icons */
            padding: 10px; /* Add padding as needed */
            background-color: #fff; /* White background */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a shadow */
            border-radius: 10px;
        }

        .menu-grid li {
            text-align: center;
        }

        /* Style the icon divs */
        .icon {
            width: 100px; /* Adjust icon size as needed */
            height: 100px;
            background-color: #333; /* Icon background color */
            border-radius: 50%; /* Make it round */
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff; /* Icon text color */
            font-size: 18px; /* Icon text size */
            text-transform: uppercase;
        }

        /* Style the icon links */
        .menu-grid a {
            text-decoration: none;
            color: inherit;
        }

        /* Style the dropdown menus */
        .dropdown {
            position: relative;
            display: inline-block;
            margin: 10px;
        }

        select {
            padding: 5px;
        }

        /* Style the buttons */
        .buttons {
            margin-top: 10px;
        }

         /* Style the input fields */
         .input-field {
            margin: 10px;
        }

        /* Style the date picker */
        .date-picker {
            margin: 10px;
        }



    </style>
</head>
<body>


<header>


        

        
        
<div class="logo">
    <img src="Advanced_Info_Service_logo.png" alt="Logo">

 
</div>


  
       
<a href=".">
    <img src="home.png" alt="Home Icon" class="home-icon">
    
</a>
        
 









</header>




<!-- Add "icon1" under the header section -->
<div class="icon_sub_page">
    <img src="Icon1_ChangeSim.jpg" alt="Icon 1">
</div>


 <!-- Navigation menu to go back to index.php -->



<!-- Add "Mobile Number" input -->
<div class="input-field">
    <label for="mobileNumber">Mobile Number:</label>
    <input type="text" id="mobileNumber" name="mobileNumber" class="rounded-input">
</div>

<!-- Add "ID Card" input -->
<div class="input-field">
    <label for="idCard">ID Card:</label>
    <input type="text" id="idCard" name="idCard" class="rounded-input">
</div>

<!-- Add date picker for "Effective Date" -->
<div class="date-picker">
    <label for="effectiveDate">Effective Date:</label>
    <input type="date" id="effectiveDate" name="effectiveDate" class="rounded-input">
</div>



    

    <div class="dropdown">
        <label for="moveFrom">Move From:</label>
        <select id="moveFrom">
            <option value="1">AIS</option>
            <option value="2">TRUE</option>
            <option value="3">DTAC</option>
            <option value="4">CAT</option>
        </select>
    </div>

    <div class="dropdown">
        <label for="moveTo">To:</label>
        <select id="moveTo">
            <option value="1">AIS</option>
            <option value="2">TRUE</option>
            <option value="3">DTAC</option>
            <option value="4">CAT</option>
        </select>
    </div>

    <div class="buttons">
        <button id="proceedButton">OK</button>
        <button id="cancelButton">Cancel</button>
    </div>

    <script>
        // Get references to the input fields and buttons
        const mobileNumberInput = document.getElementById('mobileNumber');
        const idCardInput = document.getElementById('idCard');
        const effectiveDateInput = document.getElementById('effectiveDate');
        const moveFromSelect = document.getElementById('moveFrom');
        const moveToSelect = document.getElementById('moveTo');
        const proceedButton = document.getElementById('proceedButton');
        const cancelButton = document.getElementById('cancelButton');

        // Function to handle the OK button click
        function handleProceed() {
    const selectedMoveFrom = moveFromSelect.options[moveFromSelect.selectedIndex].text;
    const selectedMoveTo = moveToSelect.options[moveToSelect.selectedIndex].text;
    const mobileNumber = mobileNumberInput.value;
    const idCard = idCardInput.value;
    const effectiveDate = effectiveDateInput.value;
    
    // Display a confirmation dialog
    const confirmation = window.confirm(`Customer wants to move from ${selectedMoveFrom} to ${selectedMoveTo}. Mobile Number: ${mobileNumber}, ID Card: ${idCard}, Effective Date: ${effectiveDate}. Click OK to confirm, or Cancel to cancel the operation.`);

    if (confirmation) {
        // User confirmed, proceed with the operation
        const confirmation = window.confirm(`Operation has been proceeded, Once succeed , Confirmation SMS  will send Mobile Number: ${mobileNumber}, ref ID Card: ${idCard}. Click OK to confirm, or Cancel to cancel the operation.`);
        // alert('Operation confirmed. Proceeding...');

        // Add your code to proceed with the operation here
    } else {
        // User canceled, do nothing or handle cancellation
        alert('Operation canceled.');
        // Add your code to handle the cancellation here
    }
}

// Function to handle the Cancel button click
function handleCancel() {
    // Display a separate cancel alert
    alert('Operation canceled.');
    // Add your code to handle the cancellation here

    // Redirect to move_carrier.php
    window.location.href = 'move_carrier.php';
}

        // Add click event listeners to the buttons
        proceedButton.addEventListener('click', handleProceed);
        cancelButton.addEventListener('click', handleCancel);
    </script>

</body>
</html>
