<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Portfolio</title>
  </head>
  <body>
    <nav class="navbar">
      <div class="navrow">
          <div class="column nav"><a href="#">HOME</a></div>
          <div class="column nav"><a href="#">RESUME</a></div>
          <div class="column nav"><a href="#">PORTFOLIO</a></div>
          <div class="column nav"><a href="#">CONTACT</a></div>
      </div>
    </nav>
    <!-- include menu for types of projects, writing, movie credits, development, etc -->
    <section class="projectdemo">
      <div class="container-fluid"><h3>placeholder - Project 1</h3>
          <img class="projectimg" src="img/technology-background.jpg">
      </div>
      <div class="container2"><h3>placeholder - Project 2</h3></div>
          <img class="projectimg" src="img/technology-background2.jpg">
      </div>
      <div class="container3"><h3>placeholder - Project 3</h3></div>
          <img class="projectimg" src="img/technology-in-the-hands.jpg">
      </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://static.filestackapi.com/v3/filestack.js"></script>
<script>
    var client = filestack.init('A0rXTGEEfTomsvdCji8lnz');
    function showPicker() {
        client.pick({
        }).then(function(result) {
            console.log(JSON.stringify(result.filesUploaded))
        });
    }
</script>
<input type="button" value="Upload" onclick="showPicker()" />

  </body>
  <hr>
  <footer>
    <div class="container">Footer Placeholder </div>
    <div>[Links Placeholder] LINKED IN, IMDB, OTHER SOCIAL MEDIA ICONS</div>
  </footer>
</html>
