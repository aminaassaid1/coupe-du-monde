<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST">
    <!-- MATCH 1 -->
    <div>
        <input type="text" placeholder="Team1" name="Team1M1">
        <input type="text" placeholder="Team2" name="Team2M1">
    </div>
    <div> 
        <input type="text" placeholder="Team3" name="Team3M1">
        <input type="text" placeholder="Team4" name="Team4M1">
    </div>
    <!-- MATCH 2 -->
    <div>
        <input type="text" placeholder="Team1" name="Team1M2">
        <input type="text" placeholder="Team4" name="Team4M2">
    </div>
    <div> 
        <input type="text" placeholder="Team2" name="Team2M2">
        <input type="text" placeholder="Team3" name="Team3M2">
    </div>
    <!-- MATCH 3 -->
    <div>
        <input type="text" placeholder="Team1" name="Team1M3">
        <input type="text" placeholder="Team3" name="Team3M3">
    </div>
    <div> 
        <input type="text" placeholder="Team2" name="Team2M3">
        <input type="text" placeholder="Team4" name="Team4M3">
    </div>
    
    <input type="submit" value="Simulate" name="simulate">

</form>

<?php 
    // faire le traitement qu'après envoi du formulaire 
    if(isset($_POST['simulate'] )) {
        
        $points = array("Team1"=>0,"Team2"=>0,"Team3"=>0,"Team4"=>0);
        // $matchjoues = array("match1"=>0,"match2"=>0,"match3"=>0);
        // $input1 = $_POST['Team1M1'];
        // $input2 = $_POST['Team2M1'];
        // $input3 = $_POST['Team3M1'];
        // $input4 = $_POST['Team4M1'];

        // $input5 = $_POST['Team1M2'];
        // $input6 = $_POST['Team4M2'];
        // $input7 = $_POST['Team2M2'];
        // $input8 = $_POST['Team3M2'];

        // $input5 = $_POST['Team1M3'];
        // $input6 = $_POST['Team3M3'];
        // $input7 = $_POST['Team2M3'];
        // $input8 = $_POST['Team4M3'];
        //  MATCH 1
          if($_POST['Team1M1'] > $_POST['Team2M1']){
              $points["Team1"] += 3;
          }elseif($_POST['Team1M1'] < $_POST['Team2M1']){
            $points["Team2"] += 3;
          }elseif($_POST['Team1M1'] == $_POST['Team2M1']){
            $points["Team1"] += 1;
            $points["Team2"] += 1;
          }

          if($_POST['Team3M1'] > $_POST['Team4M1']){
            $points["Team3"] += 3;
        }elseif($_POST['Team3M1'] < $_POST['Team4M1']){
          $points["Team4"] += 3;
        }elseif($_POST['Team3M1'] == $_POST['Team4M1']){
          $points["Team3"] += 1;
          $points["Team4"] += 1;
        }

        // MATCH 2


        if($_POST['Team1M2'] > $_POST['Team4M2']){
            $points["Team1"] += 3;
        }elseif($_POST['Team1M2'] < $_POST['Team4M2']){
          $points["Team4"] += 3;
        }elseif($_POST['Team1M2'] == $_POST['Team4M2']){
          $points["Team1"] += 1;
          $points["Team4"] += 1;
        }

        if($_POST['Team2M2'] > $_POST['Team3M2']){
          $points["Team2"] += 3;
      }elseif($_POST['Team2M2'] < $_POST['Team3M2']){
        $points["Team3"] += 3;
      }elseif($_POST['Team2M2'] == $_POST['Team3M2']){
        $points["Team2"] += 1;
        $points["Team3"] += 1;
      }

    //   MATCH 3
        if($_POST['Team2M3'] > $_POST['Team3M3']){
            $points["Team2"] += 3;
        }elseif($_POST['Team2M3'] < $_POST['Team3M3']){
            $points["Team3"] += 3;
        }elseif($_POST['Team2M3'] == $_POST['Team3M3']){
            $points["Team2"] += 1;
            $points["Team3"] += 1;
        }

        if($_POST['Team2M3'] > $_POST['Team4M3']){
        $points["Team2"] += 3;
    }elseif($_POST['Team2M3'] < $_POST['Team4M3']){
        $points["Team4"] += 3;
    }elseif($_POST['Team2M3'] == $_POST['Team4M3']){
        $points["Team2"] += 1;
        $points["Team4"] += 1;
    }

    foreach($points as $teams => $scores){
        echo "$teams = $scores <br>";
    }
          


    }
?>

</body>
</html>