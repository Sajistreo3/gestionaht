<?php $sites = $db->query("SELECT * FROM tbl_sites WHERE `status` = '1'")->fetchAll(PDO::FETCH_ASSOC); ?>


<nav id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <!--        <a href="#">About</a>-->
    <!--        <a href="#">Services</a>-->
    <!--        <a href="#">Clients</a>-->
    <!--        <a href="#">Contact</a>-->
    <p id="date" class="title"></p>
    <hr>
    <div class="info">
        <h2>Site :</h2>
        <form action="" method="post">
            <select id="site" class="site" name="site">
                <option value="" hidden>Selectionné un Site</option>
                <?php foreach ($sites as $site): ?>
                    <option value="<?= $site['site_number'] ?>"><?= "(" . $site['site_number'].") " .substr($site['address'],15,39) ?></option>
                <?php endforeach; ?>
            </select>
            <h2>Gerent :</h2>
            <input type="hidden" value="" name="sitenum">
            <input class="sidenavi" type="text" name="manager" value="" readonly>
            <h2>Address :</h2>
            <input class="sidenavi" type="text" name="address" value="" readonly>
            <h2>Inspecté par :</h2>
            <input class="sidenavi" type="text" name="inspectby" value="Martin Laporte" readonly>
        </form>
        <script>
            $("#site").on("change", function(){
                var id = $(this).val();
                console.log("ID: " + id);
                $.post("core.php", {action:"changeSite", id:id}, function(data){
                    var site = JSON.parse(data);
                    $("[name='manager']").val(site.manager);
                    $("[name='address']").val(site.address);
                    $("[name='sitenum']").val(site.sitenum);
                    $("[name='site']").val(site.id);
                    $(".inspectios [name='site']").val(site.id);
                    console.log(site);
                });
            });
        </script>

    </div>
</nav>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "400px";
        document.getElementById("mySidenav").style.paddingLeft = "30px";
        //document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "#131313";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav").style.paddingLeft = "0";
        //document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "#252628";
        location.reload();
    }
</script>
