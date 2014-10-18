 <?php 
        require_once ("Includes/simplecms-config.php"); 
        require_once  ("Includes/connectDB.php");
        include("Includes/header.php");         
 ?>

      <div id="main">
        <button id="textChange">Change first div text</button>
        <div id="firstDiv">This is some text</div>
        <button id="textApender">Append text</button>
        <div id="secondDiv">Javascript is...</div>
        <button id="textCreator">Create some text</button>
        <div id="emptyDiv"></div>
     </div> <!--end main-->
        <script type="text/javascript">
            document.getElementById("textChange").onclick = function () {
                document.getElementById("firstDiv").innerHTML = "this works!";
            }
            document.getElementById("textApender").onclick = function () {
                document.getElementById("secondDiv").innerHTML = document.getElementById("secondDiv").innerHTML + "this is added!";
            }
            document.getElementById("textCreator").onclick = function () {
                document.getElementById("emptyDiv").innerHTML = "<ul><li>Cat</li><li>Dog</li><ul>";
            }
        </script>
        
<?php 
    include ("Includes/footer.php");
?>