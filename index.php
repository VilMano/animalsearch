<?php
?>
<!DOCTYPE html>
<html>
	<head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="index.css">
	</head>
	<body>
        <header>
            <div class="container">
                <div class="row">
                    <h1 id="title-header" class>Animal search</h1>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                    <div class="search-div">
                        <div class="legs-div m-1">
                            <p class="mb-half center-text">Legs</p>
                            <select id="legs">
                                <option value="1">2</option>
                                <option value="2">4</option>
                                <option value="3">8</option>
                            </select>
                        </div>

                        <div class="size-div m-1">
                            <p class="mb-half center-text">Size</p>
                            <select id="size">
                                <option value="1">Small</option>
                                <option value="2">Medium</option>
                                <option value="3">Big</option>
                            </select>
                        </div>

                        <div class="diet-div m-1">
                            <p class="mb-half center-text">Diet</p>
                            <select id="diet">
                                <option value="1">Herbivores</option>
                                <option value="2">Carnivores</option>
                                <option value="3">Omnivores</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div id="results">
                    <div id="div-results">

                    </div>
                </div>
            </div>
        </div>
        <script src="jquery.js"></script>
        <script>
            $('#diet').change(function(){
                var legs = $('#legs option:selected').text();
                var size = $('#size option:selected').text();
                var diet = $('#diet option:selected').text();
                console.log(legs+size+diet);
                
                $.get("getAnimals.php", { legs: legs, size: size, diet: diet }, function(data){
                    $('#div-results').html(data);
                });
            });

            $('#size').change(function(){
                var legs = $('#legs option:selected').text();
                var size = $('#size option:selected').text();
                var diet = $('#diet option:selected').text();
                console.log(legs+size+diet);
                
                $.get("getAnimals.php", { legs: legs, size: size, diet: diet }, function(data){
                    $('#div-results').html(data);
                });
            });

            $('#legs').change(function(){
                var legs = $('#legs option:selected').text();
                var size = $('#size option:selected').text();
                var diet = $('#diet option:selected').text();
                console.log(legs+size+diet);
                
                $.get("getAnimals.php", { legs: legs, size: size, diet: diet }, function(data){
                    $('#div-results').html(data);
                });
            });
        </script>
	</body>
</html>