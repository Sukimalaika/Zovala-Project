<?php 

// a string of county data
$county_data = "1. Mombasa. – Abdulswamad Nassir – ODM,
2. Kwale. – Fatuma Achani – UDA,
3. Kilifi. – Gideon Mung’aro – ODM,
4. Tana River. – Dhadho Godhana – ODM,
5. Lamu. – Issa Abdallah Timamy – ANC,
6. Taita-Taveta. – Andrew Mwadime – Independent,
7. Garissa. – Nathif Jama – ODM,
8. Wajir. – Ahmed Abdullahi – ODM,
9. Mandera. – Mohamed Adan Khalif - UDM,
10. Marsabit – Mohamud Ali – ODM,
11. Isiolo – Abdi Hassan Guyo – Jubilee,
12. Meru – Kawira Mwangaza – Independent,
13. Tharaka Nithi – Muthomi Njuki – UDA,
14. Embu – Cecily Mbarire – UDA,
15. Kitui – Julius Malombe – Wiper,
16. Machakos – Wavinya Ndeti – Wiper,
17. Makueni – Mutula Kilonzo – Wiper.,
18. Nyandarua – Moses Kiarie – UDA,
19. Nyeri – Mutahi Kahiga – UDA,
20. Kirinyaga. – Ann Waiguru – UDA,
21. Murang’a – Irungu Kang’ata – UDA,
22. Kiambu. – Kimani Wamatangi – Jubilee,
23. Turkana. – Jeremiah Lomurkai – ODM,
24. West Pokot. – Simon Kachapin. – UDA,
25. Samburu. – Jonathan Leleliit – UDA,
26. Trans-Nzoia. – George Natembeya – DAP-K,
27. Uasin gishu. – Jonathan Bii – UDA,
28. Elgeyo Marakwet. – Wisley Rotich – UDA,
29. Nandi. – Stephen Sang – UDA,
30. Baringo – Benjamin Cheboi. – UDA,
31. Laikipia – Joshua Irungu – UDA,
32. Nakuru. – Susan Kihika – UDA,
33. Narok – Patrick Ole Ntutu – UDA,
34. Kajiado. – Joseph Ole Lenku – ODM,
35. Kericho. – Dr. Erick Mutai – UDA,
36. Bomet. – Hillary Barchok – UDA,
37. Kakamega. – Fernandes Barasa – ODM,
38. Vihiga. – Wilber Ottichilo – ODM,
39. Bungoma. – Ken Lusaka – Ford Kenya,
40. Busia. – Paul Otuoma – ODM,
41. Siaya. – James Orengo. – ODM,
42. Kisumu. – Anyang’ Nyong’o. – ODM,
43. Homabay. – Gladys Wanga – ODM,
44. Migori. – Ochillo Ayacko – ODM,
45. Kisii. – Simba Arati – ODM,
46. Nyamira. – Amos Nyaribo - UPA,
47. Nairobi. – Johnson Sakaja – UDA";


// You should NOT modify anything above this line

// Your code starts here

print $county_data; //Primitive (int,string,boolean,chars,float/double)

//Splitting this data(splitting strings by a string in php)
/*$small_string = "Joshua Omondi";

//delimeter is the string you are splitting by
$small_array = explode(' ',$small_string);

//print $small_array; //complex print_r / var_dump

print "<br/>";
print "<h1> this is using var_dump"
var_dump($small_array);

print "<br/>";
print_r($small_array);



*/
$county_array = explode(",",$county_data);
/*
print "<h1>The array</h1>";
var_dump($county_array);
print "<h1>The contents of the array</h1>";
echo $county_array[0].'<br/>';
echo $county_array[20].'<br/>';
echo $county_array[40].'<br/>';
echo $county_array[46];

print "<h1>The second part</h1>";
print_r(explode("–",$county_array[0]));echo "<br/>";
print_r(explode("–",$county_array[20]));echo "<br/>";
print_r(explode("–",$county_array[40]));echo "<br/>";
print_r(explode("–",$county_array[46]));echo "<br/>";
*/
//use loops

//use loops :: please use a loop

echo "<table border=1 cellspacing=5 cellpadding=5>";
echo "<thead>";
echo "<tr>";
echo "<th>#</th> <th>County</th> <th>Governor</th><th>Party</th>";
echo "</tr>";
echo "</thead>";

foreach($county_array as $row):
    echo "<tr>";
    $cells = explode("–",$row);
    var_dump($cells);
    //print $row;
    foreach($cells as $index => $cell):
        //check the length of cells

        //if 2, split index 1 into two

        //replace $cell

        //continue
        
        //Assignment 2
        //display the distribution of political parties in a pie chart
        if($index == 0){
            $temp = explode('.',$cell);
            echo "<td>",$temp[0]."</td>";
            echo "<td>",$temp[1]."</td>";
        }
          //  else if($index=1){-
                //check if the bad is there
         //   }
            else{
             echo "<td>$cell</td>";	
        }
        //echo '<br/>'
        //var_dump($cell);
            
        endforeach;
    
        
        echo "</tr>";
    
    endforeach;
    //die();
    
    $dataPoints = array( 
        array("label"=>"ODM", "y"=>34.05),
        array("label"=>"UDA", "y"=>40.44),
        array("label"=>"ANC", "y"=>2.12),
        array("label"=>"UPA", "y"=>2.12),
        array("label"=>"UDM", "y"=>2.12),
        array("label"=>"DAP - K", "y"=>2.12),
        array("label"=>"Wiper", "y"=>6.38),
        array("label"=>"Jubilee", "y"=>4.26),
        array("label"=>"Ford Kenya", "y"=>2.12),
        array("label"=>"Independent", "y"=>4.27)
    )
     
    
    ?>
    
    <!DOCTYPE HTML>
    <html>
    <head>
    <script>
    window.onload = function() {
     
     
    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title: {
            text: "Political Party Distribution"
        },
        subtitles: [{
            text: "Kenya 2022"
        }],
        data: [{
            type: "pie",
            yValueFormatString: "#,##0.00\"%\"",
            indexLabel: "{label} ({y})",
            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }]
    });
    chart.render();
     
    }
    </script>
    </head>
    <body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </body>
    </html>