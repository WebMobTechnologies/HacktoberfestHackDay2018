<?php  
   $json = file_get_contents("https://api.myjson.com/bins/11ogfk");
   $data = json_decode($json, true);
   $elementCount  = count($data);
   if($_GET['lastname']!=null){
  for($i=0;$i<=$elementCount;$i++){
      if($data[$i]['name']==$_GET['lastname']){
        $str_arr = explode (" ", $data[$i]['name']);  
        echo "Last Name:".$str_arr[1];
          break;
      }
      else{
          echo "data not found";
          break;
      }
  }
}elseif($_GET['inrprice']!=null){
    for($i=0;$i<=$elementCount;$i++){
        if($data[$i]['balance']==$_GET['inrprice']){
            $str = substr($data[$i]['balance'], 1);
            echo "balance in INR :".$str*73.44;
            break;
        }
        else{
            echo "data not found";
            break;
        }
    }
}elseif(isset($_GET['tag'])){
    for($i=0;$i<=$elementCount;$i++){
        echo "Total tags is :".count($data[$i]['tags']);
        break;
    }
}elseif(isset($_GET['split'])){
    for($i=0;$i<=$elementCount;$i++){
        $str_arr = explode (",", $data[$i]['address']);  
        echo "Strret :" . $str_arr[0]. '<br>';
        echo "City :" .$str_arr[1].'<br>';
        echo "State  :" .$str_arr[2].'<br>';
        echo "Pincode  :" .$str_arr[3].'<br>';
        echo "New Address <br>";
        echo "================<br>";
    }
}elseif($_GET['fruit']!=null){
    for($i=0;$i<=$elementCount;$i++){
        if($data[$i]['favoriteFruit']==$_GET['fruit']){ 
            echo "favoriteFruit : ".$data[$i]['favoriteFruit'];
              break;
          }
          else{
              echo "data not found";
              break;
          }
    }
}
elseif($_GET['dates']!=null){
    $date1 = $_GET['dates'];
    $date2 = date("Y/m/d");
    
    $diff = abs(strtotime($date2) - strtotime($date1));
    
    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    
    printf("%d years, %d months, %d days\n", $years, $months, $days);
    }elseif($_GET['name1']!=null){
        for($i=0;$i<=$elementCount;$i++){
            if($data[$i]['name']==$_GET['name1']){
             $maxval= max($data[$i]['friends'][0]['age'],$data[$i]['friends'][1]['age'],$data[$i]['friends'][2]['age']);
             for($j=0;$j<=count($data[$i]['friends']);$j++){
                 if($data[$i]['friends'][$j]['age']==$maxval){
                        echo "oldest Friend : ".$data[$i]['friends'][$j]['name'];
                        break;
                }
             }
             break;
            }
           
        }
      }
else{
    echo "data????";
}
?>