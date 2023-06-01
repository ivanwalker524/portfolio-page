<?php
$svg = array();
foreach (glob("./files/svgs/*.svg") as $vectors) {
    $ph = pathinfo($vectors);
    $svg[$ph['filename']] = file_get_contents($vectors);
    // print_r($svg);

}
if (isset($_GET['ref']))
    $ref = $_GET['ref'];
else $ref = "home";
?>
<div class="container">
    <div class="container-flex">
        <div class="navigation">
            <div class="position-relative">
                <nav class="nav-links" id="nav">
                    <a href="?ref=home" class="<?php if ($ref == "home") echo "active" ?>">Home</a>
                    <a href="?ref=projects" class="<?php if ($ref == "projects") echo "active" ?>">Projects</a>
                    <a href="">Resume</a>
                    <div class="mode">
                        <div class="icons-flex icons"><?php include "./files/svgs/moon.svg" ?></div>
                    </div>
                </nav>
                <div class="icons-flex icons hide" onclick="toggleNav();"><?php include "./files/svgs/bars.svg" ?></div>
            </div>
        </div>
        <div>
            <div class="d-flex">
                <div class="left">
                    <div class="centered">
                        <div class="icon" style="position:relative;">
                            <div>
                                <a href="https://github.com">
                                    <div class="icons-flex icons">
                                        <?php include "./files/svgs/github.svg" ?>
                                    </div>
                                    <div>Github</div>
                                </a>
                            </div>
                            <div>
                                <a href="https://twitter.com">
                                    <div class="icons-flex icons">
                                        <?php include "./files/svgs/twitter.svg" ?>
                                    </div>
                                    <div>Twitter</div>
                                </a>
                            </div>
                            <div>
                                <a href="https://facebook.com/freecodecamp">
                                    <div class="icons-flex icons">
                                        <?php include "./files/svgs/facebook-f.svg" ?>
                                    </div>
                                    <div>Facebook</div>
                                </a>
                            </div>
                            <div>
                                <a href="https://mailto:ivanwalker524@gmail.com">
                                    <div class="icon-flex icons">
                                     <?php include "./files/svgs/envelope.svg" ?>
                                    </div>
                                    <div>Gmail</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div>
                        <?php
                        $files = "files/" . $ref . ".php";
                        if (file_exists($files)) require $files;
                        $files = "home";
                        ?>
                    </div>
                </div>
                <!-- <div class="flex">
                        <div class="img">
                            <img src="./images/tribute.png" alt="">
                        </div>
                        <div class="img">
                            <img src="./images/form.png" alt="">
                        </div>
                        <div class="img">
                            <img src="./images/landing.png" alt="">
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
</div>
<script>
    <?php include "./files/nav.js" ?>
</script>