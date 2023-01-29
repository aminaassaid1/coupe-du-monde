<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form  action="index.php" method="POST">
        <!-- MATCH 1 -->
        <div class="match">
        <h2 class="mb-4 mt-4">MATCH 1</h2>
          <div class="pardido">
              <div class="grp">
              <img class="rounded" src="img/Morocco-Flag.webp" alt="">
                <input type="text"  name="MoroccoM1">
              </div>
                <h3 class="d-flex align-items-center">VS</h3>
              <div class="grp">
                <input type="text" name="CroatiaM1">
                <img class="rounded" src="img/Flag_of_Croatia.svg.png" alt="">
              </div>
          </div>
          <div class="pardido"> 
              <div class="grp">
              <img src="img/belgium-flag.jpg" alt="">
              <input type="text" name="BelgiumM1">
              </div>
              <h3 class="d-flex align-items-center">VS</h3>
              <div class="grp">
              <input type="text" name="CanadaM1">
              <img src="img/Flag-Canada.webp" alt="">
              </div>
          </div>
        </div>

        <!-- MATCH 2 -->
        <div class="match">
        <h2 class="mb-4 mt-4">MATCH 2</h2>
          <div class="pardido">
              <div class="grp">
                <img src="img/Morocco-Flag.webp" alt="">
                <input type="text"  name="MoroccoM2">
              </div>
              <h3 class="d-flex align-items-center">VS</h3>
              <div class="grp">
                <input type="text" name="CanadaM2">
                <img  src="img/Flag-Canada.webp" alt="">
              </div>
          </div>
          <div class="pardido"> 
              <div class="grp">
              <img src="img/Flag_of_Croatia.svg.png" alt="">
                <input type="text" name="CroatiaM2">
              </div class="pardido">
              <h3 class="d-flex align-items-center">VS</h3>
              <div class="grp">
                <input type="text" name="BelgiumM2">
                <img src="img/belgium-flag.jpg" alt="">
              </div>
          </div>
        </div>
        <!-- MATCH 3 -->
        <div class="match">
          <h2 class="mb-4 mt-4">MATCH 3</h2>
          <div class="pardido">
              <div class="grp">
                <img src="img/Morocco-Flag.webp" alt="">
                <input type="text" name="MoroccoM3">
              </div>
              <h3 class="d-flex align-items-center">VS</h3>
              <div class="grp">
                <input type="text" name="BelgiumM3">
                <img src="img/belgium-flag.jpg" alt="">
              </div>
          </div>
          <div class="pardido"> 
            <div class="grp">
            <img src="img/Flag_of_Croatia.svg.png" alt="">
              <input type="text" name="CroatiaM3">
            </div>
            <h3 class="d-flex align-items-center">VS</h3>
            <div class="grp">
              <input type="text" name="CanadaM3">
              <img src="img/Flag-Canada.webp" alt="">
            </div>
          </div>
        </div>
        
        <input type="submit" value="Simulate" name="simulate">
    
    </form>
    <table class="table table-dark table-striped-columns">
        <tbody>
          <tr>
            <th scope='col'>Teams</th>
            <th scope='col'>points</th>
            <th scope='col'>match joues</th>
            <th scope='col'>matche swon</th>
            <th scope='col'>tied matches</th>
            <th scope='col'>lost matches</th>
            <th scope='col'>goal sscored</th>
            <th scope='col'>goal sconceded</th>
            <th scope='col'>goal difference </th>
          </tr>
