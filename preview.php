<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Slum Book</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="style/style1.css">
</head>

<body>
  <?php
  // Check if form is process successfully
  if (isset($_POST["process"])) {
    // Retrieve data from the process form
    $fullName = $_POST["fullName"];
    $getName = $_POST["getName"];
    $nickNames = $_POST["nickNames"];
    $birthday = $_POST["birthday"];
    $grade = $_POST["grade"];
    $numBrothersNames = $_POST["numBrothersNames"];
    $numSistersNames = $_POST["numSistersNames"];
    $fallInFamily = $_POST["fallInFamily"];
    $teamsOrOutOfSchoolClasses = $_POST["teamsOrOutOfSchoolClasses"];
    $biggestFear = $_POST["biggestFear"];
    $mission = $_POST["mission"];
    $pets = $_POST["pets"];
    $howMany = $_POST["howMany"];
    $names = $_POST["names"];
    $book = $_POST["book"];
    $movie = $_POST["movie"];
    $tvShow = $_POST["tvShow"];
    $sport = $_POST["sport"];
    $thingToDo = $_POST["thingToDo"];
    $animal = $_POST["animal"];
    $food = $_POST["food"];
    $drink = $_POST["drink"];
    $candyOrCandyBar = $_POST["candyOrCandyBar"];
    $dessert = $_POST["dessert"];
    $summerActivity = $_POST["summerActivity"];
    $game = $_POST["game"];
    $schoolSubjects = $_POST["schoolSubjects"];
    $primarySong = $_POST["primarySong"];
    $scriptureStory = $_POST["scriptureStory"];
    $otherThingsLove = $_POST["otherThingsLove"];
    $anythingElseToTell = $_POST["anythingElseToTell"];
  }
  ?>
  <div class="container-sm mt-5 mb-5">
    <h1 class="text-center mb-5">GETTING TO KNOW YOU</h1>
    <!-- This is a form start -->
    <form action="final.php" method="POST">
      <!-- Form elements here -->
      <!-- 1st line -->
      <div class="mb-3 row">
        <div class="col-sm-6">
          <label for="fullName" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="fullNameP" name="fullNameP" required value="<?php echo $fullName ?>" readonly/>
        </div>
        <div class="col-sm-6">
          <label for="getName" class="form-label">How did you get your name?</label>
          <input type="text" class="form-control" id="getNameP" name="getNameP" required value="<?php echo $getName ?>" readonly/>
        </div>
      </div>
      <!-- 2nd line -->
      <div class="mb-3 row">
        <div class="col-sm">
          <label for="nickName" class="form-label">Nicknames</label>
          <input type="text" class="form-control" id="nickNamesP" name="nickNamesP" required value="<?php echo $nickNames ?>" readonly/>
        </div>
      </div>
      <!-- 3rd line -->
      <div class="mb-3 row">
        <div class="col-sm-6">
          <label for="birthday" class="form-label">Birthday</label>
          <input type="date" class="form-control" id="birthdayP" name="birthdayP" required value=<?php echo $birthday ?> readonly/>
        </div>
        <div class="col-sm-6">
          <label for="grade" class="form-label">Grade</label>
          <select class="form-select" aria-label="Grade" id="gradeP" name="gradeP" required readonly>
            <option><--Select Grade Options--></option>
            <option value="1" <?php
                              if ($grade == "1") {
                                echo "selected";
                              }
                              ?>>1</option>
            <option value="2" <?php
                              if ($grade == "2") {
                                echo "selected";
                              }
                              ?>>2</option>
            <option value="3" <?php
                              if ($grade == "3") {
                                echo "selected";
                              }
                              ?>>3</option>
            <option value="4" <?php
                              if ($grade == "4") {
                                echo "selected";
                              }
                              ?>>4</option>
            <option value="5" <?php
                              if ($grade == "5") {
                                echo "selected";
                              }
                              ?>>5</option>
            <option value="6" <?php
                              if ($grade == "6") {
                                echo "selected";
                              }
                              ?>>6</option>
            <option value="7" <?php
                              if ($grade == "7") {
                                echo "selected";
                              }
                              ?>>7</option>
            <option value="8" <?php
                              if ($grade == "8") {
                                echo "selected";
                              }
                              ?>>8</option>
            <option value="9" <?php
                              if ($grade == "9") {
                                echo "selected";
                              }
                              ?>>9</option>
            <option value="10" <?php
                                if ($grade == "10") {
                                  echo "selected";
                                }
                                ?>>10</option>
            <option value="11" <?php
                                if ($grade == "11") {
                                  echo "selected";
                                }
                                ?>>11</option>
            <option value="12" <?php
                                if ($grade == "12") {
                                  echo "selected";
                                }
                                ?>>12</option>
          </select>
        </div>
      </div>
      <!-- 4th line -->
      <div class="mb-3 row">
        <div class="col-sm">
          <label for="numBrothersNames" class="form-label">No. of Brothers and Names</label>
          <textarea class="form-control" id="numBrothersNamesP" name="numBrothersNamesP" rows="3" cols="50" required readonly>
          <?php echo $numBrothersNames ?>
            </textarea>
        </div>
      </div>
      <!-- 5th line -->
      <div class="mb-3 row">
        <div class="col-sm">
          <label for="numSistersNames" class="form-label">No. of Sisters and Names</label>
          <textarea class="form-control" id="numSistersNamesP" name="numSistersNamesP" rows="3" cols="50" required readonly>
          <?php echo $numSistersNames ?>
            </textarea>
        </div>
      </div>
      <!-- 6th line -->
      <div class="mb-3 row">
        <div class="col-sm">
          <label for="fallInFamily" class="form-label">Where do you fall in your family?</label>
          <select class="form-select" aria-label="Fall in family" id="fallInFamilyP" name="fallInFamilyP" required readonly>
            <option><--Select Options--></option>
            <option value="Eldest" <?php
                                    if ($fallInFamily == "Eldest") {
                                      echo "selected";
                                    }
                                    ?>>Eldest</option>
            <option value="Youngest" <?php
                                      if ($fallInFamily == "Youngest") {
                                        echo "selected";
                                      }
                                      ?>>Youngest</option>
            <option value="Middle" <?php
                                    if ($fallInFamily == "Middle") {
                                      echo "selected";
                                    }
                                    ?>>Middle</option>
          </select>
        </div>
      </div>
      <!-- 7th line -->
      <div class="mb-3 row">
        <label for="teamsOrOutOfSchoolClasses" class="form-label">Teams or Out-of-school classes?</label>
        <div class="col-sm-2">
          <input type="radio" class="btn-check" id="teamsP" name="teamsOrOutOfSchoolClassesP" value="Teams" <?php if ($teamsOrOutOfSchoolClasses == "Teams") { echo "checked"; }?> readonly/>
          <label class="btn btn-outline-primary" for="teams">Teams</label>
        </div>
        <div class="col-sm-10">
          <input type="radio" class="btn-check" id="outOfSchoolClassesP" name="teamsOrOutOfSchoolClassesP" value="Out-of-School Classes" <?php if ($teamsOrOutOfSchoolClasses == "Out-of-School Classes") { echo "checked";}?> readonly/>
          <label class="btn btn-outline-primary" for="outOfSchoolClasses">Out-of-School Classes</label>
        </div>
      </div>
      <!-- 8th line -->
      <div class="mb-3 row">
        <div class="col-sm-6">
          <label for="biggestFear" class="form-label">Biggest Fear</label>
          <textarea class="form-control" id="biggestFearP" name="biggestFearP" rows="3" cols="50" required readonly>
            <?php echo $biggestFear ?>
            </textarea>
        </div>
        <div class="col-sm-6">
          <label for="mission" class="form-label">Where would you like to serve a mission?</label>
          <textarea class="form-control" id="missionP" name="missionP" rows="3" cols="50" required readonly>
          <?php echo $mission ?>
            </textarea>
        </div>
      </div>
      <!-- 9th line -->
      <div class="mb-3 row">
        <div class="col-sm-5">
          <label for="pets" class="form-label">Pets</label>
          <input type="text" class="form-control" id="petsP" name="petsP" required value="<?php echo $pets ?>" readonly/>
        </div>
        <div class="col-sm-2">
          <label for="howMany" class="form-label">How Many?</label>
          <input type="number" class="form-control" id="howManyP" name="howManyP" required value="<?php echo $howMany ?>" readonly/>
        </div>
        <div class="col-sm-5">
          <label for="names" class="form-label">Names</label>
          <input type="text" class="form-control" id="namesP" name="namesP" required value="<?php echo $pets ?>" readonly/>
        </div>
      </div>
      <!-- 10th line -->
      <h3 class="text-center mt-5 mb-5">
        THESE ARE A FEW OF MY FAVORITE THINGS...
      </h3>
      <div class="mb-3 row">
        <div class="col-sm-4">
          <label for="book" class="form-label">Book</label>
          <input type="text" class="form-control" id="bookP" name="bookP" required value="<?php echo $book ?>" readonly/>
        </div>
        <div class="col-sm-4">
          <label for="movie" class="form-label">Movie</label>
          <input type="text" class="form-control" id="movieP" name="movieP" required value="<?php echo $movie ?>" readonly/>
        </div>
        <div class="col-sm-4">
          <label for="tvShow" class="form-label">TV Show</label>
          <input type="text" class="form-control" id="tvShowP" name="tvShowP" required value="<?php echo $tvShow ?>" readonly/>
        </div>
      </div>
      <!-- 11th line -->
      <div class="mb-3 row">
        <div class="col-sm-5">
          <label for="sport" class="form-label">Sport</label>
          <input type="text" class="form-control" id="sportP" name="sportP" required value="<?php echo $sport ?>" readonly/>
        </div>
        <div class="col-sm-7">
          <label for="thingToDo" class="form-label">Thing to do</label>
          <input type="text" class="form-control" id="thingToDoP" name="thingToDoP" required value="<?php echo $thingToDo ?>" readonly/>
        </div>
      </div>
      <!-- 12th line -->
      <div class="mb-3 row">
        <div class="col-sm-4">
          <label for="animal" class="form-label">Animal</label>
          <input type="text" class="form-control" id="animalP" name="animalP" required value="<?php echo $animal ?>" readonly/>
        </div>
        <div class="col-sm-4">
          <label for="food" class="form-label">Food</label>
          <input type="text" class="form-control" id="foodP" name="foodP" required value="<?php echo $food ?>" readonly/>
        </div>
        <div class="col-sm-4">
          <label for="drink" class="form-label">Drink</label>
          <input type="text" class="form-control" id="drinkP" name="drinkP" required value="<?php echo $drink ?>" readonly/>
        </div>
      </div>
      <!-- 13th line -->
      <div class="mb-3 row align-items-center">
        <label for="candyOrCandyBar" class="col-sm-2 form-label">Candy or Candy Bar?</label>
        <div class="col-sm-2">
          <input type="radio" class="form-check-input" id="candyOrCandyBarP" name="candyOrCandyBarP" value="Candy" <?php if ($candyOrCandyBar == "Candy") {echo "checked";}?> readonly/>
          <label class="form-check-label" for="candy">Candy</label>
        </div>
        <div class="col-sm-3">
          <input type="radio" class="form-check-input" id="candyOrCandyBarP" name="candyOrCandyBarP" value="Candy Bar" <?php if ($candyOrCandyBar == "Candy Bar") {echo "checked";} ?> readonly/>
          <label class="form-check-label" for="candyBar">Candy Bar</label>
        </div>
        <label for="dessert" class="col-sm-1 form-label">Dessert</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="dessertP" name="dessertP" required value="<?php echo $dessert ?>" readonly/>
        </div>
      </div>
      <!-- 14th line -->
      <div class="mb-3 row">
        <div class="col-sm-6">
          <label for="summerActivity" class="form-label">Summer Activity</label>
          <input type="text" class="form-control" id="summerActivityP" name="summerActivityP" required value="<?php echo $summerActivity ?>" readonly/>
        </div>
        <div class="col-sm-6">
          <label for="game" class="form-label">Game</label>
          <input type="text" class="form-control" id="gameP" name="gameP" required value="<?php echo $game ?>" readonly/>
        </div>
      </div>
      <!-- 15th line -->
      <div class="mb-3 row">
        <div class="col-sm-6">
          <label for="fallInFamily" class="form-label">School Subject</label>
          <select class="form-select" aria-label="School Subjects for Teenagers" id="schoolSubjectsP" name="schoolSubjectsP[]" multiple readonly>
            <option value="No subject selected."
            selected><--Select Subject Options--></option>
            <option value="English" <?php
                                    if (in_array("English", $schoolSubjects)) {
                                      echo "selected";
                                    }
                                    ?>>English</option>
            <option value="Mathematics" <?php
                                        if (in_array("Mathematics", $schoolSubjects)) {
                                          echo "selected";
                                        }
                                        ?>>Mathematics</option>
            <option value="Science" <?php
                                    if (in_array("Science", $schoolSubjects)) {
                                      echo "selected";
                                    }
                                    ?>>Science</option>
            <option value="Araling Panlipunan" <?php
                                                if (in_array("Araling Panlipunan", $schoolSubjects)) {
                                                  echo "selected";
                                                }
                                                ?>>Araling Panlipunan</option>
            <option value="Edukasyon sa Pagpapakatao (EsP)" <?php
                                                            if (in_array("Edukasyon sa Pagpapakatao (EsP)", $schoolSubjects)) {
                                                              echo "selected";
                                                            }
                                                            ?>>
              Edukasyon sa Pagpapakatao (EsP)
            </option>
            <option value="Physical Education" <?php
                                                if (in_array("Physical Education", $schoolSubjects)) {
                                                  echo "selected";
                                                }
                                                ?>>Physical Education</option>
            <option value="Technology and Livelihood Education (TLE)" <?php
                                                                      if (in_array("Technology and Livelihood Education (TLE)", $schoolSubjects)) {
                                                                        echo "selected";
                                                                      }
                                                                      ?>>
              Technology and Livelihood Education (TLE)
            </option>
            <option value="Filipino" <?php
                                      if (in_array("Filipino", $schoolSubjects)) {
                                        echo "selected";
                                      }
                                      ?>>Filipino</option>
          </select>
        </div>
        <div class="col-sm-6">
          <label for="primarySong" class="form-label">Primary Song</label>
          <input type="text" class="form-control" id="primarySongP" name="primarySongP" required value="<?php echo $primarySong ?>" readonly/>
        </div>
      </div>
      <!-- 16th line -->
      <div class="mb-3 row">
        <div class="col-sm">
          <label for="scriptureStory" class="form-label">Scripture Story</label>
          <input type="text" class="form-control" id="scriptureStoryP" name="scriptureStoryP" required value="<?php echo $scriptureStory ?>" readonly/>
        </div>
      </div>
      <!-- 17th line -->
      <div class="mb-3 row">
        <div class="col-sm">
          <label for="otherThingsLove" class="form-label">Any other favorite things, or thing you love?</label>
          <input type="text" class="form-control" id="otherThingsLoveP" name="otherThingsLoveP" required value="<?php echo $otherThingsLove ?>" readonly/>
        </div>
      </div>
      <!-- 18th line -->
      <div class="mb-3 row">
        <div class="col-sm">
          <label for="anythingElseToTell" class="form-label">Is there anything else you want to tell us about you?</label>
          <input type="text" class="form-control" id="anythingElseToTellP" name="anythingElseToTellP" required value="<?php echo $anythingElseToTell ?>" readonly/>
        </div>
      </div>
      <!-- 19th line -->
      <div class="mb-3 row">
        <div class="col-sm text-center">
          <button type="submit" id="submitP" name="submitP" value="submit" class="btn btn-primary" >
            SUBMIT
          </button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>