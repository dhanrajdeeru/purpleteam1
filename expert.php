<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="expert.css">
</head>
<body>
    <div class="menu-bar">
        <img class="logo" src="logo.png" alt="" srcset="">
        <ul>
            <div class="name">
                    <h3 class="name1"> Name</h3>
                    <h3 class="role1"> Role</h3>
            </div>
            <div class="tna">Home </div>
            <div class="lus">Profile</div>
            <div class="at">About Attack</div>

        </ul>
        
    
    <div class="container">
        <div class="split left">
            <h3 class="pro">Windows</h3>
            <div class="indent"><a href="profile.html">Dashboard</a>>><a href="selecta.html">Assign</a> >> <a href="profile.html">Beginner</a></div>

                <div class="score ds">
                    <label class="ds1">20</label><br><label class="text1">Defend</label>
                    

                </div>
                <div class="score as">
                    <label class="as1">20</label><br><label class="text2">Attack</label>
                    
                </div>
                <div class="sfm1">
                    <h3 class="sfm"> Success and Failure merits</h3>
                </div>
            </div>
        </div>
        <div class="split right">
                <div><h3 class="pro1">Select the attack You want to assign for intermediate</h3></div>
                <form>
                    <div class=" split1 ">
                        <div class="container">
                            <select name="" id="first">
                                <option value=""> Select the system </option>
                            </select>
                            <select name="" id="second">
                                <option value=""> Select the tatic </option>
                            </select>       
                            <select name="" id="third">
                                <option value=""> details of tatic is below </option>
                            </select>
                            <select name="" id="third">
                                <option value=""> select the analyst </option>
                            </select>
                        </div>    
                    </div>
                    <button type="submit" class="button1" onclick="">ATTACK</button>
                </form>    
            </div>
        </div>  
    </div>
</div>
<script >
    var subjectObject = {
    "linux": {
      "Execution": ["Scheduled Task/Job: Cron - T1053.003","Command and Scripting Interpreter: Bash - T1059.004"],
      "Credential Access": ["Input Capture: Keylogging - T1056.001"],

    },
    "windows": {
        "Privilege Escalation": ["Process Injection: Dynamic-link Library Injection - T1055.001","Create Process with Token - T1134.002","Access Token Manipulation: Parent PID Spoofing -T1134.004"],
        "Execution": ['Native API - T1106','Windows Management Instrumentation -T1047'],
        "Discovery": ['Query Registry - T1012'],
        "Credential Access": ["Unsecured Credentials: Credentials In Files - T1552.001","Unsecured Credentials: Credentials in Registry - T1552.002","Unsecured Credentials: Group Policy Preferences - T1552.006"],
    },
    "web application":{
      "Denial Of Service" : ['Documents'],
      "Web Defacement" : ['Create TABLE'],
    }
}



window.onload = function(){
    var first = document.getElementById('first')
    var second = document.getElementById('second')
    var third = document.getElementById('third')

    for(var x in subjectObject){
        // console.log(x);
        first.options[first.options.length] = new Option(x)
    }

    first.onchange = function(){
        second.length = 1
        third.length = 1

        second.style.display = 'block'
        third.style.display = 'none'

        for(var y in subjectObject[this.value]){
            // console.log(y);
            second.options[second.options.length] = new Option(y)
        }
    }


    second.onchange = function(){
        third.length = 1

        third.style.display = 'block'
        z = subjectObject[first.value][this.value]
        console.log(z);
        for(let i=0; i<z.length; i++){
            third.options[third.options.length] = new Option(z[i])
        }
    }
}
</script>
</body>
</html>
