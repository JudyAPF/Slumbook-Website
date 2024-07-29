<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slum Book Submission</title>
    <!-- Add any CSS or styling as needed -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="style/style2.css">
</head>

<body>
    <?php
    // Check if form is process successfully
    if (isset($_POST["submitP"])) {
        // Retrieve data from the process form
        $fullNameP = $_POST["fullNameP"];
        $getNameP = $_POST["getNameP"];
        $nickNamesP = $_POST["nickNamesP"];
        $birthdayP = $_POST["birthdayP"];
        $gradeP = $_POST["gradeP"];
        $numBrothersNamesP = $_POST["numBrothersNamesP"];
        $numSistersNamesP = $_POST["numSistersNamesP"];
        $fallInFamilyP = $_POST["fallInFamilyP"];
        $teamsOrOutOfSchoolClassesP = $_POST["teamsOrOutOfSchoolClassesP"];
        $biggestFearP = $_POST["biggestFearP"];
        $missionP = $_POST["missionP"];
        $petsP = $_POST["petsP"];
        $howManyP = $_POST["howManyP"];
        $namesP = $_POST["namesP"];
        $bookP = $_POST["bookP"];
        $movieP = $_POST["movieP"];
        $tvShowP = $_POST["tvShowP"];
        $sportP = $_POST["sportP"];
        $thingToDoP = $_POST["thingToDoP"];
        $animalP = $_POST["animalP"];
        $foodP = $_POST["foodP"];
        $drinkP = $_POST["drinkP"];
        $candyOrCandyBarP = $_POST["candyOrCandyBarP"];
        $dessertP = $_POST["dessertP"];
        $summerActivityP = $_POST["summerActivityP"];
        $gameP = $_POST["gameP"];
        $schoolSubjectsP = $_POST["schoolSubjectsP"];
        $primarySongP = $_POST["primarySongP"];
        $scriptureStoryP = $_POST["scriptureStoryP"];
        $otherThingsLoveP = $_POST["otherThingsLoveP"];
        $anythingElseToTellP = $_POST["anythingElseToTellP"];
    }
    ?>
    <div class="container-sm mt-5 mb-5">
        <h1 class="text-center mb-5">GETTING TO KNOW YOU</h1>
        <!-- This is a form start -->
        <form action="#">
            <!-- Form elements here -->
            <!-- 1st line -->
            <div class="mb-3 row">
                <div class="col-sm-6">
                    <label for="fullName" class="form-label">Full Name: </label>
                    <?php echo $fullNameP; ?>
                </div>
                <div class="col-sm-6">
                    <label for="getName" class="form-label">How did you get your name?: </label>
                    <?php echo $getNameP; ?>
                </div>
            </div>
            <!-- 2nd line -->
            <div class="mb-3 row">
                <div class="col-sm">
                    <label for="fullName" class="form-label">Nicknames: </label>
                    <?php echo $nickNamesP; ?>
                </div>
            </div>
            <!-- 3rd line -->
            <div class="mb-3 row">
                <div class="col-sm-6">
                    <label for="birthday" class="form-label">Birthday: </label>
                    <?php echo $birthdayP; ?>
                </div>
                <div class="col-sm-6">
                    <label for="grade" class="form-label">Grade: </label>
                    <?php echo $gradeP; ?>
                </div>
            </div>
            <!-- 4th line -->
            <div class="mb-3 row">
                <div class="col-sm">
                    <label for="numBrothersNames" class="form-label">No. of Brothers and Names: </label>
                    <?php echo $numBrothersNamesP; ?>
                    </textarea>
                </div>
            </div>
            <!-- 5th line -->
            <div class="mb-3 row">
                <div class="col-sm">
                    <label for="numSistersNames" class="form-label">No. of Sisters and Names: </label>
                    <?php echo $numSistersNamesP; ?>
                </div>
            </div>
            <!-- 6th line -->
            <div class="mb-3 row">
                <div class="col-sm">
                    <label for="fallInFamily" class="form-label">Where do you fall in your family?: </label>
                    <?php echo $fallInFamilyP; ?>
                </div>
            </div>
            <!-- 7th line -->
            <div class="mb-3 row">
                <div class="col-sm">
                    <label for="teamsOrOutOfSchoolClasses" class="form-label">Teams or Out-of-school classes?: </label>
                    <?php echo $teamsOrOutOfSchoolClassesP; ?>
                </div>
            </div>
            <!-- 8th line -->
            <div class="mb-3 row">
                <div class="col-sm-6">
                    <label for="biggestFear" class="form-label">Biggest Fear: </label>
                    <?php echo $biggestFearP; ?>
                </div>
                <div class="col-sm-6">
                    <label for="mission" class="form-label">Where would you like to serve a mission?: </label>
                    <?php echo $missionP; ?>
                </div>
            </div>
            <!-- 9th line -->
            <div class="mb-3 row">
                <div class="col-sm-4">
                    <label for="pets" class="form-label">Pets: </label>
                    <?php echo $petsP; ?>
                </div>
                <div class="col-sm-3">
                    <label for="howMany" class="form-label">How Many?: </label>
                    <?php echo $howManyP; ?>
                </div>
                <div class="col-sm-5">
                    <label for="names" class="form-label">Names: </label>
                    <?php echo $namesP; ?>
                </div>
            </div>
            <!-- 10th line -->
            <h3 class="text-center mt-5 mb-5">
                THESE ARE A FEW OF MY FAVORITE THINGS...
            </h3>
            <div class="mb-3 row">
                <div class="col-sm-4">
                    <label for="book" class="form-label">Book: </label>
                    <?php echo $bookP; ?>
                </div>
                <div class="col-sm-3">
                    <label for="movie" class="form-label">Movie: </label>
                    <?php echo $movieP; ?>
                </div>
                <div class="col-sm-5">
                    <label for="tvShow" class="form-label">TV Show: </label>
                    <?php echo $tvShowP; ?>
                </div>
            </div>
            <!-- 11th line -->
            <div class="mb-3 row">
                <div class="col-sm-6">
                    <label for="sport" class="form-label">Sport: </label>
                    <?php echo $sportP; ?>
                </div>
                <div class="col-sm-6">
                    <label for="thingToDo" class="form-label">Thing to do: </label>
                    <?php echo $thingToDoP; ?>
                </div>
            </div>
            <!-- 12th line -->
            <div class="mb-3 row">
                <div class="col-sm-4">
                    <label for="animal" class="form-label">Animal:</label>
                    <?php echo $animalP; ?>
                </div>
                <div class="col-sm-3">
                    <label for="food" class="form-label">Food: </label>
                    <?php echo $foodP; ?>
                </div>
                <div class="col-sm-5">
                    <label for="drink" class="form-label">Drink: </label>
                    <?php echo $drinkP; ?>
                </div>
            </div>
            <!-- 13th line -->
            <div class="mb-3 row">
                <div class="col-sm-6">
                    <label for="candyOrCandyBar" class="form-label">Candy or Candy Bar?: </label>
                    <?php echo $candyOrCandyBarP; ?>
                </div>
                <div class="col-sm-6">
                    <label for="dessert" class="form-label">Dessert: </label>
                    <?php echo $dessertP; ?>
                </div>
            </div>
            <!-- 14th line -->
            <div class="mb-3 row">
                <div class="col-sm-6">
                    <label for="summerActivity" class="form-label">Summer Activity: </label>
                    <?php echo $summerActivityP; ?>
                </div>
                <div class="col-sm-6">
                    <label for="game" class="form-label">Game: </label>
                    <?php echo $gameP; ?>
                </div>
            </div>
            <!-- 15th line -->
            <div class="mb-3 row">
                <div class="col-sm-6">
                    <label for="schoolSubjects" class="form-label">School Subject: </label>
                    <?php
                    for($i = 0; $i < sizeof($schoolSubjectsP); $i++)  {
                        if ($i+1 == sizeof($schoolSubjectsP)){
                            echo $schoolSubjectsP[$i]; 
                        } else {
                            echo $schoolSubjectsP[$i].", ";      
                        }
                    }
                    ?>
                </div>
                <div class="col-sm-6">
                    <label for="primarySong" class="form-label">Primary Song: </label>
                    <?php echo $primarySongP; ?>
                </div>
            </div>
            <!-- 16th line -->
            <div class="mb-3 row">
                <div class="col-sm">
                    <label for="scriptureStory" class="form-label">Scripture Story: </label>
                    <?php echo $scriptureStoryP; ?>
                </div>
                <!-- 17th line -->
                <div class="mb-3 row">
                    <div class="col-sm">
                        <label for="otherThingsLove" class="form-label">Any other favorite things, or thing you love?: </label>
                        <?php echo $otherThingsLoveP; ?>
                    </div>
                </div>
                <!-- 18th line -->
                <div class="mb-3 row">
                    <div class="col-sm">
                        <label for="anythingElseToTell" class="form-label">Is there anything else you want to tell us about you?: </label>
                        <?php echo $anythingElseToTellP; ?>
                    </div>
                </div>
        </form>
    </div>
</body>

</html>