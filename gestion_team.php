<?php
include "header.php";
?>
<style>
    div.home {
        height: 1370px;
    }

    table, tr, td {
        border: 1px solid white;
    }

    table, tr {
        display: inline-block;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
    }

    tr {
        text-align: center;
    }

    td {
        margin: 0 10px 20px;
    }

    div img {
        width: 100%;
        height: 100%;
    }

    td div {
        width: 100%;
        height: 100%;
        text-align: center;
    }

    /*New Style*/

    html {
        box-sizing: border-box;
    }

    *, *:before, *:after {
        box-sizing: inherit;
    }

    .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
    }

    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
    }

    .card {
        /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);*/
        margin: 20px;
        box-shadow: 5px 5px 10px 0px #FCDBDE;
        border-radius: 20px;
        overflow: hidden;
    }

    .container {
        background-color: #303133;
        padding: 0 16px;
        display: grid;
    }

    .container::after, .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .title {
        float: left;
        color: grey;
    }

    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #9E0B17;
        text-align: center;
        cursor: pointer;
        width: 100%;
        border-radius: 10px;
    }

    .button:hover {
        background-color: #F7959D;
        color: black;
    }

    h2 {
        color: white;
    }



</style>
<div class="containers" style="margin-left: 0;">
    <div class="home">
        <!--        1st row --------------------------------------------------------------->
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="https://www.xovi.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png"
                         alt="Jane" style="width:100%">
                    <div class="container">
                        <h2>Jane Doe</h2>
                        <p class="title">CEO & Founder</p><br>
                        <!--                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>-->
                        <p><a href="mailto:example@example.com">example@example.com</a></p>
                        <p><a href="tel:4387285533">(514) 123 1234</a></p>
                        <p>
                            <button class="button">Contact</button>
                        </p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="https://www.xovi.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png"
                         alt="Mike" style="width:100%">
                    <div class="container">
                        <h2>Mike Ross</h2>
                        <p class="title">Art Director</p><br>
                        <!--                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>-->
                        <p><a href="mailto:example@example.com">example@example.com</a></p>
                        <p><a href="tel:4387285533">(514) 123 1234</a></p>
                        <p>
                            <button class="button">Contact</button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="https://www.xovi.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png"
                         alt="John" style="width:100%">
                    <div class="container">
                        <h2>John Doe</h2>
                        <p class="title">Designer</p><br>
                        <!--                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>-->
                        <p><a href="mailto:example@example.com">example@example.com</a></p>
                        <p><a href="tel:4387285533">(514) 123 1234</a></p>
                        <p>
                            <button class="button">Contact</button>
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <!--        2nd row --------------------------------------------------------------->

        <div class="row">


            <div class="column">
                <div class="card">
                    <img src="https://www.xovi.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png"
                         alt="John" style="width:100%">
                    <div class="container">
                        <h2>John Doe</h2>
                        <p class="title">Designer</p><br>
                        <!--                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>-->
                        <p><a href="mailto:example@example.com">example@example.com</a></p>
                        <p><a href="tel:4387285533">(514) 123 1234</a></p>
                        <p>
                            <button class="button">Contact</button>
                        </p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="https://www.xovi.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png"
                         alt="John" style="width:100%">
                    <div class="container">
                        <h2>John Doe</h2>
                        <p class="title">Designer</p><br>
                        <!--                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>-->
                        <p><a href="mailto:example@example.com">example@example.com</a></p>
                        <p><a href="tel:4387285533">(514) 123 1234</a></p>
                        <p>
                            <button class="button">Contact</button>
                        </p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="https://www.xovi.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png"
                         alt="John" style="width:100%">
                    <div class="container">
                        <h2>John Doe</h2>
                        <p class="title">Designer</p><br>
                        <!--                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>-->
                        <p><a href="mailto:example@example.com">example@example.com</a></p>
                        <p><a href="tel:4387285533">(514) 123 1234</a></p>
                        <p>
                            <button class="button">Contact</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
include "footer.php";
?>
