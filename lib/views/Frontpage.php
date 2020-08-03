<?php include "lib/includes/Header.php"; ?>
<div class="container">
    <img class="container-img" src="assets/css/images/background2.jpg" alt="">
    <div class="intro">
        <div class="intro-title">
            <h1>Corona Virus (COVID-19)</h1>
            <p><?php echo date("d-m-Y"); ?></p>
        </div>
        <div class="intro-data">
            <p>
                Total Confirmed: <span style="color: #e60000"><?php echo $confirmed; ?></span>
            </p>
            <p>
                Total Deaths: <span style="color: #17202a"><?php echo $deaths; ?></span>
            </p>
            <p>
                Total Recovered: <span style="color: #70a800"><?php echo $recovered; ?></span>
            </p>
        </div>
    </div>
    <div id="overview"></div>
    <div class="cases">
        <div class="cases-active">
            <div class="cases-title">
                <h1>Active Cases</h1>
                <div class="cases-rect"></div>
            </div>
            <div class="cases-now">
                <h2><?php echo $active; ?></h2>
                <p>Currently infected patients in</p>
            </div>
            <div class="cases-data">
                <p><span style="color: #8080ff;"><?php echo $mild; ?></span> <span>(96%)</span> Mild conditions 🤒</p>
                <p><span style="color: #e60000;"><?php echo $critical; ?></span> <span>(4%)</span> Critical conditions 😷</p>
            </div>
        </div>
        <div class="cases-closed">
            <div class="cases-title">
                <h1>Closed Cases</h1>
                <div class="cases-rect"></div>
            </div>
            <div class="cases-now">
                <h2><?php echo $closed; ?></h2>
                <p>Cases which had an outcome: </p>
            </div>
            <div class="cases-data">
                <p><span style="color: #70a800;"><?php echo $recovered; ?></span> <span>(<?php echo $rPercentage; ?>%)</span> Recovered 😄 </p>
                <p><span><?php echo $deaths ?></span> <span>(<?php echo $dPercentage; ?>%)</span> Deaths 😔 </p>
            </div>
        </div>
    </div>
    <div class="overview">
        <table class="fl-table">
            <thead>
                <th>Country:</th>
                <th>State:</th>
                <th>Total cases:</th>
                <th>Total deaths:</th>
                <th>Total recovered:</th>
                <th>Total active:</th>
            </thead>
            <?php echo $table_data; ?>
        </table>
    </div>
    <div id="prevention"></div>
    <div class="prevention-section">
        <div class="prevention">
            <div class="prevention-content">
                <div class="prev-head">
                    <img src="assets/css/images/stop.gif" alt="A hand in a red stop sign for corona prevention! ONLY TOGETHER WE CAN STOP THIS.">
                    <h1>STOP CORONA</h1>
                    <p>We can only control the coronavirus (COVID-19) together</p>
                </div>
                <div class="prev-content">
                    <ol>
                        <li>
                            <span>1</span> <strong>HOME</strong> Stay home as much as you can.
                        </li>
                        <li>
                            <span>2</span> <strong>DISTANCE</strong> Keep 1.5 meters away from others.
                        </li>
                        <li>
                            <span>3</span> <strong>HANDS</strong> Wash your hands more often.
                        </li>
                        <li>
                            <span>4</span> <strong>ELBOW</strong> Sneeze and cough in your elbow.
                        </li>
                        <li>
                            <span>5</span> <strong>PAPER</strong> Use tissue paper.
                        </li>
                    </ol>
                </div>
                <div class="prev-source">
                    <p>Source: <a href="http://rijksoverheid.nl">Rijksoverheid</a></p>
                </div>
            </div>
        </div>
        <div class="image">
            <div class="image-div">
                <img src="assets/css/images/corona.png" alt="Bottle of Corona Mexican Beer.">
            </div>
        </div>
    </div>
</div>
<?php include "lib/includes/Footer.php"; ?>