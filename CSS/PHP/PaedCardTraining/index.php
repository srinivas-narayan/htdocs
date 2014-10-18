    <?php 
        echo "<br/>Inside index.php<br/>";
        require_once ("Includes/simplecms-config.php"); 
        require_once  ("Includes/connectDB.php");
        include("Includes/header.php");         
     ?>


    <div id="main">
    <h3>Paediatric Cardiology Training (UK)</h3>
    <p>Welcome to Paediatric Cardiology Training (UK). This website is aimed for those who are involved in Paediatric Cardiology training in the UK, and includes information for both prospective trainees and current trainees.Please feel free to add comments regarding any improvements or further information that you feel would be helpful.</p>
    <ol class="round">
        <li class="one">
            <h5>Login as admin </h5>
           The site admin username and password are stored in the config file in the Includes directory. 
        </li>
        <li class="two">
            <h5>Customize your site</h5>
             After you login, you can add, delete, and modify web pages.
         </li>
        <li class="three">
            <h5>Just trying this one out</h5>
            <a href="js.php">Some JavaScrip stuff...</a>
        </li>
        <li class="asterisk">
            <div class="visit">
                To learn more about PHP, visit <a href="http://php.net" title="PHP.net Website">http://php.net</a>. 
            </div>
         </li>
    </ol>


    </div>

</div> <!-- End of outer-wrapper which opens in header.php -->

<?php 
    include ("Includes/footer.php");
 ?>