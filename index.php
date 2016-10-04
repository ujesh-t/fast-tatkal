<?php
$str = "javascript:function D(a,b){c=b.split('|');d=false;for(q=0;q<c.length;q++){if(c[q]==a)d=true;}return d;}function E(){f0=document.forms['addPassengerForm']||document.forms['jpBook'];";

for($i=0;$i<6;$i++)
{
    
    if(isset($_POST["passenger$i"]) && $_POST["passenger$i"])
    {
        $str.= "if(f0['addPassengerForm:psdetail:$i:psgnName'])f0['addPassengerForm:psdetail:$i:psgnName'].value='".rawurlencode($_POST["passenger$i"])."';";
        $str.= "dq=document.querySelector('input[size=\'16\'][id^=\'addPassengerForm:psdetail:$i:\']');";
        $str.= "if(dq)dq.value='".rawurlencode($_POST["passenger$i"])."';";
        $str.= "if(f0['addPassengerForm:psdetail:$i:psgnAge'])f0['addPassengerForm:psdetail:$i:psgnAge'].value='".$_POST["age$i"]."';";
        $str.= "if(f0['addPassengerForm:psdetail:$i:psgnGender'])f0['addPassengerForm:psdetail:$i:psgnGender'].value='".$_POST["sex$i"]."';";
        $str.= "if(f0['addPassengerForm:psdetail:$i:berthChoice'])f0['addPassengerForm:psdetail:$i:berthChoice'].value='".$_POST["berthChoice$i"]."';";
        $str.= "if(f0['addPassengerForm:psdetail:$i:concessionOpt'])f0['addPassengerForm:psdetail:$i:concessionOpt'].checked='".$_POST["senior$i"]."';";
        if($_POST["senior$i"])
         $str.= "if(f0['addPassengerForm:psdetail:$i:concessionOpt'])f0['addPassengerForm:psdetail:$i:concessionOpt'].disabled=false;";
    }
}
if(isset($_POST['boardingPoint']))
{
    $str.= "if(f0['addPassengerForm:boardingStation']) f0['addPassengerForm:boardingStation'].value='".$_POST['boardingPoint']."';
            if(f0['addPassengerForm:mobileNo'])f0['addPassengerForm:mobileNo'].value='".$_POST['mobile']."';";
    $str.= "}E()";
}
else
{
    $str=null;
}