<?php 
    // faire le traitement qu'après envoi du formulaire 
    if(isset($_POST['simulate'] )) {
    
      $morocco = ["nom"=>"Morocco","pts"=>0,"matchjoues"=>0,"matcheswon"=>0,"tiedmatches"=>0,"lostmatches"=>0,"goalsscored"=>0,"goalsconceded"=>0,"goaldifference"=>0];
      $Croatia = ["nom"=>"Croatia","pts"=>0,"matchjoues"=>0,"matcheswon"=>0,"tiedmatches"=>0,"lostmatches"=>0,"goalsscored"=>0,"goalsconceded"=>0,"goaldifference"=>0];
      $Belgium = ["nom"=>"Belgium","pts"=>0,"matchjoues"=>0,"matcheswon"=>0,"tiedmatches"=>0,"lostmatches"=>0,"goalsscored"=>0,"goalsconceded"=>0,"goaldifference"=>0];
      $Canada = ["nom"=>"Canada","pts"=>0,"matchjoues"=>0,"matcheswon"=>0,"tiedmatches"=>0,"lostmatches"=>0,"goalsscored"=>0,"goalsconceded"=>0,"goaldifference"=>0];
      
      $maroc1 = $_POST['MoroccoM1'];
      $croatia1 = $_POST['CroatiaM1'];
      $belgium1 = $_POST['BelgiumM1'];
      $canada1 = $_POST['CanadaM1'];

      $maroc2 = $_POST['MoroccoM2'];
      $canada2 = $_POST['CanadaM2'];
      $croatia2= $_POST['CroatiaM2'];
      $belgium2 = $_POST['BelgiumM2'];

      $maroc3 = $_POST['MoroccoM3'];
      $belgium3 = $_POST['BelgiumM3'];
      $croatia3= $_POST['CroatiaM3'];
      $canada3 = $_POST['CanadaM3'];

      //  MATCH 1
          if($_POST['MoroccoM1'] > $_POST['CroatiaM1']){
              $morocco["pts"] += 3;
              $morocco["matchjoues"] +=1;
              $Croatia["matchjoues"] +=1;  
              $morocco["matcheswon"] +=1;  
              $Croatia["lostmatches"] +=1; 
              $morocco["goalsscored"]+= $maroc1;
              $Croatia["goalsscored"]+= $croatia1;
              $morocco["goalsconceded"]+= $croatia1;
              $Croatia["goalsconceded"]+= $maroc1; 

          }elseif($_POST['MoroccoM1'] < $_POST['CroatiaM1']){
            $Croatia["pts"] += 3;
            $morocco["matchjoues"] +=1;
            $Croatia["matchjoues"] +=1;  
            $Croatia["matcheswon"] +=1;  
            $morocco["lostmatches"] +=1;
            $Croatia["goalsscored"]+= $croatia1;
            $morocco["goalsscored"]+= $maroc1;
            $morocco["goalsconceded"]+= $croatia1;
            $Croatia["goalsconceded"]+= $maroc1;
          }elseif($_POST['MoroccoM1'] == $_POST['CroatiaM1']){
            $morocco["pts"] += 1;
            $Croatia["pts"] += 1;
            $morocco["matchjoues"] +=1;
            $Croatia["matchjoues"] +=1;
            $morocco["tiedmatches"] +=1;
            $Croatia["tiedmatches"] +=1;
            $morocco["goalsscored"] += $maroc1;
            $Croatia["goalsscored"] += $croatia1;
            $morocco["goalsconceded"]+= $croatia1;
            $Croatia["goalsconceded"]+= $maroc1;
          }

          if($_POST['BelgiumM1'] > $_POST['CanadaM1']){
            $Belgium["pts"] += 3;
            $Belgium["matchjoues"] +=1;
            $Canada["matchjoues"] +=1;  
            $Belgium["matcheswon"] +=1;  
            $Canada["lostmatches"] +=1;
            $Belgium["goalsscored"] += $belgium1;
            $Canada["goalsscored"] +=$canada1;
            $Belgium["goalsconceded"]+=$canada1;
            $Canada["goalsconceded"] += $belgium1;
        }elseif($_POST['BelgiumM1'] < $_POST['CanadaM1']){
          $Canada["pts"] += 3;
          $Belgium["matchjoues"] +=1;
          $Canada["matchjoues"] +=1;  
          $Canada["matcheswon"] +=1;  
          $Belgium["lostmatches"] +=1;
          $Belgium["goalsscored"] += $belgium1;
          $Canada["goalsscored"] +=$canada1;
          $Belgium["goalsconceded"]+=$canada1;
          $Canada["goalsconceded"] += $belgium1;
          $Belgium["goalsconceded"]+=$canada1;
          $Canada["goalsconceded"] += $belgium1;
        }elseif($_POST['BelgiumM1'] == $_POST['CanadaM1']){
          $Belgium["pts"] += 1;
          $Canada["pts"] += 1;
          $Canada["matchjoues"] +=1;
          $Belgium["matchjoues"] +=1;
          $Belgium["tiedmatches"] +=1;
          $Canada["tiedmatches"] +=1;
          $Belgium["goalsscored"] += $belgium1;
          $Canada["goalsscored"] +=$canada1;
          $Belgium["goalsconceded"]+=$canada1;
          $Canada["goalsconceded"] += $belgium1;
        }

        // MATCH 2


        if($_POST['MoroccoM2'] > $_POST['CanadaM2']){
          $morocco["pts"] += 3;
          $morocco["matchjoues"] +=1;
          $Canada["matchjoues"] +=1;  
          $morocco["matcheswon"] +=1;  
          $Canada["lostmatches"] +=1;
          $morocco["goalsscored"] += $maroc2;
          $Canada["goalsscored"] += $canada2 ;
          $morocco["goalsconceded"]+=$canada2;
          $Canada["goalsconceded"] += $maroc2;
        }elseif($_POST['MoroccoM2'] < $_POST['CanadaM2']){
          $Canada["pts"] += 3;
          $morocco["matchjoues"] +=1;
          $Canada["matchjoues"] +=1;  
          $Canada["matcheswon"] +=1;  
          $morocco["lostmatches"] +=1;
          $morocco["goalsscored"] += $maroc2;
          $Canada["goalsscored"] += $canada2 ;
          $morocco["goalsconceded"]+=$canada2;
          $Canada["goalsconceded"] += $maroc2;
        }elseif($_POST['MoroccoM2'] == $_POST['CanadaM2']){
          $morocco["pts"] += 1;
          $Canada["pts"] += 1;
          $morocco["matchjoues"] +=1;
          $Canada["matchjoues"] +=1;
          $morocco["tiedmatches"] +=1;
          $Canada["tiedmatches"] +=1;
          $morocco["goalsscored"] += $maroc2;
          $Canada["goalsscored"] += $canada2 ;
          $morocco["goalsconceded"]+=$canada2;
          $Canada["goalsconceded"] += $maroc2;   
        }

        if($_POST['CroatiaM2'] > $_POST['BelgiumM2']){
          $Croatia["pts"] += 3;
          $Croatia["matchjoues"] +=1;
          $Belgium["matchjoues"] +=1;  
          $Croatia["matcheswon"] +=1;  
          $Belgium["lostmatches"] +=1;
          $Belgium["goalsscored"] += $belgium2;
          $Croatia["goalsscored"] += $croatia2;
          $Belgium["goalsconceded"]+=$croatia2;
          $Croatia["goalsconceded"] += $belgium2;
      }elseif($_POST['CroatiaM2'] < $_POST['BelgiumM2']){
        $Belgium["pts"] += 3;
        $Belgium["matchjoues"] +=1;
        $Croatia["matchjoues"] +=1;  
        $Belgium["matcheswon"] +=1;  
        $Croatia["lostmatches"] +=1;
        $Belgium["goalsscored"] += $belgium2;
        $Croatia["goalsscored"] += $croatia2 ;
        $Belgium["goalsconceded"]+=$croatia2;
        $Croatia["goalsconceded"] += $belgium2;
      }elseif($_POST['CroatiaM2'] == $_POST['BelgiumM2']){
        $Croatia["pts"] += 1;
        $Belgium["pts"] += 1;
        $Belgium["matchjoues"] +=1;
        $Croatia["matchjoues"] +=1;   
        $Belgium["tiedmatches"] +=1;
        $Croatia["tiedmatches"] +=1;
        $Belgium["goalsscored"] += $belgium2;
        $Croatia["goalsscored"] += $croatia2 ;
        $Belgium["goalsconceded"]+=$croatia2;
        $Croatia["goalsconceded"] += $belgium2;
      }

    //   MATCH 3
        if($_POST['MoroccoM3'] > $_POST['BelgiumM3']){
          $morocco["pts"] += 3;
          $morocco["matchjoues"] +=1;
          $Belgium["matchjoues"] +=1;  
          $morocco["matcheswon"] +=1;  
          $Belgium["lostmatches"] +=1;
          $Belgium["goalsscored"] += $belgium3;
          $morocco["goalsscored"] += $maroc3;
          $Belgium["goalsconceded"]+=$maroc3;
          $morocco["goalsconceded"] += $belgium3;
        }elseif($_POST['MoroccoM3'] < $_POST['BelgiumM3']){
          $Belgium["pts"] += 3;
          $morocco["matchjoues"] +=1;
          $Belgium["matchjoues"] +=1;  
          $Belgium["matcheswon"] +=1;  
          $morocco["lostmatches"] +=1;
          $Belgium["goalsscored"] += $belgium3;
          $morocco["goalsscored"] += $maroc3;
          $Belgium["goalsconceded"]+=$maroc3;
          $morocco["goalsconceded"] += $belgium3;
        }elseif($_POST['MoroccoM3'] == $_POST['BelgiumM3']){
          $morocco["pts"] += 1;
          $Belgium["pts"] += 1;
          $morocco["matchjoues"] +=1;
          $Belgium["matchjoues"] +=1; 
          $morocco["tiedmatches"] +=1;
          $Belgium["tiedmatches"] +=1;
          $Belgium["goalsscored"] += $belgium3;
          $morocco["goalsscored"] += $maroc3; 
          $Belgium["goalsconceded"]+=$maroc3;
          $morocco["goalsconceded"] += $belgium3;   

        }

        if($_POST['CroatiaM3'] > $_POST['CanadaM3']){
          $Croatia["pts"] += 3;
          $Canada["matchjoues"] +=1;
          $Croatia["matchjoues"] +=1;  
          $Croatia["matcheswon"] +=1;  
          $Canada["lostmatches"] +=1;
          $Croatia["goalsscored"] += $croatia3;
          $Canada["goalsscored"] += $canada3;
          $Canada["goalsconceded"]+=$canada3;
          $Croatia["goalsconceded"] += $croatia3;
    }elseif($_POST['CroatiaM3'] < $_POST['CanadaM3']){
      $Canada["pts"] += 3;
      $Canada["matchjoues"] +=1;
      $Croatia["matchjoues"] +=1;  
      $Canada["matcheswon"] +=1;  
      $Croatia["lostmatches"] +=1;
      $Croatia["goalsscored"] += $croatia3;
      $Canada["goalsscored"] += $canada3 ;
      $Canada["goalsconceded"]+=$canada3;
      $Croatia["goalsconceded"] += $croatia3;
    }elseif($_POST['CroatiaM3'] == $_POST['CanadaM3']){
      $Canada["pts"] += 1;
      $Croatia["pts"] += 1;
      $Canada["matchjoues"] +=1;
      $Croatia["matchjoues"] +=1;  
      $Canada["tiedmatches"] +=1;
      $Croatia["tiedmatches"] +=1;
      $Croatia["goalsscored"] += $croatia3;
      $Canada["goalsscored"] += $canada3 ;
      $Canada["goalsconceded"]+=$canada3;
      $Croatia["goalsconceded"] += $croatia3; 

    }
    $groups= [ $morocco , $Croatia , $Canada, $Belgium];
    foreach($groups as $country){
      
      echo "
      <tr>
            <td>".$country["nom"]."</td>
            <td>".$country["pts"]."</td>
            <td>".$country["matchjoues"]."</td>
            <td>".$country["matcheswon"]."</td>
            <td>".$country["tiedmatches"]."</td>
            <td>".$country["lostmatches"]."</td>
            <td>".$country["goalsscored"]."</td>
            <td>".$country["goalsconceded"]."</td>
            <td>".$country["goaldifference"]=$country["goalsscored"]-$country["goalsconceded"]."</td>        
      </tr>";
      
    };
    foreach ($groups as $contry =>)
  };
?>
        </tbody>
    </table>
</body>
</html>