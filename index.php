<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="index.php" method="POST">
        <!-- MATCH 1 -->
        <div>
            <input type="text" placeholder="Morocco" name="MoroccoM1">
            <input type="text" placeholder="Croatia" name="CroatiaM1">
        </div>
        <div> 
            <input type="text" placeholder="Belgium" name="BelgiumM1">
            <input type="text" placeholder="Canada" name="CanadaM1">
        </div>
        <!-- MATCH 2 -->
        <div>
            <input type="text" placeholder="Morocco" name="MoroccoM2">
            <input type="text" placeholder="Canada" name="CanadaM2">
        </div>
        <div> 
            <input type="text" placeholder="Croatia" name="CroatiaM2">
            <input type="text" placeholder="Belgium" name="BelgiumM2">
        </div>
        <!-- MATCH 3 -->
        <div>
            <input type="text" placeholder="Morocco" name="MoroccoM3">
            <input type="text" placeholder="Belgium" name="BelgiumM3">
        </div>
        <div> 
            <input type="text" placeholder="Croatia" name="CroatiaM3">
            <input type="text" placeholder="Canada" name="CanadaM3">
        </div>
        
        <input type="submit" value="Simulate" name="simulate">
    
    </form>
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
              $morocco["goalsconceded"]+= $Croatia1;
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
    echo "
    <table class='table table-striped'>
        <thead>
          <tr>
            <th scope='col'>#</th>
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
        </thead>
        <tbody>
    ";
    foreach($groups as $country){
      echo "
      <tr>
            <th scope='row'>1</th>
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
  };
?>

</body>
</html>