<?php
session_start();
?>
<!DOCTYPE html>
<form action method="post">
  <head> <h1><strong>Admin's uploading file </strong></h1></head>
  <link rel="stylesheet" href="./css/upload.css">

    <div class="form-group">
      <label for="title">Title <span>upload houses</span></label>
      <input type="text" name="title" id="title" class="form-controll"/>
    </div>
    <div class="form-group">
      <label for="caption">Caption <span>This caption should be descriptiv</span></label>
      <input type="text" name="caption" id="caption" class="form-controll"/>
    </div>
    
    <div class="form-group file-area">
          <label for="images">Images <span>Your images should be at least 400x300 wide</span></label>
      <input type="file" name="images" id="images" required="required" multiple="multiple"/>
      <div class="file-dummy">
        <div class="success">Great, your files are selected. Keep on.</div>
        <div class="default">Please select some files</div>
      </div>
    </div>
    
    <div class="form-group">
      <button type="submit">Upload images</button>
    </div>
  </form>
  
  
  
  
  
  
  <link href='https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700' rel='stylesheet' type='text/css'>
  
  <a href="http://scribblerockerz.com/drag-n-drop-file-input-without-javascript/" class="back-to-article" target="_blank">back to Article</a>