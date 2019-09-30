<?php

if(isset($_POST["name"], $_POST["content"])){
 
  
  if($_POST["name"] == ''){
    $isName = false;
  }else{
    $isName = true;
  }
 
  if($_POST["content"] == ''){
    $isContent = false;
  }else{
    $isContent = true;
  }
}
?>
 
<?php
if(isset($isName, $isContent)){
  if($isName && $isContent){
 
    try{
      $pdo->beginTransaction();
     
      $sql = "INSERT INTO thread1 (name, content) VALUES (:_name, :_content)";
      $stmh = $pdo->prepare($sql);
      $stmh->bindValue(":_name", $_POST["name"], PDO::PARAM_STR);
      $stmh->bindValue(":_content", $_POST["content"], PDO::PARAM_STR);
    
      $stmh->execute();
      $pdo->commit();
 
    }catch(PDOException $Exception){
      $pdo->rollBack;
      print "エラー".$Exception->getMessage();
    }
  }
}
?>
