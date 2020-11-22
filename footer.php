<br><br><br><br>
  <div class="footer">
      <div id="button"></div>
      <div id="container">
          <div id="cont">
              <div class="footer_center">
<!--                  <h3>Classy footer text</h3>-->
                  <h3> &copy; 2020 <a href="https://www.linkedin.com/in/shajeed-islam-373869153/">Shajeed</a> | <a href="https://www.linkedin.com/in/shardul-bhatt-173a9614a/">Shardul</a><a href="resetpassword/resetpass.html">test</a></h3>
              </div>
          </div>
      </div>
  </div>
</body>
  <script>
      // Add the following code if you want the name of the file appear on select
      $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });
  </script>
</html>
