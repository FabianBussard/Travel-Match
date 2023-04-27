<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home Page</title>
  <link rel="stylesheet" href="layout.css">
</head>

<body>

     <div id="contentContainer">

        <div id="imgContainer"></div>

        
    <div id="gridContainer">
    
    <div id="header">
        <img src="TravelMatch-5.png" alt="logo" width="400px" height="400x">
    </div>

    <form action="handlefrom2.php" method="POST" id="form">
        <div id="typeSelector">
        <fieldset id="type">
            <label for="type">What type of holiday?</label>
            <select name="type" id="type">
                <option value="selectOne">---PLEASE SELECT ONE---</option>
                <option value="mountains">Mountains</option>
                <option value="beach">Beach</option>
                <option value="city">City</option>
                <option value="romance">Romance</option>
            </select>
        </fieldset>
</div>

<br>

    <div id="stateSelector">  
     <fieldset id="state">
            <label for="state">What state?</label>
            <select name="state" id="state">
                <option value="selectOne">---PLEASE SELECT ONE---</option>
                <option value="Colorado">Colorado</option>
                <option value="California">California</option>
                <option value="Ohio">Ohio</option>
                <option value="New York">New York</option>
            </select>
        </fieldset> 
</div>

<br>
    

    <div id="submitButton">
    <input id="submitButton" type="submit" value="Show results">
    </form>
</div>


</div>
</div>
</html>


<?php include 'CSS/main.css'; ?>
<style>
  *{
    
}

body{
    background-color: rgb(239, 181, 7);
    background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("background1.jpg");
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-repeat: no-repeat;
}

#contentContainer{
   
}

#contentContainer > #imgContainer{
    filter: brightness(80%);
}

#gridContainer{
    display: grid;
    grid-template-columns: [first]1fr [second]1fr [third]1fr [fourth]1fr;
    grid-template-rows: [first]40% [second]10% [third]10% [fourth]10% [fifth]30%;
    grid-row-gap: 3em;
    grid-column-gap: 2em;
}

#header{
    /*background-color: aliceblue;*/
    grid-row-start: second;
    grid-row-end: second;
    grid-column: second / span 2;
    text-align: center;
}

#form{
    grid-row-start: third;
    grid-row-end: third;
    grid-column: second / span 2;
    text-align: center;
}

/* Type selector only*/
#gridContainer > #typeSelector{
    /*background-color: beige;*/
    grid-column-start: second;
    grid-column-end: second;
    grid-row-start: third;
    grid-row-end: third;
}

#typeSelector{
}

#type{
    text-align: center;
    background-color: #FFDE59;
    border-radius: 20px;
}

/* State selector only*/
#stateSelector{
    /*background-color: blueviolet;*/
    grid-column-start: third;
    grid-column-end: third;
    grid-row-start: third;
    grid-row-end: third;
}

#state{
    text-align: center;
    background-color:#FFDE59;
    border-radius: 20px;
}

#submitButton{
    /*background-color: brown;*/
    grid-row-start: fourth;
    grid-row-end: fourth;
    grid-column: second / span 2;
    text-align: center;
}