/*
javascript: function D(a, b) {
    c = b.split('|');
    d = false;
    for (q = 0; q < c.length; q++) {
        if (c[q] == a) d = true;
    }
    return d;
}


function E() {
    f0 = document.forms['addPassengerForm'] || document.forms['jpBook'];
    if (f0['addPassengerForm:psdetail:0:psgnName']) f0['addPassengerForm:psdetail:0:psgnName'].value = 'Arun Thomas';
    dq = document.querySelector('input[size=\'16\'][id^=\'addPassengerForm:psdetail:0:\']');
    if (dq) dq.value = 'Arun Thomas';
    if (f0['addPassengerForm:psdetail:0:psgnAge']) f0['addPassengerForm:psdetail:0:psgnAge'].value = '30';
    if (f0['addPassengerForm:psdetail:0:psgnGender']) f0['addPassengerForm:psdetail:0:psgnGender'].value = 'M';
    if (f0['addPassengerForm:psdetail:0:berthChoice']) f0['addPassengerForm:psdetail:0:berthChoice'].value = 'LB';
    if (f0['addPassengerForm:psdetail:0:foodChoice']) f0['addPassengerForm:psdetail:0:foodChoice'].value = 'N';
    if (f0['addPassengerForm:psdetail:1:psgnName']) f0['addPassengerForm:psdetail:1:psgnName'].value = 'Chinju Paul';
    dq = document.querySelector('input[size=\'16\'][id^=\'addPassengerForm:psdetail:1:\']');
    if (dq) dq.value = 'Chinju Paul';
    if (f0['addPassengerForm:psdetail:1:psgnAge']) f0['addPassengerForm:psdetail:1:psgnAge'].value = '25';
    if (f0['addPassengerForm:psdetail:1:psgnGender']) f0['addPassengerForm:psdetail:1:psgnGender'].value = 'F';
    if (f0['addPassengerForm:psdetail:1:berthChoice']) f0['addPassengerForm:psdetail:1:berthChoice'].value = 'LB';
    if (f0['addPassengerForm:psdetail:0:foodChoice']) f0['addPassengerForm:psdetail:0:foodChoice'].value = 'N';
    if (f0['addPassengerForm:psdetail:2:psgnName']) f0['addPassengerForm:psdetail:2:psgnName'].value = 'Anupama Thomas';
    dq = document.querySelector('input[size=\'16\'][id^=\'addPassengerForm:psdetail:2:\']');
    if (dq) dq.value = 'Anupama Thomas';
    if (f0['addPassengerForm:psdetail:2:psgnAge']) f0['addPassengerForm:psdetail:2:psgnAge'].value = '15';
    if (f0['addPassengerForm:psdetail:2:psgnGender']) f0['addPassengerForm:psdetail:2:psgnGender'].value = 'F';
    if (f0['addPassengerForm:psdetail:2:berthChoice']) f0['addPassengerForm:psdetail:2:berthChoice'].value = 'MB';
    if (f0['addPassengerForm:psdetail:0:foodChoice']) f0['addPassengerForm:psdetail:0:foodChoice'].value = 'N';
    if (f0['addPassengerForm:psdetail:0:foodChoice']) f0['addPassengerForm:psdetail:0:foodChoice'].value = 'N';
    if (f0['addPassengerForm:psdetail:0:foodChoice']) f0['addPassengerForm:psdetail:0:foodChoice'].value = 'N';
    if (f0['addPassengerForm:psdetail:0:foodChoice']) f0['addPassengerForm:psdetail:0:foodChoice'].value = 'N';
    if (f0['addPassengerForm:boardingStation']) f0['addPassengerForm:boardingStation'].value = 'PGT';
    if (f0['addPassengerForm:mobileNo']) f0['addPassengerForm:mobileNo'].value = '9535773676';
}
E()
*/

?>

<!DOCTYPE html>
<html>
    <head>
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>CODERS IRCTC BOOKING HELPER</h2>
                    <form action="index.php" method="post">
                    <table class="table">
                        <thead>
                            <tr><th>Name</th><th width="100px">Age</th><th>Gender</th><th>Berth Preference</th><th>S</th><th>Nationality</th></tr>
                        </thead>
                        <tbody>
                            <?php 
                            for($i=0; $i<6; $i++)
                            { ?>
                                
                                <tr>
                                    <td><input type="text" class="form-control" name="passenger<?php echo $i ?>"></td>
                                    <td><input type="text" class="form-control" name="age<?php echo $i ?>"></td>
                                    <td>
                                        <select name="sex<?php echo $i ?>" class="form-control">
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="berthChoice<?php echo $i ?>" class="form-control">
                                            <option value="LB">Lower Berth</option>
                                            <option value="UB">Upper Berth</option>
                                            <option value="MB">Middle Berth</option>
                                            <option value="SU">Side Upper</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input class="checkbox" type="checkbox" name="senior<?php echo $i ?>" value="true">
                                    </td>
                                    <td><select class="form-control"><option value="India">India</option></select></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-6"><input type="text" class="form-control" name="boardingPoint" placeholder="Boarding Point"></div>
                        <div class="col-md-6"><input type="text" class="form-control" name="mobile" placeholder="Mobile Number"></div>
                    </div> <br/>
                    <input type="submit" value="Generate" class="btn btn-success"> 
                    <?php if(isset($str)) echo '<a href="'.$str.'" class="btn btn-danger">Drag to ToolBar</a>'; ?>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>