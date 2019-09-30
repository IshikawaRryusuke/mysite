<?php
define( "FILE_DIR", "images/test/"); 
if(isset($isName, $isContent)){

  if(!$isName){
    print '名前が入力されていません。<br>';
  }

  if(!$isContent){
    print '内容が入力されていません。<br><br>';
  }
}
?>

<form name="post" method="post" action="index.php"　enctype="multipart/form-data">
  <input type="text" readonly name="name" value=<?=$_SESSION['NAME'] ?>><br>
  内容：<br>
  <textarea name="content" rows="3" cols="100"></textarea><br>
  <div class="button-panel">
      <input type="submit" value="送信">
    </div>
  <div class="element_wrap">　
		<label>
		<input type="file" name="attachment_file">
        </label>
	</div> 
</form>
<a href="Main.php">戻る</a>


<style>
    .button-panel {
  margin: 2em 0 0;
  width: 100%;
}
.button-panel input {
  background: #FF66FF;
  border-radius: 7px;
  border: none;
  color: #fff;
  cursor: pointer;
  height: 50px;
  font-family: 'Open Sans', sans-serif;
  font-size: 1.2em;
  letter-spacing: 0.05em;
  text-align: center;
  transition: background 0.3s ease-in-out;
  width: 30%;
  margin-top : 10px;
}
.button-panel input:hover {
    color:#dddddd;
  background-color:#CC3399;
}
textarea {
        border:  solid #CC3399;  
    border-radius: 0.67em;   
              
    background-color: snow; 
         
    }
.name{
    width:20%;
    height:10%;
    }
</style>
