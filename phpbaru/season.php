<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: antiquewhite;
    }
    td{
        background-color: whitesmoke;
        border-radius: 20px;
        padding: 10px;
    }
  .radio.hover{
    color: rgb(0, 255, 242);
  }

  .radio.focus{
    color: blue;
  }
</style>


<body>
<?php
                    if(isset($_POST ['month'])){
                        $month = $_POST['month'];

                        if($month== 'December' || $month== 'January' || $month== 'February'){
                            header("Location: winter.php");
                    }else if($month== 'March' || $month== 'April' || $month== 'May'){
                        header("Location: spring.php");
                    }else if($month== 'June' || $month== 'July' || $month== 'August'){
                        header("Location: summer.php");
                    }else if($month== 'September' || $month== 'October' || $month== 'November'){
                        header("Location: autumn.php");
                    }else{
                        exit();
                    }
                }
                    ?>
    <div style="color: rgb(0, 0, 0); border-radius: 20px;">
    <h1 style="text-align: center;">What's The <span style="color: rgb(241, 22, 22);">s</span><span style="color: aqua;">e</span><span style="color: rgb(255, 221, 0);">a</span><span style="color: blueviolet;">s</span><span style="color: brown;">o</span><span style="color: burlywood;">n</span> At The Time</h1>

    <form action="#" method="post">
    <table border="1" cellspacing="20" style="border-color: transparent;" align="center">
        
        <tr>
            <td><label class="radio"><input type="radio" name="month" value="January">January</label></td>
            <td><label class="radio"><input type="radio" name="month" value="February">February</label></td>
            <td><label class="radio"><input type="radio" name="month" value="March">March</label></td>
            <td><label class="radio"><input type="radio" name="month" value="April">April</label></td>
        </tr>
        <tr>
            <td><label class="radio"><input type="radio" name="month" value="May">May</label></td>
            <td><label class="radio"><input type="radio" name="month" value="June">June</label></td>
            <td><label class="radio"><input type="radio" name="month" value="July">July</label></td>
            <td><label class="radio"><input type="radio" name="month" value="August">August</label></td>
        </tr>
        <tr>
            <td><label class="radio"><input type="radio" name="month" value="September">September</label></td>
            <td><label class="radio"><input type="radio" name="month" value="October">October</label></td>
            <td><label class="radio"><input type="radio" name="month" value="November">November</label></td>
            <td><label class="radio"><input type="radio" name="month" value="December">December</label></td>
        </tr>

        <tr>
           <td colspan="4" style="text-align: center;" border-color="transparent" background-color="transparent"> 
            
                <div>
                    <button type="submit" class="btn">See Season</button>
                </div>
            </form>
            </td>
        </tr>
    </table>
    </div>
</body>
</html>